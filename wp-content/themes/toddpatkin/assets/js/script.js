// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('shadow-sm');
    } else {
        navbar.classList.remove('shadow-sm');
    }
});

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Enhanced Scroll Animation with Intersection Observer
const observerOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -80px 0px'
};

const scrollObserver = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animated');
            scrollObserver.unobserve(entry.target);
        }
    });
}, observerOptions);

// Reviews Carousel - Handle mobile vs desktop behavior
document.addEventListener('DOMContentLoaded', function () {
    const reviewsCarousel = document.getElementById('reviewsCarousel');
    if (reviewsCarousel) {
        const carousel = new bootstrap.Carousel(reviewsCarousel, {
            interval: false,
            wrap: false // We'll handle wrapping manually
        });
        
        // Function to get current slide index
        function getCurrentSlideIndex() {
            const activeSlide = reviewsCarousel.querySelector('.carousel-item.active');
            const allSlides = Array.from(reviewsCarousel.querySelectorAll('.carousel-item'));
            return allSlides.indexOf(activeSlide);
        }
        
        // Function to check if a slide is visible on desktop
        function isSlideVisibleOnDesktop(slideIndex) {
            // On desktop, slides 0, 3, and 6 are visible
            return slideIndex === 0 || slideIndex === 3 || slideIndex === 6;
        }
        
        // Tablet (667-1024px): slides 11, 12, 13, 14, 15 (2 cards per slide)
        function isTablet() {
            const w = window.innerWidth;
            return w >= 667 && w <= 1024;
        }
        function isSlideVisibleOnTablet(slideIndex) {
            return slideIndex >= 11 && slideIndex <= 15;
        }
        
        // Function to update indicators based on screen size (keeps indicator in sync with active slide)
        function updateIndicators(activeIndex) {
            const indicatorsWrap = reviewsCarousel.querySelector('.carousel-indicators');
            if (!indicatorsWrap) return;
            const allButtons = indicatorsWrap.querySelectorAll('button');
            // Clear active from all indicators first (override Bootstrap's update)
            allButtons.forEach(function (btn) {
                btn.classList.remove('active');
                btn.removeAttribute('aria-current');
            });
            const w = window.innerWidth;
            const isDesktop = w > 1024;
            const isTabletView = isTablet();
            const desktopIndicators = indicatorsWrap.querySelectorAll('.d-none.d-md-inline-block.d-tablet-none');
            const tabletIndicators = indicatorsWrap.querySelectorAll('.reviews-tablet-indicator');
            const mobileIndicators = indicatorsWrap.querySelectorAll('.d-md-none.d-tablet-none');
            
            if (isTabletView) {
                // Tablet: 5 indicators for slides 11-15
                tabletIndicators.forEach(function (indicator, index) {
                    if (activeIndex === 11 + index) {
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    }
                });
            } else if (isDesktop) {
                // Desktop: 3 indicators for slides 0, 3, 6
                desktopIndicators.forEach(function (indicator, index) {
                    var targetSlide = index === 0 ? 0 : (index === 1 ? 3 : 6);
                    if (activeIndex === targetSlide) {
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    }
                });
            } else {
                // Mobile: 9 indicators for slides 0-8
                mobileIndicators.forEach(function (indicator, index) {
                    if (index === activeIndex) {
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    }
                });
            }
        }
        
        // Intercept slide event BEFORE it happens to control navigation on desktop/tablet
        reviewsCarousel.addEventListener('slide.bs.carousel', function (e) {
            const w = window.innerWidth;
            const isDesktop = w > 1024;
            const isTabletView = isTablet();
            // Update indicator immediately when slide is about to change (optimistic UI)
            var targetIndex = e.to;
            if (isTabletView && !isSlideVisibleOnTablet(e.to)) {
                const currentIndex = getCurrentSlideIndex();
                targetIndex = (e.direction === 'left' || e.direction === 'next')
                    ? (currentIndex >= 15 ? 11 : currentIndex + 1)
                    : (currentIndex <= 11 ? 15 : currentIndex - 1);
            } else if (isDesktop && !isSlideVisibleOnDesktop(e.to)) {
                const currentIndex = getCurrentSlideIndex();
                if (e.direction === 'left' || e.direction === 'next') {
                    targetIndex = currentIndex === 0 ? 3 : (currentIndex === 3 ? 6 : 0);
                } else {
                    targetIndex = currentIndex === 0 ? 6 : (currentIndex === 3 ? 0 : 3);
                }
            }
            updateIndicators(targetIndex);
            
            if (isTabletView) {
                if (!isSlideVisibleOnTablet(e.to)) {
                    e.preventDefault();
                    const currentIndex = getCurrentSlideIndex();
                    let goToIndex = 11;
                    if (e.direction === 'left' || e.direction === 'next') {
                        goToIndex = currentIndex >= 15 ? 11 : currentIndex + 1;
                    } else {
                        goToIndex = currentIndex <= 11 ? 15 : currentIndex - 1;
                    }
                    setTimeout(function() { carousel.to(goToIndex); }, 10);
                }
            } else if (isDesktop) {
                if (!isSlideVisibleOnDesktop(e.to)) {
                    e.preventDefault();
                    const currentIndex = getCurrentSlideIndex();
                    let goToIndex;
                    if (e.direction === 'left' || e.direction === 'next') {
                        goToIndex = currentIndex === 0 ? 3 : (currentIndex === 3 ? 6 : 0);
                    } else {
                        goToIndex = currentIndex === 0 ? 6 : (currentIndex === 3 ? 0 : 3);
                    }
                    setTimeout(function() { carousel.to(goToIndex); }, 10);
                }
            }
        });
        
        // Function to hide/show carousel items on desktop/tablet/mobile
        function updateCarouselVisibility() {
            const w = window.innerWidth;
            const isDesktop = w > 1024;
            const isTabletView = isTablet();
            const allSlides = Array.from(reviewsCarousel.querySelectorAll('.carousel-item'));
            
            if (isTabletView) {
                allSlides.forEach((slide, index) => {
                    if (slide.classList.contains('tablet-slide')) {
                        if (slide.classList.contains('active')) {
                            slide.style.display = 'block';
                            slide.style.opacity = '1';
                            slide.style.visibility = 'visible';
                        } else {
                            slide.style.display = 'none';
                            slide.style.opacity = '0';
                            slide.style.visibility = 'hidden';
                        }
                    } else {
                        slide.style.display = 'none';
                        slide.style.opacity = '0';
                        slide.style.visibility = 'hidden';
                    }
                });
            } else if (isDesktop) {
                allSlides.forEach((slide, index) => {
                    if (slide.classList.contains('active')) {
                        slide.style.display = 'block';
                        slide.style.opacity = '1';
                        slide.style.visibility = 'visible';
                    } else {
                        if (slide.classList.contains('d-md-none') || slide.classList.contains('tablet-slide')) {
                            slide.style.display = 'none';
                            slide.style.opacity = '0';
                            slide.style.visibility = 'hidden';
                        } else {
                            slide.style.display = 'none';
                            slide.style.opacity = '0';
                            slide.style.visibility = 'hidden';
                        }
                    }
                });
            } else {
                // Mobile: let Bootstrap handle visibility normally
                allSlides.forEach((slide) => {
                    slide.style.display = '';
                    slide.style.opacity = '';
                    slide.style.visibility = '';
                });
            }
        }
        
        // Handle carousel slide events AFTER slide completes – sync indicators to active slide
        reviewsCarousel.addEventListener('slid.bs.carousel', function (e) {
            updateCarouselVisibility();
            // Defer so we run after Bootstrap’s indicator update and override it for our breakpoints
            var toIndex = e.to;
            updateCarouselVisibility();
            updateIndicators(toIndex);
            requestAnimationFrame(function () {
                updateIndicators(getCurrentSlideIndex());
                setTimeout(function () {
                    updateIndicators(getCurrentSlideIndex());
                }, 80);
            });
        });
        
        // Also update visibility when slide starts (before transition)
        reviewsCarousel.addEventListener('slide.bs.carousel', function (e) {
            const isDesktop = window.innerWidth > 1024;
            const isTabletView = isTablet();
            if (isTabletView) {
                const allSlides = Array.from(reviewsCarousel.querySelectorAll('.carousel-item'));
                allSlides.forEach((slide, index) => {
                    if (slide.classList.contains('tablet-slide') && index === e.to) {
                        slide.style.display = 'block';
                        slide.style.opacity = '1';
                        slide.style.visibility = 'visible';
                    } else if (slide.classList.contains('tablet-slide')) {
                        slide.style.display = 'none';
                        slide.style.opacity = '0';
                        slide.style.visibility = 'hidden';
                    }
                });
            } else if (isDesktop) {
                // Immediately hide current slide and show target slide
                const allSlides = Array.from(reviewsCarousel.querySelectorAll('.carousel-item'));
                allSlides.forEach((slide, index) => {
                    if (index === e.to) {
                        slide.style.display = 'block';
                        slide.style.opacity = '1';
                        slide.style.visibility = 'visible';
                    } else {
                        if (!slide.classList.contains('d-md-none')) {
                            slide.style.display = 'none';
                            slide.style.opacity = '0';
                            slide.style.visibility = 'hidden';
                        }
                    }
                });
            }
        });
        
        // Handle window resize to update indicators and fix slide position
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                const w = window.innerWidth;
                const isTabletView = isTablet();
                const isDesktop = w > 1024;
                const currentIndex = getCurrentSlideIndex();
                
                if (isTabletView) {
                    if (!isSlideVisibleOnTablet(currentIndex)) {
                        carousel.to(11);
                    }
                    updateCarouselVisibility();
                    updateIndicators(getCurrentSlideIndex());
                } else if (isDesktop) {
                    if (!isSlideVisibleOnDesktop(currentIndex)) {
                        carousel.to(currentIndex < 3 ? 0 : (currentIndex < 6 ? 3 : 6));
                    }
                    updateCarouselVisibility();
                    updateIndicators(getCurrentSlideIndex());
                } else {
                    updateCarouselVisibility();
                    updateIndicators(currentIndex);
                }
            }, 250);
        });
        
        // Initialize indicators and visibility on load
        if (isTablet()) {
            carousel.to(11);
        }
        updateIndicators(getCurrentSlideIndex());
        updateCarouselVisibility();
        
        // Handle indicator clicks - only process clicks on visible indicators
        const indicators = reviewsCarousel.querySelectorAll('.carousel-indicators button');
        indicators.forEach(function (indicator) {
            indicator.addEventListener('click', function (e) {
                // Skip if indicator is hidden (display:none elements shouldn't receive clicks, but be safe)
                if (window.getComputedStyle(this).display === 'none') return;
                e.preventDefault();
                e.stopPropagation();
                var slideTo = parseInt(this.getAttribute('data-bs-slide-to'), 10);
                if (isNaN(slideTo) || slideTo < 0) return;
                updateIndicators(slideTo);
                carousel.to(slideTo);
            }, true);
        });
        
        // Handle carousel control buttons (prev/next) to skip hidden slides on desktop
        const prevButton = reviewsCarousel.querySelector('.carousel-control-prev');
        const nextButton = reviewsCarousel.querySelector('.carousel-control-next');
        
        if (prevButton) {
            prevButton.addEventListener('click', function(e) {
                var isDesktop = window.innerWidth > 1024;
                var isTabletView = isTablet();
                var currentIndex = getCurrentSlideIndex();
                var targetIndex;
                if (isTabletView) {
                    e.preventDefault();
                    e.stopPropagation();
                    targetIndex = currentIndex <= 11 ? 15 : currentIndex - 1;
                    updateIndicators(targetIndex);
                    carousel.to(targetIndex);
                } else if (isDesktop) {
                    e.preventDefault();
                    e.stopPropagation();
                    targetIndex = currentIndex === 0 ? 6 : (currentIndex === 3 ? 0 : 3);
                    updateIndicators(targetIndex);
                    carousel.to(targetIndex);
                } else {
                    targetIndex = currentIndex <= 0 ? 8 : currentIndex - 1;
                    updateIndicators(targetIndex);
                }
            });
        }
        
        if (nextButton) {
            nextButton.addEventListener('click', function(e) {
                var isDesktop = window.innerWidth > 1024;
                var isTabletView = isTablet();
                var currentIndex = getCurrentSlideIndex();
                var targetIndex;
                if (isTabletView) {
                    e.preventDefault();
                    e.stopPropagation();
                    targetIndex = currentIndex >= 15 ? 11 : currentIndex + 1;
                    updateIndicators(targetIndex);
                    carousel.to(targetIndex);
                } else if (isDesktop) {
                    e.preventDefault();
                    e.stopPropagation();
                    targetIndex = currentIndex === 0 ? 3 : (currentIndex === 3 ? 6 : 0);
                    updateIndicators(targetIndex);
                    carousel.to(targetIndex);
                } else {
                    targetIndex = currentIndex >= 8 ? 0 : currentIndex + 1;
                    updateIndicators(targetIndex);
                }
            });
        }
    }
});

// Initialize scroll animations on page load
document.addEventListener('DOMContentLoaded', function () {
    // Sections - fade in from bottom (excluding hero section, blog section, and blog detail pages)
    const sections = document.querySelectorAll('section:not(.hero-section):not(.blog-section):not(.blog-details-page-section):not(.courses-listing-section)');
    sections.forEach((section, index) => {
        // Double check - don't apply to blog detail pages or course pages
        if (section.closest('.blog-details-page-section') || section.classList.contains('blog-details-page-section') ||
            section.closest('.courses-listing-section') || section.classList.contains('courses-listing-section')) {
            return;
        }
        section.classList.add('scroll-fade-in');
        if (index > 0) {
            section.classList.add(`delay-${(index % 4) + 1}`);
        }
        scrollObserver.observe(section);
    });

    // Feature cards - fade in
    const featureCards = document.querySelectorAll('.feature-icon, .feature-text');
    featureCards.forEach((card, index) => {
        card.classList.add('scroll-fade-in');
        card.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(card);
    });

    // Review cards - slide up
    const reviewCards = document.querySelectorAll('.review-card');
    reviewCards.forEach((card, index) => {
        card.classList.add('scroll-fade-in');
        card.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(card);
    });

    // Service cards - scale in
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.classList.add('scroll-scale-in');
        card.classList.add(`delay-${(index % 2) + 1}`);
        scrollObserver.observe(card);
    });

    // Course episode cards - fade in (DISABLED - course cards should be visible immediately)
    // Removed scroll-fade-in animation for course listing page
    // const episodeCards = document.querySelectorAll('.course-episode-card');
    // episodeCards.forEach((card, index) => {
    //     card.classList.add('scroll-fade-in');
    //     card.classList.add(`delay-${(index % 3) + 1}`);
    //     scrollObserver.observe(card);
    // });

    // Blog cards - fade in (DISABLED - blog cards should be visible immediately)
    // Removed scroll-fade-in animation for blog listing page
    // const blogCards = document.querySelectorAll('.blog-section .card');
    // blogCards.forEach((card, index) => {
    //     card.classList.add('scroll-fade-in');
    //     card.classList.add(`delay-${(index % 3) + 1}`);
    //     scrollObserver.observe(card);
    // });

    // Podcast cards - fade in
    const podcastCards = document.querySelectorAll('.podcast-section .card');
    podcastCards.forEach((card, index) => {
        card.classList.add('scroll-fade-in');
        card.classList.add(`delay-${(index % 2) + 1}`);
        scrollObserver.observe(card);
    });

    // Images - scale in (excluding blog section images, blog detail page images, and course section images)
    const images = document.querySelectorAll('img:not(.hero-decorative-img):not(.bright-layer-top)');
    images.forEach((img, index) => {
        // Skip images inside blog section, blog detail pages, or course section
        if (img.closest('.blog-section') || img.closest('.blog-details-page-section') || img.closest('.courses-listing-section')) {
            return;
        }
        if (img.offsetParent !== null) { // Only visible images
            img.classList.add('scroll-scale-in');
            img.classList.add(`delay-${(index % 4) + 1}`);
            scrollObserver.observe(img);
        }
    });

    // Headings - slide up (excluding blog section headings, blog detail page headings, and course section headings)
    const headings = document.querySelectorAll('h1, h2, h3');
    headings.forEach((heading, index) => {
        // Skip headings inside blog section, blog detail pages, or course section
        if (heading.closest('.blog-section') || heading.closest('.blog-details-page-section') || heading.closest('.courses-listing-section')) {
            return;
        }
        heading.classList.add('scroll-fade-in');
        heading.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(heading);
    });

    // Buttons - fade in (excluding blog section buttons, blog detail page buttons, and course section buttons)
    const buttons = document.querySelectorAll('.btn:not(.hero-watch-video-btn):not(.hero-hire-btn)');
    buttons.forEach((btn, index) => {
        // Skip buttons inside blog section, blog detail pages, or course section
        if (btn.closest('.blog-section') || btn.closest('.blog-details-page-section') || btn.closest('.courses-listing-section')) {
            return;
        }
        btn.classList.add('scroll-fade-in');
        btn.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(btn);
    });

    // Book cover - special animation
    const bookCover = document.querySelector('.book-cover');
    if (bookCover) {
        bookCover.classList.add('scroll-scale-in');
        scrollObserver.observe(bookCover);
    }

    // Video wrapper - fade in (excluding course video wrapper)
    const videoWrappers = document.querySelectorAll('.video-wrapper');
    videoWrappers.forEach((wrapper, index) => {
        // Skip course video wrapper - it should be visible immediately
        if (wrapper.closest('.courses-listing-section') || wrapper.classList.contains('course-video-wrapper')) {
            return;
        }
        wrapper.classList.add('scroll-fade-in');
        wrapper.classList.add(`delay-${(index % 2) + 1}`);
        scrollObserver.observe(wrapper);
    });

    // Course CTA box - scale in
    const ctaBox = document.querySelector('.course-cta-box');
    if (ctaBox) {
        ctaBox.classList.add('scroll-scale-in');
        ctaBox.classList.add('delay-2');
        scrollObserver.observe(ctaBox);
    }
    
    // CRITICAL: Prevent scrollObserver from affecting blog detail pages
    // Unobserve all elements inside blog detail pages and remove animation classes
    const blogDetailPage = document.querySelector('.blog-details-page-section');
    if (blogDetailPage) {
        // Remove all scroll animation classes from blog detail page
        const allDetailElements = blogDetailPage.querySelectorAll('*');
        allDetailElements.forEach(el => {
            el.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
            el.classList.add('animated'); // Force animated state
            scrollObserver.unobserve(el);
        });
        
        // Also remove from the section itself
        blogDetailPage.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
        blogDetailPage.classList.add('animated');
        scrollObserver.unobserve(blogDetailPage);
        
        // Force visibility immediately
        blogDetailPage.style.setProperty('opacity', '1', 'important');
        blogDetailPage.style.setProperty('visibility', 'visible', 'important');
        allDetailElements.forEach(el => {
            el.style.setProperty('opacity', '1', 'important');
            el.style.setProperty('visibility', 'visible', 'important');
        });
    }
    
    // CRITICAL: Prevent scrollObserver from affecting course listing pages
    // Unobserve all elements inside course listing section and remove animation classes
    const courseListingSection = document.querySelector('.courses-listing-section');
    if (courseListingSection) {
        // Remove all scroll animation classes from course listing section
        const allCourseElements = courseListingSection.querySelectorAll('*');
        allCourseElements.forEach(el => {
            el.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
            el.classList.add('animated'); // Force animated state
            scrollObserver.unobserve(el);
        });
        
        // Also remove from the section itself
        courseListingSection.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
        courseListingSection.classList.add('animated');
        scrollObserver.unobserve(courseListingSection);
        
        // Force visibility immediately
        courseListingSection.style.setProperty('opacity', '1', 'important');
        courseListingSection.style.setProperty('visibility', 'visible', 'important');
        allCourseElements.forEach(el => {
            el.style.setProperty('opacity', '1', 'important');
            el.style.setProperty('visibility', 'visible', 'important');
        });
    }
});

// Hero video transition after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    const heroVideo = document.getElementById('heroVideo');
    const heroSection = document.querySelector('.hero-section');
    
    if (heroVideo && heroSection) {
        console.log('Hero video element found');
        
        // Initially hide video
        heroVideo.style.opacity = '0';
        heroVideo.pause();
        
        // Wait for video to load
        heroVideo.addEventListener('loadeddata', function() {
            console.log('Video loaded successfully');
        });
        
        heroVideo.addEventListener('error', function(e) {
            console.error('Video loading error:', e);
        });
        
        // After 5 seconds, show video and hide background image
        setTimeout(function() {
            console.log('Showing video after 5 seconds');
            
            // Add class to hide background image
            heroSection.classList.add('video-active');
            
            // Show and play video
            heroVideo.classList.add('show');
            heroVideo.style.opacity = '1';
            
            // Try to play the video
            const playPromise = heroVideo.play();
            if (playPromise !== undefined) {
                playPromise.then(function() {
                    console.log('Video playing successfully');
                }).catch(function(error) {
                    console.log('Video autoplay prevented:', error);
                    // If autoplay fails, try playing on user interaction
                    document.addEventListener('click', function playVideo() {
                        heroVideo.play();
                        document.removeEventListener('click', playVideo);
                    }, { once: true });
                });
            }
        }, 5000); // 5 seconds
    } else {
        console.error('Hero video or section not found');
    }
});

// Set active navigation link based on current page
document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const currentPage = currentPath.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    // Remove all active classes first
    navLinks.forEach(link => {
        link.classList.remove('active');
    });
    
    // Set active class based on current page
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && !href.startsWith('#')) {
            // Extract filename from href
            const linkPage = href.split('/').pop();
            
            // Check if the link matches the current page
            if (linkPage === currentPage || 
                (currentPage === '' && linkPage === 'index.html') ||
                (currentPage === 'index.html' && linkPage === 'index.html') ||
                (currentPage.includes('course-details') && linkPage === 'courses.html') ||
                (currentPage.includes('podcast-details') && linkPage === 'podcast.html') ||
                (currentPage.includes('blog-details') && linkPage === 'blogs.html') ||
                (currentPage.includes('preview-book') && linkPage === 'about-book.html')) {
                link.classList.add('active');
            }
        }
    });
});

// Add active state to navigation links on scroll (for index.html with anchor links)
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    // Only run this for index.html or pages with anchor sections
    if (window.location.pathname.includes('index.html') || window.location.pathname === '/' || sections.length > 0) {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            // Only update anchor links, not page links
            if (href && href.startsWith('#')) {
                link.classList.remove('active');
                if (href === `#${current}`) {
                    link.classList.add('active');
                }
            }
        });
    }
});

// Contact section click handler to open modal
document.addEventListener('DOMContentLoaded', function() {
    const contactSection = document.getElementById('contact');
    const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
    
    if (contactSection) {
        contactSection.addEventListener('click', function(e) {
            // Don't open modal if clicking on buttons or links inside the section
            if (!e.target.closest('a') && !e.target.closest('.btn')) {
                contactModal.show();
            }
        });
    }
    
    // Handle form submission
    const contactForm = document.querySelector('.contact-modal-form');
    const successModal = new bootstrap.Modal(document.getElementById('successModal'));
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Hide contact modal
            contactModal.hide();
            // Reset form
            contactForm.reset();
            // Show success modal after a short delay
            setTimeout(function() {
                successModal.show();
            }, 300);
        });
    }
});

// Hero video transition after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    const heroVideo = document.getElementById('heroVideo');
    const heroSection = document.querySelector('.hero-section');
    
    if (heroVideo && heroSection) {
        console.log('Hero video element found');
        
        // Initially hide video
        heroVideo.style.opacity = '0';
        heroVideo.pause();
        
        // Wait for video to load
        heroVideo.addEventListener('loadeddata', function() {
            console.log('Video loaded successfully');
        });
        
        heroVideo.addEventListener('error', function(e) {
            console.error('Video loading error:', e);
        });
        
        // After 5 seconds, show video and hide background image
        setTimeout(function() {
            console.log('Showing video after 5 seconds');
            
            // Add class to hide background image
            heroSection.classList.add('video-active');
            
            // Show and play video
            heroVideo.classList.add('show');
            heroVideo.style.opacity = '1';
            
            // Try to play the video
            const playPromise = heroVideo.play();
            if (playPromise !== undefined) {
                playPromise.then(function() {
                    console.log('Video playing successfully');
                }).catch(function(error) {
                    console.log('Video autoplay prevented:', error);
                    // If autoplay fails, try playing on user interaction
                    document.addEventListener('click', function playVideo() {
                        heroVideo.play();
                        document.removeEventListener('click', playVideo);
                    }, { once: true });
                });
            }
        }, 5000); // 5 seconds
    } else {
        console.error('Hero video or section not found');
    }
});

// Video Modal Handler
document.addEventListener('DOMContentLoaded', function() {
    const videoModal = document.getElementById('videoModal');
    const videoIframe = document.getElementById('videoIframe');
    const videoUrl = 'https://www.youtube.com/embed/9BJm5MzxBQY?autoplay=1';
    
    if (videoModal && videoIframe) {
        // Load video when modal is shown
        videoModal.addEventListener('show.bs.modal', function () {
            videoIframe.src = videoUrl;
        });
        
        // Stop video when modal is closed
        videoModal.addEventListener('hide.bs.modal', function () {
            videoIframe.src = '';
        });
    }

    // Fox News Video Modal Handler
    const foxNewsVideoModal = document.getElementById('foxNewsVideoModal');
    const foxNewsVideoIframe = document.getElementById('foxNewsVideoIframe');
    const foxNewsVideoUrl = 'https://www.youtube.com/embed/MqaTF_E2_9s?autoplay=1';
    
    if (foxNewsVideoModal && foxNewsVideoIframe) {
        // Load video when modal is shown
        foxNewsVideoModal.addEventListener('show.bs.modal', function () {
            foxNewsVideoIframe.src = foxNewsVideoUrl;
        });
        
        // Stop video when modal is closed
        foxNewsVideoModal.addEventListener('hide.bs.modal', function () {
            foxNewsVideoIframe.src = '';
        });
    }

    // Stand Up To Bullying Video Modal Handler
    const bullyingVideoModal = document.getElementById('bullyingVideoModal');
    const bullyingVideoIframe = document.getElementById('bullyingVideoIframe');
    const bullyingVideoUrl = 'https://www.youtube.com/embed/X0oGv7ebSkw?autoplay=1';
    
    if (bullyingVideoModal && bullyingVideoIframe) {
        // Load video when modal is shown
        bullyingVideoModal.addEventListener('show.bs.modal', function () {
            bullyingVideoIframe.src = bullyingVideoUrl;
        });
        
        // Stop video when modal is closed
        bullyingVideoModal.addEventListener('hide.bs.modal', function () {
            bullyingVideoIframe.src = '';
        });
    }

    // Hero Video Modal Handler
    const heroVideoModal = document.getElementById('heroVideoModal');
    const heroVideoIframe = document.getElementById('heroVideoIframe');
    const heroVideoUrl = 'https://www.veed.io/embed/9eb82739-66fd-425f-9415-9e86fd897d48?watermark=0&color=&sharing=0&title=0';
    
    if (heroVideoModal && heroVideoIframe) {
        // Load video when modal is shown
        heroVideoModal.addEventListener('show.bs.modal', function () {
            heroVideoIframe.src = heroVideoUrl;
        });
        
        // Stop video when modal is closed
        heroVideoModal.addEventListener('hide.bs.modal', function () {
            heroVideoIframe.src = '';
        });
    }
});

// Course Video Inline Handler (Replaces thumbnail with video on click)
document.addEventListener('DOMContentLoaded', function() {
    const courseVideoThumbnail = document.getElementById('courseVideoThumbnail');
    const courseVideoIframeWrapper = document.getElementById('courseVideoIframeWrapper');
    const courseVideoIframe = document.getElementById('courseVideoIframe');
    const courseVideoPlayOverlay = document.querySelector('.course-video-play-overlay');
    const courseVideoUrl = 'https://www.veed.io/embed/08363b7e-a955-45c0-accf-5469d90516f5?watermark=0&color=&sharing=0&title=0&autoplay=1';
    
    function playCourseVideo(e) {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        if (!courseVideoThumbnail || !courseVideoIframeWrapper || !courseVideoIframe) {
            return;
        }
        
        // Hide thumbnail
        courseVideoThumbnail.style.display = 'none';
        
        // Show iframe wrapper
        courseVideoIframeWrapper.style.display = 'block';
        
        // Set autoplay permissions
        courseVideoIframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
        
        // Load video with autoplay
        courseVideoIframe.src = courseVideoUrl;
    }
    
    // Handle thumbnail click
    if (courseVideoThumbnail) {
        courseVideoThumbnail.addEventListener('click', playCourseVideo);
    }
    
    // Handle play icon overlay click (in case it's separate)
    if (courseVideoPlayOverlay) {
        courseVideoPlayOverlay.addEventListener('click', playCourseVideo);
    }
    
    // Keep modal handler for other potential uses (if modal exists)
    const courseVideoModal = document.getElementById('courseVideoModal');
    if (courseVideoModal && courseVideoIframe) {
        // Load video when modal is shown (if modal is used elsewhere)
        courseVideoModal.addEventListener('show.bs.modal', function () {
            // Only set src if iframe is in modal (check if wrapper is hidden)
            if (courseVideoIframeWrapper && courseVideoIframeWrapper.style.display === 'none') {
                courseVideoIframe.src = courseVideoUrl;
            }
        });
        
        // Stop video when modal is closed
        courseVideoModal.addEventListener('hide.bs.modal', function () {
            // Only clear src if iframe is in modal (check if wrapper is hidden)
            if (courseVideoIframeWrapper && courseVideoIframeWrapper.style.display === 'none') {
                courseVideoIframe.src = '';
            }
        });
    }
});

console.log('🚀 Todd Patkin Website Loaded with Professional Animations');
