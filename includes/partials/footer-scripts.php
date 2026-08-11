<script src="<?= asset('js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/gsap.min.js') ?>"></script>
<script src="<?= asset('js/TextPlugin.min.js') ?>"></script>
<script src="<?= asset('js/ScrollTrigger.min.js') ?>"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        /* ==========================================================================
           1. Theme Toggle & Preference Persistence (Cookies & OS)
           ========================================================================== */
        const themeToggler = document.getElementById('themeToggler');
        const themeIcon = document.getElementById('themeIcon');
        const themeText = document.getElementById('themeText');
        const navbarLogo = document.getElementById('navbarLogo');
        const htmlElement = document.documentElement;

        const COOKIE_NAME = 'user_theme_preference';
        const COOKIE_DAYS = 365;

        const setCookie = (name, value, days) => {
            try {
                const d = new Date();
                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
                document.cookie = `${name}=${value};expires=${d.toUTCString()};path=/;SameSite=Lax`;
            } catch (e) {
                // Fail silently if cookie storage is restricted
            }
        };

        const getCookie = (name) => {
            try {
                const nameEQ = name + '=';
                const ca = document.cookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i].trim();
                    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
                }
            } catch (e) {
                return null;
            }
            return null;
        };

        const applyTheme = (theme) => {
            if (htmlElement) {
                htmlElement.setAttribute('data-bs-theme', theme);
            }

            if (theme === 'dark') {
                if (themeIcon) themeIcon.className = 'bi bi-moon-stars-fill';
                if (themeText) themeText.textContent = 'Dark Mode';
                if (themeToggler) themeToggler.className = 'btn btn-outline-light d-flex align-items-center gap-2 rounded-pill px-3 py-1.5';
                if (navbarLogo) navbarLogo.src = navbarLogo.getAttribute('data-dark-src') || '/assets/images/logo-accent.png';
            } else {
                if (themeIcon) themeIcon.className = 'bi bi-sun-fill';
                if (themeText) themeText.textContent = 'Light Mode';
                if (themeToggler) themeToggler.className = 'btn btn-outline-dark d-flex align-items-center gap-2 rounded-pill px-3 py-1.5';
                if (navbarLogo) navbarLogo.src = navbarLogo.getAttribute('data-light-src') || '/assets/images/logo-black.png';
            }
        };

        const getInitialTheme = () => {
            const savedTheme = getCookie(COOKIE_NAME);
            if (savedTheme) return savedTheme;

            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                return 'dark';
            }

            return 'light';
        };

        // Initialize Theme
        applyTheme(getInitialTheme());

        if (themeToggler) {
            themeToggler.addEventListener('click', () => {
                const currentTheme = htmlElement.getAttribute('data-bs-theme') || 'light';
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';

                applyTheme(newTheme);
                setCookie(COOKIE_NAME, newTheme, COOKIE_DAYS);
            });
        }

        if (window.matchMedia) {
            const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
            const handleSchemeChange = (e) => {
                if (!getCookie(COOKIE_NAME)) {
                    applyTheme(e.matches ? 'dark' : 'light');
                }
            };

            if (mediaQuery.addEventListener) {
                mediaQuery.addEventListener('change', handleSchemeChange);
            } else if (mediaQuery.addListener) {
                mediaQuery.addListener(handleSchemeChange);
            }
        }


        /* ==========================================================================
           2. Scroll State & Sticky Header Handlers
           ========================================================================== */
        const body = document.body;
        let isScrollingTimeout;

        window.addEventListener('scroll', () => {
            if (body) {
                body.classList.add('is-scrolling');
                window.clearTimeout(isScrollingTimeout);

                isScrollingTimeout = setTimeout(() => {
                    body.classList.remove('is-scrolling');
                }, 200);
            }
        }, { passive: true });

        // Scroll-triggered Header Hide/Show
        const header = document.getElementById('siteHeader');
        if (header) {
            let lastScrollY = window.scrollY;
            const scrollThreshold = 10;

            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;
                const scrollDelta = currentScrollY - lastScrollY;

                if (currentScrollY <= 80) {
                    header.classList.remove('header-hidden');
                    lastScrollY = currentScrollY;
                    return;
                }

                if (Math.abs(scrollDelta) > scrollThreshold) {
                    if (scrollDelta > 0 && !header.classList.contains('header-hidden')) {
                        header.classList.add('header-hidden');
                    } else if (scrollDelta < 0 && header.classList.contains('header-hidden')) {
                        header.classList.remove('header-hidden');
                    }
                    lastScrollY = currentScrollY;
                }
            }, { passive: true });
        }


        /* ==========================================================================
           3. Counter / Stats Intersection Observer
           ========================================================================== */
        const statsContainer = document.getElementById('heroStatsContainer');
        const counters = document.querySelectorAll('#heroStatsContainer .counter');

        if (statsContainer && counters.length > 0 && 'IntersectionObserver' in window) {
            let hasAnimated = false;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting && !hasAnimated) {
                        hasAnimated = true;

                        counters.forEach((counter) => {
                            const rawTarget = counter.getAttribute('data-target');
                            const target = parseInt(rawTarget, 10);

                            if (isNaN(target)) return;

                            const duration = 1500;
                            const stepTime = 20;
                            const steps = duration / stepTime;
                            const increment = target / steps;
                            let current = 0;

                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    counter.textContent = target.toLocaleString();
                                    clearInterval(timer);
                                } else {
                                    counter.textContent = Math.ceil(current).toLocaleString();
                                }
                            }, stepTime);
                        });
                    }
                });
            }, { threshold: 0.4 });

            observer.observe(statsContainer);
        }


        /* ==========================================================================
           4. Hero Video Modal (Autoplay & Reset)
           ========================================================================== */
        const heroModal = document.getElementById('heroVideoModal');
        const heroIframe = document.getElementById('heroYoutubePlayer');

        if (heroModal && heroIframe) {
            const originalSrc = heroIframe.getAttribute('src') || heroIframe.src;

            heroModal.addEventListener('show.bs.modal', () => {
                if (originalSrc && !originalSrc.includes('autoplay=1')) {
                    heroIframe.src = originalSrc.includes('?')
                        ? `${originalSrc}&autoplay=1`
                        : `${originalSrc}?autoplay=1`;
                }
            });

            heroModal.addEventListener('hidden.bs.modal', () => {
                heroIframe.src = originalSrc;
            });
        }


        /* ==========================================================================
           5. Offcanvas Left-Edge Touch Swipe Drawer
           ========================================================================== */
        // const offcanvasEl = document.getElementById('menuDrawer');
        // if (offcanvasEl && typeof bootstrap !== 'undefined' && bootstrap.Offcanvas) {
        //     let bsOffcanvas = null;
        //     let touchStartX = 0;
        //     let touchStartY = 0;
        //
        //     document.addEventListener('touchstart', (e) => {
        //         if (e.changedTouches && e.changedTouches[0]) {
        //             touchStartX = e.changedTouches[0].screenX;
        //             touchStartY = e.changedTouches[0].screenY;
        //         }
        //     }, { passive: true });
        //
        //     document.addEventListener('touchend', (e) => {
        //         if (!e.changedTouches || !e.changedTouches[0]) return;
        //
        //         const touchEndX = e.changedTouches[0].screenX;
        //         const touchEndY = e.changedTouches[0].screenY;
        //         const xDistance = touchStartX - touchEndX;
        //         const yDistance = Math.abs(touchStartY - touchEndY);
        //         const screenWidth = window.innerWidth;
        //         const edgeThreshold = screenWidth * 0.35;
        //
        //         if (xDistance > 60 && yDistance < 80 && touchStartX > (screenWidth - edgeThreshold)) {
        //             if (!bsOffcanvas) {
        //                 bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);
        //             }
        //             if (bsOffcanvas) bsOffcanvas.show();
        //         }
        //     }, { passive: true });
        // }


        /* ==========================================================================
           6. Form Options Checkbox Toggles
           ========================================================================== */
        const solarCheck = document.getElementById('serviceSolar');
        const evCheck = document.getElementById('serviceEV');
        const solarSection = document.getElementById('solarOptionsSection');
        const evSection = document.getElementById('evOptionsSection');

        if (solarCheck || evCheck) {
            const toggleSubQuestions = () => {
                if (solarCheck && solarSection) {
                    solarSection.classList.toggle('d-none', !solarCheck.checked);
                }
                if (evCheck && evSection) {
                    evSection.classList.toggle('d-none', !evCheck.checked);
                }
            };

            // Sync initial state on boot (restores position on back-button/reload)
            toggleSubQuestions();

            if (solarCheck) solarCheck.addEventListener('change', toggleSubQuestions);
            if (evCheck) evCheck.addEventListener('change', toggleSubQuestions);
        }


        /* ==========================================================================
           7. GSAP Laser Line, Timeline, & Footer Animations
           ========================================================================== */
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // Laser Progress Line & Vertical Timeline Reveal
            const laserLine = document.getElementById('laserProgressLine');
            const timelineItems = document.querySelectorAll('.timeline-item');
            const timelineContainer = document.querySelector('.timeline-container');

            if (laserLine && timelineContainer) {
                const svgLength = (typeof laserLine.getTotalLength === 'function')
                    ? laserLine.getTotalLength()
                    : 2000;

                gsap.set(laserLine, {
                    strokeDasharray: svgLength,
                    strokeDashoffset: svgLength
                });

                if (!prefersReducedMotion) {
                    gsap.to(laserLine, {
                        strokeDashoffset: 0,
                        ease: 'none',
                        scrollTrigger: {
                            trigger: timelineContainer,
                            start: 'top 70%',
                            end: 'bottom 80%',
                            scrub: 0.5
                        }
                    });
                } else {
                    gsap.set(laserLine, { strokeDashoffset: 0 });
                }

                if (timelineItems.length > 0) {
                    timelineItems.forEach((item) => {
                        ScrollTrigger.create({
                            trigger: item,
                            start: 'top 75%',
                            onEnter: () => item.classList.add('is-active'),
                            onLeaveBack: () => item.classList.remove('is-active')
                        });
                    });
                }
            }

            // Footer Title & Social Button Stagger
            const ultraFooter = document.getElementById('ultra-footer');
            const revealTitle = document.querySelector('.gsap-reveal-title');

            if (ultraFooter && revealTitle) {
                if (prefersReducedMotion) {
                    gsap.set(revealTitle, { opacity: 1, y: 0 });
                } else {
                    gsap.from(revealTitle, {
                        scrollTrigger: {
                            trigger: ultraFooter,
                            start: 'top 80%',
                        },
                        y: 60,
                        opacity: 0,
                        duration: 1,
                        ease: 'power4.out'
                    });
                }
            }

            const socialContainer = document.querySelector('.gsap-social-container');
            const socialBtns = document.querySelectorAll('.social-btn');

            if (socialContainer && socialBtns.length > 0) {
                if (prefersReducedMotion) {
                    gsap.set(socialBtns, { opacity: 1, scale: 1 });
                } else {
                    gsap.from(socialBtns, {
                        scrollTrigger: {
                            trigger: socialContainer,
                            start: 'top 90%',
                        },
                        scale: 0,
                        opacity: 0,
                        duration: 0.6,
                        stagger: 0.1,
                        ease: 'back.out(1.7)'
                    });

                    socialBtns.forEach((btn) => {
                        btn.addEventListener('mouseenter', () => {
                            gsap.to(btn, { scale: 1.15, duration: 0.2, ease: 'power2.out' });
                        });
                        btn.addEventListener('mouseleave', () => {
                            gsap.to(btn, { scale: 1, duration: 0.2, ease: 'power2.in' });
                        });
                    });
                }
            }
        }

    });
    document.addEventListener('DOMContentLoaded', () => {

        /* ==========================================================================
           1. Global Scroll Reveal & GSAP Animations
           ========================================================================== */
        if (typeof gsap !== 'undefined') {
            const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            if (typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                // 1A. Generic Scroll Reveal Engine
                const revealSelector = 'section .display-5, section .lead, section .card, section .accordion-item, #installation-process .row > div, .reveal-on-scroll';
                const revealElements = document.querySelectorAll(revealSelector);

                if (revealElements.length > 0) {
                    if (prefersReducedMotion) {
                        revealElements.forEach((el) => gsap.set(el, { opacity: 1, y: 0 }));
                    } else {
                        revealElements.forEach((el) => {
                            gsap.fromTo(
                                el,
                                { opacity: 0, y: 35 },
                                {
                                    opacity: 1,
                                    y: 0,
                                    duration: 0.8,
                                    ease: 'power3.out',
                                    scrollTrigger: {
                                        trigger: el,
                                        start: 'top 88%',
                                        toggleActions: 'play none none none',
                                        once: true
                                    }
                                }
                            );
                        });
                    }
                }

                // 1B. Sparky Banner Timeline & Counter Animation
                const banner = document.getElementById('sparky-banner');
                if (banner) {
                    const animElements = banner.querySelectorAll('.gsap-anim');
                    const cardElement = banner.querySelector('.gsap-card');
                    const statCounters = banner.querySelectorAll('.stat-counter');

                    if (prefersReducedMotion) {
                        if (animElements.length > 0) gsap.set(animElements, { opacity: 1, y: 0 });
                        if (cardElement) gsap.set(cardElement, { opacity: 1, x: 0 });

                        statCounters.forEach((counter) => {
                            const targetVal = parseFloat(counter.getAttribute('data-target'));
                            const formatType = counter.getAttribute('data-format');

                            if (!isNaN(targetVal)) {
                                if (formatType === '1k' && targetVal >= 1000) {
                                    counter.innerText = '1k';
                                } else if (formatType === 'formatted') {
                                    counter.innerText = Math.ceil(targetVal).toLocaleString();
                                } else {
                                    counter.innerText = Math.ceil(targetVal);
                                }
                            }
                        });
                    } else {
                        const bannerTl = gsap.timeline({
                            scrollTrigger: {
                                trigger: banner,
                                start: 'top 80%',
                                toggleActions: 'play none none reverse',
                                onEnter: () => {
                                    statCounters.forEach((counter) => {
                                        counter.innerText = '0';
                                    });
                                }
                            }
                        });

                        if (animElements.length > 0) {
                            bannerTl.from(animElements, {
                                y: 30,
                                opacity: 0,
                                duration: 0.8,
                                stagger: 0.15,
                                ease: 'power3.out'
                            });
                        }

                        if (cardElement) {
                            bannerTl.from(cardElement, {
                                x: 40,
                                opacity: 0,
                                duration: 0.8,
                                ease: 'power3.out'
                            }, animElements.length > 0 ? '-=0.6' : '0');
                        }

                        statCounters.forEach((counter) => {
                            const targetVal = parseFloat(counter.getAttribute('data-target'));
                            if (isNaN(targetVal)) return;

                            const formatType = counter.getAttribute('data-format');

                            bannerTl.to(counter, {
                                innerText: targetVal,
                                duration: 1.8,
                                ease: 'power1.out',
                                snap: { innerText: 1 },
                                onUpdate: function () {
                                    const target = this.targets && this.targets()[0];
                                    if (!target) return;

                                    let val = Math.ceil(parseFloat(target.innerText) || 0);

                                    if (formatType === '1k' && val >= 1000) {
                                        target.innerText = '1k';
                                    } else if (formatType === 'formatted') {
                                        target.innerText = val.toLocaleString();
                                    } else {
                                        target.innerText = val;
                                    }
                                }
                            }, '-=0.8');
                        });
                    }
                }
            }

            // 1C. Hero Glow Orbs Ambient Floating & Parallax
            const orb1 = document.querySelector('.hero-glow-orb-1');
            const orb2 = document.querySelector('.hero-glow-orb-2');
            const heroSection = document.querySelector('.dictionary-hero');

            if (orb1 || orb2) {
                if (prefersReducedMotion) {
                    if (orb1) gsap.set(orb1, { opacity: 0.7, scale: 1 });
                    if (orb2) gsap.set(orb2, { opacity: 0.5, scale: 1 });
                } else {
                    const availableOrbs = [orb1, orb2].filter(Boolean);
                    gsap.set(availableOrbs, {
                        transformOrigin: 'center center',
                        willChange: 'transform, opacity'
                    });

                    if (orb1) {
                        gsap.to(orb1, {
                            x: '+=60',
                            y: '+=40',
                            scale: 1.15,
                            opacity: 0.85,
                            duration: 7,
                            repeat: -1,
                            yoyo: true,
                            ease: 'sine.inOut'
                        });

                        gsap.to(orb1, {
                            rotation: 360,
                            duration: 25,
                            repeat: -1,
                            ease: 'none'
                        });
                    }

                    if (orb2) {
                        gsap.to(orb2, {
                            x: '-=70',
                            y: '-=50',
                            scale: 0.88,
                            opacity: 0.5,
                            duration: 9,
                            repeat: -1,
                            yoyo: true,
                            ease: 'sine.inOut',
                            delay: 1
                        });

                        gsap.to(orb2, {
                            rotation: -360,
                            duration: 30,
                            repeat: -1,
                            ease: 'none'
                        });
                    }

                    if (heroSection) {
                        const xToOrb1 = orb1 ? gsap.quickTo(orb1, 'xPercent', { duration: 1.2, ease: 'power2.out' }) : null;
                        const yToOrb1 = orb1 ? gsap.quickTo(orb1, 'yPercent', { duration: 1.2, ease: 'power2.out' }) : null;

                        const xToOrb2 = orb2 ? gsap.quickTo(orb2, 'xPercent', { duration: 1.8, ease: 'power2.out' }) : null;
                        const yToOrb2 = orb2 ? gsap.quickTo(orb2, 'yPercent', { duration: 1.8, ease: 'power2.out' }) : null;

                        heroSection.addEventListener('mousemove', (e) => {
                            const rect = heroSection.getBoundingClientRect();
                            if (rect.width === 0 || rect.height === 0) return;

                            const relX = (e.clientX - rect.left) / rect.width - 0.5;
                            const relY = (e.clientY - rect.top) / rect.height - 0.5;

                            if (xToOrb1 && yToOrb1) {
                                xToOrb1(relX * 25);
                                yToOrb1(relY * 25);
                            }

                            if (xToOrb2 && yToOrb2) {
                                xToOrb2(relX * -30);
                                yToOrb2(relY * -30);
                            }
                        }, { passive: true });

                        heroSection.addEventListener('mouseleave', () => {
                            if (orb1) gsap.to(orb1, { xPercent: 0, yPercent: 0, duration: 1.5, ease: 'power2.out' });
                            if (orb2) gsap.to(orb2, { xPercent: 0, yPercent: 0, duration: 1.5, ease: 'power2.out' });
                        });
                    }
                }
            }
        }


        /* ==========================================================================
           2. Leaflet.js Coverage Map Engine
           ========================================================================== */
        const mapElement = document.getElementById('sparkyCoverageMap');

        if (mapElement && typeof L !== 'undefined') {
            let map = null;
            let markersGroup = null;

            const completedJobs = [
                { lat: -34.0042, lng: 150.7289, title: "Switchboard Upgrade", suburb: "Oran Park", client: "Mark S.", rating: "5.0", electrician: "Lead Technician", image: "https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=150&q=80", review: "Quick response time and neat wiring work on our main board upgrade." },
                { lat: -33.9870, lng: 150.7920, title: "EV Charger Setup", suburb: "Narellan", client: "Sarah K.", rating: "5.0", electrician: "Senior Electrician", image: "https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=150&q=80", review: "Clean wall installation and clear explanation of the system." },
                { lat: -34.0531, lng: 150.6958, title: "Ceiling Fan Installation", suburb: "Camden", client: "Arthur & Margaret P.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80", review: "The young man arrived right on time and cleaned up after himself impeccably. Very polite service, will be calling again for any future needs." },
                { lat: -34.0182, lng: 150.7421, title: "LED Downlight Upgrade", suburb: "Gregory Hills", client: "Tyler M.", rating: "5.0", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=150&q=80", review: "lowkey ate with the lighting setup... living room looks aesthetic af now, cheers bro" },
                { lat: -34.0725, lng: 150.8119, title: "Emergency Power Outage", suburb: "Campbelltown", client: "Garry 'Davo' H.", rating: "5.0", electrician: "Chris (Installer)", image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80", review: "Absolute legend sorted out the trip switch in no time flat on a sunday evening. absolute lifesaver legend mate" },
                { lat: -33.9211, lng: 150.9231, title: "Outdoor Power Points", suburb: "Liverpool", client: "Chloe T.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80", review: "so quick and honest!! didn't try to overcharge like the last guys I called" },
                { lat: -34.0321, lng: 150.7099, title: "Full House Rewire", suburb: "Elderslie", client: "Robert & Helen B.", rating: "5.0", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80", review: "We were quite worried about rewiring our 40-year-old home, but the team explained every detail thoroughly and completed the job well within the estimated timeframe." },
                { lat: -33.9610, lng: 150.8520, title: "Ducted Aircon Circuit", suburb: "Edmondson Park", client: "Dave C.", rating: "5.0", electrician: "Chris (Installer)", image: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=150&q=80", review: "good job mate. fair price no complaints" },
                { lat: -33.8688, lng: 151.2093, title: "Office Lighting Repair", suburb: "Sydney CBD", client: "Jess W.", rating: "4.9", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80", review: "no cap best tradie experience i've had in sydney. super efficient and didn't leave a mess" },
                { lat: -33.8885, lng: 151.2094, title: "Pendant Lights & Dimmer", suburb: "Surry Hills", client: "Liam K.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=150&q=80", review: "vibe check passed. installed the kitchen island pendants perfectly" },
                { lat: -33.9172, lng: 151.2263, title: "Safety Switch Testing", suburb: "Randwick", client: "Patricia M.", rating: "5.0", electrician: "Chris (Installer)", image: "https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80", review: "Very knowledgeable and respectful young gentleman. Highly recommended for senior citizens needing reliable work." },
                { lat: -33.8130, lng: 151.0011, title: "Commercial Board Inspection", suburb: "Parramatta", client: "Mick 'Bluey' F.", rating: "5.0", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?auto=format&fit=crop&w=150&q=80", review: "Top notch work banger price. turned up when he said he would, no worries at all" },
                { lat: -33.7915, lng: 150.9234, title: "Sensor Security Lights", suburb: "Toongabbie", client: "Suresh P.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80", review: "Very professional service. Explained the sensor ranges clearly and tested everything before leaving." },
                { lat: -33.8910, lng: 151.2770, title: "Power Point Additions", suburb: "Bondi", client: "Maya R.", rating: "4.8", electrician: "Chris (Installer)", image: "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80", review: "slayed. literally saved my home office setup!" },
                { lat: -33.9810, lng: 151.1000, title: "Smoke Alarm Installation", suburb: "Hurstville", client: "Ken & Dorothy W.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?auto=format&fit=crop&w=150&q=80", review: "Installed all compliant interconnected smoke alarms for our rental property. Prompt and provided all necessary certificates." },
                { lat: -33.7710, lng: 151.1180, title: "Induction Cooktop Power Run", suburb: "Epping", client: "Jason L.", rating: "5.0", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=150&q=80", review: "ran new cable through roof space without making a single extra hole in the gyprock. mad skills" },
                { lat: -33.7500, lng: 150.6900, title: "Shed Sub-board Setup", suburb: "Penrith", client: "Baz S.", rating: "5.0", electrician: "Chris (Installer)", image: "https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=150&q=80", review: "sorted out the power in the back shed for my welder. top bloke fair dinkum good job" },
                { lat: -33.9400, lng: 150.8400, title: "Bathroom Heat Fan Light", suburb: "Carnes Hill", client: "Fatima A.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?auto=format&fit=crop&w=150&q=80", review: "super friendly electrician, came on time and fixed our bathroom heater unit before the cold snap. thank you!" },
                { lat: -34.0110, lng: 150.7780, title: "Smart Switch Setup", suburb: "Harrington Park", client: "Zac H.", rating: "5.0", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=150&q=80", review: "got all my smart switches hooked up to homekit. W tradie" },
                { lat: -33.8300, lng: 151.2100, title: "Garden Spike Lights", suburb: "Mosman", client: "Evelyn G.", rating: "5.0", electrician: "Chris (Installer)", image: "https://images.unsplash.com/photo-1554151228-14d9def656e4?auto=format&fit=crop&w=150&q=80", review: "The garden lighting looks absolutely magnificent. Thank you for taking such care with our landscaped gardens." },
                { lat: -33.9100, lng: 150.9800, title: "Fault Finding & Repair", suburb: "Bankstown", client: "Ibrahim K.", rating: "5.0", electrician: "Sam (Technician)", image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80", review: "tripped power in the middle of dinner. came in 20 mins and fixed burnt wire in wall socket. highly recommend" },
                { lat: -34.0600, lng: 150.7600, title: "Solar Inverter Wiring", suburb: "Mount Annan", client: "Steve 'Macca' M.", rating: "5.0", electrician: "Alex (Lead Electrician)", image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80", review: "no nonsense bloke. came in knocked it over in an hour, bloody beauty" }
            ];

            const sparkyIcon = L.divIcon({
                className: "custom-leaflet-pin",
                html: `
            <svg width="34" height="34" viewBox="0 0 24 24" fill="#78c805" stroke="#0a0c10" stroke-width="1.5">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>`,
                iconSize: [34, 34],
                iconAnchor: [17, 34],
                popupAnchor: [0, -34]
            });

            const createPopupHTML = (job) => `
        <div style="padding: 12px; max-width: 250px; font-family: inherit;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                <img src="${job.image}" style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover; border: 2px solid #78c805;" alt="${job.client}">
                <div>
                    <div style="font-weight: 700; font-size: 13px; color: var(--bs-body-color, #1E2229);">${job.title}</div>
                    <div style="font-size: 11px; color: #6C757D;">${job.suburb} • ${job.electrician}</div>
                </div>
            </div>
            <div style="color: #78c805; font-size: 12px; margin-bottom: 6px;">★ ★ ★ ★ ★ <strong style="color: var(--bs-body-color, #1E2229);">${job.rating}</strong></div>
            <div style="font-size: 11px; color: #495057; font-style: italic; margin-bottom: 6px;">"${job.review}"</div>
            <div style="font-size: 11px; font-weight: 700; color: var(--bs-body-color, #1E2229);">— ${job.client}</div>
        </div>`;

            map = L.map("sparkyCoverageMap", { scrollWheelZoom: false }).setView([-34.0042, 150.7289], 11);

            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                maxZoom: 19,
                subdomains: 'abcd',
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/attributions">CARTO</a>'
            }).addTo(map);

            map.on("click", () => map.scrollWheelZoom.enable());
            map.on("mouseout", () => map.scrollWheelZoom.disable());

            if (typeof L.markerClusterGroup === 'function') {
                markersGroup = L.markerClusterGroup({
                    showCoverageOnHover: false,
                    spiderfyOnMaxZoom: true
                });
            } else {
                markersGroup = L.layerGroup();
            }

            const renderMarkers = (jobsList) => {
                if (!markersGroup) return;
                markersGroup.clearLayers();

                jobsList.forEach((job) => {
                    const marker = L.marker([job.lat, job.lng], { icon: sparkyIcon });
                    const popupContent = createPopupHTML(job);

                    marker.bindPopup(popupContent);
                    marker.on("mouseover", function () { this.openPopup(); });
                    marker.on("mouseout", function () { this.closePopup(); });

                    markersGroup.addLayer(marker);
                });

                map.addLayer(markersGroup);
            };

            renderMarkers(completedJobs);

            window.filterMap = (suburb, btnElement) => {
                document.querySelectorAll(".btn-menu-pill").forEach(b => b.classList.remove("active"));
                if (btnElement) btnElement.classList.add("active");

                const filtered = suburb === 'all' ? completedJobs : completedJobs.filter(j => j.suburb === suburb);
                renderMarkers(filtered);

                if (filtered.length > 0 && typeof markersGroup.getLayers === 'function') {
                    const group = L.featureGroup(markersGroup.getLayers());
                    if (group.getBounds().isValid()) {
                        map.flyToBounds(group.getBounds().pad(0.2));
                    }
                }
            };

            window.locateUser = () => {
                map.locate({ setView: true, maxZoom: 13 })
                    .on('locationfound', (e) => {
                        L.popup()
                            .setLatLng(e.latlng)
                            .setContent('<div style="padding: 10px; text-align: center;"><strong>You are within our active service area!</strong><br><span style="font-size: 12px; color: #6C757D;">Same-day dispatch available for emergency calls.</span></div>')
                            .openOn(map);
                    })
                    .on('locationerror', () => {
                        alert("Location access denied or unavailable.");
                    });
            };
        }


        /* ==========================================================================
           3. Back To Top Button with Circular Progress Ring
           ========================================================================== */
        const backToTopBtn = document.getElementById("backToTop");
        const circle = document.querySelector(".progress-ring__circle");
        const percentText = document.querySelector(".progress-percent");

        if (backToTopBtn && circle) {
            const radius = circle.r && circle.r.baseVal ? circle.r.baseVal.value : 0;
            const circumference = 2 * Math.PI * radius;

            if (radius > 0) {
                circle.style.strokeDasharray = `${circumference} ${circumference}`;
                circle.style.strokeDashoffset = circumference;
            }

            const updateScrollProgress = () => {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop || 0;
                const scrollHeight = (document.documentElement.scrollHeight || document.body.scrollHeight) - document.documentElement.clientHeight;

                const scrollPercentage = scrollHeight > 0 ? Math.min(Math.max(scrollTop / scrollHeight, 0), 1) : 0;

                if (radius > 0) {
                    const offset = circumference - (scrollPercentage * circumference);
                    circle.style.strokeDashoffset = offset;
                }

                if (percentText) {
                    percentText.textContent = `${Math.round(scrollPercentage * 100)}%`;
                }

                backToTopBtn.classList.toggle("visible", scrollTop > 200);
            };

            window.addEventListener("scroll", updateScrollProgress, { passive: true });
            updateScrollProgress();

            backToTopBtn.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        }


        /* ==========================================================================
           4. Cookie Consent Preference Engine
           ========================================================================== */
        const cookieBanner = document.getElementById("cookieConsent");
        const acceptAllBtn = document.getElementById("acceptAllCookies");
        const acceptNecessaryBtn = document.getElementById("acceptNecessaryCookies");
        const COOKIE_STORAGE_KEY = "sparky_cookie_consent_status";

        if (cookieBanner) {
            let savedConsent = null;

            try {
                savedConsent = localStorage.getItem(COOKIE_STORAGE_KEY);
            } catch (e) {
                savedConsent = null;
            }

            if (!savedConsent) {
                setTimeout(() => {
                    cookieBanner.classList.add("show");
                }, 1200);
            }

            const saveConsent = (preferences) => {
                try {
                    localStorage.setItem(COOKIE_STORAGE_KEY, JSON.stringify({
                        timestamp: new Date().toISOString(),
                        preferences: preferences
                    }));
                } catch (e) {
                    // Fail silently if localStorage access is restricted
                }
                cookieBanner.classList.remove("show");
            };

            if (acceptAllBtn) {
                acceptAllBtn.addEventListener("click", () => saveConsent({ essential: true, analytics: true }));
            }

            if (acceptNecessaryBtn) {
                acceptNecessaryBtn.addEventListener("click", () => saveConsent({ essential: true, analytics: false }));
            }
        }

    });
    document.addEventListener('DOMContentLoaded', () => {

        /* ==========================================================================
           1. GSAP Hero Entrance Timeline & Dynamic Form Toggles
           ========================================================================== */
        if (typeof gsap !== 'undefined') {
            const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            const bgImg = document.querySelectorAll('[data-gsap="bg-img"]');
            const heroItems = document.querySelectorAll('[data-gsap="hero-item"]');
            const featureItems = document.querySelectorAll('[data-gsap="feature-item"]');
            const formCard = document.querySelectorAll('[data-gsap="form-card"]');
            const footerNav = document.querySelectorAll('[data-gsap="footer-nav"]');

            if (prefersReducedMotion) {
                // Instantly render end states without motion if user prefers reduced motion
                if (bgImg.length) gsap.set(bgImg, { scale: 1, opacity: 0.25 });
                if (heroItems.length) gsap.set(heroItems, { y: 0, opacity: 1 });
                if (featureItems.length) gsap.set(featureItems, { x: 0, opacity: 1 });
                if (formCard.length) gsap.set(formCard, { y: 0, opacity: 1, scale: 1 });
                if (footerNav.length) gsap.set(footerNav, { y: '0%', opacity: 1 });
            } else {
                const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

                if (bgImg.length > 0) {
                    heroTl.fromTo(bgImg, { scale: 1.2, opacity: 0 }, { scale: 1, opacity: 0.25, duration: 1.4 });
                }

                if (heroItems.length > 0) {
                    heroTl.fromTo(heroItems, { y: 35, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.12 }, '-=1.0');
                }

                if (featureItems.length > 0) {
                    heroTl.fromTo(featureItems, { x: -25, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6, stagger: 0.1 }, '-=0.6');
                }

                if (formCard.length > 0) {
                    heroTl.fromTo(formCard, { y: 45, opacity: 0, scale: 0.96 }, { y: 0, opacity: 1, scale: 1, duration: 0.9, ease: 'back.out(1.2)' }, '-=0.8');
                }

                if (footerNav.length > 0) {
                    heroTl.fromTo(footerNav, { y: '100%', opacity: 0 }, { y: '0%', opacity: 1, duration: 0.7 }, '-=0.5');
                }
            }

            // Dynamic Form Toggle Helpers
            const serviceTriggers = document.querySelectorAll('.service-trigger');
            const solarSec = document.getElementById('solarOptionsSection');
            const evSec = document.getElementById('evOptionsSection');

            const animateSectionToggle = (targetEl, show) => {
                if (!targetEl) return;

                if (prefersReducedMotion) {
                    targetEl.classList.toggle('d-none', !show);
                    return;
                }

                if (show) {
                    targetEl.classList.remove('d-none');
                    gsap.fromTo(targetEl,
                        { opacity: 0, height: 0, y: -10 },
                        { opacity: 1, height: 'auto', y: 0, duration: 0.4, ease: 'power2.out' }
                    );
                } else {
                    gsap.to(targetEl, {
                        opacity: 0,
                        height: 0,
                        duration: 0.3,
                        ease: 'power2.in',
                        onComplete: () => targetEl.classList.add('d-none')
                    });
                }
            };

            if (serviceTriggers.length > 0) {
                serviceTriggers.forEach((checkbox) => {
                    // Initial check on page boot to preserve check states (e.g., soft reload / back button)
                    if (checkbox.id === 'serviceSolar' && solarSec && checkbox.checked) {
                        solarSec.classList.remove('d-none');
                    }
                    if (checkbox.id === 'serviceEV' && evSec && checkbox.checked) {
                        evSec.classList.remove('d-none');
                    }

                    checkbox.addEventListener('change', () => {
                        if (checkbox.id === 'serviceSolar' && solarSec) {
                            animateSectionToggle(solarSec, checkbox.checked);
                        }
                        if (checkbox.id === 'serviceEV' && evSec) {
                            animateSectionToggle(evSec, checkbox.checked);
                        }
                    });
                });
            }
        }


        /* ==========================================================================
           2. Service Details Modal & Deep-Linking Engine (Bootstrap 5)
           ========================================================================== */
        const serviceModalElement = document.getElementById('serviceDetailsModal');

        if (serviceModalElement && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            const serviceModal = bootstrap.Modal.getOrCreateInstance(serviceModalElement);
            const modalTitle = document.getElementById('modalServiceTitle');
            const modalImg = document.getElementById('modalServiceImg');
            const modalDesc = document.getElementById('modalServiceDesc');
            const modalSectionsContainer = document.getElementById('modalServiceSectionsContainer');
            const modalBookBtn = document.getElementById('modalBookBtn');
            const nextServiceTitleText = document.getElementById('nextServiceTitleText');
            const triggerNextServiceBtn = document.getElementById('triggerNextServiceBtn');

            let currentNextSlug = '';

            const openServiceModalBySlug = (slug, updateHash = true) => {
                if (!slug) return;

                // Search priority: #services-grid payload -> generic payload -> view-details card parent
                const payload = document.querySelector(`#services-grid .service-modal-data[data-service-slug="${slug}"]`) ||
                    document.querySelector(`.service-modal-data[data-service-slug="${slug}"]`) ||
                    document.querySelector(`.view-details-btn[data-slug="${slug}"]`)?.closest('.card')?.querySelector('.service-modal-data');

                if (!payload) return;

                const card = payload.closest('.card');
                const title = card ? card.querySelector('.service-title')?.innerText || '' : '';
                const desc = card ? card.querySelector('.service-desc')?.innerText || '' : '';
                const imgSrc = card ? card.querySelector('img')?.getAttribute('src') || '' : '';

                const sectionsHtml = payload.innerHTML || '';
                const waLink = payload.getAttribute('data-wa-link') || '#';
                const nextSlug = payload.getAttribute('data-next-slug') || '';
                const nextTitle = payload.getAttribute('data-next-title') || '';

                // Populate Modal Fields
                if (modalTitle) modalTitle.innerText = title;
                if (modalDesc) modalDesc.innerText = desc;
                if (modalImg) {
                    modalImg.setAttribute('src', imgSrc);
                    modalImg.setAttribute('alt', title);
                }
                if (modalSectionsContainer) modalSectionsContainer.innerHTML = sectionsHtml;
                if (modalBookBtn) modalBookBtn.setAttribute('href', waLink);

                // Update Next Service Pill Container
                currentNextSlug = nextSlug;
                if (triggerNextServiceBtn) {
                    const nextContainer = triggerNextServiceBtn.closest('.next-service-container') || triggerNextServiceBtn.parentElement?.parentElement;
                    if (nextTitle && nextContainer) {
                        if (nextServiceTitleText) nextServiceTitleText.innerText = nextTitle;
                        nextContainer.classList.remove('d-none');
                    } else if (nextContainer) {
                        nextContainer.classList.add('d-none');
                    }
                }

                // Close Mobile Offcanvas Drawer if open
                const activeOffcanvas = document.querySelector('.offcanvas.show');
                if (activeOffcanvas && bootstrap.Offcanvas) {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(activeOffcanvas);
                    if (bsOffcanvas) bsOffcanvas.hide();
                }

                // Update URL Hash
                if (updateHash && window.history && window.history.pushState) {
                    history.pushState(null, null, `#${slug}`);
                }

                serviceModal.show();
            };

            // Attach Click Handlers to View Details Buttons
            document.querySelectorAll('.view-details-btn').forEach((button) => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const slug = button.getAttribute('data-slug');
                    if (slug) openServiceModalBySlug(slug);
                });
            });

            // Next Service Pill Click Handler
            if (triggerNextServiceBtn) {
                triggerNextServiceBtn.addEventListener('click', () => {
                    if (currentNextSlug) openServiceModalBySlug(currentNextSlug);
                });
            }

            // Clear Hash when Modal is Closed
            serviceModalElement.addEventListener('hidden.bs.modal', () => {
                if (window.location.hash && window.history && window.history.pushState) {
                    history.pushState('', document.title, window.location.pathname + window.location.search);
                }
            });

            // Handle URL Deep-Linking on Initial Page Load
            const initialHash = window.location.hash.replace('#', '');
            if (initialHash) {
                setTimeout(() => {
                    openServiceModalBySlug(initialHash, false);
                }, 300);
            }
        }

    });
</script>
<script>
    let globalServicesMap = {};
    let bsModal = null;
    let isUpdatingRouteFromClick = false;

    const BASE_PATH = '/services/';

    document.addEventListener("DOMContentLoaded", async () => {
        const modalElement = document.getElementById('serviceDetailsModal');
        if (modalElement) {
            bsModal = new bootstrap.Modal(modalElement);
        }

        try {
            const response = await fetch('/assets/json/services.json');
            const rawData = await response.json();
            const container = document.getElementById('services-container');

            // Handle both flat array JSON and categorized JSON structures
            let categories = [];
            if (Array.isArray(rawData) && rawData.length > 0 && rawData[0].services) {
                categories = rawData;
            } else if (Array.isArray(rawData)) {
                categories = [{ category_id: "all-services", category_title: "Our Services", services: rawData }];
            }

            // Map all services to global map
            categories.forEach(cat => {
                (cat.services || []).forEach(srv => {
                    globalServicesMap[srv.slug] = srv;
                });
            });

            // Render main grid
            if (container) {
                container.innerHTML = categories.map(category => `
                    <div class="mt-5" id="${category.category_id}">
                        <h3 class="h4 text-uppercase fw-bold text-body mb-4 border-start border-3 border-accent ps-3">
                            ${category.category_title}
                        </h3>
                        <div class="row g-4 flex-nowrap flex-md-wrap overflow-x-auto pb-3 pb-md-0 snap-x">
                            ${category.services.map(service => renderServiceCard(service)).join('')}
                        </div>
                    </div>
                `).join('');
            }

            // Initial direct link check
            handleUrlPath();

            // Reset URL on close
            if (modalElement) {
                modalElement.addEventListener('hidden.bs.modal', () => {
                    if (!isUpdatingRouteFromClick) {
                        removeUrlPath();
                    }
                });
            }

            // Browser Back/Forward buttons
            window.addEventListener('popstate', () => {
                handleUrlPath();
            });

            // Service details click delegate
            document.addEventListener('click', (e) => {
                const btn = e.target.closest('.view-details-btn');
                if (btn) {
                    const slug = btn.getAttribute('data-slug');
                    openServiceModal(slug);
                }
            });

        } catch (err) {
            console.error("Error loading services JSON:", err);
        }
    });

    function getSlugFromPath() {
        const path = window.location.pathname;
        if (path.startsWith(BASE_PATH)) {
            return path.replace(BASE_PATH, '').replace(/\/$/, '');
        }
        return null;
    }

    function handleUrlPath() {
        const slug = getSlugFromPath();
        if (slug && globalServicesMap[slug]) {
            openServiceModal(slug, false);
        } else if (!slug && bsModal) {
            bsModal.hide();
        }
    }

    function removeUrlPath() {
        history.pushState(null, '', BASE_PATH);
    }

    function renderServiceCard(service) {
        return `
        <div class="col-10 col-sm-8 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1 snap-align-start">
            <div class="card glass-hero-card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative backdrop-blur transition-all">
                <div class="card-img-top position-relative overflow-hidden" style="height: 200px;">
                    <img src="${service.image}" alt="${service.title}" class="w-100 h-100 object-fit-cover top-0 img-zoom">
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h4 class="h5 fw-bold text-uppercase text-body mb-2 service-title">${service.title}</h4>
                    <p class="text-body-secondary small mb-4 service-desc">${service.short_description}</p>
                    <div class="mt-auto d-flex flex-column gap-2">
                        <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill w-100 fw-semibold text-uppercase view-details-btn" data-slug="${service.slug}">
                            View Details
                        </button>
                        <a href="${service.whatsapp_link}" target="_blank" class="btn btn-power text-dark fw-bold text-uppercase rounded-pill w-100 d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                            <i class="bi bi-whatsapp"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>`;
    }

    function openServiceModal(slug, updateUrl = true) {
        const data = globalServicesMap[slug];
        if (!data || !bsModal) return;

        if (updateUrl) {
            isUpdatingRouteFromClick = true;
            const newUrl = `${BASE_PATH}${slug}`;
            history.pushState({ slug: slug }, '', newUrl);
            setTimeout(() => { isUpdatingRouteFromClick = false; }, 100);
        }

        // Populate header details
        const imgEl = document.getElementById('modalServiceImg');
        const titleEl = document.getElementById('modalServiceTitle');
        const descEl = document.getElementById('modalServiceDesc');
        const bookBtn = document.getElementById('modalBookBtn');

        if (imgEl) imgEl.src = data.image || '';
        if (titleEl) titleEl.innerText = data.title || '';
        if (descEl) descEl.innerText = data.short_description || '';
        if (bookBtn) bookBtn.href = data.whatsapp_link || '#';

        // Dynamic Section Renderer
        const sectionsContainer = document.getElementById('modalServiceSectionsContainer');
        if (sectionsContainer) {
            sectionsContainer.innerHTML = (data.modal_sections || []).map(sec => {
                if (sec.type === 'lead_text') {
                    return `
                    <div class="service-section mb-5">
                        <span class="badge bg-accent text-black border rounded-pill mb-2 px-3 py-1 text-uppercase extra-small fw-bold">${sec.badge || ''}</span>
                        <h3 class="h4 text-uppercase fw-bold text-body mb-3">${sec.heading || ''}</h3>
                        <p class="text-body-secondary lead fs-6">${sec.text || ''}</p>
                    </div>`;
                }
                if (sec.type === 'feature_grid') {
                    const items = (sec.items || []).map(i => `
                    <div class="col-md-6">
                        <div class="p-3 rounded-4 bg-body-tertiary border h-100">
                            <div class="d-flex align-items-center gap-2 mb-2 text-body fw-bold">
                                <i class="bi ${i.icon || 'bi-check-circle'} text-accent fs-5"></i>
                                <span>${i.title || ''}</span>
                            </div>
                            <p class="extra-small text-body-secondary mb-0">${i.description || ''}</p>
                        </div>
                    </div>`).join('');
                    return `
                    <div class="service-section mb-5">
                        <span class="badge bg-accent text-black border rounded-pill mb-2 px-3 py-1 text-uppercase extra-small fw-bold">${sec.badge || ''}</span>
                        <h3 class="h4 text-uppercase fw-bold text-body mb-4">${sec.heading || ''}</h3>
                        <div class="row g-3">${items}</div>
                    </div>`;
                }
                if (sec.type === 'list_items') {
                    const items = (sec.items || []).map(i => `
                    <li class="d-flex align-items-start gap-3">
                        <i class="bi ${i.icon || 'bi-patch-check'} text-accent fs-5 mt-n1"></i>
                        <div>
                            <strong class="text-body d-block">${i.title || ''}</strong>
                            <span class="small">${i.description || ''}</span>
                        </div>
                    </li>`).join('');
                    return `
                    <div class="service-section mb-4">
                        <span class="badge bg-accent text-black border rounded-pill mb-2 px-3 py-1 text-uppercase extra-small fw-bold">${sec.badge || ''}</span>
                        <h3 class="h4 text-uppercase fw-bold text-body mb-3">${sec.heading || ''}</h3>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0 text-body-secondary">${items}</ul>
                    </div>`;
                }
                return '';
            }).join('');
        }

        // Handle Next Service Button cleanly
        const nextBtn = document.getElementById('triggerNextServiceBtn');
        const nextWrapper = nextBtn ? nextBtn.closest('.next-service-wrapper') || nextBtn.parentElement : null;

        if (nextBtn && data.next_service && data.next_service.slug) {
            const nextTitle = document.getElementById('nextServiceTitleText');
            if (nextTitle) nextTitle.innerText = data.next_service.title;
            nextBtn.onclick = () => openServiceModal(data.next_service.slug);
            if (nextWrapper) nextWrapper.style.display = 'block';
        } else if (nextWrapper) {
            nextWrapper.style.display = 'none';
        }

        // Reset modal scroll position to top when switching content
        const modalBody = document.querySelector('#serviceDetailsModal .modal-body');
        if (modalBody) modalBody.scrollTop = 0;

        bsModal.show();
    }
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('sparkyContactForm');
        const alertBox = document.getElementById('formAlert');
        const submitBtn = document.getElementById('submitBtn');

        if (!form) return;

        // Helper: Australian Phone Number Regex (Mobile, Landline, +61)
        function isValidAustralianPhone(phone) {
            const cleaned = phone.replace(/[\s\-\(\)]/g, ''); // Remove spaces, dashes, brackets
            const auPhoneRegex = /^(?:\+?61|0)[23478]\d{8}$/;
            return auPhoneRegex.test(cleaned);
        }

        // Helper: Basic Email Regex
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        // Clear red error styling as user types
        form.querySelectorAll('.form-control, .form-select').forEach(input => {
            input.addEventListener('input', function () {
                this.classList.remove('is-invalid');
            });
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;
            alertBox.className = 'alert d-none';
            alertBox.textContent = '';

            const nameInput = document.getElementById('contactName');
            const phoneInput = document.getElementById('contactPhone');
            const emailInput = document.getElementById('contactEmail');
            const serviceInput = document.getElementById('serviceType');
            const messageInput = document.getElementById('contactMessage');

            // Name Validation
            if (!nameInput.value.trim()) {
                nameInput.classList.add('is-invalid');
                isValid = false;
            }

            // Phone Validation
            if (!isValidAustralianPhone(phoneInput.value)) {
                phoneInput.classList.add('is-invalid');
                isValid = false;
            }

            // Email Validation
            if (!isValidEmail(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                isValid = false;
            }

            // Service Selection Validation
            if (!serviceInput.value) {
                serviceInput.classList.add('is-invalid');
                isValid = false;
            }

            // Message Validation
            if (!messageInput.value.trim()) {
                messageInput.classList.add('is-invalid');
                isValid = false;
            }

            if (!isValid) {
                alertBox.className = 'alert alert-warning border-0 shadow-sm fw-semibold';
                alertBox.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i> Please fix the highlighted fields in red above.';
                return;
            }

            // Disable button & show spinner
            submitBtn.disabled = true;
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = 'Sending Request... <span class="spinner-border spinner-border-sm ms-2" role="status"></span>';

            // Submit via AJAX
            fetch(form.getAttribute('action'), {
                method: 'POST',
                body: new FormData(form)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alertBox.className = 'alert alert-success border-0 shadow-sm fw-semibold';
                        alertBox.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i> ' + data.message;
                        form.reset();
                        form.querySelectorAll('.is-invalid, .is-valid').forEach(el => el.classList.remove('is-invalid', 'is-valid'));
                    } else {
                        alertBox.className = 'alert alert-warning border-0 shadow-sm fw-semibold';
                        alertBox.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i> ' + (data.message || 'Validation failed. Please check your details.');
                    }
                })
                .catch(() => {
                    alertBox.className = 'alert alert-danger border-0 shadow-sm fw-semibold';
                    alertBox.innerHTML = '<i class="bi bi-x-circle-fill me-2"></i> Unable to send message. Please call us directly at 0405 005 869.';
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
        });
    });
</script>