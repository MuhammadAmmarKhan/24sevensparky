<?php
$page_slug = "home";
$page_title = "24/7 Sparky | #1 Emergency Electricians Sydney";
$page_description = "Sydney’s top-rated 24/7 emergency electricians for residential and commercial services. Upfront pricing, 60-min rapid dispatch, and 100% safety guarantee.";
$page_keywords = "Sydney electrician, 24/7 emergency electrician Sydney, fast electrician Sydney, licensed sparky near me, commercial electrical contractors Sydney";
ob_start(); ?>

<section class="position-relative w-100 min-vh-100 overflow-hidden bg-body d-flex flex-column justify-content-between pt-5 hero-banner-section" xmlns="http://www.w3.org/1999/html">

    <!-- Background Image Layer with Theme-Adaptive Vignette -->
    <div class="hero-bg-wrapper position-absolute top-0 start-0 w-100 h-100 z-0 overflow-hidden">
        <img data-gsap="bg-img" src="/assets/images/homebanner13.webp" alt="24Seven Sparky Sydney Electrical Services" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 opacity-25">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay-gradient"></div>
    </div>

    <!-- Top Spacer for Floating Header Alignment -->
    <div class="pt-4 pt-md-5 position-relative z-1 flex-shrink-0"></div>

    <!-- Main Hero Content (Vertically Centered Flex Container) -->
    <div class="container position-relative z-1 text-start py-4 my-auto px-4 px-md-5 flex-grow-1 d-flex align-items-center">
        <div class="row align-items-center justify-content-between g-4 g-xl-5 w-100">

            <!-- LEFT COLUMN: Value Proposition & Hero Copy -->
            <div class="col-lg-6 col-xl-6 col-xxl-6">

                <!-- Live Status Badge -->
                <div data-gsap="hero-item" class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-body-tertiary border border-body-subtle text-body-secondary small fw-bold text-uppercase tracking-wider mb-4 shadow-sm backdrop-blur">
                    <span class="live-pulse-dot bg-accent"></span>
                    <span>Sydney's Trusted Local Electricians</span>
                </div>

                <!-- Display Heading (H1) -->
                <h1 data-gsap="hero-item" class="display-1 fw-black text-uppercase tracking-tighter text-body mb-3 lh-1" style="font-size: calc(2.2rem + 3vw);">
                    Fast, Reliable<br>
                    <span class="text-accent">Electricians.</span>
                </h1>

                <!-- Subtitle Lead / Supporting Copy -->
                <p data-gsap="hero-item" class="lead text-body-secondary mt-3 mb-4" style="max-width: 580px; font-size: 1.05rem; line-height: 1.6;">
                    Whether it's an unexpected power outage, a faulty switchboard, or a planned electrical upgrade, <strong>24Seven Sparky</strong> delivers safe, professional electrical services for homes and businesses across Sydney. From emergency call-outs to complete installations, our licensed electricians arrive on time, provide upfront pricing, and get the job done right the first time.
                </p>

                <!-- Key Feature Highlights Grid -->
                <div class="d-flex flex-column gap-2 mt-3 mb-4">
                    <div data-gsap="feature-item" class="d-flex align-items-center gap-3">
                        <span class="d-inline-flex align-items-center justify-content-center bg-accent text-dark rounded-circle flex-shrink-0" style="width: 24px; height: 24px;">
                            <i class="bi bi-check-lg fw-bold"></i>
                        </span>
                        <span class="fw-semibold text-body">24/7 Emergency Electrical Repairs</span>
                    </div>

                    <div data-gsap="feature-item" class="d-flex align-items-center gap-3">
                        <span class="d-inline-flex align-items-center justify-content-center bg-accent text-dark rounded-circle flex-shrink-0" style="width: 24px; height: 24px;">
                            <i class="bi bi-check-lg fw-bold"></i>
                        </span>
                        <span class="fw-semibold text-body">Residential, Commercial &amp; Strata Electrical Services</span>
                    </div>

                    <div data-gsap="feature-item" class="d-flex align-items-center gap-3">
                        <span class="d-inline-flex align-items-center justify-content-center bg-accent text-dark rounded-circle flex-shrink-0" style="width: 24px; height: 24px;">
                            <i class="bi bi-check-lg fw-bold"></i>
                        </span>
                        <span class="fw-semibold text-body">Upfront Pricing • Licensed &amp; Fully Insured</span>
                    </div>
                </div>

                <!-- Social Proof Bar -->
                <div data-gsap="hero-item" class="d-flex align-items-center gap-3 pt-1 mb-4">
                    <div class="d-flex text-warning gap-1 fs-6">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="small text-body-secondary fw-semibold">
                        Trusted by Sydney homeowners and businesses with 5-star service and dependable workmanship.
                    </div>
                </div>

                <!-- Action Buttons & Secondary CTA -->
                <div data-gsap="hero-item" class="d-flex align-items-center flex-wrap gap-3 pt-2 mb-4">


                    <a href="tel:0405005869" class="btn btn-power px-4 py-3 rounded-pill fw-bold text-uppercase tracking-wider shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill text-black"></i> Call Now
                    </a>
                    <div class="pulse-button-wrapper position-relative d-flex align-items-center justify-content-center">
                        <div class="pulse-ring"></div>
                        <div class="pulse-play-btn d-flex align-items-center justify-content-center bg-body-tertiary text-body border border-body-subtle shadow-sm rounded-circle" style="width: 44px; height: 44px;">
                            <i class="bi bi-play-fill fs-4 text-accent ms-1"></i>
                        </div>
                    </div>
                    <span class="text-uppercase extra-small fw-bold tracking-wider text-body-secondary hover-text-toggle">Watch Our Team In Action</span>

                    <div class="d-flex align-items-center gap-2 ms-md-2 execution-video-trigger" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#heroVideoModal">

                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Interactive Form Playground Card -->
            <style>
                /* Custom styling for standard and active state */
                .btn-outline-custom {
                    background-color: var(--bs-body-bg);
                    border: 1px solid var(--bs-border-color-translucent);
                    color: var(--bs-body-color);
                    transition: all 0.2s ease-in-out;
                }

                .btn-outline-custom:hover {
                    border-color: var(--bs-primary);
                }

                /* Active selected state matching green accent styling */
                .btn-check:checked + .btn-outline-custom {
                    background-color: rgba(132, 204, 22, 0.12) !important;
                    border-color: #84cc16 !important;
                    color: var(--bs-body-color) !important;
                }

                .btn-check:checked + .btn-outline-custom .card-check-badge {
                    display: block !important;
                }

                /* Error Validation State */
                .wizard-step.has-error .btn-outline-custom {
                    border-color: var(--bs-danger) !important;
                }

                @keyframes shakeError {
                    0%, 100% { transform: translateX(0); }
                    20%, 60% { transform: translateX(-4px); }
                    40%, 80% { transform: translateX(4px); }
                }

                .wizard-step.has-error {
                    animation: shakeError 0.35s ease-in-out;
                }

                /* Step display management */
                .wizard-step {
                    display: none;
                }

                .wizard-step.active {
                    display: block;
                    animation: fadeIn 0.3s ease-in-out;
                }

                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(4px); }
                    to { opacity: 1; transform: translateY(0); }
                }
            </style>

            <div class="col-lg-6 col-xl-5 col-xxl-5">
                <div data-gsap="form-card" class="card border border-body-subtle shadow-lg rounded-4 overflow-hidden bg-body-tertiary backdrop-blur">

                    <!-- Header with Dynamic Step Counter -->
                    <div class="card-header bg-black text-white p-4 border-bottom border-dark-subtle">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="badge bg-accent text-dark fw-bold text-uppercase px-2 py-1 rounded-pill" style="font-size: 0.65rem;">
                    Instant Estimate
                </span>
                            <span class="small text-white-50 fw-semibold" id="stepIndicatorText">Step 1 of 4</span>
                        </div>
                        <h4 class="fw-light text-uppercase m-0 text-white">Get Your Free Quote</h4>
                        <p class="small fw-normal text-white-50 m-0 mt-1">Tell us what you need, and our team will provide a fast, no-obligation estimate. Whether it's an urgent repair or a planned project, we're here to help.</p>
                    </div>

                    <div class="card-body p-4">
                        <?php if (isset($_GET['status'])): ?>
                            <?php if ($_GET['status'] === 'success'): ?>
                                <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <strong>Success!</strong> <?php echo htmlspecialchars($_GET['msg'] ?? 'Your quote request has been sent.'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php elseif ($_GET['status'] === 'danger'): ?>
                                <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    <strong>Error:</strong> <?php echo htmlspecialchars($_GET['msg'] ?? 'Something went wrong.'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <form id="gridConfiguratorForm" action="/process-quote.php" method="POST" novalidate>

                            <!-- STEP 1: Main Category Selection -->
                            <div class="wizard-step active" data-step="1">
                                <label class="form-label text-uppercase fw-bold tracking-wider text-body-secondary mb-3" style="font-size: 0.75rem;">
                                    1. Select Primary Services (Select one or more)
                                </label>

                                <div class="row g-2">
                                    <!-- Electrical -->
                                    <div class="col-4">
                                        <input type="checkbox" class="btn-check category-trigger" id="catElectrical" name="primary_categories[]" value="electrical" autocomplete="off">
                                        <label class="btn btn-outline-custom w-100 p-3 text-center rounded-3 d-flex flex-column align-items-center justify-content-center h-100 position-relative" for="catElectrical">
                                <span class="card-check-badge position-absolute top-0 end-0 m-1 d-none">
                                    <i class="bi bi-check-circle-fill text-accent"></i>
                                </span>
                                            <svg class="mb-2 text-accent" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                                            </svg>
                                            <span class="fw-bold small text-body d-block">Electrical</span>
                                        </label>
                                    </div>

                                    <!-- Solar & Battery -->
                                    <div class="col-4">
                                        <input type="checkbox" class="btn-check category-trigger" id="catSolar" name="primary_categories[]" value="solar" autocomplete="off">
                                        <label class="btn btn-outline-custom w-100 p-3 text-center rounded-3 d-flex flex-column align-items-center justify-content-center h-100 position-relative" for="catSolar">
                                <span class="card-check-badge position-absolute top-0 end-0 m-1 d-none">
                                    <i class="bi bi-check-circle-fill text-accent"></i>
                                </span>
                                            <svg class="mb-2 text-accent" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="4"></circle>
                                                <path d="M12 2v2"></path><path d="M12 20v2"></path>
                                                <path d="m4.93 4.93 1.41 1.41"></path><path d="m17.66 17.66 1.41 1.41"></path>
                                                <path d="M2 12h2"></path><path d="M20 12h2"></path>
                                                <path d="m6.34 17.66-1.41 1.41"></path><path d="m19.07 4.93-1.41 1.41"></path>
                                            </svg>
                                            <span class="fw-bold small text-body d-block">Solar &amp; Battery</span>
                                        </label>
                                    </div>

                                    <!-- EV Fast Charger -->
                                    <div class="col-4">
                                        <input type="checkbox" class="btn-check category-trigger" id="catEV" name="primary_categories[]" value="ev" autocomplete="off">
                                        <label class="btn btn-outline-custom w-100 p-3 text-center rounded-3 d-flex flex-column align-items-center justify-content-center h-100 position-relative" for="catEV">
                                <span class="card-check-badge position-absolute top-0 end-0 m-1 d-none">
                                    <i class="bi bi-check-circle-fill text-accent"></i>
                                </span>
                                            <svg class="mb-2 text-accent" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-1.1 0-2 .9-2 2v7c0 .6.4 1 1 1h2"></path>
                                                <circle cx="7" cy="17" r="2"></circle><circle cx="17" cy="17" r="2"></circle>
                                                <path d="M9 17h6"></path><path d="M14 2v4"></path><path d="M12 4h4"></path>
                                            </svg>
                                            <span class="fw-bold small text-body d-block">EV Charger</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 2: Sub-Services Details -->
                            <div class="wizard-step" data-step="2">
                                <!-- Electrical Options -->
                                <div id="electricalSubSection" class="d-none mb-4">
                                    <div class="d-flex align-items-center gap-2 mb-3">
        <span class="badge bg-accent text-dark rounded-circle p-1 d-inline-flex">
            <i class="bi bi-lightning-charge-fill"></i>
        </span>
                                        <h6 class="fw-bold m-0 text-body">Electrical Services Needed</h6>
                                    </div>
                                    <div class="row g-2 mb-3 sub-group">
                                        <!-- Power Points & Switches -->
                                        <div class="col-6">
                                            <input type="checkbox" class="btn-check" name="electrical_services[]" id="elecPower" value="Power Points & Switches">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="elecPower">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="2" y="2" width="20" height="20" rx="4" ry="4"></rect>
                                                    <line x1="8" y1="12" x2="8" y2="16"></line>
                                                    <line x1="16" y1="12" x2="16" y2="16"></line>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Power Points &amp; Switches</span>
                                            </label>
                                        </div>

                                        <!-- Switchboard & Safety -->
                                        <div class="col-6">
                                            <input type="checkbox" class="btn-check" name="electrical_services[]" id="elecSwitchboard" value="Switchboard & RCD">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="elecSwitchboard">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                                    <rect x="8" y="8" width="8" height="8" rx="1"></rect>
                                                    <path d="M12 2v2"></path>
                                                    <path d="M12 20v2"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Switchboard &amp; Safety</span>
                                            </label>
                                        </div>

                                        <!-- LED & Downlights -->
                                        <div class="col-6">
                                            <input type="checkbox" class="btn-check" name="electrical_services[]" id="elecLighting" value="LED & Downlights">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="elecLighting">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M9 18h6"></path>
                                                    <path d="M10 22h4"></path>
                                                    <path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1.55.59 2.87 1.5 3.5.76.76 1.23 1.52 1.41 2.5"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">LED &amp; Downlights</span>
                                            </label>
                                        </div>

                                        <!-- Rewiring & Renovations -->
                                        <div class="col-6">
                                            <input type="checkbox" class="btn-check" name="electrical_services[]" id="elecRewiring" value="Rewiring & Renovations">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="elecRewiring">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M18 12h.01"></path>
                                                    <path d="M6 12h.01"></path>
                                                    <path d="M12 6a6 6 0 0 1 6 6 6 6 0 0 1-6 6 6 6 0 0 1-6-6 6 6 0 0 1 6-6z"></path>
                                                    <path d="M4.22 4.22l15.56 15.56"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Rewiring &amp; Reno</span>
                                            </label>
                                        </div>

                                        <!-- Ceiling & Exhaust Fans -->
                                        <div class="col-6">
                                            <input type="checkbox" class="btn-check" name="electrical_services[]" id="elecFans" value="Ceiling & Exhaust Fans">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="elecFans">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                    <path d="M12 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0z"></path>
                                                    <path d="M12 12a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"></path>
                                                    <path d="M12 12a3 3 0 1 0-6 0 3 3 0 0 0 6 0z"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Ceiling &amp; Exhaust Fans</span>
                                            </label>
                                        </div>

                                        <!-- Emergency Fault / Repair -->
                                        <div class="col-6">
                                            <input type="checkbox" class="btn-check" name="electrical_services[]" id="elecEmergency" value="Emergency Repair">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="elecEmergency">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3z"></path>
                                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Emergency Fault / Repair</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Solar Options -->
                                <div id="solarSubSection" class="d-none mb-4 pt-2 border-top border-body-subtle">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <span class="badge bg-accent text-dark rounded-circle p-1 d-inline-flex"><i class="bi bi-sun-fill"></i></span>
                                        <h6 class="fw-bold m-0 text-body">Solar &amp; Battery Details</h6>
                                    </div>

                                    <label class="form-label text-uppercase fw-bold text-body-secondary mb-2" style="font-size: 0.7rem;">Roof Type</label>
                                    <div class="row mb-3 g-2 sub-group">
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="roofType" id="roofGable" value="gable">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3" for="roofGable">
                                                <svg class="d-block mx-auto mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 21 9-18 9 18H3z"/></svg>
                                                <span class="extra-small fw-bold text-body">Gable</span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="roofType" id="roofFlat" value="flat">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3" for="roofFlat">
                                                <svg class="d-block mx-auto mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 18h20V6H2v12z"/></svg>
                                                <span class="extra-small fw-bold text-body">Flat</span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="roofType" id="roofPitched" value="pitched">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3" for="roofPitched">
                                                <svg class="d-block mx-auto mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20 12 4l10 16H2z"/></svg>
                                                <span class="extra-small fw-bold text-body">Pitched</span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="roofType" id="roofMisc" value="misc">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3" for="roofMisc">
                                                <svg class="d-block mx-auto mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3z"/></svg>
                                                <span class="extra-small fw-bold text-body">Other</span>
                                            </label>
                                        </div>
                                    </div>

                                    <label class="form-label text-uppercase fw-bold text-body-secondary mb-2" style="font-size: 0.7rem;">Roof Direction</label>
                                    <div class="row g-2 sub-group">
                                        <!-- North -->
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="houseFacing" id="facingNorth" value="north">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="facingNorth">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polygon points="12 6 15 12 12 10 9 12 12 6" fill="currentColor"></polygon>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">North</span>
                                            </label>
                                        </div>

                                        <!-- East / West -->
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="houseFacing" id="facingEastWest" value="east_west">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="facingEastWest">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M8 12h8"></path>
                                                    <path d="m10 10-2 2 2 2"></path>
                                                    <path d="m14 10 2 2-2 2"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">East/West</span>
                                            </label>
                                        </div>

                                        <!-- South -->
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="houseFacing" id="facingSouth" value="south">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="facingSouth">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polygon points="12 18 15 12 12 14 9 12 12 18" fill="currentColor"></polygon>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">South</span>
                                            </label>
                                        </div>

                                        <!-- Unsure -->
                                        <div class="col-6 col-sm-3">
                                            <input type="radio" class="btn-check" name="houseFacing" id="facingUnsure" value="unsure">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="facingUnsure">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Unsure</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- EV Options -->
                                <div id="evSubSection" class="d-none mb-4 pt-2 border-top border-body-subtle">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <span class="badge bg-accent text-dark rounded-circle p-1 d-inline-flex"><i class="bi bi-ev-front-fill"></i></span>
                                        <h6 class="fw-bold m-0 text-body">EV Charger Setup</h6>
                                    </div>

                                    <div class="row g-2 sub-group">
                                        <!-- Tesla Wall -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="evBrand" id="evTesla" value="tesla">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="evTesla">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M12 2L5 6v12l7 4 7-4V6l-7-4z"></path>
                                                    <path d="M12 8v8"></path>
                                                    <path d="M8 10h8"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body d-block">Tesla Wall</span>
                                            </label>
                                        </div>

                                        <!-- Bring My Own -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="evBrand" id="evOther" value="other_byo">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="evOther">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                                </svg>
                                                <span class="extra-small fw-bold text-body d-block">Bring My Own</span>
                                            </label>
                                        </div>

                                        <!-- Not Sure -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="evBrand" id="evNotSure" value="not_sure">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="evNotSure">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                </svg>
                                                <span class="extra-small fw-bold text-body d-block">Not Sure</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 3: Property Type & Urgency -->
                            <div class="wizard-step" data-step="3">
                                <!-- Property Type -->
                                <div class="mb-4">
                                    <label class="form-label text-uppercase fw-bold text-body-secondary mb-2" style="font-size: 0.7rem;">Property Type</label>
                                    <div class="row g-2">
                                        <!-- Residential -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="property_type" id="propResidential" value="Residential" checked>
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="propResidential">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Residential</span>
                                            </label>
                                        </div>

                                        <!-- Commercial -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="property_type" id="propCommercial" value="Commercial">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="propCommercial">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                                                    <path d="M9 22v-4h6v4"></path>
                                                    <path d="M8 6h.01"></path>
                                                    <path d="M16 6h.01"></path>
                                                    <path d="M12 6h.01"></path>
                                                    <path d="M12 10h.01"></path>
                                                    <path d="M12 14h.01"></path>
                                                    <path d="M16 10h.01"></path>
                                                    <path d="M16 14h.01"></path>
                                                    <path d="M8 10h.01"></path>
                                                    <path d="M8 14h.01"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Commercial</span>
                                            </label>
                                        </div>

                                        <!-- Strata / Other -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="property_type" id="propStrata" value="Strata / Other">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="propStrata">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18"></path>
                                                    <path d="M6 12H4a2 2 0 0 0-2 2v8"></path>
                                                    <path d="M18 9h2a2 2 0 0 1 2 2v11"></path>
                                                    <path d="M10 6h4"></path>
                                                    <path d="M10 10h4"></path>
                                                    <path d="M10 14h4"></path>
                                                    <path d="M10 18h4"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body">Strata / Other</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Urgency -->
                                <div class="mb-3 pt-2 border-top border-body-subtle">
                                    <label class="form-label text-uppercase fw-bold text-body-secondary mb-2" style="font-size: 0.7rem;">Job Urgency / Timeline</label>
                                    <div class="row g-2">
                                        <!-- Urgent (24/7) -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="urgency" id="urgencyEmergency" value="24/7 Emergency">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="urgencyEmergency">
                                                <svg class="mb-1 text-danger" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                </svg>
                                                <span class="extra-small fw-bold text-body text-danger d-block">Urgent (24/7)</span>
                                            </label>
                                        </div>

                                        <!-- 24–48 Hours -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="urgency" id="urgencySoon" value="24-48 Hours" checked>
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="urgencySoon">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg>
                                                <span class="extra-small fw-bold text-body d-block">24–48 Hours</span>
                                            </label>
                                        </div>

                                        <!-- Flexible -->
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="urgency" id="urgencyFlexible" value="Flexible">
                                            <label class="btn btn-outline-custom w-100 p-2 text-center rounded-3 d-flex flex-column align-items-center justify-content-center" for="urgencyFlexible">
                                                <svg class="mb-1 text-accent" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                    <path d="m9 16 2 2 4-4"></path>
                                                </svg>
                                                <span class="extra-small fw-bold text-body d-block">Flexible</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 4: Contact Details -->
                            <div class="wizard-step" data-step="4">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm rounded-3 py-2 mb-2 bg-body text-body border-body-subtle" name="full_name" id="fullName" placeholder="Your Name *" required>
                                    <input type="tel" class="form-control form-control-sm rounded-3 py-2 mb-2 bg-body text-body border-body-subtle" name="phone_number" id="phoneNumber" placeholder="Phone (04XX XXX XXX) *" required>
                                    <input type="email" class="form-control form-control-sm rounded-3 py-2 mb-2 bg-body text-body border-body-subtle" name="email_address" id="emailAddress" placeholder="Email Address *" required>
                                    <textarea class="form-control form-control-sm rounded-3 py-2 bg-body text-body border-body-subtle" name="job_description" rows="2" placeholder="Brief job details (e.g. power point installation)..."></textarea>
                                </div>
                            </div>

                            <!-- Error Notice Message Container -->
                            <div id="stepErrorMessage" class="alert alert-danger py-2 px-3 mb-0 mt-3 d-none align-items-center gap-2 rounded-3 small" role="alert">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                <span id="errorMessageText">Please select an option to proceed.</span>
                            </div>

                            <!-- Navigation Controls -->
                            <div class="d-flex gap-2 mt-4 pt-3 border-top border-body-subtle">
                                <button type="button" id="prevBtn" class="btn btn-outline-secondary w-50 py-2 rounded-3 fw-bold text-uppercase d-none">
                                    Back
                                </button>
                                <button type="button" id="nextBtn" class="btn btn-power w-100 py-3 rounded-3 fw-bold text-uppercase tracking-wider shadow-sm d-flex align-items-center justify-content-center gap-2">
                                    Next Step <i class="bi bi-arrow-right"></i>
                                </button>
                                <button type="submit" id="submitBtn" class="btn btn-power w-100 py-3 rounded-3 fw-bold text-uppercase tracking-wider shadow-sm d-none align-items-center justify-content-center gap-2">
                                    <i class="bi bi-lightning-charge-fill"></i> Get Instant Estimate
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- 3-Column Bottom Quick Nav Bar -->
    <div data-gsap="footer-nav" class="position-relative z-1 w-100 border-top border-body-subtle bg-body-tertiary backdrop-blur flex-shrink-0">
        <div class="row g-0">
            <div class="col-md-4">
                <a href="/services/" class="d-none d-lg-flex align-items-center justify-content-center gap-3 w-100 py-1 px-3 text-body text-decoration-none border-bottom border-md-bottom-0 border-end border-body-subtle hero-footer-tab">
                    <i class="bi bi-tools fs-4 text-accent tab-icon"></i>
                    <span class="text-uppercase fw-bold tracking-wider small">24/7 Electrical Services</span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/services/" class="d-none d-lg-flex align-items-center justify-content-center gap-3 w-100 py-1 px-3 text-body text-decoration-none border-bottom border-md-bottom-0 border-end border-body-subtle hero-footer-tab">
                    <i class="bi bi-ev-front fs-4 text-accent tab-icon"></i>
                    <span class="text-uppercase fw-bold tracking-wider small">EV Charger Installation</span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/services/" class="d-none d-lg-flex align-items-center justify-content-center gap-3 w-100 py-1 px-3 text-body text-decoration-none hero-footer-tab">
                    <i class="bi bi-lightning-charge fs-4 text-accent tab-icon"></i>
                    <span class="text-uppercase fw-bold tracking-wider small">Solar &amp; Battery Storage</span>
                </a>
            </div>
        </div>
    </div>

</section>
<div class="modal fade" id="heroVideoModal" tabindex="-1" aria-labelledby="heroVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-black border border-white border-opacity-10 rounded-4 overflow-hidden shadow-lg">
            <div class="modal-header border-0 p-3 position-absolute top-0 end-0 z-3">
                <button type="button" class="btn-close btn-close-white bg-black p-2.5 rounded-circle shadow-sm"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 bg-black">
                <div class="ratio ratio-16x9">
                    <iframe id="heroYoutubePlayer"
                            src="https://www.youtube.com/embed/N3MyvV9IN3U?si=LWNcNJjKkxd-uNNM"
                            title="24/7 Sparky Overview Video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Value Proposition & Australian Standards Section -->
<section id="why-choose-us" class="py-5 bg-body position-relative overflow-hidden">

    <div class="container py-4 position-relative z-1">

        <!-- Upper Split: Left Core Pitch + Right 2x2 Feature Matrix -->
        <div class="row g-lg-5 align-items-center mb-5 pb-lg-3">

            <!-- Left Header Column -->
            <div class="col-lg-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border text-body-secondary small fw-bold text-uppercase tracking-wider mb-3 shadow-sm">
                    <i class="fas fa-bolt text-accent"></i>
                    <span>WHY SYDNEY CHOOSES 24SEVEN SPARKY</span>
                </div>

                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-3">
                    Electrical Work Done Right.<br>
                    <span class="text-accent">Service You Can Count On.</span>
                </h2>

                <p class="lead text-body-secondary fs-6 mb-3" style="line-height: 1.7;">
                    When you need an electrician, you don't just want someone who can fix the problem—you want someone you can trust to do it safely, professionally, and without the stress.
                </p>

                <p class="text-body-secondary small mb-4" style="line-height: 1.6;">
                    At 24Seven Sparky, we've built our reputation on honest advice, quality workmanship, and dependable service. Whether we're responding to an emergency call-out, upgrading your switchboard, installing new lighting, or completing a major electrical project, we treat every property with the same care and attention to detail.
                </p>

                <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-body-tertiary border">
                    <div class="flex-shrink-0 bg-accent text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                        <i class="fas fa-shield-halved fs-5"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-body small text-uppercase tracking-wider">Your Peace of Mind Comes First</div>
                        <div class="extra-small text-body-secondary">From the moment you contact us until the job is complete, we're committed to making the entire experience straightforward, transparent, and hassle-free.</div>
                    </div>
                </div>
            </div>

            <!-- Right 2x2 Feature Matrix: The 4 Core Cards -->
            <div class="col-lg-7">
                <div class="row g-3">

                    <!-- CARD 01: Licensed & Fully Insured -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border h-100 position-relative border-start border-accent border-1">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="fw-black fs-4 text-accent">01</span>
                                <i class="fas fa-user-shield fs-4 text-body-secondary"></i>
                            </div>
                            <h5 class="fw-bold text-body mb-2">Licensed &amp; Fully Insured</h5>
                            <p class="small text-body-secondary mb-0">
                                Electrical work should never be left to chance. Every job is completed by qualified electricians who follow Australian Standards, giving you confidence that your property is in safe hands.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 02: Upfront, Honest Pricing -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border h-100 position-relative border-start border-accent border-1">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="fw-black fs-4 text-accent">02</span>
                                <i class="fas fa-tags fs-4 text-body-secondary"></i>
                            </div>
                            <h5 class="fw-bold text-body mb-2">Upfront, Honest Pricing</h5>
                            <p class="small text-body-secondary mb-0">
                                No hidden costs. No unexpected surprises. Before any work begins, we'll explain the job, answer your questions, and provide a clear quote so you know exactly what to expect.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 03: Fast Response Across Sydney -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border h-100 position-relative border-start border-accent border-1">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="fw-black fs-4 text-accent">03</span>
                                <i class="fas fa-clock fs-4 text-body-secondary"></i>
                            </div>
                            <h5 class="fw-bold text-body mb-2">Fast Response Across Sydney</h5>
                            <p class="small text-body-secondary mb-0">
                                Electrical issues can happen when you least expect them. Our responsive team works across Sydney to provide prompt service, minimise downtime, and get your electrical systems back up and running quickly.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 04: Workmanship That Lasts -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border h-100 position-relative border-start border-accent border-1">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="fw-black fs-4 text-accent">04</span>
                                <i class="fas fa-award fs-4 text-body-secondary"></i>
                            </div>
                            <h5 class="fw-bold text-body mb-2">Workmanship That Lasts</h5>
                            <p class="small text-body-secondary mb-0">
                                We believe in doing the job properly the first time. By using quality materials, proven installation methods, and attention to detail, we deliver electrical solutions built for long-term reliability.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Lower Visual Banner Showcase -->
        <div class="card border-0 rounded-4 overflow-hidden shadow-lg bg-black text-white">
            <div class="row g-0 align-items-stretch">

                <!-- Left Image/Visual -->
                <div class="col-lg-6 position-relative min-vh-30 min-vh-lg-100">
                    <img class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
                         src="assets/images/rooftop-electrician.webp"
                         alt="Licensed Australian electrician performing quality service" />
                </div>

                <!-- Right Copy & Checklist -->
                <div class="col-lg-6 p-4 p-md-5 d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge bg-accent text-dark fw-bold text-uppercase px-2 py-1 rounded-pill" style="font-size: 0.68rem;">
                            Quality Guaranteed
                        </span>
                    </div>

                    <h3 class="fw-light text-uppercase text-white mb-3">Built on Trust. <br><span class="text-accent">Backed by Quality.</span></h3>

                    <p class="text-white-50 mb-3 small" style="line-height: 1.6;">
                        From emergency electrical repairs and routine maintenance to complete installations and energy-efficient upgrades, every project is completed with the same commitment to safety, professionalism, and exceptional workmanship.
                    </p>

                    <p class="text-white-50 mb-4 extra-small" style="line-height: 1.5;">
                        When you choose 24Seven Sparky, you're choosing a local Sydney team that values honest communication, reliable service, and lasting results—not shortcuts.
                    </p>

                    <!-- Checklist Grid -->
                    <div class="row mb-4">
                        <div class="col-sm-6 mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-circle-check text-accent"></i>
                                <span class="fw-semibold text-white small">Licensed &amp; Fully Insured Electricians</span>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-circle-check text-accent"></i>
                                <span class="fw-semibold text-white small">Residential, Commercial &amp; Strata Specialists</span>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-circle-check text-accent"></i>
                                <span class="fw-semibold text-white small">Upfront Quotes Before Work Begins</span>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-circle-check text-accent"></i>
                                <span class="fw-semibold text-white small">Quality Workmanship You Can Rely On</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button & Guarantee Callout -->
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 pt-2">
                        <a href="#contact" class="btn btn-power btn-lg text-dark fw-bold px-4 py-3 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                            <span>Book Your Electrician</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="d-flex align-items-center gap-2 text-white-50 small">
                            <i class="fas fa-shield-halved text-accent"></i>
                            <span>Transparent Pricing • Safe Solutions</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
<div class="container-fluid px-2 px-md-4 pt-4" id="sparky-banner">
    <div class="bg-accent rounded-5 p-4 p-md-5 text-dark position-relative overflow-hidden">

        <!-- Background Decorative Accent Grid -->
        <div class="position-absolute top-0 end-0 h-100 w-50 pointer-events-none opacity-10 d-none d-lg-block"
             style="background-image: radial-gradient(#000 1.5px, transparent 1.5px); background-size: 24px 24px;"></div>

        <div class="row align-items-center g-4 g-lg-5 position-relative z-1">

            <!-- Left Narrative & Pitch -->
            <div class="col-lg-7">
                <div class="gsap-anim d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark text-white extra-small fw-bold text-uppercase tracking-wider mb-3">
                    <i class="fas fa-house-bolt text-accent"></i>
                    <span>Your Local Sydney Electricians</span>
                </div>

                <h2 class="gsap-anim display-5 fw-black text-uppercase tracking-tight text-dark mb-3">
                    Your Local<br>
                    <span class="opacity-75">Sydney Electricians</span>
                </h2>

                <p class="gsap-anim fw-normal text-dark opacity-90 mb-3" style="line-height: 1.6; max-width: 640px;">
                    That's why we've built <strong>24Seven Sparky</strong> around reliability. We answer the phone. We show up. We explain your options. We complete the work properly.
                </p>

                <!-- Value Proposition Highlights -->
                <div class="gsap-anim d-flex flex-wrap gap-3 text-dark fw-bold small mb-4">
                    <span class="d-inline-flex align-items-center gap-1"><i class="fas fa-circle-check text-dark"></i> No confusing jargon</span>
                    <span class="d-inline-flex align-items-center gap-1"><i class="fas fa-circle-check text-dark"></i> No cutting corners</span>
                    <span class="d-inline-flex align-items-center gap-1"><i class="fas fa-circle-check text-dark"></i> No disappearing after the job</span>
                </div>

                <p class="gsap-anim fw-normal text-dark opacity-90 mb-4 extra-small" style="line-height: 1.5; max-width: 640px;">
                    Whether it's replacing a faulty power point, upgrading an ageing switchboard or installing a complete EV charging solution, you can count on experienced electricians who genuinely care about doing the job right.
                </p>

                <div class="gsap-anim d-flex flex-wrap align-items-center gap-3">
                    <a href="#contact" class="btn btn-dark text-white fw-bold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2 shadow-sm">
                        <span>Get A Local Sparky Out</span>
                        <i class="fas fa-arrow-right text-accent"></i>
                    </a>
                    <div class="d-flex align-items-center gap-2 small fw-bold text-dark ms-1">
                        <i class="fas fa-shield-halved fs-5"></i>
                        <span>100% Workmanship Guarantee</span>
                    </div>
                </div>
            </div>

            <!-- Right Stats Counter Grid -->
            <div class="col-lg-5">
                <div class="gsap-card p-3 p-sm-4 bg-dark text-white rounded-4 shadow-sm border border-dark border-opacity-25">
                    <div class="row text-center">

                        <!-- Stat 1: Jobs Completed -->
                        <div class="col-4 border-end border-secondary border-opacity-25">
                            <div class="display-6 fw-black text-accent mb-0"><span class="stat-counter" data-target="1376" data-format="formatted">1,376</span>+</div>
                            <div class="extra-small text-uppercase tracking-wider text-white-50 fw-bold mt-1">Jobs<br>Completed</div>
                        </div>

                        <!-- Stat 2: Happy Customers -->
                        <div class="col-4 border-end border-secondary border-opacity-25">
                            <div class="display-6 fw-black text-accent mb-0"><span class="stat-counter" data-target="1000" data-format="1k">1k</span>+</div>
                            <div class="extra-small text-uppercase tracking-wider text-white-50 fw-bold mt-1">Happy<br>Customers</div>
                        </div>

                        <!-- Stat 3: Years Experience -->
                        <div class="col-4">
                            <div class="display-6 fw-black text-accent mb-0"><span class="stat-counter" data-target="3" data-format="">3</span>+</div>
                            <div class="extra-small text-uppercase tracking-wider text-white-50 fw-bold mt-1">Years<br>Experience</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<section id="services-section" class="py-5 bg-body position-relative">
    <!-- Background Ambient Glow -->
    <div class="position-absolute top-0 start-50 translate-middle-x w-100 h-100 opacity-10 pointer-events-none"
         style="background: radial-gradient(circle at 50% 20%, rgba(120,200,5,0.2) 0%, transparent 60%);"></div>
    <div class="container py-4">

        <!-- Header -->
        <div class="row justify-content-between align-items-end mb-5">
            <div class="col-lg-6">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border text-body-secondary small fw-bold text-uppercase tracking-wider mb-3 shadow-sm">
                    <i class="fas fa-bolt text-accent"></i>
                    <span>COMPLETE ELECTRICAL SERVICES ACROSS SYDNEY</span>
                </div>
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body m-0">
                    Whatever The Job, We've Got The Right <span class="text-accent">Electrician For It.</span>
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="text-body-secondary fs-6 mb-0" style="line-height: 1.6;">
                    Electrical work comes in all shapes and sizes—from urgent repairs and routine maintenance to complete installations and energy-efficient upgrades. At 24Seven Sparky, we deliver safe, reliable workmanship with upfront pricing and honest advice every step of the way.
                </p>
            </div>
        </div>

        <!-- Responsive Accordion Group -->
        <div class="accordion accordion-flush d-flex flex-column gap-3 mb-5" id="servicesAccordion">

            <!-- Accordion 1: 24/7 Emergency Electrical Services -->
            <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden">
                <h3 class="accordion-header" id="headingEmergency">
                    <button class="accordion-button py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmergency" aria-expanded="true" aria-controls="collapseEmergency">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-body border d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fas fa-truck-fast text-accent fs-5"></i>
                            </div>
                            <div>
                                <div class="text-body fw-black text-uppercase tracking-tight">24/7 Emergency Electrical Services</div>
                                <div class="small text-body-secondary fw-normal d-none d-sm-block">Fast response when you need an electrician most.</div>
                            </div>
                        </div>
                    </button>
                </h3>
                <div id="collapseEmergency" class="accordion-collapse collapse show" aria-labelledby="headingEmergency" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body px-4 pb-4 pt-0">
                        <hr class="border-secondary opacity-20 mt-0 mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="text-body-secondary mb-4" style="line-height: 1.6;">
                                    Electrical emergencies can happen without warning. Whether you've lost power, noticed burning smells, experienced repeated power trips, or have exposed wiring creating a safety risk, our electricians are ready to respond quickly across Sydney. We identify the fault, make the area safe, and carry out lasting repairs so you can get back to normal with confidence.
                                </p>
                                <div class="row mb-4">
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/switchboard-upgrade" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Emergency Switchboard Trips
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/house-wiring" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Power Outages &amp; Cable Faults
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/smoke-alarms" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Beeping Smoke Alarm Faults
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/power-points" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Sparking Outlets &amp; Switches
                                        </a>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-power btn-md text-dark fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                    <span>Request Emergency Assistance</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0">
                                <div class="p-3 bg-body rounded-3 border d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Availability</span>
                                        <span class="small fw-bold text-body">24/7 Rapid Response</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Coverage</span>
                                        <span class="small fw-bold text-body">All Sydney Suburbs</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Priority</span>
                                        <span class="small fw-bold text-body">Immediate Safety First</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 2: Residential Electrical Services -->
            <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden">
                <h3 class="accordion-header" id="headingResidential">
                    <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseResidential" aria-expanded="false" aria-controls="collapseResidential">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-body border d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fas fa-house text-accent fs-5"></i>
                            </div>
                            <div>
                                <div class="text-body fw-black text-uppercase tracking-tight">Residential Electrical Services</div>
                                <div class="small text-body-secondary fw-normal d-none d-sm-block">Keeping your home safe, functional and ready for everyday life.</div>
                            </div>
                        </div>
                    </button>
                </h3>
                <div id="collapseResidential" class="accordion-collapse collapse" aria-labelledby="headingResidential" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body px-4 pb-4 pt-0">
                        <hr class="border-secondary opacity-20 mt-0 mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="text-body-secondary mb-4" style="line-height: 1.6;">
                                    Whether you're renovating, building, or upgrading your home, our electricians deliver practical solutions designed around the way you live. From USB power outlets to switchboards and architectural lighting, every job is completed to AS/NZS 3000 standards.
                                </p>
                                <div class="row mb-4">
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/power-points" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Power Points &amp; USB Outlets
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/switchboard-upgrade" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Switchboard Upgrades
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/led-downlights" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> LED Downlights
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/ceiling-fans" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Ceiling Fans
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/exhaust-fans" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Exhaust Fans
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/smoke-alarms" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Smoke Alarms
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/home-renovation" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Home Renovation Electrical
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/home-appliance" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Home Appliance Installation
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/tv-antenna" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> TV Antenna Installation
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/house-wiring" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Full House Rewiring
                                        </a>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-power btn-md text-dark fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                    <span>Book A Residential Electrician</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0">
                                <div class="p-3 bg-body rounded-3 border d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Standards</span>
                                        <span class="small fw-bold text-body">AS/NZS 3000 Compliant</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Service</span>
                                        <span class="small fw-bold text-body">Clean &amp; Respectful Team</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Pricing</span>
                                        <span class="small fw-bold text-body">Upfront Fixed Quotes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 3: Commercial Electrical & Data -->
            <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden">
                <h3 class="accordion-header" id="headingCommercial">
                    <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseCommercial" aria-expanded="false" aria-controls="collapseCommercial">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-body border d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fas fa-building text-accent fs-5"></i>
                            </div>
                            <div>
                                <div class="text-body fw-black text-uppercase tracking-tight">Commercial Electrical &amp; Data Services</div>
                                <div class="small text-body-secondary fw-normal d-none d-sm-block">Reliable electrical and data networking for businesses without downtime.</div>
                            </div>
                        </div>
                    </button>
                </h3>
                <div id="collapseCommercial" class="accordion-collapse collapse" aria-labelledby="headingCommercial" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body px-4 pb-4 pt-0">
                        <hr class="border-secondary opacity-20 mt-0 mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="text-body-secondary mb-4" style="line-height: 1.6;">
                                    We partner with commercial offices, retail outlets, warehouses, and strata properties across Sydney. From corporate workspace fit-outs to structured high-speed Cat6 cabling and ongoing compliance safety audits, we keep your infrastructure powered and online.
                                </p>
                                <div class="row mb-4">
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/office-fit-outs" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Office Fit-Outs
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/data-cabling" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Data &amp; Network Cabling
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/led-downlights" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Commercial LED Upgrades
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/switchboard-upgrade" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Commercial Switchboards
                                        </a>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-power btn-md text-dark fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                    <span>Talk To Our Commercial Team</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0">
                                <div class="p-3 bg-body rounded-3 border d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Focus</span>
                                        <span class="small fw-bold text-body">Minimising Downtime</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Clients</span>
                                        <span class="small fw-bold text-body">Offices, Retail, Strata</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Compliance</span>
                                        <span class="small fw-bold text-body">Full Safety Audits</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 4: EV Charging Solutions -->
            <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden">
                <h3 class="accordion-header" id="headingEV">
                    <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEV" aria-expanded="false" aria-controls="collapseEV">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-body border d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fas fa-charging-station text-accent fs-5"></i>
                            </div>
                            <div>
                                <div class="text-body fw-black text-uppercase tracking-tight">EV Charging Solutions</div>
                                <div class="small text-body-secondary fw-normal d-none d-sm-block">Charge your electric vehicle faster, safer and smarter.</div>
                            </div>
                        </div>
                    </button>
                </h3>
                <div id="collapseEV" class="accordion-collapse collapse" aria-labelledby="headingEV" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body px-4 pb-4 pt-0">
                        <hr class="border-secondary opacity-20 mt-0 mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="text-body-secondary mb-4" style="line-height: 1.6;">
                                    Installing a dedicated Level 2 EV charger makes home or workplace charging up to 10x faster than standard wall outlets. We assess your switchboard capacity and install robust charging stations tailored for Tesla, Hyundai, BYD, BMW, and all major EV models.
                                </p>
                                <div class="row mb-4">
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/ev-charger" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> EV Charger Installation
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/switchboard-upgrade" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Switchboard EV Capacity Upgrades
                                        </a>
                                    </div>
                                </div>
                                <a href="/services/ev-charger" class="btn btn-power btn-md text-dark fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                    <span>Explore EV Charging Installation</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0">
                                <div class="p-3 bg-body rounded-3 border d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Compatibility</span>
                                        <span class="small fw-bold text-body">All Major EV Brands</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Speeds</span>
                                        <span class="small fw-bold text-body">Single &amp; 3-Phase</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Safety</span>
                                        <span class="small fw-bold text-body">Load &amp; Capacity Checked</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 5: Solar & Renewable Energy Solutions -->
            <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden">
                <h3 class="accordion-header" id="headingSolar">
                    <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSolar" aria-expanded="false" aria-controls="collapseSolar">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-body border d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fas fa-solar-panel text-accent fs-5"></i>
                            </div>
                            <div>
                                <div class="text-body fw-black text-uppercase tracking-tight">Solar &amp; Battery Solutions</div>
                                <div class="small text-body-secondary fw-normal d-none d-sm-block">Generate more. Store more. Save more.</div>
                            </div>
                        </div>
                    </button>
                </h3>
                <div id="collapseSolar" class="accordion-collapse collapse" aria-labelledby="headingSolar" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body px-4 pb-4 pt-0">
                        <hr class="border-secondary opacity-20 mt-0 mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="text-body-secondary mb-4" style="line-height: 1.6;">
                                    Harness renewable energy and store excess power to slash household electricity bills. We design and install high-efficiency solar panel systems alongside modern home battery storage units built for Sydney conditions.
                                </p>
                                <div class="row mb-4">
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/solar-panel-installation" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Solar Panel Installation
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <a href="/services/solar-battery-installation" class="d-flex align-items-center gap-2 small text-body fw-semibold text-decoration-none">
                                            <i class="fas fa-circle-check text-accent"></i> Solar Battery Storage
                                        </a>
                                    </div>
                                </div>
                                <a href="/services/solar-panel-installation" class="btn btn-power btn-md text-dark fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                    <span>Explore Solar Solutions</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-lg-5 mt-4 mt-lg-0">
                                <div class="p-3 bg-body rounded-3 border d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Efficiency</span>
                                        <span class="small fw-bold text-body">Tailored Solar &amp; Battery</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Assessment</span>
                                        <span class="small fw-bold text-body">On-Site Property Audit</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="small text-body-secondary">Reliability</span>
                                        <span class="small fw-bold text-body">Quality Components</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section Transition Banner -->
        <div class="card border-0 rounded-4 overflow-hidden shadow-sm bg-body-tertiary border p-4 p-md-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body border text-body-secondary small fw-bold text-uppercase tracking-wider mb-3">
                        <i class="fas fa-shield-halved text-accent"></i>
                        <span>One Team. Every Electrical Solution.</span>
                    </div>
                    <h3 class="display-6 fw-black text-uppercase text-body mb-3">
                        Dependable Electrical Work,<br>
                        <span class="text-accent">Built To Last.</span>
                    </h3>
                    <p class="text-body-secondary small mb-0" style="line-height: 1.6;">
                        No matter the size or complexity of the job, our goal is always the same—to provide safe, reliable electrical work backed by honest advice, quality workmanship, and service you can depend on. From emergency repairs and routine maintenance to complete installations, you can count on 24Seven Sparky.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Suburb Availability Checker -->
<!--<div class="card bg-body-tertiary border rounded-4 p-4 shadow-sm mb-4">-->
<!--    <h5 class="fw-bold text-body mb-1"><i class="bi bi-geo-alt-fill text-accent me-2"></i>Check Same-Day Service Availability</h5>-->
<!--    <p class="text-muted small mb-3">Enter your Sydney suburb or postcode to see our immediate dispatch availability.</p>-->
<!---->
<!--    <div class="input-group">-->
<!--        <input type="text" id="postcodeSearch" class="form-control form-control-lg bg-body" placeholder="e.g. Oran Park, 2570">-->
<!--        <button class="btn btn-power px-4 fw-bold" type="button" onclick="checkAvailability()">Check Now</button>-->
<!--    </div>-->
<!--    <div id="availabilityResult" class="mt-3 small fw-bold"></div>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    function checkAvailability() {-->
<!--        const input = document.getElementById('postcodeSearch').value.toLowerCase();-->
<!--        const result = document.getElementById('availabilityResult');-->
<!--        const localSuburbs = ['oran park', '2570', 'gregory hills', '2557', 'camden', 'narellan', 'campbelltown'];-->
<!---->
<!--        if (!input) return;-->
<!---->
<!--        if (localSuburbs.some(suburb => input.includes(suburb))) {-->
<!--            result.innerHTML = `<span class="text-success"><i class="bi bi-check-circle-fill"></i> Express Dispatch Available! Vans currently active in your area.</span>`;-->
<!--        } else {-->
<!--            result.innerHTML = `<span class="text-primary"><i class="bi bi-info-circle-fill"></i> Service Available across Greater Sydney! Standard scheduling applies.</span>`;-->
<!--        }-->
<!--    }-->
<!--</script>-->
<!--<div class="fixed-bottom d-lg-none bg-body border-top p-2 shadow-lg z-3">-->
<!--    <div class="row">-->
<!--        <div class="col-6">-->
<!--            <a href="tel:1300000000" class="btn btn-accent w-100 fw-bold rounded-pill d-flex align-items-center justify-content-center gap-2 py-2">-->
<!--                <i class="bi bi-telephone-fill"></i> Call Now-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="col-6">-->
<!--            <a href="https://wa.me/61400000000" class="btn btn-success w-100 fw-bold rounded-pill d-flex align-items-center justify-content-center gap-2 py-2" target="_blank">-->
<!--                <i class="bi bi-whatsapp"></i> WhatsApp-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- EV Charger Installation Workflow (Staircase Layout) -->
<section id="how-it-works" class="py-5 bg-body position-relative overflow-hidden">

    <!-- Background Image Layer with Theme-Adaptive Vignette -->
    <div class="hero-bg-wrapper position-absolute top-0 start-0 w-100 h-100 z-0">
        <img src="/assets/images/homebanner3.webp" alt="24Seven Sparky How It Works Process" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 opacity-25">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay-gradient"></div>
    </div>

    <div class="container py-4 position-relative z-1">

        <!-- Section Header -->
        <div class="row justify-content-between align-items-end mb-5">
            <div class="col-lg-6">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border text-body-secondary small fw-bold text-uppercase tracking-wider mb-3 shadow-sm backdrop-blur">
                    <i class="fas fa-bolt text-accent"></i>
                    <span>FAST • SIMPLE • HASSLE-FREE</span>
                </div>
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body m-0">
                    Three Simple Steps<br>
                    <span class="text-accent">To Get Your Electrical Job Done</span>
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="text-body-secondary fs-6 mb-0" style="line-height: 1.6;">
                    Whether it's an emergency repair, a new installation, or a planned upgrade, getting professional electrical services shouldn't be complicated. We've made the process quick, transparent, and stress-free, so you know exactly what to expect from the moment you contact us.
                </p>
            </div>
        </div>

        <!-- Staircase Process Cards (3 Steps) -->
        <div class="d-flex flex-column gap-4 position-relative mb-5">

            <!-- STEP 1 (Left Base) -->
            <div class="row g-0">
                <div class="col-12 col-lg-9 col-xl-8">
                    <div class="p-4 p-md-5 rounded-4 bg-body-tertiary border position-relative overflow-hidden shadow-sm backdrop-blur">

                        <!-- Watermark Step Number -->
                        <div class="position-absolute bottom-0 end-0 me-3 mb-n3 fw-black text-body-tertiary opacity-25 pointer-events-none select-none" style="font-size: 8rem; line-height: 0.8;">01</div>

                        <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 mb-3">
                            <div class="rounded-circle bg-accent text-dark fw-black d-flex align-items-center justify-content-center flex-shrink-0" style="width: 52px; height: 52px; font-size: 1.25rem;">
                                01
                            </div>
                            <div>
                                <span class="badge bg-body border text-body-secondary text-uppercase tracking-wider extra-small fw-bold px-2 py-1 rounded-pill mb-1">Step One</span>
                                <h3 class="h4 fw-black text-uppercase tracking-tight text-body m-0">Tell Us What You Need</h3>
                            </div>
                        </div>

                        <p class="text-body-secondary mb-4 position-relative z-1" style="line-height: 1.6;">
                            Every job starts with a quick conversation. Give us a call or request a quote online, and let us know how we can help. Whether it's an urgent electrical fault, a renovation, or a new installation, we'll understand your requirements and arrange a time that suits you.
                        </p>

                        <div class="pt-3 border-top border-secondary border-opacity-25 position-relative z-1">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-body fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Fast response across Sydney
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-body fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Friendly advice from licensed electricians
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-body fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Convenient booking times
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- STEP 2 (Middle Step - Staggered Center on Desktop) -->
            <div class="row g-0 justify-content-lg-center">
                <div class="col-12 col-lg-9 col-xl-8 ms-lg-4 ms-xl-5">
                    <div class="p-4 p-md-5 rounded-4 bg-body-tertiary border position-relative overflow-hidden shadow-sm backdrop-blur">

                        <!-- Watermark Step Number -->
                        <div class="position-absolute bottom-0 end-0 me-3 mb-n3 fw-black text-body-tertiary opacity-25 pointer-events-none select-none" style="font-size: 8rem; line-height: 0.8;">02</div>

                        <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 mb-3">
                            <div class="rounded-circle bg-accent text-dark fw-black d-flex align-items-center justify-content-center flex-shrink-0" style="width: 52px; height: 52px; font-size: 1.25rem;">
                                02
                            </div>
                            <div>
                                <span class="badge bg-body border text-body-secondary text-uppercase tracking-wider extra-small fw-bold px-2 py-1 rounded-pill mb-1">Step Two</span>
                                <h3 class="h4 fw-black text-uppercase tracking-tight text-body m-0">We Assess &amp; Get To Work</h3>
                            </div>
                        </div>

                        <p class="text-body-secondary mb-4 position-relative z-1" style="line-height: 1.6;">
                            Our licensed electrician will arrive on time, inspect the job, explain the best solution, and provide an upfront quote before any work begins. Once you're happy to proceed, we'll complete the work safely, professionally, and in accordance with Australian Standards.
                        </p>

                        <div class="pt-3 border-top border-secondary border-opacity-25 position-relative z-1">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-body fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Honest recommendations
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-body fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Upfront pricing
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-body fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Safe, quality workmanship
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- STEP 3 (Top Step - Fully Offset Right on Desktop) -->
            <div class="row g-0 justify-content-lg-end">
                <div class="col-12 col-lg-9 col-xl-8">
                    <div class="p-4 p-md-5 rounded-4 bg-dark text-white border border-dark-subtle position-relative overflow-hidden shadow-lg backdrop-blur">

                        <!-- Watermark Step Number -->
                        <div class="position-absolute bottom-0 end-0 me-3 mb-n3 fw-black text-white-50 opacity-10 pointer-events-none select-none" style="font-size: 8rem; line-height: 0.8;">03</div>

                        <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 mb-3">
                            <div class="rounded-circle bg-accent text-dark fw-black d-flex align-items-center justify-content-center flex-shrink-0" style="width: 52px; height: 52px; font-size: 1.25rem;">
                                03
                            </div>
                            <div>
                                <span class="badge bg-accent text-dark text-uppercase tracking-wider extra-small fw-bold px-2 py-1 rounded-pill mb-1">Final Step</span>
                                <h3 class="h4 fw-black text-uppercase tracking-tight text-white m-0">Power Restored. Job Complete.</h3>
                            </div>
                        </div>

                        <p class="text-white-50 mb-4 position-relative z-1" style="line-height: 1.6;">
                            Before we leave, we thoroughly test everything to ensure it's working safely and efficiently. We'll walk you through the completed work, answer any questions, and make sure you're completely satisfied before considering the job finished.
                        </p>

                        <div class="pt-3 border-top border-secondary border-opacity-25 position-relative z-1 mb-4">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-white fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Safety tested
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-white fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Clean and tidy finish
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 small text-white fw-semibold">
                                        <i class="fas fa-circle-check text-accent"></i> Complete peace of mind
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 border-top border-secondary border-opacity-25 d-flex flex-wrap align-items-center justify-content-between gap-3 position-relative z-1">
                            <a href="#contact" class="btn btn-power btn-md text-dark fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                <span>Get Started Now</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="extra-small text-white-50"><i class="fas fa-shield-halved text-accent me-1"></i> AS/NZS 3000 Standards Guaranteed</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Section Transition & Closing Banner -->
        <div class="card border-0 rounded-4 overflow-hidden shadow-sm bg-body-tertiary border p-4 p-md-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body border text-body-secondary small fw-bold text-uppercase tracking-wider mb-3">
                        <i class="fas fa-circle-check text-accent"></i>
                        <span>Seamless Electrical Service</span>
                    </div>
                    <h3 class="display-6 fw-black text-uppercase text-body mb-3">
                        That's It.<br>
                        <span class="text-accent">No Stress. No Surprises.</span>
                    </h3>
                    <p class="text-body-secondary small mb-0" style="line-height: 1.6;">
                        From your first phone call to the final safety check, our focus is on making electrical work simple, transparent, and reliable. Whether it's a small repair or a major installation, you can count on 24Seven Sparky to deliver professional service and quality workmanship every step of the way.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Sticky Accordion FAQ Section -->
<section id="faq-accordion" class="py-5 bg-body position-relative">
    <div class="container py-4">
        <div class="row g-lg-5">

            <!-- Left Column: Sticky Brand Pillar (Desktop Sticky) -->
            <div class="col-lg-5">
                <div class="sticky-lg-top" style="top: 100px; z-index: 10;">

                    <!-- Chip Badge -->
                    <div class="badge bg-accent text-dark fw-bold text-uppercase px-2 py-1 rounded-pill">
                        <i class="fas fa-comments-dollar me-1"></i>
                        <span>Sydney-Wide Electrical &amp; Solar FAQs</span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-2">
                        Got Questions?<br>
                        <span class="text-accent">Straight Answers.</span>
                    </h2>

                    <!-- Sub Heading -->
                    <h3 class="h6 fw-bold text-uppercase tracking-wider text-body-secondary mb-3">
                        No BS Trade Advice From Licensed NSW Electricians
                    </h3>

                    <!-- Paragraph -->
                    <p class="text-body-secondary fs-6 mb-4" style="line-height: 1.6;">
                        Got questions about 24/7 emergency response, solar installs, EV chargers, or switchboard upgrades across Sydney? Here is the honest truth from certified local sparkies who service homes and commercial properties daily.
                    </p>

                    <!-- CTA Button Group -->
                    <div class="d-flex flex-column gap-3 align-items-start">
                        <a href="#contact" class="btn btn-power text-white fw-bold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2 shadow-sm">
                            <span>Get A Sydney Sparky Out</span>
                            <i class="fas fa-arrow-right text-black"></i>
                        </a>
                        <div class="d-flex align-items-center gap-2 extra-small fw-bold text-body-secondary ms-1">
                            <i class="fas fa-shield-halved text-accent fs-6"></i>
                            <span>100% Workmanship Guarantee | NSW Lic: 491657C</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Accordion Questions -->
            <div class="col-lg-7">
                <div class="accordion accordion-flush d-flex flex-column gap-3" id="faqAccordion">

                    <!-- FAQ Item 1: 24/7 Emergency Response (GEO/AEO Prime Target) -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingOne">
                            <button class="accordion-button py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="d-flex align-items-center gap-3">
                                    <i class="fas fa-bolt text-accent fs-5"></i>
                                    <span class="fw-semibold fs-5 text-uppercase">How fast can an emergency electrician respond in Sydney?</span>
                                </span>
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>24/7 Sparky dispatches licensed emergency electricians across Greater Sydney 24 hours a day, 7 days a week.</strong> For critical emergencies—such as total power failure, burning electrical smells, active sparking, or tripped safety switches—our mobile trade units aim for an immediate priority response.
                                </p>
                                <div class="bg-body p-3 rounded-3 border">
                                    <strong class="d-block mb-2 text-body extra-small text-uppercase tracking-wider">Common Emergency Services We Handle On-Site:</strong>
                                    <ul class="text-body-secondary small mb-0 ps-3">
                                        <li class="mb-1"><strong>Power Restoration:</strong> Rapid fault finding for residential &amp; commercial blackouts.</li>
                                        <li class="mb-1"><strong>Switchboard Hazards:</strong> Blown fuses, melted circuit breakers, and RCD replacements.</li>
                                        <li><strong>Storm Damage:</strong> Emergency isolation for water-damaged wiring or fallen service lines.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2: Switchboard Upgrades & AS/NZS 3000 Compliance -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingTwo">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="d-flex align-items-center gap-3">
                                    <i class="fas fa-sliders text-accent fs-5"></i>
                                    <span class="fw-semibold fs-5 text-uppercase">Why do Sydney homes need a switchboard upgrade?</span>
                                </span>
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Older Sydney switchboards with ceramic fuses or asbestos backing panels pose high fire hazards and fail to handle modern electrical loads.</strong> Under Australian Standards (AS/NZS 3000 Wiring Rules), modern homes require safety switches (RCDs) on every circuit to prevent electrocution and electrical fires.
                                </p>
                                <p class="text-body-secondary small mb-0">
                                    Upgrading your electrical board is also essential prior to installing solar systems, EV wall chargers, induction cooktops, or high-capacity air conditioning units.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3: Solar ROI & Sydney Financial Rebates -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingThree">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="d-flex align-items-center gap-3">
                                    <i class="fas fa-solar-panel text-accent fs-5"></i>
                                    <span class="fw-semibold fs-5 text-uppercase">Are solar panels and battery storage worth it in Sydney?</span>
                                </span>
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Yes, rooftop solar and battery storage deliver excellent return on investment across Sydney.</strong> A CEC-accredited solar system reduces quarterly power bills by up to 70%, typically paying itself off within 3 to 5 years. Adding a battery lets you store excess day generation to run your home on free energy through peak evening power rates.
                                </p>
                                <div class="bg-body p-3 rounded-3 border">
                                    <strong class="d-block mb-2 text-body extra-small text-uppercase tracking-wider">Government Rebates &amp; Financial Perks:</strong>
                                    <ul class="text-body-secondary small mb-0 ps-3">
                                        <li class="mb-1"><strong>Federal STCs:</strong> Upfront point-of-sale discounts on eligible solar installations.</li>
                                        <li class="mb-1"><strong>Feed-in Tariffs:</strong> Earn grid credits for excess solar electricity exported back to the grid.</li>
                                        <li><strong>NSW Energy Battery Incentives:</strong> Save on upfront battery installation costs via state schemes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4: Smart EV Charger Installation -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingFour">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="d-flex align-items-center gap-3">
                                    <i class="fas fa-charging-station text-accent fs-5"></i>
                                    <span class="fw-semibold fs-5 text-uppercase">Can EV wall chargers be integrated with existing solar panels?</span>
                                </span>
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Yes, smart Level 2 EV chargers can dynamically sync with your rooftop solar array to charge your electric vehicle for free.</strong> We install single-phase (7.4kW) and three-phase (22kW) wallbox chargers equipped with solar-matching tech for all major EV models.
                                </p>
                                <div class="row text-center extra-small text-uppercase fw-bold text-secondary g-2">
                                    <div class="col-4"><div class="p-2 border rounded bg-body">Tesla Ready</div></div>
                                    <div class="col-4"><div class="p-2 border rounded bg-body">Type 2 Universal</div></div>
                                    <div class="col-4"><div class="p-2 border rounded bg-body">Solar Match Mode</div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5: Compliance & Certification (SEO/AEO Authority) -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingFive">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="d-flex align-items-center gap-3">
                                    <i class="fas fa-certificate text-accent fs-5"></i>
                                    <span class="fw-semibold fs-5 text-uppercase">Are your electricians licensed, insured, and certified in NSW?</span>
                                </span>
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-0" style="line-height: 1.6;">
                                    <strong>Absolutely.</strong> 24/7 Sparky operates under NSW Electrical Contractor License <strong>491657C</strong>. Every electrician on our team is fully licensed, insured, and certified by the Clean Energy Council (CEC) for solar and battery installations. We issue a Compliance Certificate (CCEW) upon completion of electrical work to ensure 100% safety and regulatory adherence.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6: Geographic Coverage (Local SEO & GEO Keywords) -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingSix">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-bold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="d-flex align-items-center gap-3">
                                    <i class="fas fa-location-dot text-accent fs-5"></i>
                                    <span class="fw-semibold fs-5 text-uppercase">Which areas of Sydney do you service?</span>
                                </span>
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Our mobile fleets cover all regions across Sydney and Greater Western Sydney.</strong> We manage local grid connection applications directly with network distributors including Endeavour Energy and Ausgrid.
                                </p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-body border text-body font-monospace">Sydney CBD</span>
                                    <span class="badge bg-body border text-body font-monospace">Western Sydney</span>
                                    <span class="badge bg-body border text-body font-monospace">Oran Park</span>
                                    <span class="badge bg-body border text-body font-monospace">Parramatta</span>
                                    <span class="badge bg-body border text-body font-monospace">Penrith</span>
                                    <span class="badge bg-body border text-body font-monospace">Liverpool</span>
                                    <span class="badge bg-body border text-body font-monospace">Campbelltown</span>
                                    <span class="badge bg-body border text-body font-monospace">Inner West</span>
                                    <span class="badge bg-body border text-body font-monospace">Hills District</span>
                                    <span class="badge bg-body border text-body font-monospace">Sutherland Shire</span>
                                    <span class="badge bg-body border text-body font-monospace">Northern Beaches</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Featured Proof Highlight Card (Before/After Spotlight) -->
<section class="container py-5">
    <div class="">
        <div class="p-4 p-md-5 bg-black text-white rounded-4 border border-dark shadow-lg position-relative overflow-hidden">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                        <span class="badge bg-accent text-dark fw-black text-uppercase tracking-wider extra-small px-3 py-1 rounded-pill mb-3">
                            Featured Transformation
                        </span>
                    <h3 class="h2 fw-black text-uppercase tracking-tight mb-3">
                        Dangerous Old Switchboard <i class="fas fa-arrow-right text-accent mx-2 fs-4"></i> Modern Safety Standard
                    </h3>
                    <p class="text-white-50 mb-4" style="line-height: 1.6;">
                        Upgraded an outdated fuse box in Oran Park to a fully compliant, RCBO-protected switchboard equipped for modern solar loads and high-capacity EV charging.
                    </p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <span class="extra-small fw-bold text-white"><i class="fas fa-location-dot me-1"></i> Oran Park NSW</span>
                        <span class="text-white-50 extra-small">•</span>
                        <span class="extra-small fw-bold text-white"><i class="fas fa-clock me-1"></i> 1 Day Install</span>
                        <span class="text-white-50 extra-small">•</span>
                        <span class="extra-small fw-bold text-white"><i class="fas fa-shield-halved me-1"></i> AS/NZS 3000 Compliant</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Before / After Grid Badge Display -->
                    <div class="row">
                        <div class="col-6 position-relative  rounded-3 overflow-hidden">
                            <img src="/assets/images/before.webp" class="img-fluid border border-secondary border-opacity-25 w-100" style="height: 220px; object-fit: cover;" alt="Old Switchboard Before">
                            <span class="position-absolute top-0 start-0 m-3 badge bg-danger text-uppercase fw-bold extra-small" style="z-index: 2;">Before (Non-Compliant)</span>
                        </div>
                        <div class="col-6 position-relative  rounded-3 overflow-hidden">
                            <img src="/assets/images/after.webp" class="img-fluid border border-accent w-100" style="height: 220px; object-fit: cover;" alt="New Switchboard After">
                            <span class="position-absolute top-0 start-0 m-3 badge bg-accent text-dark text-uppercase fw-black extra-small" style="z-index: 2;">After (24/7 Sparky Upgrade)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* Smooth Infinite Marquee Keyframes */
    @keyframes marqueeLeft {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-50%); }
    }
    @keyframes marqueeRight {
        0% { transform: translateX(-10%); }
        100% { transform: translateX(50%); }
    }

    .marquee-track-left {
        display: flex;
        gap: 1.5rem;
        width: max-content;
        animation: marqueeLeft 35s linear infinite;
    }
    .marquee-track-right {
        display: flex;
        gap: 1.5rem;
        width: max-content;
        animation: marqueeRight 35s linear infinite;
    }

    .marquee-container:hover .marquee-track-left,
    .marquee-container:hover .marquee-track-right {
        animation-play-state: paused;
    }

    /* Image Card Styling */
    .media-card {
        width: 580px !important;
        height: 400px !important;
        object-fit: cover;
        transition: transform 0.3s ease, filter 0.3s ease;
    }
    @media (min-width: 768px) {
        .media-card {
            width: 360px;
            height: 240px;
        }
    }
    .media-card-wrapper:hover .media-card {
        transform: scale(1.03);
    }
</style>

<!-- Modern Dynamic Media Stream Section -->
<section id="media-stream" class="py-5 bg-body position-relative overflow-hidden">
    <div class="container py-4">

        <!-- Section Header -->
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-accent text-dark extra-small fw-bold text-uppercase tracking-wider mb-3">
                    <i class="fas fa-camera text-dark"></i>
                    <span>Real Jobs. Real Sites.</span>
                </div>
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body m-0">
                    On The Tools<br>
                    <span class="text-accent">Across Sydney.</span>
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0 text-lg-end">
                <p class="text-body-secondary fs-6 mb-0">
                    No stock photos. No clean-hand models. Just top-tier trade work, neat cable runs, and high-performance solar installs completed by our local team.
                </p>
            </div>
        </div>
    </div>

    <!-- Infinite Dual Marquee Stream (Full-Bleed Visual Flow) -->
    <div class="marquee-container d-flex flex-column gap-3 py-2 position-relative">

        <!-- Edge Gradient Overlays for Seamless Fade -->
        <div class="position-absolute top-0 start-0 h-100 w-15 pointer-events-none z-2 d-none d-md-block" style="background: linear-gradient(to right, var(--bs-body-bg), transparent);"></div>
        <div class="position-absolute top-0 end-0 h-100 w-15 pointer-events-none z-2 d-none d-md-block" style="background: linear-gradient(to left, var(--bs-body-bg), transparent);"></div>

        <!-- Track 1: Moving Left -->
        <div class="overflow-hidden">
            <div class="marquee-track-left">

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/solar-panel-installation.webp" class="media-card" alt="Solar Panel Installation">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Solar Installation</span>
                        <span class="small fw-bold text-white">6.6kW System • Oran Park</span>
                    </div>
                </div>

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/ev-charger-installation.webp" class="media-card" alt="EV Charger Installation">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">EV Charger</span>
                        <span class="small fw-bold text-white">22kW Fast Charger • Gregory Hills</span>
                    </div>
                </div>

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/office-fit-outs.webp" class="media-card" alt="Office Fit-Outs">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Commercial Electrical</span>
                        <span class="small fw-bold text-white">Factory Warehouse • Camden</span>
                    </div>
                </div>

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/led-downlights.webp" class="media-card" alt="LED Downlights">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Architectural Lighting</span>
                        <span class="small fw-bold text-white">New Build • Harrington Park</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Track 2: Moving Right -->
        <div class="overflow-hidden">
            <div class="marquee-track-right">

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/switchboard-upgrade.webp" class="media-card" alt="Switchboard Upgrades">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Safety Upgrade</span>
                        <span class="small fw-bold text-white">3-Phase Board • Narellan</span>
                    </div>
                </div>

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/solar-battery-installation.webp" class="media-card" alt="Solar Battery Storage">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Battery Bank</span>
                        <span class="small fw-bold text-white">10kWh Storage • Oran Park</span>
                    </div>
                </div>

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/diagonostic-repair.webp" class="media-card" alt="Emergency Sparky Callout">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Emergency Response</span>
                        <span class="small fw-bold text-white">24/7 Power Restore • Campbelltown</span>
                    </div>
                </div>

                <div class="media-card-wrapper position-relative rounded-4 overflow-hidden bg-dark shadow-sm">
                    <img src="assets/images/rooftop-electrician.webp" class="media-card" alt="Rooftop Solar Rig">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur">
                        <span class="extra-small fw-bold text-white text-uppercase d-block">Rooftop Solar</span>
                        <span class="small fw-bold text-white">10kW Commercial • Western Sydney</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<section id="trust-social-proof" class="py-5 bg-body border-top border-bottom">
    <div class="container py-4">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- LEFT COLUMN: Messaging & Call-to-Action -->
            <div class="col-lg-5">
                <!-- Subheading Badge -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border text-body-secondary small fw-bold text-uppercase tracking-wider mb-3 shadow-sm">
                    <i class="fas fa-shield-halved text-accent"></i>
                    <span>WHY HOMEOWNERS &amp; BUSINESSES TRUST US</span>
                </div>

                <!-- Main Headline -->
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-3">
                    Trusted Electricians.<br>
                    <span class="text-accent">Reliable Service. Lasting Results.</span>
                </h2>

                <p class="text-body-secondary fs-6 mb-4" style="line-height: 1.6;">
                    When it comes to electrical work, trust matters just as much as technical expertise. Whether we're responding to an emergency, upgrading your switchboard, or completing a commercial installation, our commitment remains the same—deliver safe, reliable workmanship with honest communication every step of the way.
                </p>
                <p class="text-body-secondary fs-6 mb-4" style="line-height: 1.6;">
                    At 24Seven Sparky, we don't just complete electrical jobs; we build lasting relationships by providing professional service, transparent pricing, and solutions our customers can rely on long after the work is finished.
                </p>

                <!-- Value Points -->
                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle bg-body border border-secondary-subtle text-accent flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold text-body">Licensed &amp; Fully Insured</h6>
                            <p class="text-body-secondary small mb-0" style="line-height: 1.5;">Your property deserves qualified professionals. Every job is carried out by licensed electricians who follow Australian Standards, giving you complete confidence that the work is completed safely and professionally.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle bg-body border border-secondary-subtle text-accent flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                            <i class="fas fa-hand-holding-dollar"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold text-body">Honest Pricing. No Hidden Surprises.</h6>
                            <p class="text-body-secondary small mb-0" style="line-height: 1.5;">Before any work begins, we'll explain the job, answer your questions, and provide a clear upfront quote. No unexpected costs. No confusing jargon. Just honest advice and transparent pricing.</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Action Group -->
                <div class="d-flex flex-sm-row flex-column gap-3">
                    <a href="#contact" class="btn btn-power btn-lg text-dark fw-bold rounded-pill px-4 py-3 text-uppercase d-inline-flex align-items-center justify-content-center gap-2">
                        <span>Book Your Electrician</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- RIGHT COLUMN: Proof Cards Grid -->
            <div class="col-lg-7">
                <div class="row g-3">

                    <!-- Card 1: Trusted Across Sydney -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle h-100 shadow-sm trust-card">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-warning small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="badge bg-body text-body-secondary border rounded-pill px-3 py-1 extra-small fw-bold text-uppercase">5.0 Star Rated</span>
                            </div>
                            <h3 class="h5 fw-bold text-body mb-2">Trusted Across Sydney</h3>
                            <p class="text-body-secondary small mb-0" style="line-height: 1.5;">Our reputation has been built through dependable service, quality workmanship, and long-term relationships with homeowners, businesses, and property managers throughout Sydney.</p>
                        </div>
                    </div>

                    <!-- Card 2: Licensed & Fully Insured -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle h-100 shadow-sm trust-card">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <i class="fas fa-file-contract fs-3 text-accent"></i>
                                <span class="badge bg-body text-body-secondary border rounded-pill px-3 py-1 extra-small fw-bold text-uppercase">AS/NZS Compliant</span>
                            </div>
                            <h3 class="h5 fw-bold text-body mb-2">Licensed &amp; Fully Insured</h3>
                            <p class="text-body-secondary small mb-0" style="line-height: 1.5;">Every installation and repair is completed by qualified electricians in accordance with Australian Standards, giving you complete peace of mind.</p>
                        </div>
                    </div>

                    <!-- Card 3: Quality Workmanship -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle h-100 shadow-sm trust-card">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <i class="fas fa-award fs-3 text-warning"></i>
                                <span class="badge bg-body text-body-secondary border rounded-pill px-3 py-1 extra-small fw-bold text-uppercase">Built To Last</span>
                            </div>
                            <h3 class="h5 fw-bold text-body mb-2">Quality Workmanship</h3>
                            <p class="text-body-secondary small mb-0" style="line-height: 1.5;">We believe in doing the job right the first time. Using quality materials and proven installation methods, we deliver electrical solutions built for long-term performance.</p>
                        </div>
                    </div>

                    <!-- Card 4: Property Types -->
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle h-100 shadow-sm trust-card">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <i class="fas fa-city fs-3 text-info"></i>
                                <span class="badge bg-body text-body-secondary border rounded-pill px-3 py-1 extra-small fw-bold text-uppercase">All Sectors</span>
                            </div>
                            <h3 class="h5 fw-bold text-body mb-2">Residential • Commercial • Strata</h3>
                            <p class="text-body-secondary small mb-0" style="line-height: 1.5;">From family homes and apartment buildings to offices, retail spaces, and commercial facilities, our experienced team provides electrical solutions tailored to every type of property.</p>
                        </div>
                    </div>

                    <!-- Bottom Black Card -->
                    <div class="col-12">
                        <div class="p-4 p-md-5 rounded-4 bg-dark text-white border border-dark-subtle shadow-sm trust-card">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-6 border-end-lg border-secondary border-opacity-25">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="p-3 rounded-circle bg-black border border-secondary shadow-sm text-accent">
                                            <i class="fas fa-user-shield fs-4"></i>
                                        </div>
                                        <div>
                                            <h4 class="h5 fw-bold mb-1 text-white">Reliable Service From Start To Finish</h4>
                                        </div>
                                    </div>
                                    <p class="text-white-50 small mb-0" style="line-height: 1.6;">
                                        Choosing the right electrician shouldn't be complicated. That's why we focus on clear communication, punctual service, and workmanship you can depend on from the moment you contact us until the job is complete.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ps-lg-3">
                                        <span class="extra-small text-uppercase fw-semibold text-white tracking-wider mb-3 d-block">Why Customers Choose 24Seven Sparky</span>
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-2 extra-small text-white-50 fw-semibold">
                                                    <i class="fas fa-circle-check text-accent"></i> Licensed &amp; Fully Insured Electricians
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-2 extra-small text-white-50 fw-semibold">
                                                    <i class="fas fa-circle-check text-accent"></i> Upfront Quotes Before Work Begins
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-2 extra-small text-white-50 fw-semibold">
                                                    <i class="fas fa-circle-check text-accent"></i> Residential, Commercial &amp; Strata Specialists
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-2 extra-small text-white-50 fw-semibold">
                                                    <i class="fas fa-circle-check text-accent"></i> Work Completed to Australian Standards
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-2 extra-small text-white-50 fw-semibold">
                                                    <i class="fas fa-circle-check text-accent"></i> Friendly, Professional Service
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-2 extra-small text-white-50 fw-semibold">
                                                    <i class="fas fa-circle-check text-accent"></i> Fast Response Across Sydney
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>
