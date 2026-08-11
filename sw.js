const CACHE_NAME = 'sparky-v1.0.1'; // Bumped version to force a fresh install and re-cache
const OFFLINE_URL = '/offline.php';

// Adjust these paths to match your actual folder structure
const ASSETS_TO_CACHE = [
    '/',
    '/index.php',
    OFFLINE_URL,
    '/assets/css/bootstrap.min.css',
    '/assets/css/override.css',
    '/manifest.json'
];

// 1. Install Event - Force-cache the Offline Page
self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(async (cache) => {
            // Pre-cache core assets individually
            for (const url of ASSETS_TO_CACHE) {
                try {
                    const response = await fetch(url);
                    if (response.ok) {
                        await cache.put(url, response);
                    } else {
                        console.warn(`[PWA SW] Failed to fetch ${url} (Status: ${response.status})`);
                    }
                } catch (err) {
                    console.error(`[PWA SW] Could not cache ${url}`, err);
                }
            }
        })
    );
    self.skipWaiting();
});

// 2. Activate Event - Clean Up Old Caches
self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cache) => {
                    if (cache !== CACHE_NAME) {
                        return caches.delete(cache);
                    }
                })
            );
        })
    );
    self.clients.claim();
});

// 3. Fetch Event - Handles Navigations & Offline Fallback
self.addEventListener('fetch', (event) => {
    if (event.request.method !== 'GET') return;
    if (!event.request.url.startsWith('http')) return;

    // Handle HTML/PHP Page Navigations
    if (event.request.mode === 'navigate') {
        event.respondWith(
            fetch(event.request)
                .then((networkResponse) => {
                    if (networkResponse.status === 200) {
                        const responseClone = networkResponse.clone();
                        caches.open(CACHE_NAME).then((cache) => {
                            cache.put(event.request, responseClone);
                        });
                    }
                    return networkResponse;
                })
                .catch(async () => {
                    const cache = await caches.open(CACHE_NAME);

                    // Step A: Force offline.php to show first when the network drops
                    const offlinePage = await cache.match(OFFLINE_URL);
                    if (offlinePage) return offlinePage;

                    // Step B: Fall back to requested page only if offline.php is missing from cache
                    const cachedPage = await cache.match(event.request);
                    if (cachedPage) return cachedPage;

                    // Step C: Inline HTML Safety Net (Triggers if neither are cached)
                    return new Response(
                        `<!DOCTYPE html>
                        <html lang="en">
                        <head><meta charset="UTF-8"><title>Offline - 24/7 Sparky</title></head>
                        <body style="font-family:sans-serif; text-align:center; padding:50px; background:#0d0f12; color:#fff;">
                            <h1 style="color:#facc15;">You are currently offline</h1>
                            <p>Please check your internet connection or call us directly at <strong>0405 005 869</strong>.</p>
                            <button onclick="window.location.reload()" style="padding:10px 20px; background:#facc15; border:none; font-weight:bold; cursor:pointer;">Retry</button>
                        </body>
                        </html>`,
                        { headers: { 'Content-Type': 'text/html; charset=utf-8' } }
                    );
                })
        );
        return;
    }

    // Handle Static Assets (CSS, JS, Images)
    event.respondWith(
        fetch(event.request)
            .then((networkResponse) => {
                if (networkResponse.status === 200) {
                    const responseClone = networkResponse.clone();
                    caches.open(CACHE_NAME).then((cache) => {
                        cache.put(event.request, responseClone);
                    });
                }
                return networkResponse;
            })
            .catch(() => caches.match(event.request))
    );
});