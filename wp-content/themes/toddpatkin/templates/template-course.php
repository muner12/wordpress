<?php

/**
 * Template Name: Course
 */
get_header();
?>
<style>
    /* Override course banner section for video iframe */
    .course-banner-section {
        height: auto !important;
        overflow: visible !important;
        min-height: auto !important;
    }
    
    .course-video-wrapper {
        overflow: hidden !important;
        width: 100% !important;
        max-width: 1200px !important;
        margin: 0 auto !important;
        line-height: 0 !important;
        height: auto !important;
        min-height: 500px !important;
        position: relative !important;
    }
    
    /* Ensure thumbnail and iframe have same width as container */
    .course-video-wrapper .course-video-thumbnail,
    .course-video-wrapper iframe {
        width: 100% !important;
        max-width: 100% !important;
        display: block !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    /* Thumbnail specific styles */
    .course-video-wrapper .course-video-thumbnail {
        height: 500px !important;
        max-height: 500px !important;
        object-fit: contain !important;
        object-position: center !important;
        background-color: #000 !important;
    }
    
    /* Iframe specific styles */
    .course-video-wrapper iframe {
        height: 500px !important;
        max-height: 500px !important;
        border: none !important;
    }
    
    /* Hide iframe completely when it has no src or is empty - takes no space */
    #courseVideoIframe:not([src]),
    #courseVideoIframe[src=""] {
        display: none !important;
        visibility: hidden !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        opacity: 0 !important;
        pointer-events: none !important;
        height: 0 !important;
        max-height: 0 !important;
        width: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    /* When iframe has src and is visible - JavaScript will control via setProperty */
    /* CSS rule removed to allow JavaScript to fully control visibility */
    
    @media (max-width: 768px) {
        .course-video-wrapper {
            min-height: 400px !important;
        }
        .course-video-wrapper iframe,
        .course-video-wrapper .course-video-thumbnail {
            height: 400px !important;
            max-height: 400px !important;
        }
    }
    
    @media (max-width: 576px) {
        .course-video-wrapper {
            min-height: 300px !important;
        }
        .course-video-wrapper iframe,
        .course-video-wrapper .course-video-thumbnail {
            height: 300px !important;
            max-height: 300px !important;
        }
    }
    
    /* Video wrapper positioning */
    .course-video-wrapper {
        position: relative !important;
    }
    
    /* Container maintains consistent width for both thumbnail and iframe */
    .course-video-wrapper {
        min-height: 500px !important;
    }
    
    @media (max-width: 768px) {
        .course-video-wrapper {
            min-height: 400px !important;
        }
    }
    
    @media (max-width: 576px) {
        .course-video-wrapper {
            min-height: 300px !important;
        }
    }
    
    /* Force course cards to be visible immediately - override ALL animation classes */
    .courses-listing-section,
    .courses-listing-section *,
    .courses-listing-grid,
    .courses-listing-grid *,
    .course-episode-card,
    .course-episode-card *,
    .course-episode-image-wrapper,
    .course-episode-content,
    .course-episode-title,
    .course-episode-description,
    .course-episode-button {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        animation: none !important;
        transition: none !important;
    }
    
    /* Override all scroll animation classes for course section */
    .courses-listing-section .scroll-fade-in,
    .courses-listing-section .scroll-scale-in,
    .courses-listing-section .scroll-slide-left,
    .courses-listing-section .scroll-slide-right,
    .course-episode-card.scroll-fade-in,
    .course-episode-card.scroll-scale-in,
    .course-episode-card.scroll-slide-left,
    .course-episode-card.scroll-slide-right {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        animation: none !important;
        transition: none !important;
    }
    
    /* Ensure row maintains Bootstrap flex display */
    .courses-listing-section .row {
        display: flex !important;
    }
</style>

<script>
// Force course cards visibility immediately - run before DOMContentLoaded
(function() {
    function forceCourseCardVisibility() {
        const courseCards = document.querySelectorAll('.course-episode-card');
        courseCards.forEach(card => {
            card.style.setProperty('opacity', '1', 'important');
            card.style.setProperty('visibility', 'visible', 'important');
            card.style.setProperty('transform', 'none', 'important');
            card.style.setProperty('animation', 'none', 'important');
            card.style.setProperty('transition', 'none', 'important');
            card.classList.remove('scroll-fade-in');
            card.classList.remove('scroll-scale-in');
            card.classList.remove('scroll-slide-left');
            card.classList.remove('scroll-slide-right');
            card.classList.remove('animated');
            // Also force children
            card.querySelectorAll('*').forEach(child => {
                child.style.setProperty('opacity', '1', 'important');
                child.style.setProperty('visibility', 'visible', 'important');
                child.style.setProperty('transform', 'none', 'important');
                child.style.setProperty('animation', 'none', 'important');
                child.style.setProperty('transition', 'none', 'important');
            });
        });
    }
    
    // Run immediately
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', forceCourseCardVisibility);
    } else {
        forceCourseCardVisibility();
    }
    
    // Run multiple times to catch late-loading content
    setTimeout(forceCourseCardVisibility, 0);
    setTimeout(forceCourseCardVisibility, 50);
    setTimeout(forceCourseCardVisibility, 100);
    setTimeout(forceCourseCardVisibility, 200);
    setTimeout(forceCourseCardVisibility, 500);
    setTimeout(forceCourseCardVisibility, 1000);
    
    // Continuous monitoring - run every 200ms for 10 seconds
    let continuousCount = 0;
    const continuousInterval = setInterval(function() {
        forceCourseCardVisibility();
        continuousCount++;
        if (continuousCount >= 50) { // 10 seconds (50 * 200ms)
            clearInterval(continuousInterval);
        }
    }, 200);
    
    // Use MutationObserver to catch any dynamic changes
    document.addEventListener('DOMContentLoaded', function() {
        const courseSection = document.querySelector('.courses-listing-section');
        if (courseSection && 'MutationObserver' in window) {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && (mutation.attributeName === 'style' || mutation.attributeName === 'class')) {
                        const target = mutation.target;
                        if (target.closest('.courses-listing-section')) {
                            const computedStyle = window.getComputedStyle(target);
                            if (computedStyle.opacity === '0' || computedStyle.visibility === 'hidden' || 
                                target.classList.contains('scroll-fade-in') || 
                                target.classList.contains('scroll-scale-in')) {
                                target.style.setProperty('opacity', '1', 'important');
                                target.style.setProperty('visibility', 'visible', 'important');
                                target.style.setProperty('transform', 'none', 'important');
                                target.style.setProperty('animation', 'none', 'important');
                                target.style.setProperty('transition', 'none', 'important');
                                target.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
                                target.classList.remove('animated');
                            }
                        }
                    }
                });
            });
            
            observer.observe(courseSection, {
                attributes: true,
                attributeFilter: ['style', 'class'],
                subtree: true,
                childList: true
            });
        }
    });
})();

document.addEventListener('DOMContentLoaded', function() {
    // Force visibility again after DOM is loaded
    function forceAllCourseVisibility() {
        const courseSection = document.querySelector('.courses-listing-section');
        if (courseSection) {
            const allCards = courseSection.querySelectorAll('.course-episode-card');
            allCards.forEach(card => {
                card.style.setProperty('opacity', '1', 'important');
                card.style.setProperty('visibility', 'visible', 'important');
                card.style.setProperty('transform', 'none', 'important');
                card.style.setProperty('animation', 'none', 'important');
                card.style.setProperty('transition', 'none', 'important');
                card.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
                card.classList.add('animated'); // Ensure animated state for visibility
                
                // Unobserve from scrollObserver if it exists
                if (window.scrollObserver) {
                    window.scrollObserver.unobserve(card);
                }
            });
        }
    }
    
    // Run multiple times
    setTimeout(forceAllCourseVisibility, 50);
    setTimeout(forceAllCourseVisibility, 100);
    setTimeout(forceAllCourseVisibility, 200);
    setTimeout(forceAllCourseVisibility, 500);
    setTimeout(forceAllCourseVisibility, 1000);
    setTimeout(forceAllCourseVisibility, 2000);
    
    // Course video thumbnail click handler
    const courseVideoThumbnail = document.getElementById('courseVideoThumbnail');
    const courseVideoIframe = document.getElementById('courseVideoIframe');
    const courseVideoUrl = 'https://www.veed.io/embed/6612ef59-46f4-4f09-955d-e3d14eca05e9?watermark=0&color=default&sharing=0&title=0&autoplay=1';
    
    function playCourseVideo(e) {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        console.log('playCourseVideo called');
        console.log('Thumbnail:', courseVideoThumbnail);
        console.log('Iframe:', courseVideoIframe);
        
        if (courseVideoThumbnail && courseVideoIframe) {
            console.log('All elements found, hiding thumbnail and showing iframe');
            
            // Hide thumbnail completely
            courseVideoThumbnail.style.setProperty('display', 'none', 'important');
            courseVideoThumbnail.style.setProperty('visibility', 'hidden', 'important');
            
            // Show and load iframe - use setProperty with important to override inline styles
            courseVideoIframe.style.setProperty('display', 'block', 'important');
            courseVideoIframe.style.setProperty('visibility', 'visible', 'important');
            courseVideoIframe.style.setProperty('position', 'relative', 'important');
            courseVideoIframe.style.setProperty('top', '0', 'important');
            courseVideoIframe.style.setProperty('left', '0', 'important');
            courseVideoIframe.style.setProperty('width', '100%', 'important');
            courseVideoIframe.style.setProperty('height', '500px', 'important');
            courseVideoIframe.style.setProperty('max-height', '500px', 'important');
            courseVideoIframe.style.setProperty('max-width', '100%', 'important');
            courseVideoIframe.style.setProperty('opacity', '1', 'important');
            courseVideoIframe.style.setProperty('pointer-events', 'auto', 'important');
            
            // Set src to load video with autoplay
            courseVideoIframe.src = courseVideoUrl;
            
            // Force iframe to load and play automatically
            courseVideoIframe.setAttribute('allow', 'autoplay; fullscreen; picture-in-picture');
            
            console.log('Iframe src set to:', courseVideoUrl);
            console.log('Iframe display:', courseVideoIframe.style.display);
            console.log('Iframe computed display:', window.getComputedStyle(courseVideoIframe).display);
        } else {
            console.error('One or more elements not found!');
        }
    }
    
    // Add click handlers
    if (courseVideoThumbnail) {
        courseVideoThumbnail.addEventListener('click', playCourseVideo);
    }
    
});
</script>
<!-- Courses Listing Section -->
<section class="courses-listing-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h1 class="courses-listing-main-title mb-3">
                <span class="courses-listing-title-blue">FINDING</span>
                <span class="courses-listing-title-yellow">HAPPINESS</span>
                <span class="courses-listing-title-blue">WITH TODD</span>
            </h1>
            <p class="courses-listing-subtitle">
            Todd Patkin courageously pulls back the curtain on this disorder and uses his own life experience to help us understand its perils.
            </p>
        </div>

        <!-- Course Banner Section -->
        <section class=" mb-5" style="height: auto; overflow: visible;">
            <div class="" style="display: flex; justify-content: center; align-items: center;">
                <div class=" border" style="position: relative; width: 100%; max-width: 1200px; margin: 0 auto; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.1); overflow: hidden; line-height: 0;">
                    <!-- Thumbnail Image (shown initially) -->
                    <img 
                        id="courseVideoThumbnail"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/course_t.png" 
                        alt="Course Preview"
                        style="width: 100%; max-width: 100%; object-fit:contain; object-position: center; display: block; margin: 0; padding: 0; cursor: pointer;"
                        class="">
                    
                    <!-- Video Iframe (hidden initially - completely removed from layout, takes no space) -->
                    <iframe 
                        id="courseVideoIframe"
                        src=""
                        style="display: none; visibility: hidden; width: 0; height: 0; border: none; margin: 0; padding: 0; position: absolute; top: -9999px; left: -9999px; opacity: 0; pointer-events: none;"
                        allow="autoplay; fullscreen; picture-in-picture"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
                <!-- <div class="course-banner-content">
                    <div class="course-banner-featuring">FEATURING</div>
                    <h2 class="course-banner-title">
                        <span class="course-banner-title-white">TODD</span>
                        <span class="course-banner-title-yellow">PATKIN</span>
                    </h2>
                    <p class="course-banner-subtitle">Motivational Speaker | Author | Happiness Coach</p>
                </div> -->
            </div>
        </section>

        
        <!-- Course Cards Grid -->
        <div class="courses-listing-grid">
            <!-- Row 1: Three Cards -->
            <div class="row g-4 mb-4">
                <!-- Course Card 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course_w_1.png" class="course-episode-image" alt="Week 1">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 1</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 1: Being Easier on Yourself</h5>
                                    <p class="course-episode-description">Learn to recognize and break free from perfectionism and self-criticism that's keeping you stuck.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-1' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_2.png" class="course-episode-image" alt="Week 2">
                            <div class="course-date-overlay">20 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>340+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 2</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 2: Focus on Movement</h5>
                                    <p class="course-episode-description">Discover how to manage negative thought patterns and anxiety before they manage you.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-2' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_3.png" class="course-episode-image" alt="Week 3">
                            <div class="course-date-overlay">20 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>230+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 3</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 3:Focus on Taking Charge of Your Mind</h5>
                                    <p class="course-episode-description">Stop dwelling on the past or worrying about the future. Learn presence practices that create immediate calm.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-3' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: One Card (aligned with left card) -->
            <div class="row g-4 mb-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_4.png" class="course-episode-image" alt="Week 4">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 4</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 4:Focus on Living in the Present</h5>
                                    <p class="course-episode-description">Why loving yourself must come first—and how to do it even when it feels impossible.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-4' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_5.png" class="course-episode-image" alt="Week 5">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 5</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 5: Focus on Eliminating Stressors</h5>
                                    <p class="course-episode-description">The surprising science behind why movement is non-negotiable for mental health.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-5' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_6.png" class="course-episode-image" alt="Week 6">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 6</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 6:Focus on Playing to Your Strengths</h5>
                                    <p class="course-episode-description">How spiritual connection (however you define it) shapes your experience of life.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-6' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3: One Card (aligned with left card) -->
            <div class="row g-4 mb-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_7.png" class="course-episode-image" alt="Week 4">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 7</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 7:Spending More Time With Positive People</h5>
                                    <p class="course-episode-description">Why your marriage or primary relationship plays a crucial role in your happiness.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-7' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_8.png" class="course-episode-image" alt="Week 5">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 8</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 8:Focus on Strengthening Close Relationships</h5>
                                    <p class="course-episode-description">Strategies for managing difficult relationships and setting healthy boundaries.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-8' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_9.png" class="course-episode-image" alt="Week 6">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 9</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 9:Focus on Being Friendly</h5>
                                    <p class="course-episode-description">Moving beyond simple "thank you" to truly transformative gratitude.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-9' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 4: One Card (aligned with left card) -->
            <div class="row g-4 mb-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_10.png" class="course-episode-image" alt="Week 4">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 10</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 10:Focus on Helping Others</h5>
                                    <p class="course-episode-description">Why giving back is one of the most powerful tools for your own recovery.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-10' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_11.png" class="course-episode-image" alt="Week 5">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 11</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 11:Developing An Attitude of Gratitude</h5>
                                    <p class="course-episode-description">Creating and maintaining the network that will support your happiness journey.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-11' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_12.png" class="course-episode-image" alt="Week 6">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 12</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Module 12:Focus on Your Higher Power</h5>
                                    <p class="course-episode-description">How to maintain momentum and continue growing long after the course ends.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-12' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>