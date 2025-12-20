<?php

/**
 * Template Name: Podcast
 */
get_header();
?>
<!-- Podcast Section -->
<section class="podcast-page-section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="podcast-page-title mb-2">
                <span class="podcast-page-title-blue">TOP PICKED</span>
                <span class="podcast-page-title-yellow">PODCAST</span>
            </h2>
        </div>

        <!-- Podcast Cards Grid -->
        <div class="podcast-cards-grid">
            <!-- Row 1: Two Cards -->
            <div class="row g-4 mb-4">
                <!-- Podcast Card 1 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-1' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-1.png" class="img-fluid w-100 podcast-card-image" alt="Crack the happiness code">
                            <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                <h5 class="fw-bold mb-2 podcast-card-title">CRACK THE HAPPINESS CODE</h5>
                                <p class="mb-0 podcast-card-description">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse risus.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Podcast Card 2 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-2' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-2.png" class="img-fluid w-100 podcast-card-image" alt="Helping others helps you">
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

            <!-- Row 2: One Card (aligned with left card) -->
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-3' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" class="img-fluid w-100 podcast-card-image" alt="Happiness isn't what you think">
                            <!-- Title Overlay -->
                            <div class="position-absolute top-0 start-0 p-4 text-white w-100">
                                <h5 class="fw-bold mb-1 podcast-card-title-overlay">
                                    <span class="text-white">HAPPINESS ISN'T</span><br>
                                    <span class="podcast-title-orange">WHAT YOU THINK</span>
                                </h5>
                            </div>
                            <!-- Bottom Content -->
                            <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                <h5 class="fw-bold mb-2 podcast-card-title">CRACK THE HAPPINESS CODE</h5>
                                <p class="mb-0 podcast-card-description">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse risus.</p>
                                <!-- Greg Voisen Badge -->
                                <div class="position-absolute bottom-0 end-0 p-3">
                                    <span class="podcast-guest-name">GREG VOISEN</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <!-- <div class="text-center mt-5">
                <a href="#" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div> -->
    </div>
</section>
<?php
get_footer();
?>