<?php
$is_live = (strpos($_SERVER['HTTP_HOST'], '247sparky.com.au') !== false || strpos($_SERVER['HTTP_HOST'], '24sevensparky.com.au') !== false);
if ($is_live):
    // Add production tracking scripts here (e.g. Google Tag Manager / Analytics)
endif;

$no_index_pages = [
        'sitemap.php', 'process-grant.php', 'process-form.php', 'config.php',
        'header.php', 'footer.php', '404.php', '403.php', '410.php',
        '500.php', '503.php', 'services-bkp.php'
];
$current_filename = basename($_SERVER['PHP_SELF']);
$is_private = in_array($current_filename, $no_index_pages);

// Build Canonical URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$canonical_url = $protocol . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    (function() {
        // Get saved theme from localStorage, or default to system preference
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        const theme = savedTheme ? savedTheme : (systemPrefersDark ? 'dark' : 'light');

        // Apply theme instantly before DOM paints
        // For Bootstrap 5.3+ data attribute:
        document.documentElement.setAttribute('data-bs-theme', theme);

        // OR if you use a CSS class on body/html (e.g., .dark-mode or .dark):
        // if (theme === 'dark') document.documentElement.classList.add('dark-mode');
    })();
</script>
<title><?php echo htmlspecialchars($page_title ?? '24/7 Sparky'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description ?? ''); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($page_keywords ?? ''); ?>">
<meta name="author" content="Smart Servix">

<?php if ($is_private): ?>
    <meta name="robots" content="noindex, nofollow">
<?php else: ?>
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
<?php endif; ?>

<!-- Open Graph / Social Sharing -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title ?? '24/7 Sparky'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description ?? ''); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:image" content="<?php echo $protocol . $_SERVER['HTTP_HOST']; ?>/assets/images/web-app-manifest-512x512">

<!-- Favicons & Touch Icons -->
<link rel="icon" type="image/png" href="/assets/images/favicon-96x96.webp" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg" />
<link rel="shortcut icon" href="/assets/images/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.webp" />

<!-- PWA Primary Meta Tags & Manifest -->
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#facc15">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="24/7 Sparky">

<!-- Preconnects -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
<link rel="preconnect" href="https://ka-f.fontawesome.com" crossorigin>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Allan:wght@400;700&family=Anton&family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

<!-- CSS Stylesheets -->
<link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="preload" onload='this.onload=null,this.rel="stylesheet"' as="style">
<noscript><link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet"></noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="<?php echo asset('css/override.css'); ?>" rel="stylesheet">

<!-- External Map CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />

<!-- FontAwesome JS Kit -->
<script crossorigin="anonymous" defer src="https://kit.fontawesome.com/0b217c8a25.js"></script>

<!-- Service Worker Registration Script -->
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
                .then((reg) => console.log('24/7 Sparky Service Worker Registered:', reg.scope))
                .catch((err) => console.error('Service Worker Registration Failed:', err));
        });
    }
</script>