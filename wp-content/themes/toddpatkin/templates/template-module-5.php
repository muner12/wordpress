<?php

/**
 * Template Name: Module 5
 */
get_header();
?>
<!-- Courses Content Section -->
<section class="courses-page-section">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="courses-page-main-title mb-2">HAPPINESS <span class="courses-page-title-blue">COURSE</span></h2>
        </div>

        <!-- Breadcrumb -->
        <div class="courses-breadcrumb mb-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="courses-breadcrumb-link">Home</a>
            <span class="courses-breadcrumb-separator">></span>
            <a href="<?php echo esc_url( home_url( '/course' ) ); ?>" class="courses-breadcrumb-link">Course</a>
            <span class="courses-breadcrumb-separator">></span>
            <span class="courses-breadcrumb-current">Module 5</span>
        </div>

        <!-- Main Content Layout -->
        <div class="row g-4 g-lg-5">
            <!-- Left Side: Video Player - First on Mobile -->
                <div class="col-12 col-lg-6 courses-video-column order-1 order-lg-1">
                    <div class="courses-video-container w-100">
                        <div class="courses-video-wrapper w-100 position-relative">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/week_5.png" 
                                alt="Module 5: Exercise as Medicine"
                                class="img-fluid w-100"
                                style="border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.1);">
                            <!-- Lock Icon Overlay -->
                            <div class="course-video-lock-overlay position-absolute top-50 start-50 translate-middle" style="width: 80px; height: 80px; background: rgba(0, 0, 0, 0.7); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.3s ease;" data-bs-toggle="modal" data-bs-target="#coursePurchaseModal">
                                <i class="fas fa-lock" style="color: #FFC107; font-size: 36px;"></i>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Right Side: Course Details - Second on Mobile -->
            <div class="col-12 col-lg-6 courses-details-column order-2 order-lg-2">
                <div class="courses-details-content">
                    <!-- Enhanced Title Section -->
                    <div class="courses-details-header mb-4">
                        <h3 class="courses-details-title mb-3">Module 5: Focus on Eliminating Stressors</h3>
                        <div class="courses-tag-badge d-inline-flex align-items-center gap-2 px-3 py-2 mb-3" style="background: linear-gradient(135deg, #FAD30C 0%, #FFD54F 100%); border-radius: 8px; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.3);">
                            <i class="fas fa-graduation-cap" style="color: #1a1a1a; font-size: 14px;"></i>
                            <span style="color: #1a1a1a; font-weight: 600; font-size: 13px; letter-spacing: 0.5px;">MASTERCLASS COURSE</span>
                        </div>
                    </div>
                    
                    <!-- Enhanced Description Section -->
                    <div class="courses-description-enhanced">
                        <div class="courses-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                            <div class="courses-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                <i class="fas fa-ban" style="color: #1a1a1a; font-size: 14px;"></i>
                            </div>
                            <p class="courses-description-paragraph mb-0" style="font-size: 16px; line-height: 1.75; color: #2D2D2D; text-align: justify;">Most of us assume that stress is an inescapable part of modern life. What we don't realize is that our ability to eliminate stressors (or at least minimize their impact) is much greater than we assume. Once you make specific changes to your circumstances or at least to how you look at them, you'll wave goodbye to a surprising amount of your anxiety!</p>
                        </div>
                        
                        <!-- Highlight Box -->
                        <div class="courses-highlight-box p-4 mb-4" style="background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border: 2px solid #FAD30C; border-radius: 12px; box-shadow: 0 4px 12px rgba(250, 211, 12, 0.15); position: relative;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="courses-quote-icon" style="flex-shrink: 0; width: 40px; height: 40px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check-circle" style="color: #1a1a1a; font-size: 18px;"></i>
                                </div>
                                <div>
                                    <p class="courses-description-paragraph mb-0" style="font-size: 15px; line-height: 1.7; color: #2D2D2D; font-style: italic;">The surprising science behind why movement is non-negotiable for mental health. <strong style="color: #275BA7; font-weight: 600;">Learn practical strategies to identify and eliminate stressors that are holding you back.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More Courses Section -->
<section class="more-courses-section">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="more-courses-section-title mb-2">
                <span class="more-courses-title-blue">MORE</span>
                <span class="more-courses-title-yellow">COURSES</span>
            </h2>
        </div>

        <!-- Course Cards -->
        <div class="course-episode-cards-horizontal">
            <!-- Course Card 1 -->
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

            <!-- Course Card 2 -->
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
                            <h5 class="course-episode-title">Module 2: Taking Charge of Your Mind</h5>
                            <p class="course-episode-description">Discover how to manage negative thought patterns and anxiety before they manage you.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/course/module-2' ) ); ?>" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course Card 3 -->
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
                            <h5 class="course-episode-title">Module 3: Living in the Present</h5>
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
</section>

<!-- Purchase Modal -->
<div class="modal fade" id="coursePurchaseModal" tabindex="-1" aria-labelledby="coursePurchaseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);">
            <div class="modal-header" style="border-bottom: 2px solid #F0F0F0; padding: 24px 30px;">
                <h5 class="modal-title" id="coursePurchaseModalLabel" style="font-family: 'Oswald', sans-serif; font-weight: 600; font-size: 24px; color: #275BA7; text-transform: uppercase;">Unlock Module 5</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 30px;">
                <div class="text-center mb-4">
                    <div class="mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFC107 0%, #FFD700 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4);">
                        <i class="fas fa-lock-open" style="color: #275BA7; font-size: 36px;"></i>
                    </div>
                    <h4 style="font-family: 'Oswald', sans-serif; font-weight: 600; color: #2D2D2D; margin-bottom: 12px;">Module 5: Exercise as Medicine</h4>
                    <p style="color: #666; font-size: 15px; line-height: 1.6; margin-bottom: 0;">Purchase this module to access the full course content and unlock all features.</p>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 2px solid #F0F0F0; padding: 20px 30px; justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/course/module-5' ) ); ?>" class="btn btn-warning btn-lg" style="padding: 14px 40px; font-weight: 600; font-size: 16px; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4); transition: all 0.3s ease;">
                    Purchase Now <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.course-video-lock-overlay:hover {
    background: rgba(0, 0, 0, 0.85) !important;
    transform: translate(-50%, -50%) scale(1.1);
}

.course-video-lock-overlay:hover i {
    transform: scale(1.1);
    transition: transform 0.3s ease;
}
</style>

<?php
get_footer();
?>