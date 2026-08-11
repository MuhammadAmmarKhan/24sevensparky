<!-- MAIN FIXED HEADER WRAPPER -->
<header id="siteHeader" class="fixed-top header-wrapper">

    <!-- 1. TOP UTILITY BAR -->
    <div class="top-bar-dark text-white-50 py-2 border-bottom border-dark reveal-top-bar">
        <div class="container px-3 px-md-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                <!-- Left: Live Grid Status & Office Location -->
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-2 bg-black bg-opacity-50 px-3 py-1 rounded-pill border border-white border-opacity-10">
                        <span class="live-pulse-dot"></span>
                        <span class="text-white fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 0.05em;">Dispatch Active</span>
                    </div>

                    <!-- Office Location -->
                    <span class="d-none d-md-inline-flex align-items-center gap-2 text-white-50 small">
                        <i class="bi bi-geo-alt-fill text-accent"></i> Oran Park 2570, NSW
                    </span>

                    <span class="d-none d-xl-inline-flex text-white-50 opacity-25">|</span>

                    <!-- Arrival Guarantee -->
                    <span class="d-none d-xl-inline-flex align-items-center gap-1 text-white-50 small">
                        <i class="bi bi-shield-check text-accent me-1"></i> 60-Min On-Site Arrival Guarantee
                    </span>
                </div>

                <!-- Right: Quick Contact Touchpoints -->
                <div class="d-flex align-items-center gap-3 text-white-50 small ms-auto ms-md-0">
                    <!-- Phone -->
                    <a href="tel:61405005869" class="top-bar-action-link text-decoration-none text-white fw-bold d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-outbound-fill text-accent"></i> 0405 005 869
                    </a>

                    <span class="text-white-50 opacity-25 d-none d-sm-inline">|</span>

                    <!-- Email -->
                    <a href="mailto:info@24sevensparky.com.au" class="top-bar-action-link text-decoration-none text-white-50 d-none d-sm-flex align-items-center gap-2">
                        <i class="bi bi-envelope-fill text-accent"></i> info@24sevensparky.com.au
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- 2. MAIN NAVIGATION BAR -->
    <div class="container px-3 reveal-navbar">
        <nav class="navbar navbar-expand navbar-architectural rounded-pill py-2 my-2">
            <div class="container px-3">

                <!-- LEFT: CTA -->
                <div class="d-none d-md-flex align-items-center justify-content-start flex-grow-1" style="flex-basis: 0;">
                    <a href="/contact-us.php" class="btn btn-power px-3 py-2 rounded-pill text-uppercase shadow-sm small">
                        Book Service <i class="bi bi-arrow-right-short fs-6 ms-1"></i>
                    </a>
                </div>

                <!-- CENTER: Brand Logo -->
                <div class="d-flex justify-content-center align-items-center text-center">
                    <a class="navbar-brand text-uppercase m-0 p-0 d-flex align-items-center" href="/">
                        <img id="navbarLogo" src="/assets/images/logo-black.png" alt="24/7 Sparky" class="img-fluid navbar-brand-logo">
                    </a>
                </div>

                <!-- RIGHT: Drawer Trigger -->
                <div class="d-flex align-items-center justify-content-end flex-grow-1" style="flex-basis: 0;">
                    <button class="btn btn-menu-pill rounded-pill d-flex align-items-center gap-2 px-3 py-1 text-decoration-none shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuDrawer" aria-controls="menuDrawer">
                        <span class="small fw-bold d-none d-md-inline-block text-uppercase tracking-wider">Menu</span>
                        <i class="bi bi-list fs-5"></i>
                    </button>
                </div>

            </div>
        </nav>
    </div>

</header>

<!-- 3. POWER VAULT OFFCANVAS PANEL (Fully Dynamic Theme Adaptive) -->
<div class="offcanvas offcanvas-end offcanvas-vault w-100" tabindex="-1" id="menuDrawer" aria-labelledby="menuDrawerLabel" style="max-width: 420px;">

    <!-- Drawer Header -->
    <div class="offcanvas-header px-4 py-3 border-bottom">
        <div class="d-flex align-items-center gap-2">
            <span class="live-pulse-dot"></span>
            <h6 class="offcanvas-title text-uppercase fw-bold tracking-wider m-0 small" id="menuDrawerLabel">
                System Navigation
            </h6>
        </div>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Drawer Body -->
    <div class="offcanvas-body d-flex flex-column justify-content-between px-4 py-3">

        <!-- Top Section: Core Directory & Direct Contacts -->
        <div>
            <!-- Quick Category Label -->
            <div class="text-uppercase tracking-wider text-body-secondary fw-bold mb-2" style="font-size: 0.68rem; letter-spacing: 0.08em;">
                Core Directory
            </div>

            <div class="accordion vault-accordion" id="drawerAccordion">

                <!-- Services Accordion -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingServices">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                            <i class="bi bi-lightning-charge text-accent me-2"></i> Electrical & Solar Services
                        </button>
                    </h2>
                    <div id="collapseServices" class="accordion-collapse collapse" aria-labelledby="headingServices" data-bs-parent="#drawerAccordion">
                        <div class="accordion-body">
                            <ul class="nav flex-column gap-1 p-0 m-0">
                                <li>
                                    <a class="vault-nav-link justify-content-between" href="/services">
                                        <span class="fw-bold">All Services Overview</span>
                                        <i class="bi bi-arrow-right-short text-accent"></i>
                                    </a>
                                </li>

                                <!-- Category 1: Electrical Services -->
                                <li><hr class="dropdown-divider my-2"></li>
                                <li class="px-2 py-1 text-uppercase text-body-secondary fw-bold" style="font-size: 0.65rem; letter-spacing: 0.05em;">Electrical Services</li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/power-points" data-slug="power-points">
                                        <i class="bi bi-plug-fill text-accent"></i> Power Points
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/switchboard-upgrade" data-slug="switchboard-upgrade">
                                        <i class="bi bi-cpu text-accent"></i> Switchboard Upgrade
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/exhaust-fans" data-slug="exhaust-fans">
                                        <i class="bi bi-fan text-accent"></i> Exhaust Fans
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/smoke-alarms" data-slug="smoke-alarms">
                                        <i class="bi bi-bell-fill text-accent"></i> Smoke Alarms
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/office-fit-outs" data-slug="office-fit-outs">
                                        <i class="bi bi-briefcase text-accent"></i> Office Fit-Outs
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/home-renovation" data-slug="home-renovation">
                                        <i class="bi bi-house-gear text-accent"></i> Home Renovation
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/led-downlights" data-slug="led-downlights">
                                        <i class="bi bi-lightbulb text-accent"></i> LED Downlights
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/home-appliance" data-slug="home-appliance">
                                        <i class="bi bi-tools text-accent"></i> Home Appliance
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/ceiling-fans" data-slug="ceiling-fans">
                                        <i class="bi bi-wind text-accent"></i> Ceiling Fans
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/data-cabling" data-slug="data-cabling">
                                        <i class="bi bi-ethernet text-accent"></i> Data Cabling
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/tv-antenna" data-slug="tv-antenna">
                                        <i class="bi bi-broadcast text-accent"></i> TV Antenna
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/house-wiring" data-slug="house-wiring">
                                        <i class="bi bi-shield-check text-accent"></i> House Wiring
                                    </a>
                                </li>

                                <!-- Category 2: Solar & Renewable Energy Solutions -->
                                <li><hr class="dropdown-divider my-2"></li>
                                <li class="px-2 py-1 text-uppercase text-body-secondary fw-bold" style="font-size: 0.65rem; letter-spacing: 0.05em;">Solar & Renewable Energy</li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/solar-panel-installation" data-slug="solar-panel-installation">
                                        <i class="bi bi-sun text-accent"></i> Solar Panel Installation
                                    </a>
                                </li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/solar-battery-installation" data-slug="solar-battery-installation">
                                        <i class="bi bi-battery-charging text-accent"></i> Solar Battery Installation
                                    </a>
                                </li>

                                <!-- Category 3: EV Charging Solutions -->
                                <li><hr class="dropdown-divider my-2"></li>
                                <li class="px-2 py-1 text-uppercase text-body-secondary fw-bold" style="font-size: 0.65rem; letter-spacing: 0.05em;">EV Charging Solutions</li>
                                <li>
                                    <a class="vault-nav-link gap-2 view-details-btn" href="/services/ev-charging-installation" data-slug="ev-charging-installation">
                                        <i class="bi bi-ev-station text-accent"></i> EV Charging Installation
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Corporate Accordion -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCompany">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCompany" aria-expanded="false" aria-controls="collapseCompany">
                            <i class="bi bi-building text-accent me-2"></i> Corporate & Agency
                        </button>
                    </h2>
                    <div id="collapseCompany" class="accordion-collapse collapse" aria-labelledby="headingCompany" data-bs-parent="#drawerAccordion">
                        <div class="accordion-body">
                            <ul class="nav flex-column gap-1 p-0 m-0">
                                <li><a class="vault-nav-link gap-2" href="/about-us.php"><i class="bi bi-info-circle text-accent"></i> About 24/7 Sparky</a></li>
                                <li><a class="vault-nav-link gap-2" href="/safety-and-licensing.php"><i class="bi bi-patch-check text-accent"></i> Safety & Licensing</a></li>
                                <li><a class="vault-nav-link gap-2" href="/commercial-projects.php"><i class="bi bi-briefcase text-accent"></i> Commercial Projects</a></li>
                                <li><a class="vault-nav-link gap-2" href="/careers.php"><i class="bi bi-people text-accent"></i> Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Direct Contact Link -->
                <div class="mt-2">
                    <a href="/contact-us.php" class="vault-direct-link">
                        <span>Contact & Booking</span>
                        <i class="bi bi-arrow-up-right-circle text-accent fs-5"></i>
                    </a>
                </div>

            </div>

            <!-- Fast Information Matrix -->
            <div class="mt-3 p-3 rounded-3 bg-body-tertiary border">
                <div class="text-uppercase tracking-wider text-body-secondary fw-bold mb-2" style="font-size: 0.65rem; letter-spacing: 0.08em;">
                    Direct Info & HQ
                </div>
                <div class="d-flex flex-column gap-2 small">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill text-accent"></i>
                        <span class="fw-semibold">Oran Park 2570, NSW, Australia</span>
                    </div>
                    <a href="tel:61405005869" class="text-decoration-none text-body d-flex align-items-center gap-2 vault-info-hover">
                        <i class="bi bi-telephone-fill text-accent"></i>
                        <span class="fw-bold">0405 005 869</span>
                    </a>
                    <a href="mailto:info@24sevensparky.com.au" class="text-decoration-none text-body d-flex align-items-center gap-2 vault-info-hover">
                        <i class="bi bi-envelope-fill text-accent"></i>
                        <span class="fw-semibold">info@24sevensparky.com.au</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Controls & Dispatch Card -->
        <div class="mt-3 pt-3 border-top">

            <!-- Emergency Dispatch Card -->
            <div class="emergency-dispatch-card p-3 mb-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1 rounded-pill fw-bold text-uppercase" style="font-size: 0.65rem;">
                        24/7 Rapid Response
                    </span>
                    <i class="bi bi-telephone-inbound text-accent"></i>
                </div>
                <h6 class="fw-bold mb-1">Need Immediate Dispatch?</h6>
                <p class="small text-body-secondary mb-3" style="font-size: 0.8rem;">Electrical fault, power outage, or switchboard sparks?</p>
                <a href="tel:0405005869" class="btn btn-power w-100 py-2 rounded-3 fw-bold text-uppercase tracking-wider small d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-telephone-fill"></i> Call 0405 005 869
                </a>
            </div>

            <!-- Theme Toggle Box -->
            <div class="d-flex align-items-center justify-content-between p-2 rounded-3 bg-body-tertiary border">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-palette text-body-secondary me-1"></i>
                    <span class="fw-bold small text-uppercase tracking-wider text-body-secondary" style="font-size: 0.7rem;">Interface Theme</span>
                </div>
                <button class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-2 rounded-pill px-3 py-1 shadow-none" id="themeToggler" aria-label="Toggle theme">
                    <i class="bi bi-sun-fill text-accent" id="themeIcon"></i>
                    <span id="themeText" class="fw-bold" style="font-size: 0.75rem;">Light Mode</span>
                </button>
            </div>

            <!-- Footer Text -->
            <div class="text-body-secondary text-center mt-2" style="font-size: 0.7rem;">
                Licensed Electrical Contractor • ARC & CEC Certified
            </div>

        </div>

    </div>
</div>