<?php
header("HTTP/1.1 404 Not Found");
$page_slug = "404";
$page_title = "404";
$page_description = "404";
ob_start();
?>
<section id="error404" class="min-vh-100 w-100 d-flex align-items-center justify-content-center bg-light-subtle py-5">
    <div class="container my-auto">
        <div class="row justify-content-center text-center reveal-on-scroll">
            <div class="col-lg-8 col-xl-6">

                <!-- Badge Header -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border border-secondary-subtle shadow-sm mb-4">
                    <i class="bi bi-lightning-charge-fill text-accent"></i>
                    <span class="small fw-bold text-uppercase letter-spacing-1 text-secondary">404 Error • Power Interrupted</span>
                </div>

                <!-- Cute Electrical Graphic Image -->
                <div class="illustration-box mb-4 mx-auto" style="max-width: 260px;">
                    <img src="/assets/images/404.png" alt="404 Page Not Found" class="img-fluid">
                </div>

                <!-- Section Main Title -->
                <h1 class="display-3 fw-black text-uppercase tracking-tight text-body mb-3" style="line-height: 1.1;">
                    Whoops!!! Its A <br>
                    <span class="text-accent">Short Circuit!</span>
                </h1>

                <!-- Subtitle Description -->
                <p class="text-muted lead mb-4">
                    The page you're searching for has been disconnected or moved. Don't worry, our team is always on standby to get you back on track.
                </p>

                <!-- Action Buttons -->
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center pt-2">
                    <a href="/" class="btn btn-power btn-lg rounded-pill px-4 py-3 text-uppercase">
                        <i class="bi bi-house-door-fill me-2"></i> Back To Homepage
                    </a>
                    <a href="tel:0405005869" class="btn btn-outline-secondary btn-lg rounded-pill px-4 py-3 text-uppercase fw-bold">
                        <i class="bi bi-telephone-fill me-2 text-accent"></i> Call 0405 005 869
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
