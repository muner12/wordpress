<?php

/**
 * Template Name: Course
 */
get_header();
?>
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
                Lorem ipsum dolor sit amet consectetur. Enim et consequat ultricies amet nisl eu. Interdum nullam turpis tellus felis.
            </p>
        </div>

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
                                    <h5 class="course-episode-title">Module 2: Taking Charge of Your Mind</h5>
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

            <!-- Row 2: One Card (aligned with left card) -->
            <div class="row g-4">
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
                                    <h5 class="course-episode-title">Module 4: The Power of Self-Love</h5>
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
                                    <h5 class="course-episode-title">Module 5: Exercise as Medicine</h5>
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
                                    <h5 class="course-episode-title">Module 6: Connecting to Your Higher Power</h5>
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
            <div class="row g-4">
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
                                    <h5 class="course-episode-title">Module 7: The Relationship Factor</h5>
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
                                    <h5 class="course-episode-title">Module 8: Handling Negative People</h5>
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
                                    <h5 class="course-episode-title">Module 9: The Gratitude Practice</h5>
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
            <div class="row g-4">
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
                                    <h5 class="course-episode-title">Module 10: The Service Secret</h5>
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
                                    <h5 class="course-episode-title">Module 11: Building Your Support System</h5>
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
                                    <h5 class="course-episode-title">Module 12: Sustaining Your Practice</h5>
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