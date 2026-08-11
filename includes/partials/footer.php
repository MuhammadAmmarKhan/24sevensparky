<section id="contact" class="py-5 bg-body-tertiary">
    <div class="container py-4">
        <div class="row">

            <!-- Contact Form Column -->
            <div class="col-lg-6 reveal-on-scroll">
                <div class="mb-4">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white border border-secondary-subtle shadow-sm mb-4">
                        <i class="bi bi-lightning-charge-fill text-accent"></i>
                        <span class="small fw-semibold text-uppercase letter-spacing-1 text-secondary">Oran Park & Greater Sydney</span>
                    </div>
                    <h2 class="display-4 fw-black text-uppercase tracking-tight text-body mb-3" style="line-height: 1.1;">
                        Need A Sparky Today?<br>
                        <span class="text-accent">Consider It Done.</span>
                    </h2>
                    <p class="text-muted lead">
                        From quick home fixes and switchboard upgrades to complete solar setups. Get in touch for upfront pricing and fast, reliable service.
                    </p>
                </div>

                <a href="https://wa.me/61405005869?text=Hi%20Sparky%2C%20I%20would%20like%20to%20request%20a%20quote."
                   class="btn btn-whatsapp-action btn-lg rounded-pill w-100 d-inline-flex align-items-center justify-content-center gap-2 mb-4 py-3 shadow-sm"
                   target="_blank"
                   rel="noopener noreferrer">
                    <i class="bi bi-whatsapp fs-5"></i> Chat Directly on WhatsApp
                </a>

                <div class="d-flex align-items-center my-4 text-muted">
                    <hr class="flex-grow-1 my-0">
                    <span class="px-3 extra-small text-uppercase fw-semibold text-secondary">Or Send Us A Message</span>
                    <hr class="flex-grow-1 my-0">
                </div>

                <!-- Form Response Alert Box -->
                <div id="formAlert" class="alert d-none rounded-3 mb-4" role="alert"></div>

                <form id="sparkyContactForm" action="process-form.php" method="POST" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="contactName" class="form-label fw-semibold extra-small text-secondary text-uppercase">Full Name</label>
                            <input type="text" class="form-control form-control-lg" id="contactName" name="contactName" placeholder="John Doe" required>
                            <div class="invalid-feedback">Please enter your full name.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="contactPhone" class="form-label fw-semibold extra-small text-secondary text-uppercase">Phone Number</label>
                            <input type="tel" class="form-control form-control-lg" id="contactPhone" name="contactPhone" placeholder="0400 000 000" required>
                            <div class="invalid-feedback">Please enter a valid Australian phone number (e.g. 0400 000 000 or +61 400 000 000).</div>
                        </div>
                        <div class="col-12">
                            <label for="contactEmail" class="form-label fw-semibold extra-small text-secondary text-uppercase">Email Address</label>
                            <input type="email" class="form-control form-control-lg" id="contactEmail" name="contactEmail" placeholder="name@example.com" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                        <div class="col-12">
                            <label for="serviceType" class="form-label fw-semibold extra-small text-secondary text-uppercase">Service Required</label>
                            <select class="form-select form-select-lg" id="serviceType" name="serviceType" required>
                                <option value="" selected disabled>Select a service...</option>
                                <option value="Emergency Response">Emergency 24/7 Response</option>
                                <option value="Switchboard Upgrade">Switchboard & Safety Upgrade</option>
                                <option value="Solar & Battery">Solar & Battery Setup</option>
                                <option value="Commercial Fitout">Commercial Fitout</option>
                            </select>
                            <div class="invalid-feedback">Please select a service.</div>
                        </div>
                        <div class="col-12">
                            <label for="contactMessage" class="form-label fw-semibold extra-small text-secondary text-uppercase">Message</label>
                            <textarea class="form-control form-control-lg" id="contactMessage" name="contactMessage" rows="3" placeholder="Describe your electrical service needs..." required></textarea>
                            <div class="invalid-feedback">Please provide a message.</div>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" id="submitBtn" class="btn btn-power btn-lg rounded-pill w-100 py-3 text-uppercase">
                                Send Request <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Map & Testimonials Column -->
            <div class="col-lg-6 reveal-on-scroll">
                <div class="h-100 d-flex flex-column">
                    <div class="mb-3">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white border border-secondary-subtle shadow-sm mb-3">
                            <i class="bi bi-geo-alt-fill text-accent"></i>
                            <span class="small fw-semibold text-uppercase letter-spacing-1 text-secondary">Track Record</span>
                        </div>
                        <h3 class="display-4 fw-black text-uppercase tracking-tight text-body mb-3">Recent Completed
                            <br><span class="text-accent">Jobs</span></h3>
                        <p class="text-muted small mb-3">Filter by area or hover over pins to view verified customer reviews.</p>

                        <!-- Interactive Suburb Filter Pills -->
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <button class="btn btn-sm btn-menu-pill active" onclick="filterMap('all', this)">All Sydney</button>
                            <button class="btn btn-sm btn-menu-pill" onclick="filterMap('Oran Park', this)">Oran Park</button>
                            <button class="btn btn-sm btn-menu-pill" onclick="filterMap('Camden', this)">Camden</button>
                            <button class="btn btn-sm btn-menu-pill" onclick="filterMap('Campbelltown', this)">Campbelltown</button>
                            <button class="btn btn-sm btn-menu-pill" onclick="filterMap('Narellan', this)">Narellan</button>
                        </div>
                    </div>

                    <!-- Map Box -->
                    <div class="flex-grow-1 border border-secondary-subtle rounded-4 overflow-hidden shadow-sm position-relative" style="min-height: 520px;">
                        <div id="sparkyCoverageMap" style="width: 100%; height: 100%; min-height: 520px;"></div>

                        <!-- Quick Geolocation Button -->
                        <button class="btn btn-power btn-sm position-absolute bottom-0 end-0 m-3 shadow-sm border border-secondary" onclick="locateUser()" style="z-index:999">
                            <i class="bi bi-crosshair text-black me-1"></i> Check My Location
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<footer id="ultra-footer" class="bg-accent text-dark pt-3 overflow-hidden position-relative">

    <!-- Top Kinetic Ticker Banner -->
    <div class="footer-ticker border-bottom border-dark border-opacity-25 pb-3 mb-5">
        <div class="footer-ticker-track">
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-bolt me-2"></i> 24/7 EMERGENCY SPARKY</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-solar-panel me-2"></i> ORAN PARK SOLAR SPECIALISTS</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-charging-station me-2"></i> EV CHARGER INSTALLATIONS</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-shield-halved me-2"></i> LICENSED NSW ELECTRICIANS</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <!-- Duplicate Set for Continuous Loop -->
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-bolt me-2"></i> 24/7 EMERGENCY SPARKY</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-solar-panel me-2"></i> ORAN PARK SOLAR SPECIALISTS</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-charging-station me-2"></i> EV CHARGER INSTALLATIONS</span>
            <span class="fs-4 text-dark opacity-50">•</span>
            <span class="fw-black text-uppercase tracking-tight fs-4 text-dark"><i class="fas fa-shield-halved me-2"></i> LICENSED NSW ELECTRICIANS</span>
            <span class="fs-4 text-dark opacity-50">•</span>
        </div>
    </div>

    <div class="container py-2">

        <!-- Massive Brand Typography Header -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark text-white extra-small fw-semibold text-uppercase tracking-wider mb-3">
                    <span class="p-1 rounded-circle bg-accent"></span>
                    <span>Oran Park & Western Sydney</span>
                </div>
                <h1 class="footer-title-huge text-dark m-0 gsap-reveal-title">
                    <a href="/index.php" class="text-dark text-decoration-none">24/7 SPARKY<span class="text-white">.</span></a>
                </h1>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <p class="fw-semibold text-dark fs-5 mb-3">Powering Oran Park Day & Night.</p>
                <a href="tel:0405005869" class="btn btn-dark text-white btn-lg fw-black text-uppercase tracking-wider px-4 py-3 rounded-pill d-inline-flex align-items-center gap-3 shadow-lg gsap-btn-pulse">
                    <i class="fas fa-phone-volume text-accent fs-4"></i>
                    <span>0405 005 869</span>
                </a>
            </div>
        </div>

        <hr class="border-dark border-opacity-25 my-5">

        <!-- Properly Proportionated 5-Column Flex Grid -->
        <div class="row g-4 mb-5 justify-content-between">

            <!-- Col 1: Connect With Us -->
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="h6 fw-black text-uppercase tracking-wider text-dark mb-3">Connect With Us</h4>
                <p class="fw-medium text-dark opacity-85 small mb-4">
                    Follow our real daily installs, trade tips, and project updates across Oran Park and Camden.
                </p>

                <div class="d-flex align-items-center gap-2 mb-4 gsap-social-container">
                    <a href="https://www.facebook.com/p/247-Sparky-PTY-LTD-61563577012636/" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/24sevensparky/" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>

                <div class="d-inline-flex align-items-center gap-2 text-dark extra-small fw-semibold text-uppercase tracking-wider px-3 py-2 rounded-3 bg-dark bg-opacity-10 border border-dark border-opacity-15">
                    <i class="fas fa-shield fs-6"></i>
                    <span>NSW License: 491657C</span>
                </div>
            </div>

            <!-- Col 2: General Services -->
            <div class="col-6 col-md-4 col-lg-2">
                <h4 class="h6 fw-black text-uppercase tracking-wider text-dark mb-3">General Services</h4>
                <ul class="list-unstyled d-flex flex-column gap-2 small fw-semibold">
                    <li><a href="/services/power-points" class="footer-nav-link view-details-btn" data-slug="power-points">Power Points</a></li>
                    <li><a href="/services/switchboard-upgrade" class="footer-nav-link view-details-btn" data-slug="switchboard-upgrade">Switchboard Upgrade</a></li>
                    <li><a href="/services/exhaust-fans" class="footer-nav-link view-details-btn" data-slug="exhaust-fans">Exhaust Fans</a></li>
                    <li><a href="/services/smoke-alarms" class="footer-nav-link view-details-btn" data-slug="smoke-alarms">Smoke Alarms</a></li>
                    <li><a href="/services/led-downlights" class="footer-nav-link view-details-btn" data-slug="led-downlights">LED Downlights</a></li>
                    <li><a href="/services/ceiling-fans" class="footer-nav-link view-details-btn" data-slug="ceiling-fans">Ceiling Fans</a></li>
                </ul>
            </div>

            <!-- Col 3: Specialized & Commercial -->
            <div class="col-6 col-md-4 col-lg-2">
                <h4 class="h6 fw-black text-uppercase tracking-wider text-dark mb-3">Specialized Trade</h4>
                <ul class="list-unstyled d-flex flex-column gap-2 small fw-semibold">
                    <li><a href="/services/office-fit-outs" class="footer-nav-link view-details-btn" data-slug="office-fit-outs">Office Fit-Outs</a></li>
                    <li><a href="/services/home-renovation" class="footer-nav-link view-details-btn" data-slug="home-renovation">Home Renovation</a></li>
                    <li><a href="/services/home-appliance" class="footer-nav-link view-details-btn" data-slug="home-appliance">Appliance Circuits</a></li>
                    <li><a href="/services/data-cabling" class="footer-nav-link view-details-btn" data-slug="data-cabling">Data Cabling</a></li>
                    <li><a href="/services/tv-antenna" class="footer-nav-link view-details-btn" data-slug="tv-antenna">TV Antenna</a></li>
                    <li><a href="/services/house-wiring" class="footer-nav-link view-details-btn" data-slug="house-wiring">Full House Rewiring</a></li>
                </ul>
            </div>

            <!-- Col 4: Direct HQ & Operating Hours -->
            <div class="col-6 col-md-4 col-lg-2">
                <h4 class="h6 fw-black text-uppercase tracking-wider text-dark mb-3">Direct HQ</h4>
                <ul class="list-unstyled d-flex flex-column gap-2 small fw-semibold text-dark mb-4">
                    <li class="d-flex align-items-start gap-2">
                        <i class="fas fa-location-dot mt-1"></i>
                        <a href="https://maps.google.com/?q=Oran+Park+NSW+2570" target="_blank" rel="noopener noreferrer" class="footer-nav-link">Oran Park NSW 2570</a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@247sparky.com.au" class="footer-nav-link">info@247sparky.com.au</a>
                    </li>
                </ul>

                <h4 class="h6 fw-black text-uppercase tracking-wider text-dark mb-2">Hours</h4>
                <ul class="list-unstyled d-flex flex-column gap-1 extra-small fw-semibold text-dark">
                    <li>Mon–Fri: 7am–5:30pm</li>
                    <li>Saturday: 7am–2pm</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

            <!-- Col 5: Legal & Information -->
            <div class="col-6 col-md-4 col-lg-2">
                <h4 class="h6 fw-black text-uppercase tracking-wider text-dark mb-3">Legal & Info</h4>
                <ul class="list-unstyled d-flex flex-column gap-2 small fw-semibold">
                    <li><a href="/privacy-policy.php" class="footer-nav-link">Privacy Policy</a></li>
                    <li><a href="/terms-and-conditions.php" class="footer-nav-link">Terms of Trade</a></li>
                    <li><a href="/dictionary.php" class="footer-nav-link">Dictionary</a></li>
                    <li><a href="/sitemap.xml" class="footer-nav-link">Sitemap</a></li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Bottom Copyright Strip -->
    <div class="bg-dark text-white py-3 mt-5">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 extra-small fw-semibold">
            <div class="d-flex align-items-center gap-2">
                <i class="fas fa-bolt text-accent"></i>
                <span>&copy; <?=date('Y')?> 24/7 Sparky. Built for Australian Standards (AS/NZS 3000).</span>
            </div>
            <div class="text-md-end">
                <span>Design &amp; Development with <i class="fas fa-heart text-danger mx-1"></i> by <a href="https://smartservix.com.au" target="_blank" rel="noopener noreferrer" class="text-white text-decoration-underline hover-accent">Smart Servix</a></span>
            </div>
        </div>
    </div>
</footer>
<!-- 1. DYNAMIC CIRCULAR-PROGRESS BACK TO TOP BUTTON -->
<div id="backToTop" class="back-to-top-wrapper" role="button" aria-label="Back to top">
    <svg class="progress-ring" width="56" height="56" viewBox="0 0 56 56">
        <circle class="progress-ring__circle-bg" stroke="rgba(255,255,255,0.1)" stroke-width="4" fill="transparent" r="24" cx="28" cy="28"/>
        <circle class="progress-ring__circle" stroke="var(--sparky-accent, #78c805)" stroke-width="4" fill="transparent" r="24" cx="28" cy="28"/>
    </svg>
    <div class="back-to-top-content">
        <i class="bi bi-arrow-up-short fs-4"></i>
        <span class="progress-percent">0%</span>
    </div>
</div>

<!-- 2. GLASSMORPHISM COOKIE CONSENT BANNER -->
<aside id="cookieConsent" class="cookie-banner-glass border shadow-lg" aria-label="Privacy & Cookie Preferences">
    <div class="cookie-content-wrapper">
        <!-- Icon & Header -->
        <div class="d-flex align-items-center gap-3 mb-2">
            <div class="cookie-icon-glow">
                <i class="bi bi-shield-lock-fill text-accent fs-4"></i>
            </div>
            <div>
                <h6 class="fw-semibold mb-0 text-body">Your Privacy Controls</h6>
                <span class="text-muted extra-small">No invasive trackers. Just optimal site performance.</span>
            </div>
        </div>

        <!-- Toggleable Options -->
        <div class="cookie-options-grid my-3">
            <div class="form-check form-switch custom-cookie-switch">
                <input class="form-check-input" type="checkbox" id="essentialCookies" checked disabled>
                <label class="form-check-label extra-small fw-semibold" for="essentialCookies">
                    Essential <i class="bi bi-info-circle text-muted" title="Required for map rendering & forms"></i>
                </label>
            </div>

            <div class="form-check form-switch custom-cookie-switch">
                <input class="form-check-input" type="checkbox" id="analyticsCookies" checked>
                <label class="form-check-label extra-small fw-semibold" for="analyticsCookies">
                    Performance
                </label>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex align-items-center gap-2">
            <button id="acceptAllCookies" class="btn btn-power btn-sm rounded-pill px-3 py-2 text-uppercase fw-semibold w-100">
                Accept All
            </button>
            <button id="acceptNecessaryCookies" class="btn btn-outline-secondary btn-sm rounded-pill px-3 py-2 w-100">
                Strictly Necessary
            </button>
        </div>
    </div>
</aside>