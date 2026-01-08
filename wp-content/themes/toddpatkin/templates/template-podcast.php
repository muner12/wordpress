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
    
    /* Responsive styles for podcast images */
    @media (max-width: 992px) {
        .podcast-page-section .podcast-card-image {
            max-height: 400px;
            object-fit: contain;
        }
    }
    
    @media (max-width: 768px) {
        .podcast-page-section .podcast-card-image {
            max-height: 350px;
            object-fit: contain;
        }
        
        .podcast-page-section .podcast-card-overlay {
            padding: 15px !important;
        }
    }
    
    @media (max-width: 576px) {
        .podcast-page-section .podcast-card-image {
            max-height: 300px;
            object-fit: contain;
        }
        
        .podcast-page-section .podcast-card-overlay {
            padding: 12px !important;
        }
    }
    
    @media (max-width: 480px) {
        .podcast-page-section .podcast-card-image {
            max-height: 250px;
            object-fit: contain;
        }
    }
    
    /* Specific styling for podcast-4 image */
    .podcast-page-section .podcast-card img[src*="podcast_4.webp"],
    .podcast-page-section .podcast-card img[alt*="12 Steps to Happiness"] {
        height: 320px !important;
        object-fit: contain !important;
        object-position: center;
        display: block !important;
        border-radius: 12px !important;
        -webkit-border-radius: 12px !important;
        -moz-border-radius: 12px !important;
    }
    
    /* Ensure the container clips the image properly */
    .podcast-page-section .podcast-card > div[style*="overflow: hidden"] {
        border-radius: 12px !important;
        -webkit-border-radius: 12px !important;
        -moz-border-radius: 12px !important;
    }
    
    /* Force image to respect container border-radius */
    .podcast-page-section .podcast-card > div[style*="overflow: hidden"] {
        border-radius: 12px !important;
        -webkit-border-radius: 12px !important;
        -moz-border-radius: 12px !important;
    }
    
    .podcast-page-section .podcast-card > div[style*="overflow: hidden"] img {
        border-radius: 12px !important;
        -webkit-border-radius: 12px !important;
        -moz-border-radius: 12px !important;
        overflow: hidden !important;
        clip-path: inset(0 round 12px) !important;
        -webkit-clip-path: inset(0 round 12px) !important;
    }
    
    /* Add padding to the card container for podcast-4 */
    .podcast-page-section .podcast-card[style*="padding"] {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
    
    @media (max-width: 768px) {
        .podcast-page-section .podcast-card img[src*="podcast_4.webp"],
        .podcast-page-section .podcast-card img[alt*="12 Steps to Happiness"] {
            height: 300px !important;
        }
        
        .podcast-page-section .podcast-card[style*="padding"] {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
    }
    
    @media (max-width: 576px) {
        .podcast-page-section .podcast-card img[src*="podcast_4.webp"],
        .podcast-page-section .podcast-card img[alt*="12 Steps to Happiness"] {
            height: 250px !important;
        }
        
        .podcast-page-section .podcast-card[style*="padding"] {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
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
                            <!-- <div class="position-absolute top-0 end-0 p-3">
                                <span class="podcast-episode-badge">EPISODE 412</span>
                            </div> -->
                            <!-- Title Overlay -->
                            
                            <!-- Bottom Content -->
                            <div class="position-absolute  bottom-0 start-0 p-2 text-white w-100 podcast-card-overlay">
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

            <!-- Row 2: Two Cards -->
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

                <!-- Podcast Card 4 -->
                <div class="col-12 col-md-6">
                    <a href="<?php echo esc_url( home_url( '/podcast/podcast-4' ) ); ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm overflow-hidden position-relative podcast-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_4.webp" 
                            class="" alt="Happiness isn't what you think">
                            
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
        <!-- <div class="text-center mt-5">
                <a href="#" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div> -->
    </div>
</section>
<?php
get_footer();
?>