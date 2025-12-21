<?php

/**
 * Template Name: Boot Camp Book
 */
get_header();
?>
<!-- Boot Camp Book Hero Section -->
<section class="about-book-hero-section" style="margin-bottom: 0; padding-bottom: 32px !important;">
    <div class="container">
        <!-- Page Title -->
        <h1 class="about-book-page-title text-center">
            <span class="text-primary-blue">ABOUT</span> <span class="text-warning">BOOK</span>
        </h1>

        <!-- Book Content Area - Image on left, content on right -->
        <div class="row align-items-start">
            <!-- Book Image Column - Left Side -->
            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <div class="book-image-wrapper position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png" alt="Boot Camp Book" class="img-fluid book-cover">
                </div>
            </div>

            <!-- Book Details Column - Right Side -->
            <div class="col-12 col-lg-7 book-content-wrapper">
                <!-- Book Title -->
                <h2 class="book-section-title">BOOT CAMP <br> TWELVE WEEKS OF <br> FINDING HAPPINESS</h2>

                <!-- Rating -->
                <div class="d-flex align-items-center gap-2 mb-4 book-rating-wrapper">
                    <span class="book-rating-number">4.0</span>
                    <div class="book-rating-stars d-flex gap-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                <!-- Book Intro - Highlighted Text -->
                <p class="book-intro-highlight mb-4">
                    Discover the inspiring story of a man who learned that having a perfect life isn't the same thing as having perfect happiness.
                </p>

                <!-- Book Description Paragraphs -->
                <p class="book-description-text mb-3">
                    Lorem ipsum dolor sit amet consectetur. Scelerisque ultrices sapien ut lectus. Ac elementum egestas porttitor malesuada tellus ipsum. Nulla tellus tempor ultrices tortor augue nunc mus. Eu accumsan dui at libero. Suspendisse massa a amet ultrices tempor tortor id. Hac est id erat lacinia enim et congue.
                </p>

                <p class="book-description-subheading mb-3">
                    hwbsyau dcunsqi lorem ipsumn dolor
                </p>

                <p class="book-description-text mb-4">
                    Lorem ipsum dolor sit amet consectetur. Scelerisque ultrices sapien ut lectus. Ac elementum egestas porttitor malesuada tellus ipsum. Nulla tellus tempor ultrices tortor augue nunc mus. Eu accumsan dui at libero. Suspendisse massa a amet ultrices tempor tortor id. Hac est id erat lacinia enim et congue.
                </p>

                <!-- Action Buttons -->
                <div class="about-book-actions d-flex flex-column gap-3">
                    <a href="<?php echo esc_url( home_url( '/preview-boot-camp' ) ); ?>" class="btn btn-preview-book text-uppercase">Preview Book</a>
                    <a href="mailto:todd@toddpatkin.com" class="btn btn-email-book text-uppercase">Send Email to buy the book</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews-section" style="padding-top: 0 !important; margin-top: 0 !important; padding-bottom: 3rem;">
    <div class="container">
        <h2 class="reviews-section-title text-primary-blue text-center text-uppercase mb-5">REVIEWS</h2>
        <div class="reviews-cards-wrapper">
            <div class="row g-4">
                <!-- Review Card 1 -->
                <div class="col-12 col-md-4">
                    <div class="review-card h-100 d-flex flex-column">
                        <div class="review-card-header d-flex align-items-center justify-content-between mb-3">
                            <i class="fas fa-quote-left review-quote-icon"></i>
                            <div class="d-flex align-items-center gap-2">
                                <div class="review-stars d-flex gap-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-rating-number">4.0</span>
                            </div>
                        </div>
                        <p class="review-text">Lorem ipsum dolor sit amet consectetur. Est praesent sapien morbi urna eget. Libero neque fermentum neque nunc egestas. Orci imperdiet eget ullamcorper pharetra non.</p>
                        <hr class="review-divider">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gottschalk_Marie.jpg" alt="Maria Gottschalk" class="review-author-image rounded-3">
                            <div class="review-author-info">
                                <h5 class="review-author-name">Maria Gottschalk</h5>
                                <small class="review-author-role">Customer</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="col-12 col-md-4">
                    <div class="review-card h-100 d-flex flex-column">
                        <div class="review-card-header d-flex align-items-center justify-content-between mb-3">
                            <i class="fas fa-quote-left review-quote-icon"></i>
                            <div class="d-flex align-items-center gap-2">
                                <div class="review-stars d-flex gap-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-rating-number">4.0</span>
                            </div>
                        </div>
                        <p class="review-text">Lorem ipsum dolor sit amet consectetur. Est praesent sapien morbi urna eget. Libero neque fermentum neque nunc egestas. Orci imperdiet eget ullamcorper pharetra non.</p>
                        <hr class="review-divider">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gottschalk_Marie.jpg" alt="Klaudia Freytag" class="review-author-image rounded-3">
                            <div class="review-author-info">
                                <h5 class="review-author-name">Klaudia Freytag</h5>
                                <small class="review-author-role">Customer</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div class="col-12 col-md-4">
                    <div class="review-card h-100 d-flex flex-column">
                        <div class="review-card-header d-flex align-items-center justify-content-between mb-3">
                            <i class="fas fa-quote-left review-quote-icon"></i>
                            <div class="d-flex align-items-center gap-2">
                                <div class="review-stars d-flex gap-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-rating-number">4.0</span>
                            </div>
                        </div>
                        <p class="review-text">Lorem ipsum dolor sit amet consectetur. Est praesent sapien morbi urna eget. Libero neque fermentum neque nunc egestas. Orci imperdiet eget ullamcorper pharetra non.</p>
                        <hr class="review-divider">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gottschalk_Marie.jpg" alt="Christina Dreher" class="review-author-image rounded-3">
                            <div class="review-author-info">
                                <h5 class="review-author-name">Christina Dreher</h5>
                                <small class="review-author-role">Customer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More from Todd Section -->
<section class="more-from-todd-section">
    <div class="container">
        <h2 class="more-from-todd-title text-center">
            <span class="text-primary-blue">MORE FROM</span> <span class="text-warning">TODD</span>
        </h2>

        <div class="row g-4">
            <!-- Finding Happiness Book Card -->
            <div class="col-12 col-md-6 col-lg-5">
                <a href="<?php echo esc_url( home_url( '/about-book' ) ); ?>" class="text-decoration-none" style="cursor: pointer; display: block;">
                    <div class="more-from-todd-card">
                        <div class="more-from-todd-card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-cover-main-75c4c5.png" alt="Finding Happiness" class="more-from-todd-card-image">
                        </div>
                        <div class="more-from-todd-card-content">
                            <h3 class="more-from-todd-card-title">Finding Happiness</h3>
                            <p class="more-from-todd-card-author">Todd patkin</p>
                            <div class="more-from-todd-card-rating">
                                <div class="more-from-todd-card-rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

