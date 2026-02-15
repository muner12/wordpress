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
    const courseVideoUrl = 'https://www.veed.io/embed/08363b7e-a955-45c0-accf-5469d90516f5?watermark=0&color=&sharing=0&title=0&autoplay=1';
    
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
            
            // Set autoplay permissions
            courseVideoIframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
            
            // Set src to load video with autoplay
            courseVideoIframe.src = courseVideoUrl;
            
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
                        width="744"
                        height="504"
                        frameborder="0"
                        title="Ateeb Elahi's Video - Jan 12, 2026"
                        webkitallowfullscreen
                        mozallowfullscreen
                        allowfullscreen
                        style="display: none; visibility: hidden; width: 0; height: 0; border: none; margin: 0; padding: 0; position: absolute; top: -9999px; left: -9999px; opacity: 0; pointer-events: none;"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
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

        <!-- Course Text Content Section -->
        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="course-text-content">
                            <!-- Introduction Badge -->
                            <div class="course-intro-badge d-inline-flex align-items-center gap-2 px-3 py-2 mb-4" style="background: linear-gradient(135deg, #FAD30C 0%, #FFD54F 100%); border-radius: 8px; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.3);">
                                <i class="fas fa-graduation-cap" style="color: #1a1a1a; font-size: 16px;"></i>
                                <span style="color: #1a1a1a; font-weight: 600; font-size: 14px; letter-spacing: 0.5px;">12-WEEK MASTERCLASS PROGRAM</span>
                            </div>
                            
                            <!-- Main Description with Icon -->
                            <div class="course-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                                <div class="course-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                    <i class="fas fa-play-circle" style="color: #1a1a1a; font-size: 14px;"></i>
                                </div>
                                <p class="course-description-text mb-0" style="font-size: 16px; line-height: 1.75; color: #000000 !important; text-align: justify;">This 12-week MasterClass is a practical guide to creating a happier, more balanced life - one week at a time. Based on Todd's personal recovery journey and years of helping others, the course focuses on simple, proven habits that address the real causes of stress, anxiety, and negative thinking.</p>
                            </div>
                            
                            <!-- Description with Icon -->
                            <div class="course-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                                <div class="course-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                    <i class="fas fa-chart-line" style="color: #1a1a1a; font-size: 14px;"></i>
                                </div>
                                <p class="course-description-text mb-0" style="font-size: 16px; line-height: 1.75; color: #000000 !important; text-align: justify;">Each week introduces one focused practice - such as exercise, managing your thoughts, being kinder to yourself, reducing stress, improving relationships, and cultivating gratitude. These lessons are designed to build on one another, creating steady progress without overwhelm or quick-fix promises.</p>
                            </div>
                            
                            <!-- Description with Icon -->
                            <div class="course-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                                <div class="course-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                    <i class="fas fa-lightbulb" style="color: #1a1a1a; font-size: 14px;"></i>
                                </div>
                                <p class="course-description-text mb-0" style="font-size: 16px; line-height: 1.75; color: #000000 !important; text-align: justify;">Through short video lessons, real-life examples, and practical exercises from the workbook, you'll learn how to change the way you think, feel, and respond to everyday challenges. The goal isn't perfection - it's consistency, self-awareness, and learning how to make your own happiness a priority in a realistic, sustainable way.</p>
                            </div>
                            
                            <!-- Description with Icon -->
                            <div class="course-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                                <div class="course-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                    <i class="fas fa-heart" style="color: #1a1a1a; font-size: 14px;"></i>
                                </div>
                                <p class="course-description-text mb-0" style="font-size: 16px; line-height: 1.75; color: #000000 !important; text-align: justify;">This course is for anyone who feels stuck, overwhelmed, or disconnected - and is ready to make meaningful change, one small step at a time.</p>
                            </div>
                            
                            <!-- Final CTA Text -->
                            <div class="course-cta-text-box p-3 mb-4" style="background: linear-gradient(135deg, rgba(250, 211, 12, 0.15) 0%, rgba(250, 211, 12, 0.05) 100%); border-left: 4px solid #FAD30C; border-radius: 8px;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-rocket" style="color: #000000; font-size: 18px;"></i>
                                    <span style="color: #000000; font-weight: 600; font-size: 15px; letter-spacing: 0.5px;">YOUR JOURNEY TO HAPPINESS STARTS HERE</span>
                                </div>
                                <p class="course-description-text mb-0" style="font-size: 15px; line-height: 1.7; color: #000000 !important; margin: 0; text-align: justify;">You'll work through practical exercises designed to fit into real life - helping you apply what you learn immediately and see steady progress week by week.</p>
                            </div>
                            
                            <!-- Purchase Button -->
                            <div class="text-center">
                                <a href="https://www.udemy.com/course/twelve-weeks-to-living-a-happier-life/" target="_blank" rel="noopener noreferrer" class="btn btn-warning py-3 px-4 fw-bold d-inline-block" style="font-size: 18px; letter-spacing: 0.5px;">
                                    Purchase now (27.99$)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_1.png" class="course-episode-image" alt="Week 1">
                            <div class="course-date-overlay">12 Oct</div>
                        </div>
                        <div class="course-episode-content">
                            <div class="course-episode-badge d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-code"></i>
                                <span>Module 1</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info ">
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
                                    <h5 class="course-episode-title"> Focus on Exercising</h5>
                                    <p class="course-episode-description">Exercise is the foundation of lasting happiness. This module shows how simple, consistent movement improves mood, reduces anxiety, boosts energy, and opens the door to positive change - without requiring extreme workouts or gym routines.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-1' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 2</span>
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
                                    <h5 class="course-episode-title"> Focus on Taking Charge of Your Mind</h5>
                                    <p class="course-episode-description">Your thoughts shape your happiness. Learn how to "feed" your mind with positive, motivating input and break free from self-doubt and negative mental habits that quietly undermine your well-being.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-2' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 3</span>
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
                                    <h5 class="course-episode-title"> Focus on Being Easier on Yourself</h5>
                                    <p class="course-episode-description">Perfectionism fuels unhappiness. This module teaches how to replace harsh self-criticism with self-compassion, recognize your successes, and build confidence without demanding impossible standards from yourself.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-3' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 4</span>
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
                                    <h5 class="course-episode-title"> Focus on Playing to Your Strengths</h5>
                                    <p class="course-episode-description">Happiness grows when you do what you're good at. Learn how identifying and using your natural talents more often leads to fulfillment, confidence, and a deeper sense of purpose in daily life.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-4' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 5</span>
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
                                    <h5 class="course-episode-title"> Focus on Eliminating Stressors</h5>
                                    <p class="course-episode-description">Stress quietly steals joy. This module helps you identify major stress triggers, eliminate what you can, and change how you respond to what you can't - so stress no longer runs your life.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-5' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 6</span>
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
                                    <h5 class="course-episode-title"> Focus on Living in the Present</h5>
                                    <p class="course-episode-description">Dwelling on the past or worrying about the future robs you of happiness. Learn practical ways to release mental burdens, forgive, reduce anxiety, and fully experience life as it's happening now.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-6' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 7</span>
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
                                    <h5 class="course-episode-title"> Focus on Spending More Time with Positive People</h5>
                                    <p class="course-episode-description">Your happiness is shaped by the people around you. Discover how surrounding yourself with positive influences strengthens the progress you've made - and why distancing from negativity is an act of self-care.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-7' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 8</span>
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
                                    <h5 class="course-episode-title"> Focus on Strengthening Close Relationships</h5>
                                    <p class="course-episode-description">Strong relationships are essential to happiness. This module focuses on improving bonds with family, friends, and partners through presence, communication, appreciation, and intentional effort.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-8' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 9</span>
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
                                    <h5 class="course-episode-title"> Focus on Being Friendly</h5>
                                    <p class="course-episode-description">Small acts of kindness have a big impact. Learn how friendliness, human connection, and simple gestures can uplift others - and dramatically improve your own sense of happiness and fulfillment.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-9' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 10</span>
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
                                    <h5 class="course-episode-title">: Focus on Helping Others</h5>
                                    <p class="course-episode-description">Giving back fuels happiness. This module shows why generosity - of time, compassion, or service - builds self-esteem, perspective, and lasting emotional well-being.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-10' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 11</span>
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
                                    <h5 class="course-episode-title">: Focus on Your Higher Power</h5>
                                    <p class="course-episode-description">Connecting to something greater than yourself brings perspective and peace. Explore spirituality in a personal, inclusive way - whether through faith, nature, service, or reflection.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-11' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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
                                <span>Module 12</span>
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
                                    <h5 class="course-episode-title">: Focus on Developing an Attitude of Gratitude</h5>
                                    <p class="course-episode-description">Gratitude transforms happiness. Learn how recognizing and appreciating what you already have leads to greater joy, humility, and a deeper connection to life and others.</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/course/module-12' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                                    Learn More <i class="fas fa-arrow-right"></i>
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