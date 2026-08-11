<!-- ==========================================
     BOOTSTRAP-OPTIMIZED 24/7 SPARKY LOADER
     ========================================== -->
<div id="electrical-loader"
     class="position-fixed top-0 start-0 w-100 vh-100 d-flex align-items-center justify-content-center bg-body"
     style="z-index: 9999; transition: opacity 0.5s ease, visibility 0.5s ease;">
    <div class="text-center" style="max-width: 320px; width: 90%;">

        <!-- Electrical Circuit & Lightning SVG Animation -->
        <div class="position-relative mx-auto mb-4" style="width: 120px; height: 120px;">
            <svg class="w-100 h-100 overflow-visible" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <!-- Outer Track -->
                <circle cx="100" cy="100" r="85" fill="none" stroke="currentColor" stroke-width="6"
                        class="text-secondary opacity-25"/>

                <!-- Rotating Pulse Ring -->
                <circle cx="100" cy="100" r="85" fill="none" stroke="currentColor" stroke-width="6" stroke-dasharray="100 400"
                        stroke-linecap="round" class="text-accent sparky-ring"/>

                <!-- Lightning Bolt -->
                <path class="text-accent sparky-bolt" fill="currentColor" stroke="currentColor" stroke-width="2"
                      stroke-linejoin="round" d="M115 15 L55 110 L95 110 L80 185 L145 90 L105 90 Z"/>

                <!-- Arc Spark Dots -->
                <circle class="text-accent sparky-spark" cx="45" cy="70" r="3.5"/>
                <circle class="text-accent sparky-spark spark-delay-1" cx="155" cy="60" r="2.5"/>
                <circle class="text-accent sparky-spark spark-delay-2" cx="160" cy="130" r="3"/>
            </svg>
        </div>

        <!-- Business Branding -->
        <div class="mb-4">
            <h4 class="fw-black text-uppercase tracking-wider text-body mb-1">24/7 SPARKY</h4>
            <p id="loader-status" class="text-uppercase tracking-widest text-body-secondary small fw-bold mb-0" style="font-size: 0.7rem;">
                Powering up system...
            </p>
        </div>

        <!-- Bootstrap Progress Bar Component -->
        <div class="progress bg-secondary-subtle" style="height: 4px;">
            <div id="loader-progress" class="progress-bar bg-accent shadow-sm" role="progressbar"
                 style="width: 0%; transition: width 0.1s linear;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
</div>

<style>
    /* Essential Keyframe Animations Only (Not natively covered by Bootstrap standard utilities) */
    .sparky-ring {
        transform-origin: center;
        animation: sparkyRotate 1.8s linear infinite;
        filter: drop-shadow(0 0 6px rgb(166 255 0 / 0.99));
    }

    .sparky-bolt {
        transform-origin: center;
        animation: sparkyPulse 1.2s ease-in-out infinite alternate;
        filter: drop-shadow(0 0 6px rgb(166 255 0 / 0.99));
    }

    .sparky-spark {
        fill: currentColor;
        animation: sparkyFlash 0.8s ease-in-out infinite alternate;
    }

    .spark-delay-1 {
        animation-delay: 0.25s;
    }

    .spark-delay-2 {
        animation-delay: 0.5s;
    }

    @keyframes sparkyRotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes sparkyPulse {
        0% {
            transform: scale(0.96);
            opacity: 0.8;
        }
        100% {
            transform: scale(1.05);
            opacity: 1;
            filter: drop-shadow(0 0 16px rgb(166 255 0 / 0.99));
        }
    }

    @keyframes sparkyFlash {
        0% {
            opacity: 0.2;
            transform: scale(0.8);
        }
        100% {
            opacity: 1;
            transform: scale(1.3);
        }
    }
</style>

<script>
    (function () {
        const COOKIE_NAME = 'sparky_loader_shown';
        const loader = document.getElementById('electrical-loader');
        const progressBar = document.getElementById('loader-progress');
        const statusText = document.getElementById('loader-status') || document.querySelector('#electrical-loader p');

        // Helper function to check if cookie exists
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // If cookie exists (loader was shown in the last 2 minutes), remove loader immediately
        if (getCookie(COOKIE_NAME)) {
            if (loader) loader.remove();
        } else {
            document.addEventListener('DOMContentLoaded', function () {
                let progress = 0;
                const duration = 2000;
                const intervalTime = 30;
                const increment = 100 / (duration / intervalTime);

                function updateStatusMessage(percent) {
                    if (!statusText) return;

                    if (percent < 30) {
                        statusText.innerText = 'Powering up system...';
                    } else if (percent < 65) {
                        statusText.innerText = 'Scanning for electrical issues...';
                    } else if (percent < 90) {
                        statusText.innerText = 'Locating area sparkies...';
                    } else {
                        statusText.innerText = 'Are you the one needing a fix?';
                    }
                }

                const progressInterval = setInterval(function () {
                    progress += increment;

                    updateStatusMessage(progress);

                    if (progress >= 100) {
                        progress = 100;
                        clearInterval(progressInterval);

                        // Set cookie to expire in 120 seconds (2 minutes)
                        document.cookie = `${COOKIE_NAME}=true; max-age=120; path=/; SameSite=Lax`;

                        if (loader) {
                            loader.classList.add('opacity-0');
                            setTimeout(function () {
                                loader.remove();
                            }, 500);
                        }
                    }

                    if (progressBar) {
                        progressBar.style.width = progress + '%';
                        progressBar.setAttribute('aria-valuenow', Math.round(progress));
                    }
                }, intervalTime);
            });
        }
    })();
</script>