<?php

/**
 * Template Name: Podcast 3
 */
get_header();
?>
<style>
    /* Fix podcast images - no cropping, container matches image size */
    .podcast-details-page-section .podcast-card-image {
        height: auto !important;
        width: 100%;
        object-fit: contain !important;
        object-position: center;
        display: block;
        max-width: 100%;
    }
    
    .podcast-details-page-section .podcast-card {
        height: auto !important;
        display: flex;
        flex-direction: column;
    }
    
    .podcast-details-page-section .card {
        height: auto !important;
    }
    
    .podcast-details-page-section .h-100 {
        height: auto !important;
    }
</style>
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
            <div class="podcast-player-card mb-5" style="padding: 0; overflow: hidden;">
                <!-- YouTube Video Player -->
                <div class="podcast-player-main position-relative" style="width: 100%; margin: 0; background: transparent !important; min-height: 0 !important; padding: 0;">
                    <div class="podcast-video-wrapper position-relative" style="width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden; background: #000;">
                        <iframe 
                            src="https://www.youtube.com/embed/9BJm5MzxBQY" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"
                            class="podcast-video-iframe">
                        </iframe>
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
            <div class="podcast-cards-grid">
                <div class="row g-4 mb-4">
                    <!-- Podcast Card 1 -->
                    <div class="col-12 col-md-6">
                        <a href="<?php echo esc_url( home_url( '/podcast/podcast-1' ) ); ?>" class="text-decoration-none">
                            <div class="card border-0 shadow-sm overflow-hidden position-relative podcast-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-1.png" class="img-fluid w-100 podcast-card-image" alt="Crack the happiness code">
                                <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                    <h5 class="fw-bold  podcast-card-title">HELPING OTHERS HELPS YOU</h5>
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
                                <!-- Bottom Content -->
                                <div class="position-absolute bottom-0 start-0 p-2 text-white w-100 podcast-card-overlay">
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