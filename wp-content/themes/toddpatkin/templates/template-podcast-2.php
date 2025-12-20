<?php

/**
 * Template Name: Podcast 2
 */
get_header();
?>
 <!-- Podcast Details Section -->
    <section class="podcast-details-page-section bg-light">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="podcast-page-title mb-2">
                    <span class="podcast-page-title-blue">TOP PICKED</span> 
                    <span class="podcast-page-title-yellow">PODCAST</span>
                </h2>
            </div>

            <!-- Main Podcast Player Card -->
            <div class="podcast-player-card mb-5">
                <!-- Green Header Bar -->
                <div class="podcast-player-header">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" class="podcast-player-profile-img">
                            <div class="podcast-player-profile-text">
                                <div class="podcast-player-profile-title">Finding Happiness</div>
                                <div class="podcast-player-profile-name">Todd Patkin</div>
                            </div>
                        </div>
                        <div class="podcast-player-episode-badge">EPISODE 412</div>
                    </div>
                </div>

                <!-- Main Player Area -->
                <div class="podcast-player-main position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-2.png" alt="Podcast" class="podcast-player-background-image">
                    <!-- Quote Overlay -->
                    <div class="podcast-player-quote-overlay">
                        <h3 class="podcast-player-quote">"HELPING OTHERS HELPS YOU"</h3>
                        <p class="podcast-player-quote-subtitle">WITH TODD PATKIN</p>
                    </div>
                    <!-- Large Pause Button -->
                    <div class="podcast-player-pause-button">
                        <i class="fas fa-pause"></i>
                    </div>
                    <!-- Daily Helping Badge -->
                    <div class="podcast-player-daily-helping">DAILY HELPING</div>
                </div>

                <!-- Player Controls -->
                <div class="podcast-player-controls">
                    <div class="podcast-player-progress-bar-wrapper">
                        <div class="podcast-player-progress-bar"></div>
                    </div>
                    <div class="podcast-player-controls-buttons d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <button class="podcast-control-btn"><i class="fas fa-pause"></i></button>
                            <button class="podcast-control-btn"><i class="fas fa-backward"></i></button>
                            <button class="podcast-control-btn"><i class="fas fa-forward"></i></button>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <button class="podcast-control-btn"><i class="fas fa-volume-up"></i></button>
                            <button class="podcast-control-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More Podcast Section -->
            <div class="text-center mb-5">
                <h2 class="podcast-page-title mb-2">
                    <span class="podcast-page-title-blue">MORE</span> 
                    <span class="podcast-page-title-yellow">PODCAST</span>
                </h2>
            </div>

            <!-- More Podcast Cards -->
            <div class="row g-4">
                <!-- Podcast Card 1 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-2' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-2.png" class="img-fluid w-100 podcast-card-image" alt="Crack the happiness code">
                            <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                <h5 class="fw-bold mb-2 podcast-card-title">CRACK THE HAPPINESS CODE</h5>
                                <p class="mb-0 podcast-card-description">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse risus.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Podcast Card 2 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-3' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" class="img-fluid w-100 podcast-card-image" alt="Helping others helps you">
                            <!-- Episode Badge Overlay -->
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="podcast-episode-badge">EPISODE 412</span>
                            </div>
                            <!-- Title Overlay -->
                            <div class="position-absolute top-0 start-0 p-4 text-white">
                                <h5 class="fw-bold mb-1 podcast-card-title-overlay">"HELPING OTHERS HELPS YOU"</h5>
                                <p class="mb-0 podcast-card-subtitle">WITH TODD PATKIN</p>
                            </div>
                            <!-- Bottom Content -->
                            <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                <h5 class="fw-bold mb-2 podcast-card-title">CRACK THE HAPPINESS CODE</h5>
                                <p class="mb-0 podcast-card-description">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse risus.</p>
                                <!-- Daily Helping Badge -->
                                <div class="position-absolute bottom-0 end-0 p-3">
                                    <span class="podcast-daily-helping">DAILY HELPING</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( home_url( '/podcast' ) ); ?>" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div>
        </div>
    </section>
<?php
get_footer();
?>