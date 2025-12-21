<?php

/**
 * Template Name: Podcast 2
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
                                    <h5 class="fw-bold mb-2 podcast-card-title">CRACK THE HAPPINESS CODE</h5>
                                    <p class="mb-0 podcast-card-description">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse risus.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Podcast Card 2 -->
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
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( home_url( '/podcast' ) ); ?>" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div>
        </div>
    </section>
<?php
get_footer();
?>