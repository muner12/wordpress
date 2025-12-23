<?php

/**
 * Template Name: Podcast
 */
get_header();
?>
<style>
    /* Fix podcast images - no cropping, container matches image size */
    .podcast-page-section .podcast-card-image {
        height: auto !important;
        width: 100%;
        object-fit: contain !important;
        object-position: center;
        display: block;
        max-width: 100%;
    }
    
    .podcast-page-section .podcast-card {
        height: auto !important;
        display: flex;
        flex-direction: column;
    }
    
    .podcast-page-section .card {
        height: auto !important;
    }
    
    .podcast-page-section .h-100 {
        height: auto !important;
    }
    
    .podcast-page-section .overflow-hidden {
        overflow: hidden !important;
    }
</style>
<!-- Podcast Section -->
<section class="podcast-page-section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="podcast-page-title mb-2">
                <span class="podcast-page-title-blue">TOP PICKED</span>
                <span class="podcast-page-title-yellow">PODCAST</span>
            </h2>
            <p class="courses-listing-subtitle">
                I love giving speeches and honestly feel most alive and happiest when on stage</p>
        </div>

        <!-- Podcast Cards Grid -->
        <div class="podcast-cards-grid">
            <!-- Row 1: Two Cards -->
            <div class="row g-4 mb-4">
                <!-- Podcast Card 1 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-1' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-1.png" class="img-fluid w-100 podcast-card-image" alt="Crack the happiness code">
                            <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                <h5 class="fw-bold mb-2 podcast-card-title">HELPING OTHERS HELPS YOU</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Podcast Card 2 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-2' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-2.png" class="img-fluid w-100 podcast-card-image" alt="Helping others helps you">
                            <!-- Episode Badge Overlay -->
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="podcast-episode-badge">EPISODE 412</span>
                            </div>
                            <!-- Title Overlay -->
                            
                            <!-- Bottom Content -->
                            <div class="position-absolute  bottom-0 start-0 p-2 text-white w-100 podcast-card-overlay">
                                <h5 class="fw-bold  podcast-card-title">HAPPINESS ISN'T WHAT YOU THINK</h5>
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
                        <div class="card border-0 shadow-sm overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-3.png" class="img-fluid w-100 podcast-card-image" alt="Happiness isn't what you think">
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