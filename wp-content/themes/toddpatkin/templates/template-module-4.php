<?php

/**
 * Template Name: Module 4
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
            <span class="courses-breadcrumb-current">Module 4</span>
        </div>

        <!-- Main Content Layout -->
        <div class="row g-4 g-lg-5">
            <!-- Left Side: Video Player - First on Mobile -->
                <div class="col-12 col-lg-6 courses-video-column order-1 order-lg-1">
                    <div class="courses-video-container w-100">
                        <div class="courses-video-wrapper w-100 position-relative" style="padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <iframe 
                                src="https://www.youtube.com/embed/YcPpvMUBN5Q" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                class="courses-video-iframe">
                            </iframe>
                        </div>
                    </div>
                </div>

            <!-- Right Side: Course Details - Second on Mobile -->
            <div class="col-12 col-lg-6 courses-details-column order-2 order-lg-2">
                <div class="courses-details-content">
                    <h3 class="courses-details-title">Module 4: The Power of Self-Love</h3>
                    <div class="courses-tag-badge">Masterclass Course</div>
                    <h4 class="courses-description-label">Description</h4>
                    <div class="courses-description-text">
                        <p class="courses-description-paragraph">Without even realizing it, many people spend large portions of their time rehashing the past (especially negative events) and worrying about the future (no matter how unlikely the dreaded scenario might be). Through specific steps, such as forgiveness, contingency planning, and being mindful of your thoughts, you can rid yourself of these mental burdens and more fully live in the present and enjoy your life!</p>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_1.png" class="course-episode-image" alt="Week 1">
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
<?php
get_footer();
?>