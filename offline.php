<?php
$page_slug = "offline";
$page_title = "Offline • Connection Lost";
$page_description = "It looks like you have lost internet connection. Check your connection and try reloading.";
ob_start();
?>
    <section id="offlinePage" class="min-vh-100 w-100 d-flex align-items-center justify-content-center bg-body-tertiary py-5">
        <div class="container my-auto">
            <div class="row justify-content-center text-center reveal-on-scroll">
                <div class="col-lg-8 col-xl-6">

                    <!-- Badge Header -->
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white border border-secondary-subtle shadow-sm mb-4">
                        <i class="bi bi-wifi-off text-accent"></i>
                        <span class="small fw-bold text-uppercase letter-spacing-1 text-secondary">Connection Lost • You Are Offline</span>
                    </div>

                    <!-- Cute Offline Graphic Image -->
                    <div class="illustration-box illustration-box-md mb-4 mx-auto">
                        <img src="assets/images/offline.png" alt="Offline - Connection Lost" class="img-fluid">
                    </div>

                    <!-- Section Main Title -->
                    <h1 class="display-3 fw-black text-uppercase tracking-tight text-body mb-3 title-tight">
                        No Internet <br>
                        <span class="text-accent">Connection!</span>
                    </h1>

                    <!-- Subtitle Description -->
                    <p class="text-muted lead mb-4">
                        It looks like you've gone offline. Please check your network or Wi-Fi connection and try reloading the page.
                    </p>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center pt-2">
                        <button onclick="window.location.reload();" class="btn btn-power btn-lg rounded-pill px-4 py-3 text-uppercase">
                            <i class="bi bi-arrow-clockwise me-2"></i> Retry Connection
                        </button>
                        <a href="tel:0405005869" class="btn btn-outline-secondary btn-lg rounded-pill px-4 py-3 text-uppercase fw-bold">
                            <i class="bi bi-telephone-fill me-2 text-accent"></i> Call Emergency Line
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
include "includes/partials/app.php";
?>