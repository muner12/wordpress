<?php

/**
 * Template Name: About Book
 */
get_header();
?>
<!-- About Book Hero Section -->
<section class="about-book-hero-section">
    <div class="container">
        <!-- Page Title -->
        <h1 class="about-book-page-title text-center">
            <span class="text-primary-blue">ABOUT</span> <span class="text-warning">BOOK</span>
        </h1>

        <!-- Book Content Area - Using same structure as index.html book section -->
        <div class="row align-items-start">
            <!-- Book Image Column - Same structure as index.html -->
            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <div class="book-image-wrapper position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-cover-main-75c4c5.png" alt="Finding Happiness Book" class="img-fluid book-cover">
                </div>
            </div>

            <!-- Book Details Column - Same structure as index.html -->
            <div class="col-12 col-lg-7 book-content-wrapper">
                <!-- Book Title - Using same class as index.html -->
                <h2 class="book-section-title">FINDING <br> HAPPINESS</h2>

                <!-- Rating - Same structure as index.html -->
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

                <!-- Excerpts Section with Toggle -->
                <div class="excerpts-section border rounded mb-4">
                    <div class="excerpts-header d-flex justify-content-between align-items-center p-3 border-bottom">
                        <h3 class="excerpts-title mb-0">Excerpts</h3>
                        <button class="excerpts-toggle-btn btn btn-sm rounded-circle border" type="button" data-bs-toggle="collapse" data-bs-target="#excerptsList" aria-expanded="true" aria-controls="excerptsList">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="collapse show" id="excerptsList">
                        <ul class="excerpts-list list-unstyled p-3 mb-0">
                            <li class="mb-2"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/PotatoSaladorColeSlaw.pdf" target="_blank" class="text-decoration-none">1. Potato Salad or Coleslaw: Inside a Breakdown</a></li>
                            <li class="mb-2"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/WorkBoots.pdf" target="_blank" class="text-decoration-none">2. A Footwear Faux Pas: A Look at How Our Memories Can Deceive Us and Influence Our Self-Worth</a></li>
                            <li class="mb-2"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/AnExpertViewonExercise.pdf" target="_blank" class="text-decoration-none">3. An Expert View on Exercise</a></li>
                            <li class="mb-2"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/SelfHelpatWork.pdf" target="_blank" class="text-decoration-none">4. Self-Help at Work: How Tony Robbins' Teachings Helped Todd Manage Stress</a></li>
                            <li class="mb-2"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/PayingitForward.pdf" target="_blank" class="text-decoration-none">5. Paying It Forward: How Todd Spreads Happiness in the Workplace</a></li>
                            <li class="mb-2"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/DreamOn.pdf" target="_blank" class="text-decoration-none">6. Dream On: Aerosmith Aids a Friend</a></li>
                            <li class="mb-0"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/HappinessisaChoice.pdf" target="_blank" class="text-decoration-none">7. Happiness Is a Choice</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="about-book-actions d-flex flex-column gap-3">
                    <a href="<?php echo esc_url( home_url( '/preview-book' ) ); ?>" class="btn btn-preview-book text-uppercase">Preview Book</a>
                    <a href="mailto:todd@toddpatkin.com" class="btn btn-email-book text-uppercase">Send Email to buy the book</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section - Same structure as index.html -->
<section class="reviews-section py-5">
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
                        <p class="review-text">Todd's story is incredibly moving and relatable. His insights on finding happiness amidst life's challenges have truly transformed my perspective. A must-read for anyone seeking genuine fulfillment.</p>
                        <hr class="review-divider">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-1.png" alt="Maria Gottschalk" class="review-author-image rounded-3">
                            <div class="review-author-info">
                                <h5 class="review-author-name">Maria Gottschalk</h5>
                                <small class="review-author-role">Reader</small>
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
                        <p class="review-text">An eye-opening read that provides practical wisdom for everyday life. Todd's honesty about his struggles makes this book both authentic and inspiring. Highly recommended!</p>
                        <hr class="review-divider">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-2.png" alt="Klaudia Freytag" class="review-author-image rounded-3">
                            <div class="review-author-info">
                                <h5 class="review-author-name">Klaudia Freytag</h5>
                                <small class="review-author-role">Reader</small>
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
                        <p class="review-text">This book changed my life. Todd's journey from darkness to light is beautifully written and offers hope to anyone going through difficult times. A powerful testament to resilience.</p>
                        <hr class="review-divider">
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-3.png" alt="Christina Dreher" class="review-author-image rounded-3">
                            <div class="review-author-info">
                                <h5 class="review-author-name">Christina Dreher</h5>
                                <small class="review-author-role">Reader</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More From Todd Section -->
<section class="more-from-todd-section">
    <div class="container">
        <h2 class="more-from-todd-title text-center">
            <span class="text-primary-blue">MORE FROM</span> <span class="text-warning">TODD</span>
        </h2>

        <div class="row g-4">
            <!-- Boot Camp Book Card -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="more-from-todd-card">
                    <div class="more-from-todd-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png" alt="Boot Camp" class="more-from-todd-card-image">
                    </div>
                    <div class="more-from-todd-card-content">
                        <h3 class="more-from-todd-card-title">Boot Camp</h3>
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
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>