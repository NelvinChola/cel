// Services Page Specific JavaScript - Scoped to prevent conflicts
(function () {
    'use strict';

    // Only run on services page
    if (!document.querySelector('.services-hero') && !document.querySelector('#services')) {
        return; // Exit if not on services page
    }

    // Counter animation for stats - SERVICES PAGE ONLY
    document.addEventListener('DOMContentLoaded', function () {
        // Only target counters within services sections
        const servicesCounters = document.querySelectorAll('#services .stat-number, .services-hero .stat-number, .featured-solutions .stat-number');

        if (servicesCounters.length === 0) return;

        const animateCounters = () => {
            servicesCounters.forEach(counter => {
                const targetText = counter.getAttribute('data-count');
                const target = parseInt(targetText) || 0;
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        // Handle symbols safely - SERVICES PAGE SPECIFIC
                        if (targetText.includes('%')) {
                            counter.textContent = target + '%';
                        } else if (targetText.includes('x')) {
                            counter.textContent = target + 'x';
                        } else {
                            counter.textContent = target;
                        }
                    }
                };

                updateCounter();
            });
        };

        // Only observe services-related elements
        const servicesObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.closest('#services, .services-hero, .featured-solutions')) {
                    entry.target.classList.add('animate-in');
                    if (entry.target.classList.contains('stats-bar')) {
                        animateCounters();
                    }
                }
            });
        }, { threshold: 0.3 });

        // Only observe services page elements
        document.querySelectorAll('#services [data-aos], .services-hero [data-aos], .featured-solutions [data-aos]').forEach(el => {
            servicesObserver.observe(el);
        });
    });

    // Services Section Interactions - SCOPED
    document.addEventListener('DOMContentLoaded', function () {
        // Only initialize if services elements exist
        const hasServicesElements = document.querySelector('.service-card-large, .service-card-medium, .solution-card');
        if (!hasServicesElements) return;

        initServicesInteractions();
        initScrollAnimations();
        initMicroInteractions();
        initFeaturedSolutions();
    });

    function initServicesInteractions() {
        const serviceCards = document.querySelectorAll('.service-card-large, .service-card-medium');
        const ctaSection = document.querySelector('.services-cta');

        // Card click handlers - SERVICES ONLY
        serviceCards.forEach(card => {
            card.addEventListener('click', function (e) {
                if (e.target.tagName === 'A') return;

                const link = this.querySelector('a');
                if (link) {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                    trackServiceClick(this.querySelector('h3, h4')?.textContent || 'Unknown Service');
                }
            });

            card.addEventListener('mouseenter', function () {
                this.style.zIndex = '10';
                addPulseAnimation(this);
            });

            card.addEventListener('mouseleave', function () {
                this.style.zIndex = '';
            });
        });

        // CTA section - SERVICES ONLY
        if (ctaSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCTA(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(ctaSection);
        }
    }

    function initScrollAnimations() {
        // Only animate services page elements
        const servicesAnimatedElements = document.querySelectorAll('#services [data-aos], .services-hero [data-aos], .featured-solutions [data-aos]');

        if (servicesAnimatedElements.length === 0) return;

        const elementObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.closest('#services, .services-hero, .featured-solutions')) {
                    const element = entry.target;
                    const delay = element.getAttribute('data-aos-delay') || 0;

                    setTimeout(() => {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                        element.classList.add('aos-animate');
                    }, parseInt(delay));

                    elementObserver.unobserve(element);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        servicesAnimatedElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'all 0.6s ease';
            elementObserver.observe(element);
        });
    }

    function initMicroInteractions() {
        // Only target buttons within services sections
        const servicesButtons = document.querySelectorAll('#services .btn, .services-hero .btn, .featured-solutions .btn');

        servicesButtons.forEach(btn => {
            btn.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });

            btn.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
            });

            btn.addEventListener('mousedown', function () {
                this.style.transform = 'translateY(0) scale(0.98)';
            });

            btn.addEventListener('mouseup', function () {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
        });

        // Only target icons within services sections
        const servicesIcons = document.querySelectorAll('#services .icon-wrapper, .services-hero .icon-wrapper, .featured-solutions .icon-wrapper');

        servicesIcons.forEach(icon => {
            icon.addEventListener('mouseenter', function () {
                this.style.transform = 'scale(1.1) rotate(5deg)';
            });

            icon.addEventListener('mouseleave', function () {
                this.style.transform = 'scale(1) rotate(0)';
            });
        });

        // Parallax effect only for services large cards
        const largeCards = document.querySelectorAll('.service-card-large');
        if (largeCards.length > 0) {
            initParallaxEffect();
        }
    }

    function initParallaxEffect() {
        const largeCards = document.querySelectorAll('.service-card-large');

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            largeCards.forEach((card, index) => {
                const delay = index * 100;
                card.style.transform = `translateY(${rate + delay}px)`;
            });
        });
    }

    function addPulseAnimation(element) {
        if (!element.closest('#services, .featured-solutions')) return;

        element.classList.remove('pulse-animation');
        void element.offsetWidth;
        element.classList.add('pulse-animation');

        setTimeout(() => {
            element.classList.remove('pulse-animation');
        }, 600);
    }

    function animateCTA(ctaElement) {
        if (!ctaElement.closest('#services, .featured-solutions')) return;

        ctaElement.style.opacity = '0';
        ctaElement.style.transform = 'translateY(50px)';

        setTimeout(() => {
            ctaElement.style.transition = 'all 0.8s ease';
            ctaElement.style.opacity = '1';
            ctaElement.style.transform = 'translateY(0)';

            const ctaButton = ctaElement.querySelector('.btn');
            if (ctaButton) {
                setInterval(() => {
                    ctaButton.classList.toggle('float-animation');
                }, 3000);
            }
        }, 200);
    }

    // Featured Solutions - SCOPED
    function initFeaturedSolutions() {
        const solutionCards = document.querySelectorAll('.solution-card');
        const quickViewButtons = document.querySelectorAll('.btn-view');
        const shareButtons = document.querySelectorAll('.btn-share');

        if (solutionCards.length === 0) return;

        solutionCards.forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-10px) scale(1.02)';
                animateCardElements(this);
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
            });

            card.addEventListener('click', function (e) {
                if (window.innerWidth < 768 && !e.target.closest('a') && !e.target.closest('button')) {
                    this.classList.toggle('expanded');
                }
            });
        });

        quickViewButtons.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                const card = this.closest('.solution-card');
                openQuickView(card);
            });
        });

        shareButtons.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                const card = this.closest('.solution-card');
                shareSolution(card);
            });
        });

        animateSolutionStats();
        initSolutionsScrollAnimations();
    }

    function animateCardElements(card) {
        if (!card.closest('.featured-solutions')) return;

        const badge = card.querySelector('.solution-badge');
        const stats = card.querySelectorAll('.stat-number');

        if (badge) {
            badge.style.transform = 'scale(1.1)';
            setTimeout(() => {
                badge.style.transform = 'scale(1)';
            }, 300);
        }

        stats.forEach(stat => {
            stat.style.transform = 'scale(1.1)';
            setTimeout(() => {
                stat.style.transform = 'scale(1)';
            }, 200);
        });
    }

    function animateSolutionStats() {
        const stats = document.querySelectorAll('.featured-solutions .stat-number');
        if (stats.length === 0) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.closest('.featured-solutions')) {
                    const stat = entry.target;
                    const targetText = stat.getAttribute('data-count') || stat.textContent;
                    const target = parseFloat(targetText) || 0;

                    if (targetText.includes('%') || targetText.includes('x')) {
                        animateValue(stat, 0, target, 2000, targetText);
                    } else {
                        animateValue(stat, 0, target, 2000);
                    }
                    observer.unobserve(stat);
                }
            });
        }, { threshold: 0.5 });

        stats.forEach(stat => observer.observe(stat));
    }

    function animateValue(element, start, end, duration, originalText = '') {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);

            let value;
            if (originalText.includes('%')) {
                value = Math.floor(progress * (end - start) + start);
                element.textContent = value + '%';
            } else if (originalText.includes('x')) {
                value = (progress * (end - start) + start).toFixed(1);
                element.textContent = value + 'x';
            } else {
                value = Math.floor(progress * (end - start) + start);
                element.textContent = value;
            }

            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.textContent = originalText || end.toString();
            }
        };
        window.requestAnimationFrame(step);
    }

    function openQuickView(card) {
        if (!card.closest('.featured-solutions')) return;

        const title = card.querySelector('.solution-title')?.textContent || 'Service';
        const description = card.querySelector('.solution-description')?.textContent || 'Description not available';
        const image = card.querySelector('.solution-img')?.src || '';

        const modal = document.createElement('div');
        modal.className = 'quick-view-modal';
        modal.innerHTML = `
            <div class="modal-overlay"></div>
            <div class="modal-content">
                <button class="modal-close">&times;</button>
                <div class="modal-body">
                    <img src="${image}" alt="${title}" class="modal-image">
                    <div class="modal-info">
                        <h3>${title}</h3>
                        <p>${description}</p>
                        <div class="modal-actions">
                            <button class="btn btn-primary">Get Started</button>
                            <button class="btn btn-outline-primary">Download Brochure</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        document.body.appendChild(modal);
        addModalStyles();

        modal.querySelector('.modal-close').addEventListener('click', () => {
            modal.remove();
        });

        modal.querySelector('.modal-overlay').addEventListener('click', () => {
            modal.remove();
        });
    }

    function shareSolution(card) {
        if (!card.closest('.featured-solutions')) return;

        const title = card.querySelector('.solution-title')?.textContent || 'Cyber Express Solution';
        const url = window.location.href;

        if (navigator.share) {
            navigator.share({
                title: title,
                text: 'Check out this solution from Cyber Express',
                url: url
            });
        } else {
            navigator.clipboard.writeText(url).then(() => {
                showNotification('Link copied to clipboard!');
            });
        }
    }

    function initSolutionsScrollAnimations() {
        const cards = document.querySelectorAll('.solution-card-wrapper');
        if (cards.length === 0) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.closest('.featured-solutions')) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    }

    function addModalStyles() {
        if (!document.getElementById('services-modal-styles')) {
            const styles = `
                .quick-view-modal {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1050;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .modal-overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0,0,0,0.5);
                    backdrop-filter: blur(5px);
                }
                .modal-content {
                    position: relative;
                    background: white;
                    border-radius: 20px;
                    max-width: 800px;
                    width: 90%;
                    max-height: 90vh;
                    overflow: auto;
                    z-index: 1;
                }
                .modal-close {
                    position: absolute;
                    top: 1rem;
                    right: 1rem;
                    background: none;
                    border: none;
                    font-size: 2rem;
                    cursor: pointer;
                    z-index: 2;
                }
                .modal-body {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 2rem;
                    padding: 2rem;
                }
                .modal-image {
                    width: 100%;
                    height: 300px;
                    object-fit: cover;
                    border-radius: 10px;
                }
                @media (max-width: 768px) {
                    .modal-body {
                        grid-template-columns: 1fr;
                    }
                }
            `;

            const styleSheet = document.createElement('style');
            styleSheet.id = 'services-modal-styles';
            styleSheet.textContent = styles;
            document.head.appendChild(styleSheet);
        }
    }

    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'services-notification';
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--success);
            color: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            z-index: 1060;
            animation: slideInRight 0.3s ease;
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.remove();
        }, 3000);
    }

    // Analytics - SERVICES PAGE ONLY
    function initServicesAnalytics() {
        if (!document.querySelector('#services')) return;

        let servicesViewed = new Set();
        let timeSpentOnServices = 0;
        let startTime = Date.now();

        const serviceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.closest('#services')) {
                    const serviceTitle = entry.target.querySelector('h3, h4')?.textContent;
                    if (serviceTitle && !servicesViewed.has(serviceTitle)) {
                        servicesViewed.add(serviceTitle);
                        trackServiceView(serviceTitle);
                    }
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('#services .service-card-large, #services .service-card-medium').forEach(card => {
            serviceObserver.observe(card);
        });

        setInterval(() => {
            timeSpentOnServices += 1;
        }, 1000);

        window.addEventListener('beforeunload', () => {
            const totalTime = Math.round((Date.now() - startTime) / 1000);
            console.log('Services Section Analytics:', {
                servicesViewed: Array.from(servicesViewed),
                uniqueServicesViewed: servicesViewed.size,
                totalTimeSpent: totalTime,
                activeTimeSpent: timeSpentOnServices
            });
        });
    }

    function trackServiceView(serviceName) {
        console.log(`Service viewed: ${serviceName}`);
    }

    function trackServiceClick(serviceName) {
        console.log(`Service clicked: ${serviceName}`);
    }

    // Export only if needed
    window.ServicesManager = {
        scrollToServices: function () {
            const servicesSection = document.getElementById('services');
            if (servicesSection) {
                servicesSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        },
        trackServiceClick,
        trackServiceView
    };

})();