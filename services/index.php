<?php
// Get requested service slug from URL (e.g. /services.php?slug=power-points) or route parameter
$service_slug = isset($_GET['slug']) ? trim($_GET['slug']) : 'default';

switch ($service_slug) {
    case 'power-points':
        $page_slug = 'power-points';
        $page_title = 'Power Point Installation & Repair | Oran Park | 24/7 Sparky';
        $page_description = 'Professional electrical power point installation, USB socket upgrades, and repairs across Oran Park and Western Sydney.';
        break;

    case 'switchboard-upgrade':
        $page_slug = 'switchboard-upgrade';
        $page_title = 'Switchboard Upgrades & Safety Switches | 24/7 Sparky';
        $page_description = 'Upgrade your old electrical switchboard to modern safety standards (AS/NZS 3000) with RCD protection in Oran Park.';
        break;

    case 'exhaust-fans':
        $page_slug = 'exhaust-fans';
        $page_title = 'Bathroom & Kitchen Exhaust Fan Installation | 24/7 Sparky';
        $page_description = 'Keep your home moisture-free with professional exhaust fan installation and ventilation services in Oran Park.';
        break;

    case 'smoke-alarms':
        $page_slug = 'smoke-alarms';
        $page_title = 'Licensed Smoke Alarm Installation & Testing | 24/7 Sparky';
        $page_description = 'Ensure compliance with NSW smoke alarm legislation. Photoelectric mains-powered smoke alarm installation and testing.';
        break;

    case 'led-downlights':
        $page_slug = 'led-downlights';
        $page_title = 'LED Downlight Installation & Energy Efficient Lighting | 24/7 Sparky';
        $page_description = 'Transform your living spaces with high-efficiency LED downlights, dimmers, and custom interior lighting layouts.';
        break;

    case 'ceiling-fans':
        $page_slug = 'ceiling-fans';
        $page_title = 'Ceiling Fan Installation & Replacement | Oran Park Sparky';
        $page_description = 'Indoor and outdoor ceiling fan installations for bedrooms, living rooms, and alfresco areas across Western Sydney.';
        break;

    case 'office-fit-outs':
        $page_slug = 'office-fit-outs';
        $page_title = 'Commercial Office Fit-Out Electrical Services | 24/7 Sparky';
        $page_description = 'Complete electrical fit-outs, commercial power distribution, emergency lighting, and data layouts for offices and retail.';
        break;

    case 'home-renovation':
        $page_slug = 'home-renovation';
        $page_title = 'Home Renovation & Extension Electrical Wiring | 24/7 Sparky';
        $page_description = 'Expert electrical wiring and design for kitchen, bathroom, and full home renovations in Oran Park and Camden.';
        break;

    case 'home-appliance':
        $page_slug = 'home-appliance';
        $page_title = 'Appliance Circuit Installation (Ovens, EV, AC) | 24/7 Sparky';
        $page_description = 'Dedicated heavy-duty power circuit wiring for electric ovens, cooktops, heat pumps, and high-draw appliances.';
        break;

    case 'data-cabling':
        $page_slug = 'data-cabling';
        $page_title = 'Data Cabling & Wi-Fi Network Installations | 24/7 Sparky';
        $page_description = 'Cat6 structured data cabling, mesh network access points, and smart home network setups for modern homes and businesses.';
        break;

    case 'tv-antenna':
        $page_slug = 'tv-antenna';
        $page_title = 'TV Antenna Installation & Wall Mounting | 24/7 Sparky';
        $page_description = 'Digital TV antenna installations, additional TV outlets, cable concealed TV wall mounting services.';
        break;

    case 'house-wiring':
        $page_slug = 'house-wiring';
        $page_title = 'Full House Rewiring & Electrical Overhauls | 24/7 Sparky';
        $page_description = 'Complete residential house rewiring to eliminate fire hazards, old VIR cabling, and unsafe electrical systems.';
        break;

    default:
        $page_slug = 'services';
        $page_title = 'Electrical Services Oran Park | Residential & Commercial | 24/7 Sparky';
        $page_description = 'Explore our full range of licensed electrical services in Oran Park, Camden, and Western Sydney. Emergency 24/7 service available.';
        break;
}

ob_start();
?>
<section class="services-hero position-relative min-vh-100 d-flex align-items-center justify-content-center overflow-hidden py-5 py-lg-5 bg-body" id="services-overview">

    <!-- Background Image Layer with Theme-Adaptive Overlay & Glow Orbs -->
    <div class="hero-bg-wrapper position-absolute top-0 start-0 w-100 h-100 z-0 overflow-hidden">
        <img src="/assets/images/homebanner11.png" alt="Licensed Electricians and Solar Installers in Sydney" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 opacity-25">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay-gradient"></div>
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">

            <!-- Column 1: Core Value Proposition -->
            <div class="col-lg-7">
                <!-- Eyebrow Tag -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border shadow-sm mb-3 backdrop-blur">
                    <span class="pulse-dot bg-accent rounded-circle"></span>
                    <span class="text-uppercase tracking-wider extra-small fw-semibold text-body">Sydney’s Best Licensed Electricians</span>
                </div>

                <!-- Headline -->
                <h1 class="display-4 text-uppercase fw-black text-body mb-4 tracking-tight">
                    Sydney’s Fast, Certified Electricians & <br><span class="text-accent">Solar Experts.</span>
                </h1>

                <!-- Subheading / Story Paragraph -->
                <p class="lead text-body-secondary mb-4" style="line-height: 1.7;">
                    24/7 Sparky delivers fast, reliable, and affordable electrical solutions across Greater Sydney. From 24/7 emergency repairs, lighting, rewiring, and switchboard upgrades to EV chargers and solar installations, our certified team handles all residential and commercial electrical needs with zero hidden fees.
                </p>

                <!-- Feature Micro-Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-body-tertiary border backdrop-blur">
                            <div class="feature-icon-box bg-accent-subtle text-accent rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-house-gear fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-0 text-body">Homes & Businesses</h6>
                                <span class="extra-small text-muted">Complete General Electrical Solutions</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-body-tertiary border backdrop-blur">
                            <div class="feature-icon-box bg-accent-subtle text-accent rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-lightning-charge fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-0 text-body">Clean Energy Experts</h6>
                                <span class="extra-small text-muted">Solar Panels, Batteries & EV Charging</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action CTAs -->
                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                    <a href="#services-grid" class="btn btn-power btn-lg rounded-pill px-4 py-3 text-uppercase tracking-wide shadow-sm">
                        View All Services
                    </a>
                    <a href="tel:61405005869" class="btn btn-power text-dark btn-lg px-4 py-3 rounded-pill shadow-sm">
                        <i class="fas fa-phone"></i>
                        <span>Call 0405 005 869</span>
                    </a>
                </div>
            </div>

            <!-- Column 2: Service Coverage & Metrics Card -->
            <div class="col-lg-5">
                <div class="about-hero-card-wrapper position-relative">

                    <!-- Glassmorphism Main Display Card -->
                    <div class="card glass-hero-card border-0 shadow-lg rounded-4 p-4 p-md-5 overflow-hidden position-relative backdrop-blur">
                        <div class="card-glow-backdrop"></div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <span class="badge bg-accent text-dark fw-semibold text-uppercase px-3 py-2 rounded-pill">
                                Why Choose 24/7 Sparky
                            </span>
                            <i class="bi bi-shield-check fs-3 text-accent"></i>
                        </div>

                        <h3 class="fw-semibold text-uppercase text-body mb-3">Guaranteed Safety & Upfront Pricing</h3>
                        <p class="text-body-secondary small mb-4">
                            We provide upfront fixed quotes, 24/7 rapid emergency dispatch, and guaranteed compliance with Australian safety standards (AS/NZS 3000) on every job.
                        </p>

                        <div class="d-flex flex-column gap-3 mb-4">
                            <!-- Verification Point 1 -->
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-body-tertiary border backdrop-blur">
                                <i class="bi bi-check-circle-fill text-accent fs-5"></i>
                                <div>
                                    <span class="extra-small text-muted d-block text-uppercase fw-semibold">Local & Fully Certified</span>
                                    <span class="fw-semibold text-body">Fully Licensed & Insured Electricians</span>
                                </div>
                            </div>

                            <!-- Verification Point 2 -->
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-body-tertiary border backdrop-blur">
                                <i class="bi bi-check-circle-fill text-accent fs-5"></i>
                                <div>
                                    <span class="extra-small text-muted d-block text-uppercase fw-semibold">Honest Service</span>
                                    <span class="fw-semibold text-body">Flat Quotes & No Hidden Call-Out Fees</span>
                                </div>
                            </div>
                        </div>

                        <hr class="border-secondary opacity-15 my-4">

                        <!-- Live Metrics Grid -->
                        <div class="row g-3 text-center" id="servicesStatsContainer">
                            <div class="col-6">
                                <div class="stat-item border-end border-secondary border-opacity-10">
                                    <h3 class="fw-black text-body mb-0">24/7</h3>
                                    <span class="extra-small text-muted fw-semibold">Sydney Emergency Dispatch</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <h3 class="fw-black text-body mb-0"><span class="counter" data-target="100">100</span>%</h3>
                                    <span class="extra-small text-muted fw-semibold">Upfront Pricing Guaranteed</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- SERVICES GRID SECTION -->
<section class="services-grid-section py-5 py-lg-6 position-relative" id="services-grid">
    <div class="container position-relative z-2" id="services-container">
        <!-- Rendered dynamically from JSON -->
    </div>
</section>

<!-- FULLSCREEN SERVICE DETAILS MODAL -->
<div class="modal fade glass-fullscreen-modal" id="serviceDetailsModal" tabindex="-1" aria-labelledby="modalServiceTitle" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-light-subtle border-0">

            <!-- Floating Navigation Header -->
            <div class="modal-header border-0 position-fixed top-0 start-0 w-100 z-3 px-3 px-lg-5 py-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-body-tertiary border shadow-sm backdrop-blur">
                    <span class="pulse-dot bg-accent rounded-circle"></span>
                    <span class="text-uppercase tracking-wider extra-small fw-bold text-body">24/7 Sparky • Trade Service Page</span>
                </div>
                <button type="button" class="btn-close custom-modal-close bg-accent text-black p-3 rounded-circle shadow-sm border" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Scrollable Modal Body -->
            <div class="modal-body p-0 overflow-y-auto">

                <!-- TOP HERO SECTION -->
                <div class="service-hero-banner position-relative w-100 overflow-hidden bg-dark" style="height: 45vh; min-height: 320px;">
                    <img id="modalServiceImg" src="" alt="Service Banner" class="w-100 h-100 object-fit-cover opacity-75">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 p-md-5 bg-gradient">
                        <div class="container max-w-900 mx-auto">
                            <span class="badge bg-accent text-dark fw-bold text-uppercase rounded-pill px-3 py-2 mb-2 shadow-sm extra-small">Certified Electrical Solutions</span>
                            <h1 class="display-4 fw-black text-uppercase text-white mb-1 drop-shadow" id="modalServiceTitle">Service Title</h1>
                            <p class="text-white-50 lead fs-6 mb-0 max-w-600" id="modalServiceDesc">Service short summary paragraph.</p>
                        </div>
                    </div>
                </div>

                <!-- MAIN PAGE CONTENT SECTION -->
                <div class="container max-w-900 mx-auto py-5 px-4 px-md-3">

                    <!-- Dynamic Sections Injected via JS -->
                    <div id="modalServiceSectionsContainer"></div>

                    <!-- Next Service Navigator -->
                    <div class="next-service-nav-wrapper my-5 pt-4 border-top">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 p-3 p-md-4 rounded-4 bg-body-tertiary border">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-accent-subtle text-accent p-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                    <i class="bi bi-arrow-right-short fs-3"></i>
                                </div>
                                <div>
                                    <span class="extra-small text-uppercase tracking-wider text-body-secondary fw-semibold d-block">Explore Next Service</span>
                                    <strong class="h6 fw-bold text-body mb-0" id="nextServiceTitleText">Next Service Name</strong>
                                </div>
                            </div>
                            <button type="button" id="triggerNextServiceBtn" class="btn btn-outline-secondary btn-sm rounded-pill px-4 py-2 text-uppercase fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                                Next Service <i class="bi bi-chevron-right extra-small"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FIXED FOOTER BAR -->
            <div class="modal-footer border-top bg-body-tertiary backdrop-blur px-4 py-3 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">

                <div class="d-flex align-items-center flex-wrap gap-3 w-100 w-md-auto">
                    <div class="d-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-secondary-subtle border border-secondary-subtle">
                        <span class="pulse-dot bg-accent rounded-circle"></span>
                        <span class="extra-small fw-bold text-body text-uppercase tracking-wider">24/7 Dispatch Active</span>
                    </div>
                    <div class="d-none d-sm-flex align-items-center gap-2 text-body-secondary extra-small border-start ps-3">
                        <i class="bi bi-lightning-charge-fill text-accent fs-6"></i>
                        <span>Upfront Fixed Pricing • <strong class="text-body">$0 Call-Out*</strong></span>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 w-100 w-md-auto justify-content-end flex-wrap">
                    <button type="button" id="modalShareBtn" class="btn btn-outline-secondary btn-icon rounded-circle d-inline-flex align-items-center justify-content-center p-2" style="width: 42px; height: 42px;">
                        <i class="bi bi-share"></i>
                    </button>

                    <div class="dropdown flex-fill flex-sm-grow-0">
                        <button class="btn btn-outline-secondary rounded-pill px-4 py-2 text-uppercase fw-semibold w-100 d-inline-flex align-items-center justify-content-center gap-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-telephone"></i> Call Us
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 p-2 backdrop-blur">
                            <li>
                                <a class="dropdown-menu-item d-flex align-items-center gap-3 p-2.5 rounded-3 text-decoration-none text-body" href="tel:1300000000">
                                    <div class="rounded-circle bg-danger-subtle text-danger p-2 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block small text-uppercase fw-bold text-danger">24/7 Emergency Dispatch</strong>
                                        <span class="extra-small text-body-secondary">Immediate priority response</span>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider my-1 opacity-10"></li>
                            <li>
                                <a class="dropdown-menu-item d-flex align-items-center gap-3 p-2.5 rounded-3 text-decoration-none text-body" href="tel:1300000001">
                                    <div class="rounded-circle bg-body-secondary text-body p-2 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block small text-uppercase fw-bold">General Bookings & Quotes</strong>
                                        <span class="extra-small text-body-secondary">Mon-Fri 7:00 AM - 5:00 PM</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <a id="modalBookBtn" href="#" target="_blank" class="btn btn-power text-dark fw-bold text-uppercase rounded-pill px-4 py-2 flex-fill flex-sm-grow-0 d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                        <i class="bi bi-whatsapp fs-5"></i> Book via WhatsApp
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include "../includes/partials/app.php";
?>
