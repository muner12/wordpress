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

// Course Video Modal Handler
document.addEventListener('DOMContentLoaded', function() {
    const courseVideoModal = document.getElementById('courseVideoModal');
    const courseVideoIframe = document.getElementById('courseVideoIframe');
    const courseVideoUrl = 'https://www.youtube.com/embed/yCIQIpx_bx0?autoplay=1';
    
    if (courseVideoModal && courseVideoIframe) {
        // Load video when modal is shown
        courseVideoModal.addEventListener('show.bs.modal', function () {
            courseVideoIframe.src = courseVideoUrl;
        });
        
        // Stop video when modal is closed
        courseVideoModal.addEventListener('hide.bs.modal', function () {
            courseVideoIframe.src = '';
        });
    }
});

console.log('🚀 Todd Patkin Website Loaded with Professional Animations');
