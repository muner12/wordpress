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
            // On desktop, only slides 0 and 3 are visible
            return slideIndex === 0 || slideIndex === 3;
        }
        
        // Function to update indicators based on screen size
        function updateIndicators(activeIndex) {
            const isDesktop = window.innerWidth >= 768;
            const desktopIndicators = reviewsCarousel.querySelectorAll('.carousel-indicators .d-none.d-md-inline-block');
            const mobileIndicators = reviewsCarousel.querySelectorAll('.carousel-indicators .d-md-none');
            
            if (isDesktop) {
                // Desktop: 2 indicators for 2 slides (slide 0 and slide 3)
                desktopIndicators.forEach((indicator, index) => {
                    if (index === 0 && activeIndex === 0) {
                        // First slide (cards 1-3)
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    } else if (index === 1 && activeIndex === 3) {
                        // Second slide (cards 4-6)
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    } else {
                        indicator.classList.remove('active');
                        indicator.removeAttribute('aria-current');
                    }
                });
                
                // Hide mobile indicators on desktop
                mobileIndicators.forEach(indicator => {
                    indicator.classList.remove('active');
                    indicator.removeAttribute('aria-current');
                });
            } else {
                // Mobile: 6 indicators for 6 individual slides
                mobileIndicators.forEach((indicator, index) => {
                    if (index === activeIndex) {
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    } else {
                        indicator.classList.remove('active');
                        indicator.removeAttribute('aria-current');
                    }
                });
                
                // Hide desktop indicators on mobile
                desktopIndicators.forEach(indicator => {
                    indicator.classList.remove('active');
                    indicator.removeAttribute('aria-current');
                });
            }
        }
        
        // Intercept slide event BEFORE it happens to control navigation on desktop
        reviewsCarousel.addEventListener('slide.bs.carousel', function (e) {
            const isDesktop = window.innerWidth >= 768;
            
            if (isDesktop) {
                // On desktop, only allow navigation to visible slides (0 and 3)
                if (!isSlideVisibleOnDesktop(e.to)) {
                    e.preventDefault();
                    
                    // Determine correct slide based on direction
                    const currentIndex = getCurrentSlideIndex();
                    let targetIndex;
                    
                    if (e.direction === 'left' || e.direction === 'next') {
                        // Going forward
                        targetIndex = currentIndex === 0 ? 3 : 0;
                    } else {
                        // Going backward
                        targetIndex = currentIndex === 3 ? 0 : 3;
                    }
                    
                    // Manually navigate to the correct slide
                    setTimeout(function() {
                        carousel.to(targetIndex);
                    }, 10);
                }
            }
        });
        
        // Function to hide/show carousel items on desktop
        function updateCarouselVisibility() {
            const isDesktop = window.innerWidth >= 768;
            const allSlides = Array.from(reviewsCarousel.querySelectorAll('.carousel-item'));
            
            if (isDesktop) {
                allSlides.forEach((slide, index) => {
                    if (slide.classList.contains('active')) {
                        slide.style.display = 'block';
                        slide.style.opacity = '1';
                        slide.style.visibility = 'visible';
                    } else {
                        // Hide mobile-only slides completely
                        if (slide.classList.contains('d-md-none')) {
                            slide.style.display = 'none';
                            slide.style.opacity = '0';
                            slide.style.visibility = 'hidden';
                        } else {
                            // Hide desktop slides that are not active
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
        
        // Handle carousel slide events AFTER slide completes
        reviewsCarousel.addEventListener('slid.bs.carousel', function (e) {
            updateIndicators(e.to);
            updateCarouselVisibility();
        });
        
        // Also update visibility when slide starts (before transition)
        reviewsCarousel.addEventListener('slide.bs.carousel', function (e) {
            const isDesktop = window.innerWidth >= 768;
            if (isDesktop) {
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
                updateCarouselVisibility();
                const currentIndex = getCurrentSlideIndex();
                const isDesktop = window.innerWidth >= 768;
                
                // If on desktop and currently on a hidden slide, move to nearest visible slide
                if (isDesktop && !isSlideVisibleOnDesktop(currentIndex)) {
                    const targetIndex = currentIndex < 3 ? 0 : 3;
                    carousel.to(targetIndex);
                } else {
                    updateIndicators(currentIndex);
                }
            }, 250);
        });
        
        // Initialize indicators and visibility on load
        updateIndicators(0);
        updateCarouselVisibility();
        
        // Handle indicator clicks
        const indicators = reviewsCarousel.querySelectorAll('.carousel-indicators button');
        indicators.forEach((indicator) => {
            indicator.addEventListener('click', function(e) {
                const slideTo = parseInt(this.getAttribute('data-bs-slide-to'));
                const isDesktop = window.innerWidth >= 768;
                
                // On desktop, only allow clicking desktop indicators
                if (isDesktop && this.classList.contains('d-md-none')) {
                    e.preventDefault();
                    return;
                }
                
                // On mobile, only allow clicking mobile indicators
                if (!isDesktop && this.classList.contains('d-none')) {
                    e.preventDefault();
                    return;
                }
                
                carousel.to(slideTo);
            });
        });
        
        // Handle carousel control buttons (prev/next) to skip hidden slides on desktop
        const prevButton = reviewsCarousel.querySelector('.carousel-control-prev');
        const nextButton = reviewsCarousel.querySelector('.carousel-control-next');
        
        if (prevButton) {
            prevButton.addEventListener('click', function(e) {
                const isDesktop = window.innerWidth >= 768;
                const currentIndex = getCurrentSlideIndex();
                
                if (isDesktop) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Desktop: only slides 0 and 3 are visible
                    const targetIndex = currentIndex === 3 ? 0 : (currentIndex === 0 ? 3 : 0);
                    carousel.to(targetIndex);
                }
                // On mobile, let Bootstrap handle it normally
            });
        }
        
        if (nextButton) {
            nextButton.addEventListener('click', function(e) {
                const isDesktop = window.innerWidth >= 768;
                const currentIndex = getCurrentSlideIndex();
                
                if (isDesktop) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Desktop: only slides 0 and 3 are visible
                    const targetIndex = currentIndex === 0 ? 3 : (currentIndex === 3 ? 0 : 3);
                    carousel.to(targetIndex);
                }
                // On mobile, let Bootstrap handle it normally
            });
        }
    }
});

// Initialize scroll animations on page load
document.addEventListener('DOMContentLoaded', function () {
    // Sections - fade in from bottom (excluding hero section)
    const sections = document.querySelectorAll('section:not(.hero-section)');
    sections.forEach((section, index) => {
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

    // Course episode cards - fade in
    const episodeCards = document.querySelectorAll('.course-episode-card');
    episodeCards.forEach((card, index) => {
        card.classList.add('scroll-fade-in');
        card.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(card);
    });

    // Blog cards - fade in
    const blogCards = document.querySelectorAll('.blog-section .card');
    blogCards.forEach((card, index) => {
        card.classList.add('scroll-fade-in');
        card.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(card);
    });

    // Podcast cards - fade in
    const podcastCards = document.querySelectorAll('.podcast-section .card');
    podcastCards.forEach((card, index) => {
        card.classList.add('scroll-fade-in');
        card.classList.add(`delay-${(index % 2) + 1}`);
        scrollObserver.observe(card);
    });

    // Images - scale in
    const images = document.querySelectorAll('img:not(.hero-decorative-img):not(.bright-layer-top)');
    images.forEach((img, index) => {
        if (img.offsetParent !== null) { // Only visible images
            img.classList.add('scroll-scale-in');
            img.classList.add(`delay-${(index % 4) + 1}`);
            scrollObserver.observe(img);
        }
    });

    // Headings - slide up
    const headings = document.querySelectorAll('h1, h2, h3');
    headings.forEach((heading, index) => {
        heading.classList.add('scroll-fade-in');
        heading.classList.add(`delay-${(index % 3) + 1}`);
        scrollObserver.observe(heading);
    });

    // Buttons - fade in
    const buttons = document.querySelectorAll('.btn:not(.hero-watch-video-btn):not(.hero-hire-btn)');
    buttons.forEach((btn, index) => {
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

    // Video wrapper - fade in
    const videoWrappers = document.querySelectorAll('.video-wrapper, .course-video-wrapper');
    videoWrappers.forEach((wrapper, index) => {
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
});

// Course Video Inline Handler (Replaces thumbnail with video on click)
document.addEventListener('DOMContentLoaded', function() {
    const courseVideoThumbnail = document.getElementById('courseVideoThumbnail');
    const courseVideoIframeWrapper = document.getElementById('courseVideoIframeWrapper');
    const courseVideoIframe = document.getElementById('courseVideoIframe');
    const courseVideoUrl = 'https://www.youtube.com/embed/yCIQIpx_bx0?autoplay=1';
    
    if (courseVideoThumbnail && courseVideoIframeWrapper && courseVideoIframe) {
        // Handle thumbnail click
        courseVideoThumbnail.addEventListener('click', function() {
            // Hide thumbnail
            courseVideoThumbnail.style.display = 'none';
            
            // Show iframe wrapper
            courseVideoIframeWrapper.style.display = 'block';
            
            // Load video
            courseVideoIframe.src = courseVideoUrl;
        });
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
