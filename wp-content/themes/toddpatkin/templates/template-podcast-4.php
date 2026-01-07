<?php

/**
 * Template Name: Podcast 4
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
    
    /* Apple Podcast iframe styling */
    .podcast-apple-iframe-wrapper {
        width: 100%;
        max-width: 660px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .podcast-apple-iframe-wrapper iframe {
        width: 100%;
        max-width: 660px;
        border-radius: 10px;
        overflow: hidden;
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
                <!-- Apple Podcast Player -->
                <div class="podcast-player-main position-relative" style="width: 100%; margin: 0; background: transparent !important; min-height: 0 !important; padding: 0;">
                    <div class="podcast-apple-iframe-wrapper">
                        <iframe 
                            allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" 
                            frameborder="0" 
                            height="175" 
                            style="width:100%;max-width:660px;overflow:hidden;border-radius:10px;" 
                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" 
                            src="https://embed.podcasts.apple.com/us/podcast/12-steps-to-happiness-with-todd-patkin/id1545990607?i=1000587632053">
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
                                    <!-- <h5 class="fw-bold mb-2 podcast-card-title">HELPING OTHERS HELPS YOU</h5> -->
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
                                    <!-- <span class="podcast-episode-badge">EPISODE 412</span> -->
                                </div>
                                <!-- Bottom Content -->
                                <div class="position-absolute bottom-0 start-0 p-2 text-white w-100 podcast-card-overlay">
                                    <!-- <h5 class="fw-bold  podcast-card-title">HAPPINESS ISN'T WHAT YOU THINK</h5> -->
                                    <!-- Daily Helping Badge -->
                                    <div class="position-absolute bottom-0 end-0 p-3">
                                        <!-- <span class="podcast-daily-helping">DAILY HELPING</span> -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="row g-4">
                    <!-- Podcast Card 3 -->
                    <div class="col-12 col-md-6">
                        <a href="<?php echo esc_url( home_url( '/podcast/podcast-3' ) ); ?>" class="text-decoration-none">
                            <div class="card border-0 shadow-sm overflow-hidden position-relative podcast-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast-3.png" class="img-fluid w-100 podcast-card-image" alt="Happiness isn't what you think">
                                <!-- Title Overlay -->
                                <!-- <div class="position-absolute top-0 start-0 p-4 text-white w-100">
                                    <h5 class="fw-bold mb-1 podcast-card-title-overlay">
                                        <span class="text-white">HAPPINESS ISN'T</span><br>
                                        <span class="podcast-title-orange">WHAT YOU THINK</span>
                                    </h5>
                                </div> -->
                                <!-- Bottom Content -->
                                <div class="position-absolute bottom-0 start-0 p-4 text-white w-100 podcast-card-overlay">
                                    <!-- <h5 class="fw-bold mb-2 podcast-card-title">CRACK THE HAPPINESS CODE</h5> -->
                                    <!-- Greg Voisen Badge -->
                                    <div class="position-absolute bottom-0 end-0 p-3">
                                        <!-- <span class="podcast-guest-name">GREG VOISEN</span> -->
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

