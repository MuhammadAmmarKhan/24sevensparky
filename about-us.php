<?php
$page_slug = "about-us";
$page_title = "About 24/7 Sparky | Sydney’s Trusted Electrical Agency & Contractors";
$page_description = "Meet Sydney's leading team of certified Level 2 ASP and commercial electricians. Built on ISO-certified quality management, continuous training, and 24/7 emergency reliability.";
$page_keywords = "about 24/7 sparky, best electrical company Sydney, accredited Level 2 ASP team, ISO certified electricians, local commercial electricians Sydney";
ob_start(); ?>

<section class="about-hero position-relative min-vh-100 d-flex align-items-center justify-content-center overflow-hidden py-5 py-lg-6 mt-5 bg-body">

    <!-- Background Image Layer with Theme-Adaptive Vignette Overlay -->
    <div class="hero-bg-wrapper position-absolute top-0 start-0 w-100 h-100 z-0 overflow-hidden">
        <img src="/assets/images/homebanner4.png" alt="Sydney Electrical Team" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 opacity-25">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay-gradient"></div>
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">

            <!-- Column 1: Core Narrative & Trust Signals -->
            <div class="col-lg-7">
                <!-- Eyebrow Tag -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-body-tertiary border shadow-sm mb-3 backdrop-blur">
                    <span class="pulse-dot bg-accent rounded-circle"></span>
                    <span class="text-uppercase tracking-wider extra-small fw-semibold text-body">ABOUT 24SEVEN SPARKY</span>
                </div>

                <!-- Headline -->
                <h1 class="display-4 text-uppercase fw-black text-body mb-4 tracking-tight">
                    Sydney’s Premier Choice For <span class="text-accent">Complete Electrical Solutions</span>.
                </h1>

                <!-- Subheading / Story Paragraph -->
                <p class="lead text-body-secondary mb-4" style="line-height: 1.7;">
                    At 24Seven Sparky, we deliver comprehensive, end-to-end electrical care across Sydney. While we excel in modern EV chargers and solar power integration, our expertise spans the full spectrum of general electrical services—from urgent 24/7 fault repairs, lighting design, and switchboard upgrades to full residential, commercial, and strata fitouts.
                    <br><br>Every job is carried out by fully licensed, insured electricians who prioritize safety, honest upfront pricing, and uncompromised quality on every installation.
                </p>

                <!-- Feature Micro-Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-body-tertiary border backdrop-blur">
                            <div class="feature-icon-box bg-accent-subtle text-accent rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-shield-check fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-0 text-body">Licensed & Fully Insured</h6>
                                <span class="extra-small text-muted">NSW Qualified Electricians</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-body-tertiary border backdrop-blur">
                            <div class="feature-icon-box bg-accent-subtle text-accent rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-clock-history fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-0 text-body">Full Electrical Services</h6>
                                <span class="extra-small text-muted">24/7 Emergency Coverage</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action CTAs -->
                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                    <a href="#meet-the-sparkies" class="btn btn-power btn-lg rounded-pill px-4 py-3 text-uppercase tracking-wide shadow-sm">
                        Meet Sparkies
                    </a>
                    <a href="tel:61405005869" class="btn btn-power text-dark btn-lg px-4 py-3 rounded-pill shadow-sm">
                        <i class="fas fa-phone"></i>
                        <span>Call 0405 005 869</span>
                    </a>
                </div>
            </div>

            <!-- Column 2: Interactive Card & Visual Stats Matrix -->
            <div class="col-lg-5">
                <div class="about-hero-card-wrapper position-relative">

                    <!-- Glassmorphism Main Display Card -->
                    <div class="card glass-hero-card border-0 shadow-lg rounded-4 p-4 p-md-5 overflow-hidden position-relative backdrop-blur">
                        <div class="card-glow-backdrop"></div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <span class="badge bg-accent text-dark fw-semibold text-uppercase px-3 py-2 rounded-pill">
                                AS/NZS 3000 Certified
                            </span>
                            <i class="bi bi-lightning-charge-fill fs-3 text-accent"></i>
                        </div>

                        <h3 class="fw-semibold text-uppercase text-body mb-3">Versatile & Dependable Sparkies</h3>
                        <p class="text-body-secondary small mb-4">
                            From basic power point installs to major commercial re-wiring across Greater Sydney, we bring Australian safety standards and modern craft to every trade service.
                        </p>

                        <hr class="border-secondary opacity-15 my-4">

                        <!-- Live Animated Counter Grid -->
                        <div class="row g-3 text-center" id="heroStatsContainer">
                            <div class="col-4">
                                <div class="stat-item">
                                    <h3 class="fw-black text-body mb-0"><span class="counter" data-target="15">0</span>+</h3>
                                    <span class="extra-small text-muted fw-semibold">Years Exp.</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item border-start border-end border-secondary border-opacity-10">
                                    <h3 class="fw-black text-body mb-0"><span class="counter" data-target="5200">0</span>+</h3>
                                    <span class="extra-small text-muted fw-semibold">Jobs Done</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <h3 class="fw-black text-body mb-0"><span class="counter" data-target="100">0</span>%</h3>
                                    <span class="extra-small text-muted fw-semibold">Guarantee</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<section id="meet-the-sparkies" class="py-5 py-lg-6 bg-body position-relative overflow-hidden">
    <div class="container py-3 py-lg-4">

        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-4 mb-lg-5">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-body border shadow-sm mb-3">
                    <i class="bi bi-people-fill text-accent"></i>
                    <span class="text-uppercase tracking-wider extra-small fw-semibold text-body">The Local Sydney Crew</span>
                </div>
                <h2 class="display-4 text-uppercase fw-black text-body tracking-tight mb-3">
                    Meet The <br><span class="text-accent">Sparkies</span>.
                </h2>
                <p class="lead text-body-secondary mb-0" style="max-width: 680px; margin: 0 auto;">
                    We aren't a nameless call center or a third-party directory. When you call 24Seven Sparky, you get licensed, background-checked local tradespeople who take genuine pride in delivering complete electrical solutions across Sydney.
                </p>
            </div>
        </div>

        <!-- HORIZONTALLY SCROLLABLE CREW CARD BAND (Mobile Swipe / Desktop Grid) -->
        <div class="sparky-crew-wrapper mb-5 overflow-x-auto pb-3">
            <div class="sparky-crew-track d-flex d-lg-grid gap-4">

                <!-- CARD 1: Emergency Sparkies -->
                <div class="sparky-crew-card flex-shrink-0">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-body-tertiary overflow-hidden">
                        <div class="p-4 bg-accent-subtle border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sparky-icon-avatar bg-body rounded-circle d-flex align-items-center justify-content-center text-accent shadow-sm">
                                    <i class="bi bi-lightning-charge-fill fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="h5 fw-black text-body mb-0">Emergency Sparkies</h4>
                                    <span class="extra-small text-muted fw-semibold">24/7 Rapid Response Crew</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="text-body-secondary small mb-3">
                                    Our rapid dispatch team responds around the clock for urgent electrical faults, sudden power outages, tripped switches, and dangerous wiring across Sydney.
                                </p>

                                <div class="crew-highlights p-3 rounded-3 bg-body border mb-3">
                                    <div class="extra-small text-uppercase tracking-wider fw-semibold text-muted mb-2">Crew Essentials</div>
                                    <ul class="list-unstyled extra-small text-body mb-0">
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Fast 24/7 On-Call Dispatch
                                        </li>
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Precise Fault Finding Tools
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Fully Stocked Service Vans
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a href="tel:61405005869" class="btn btn-outline-secondary btn-sm rounded-pill w-100 fw-semibold">
                                Call Emergency Crew
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: Commercial Sparkies -->
                <div class="sparky-crew-card flex-shrink-0">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-body-tertiary overflow-hidden">
                        <div class="p-4 bg-accent-subtle border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sparky-icon-avatar bg-body rounded-circle d-flex align-items-center justify-content-center text-accent shadow-sm">
                                    <i class="bi bi-building-check fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="h5 fw-black text-body mb-0">Commercial Sparkies</h4>
                                    <span class="extra-small text-muted fw-semibold">Business & Fitout Specialists</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="text-body-secondary small mb-3">
                                    Qualified electrical specialists delivering dependable commercial installations, retail shop fitouts, main switchboards, and compliance safety audits.
                                </p>

                                <div class="crew-highlights p-3 rounded-3 bg-body border mb-3">
                                    <div class="extra-small text-uppercase tracking-wider fw-semibold text-muted mb-2">Crew Essentials</div>
                                    <ul class="list-unstyled extra-small text-body mb-0">
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Office & Retail Fitouts
                                        </li>
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Three-Phase Power Wiring
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Routine Safety Compliance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a href="#contact" class="btn btn-outline-secondary btn-sm rounded-pill w-100 fw-semibold">
                                Book Commercial Crew
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD 3: Residential Sparkies -->
                <div class="sparky-crew-card flex-shrink-0">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-body-tertiary overflow-hidden">
                        <div class="p-4 bg-accent-subtle border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sparky-icon-avatar bg-body rounded-circle d-flex align-items-center justify-content-center text-accent shadow-sm">
                                    <i class="bi bi-house-heart-fill fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="h5 fw-black text-body mb-0">Residential Sparkies</h4>
                                    <span class="extra-small text-muted fw-semibold">Home & Lighting Specialists</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="text-body-secondary small mb-3">
                                    Respectful home tradespeople handling complete house rewires, stylish LED lighting upgrades, power point additions, and family safety switches.
                                </p>

                                <div class="crew-highlights p-3 rounded-3 bg-body border mb-3">
                                    <div class="extra-small text-uppercase tracking-wider fw-semibold text-muted mb-2">Crew Essentials</div>
                                    <ul class="list-unstyled extra-small text-body mb-0">
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Clean Worksite Guarantee
                                        </li>
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Modern LED Light Upgrades
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Safety Switch Testing
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a href="#contact" class="btn btn-outline-secondary btn-sm rounded-pill w-100 fw-semibold">
                                Book Residential Crew
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD 4: EV & Solar Sparkies -->
                <div class="sparky-crew-card flex-shrink-0">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-body-tertiary overflow-hidden">
                        <div class="p-4 bg-accent-subtle border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sparky-icon-avatar bg-body rounded-circle d-flex align-items-center justify-content-center text-accent shadow-sm">
                                    <i class="bi bi-ev-station-fill fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="h5 fw-black text-body mb-0">EV & Solar Sparkies</h4>
                                    <span class="extra-small text-muted fw-semibold">Renewable Energy Specialists</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="text-body-secondary small mb-3">
                                    Clean energy technicians specializing in fast electric vehicle charger installations, solar panel connections, and smart power management systems.
                                </p>

                                <div class="crew-highlights p-3 rounded-3 bg-body border mb-3">
                                    <div class="extra-small text-uppercase tracking-wider fw-semibold text-muted mb-2">Crew Essentials</div>
                                    <ul class="list-unstyled extra-small text-body mb-0">
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> EV Wall Charger Installs
                                        </li>
                                        <li class="mb-1.5 d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Solar System Integration
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-accent"></i> Smart Meter Load Controls
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a href="#contact" class="btn btn-outline-secondary btn-sm rounded-pill w-100 fw-semibold">
                                Book EV & Solar Crew
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Scroll Swipe Cue -->
        <div class="d-flex align-items-center justify-content-center gap-2 text-muted extra-small d-lg-none mb-4">
            <i class="bi bi-arrow-left-right text-accent"></i> Swipe left or right to explore all crew units
        </div>

        <!-- OUR CREW STANDARDS (REASSURANCE BAND) -->
        <div class="p-4 p-md-5 rounded-4 bg-body-tertiary border shadow-sm">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4 text-center text-lg-start border-end-lg">
                    <h3 class="h4 fw-black text-body mb-2">What Makes a 24Seven Sparky?</h3>
                    <p class="text-body-secondary small mb-0">
                        Our trade culture is built around core Australian values: punctuality, honesty, clear communication, and uncompromised safety.
                    </p>
                </div>

                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="p-2 rounded-3 bg-accent-subtle text-accent fs-5">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <div>
                                    <h6 class="fw-semibold text-body mb-1">Licensed & Police Checked</h6>
                                    <p class="extra-small text-body-secondary mb-0">Every sparky on your property is fully qualified and thoroughly vetted for your peace of mind.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="p-2 rounded-3 bg-accent-subtle text-accent fs-5">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div>
                                    <h6 class="fw-semibold text-body mb-1">On-Time Or We Notify You</h6>
                                    <p class="extra-small text-body-secondary mb-0">We value your time. Expect courtesy calls prior to arrival so you are never left waiting around.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="p-2 rounded-3 bg-accent-subtle text-accent fs-5">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div>
                                    <h6 class="fw-semibold text-body mb-1">Zero Hidden Surprises</h6>
                                    <p class="extra-small text-body-secondary mb-0">Fixed, upfront pricing explained before any work begins. No mystery call-out fees or inflated labor hours.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="p-2 rounded-3 bg-accent-subtle text-accent fs-5">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <div>
                                    <h6 class="fw-semibold text-body mb-1">Lifetime Workmanship</h6>
                                    <p class="extra-small text-body-secondary mb-0">Every job is completed to strict AS/NZS 3000 compliance standards and backed by our guarantee.</p>
                                </div>
                            </div>
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
                <div class="gsap-anim d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark text-white extra-small fw-semibold text-uppercase tracking-wider mb-3">
                    <i class="fas fa-house-bolt text-accent"></i>
                    <span>Sydney's Trusted Local Sparkies</span>
                </div>

                <h2 class="gsap-anim display-4 fw-black text-uppercase tracking-tight text-dark mb-3">
                    Complete Electrical Care.<br>
                    <span class="opacity-75">Built Safe. Done Right.</span>
                </h2>

                <p class="gsap-anim fw-normal text-dark opacity-90 mb-4" style="line-height: 1.5; max-width: 640px;">
                    From emergency repairs, LED lighting, and switchboard upgrades to custom EV wall charger setups and solar panel integration, our licensed Sydney sparkies cover it all. We bring safe, transparent, and fully compliant electrical solutions to homes and businesses across Sydney with upfront pricing and guaranteed quality.
                </p>

                <div class="gsap-anim d-flex flex-wrap align-items-center gap-3">
                    <a href="#contact" class="btn btn-dark text-white fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2 shadow-sm">
                        <span>Get A Local Sparky Out</span>
                        <i class="fas fa-arrow-right text-accent"></i>
                    </a>
                    <div class="d-flex align-items-center gap-2 small fw-semibold text-dark ms-1">
                        <i class="fas fa-shield-halved fs-5"></i>
                        <span>100% Workmanship Guarantee</span>
                    </div>
                </div>
            </div>

            <!-- Right Stats Counter Grid -->
            <div class="col-lg-5">
                <div class="gsap-card p-3 p-sm-4 bg-dark text-white rounded-4 shadow-sm border border-dark border-opacity-25">
                    <div class="row g-3 text-center">

                        <!-- Stat 1 -->
                        <div class="col-4 border-end border-secondary border-opacity-25">
                            <div class="display-4 fw-black text-accent mb-0"><span class="stat-counter" data-target="3" data-format="">3</span>+</div>
                            <div class="extra-small text-uppercase tracking-wider text-white-50 fw-semibold mt-1">Years On<br>The Tools</div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="col-4 border-end border-secondary border-opacity-25">
                            <div class="display-4 fw-black text-accent mb-0"><span class="stat-counter" data-target="1000" data-format="1k">1k</span>+</div>
                            <div class="extra-small text-uppercase tracking-wider text-white-50 fw-semibold mt-1">Happy<br>Aussie Clients</div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="col-4">
                            <div class="display-4 fw-black text-accent mb-0"><span class="stat-counter" data-target="1376" data-format="formatted">1,376</span>+</div>
                            <div class="extra-small text-uppercase tracking-wider text-white-50 fw-semibold mt-1">Jobs<br>Completed</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<section id="interactive-timeline" class="py-5 py-lg-6 bg-body position-relative overflow-hidden">
    <div class="position-absolute top-0 start-50 translate-middle-x w-100 h-100 opacity-10 pointer-events-none"
         style="background: radial-gradient(circle at 50% 20%, rgba(120,200,5,0.2) 0%, transparent 60%);"></div>
    <div class="container py-4">

        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-body-tertiary border shadow-sm mb-3">
                    <i class="bi bi-cpu-fill text-accent"></i>
                    <span class="text-uppercase tracking-wider extra-small fw-semibold text-body">Our Journey & Standards</span>
                </div>
                <h2 class="display-4 text-uppercase fw-black text-body tracking-tight">
                    Evolution of <br><span class="text-accent">Sydney's Trusted Trade</span>.
                </h2>
                <p class="lead text-body-secondary mb-0">
                    Discover how we’ve grown into Sydney's all-in-one electrical service team, delivering quality craftsmanship for every residential and commercial need.
                </p>
            </div>
        </div>

        <!-- Timeline Wrapper -->
        <div class="timeline-container position-relative">

            <!-- SVG Laser Circuit Track (Draws dynamically on scroll) -->
            <div class="timeline-laser-track">
                <svg class="laser-svg" preserveAspectRatio="none">
                    <line x1="50%" y1="0" x2="50%" y2="100%" class="laser-line-bg" />
                    <line x1="50%" y1="0" x2="50%" y2="100%" class="laser-line-progress" id="laserProgressLine" />
                </svg>
            </div>

            <!-- Milestone Node 1: Founded 2021 (Left Card) -->
            <div class="timeline-item row align-items-center g-4 my-4 my-lg-5">
                <div class="col-lg-6 timeline-col-card">
                    <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle shadow-sm timeline-card">
                        <span class="badge bg-accent text-dark fw-semibold px-3 py-1 rounded-pill mb-2">2021</span>
                        <h4 class="fw-semibold text-body mb-2">Established in Sydney</h4>
                        <p class="text-body-secondary small mb-0">
                            Founded on straightforward Aussie values: quality workmanship, safety, and reliability. We started out servicing local home electrical repairs, lighting, and general power installations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block"></div>
                <div class="timeline-node-pin"></div>
            </div>

            <!-- Milestone Node 2: 24/7 Dispatch Expansion (Right Card) -->
            <div class="timeline-item row align-items-center g-4 my-4 my-lg-5">
                <div class="col-lg-6 d-none d-lg-block"></div>
                <div class="col-lg-6 timeline-col-card">
                    <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle shadow-sm timeline-card">
                        <span class="badge bg-body border text-accent fw-semibold px-3 py-1 rounded-pill mb-2">Always On Call</span>
                        <h4 class="fw-semibold text-body mb-2">24/7 Rapid Emergency Response</h4>
                        <p class="text-body-secondary small mb-0">
                            Expanded into round-the-clock emergency dispatch. We guarantee fast response times for unexpected power outages, tripped safety switches, and urgent wiring repairs across Sydney.
                        </p>
                    </div>
                </div>
                <div class="timeline-node-pin"></div>
            </div>

            <!-- Milestone Node 3: Full-Service Electrical (Left Card) -->
            <div class="timeline-item row align-items-center g-4 my-4 my-lg-5">
                <div class="col-lg-6 timeline-col-card">
                    <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle shadow-sm timeline-card">
                        <span class="badge bg-body border text-accent fw-semibold px-3 py-1 rounded-pill mb-2">Commercial & Domestic</span>
                        <h4 class="fw-semibold text-body mb-2">Complete General Electrical Care</h4>
                        <p class="text-body-secondary small mb-0">
                            Grew our capability to handle complete home rewires, LED lighting redesigns, commercial fitouts, switchboard safety upgrades, and routine maintenance with upfront fixed quotes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block"></div>
                <div class="timeline-node-pin"></div>
            </div>

            <!-- Milestone Node 4: Modern Energy Solutions (Right Card) -->
            <div class="timeline-item row align-items-center g-4 my-4 my-lg-5">
                <div class="col-lg-6 d-none d-lg-block"></div>
                <div class="col-lg-6 timeline-col-card">
                    <div class="p-4 rounded-4 bg-body-tertiary border border-secondary-subtle shadow-sm timeline-card">
                        <span class="badge bg-accent text-dark fw-semibold px-3 py-1 rounded-pill mb-2">Present & Beyond</span>
                        <h4 class="fw-semibold text-body mb-2">EV Chargers & Solar Integrations</h4>
                        <p class="text-body-secondary small mb-0">
                            Leading the shift to modern energy solutions. We install dedicated home EV wall chargers, solar inverter connections, battery storage setups, and smart load management systems.
                        </p>
                    </div>
                </div>
                <div class="timeline-node-pin"></div>
            </div>

        </div>
    </div>
</section>
<section id="how-it-works" class="py-5 bg-body position-relative overflow-hidden">

    <!-- Background Image Layer with Theme-Adaptive Vignette -->
    <div class="hero-bg-wrapper position-absolute top-0 start-0 w-100 h-100 z-0">
        <img src="/assets/images/homebanner3.png" alt="24Seven Sparky How It Works Process" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 opacity-25">
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


<!-- SECTION 1: Credentials & Compliance Bar -->
<div class="bg-black text-white py-3 border-top border-secondary border-opacity-25" id="credentials-bar">
    <div class="container">
        <div class="row g-3 align-items-center justify-content-center text-center text-md-start extra-small fw-semibold text-uppercase tracking-wider">
            <div class="col-6 col-md-auto d-flex align-items-center justify-content-center gap-2">
                <i class="fas fa-id-card text-accent fs-6"></i>
                <span>NSW Lic #382910C</span>
            </div>
            <div class="col-6 col-md-auto d-flex align-items-center justify-content-center gap-2">
                <i class="fas fa-certificate text-accent fs-6"></i>
                <span>ASP Level 2 Accredited</span>
            </div>
            <div class="col-6 col-md-auto d-flex align-items-center justify-content-center gap-2">
                <i class="fas fa-shield-halved text-accent fs-6"></i>
                <span>$20M Public Liability</span>
            </div>
            <div class="col-6 col-md-auto d-flex align-items-center justify-content-center gap-2">
                <i class="fas fa-file-contract text-accent fs-6"></i>
                <span>NSW CCEW Compliant</span>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 2: Trust Signals & Local Service Area -->
<style>
    /* Interactive hover states using Bootstrap base classes */
    .trust-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .trust-card:hover {
        transform: translateY(-5px);
    }

    /* Icon badge sizing */
    .icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 0.75rem;
    }
</style>

<section class="bg-body py-5 position-relative overflow-hidden" id="sparky-trust-features">
    <div class="container py-2 py-md-4">

        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8 gsap-trust-anim">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark text-white text-uppercase tracking-wider mb-3" style="font-size: 0.75rem; font-weight: 600;">
                    <i class="fas fa-check-circle text-accent"></i>
                    <span>Why Sydney Chooses Us</span>
                </div>
                <h2 class="display-4 fw-black text-uppercase mb-3 text-body">
                    Full-Service Electrical Care. <br><span class="text-accent">Honest & Licensed.</span>
                </h2>
                <p class="text-body-secondary mb-0">
                    From quick lighting installs and switchboard upgrades to EV chargers and solar integrations, we deliver complete domestic and commercial electrical solutions with zero surprises.
                </p>
            </div>
        </div>

        <!-- 4-Column Feature Grid -->
        <div class="row g-4 mb-5">

            <!-- Feature 1 -->
            <div class="col-12 col-sm-6 col-lg-3 gsap-trust-card">
                <div class="trust-card p-4 rounded-4 h-100 d-flex flex-column bg-body-tertiary border border-border-subtle shadow-sm">
                    <div class="icon-wrapper bg-accent text-dark d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="fas fa-plug-circle-check fs-5"></i>
                    </div>
                    <h3 class="h5 fw-semibold mb-2 text-body">Complete Electrical Services</h3>
                    <p class="small text-body-secondary mb-0" style="line-height: 1.5;">
                        We handle everything from power points, safety switches, and rewires to EV wall chargers and clean solar connections.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-12 col-sm-6 col-lg-3 gsap-trust-card">
                <div class="trust-card p-4 rounded-4 h-100 d-flex flex-column bg-body-tertiary border border-border-subtle shadow-sm">
                    <div class="icon-wrapper bg-accent text-dark d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="fas fa-truck-fast fs-5"></i>
                    </div>
                    <h3 class="h5 fw-semibold mb-2 text-body">24/7 Emergency Dispatch</h3>
                    <p class="small text-body-secondary mb-0" style="line-height: 1.5;">
                        Power outage or sparking switchboard? Our local emergency response team arrives fully equipped to resolve faults fast.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-12 col-sm-6 col-lg-3 gsap-trust-card">
                <div class="trust-card p-4 rounded-4 h-100 d-flex flex-column bg-body-tertiary border border-border-subtle shadow-sm">
                    <div class="icon-wrapper bg-accent text-dark d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="fas fa-file-shield fs-5"></i>
                    </div>
                    <h3 class="h5 fw-semibold mb-2 text-body">CCEW Certified Work</h3>
                    <p class="small text-body-secondary mb-0" style="line-height: 1.5;">
                        Every job includes an official NSW Certificate of Compliance for Electrical Work (CCEW) for guaranteed safety and insurance compliance.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-12 col-sm-6 col-lg-3 gsap-trust-card">
                <div class="trust-card p-4 rounded-4 h-100 d-flex flex-column bg-body-tertiary border border-border-subtle shadow-sm">
                    <div class="icon-wrapper bg-accent text-dark d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="fas fa-hand-holding-dollar fs-5"></i>
                    </div>
                    <h3 class="h5 fw-semibold mb-2 text-body">Fixed Upfront Pricing</h3>
                    <p class="small text-body-secondary mb-0" style="line-height: 1.5;">
                        Clear quotes given before any work begins. No hidden call-out surprises, plus a 10% discount for local seniors and pensioners.
                    </p>
                </div>
            </div>

        </div>

        <!-- Service Area / Local Footprint Banner -->
        <div class="trust-card p-4 p-md-5 rounded-4 bg-body-tertiary border border-border-subtle shadow-sm gsap-trust-anim">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <div class="d-flex align-items-center gap-2 text-uppercase text-body-secondary mb-2" style="font-size: 0.75rem; font-weight: 600;">
                        <i class="fas fa-location-dot text-accent fs-6"></i>
                        <span>Sydney Service Footprint</span>
                    </div>
                    <h3 class="h4 fw-black text-uppercase mb-2 text-body">Servicing All Greater Sydney Suburbs</h3>
                    <p class="small text-body-secondary mb-0">Local vans stationed across key zones for fast dispatch directly to your home or business.</p>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> Eastern Suburbs
                        </span>
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> Inner West
                        </span>
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> North Shore
                        </span>
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> Northern Beaches
                        </span>
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> St George & Sutherland
                        </span>
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> Western Sydney
                        </span>
                        <span class="px-3 py-2 rounded-pill small fw-semibold bg-body border border-border-subtle text-body">
                            <i class="fas fa-map-pin text-accent me-1"></i> Hills District
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- GSAP Animation Integration -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
            gsap.registerPlugin(ScrollTrigger);

            // Animate headers and service area card
            gsap.from("#sparky-trust-features .gsap-trust-anim", {
                scrollTrigger: {
                    trigger: "#sparky-trust-features",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                },
                y: 30,
                opacity: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "power3.out"
            });

            // Stagger animate 4 feature cards
            gsap.from("#sparky-trust-features .gsap-trust-card", {
                scrollTrigger: {
                    trigger: "#sparky-trust-features .row.g-4",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                },
                y: 40,
                opacity: 0,
                duration: 0.8,
                stagger: 0.15,
                ease: "power3.out"
            });
        }
    });
</script>
<style>
    .stat-card-base {
        border-radius: 2rem;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .stat-card-base:hover {
        transform: translateY(-6px);
    }

    /* Standardized Top Visual Block Height */
    .stat-card-base .top-visual-block {
        height: 180px;
        border-radius: 2rem 2rem 0 0;
        position: relative;
        overflow: hidden;
    }

    @media (min-width: 992px) {
        .stat-card-base .top-visual-block {
            height: 220px;
        }
    }

    .stat-big-num {
        font-size: clamp(3.5rem, 6vw, 5.5rem);
        line-height: 0.9;
    }

    /* Shared Bottom Content Container */
    .stat-card-bottom {
        position: relative;
        border-radius: 0 0 2rem 2rem;
    }

    /* Wrapper for full-card background fill */
    .stat-card-fill-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
    }

    /* Dynamic Accent Green Fill Layer */
    .stat-card-fill {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0%; /* Dynamic GSAP Fill */
        z-index: 0;
        pointer-events: none;
    }

    /* Keep content text above the background fill */
    .stat-card-content {
        position: relative;
        z-index: 2;
        width: 100%;
    }
</style>

<section class="bg-body-tertiary py-5 position-relative overflow-hidden" id="sparky-facts-section">
    <div class="container py-3 py-md-5">
        <div class="row g-4 align-items-stretch">

            <!-- Left Intro Text Narrative -->
            <div class="col-lg-3 d-flex flex-column justify-content-center gsap-fact-intro">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark text-white text-uppercase tracking-wider mb-3 w-fit" style="font-size: 0.75rem; font-weight: 600;">
                    <i class="bi bi-shield-check text-accent"></i>
                    <span>Proven Track Record</span>
                </div>
                <h3 class="display-4 fw-black text-uppercase tracking-tight mb-3 text-body">
                    Facts That <br><span class="text-accent">Speak</span>
                </h3>
                <p class="text-body-secondary small mb-0" style="line-height: 1.6;">
                    Still not convinced? Let our figures and standards demonstrate why 24/7 Sparky is Sydney's trusted electrical partner. Built on absolute compliance, zero delays, and guaranteed safety.
                </p>
            </div>

            <!-- Stat Card 1: 0% Risk (Standard Bootstrap Surface) -->
            <div class="col-sm-6 col-lg-3 gsap-fact-card">
                <div class="stat-card-base h-100 d-flex flex-column bg-body border border-border-subtle">
                    <div class="top-visual-block d-flex align-items-end p-4">
                        <div class="stat-card-content">
                            <div class="stat-big-num fw-black text-body d-flex align-items-baseline gap-1">
                                <span class="fact-counter" data-target="0">0</span>
                                <span class="fs-2 text-body-secondary fw-semibold">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card-bottom p-4 flex-grow-1 d-flex flex-column justify-content-center">
                        <div class="stat-card-content">
                            <h4 class="h5 fw-black text-uppercase tracking-tight mb-3 text-body">Zero Safety Risk</h4>
                            <p class="small text-body-secondary mb-0" style="line-height: 1.5;">
                                Every single job includes an official NSW CCEW Certificate of Compliance. We adhere strictly to AS/NZS 3000 safety standards, leaving zero room for defects or insurance issues.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stat Card 2: 50% Upfront Pricing (Top Block Green Fill) -->
            <div class="col-sm-6 col-lg-3 gsap-fact-card">
                <div class="stat-card-base h-100 d-flex flex-column bg-body border border-border-subtle">
                    <div class="top-visual-block d-flex align-items-end p-4">
                        <div class="stat-card-fill bg-accent" data-fill="100"></div>
                        <div class="stat-card-content">
                            <div class="stat-big-num fw-black text-dark d-flex align-items-baseline gap-1">
                                <span class="fact-counter" data-target="50">50</span>
                                <span class="fs-2 text-dark fw-semibold">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card-bottom p-4 flex-grow-1 d-flex flex-column justify-content-center">
                        <div class="stat-card-content">
                            <h4 class="h5 fw-black text-uppercase tracking-tight mb-2 text-body">Upfront Fixed Pricing</h4>
                            <p class="small text-body-secondary mb-0" style="line-height: 1.5;">
                                No hidden call-out fees or unexpected hourly add-ons. You receive a complete transparent quote before any electrical work begins on your property.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stat Card 3: 98% Satisfaction (Unified Full-Card Bottom-to-Top Fill) -->
            <div class="col-sm-12 col-lg-3 gsap-fact-card">
                <div class="stat-card-base h-100 border-0 shadow-sm bg-body">
                    <div class="stat-card-fill-wrapper h-100 d-flex flex-column">
                        <!-- Single Fill Layer for the Entire Card -->
                        <div class="stat-card-fill bg-accent" data-fill="100"></div>

                        <div class="top-visual-block d-flex align-items-end p-4">
                            <div class="stat-card-content">
                                <div class="stat-big-num fw-black text-dark d-flex align-items-baseline gap-1">
                                    <span class="fact-counter" data-target="98">98</span>
                                    <span class="fs-2 text-dark fw-semibold">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="stat-card-bottom p-4 flex-grow-1 d-flex flex-column justify-content-center">
                            <div class="stat-card-content">
                                <h4 class="h5 fw-black text-uppercase tracking-tight mb-3 text-dark">Customer Satisfaction</h4>
                                <p class="small text-dark mb-0" style="line-height: 1.5; opacity: 0.9;">
                                    Our local clients rely on us for fast emergency call-outs, spotless cleanup, and polite, licensed electricians who treat your home with respect.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
            gsap.registerPlugin(ScrollTrigger);

            const timeline = gsap.timeline({
                scrollTrigger: {
                    trigger: "#sparky-facts-section",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                    onEnter: () => {
                        // Reset counter numbers
                        document.querySelectorAll("#sparky-facts-section .fact-counter").forEach(counter => {
                            counter.innerText = "0";
                        });
                        // Reset fill heights to 0%
                        document.querySelectorAll("#sparky-facts-section .stat-card-fill").forEach(fill => {
                            fill.style.height = "0%";
                        });
                    }
                }
            });

            // 1. Reveal Intro text
            timeline.from("#sparky-facts-section .gsap-fact-intro", {
                y: 30,
                opacity: 0,
                duration: 0.8,
                ease: "power3.out"
            });

            // 2. Stagger entrance of the 3 stat cards
            timeline.from("#sparky-facts-section .gsap-fact-card", {
                y: 40,
                opacity: 0,
                duration: 0.8,
                stagger: 0.15,
                ease: "power3.out"
            }, "-=0.5");

            // 3. Count numbers and animate green fill from bottom to top
            document.querySelectorAll("#sparky-facts-section .gsap-fact-card").forEach(card => {
                const counter = card.querySelector(".fact-counter");
                const bgFills = card.querySelectorAll(".stat-card-fill");

                if (counter) {
                    const targetVal = parseFloat(counter.getAttribute("data-target"));

                    timeline.to(counter, {
                        innerText: targetVal,
                        duration: 1.8,
                        ease: "power1.out",
                        snap: { innerText: 1 },
                        onUpdate: function () {
                            let val = Math.ceil(this.targets()[0].innerText);
                            this.targets()[0].innerText = val;
                        }
                    }, "-=0.8");
                }

                bgFills.forEach(fill => {
                    const fillAmount = fill.getAttribute("data-fill");
                    timeline.to(fill, {
                        height: fillAmount + "%",
                        duration: 1.8,
                        ease: "power1.out"
                    }, "-=1.8");
                });
            });
        }
    });
</script>
<section id="faq-accordion" class="py-5 bg-body position-relative">
    <div class="container py-4">
        <div class="row g-4 g-lg-5">

            <!-- Left Column: Sticky Brand Pillar (Desktop Sticky) -->
            <div class="col-lg-5">
                <div class="sticky-lg-top" style="top: 100px; z-index: 10;">

                    <!-- Chip Badge -->
                    <div class="badge bg-accent text-dark fw-semibold text-uppercase px-2 py-1 rounded-pill">
                        <i class="fas fa-comments-dollar"></i>
                        <span>Oran Park & Western Sydney FAQs</span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="display-4 fw-black text-uppercase tracking-tight text-body mb-2">
                        Got Questions?<br>
                        <span class="text-accent">Straight Answers.</span>
                    </h2>

                    <!-- Sub Heading -->
                    <h3 class="h6 fw-semibold text-uppercase tracking-wider text-body-secondary mb-3">
                        No BS Local Trade Advice
                    </h3>

                    <!-- Paragraph -->
                    <p class="text-body-secondary fs-6 mb-4" style="line-height: 1.6;">
                        Got doubts about going solar or adding a battery out in Oran Park or Western Sydney? Here is the honest truth from local sparkies who actually work on the roofs and main switchboards daily.
                    </p>

                    <!-- CTA Button Group -->
                    <div class="d-flex flex-column gap-3 align-items-start">
                        <a href="#contact" class="btn btn-power text-white fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2 shadow-sm">
                            <span>Get An Oran Park Sparky Out</span>
                            <i class="fas fa-arrow-right text-black"></i>
                        </a>
                        <div class="d-flex align-items-center gap-2 extra-small fw-semibold text-body-secondary ms-1">
                            <i class="fas fa-shield-halved text-accent fs-6"></i>
                            <span>100% Workmanship Guarantee</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Accordion Questions -->
            <div class="col-lg-7">
                <div class="accordion accordion-flush d-flex flex-column gap-3" id="faqAccordion">

                    <!-- FAQ Item 1: Solar Rebates & ROI -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingOne">
                            <button class="accordion-button py-4 px-4 bg-body-tertiary text-body fw-semibold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span class="d-flex align-items-center gap-3">
                    <i class="fas fa-solar-panel text-accent fs-5"></i>
                    <span class="fw-semibold fs-5 text-uppercase">Are solar power systems worth it in Western Sydney?</span>
                </span>
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Yes, rooftop solar remains one of the highest-yielding home investments in Sydney.</strong> Due to Western Sydney's high solar irradiance, a typical residential solar array pays for itself within 3 to 5 years by reducing quarterly power bills by up to 70%.
                                </p>
                                <div class="bg-body p-3 rounded-3 border">
                                    <strong class="d-block mb-2 text-body extra-small text-uppercase tracking-wider">Key Local Financial Benefits:</strong>
                                    <ul class="text-body-secondary small mb-0 ps-3">
                                        <li class="mb-1"><strong>NSW STC Rebates:</strong> Upfront federal point-of-sale discounts applied directly to your system cost.</li>
                                        <li class="mb-1"><strong>Grid Feed-In Tariffs:</strong> Sell excess daytime solar energy back to your retail energy provider.</li>
                                        <li><strong>Property Value:</strong> Homes with CEC-accredited solar installations consistently command higher resale value.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2: Solar Battery Storage & Night Use -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingTwo">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-semibold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span class="d-flex align-items-center gap-3">
                    <i class="fas fa-battery-full text-accent fs-5"></i>
                    <span class="fw-semibold fs-5 text-uppercase">How does adding a solar battery lower electricity bills?</span>
                </span>
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>A solar battery stores excess electricity generated during peak daylight hours so your home can run on free stored solar power at night.</strong> This protects you from peak electricity rates (typically charged between 4 PM and 9 PM by energy retailers).
                                </p>
                                <p class="text-body-secondary small mb-0">
                                    With blackout protection (EPS mode) enabled, your battery system also acts as an automated emergency backup power supply if the main street grid fails during severe summer storms.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3: EV Charger Solar Integration -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingThree">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-semibold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span class="d-flex align-items-center gap-3">
                    <i class="fas fa-charging-station text-accent fs-5"></i>
                    <span class="fw-semibold fs-5 text-uppercase">Can electric vehicle (EV) wall chargers be integrated with solar?</span>
                </span>
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Yes, smart EV chargers can be configured to charge your electric vehicle using 100% free rooftop solar energy.</strong> We install single-phase and three-phase Level 2 EV wall chargers equipped with solar-matching modes that dynamically balance charging speeds based on live rooftop output.
                                </p>
                                <div class="row g-2 text-center extra-small text-uppercase fw-semibold text-secondary">
                                    <div class="col-4"><div class="p-2 border rounded bg-body">Tesla Compatible</div></div>
                                    <div class="col-4"><div class="p-2 border rounded bg-body">Type 2 Universal</div></div>
                                    <div class="col-4"><div class="p-2 border rounded bg-body">Smart Solar Match</div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4: Emergency Response & Level 2 ASP -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingFour">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-semibold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <span class="d-flex align-items-center gap-3">
                    <i class="fas fa-bolt text-accent fs-5"></i>
                    <span class="fw-semibold fs-5 text-uppercase">Do you provide 24/7 emergency electrical services & board upgrades?</span>
                </span>
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-0" style="line-height: 1.6;">
                                    <strong>Too right we do.</strong> We provide 24/7 rapid emergency electrician dispatch across Oran Park and South West Sydney for dangerous power outages, burnt switchboards, and safety switch trips. We also perform complete switchboard upgrades, replacing outdated ceramic fuses with modern RCD safety switches to comply with NSW AS/NZS 3000 safety regulations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5: Local Coverage & Compliance -->
                    <div class="accordion-item bg-body-tertiary border rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header mb-0" id="headingFive">
                            <button class="accordion-button collapsed py-4 px-4 bg-body-tertiary text-body fw-semibold fs-5 shadow-none d-flex align-items-center justify-content-between gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <span class="d-flex align-items-center gap-3">
                    <i class="fas fa-location-dot text-accent fs-5"></i>
                    <span class="fw-semibold fs-5 text-uppercase">What Sydney suburbs are covered by your electrical team?</span>
                </span>
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 pb-4 pt-0">
                                <hr class="border-secondary opacity-10 mt-0 mb-3">
                                <p class="text-body-secondary mb-3" style="line-height: 1.6;">
                                    <strong>Our trade vans operate daily across Oran Park, the Macarthur region, and Greater Western Sydney.</strong> We manage local grid connection approvals directly with network distributors like Endeavour Energy.
                                </p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-body border text-body font-monospace">Oran Park (2570)</span>
                                    <span class="badge bg-body border text-body font-monospace">Gregory Hills</span>
                                    <span class="badge bg-body border text-body font-monospace">Narellan</span>
                                    <span class="badge bg-body border text-body font-monospace">Camden</span>
                                    <span class="badge bg-body border text-body font-monospace">Campbelltown</span>
                                    <span class="badge bg-body border text-body font-monospace">Liverpool</span>
                                    <span class="badge bg-body border text-body font-monospace">Penrith</span>
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
