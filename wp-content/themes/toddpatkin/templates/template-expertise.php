<?php

/**
 * Template Name: Expertise
 */
get_header();
?>
<!-- Expertise Section -->
<section class="expertise-main-section">
    <div class="container">
        <div class="expertise-content-wrapper">
            <h2 class="expertise-main-title">WHAT <span class="text-warning">Todd Patkin</span> CAN DO<br>FOR YOUR TEAM</h2>

            <div class="expertise-items-container">
                <!-- Item 1: Image Left, Text Right -->
                <div class="expertise-item expertise-item-with-border">
                    <div class="expertise-item-content">
                        <div class="expertise-image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expertise-image-1-2d5908.png" alt="Embrace Change" class="expertise-item-image">
                        </div>
                        <div class="expertise-text-container">
                            <div class="expertise-text-content">
                                <h3 class="expertise-item-subtitle">Embrace Change with Confidence</h3>
                                <p class="expertise-item-description">Lorem ipsum dolor sit amet consectetur. Tempus bibendum amet pharetra viverra morbi consectetur leo tortor diam. Suspendisse diam augue adipiscing ultricies et at. Non volutpat morbi nullam mauris mattis aliquam parturient. Volutpat phasellus pellentesque pellentesque diam venenatis tempor.</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-warning expertise-hire-btn">Hire Todd</a>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Text Left, Image Right -->
                <div class="expertise-item expertise-item-with-border">
                    <div class="expertise-item-content">
                        <div class="expertise-text-container">
                            <div class="expertise-text-content">
                                <h3 class="expertise-item-subtitle">Encourages self-growth and emotional resiliance</h3>
                                <p class="expertise-item-description">Lorem ipsum dolor sit amet consectetur. Tempus bibendum amet pharetra viverra morbi consectetur leo tortor diam. Suspendisse diam augue adipiscing ultricies et at. Non volutpat morbi nullam mauris mattis aliquam parturient. Volutpat phasellus pellentesque pellentesque diam venenatis tempor.</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-warning expertise-hire-btn">Hire Todd</a>
                        </div>
                        <div class="expertise-image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expertise-image-2.png" alt="Self Growth" class="expertise-item-image">
                        </div>
                    </div>
                </div>

                <!-- Item 3: Image Left, Text Right -->
                <div class="expertise-item">
                    <div class="expertise-item-content">
                        <div class="expertise-image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expertise-image-3.png" alt="Reduce Stress" class="expertise-item-image">
                        </div>
                        <div class="expertise-text-container">
                            <div class="expertise-text-content">
                                <h3 class="expertise-item-subtitle">Provides tools for reducing stress, increasing joy</h3>
                                <p class="expertise-item-description">Lorem ipsum dolor sit amet consectetur. Tempus bibendum amet pharetra viverra morbi consectetur leo tortor diam. Suspendisse diam augue adipiscing ultricies et at. Non volutpat morbi nullam mauris mattis aliquam parturient. Volutpat phasellus pellentesque pellentesque diam venenatis tempor.</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-warning expertise-hire-btn">Hire Todd</a>
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