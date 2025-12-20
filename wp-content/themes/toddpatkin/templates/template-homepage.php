<?php
/**
 * Template Name: Homepage
 */
get_header(); 
?>

    <!-- Hero Section -->
     <section class="hero-section-main">

         <section class="hero-section d-flex align-items-center text-center text-white ">
        <!-- Hero Background Video -->
        <video id="heroVideo" class="hero-background-video" muted loop playsinline preload="auto">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Bright Layer Top -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bright-layer-top-22de99.png" alt="Bright Layer" class="bright-layer-top">
        <!-- Hero Decorative Image (Frame 48096537) -->
             <div class="hero-decorative-image ">
            
        </div>
             <div class="container ">
                 <div class="row justify-content-center ">
                <div class="col-lg-10">
                         <p class="hero-tagline">TWELVE WEEKS TO LIVING A HAPPIER LIFE</p>
                    <h1 class="mb-4">Discover the power<br>of <span class="text-warning">positive
                            mind</span></h1>
                         <p class="hero-subtitle mb-5">Finding Happiness with Todd<br>Check out Todd's new video series</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                             <a href="https://www.youtube.com/watch?v=9BJm5MzxBQY" target="_blank" rel="noopener noreferrer" class="btn bg-warning hero-watch-video-btn"><span class="btn-content">Watch Videos</span></a>
                             <a href="#contact" class="btn btn-outline-light hero-hire-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; text-align: center !important;"><span class="btn-content" style="text-align: center !important; width: 100%;">Hire Todd</span></a>
                    </div>
                </div>
            </div>
        </div>
         </section>
    </section>

    <!-- Logos Section -->
    <section class="logos-section py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center opacity-50 grayscale-logos g-4 logos-row">
                <div class="col-3 col-md-2 text-center"><i class="fab fa-amazon fa-3x logos-icon"></i></div>
                <div class="col-3 col-md-2 text-center"><i class="fab fa-google fa-3x logos-icon"></i></div>
                <div class="col-3 col-md-2 text-center"><i class="fab fa-facebook fa-3x logos-icon"></i></div>
                <div class="col-3 col-md-2 text-center"><i class="fab fa-twitter fa-3x logos-icon"></i></div>
                <div class="col-3 col-md-2 text-center d-none d-md-block"><i class="fab fa-linkedin fa-3x logos-icon"></i></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="expertise" class="features-section text-center bg-light">
        <!-- Decorative Group Image -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/features-decorative-group.png" alt="Decorative" class="features-decorative-group">
        <div class="container">
            <h2 class="features-heading  mb-5">WHAT THE <span class="text-warning">Todd Patkin</span> CAN DO<br>FOR YOUR TEAM</h2>
            <div class="row g-4 g-lg-5 justify-content-center mb-5">
                <div class="col-4 col-md-6 col-lg-4">
                    <div class="d-flex flex-column align-items-center text-center py-4">
                        <div class="feature-icon mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/break-barriers-56586a.png" alt="Break Barriers" class="img-fluid">
                        </div>
                        <p class="feature-text mb-0">Inspires individuals to embrace change with confidence and positivity.</p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-lg-4">
                    <div class="d-flex flex-column align-items-center text-center py-4">
                        <div class="feature-icon mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/increase-accountability-5368cb.png" alt="Increase Accountability"
                                class="img-fluid">
                        </div>
                        <p class="feature-text mb-0">Encourages self-growth and emotional resilience in everyday life.</p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-lg-4">
                    <div class="d-flex flex-column align-items-center text-center py-4">
                        <div class="feature-icon mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/singular-mission-375067.png" alt="Singular Mission" class="img-fluid">
                        </div>
                        <p class="feature-text feature-text-third mb-0">Provides tools for reducing stress, increasing joy, and improving overall
                            well-being.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo esc_url( home_url( '/expertise' ) ); ?>" class="btn btn-warning features-btn mb-1"><span class="btn-content">Explore
                        More</span></a>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="video-section ">
        <div class="container">
            <div class="text-center mb-3">
                <h2 class="video-section-title mb-2">Watch <span class="text-warning">todd</span> Speak</h2>
                <p class="video-section-subtitle mb-0">Lorem ipsum dolor sit amet consectetur. Mattis eu quisque nulla</p>
            </div>
            <div class="row  g-3 g-lg-4">
                <!-- Mobile: Inner heading first -->
                <div class="col-12 d-lg-none order-1">
                    <h2 class="video-inner-title text-center mb-2">TODD PATKIN AT <span class="text-danger">TEDx</span></h2>
                </div>
                <!-- Video -->
                <div class="col-12 col-lg-6 order-3 order-lg-1 d-flex justify-content-center">
                    <div class="video-wrapper" style="cursor: pointer; display: inline-block;" data-bs-toggle="modal" data-bs-target="#videoModal">
                        <div class="video-thumbnail position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/todd_at_tdx.png" alt="Todd Speaking at TEDx" class="img-fluid" style="border-radius: 20px; object-fit: contain; max-height: 300px; width: auto; max-width: 100%;">
                        </div>
                    </div>
                </div>
                <!-- Desktop text block -->
                <div class="col-12 col-lg-6 order-2 order-lg-2 d-none d-lg-block">
                    <div class="d-flex flex-column justify-content-center">
                        <h2 class="video-inner-title">TODD PATKIN AT <span class="text-danger">TEDx</span></h2>
                        <p class="video-text-content mb-0">Lorem ipsum dolor sit amet consectetur. Volutpat tellus massa sit
                            imperdiet mauris. Ut adipiscing ipsum vulputate ipsum ut id. Id nulla facilisis augue
                            vulputate
                            molestie libero et. Maecenas imperdiet commodo quis mauris fusce lectus mollis ornare.
                            Interdum
                            aliquet sed sapien quisque hac 
                            lobortis suspendisse morbi lorem. lorem ufhrns rhsbsa sdfcsjbci lorem dolor.</p>
                    </div>
                </div>
                <!-- Mobile description after video -->
                <div class="col-12 d-lg-none order-4">
                    <p class="video-text-content mb-0 text-center">Lorem ipsum dolor sit amet consectetur. Volutpat tellus massa sit
                        imperdiet mauris. Ut adipiscing ipsum vulputate ipsum ut id. Id nulla facilisis augue
                        vulputate
                        molestie libero et. Maecenas imperdiet commodo quis mauris fusce lectus mollis ornare.
                        Interdum
                        aliquet sed sapien quisque hac
                        lobortis suspendisse morbi lorem. lorem ufhrns rhsbsa sdfcsjbci lorem dolor.</p>
                </div>
            </div>
            <div class="w-100  text-center py-2 mt-3">
                <a href="#" class="btn btn-warning video-section-btn"><span class="btn-content">View More Featuring
                        Todd</span></a>
            </div>
        </div>
    </section>

    <!-- Book Section - Books Carousel Section -->
    <section id="books" class="book-section  ">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="book-section-header-title mb-2"><span class="text-warning">AUTHOR</span> <span
                        class="text-primary-blue">BOOKS</span></h2>
                <p class="book-section-subtitle mb-0">Lorem ipsum dolor sit amet consectetur. Mattis eu quisque nulla</p>
            </div>
            <!-- Book Carousel - Entire Book Section -->
            <div id="bookCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <!-- Book Item 1 -->
                    <div class="carousel-item active">
                        <div class="row align-items-start">
                            <div class="col-12 col-lg-5 order-1 order-lg-1 mb-4 mb-lg-0">
                                <div class="book-image-wrapper position-relative">
                                    <!-- Mobile Carousel Controls - inside image wrapper -->
                                    <button class="carousel-control-prev book-carousel-control-mobile d-lg-none" type="button" data-bs-target="#bookCarousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next book-carousel-control-mobile d-lg-none" type="button" data-bs-target="#bookCarousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-cover-main-75c4c5.png" alt="Finding Happiness Book"
                                        class="img-fluid book-cover">
                                </div>
                                <!-- Mobile indicators - shown only on mobile, below image -->
                                <div class="carousel-indicators book-carousel-indicators d-lg-none mt-3">
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="0" class="active"
                                        aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7  order-2 order-lg-2 book-content-wrapper">
                                <h2 class="book-section-title ">FINDING<br>HAPPINESS</h2>
                                
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
                                <p class="book-description-text">Today's most successful companies have made a radical
                                    realization about their relationships with their employees. They've realized that
                                    they can get the best work out of their employees by empowering and enabling them
                                    rather than restricting and limiting them.</p>
                                <p class="book-description-text book-description-secondary">It's time for the rest of us
                                    to follow their lead.</p>
                                <p class="book-description-text book-description-italic">The Culture Blueprint is a
                                    systematic guide to building a company culture that fosters committed, enthusiastic
                                    employees. In order to thrive, companies must do more than satisfy their
                                    employees—they must create passionate ones. This book will teach you how to develop
                                    a culture that does just that.</p>
                                <div class="d-flex gap-3 flex-nowrap mb-1">
                                    <a href="#" class="btn btn-warning btn-lg book-preview-btn"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="#" class="btn btn-outline-dark btn-lg book-purchase-btn"><span
                                            class="btn-content">PURCHASE BOOK</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Book Item 2 -->
                    <div class="carousel-item">
                        <div class="row align-items-start">
                            <div class="col-12 col-lg-5 order-1 order-lg-1 mb-4 mb-lg-0">
                                <div class="book-image-wrapper position-relative">
                                    <!-- Mobile Carousel Controls - inside image wrapper -->
                                    <button class="carousel-control-prev book-carousel-control-mobile d-lg-none" type="button" data-bs-target="#bookCarousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next book-carousel-control-mobile d-lg-none" type="button" data-bs-target="#bookCarousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-cover-main-75c4c5.png" alt="Finding Happiness Book"
                                        class="img-fluid book-cover">
                                </div>
                                <!-- Mobile indicators - shown only on mobile, below image -->
                                <div class="carousel-indicators book-carousel-indicators d-lg-none mt-3">
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="0"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="1" class="active"
                                        aria-current="true" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 order-2 order-lg-2 book-content-wrapper">
                                <h2 class="book-section-title">FINDING<br>HAPPINESS</h2>
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
                                <p class="book-description-text">Today's most successful companies have made a radical
                                    realization about their relationships with their employees. They've realized that
                                    they can get the best work out of their employees by empowering and enabling them
                                    rather than restricting and limiting them.</p>
                                <p class="book-description-text book-description-secondary">It's time for the rest of us
                                    to follow their lead.</p>
                                <p class="book-description-text book-description-italic">The Culture Blueprint is a
                                    systematic guide to building a company culture that fosters committed, enthusiastic
                                    employees. In order to thrive, companies must do more than satisfy their
                                    employees—they must create passionate ones. This book will teach you how to develop
                                    a culture that does just that.</p>
                                <div class="d-flex gap-3 flex-nowrap mb-4">
                                    <a href="#" class="btn btn-warning btn-lg book-preview-btn"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="#" class="btn btn-outline-dark btn-lg book-purchase-btn"><span
                                            class="btn-content">PURCHASE BOOK</span></a>
                                </div>
                </div>
                        </div>
                    </div>
                    <!-- Book Item 3 -->
                    <div class="carousel-item">
                        <div class="row align-items-start">
                            <div class="col-12 col-lg-5 order-1 order-lg-1 mb-4 mb-lg-0">
                                <div class="book-image-wrapper position-relative">
                                    <!-- Mobile Carousel Controls - inside image wrapper -->
                                    <button class="carousel-control-prev book-carousel-control-mobile d-lg-none" type="button" data-bs-target="#bookCarousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next book-carousel-control-mobile d-lg-none" type="button" data-bs-target="#bookCarousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-cover-main-75c4c5.png" alt="Finding Happiness Book"
                                        class="img-fluid book-cover">
                                </div>
                                <!-- Mobile indicators - shown only on mobile, below image -->
                                <div class="carousel-indicators book-carousel-indicators book-indicators-mobile d-lg-none">
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="0"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="2" class="active"
                                        aria-current="true" aria-label="Slide 3"></button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 order-2 order-lg-2 book-content-wrapper">
                                <h2 class="book-section-title">FINDING<br>HAPPINESS</h2>
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
                                <p class="book-description-text">Today's most successful companies have made a radical
                                    realization about their relationships with their employees. They've realized that
                                    they can get the best work out of their employees by empowering and enabling them
                                    rather than restricting and limiting them.</p>
                                <p class="book-description-text book-description-secondary">It's time for the rest of us
                                    to follow their lead.</p>
                                <p class="book-description-text book-description-italic">The Culture Blueprint is a
                                    systematic guide to building a company culture that fosters committed, enthusiastic
                                    employees. In order to thrive, companies must do more than satisfy their
                                    employees—they must create passionate ones. This book will teach you how to develop
                                    a culture that does just that.</p>
                                <div class="d-flex gap-3 flex-nowrap mb-4">
                                    <a href="#" class="btn btn-warning btn-lg book-preview-btn"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="#" class="btn btn-outline-dark btn-lg book-purchase-btn"><span
                                            class="btn-content">PURCHASE BOOK</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Desktop Carousel Controls - shown only on desktop -->
                <button class="carousel-control-prev book-carousel-control d-none d-lg-flex" type="button" data-bs-target="#bookCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next book-carousel-control d-none d-lg-flex" type="button" data-bs-target="#bookCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <!-- Carousel Indicators - Desktop only -->
                <div class="carousel-indicators book-carousel-indicators d-none d-lg-flex">
                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section  ">
        <div class="container">
            <h2 class="reviews-section-title text-primary-blue">REVIEWS</h2>
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
                            <p class="review-text">Lorem ipsum dolor sit amet consectetur. Est praesent sapien morbi
                                urna eget. Libero neque fermentum neque nunc egestas. Orci imperdiet eget ullamcorper
                                pharetra non.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-1.png" alt="Maria Gottschalk"
                                    class="review-author-image rounded-3">
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
                            <p class="review-text">Lorem ipsum dolor sit amet consectetur. Est praesent sapien morbi
                                urna eget. Libero neque fermentum neque nunc egestas. Orci imperdiet eget ullamcorper
                                pharetra non.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-2.png" alt="Klaudia Freytag"
                                    class="review-author-image rounded-3">
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
                            <p class="review-text">Lorem ipsum dolor sit amet consectetur. Est praesent sapien morbi
                                urna eget. Libero neque fermentum neque nunc egestas. Orci imperdiet eget ullamcorper
                                pharetra non.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-3.png" alt="Christina Dreher"
                                    class="review-author-image rounded-3">
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

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="testimonial-decorative-pattern"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 testimonial-image-wrapper">
                </div>
                <div class="col-lg-6 testimonial-content">
                    <div class="testimonial-quote-wrapper ">
                        <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. Adipiscing semper sit
                            lacus vitae purus proin ut magna. Lacus ut est metus felis mauris mauris. Amet sed."</p>
                        <div class="testimonial-author-info">
                            <div class="testimonial-author-name">TODD PATKIN</div>
                            <div class="testimonial-author-role">MOTIVATIONAL SPEAKER</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Section -->
    <section id="courses" class="course-section text-white">
        <div class=" ">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="course-section-title mb-2">HAPPINESS <span class="course-section-title-white">COURSE</span></h2>
                <p class="course-section-subtitle mb-0 text-center">Lorem ipsum dolor sit amet consectetur. Mattis eu quisque nulla</p>
            </div>

            <!-- Main Content Layout -->
            <div class="row g-4  g-lg-5">
                <!-- Right Side: Video and Episode Cards - First on Mobile -->
                <div class="col-12 col-lg-6 course-right-content order-1 order-lg-2 d-flex justify-content-center">
                    <!-- Video Container -->
                    <div class="course-video-container" style="cursor: pointer; display: inline-block;" data-bs-toggle="modal" data-bs-target="#courseVideoModal">
                        <div class="course-video-wrapper">
                            <div class="course-video-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_1.png" alt="Course Preview"
                                 class="img-fluid"
                                  >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left Side: Text Content - Second on Mobile -->
                <div class="col-12  col-lg-6 course-left-content order-2 order-lg-1">
                    <div class="course-text-content">
                        <p class="course-description-text">Lorem ipsum dolor sit amet consectetur. Fermentum pellentesque massa ac vitae ac eu vitae tellus facilisis. Molestie sit nulla sed ut nibh sagittis cras lobortis volutpat. Nibh urna non cras ac ac.Lorem ipsum dolor sit amet consectetur. Fermentum pellentesque massa ac vitae ac eu vitae tellus facilisis.</p>
                        <p class="course-description-text">Lorem ipsum dolor sit amet consectetur. Fermentum pellentesque massa ac vitae ac eu vitae tellus facilisi</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA Box - Separate Row -->
            <div class="row mt-4  ">
                <div class="col-12">
                    <div class="course-cta-box w-100">
                        <div class="text-center">
                            <p class="course-cta-text-line1">Purchase the MasterClass and receive a FREE signed copy of</p>
                            <p class="course-cta-text-line2">Congrats! You've Been Promoted</p>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="btn course-cta-button">Buy Now ($29.99)</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Episode Cards Section - Separate Row -->
            <div class="course-episode-cards-container p-2 mt-4">
                <!-- Episode 1 -->
                <div class="course-episode-card">
                        <div class="course-episode-image-wrapper ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_2.png" class="course-episode-image" alt="Week 2">
                        </div>
                        <div class="course-episode-content">
                            <div class="d-flex align-items-center gap-2 mb-0">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>200+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="far fa-clock"></i>
                                            <span>Week 1</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Week 1: Focus on: Being Easier on Yourself</h5>
                                    <p class="course-episode-description">Congratulations, graduates! (And parents of graduates, too.) As you gaze with pride on your diplomas, I'm sure you're also thinking about what comes next. No</p>
                                </div>
                                <a href="#" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">Purchase Now <i class="fas fa-arrow-right text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Episode 2 -->
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_3.png" class="course-episode-image" alt="Week 3">
                        </div>
                        <div class="course-episode-content">
                            <div class="d-flex align-items-center gap-2 mb-0">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider bg-muted"></span>
                                        <div class="course-meta-item">
                                            <i class="far fa-clock"></i>
                                <span>Week 2</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Week 2: Focus on Taking Charge of Your Mind</h5>
                                    <p class="course-episode-description">Congratulations, graduates! (And parents of graduates, too.) As you gaze with pride on your diplomas, I'm sure you're also thinking about what comes next. No</p>
                                </div>
                                <a href="#" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">Purchase Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Episode 3 -->
                    <div class="course-episode-card">
                        <div class="course-episode-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_4.png" class="course-episode-image" alt="Week 4">
                        </div>
                        <div class="course-episode-content">
                            <div class="d-flex align-items-center gap-2 mb-0">
                                <i class="fas fa-code"></i>
                                <span>Course</span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="course-episode-content-info">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-user"></i>
                                            <span>180+</span>
                                        </div>
                                        <span class="course-meta-divider"></span>
                                        <div class="course-meta-item">
                                            <i class="far fa-clock"></i>
                                <span>Week 3</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Week 3: Focus on: Living in the Present</h5>
                                    <p class="course-episode-description">Congratulations, graduates! (And parents of graduates, too.) As you gaze with pride on your diplomas, I'm sure you're also thinking about what comes next. No</p>
                                </div>
                                <a href="#" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">Purchase Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
              
            
            </div>

            <!-- View More Button -->
            <div class="text-center mt-4">
                <a href="#" class="btn course-view-more-button">View More</a>
            </div>
        </div>
    </section>

    <!-- Services Cards Section -->
    <section class="services-cards-section text-white">
        <div class="container">
            <h2 class="services-section-title text-center">SPEAKING, <span class="text-primary-blue">WORKSHOP, COACHING</span> & MORE</h2>
            <div class="services-cards-container">
                <div class="service-card">
                    <div class="service-card-header d-flex justify-content-center align-items-center w-100">
                        <h3>Keynote Speaker</h3>
            </div>
                    <div class="card-body text-center">
                        <ul class="service-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Price to be negotiated (Based on Audience Size)</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Books to be negotiated</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>35% OFF MASTERCLASS VIDEO SERIES</span>
                            </li>
                        </ul>
                        <a href="#contact" class="btn btn-warning service-card-button">Hire Todd</a>
                        <p class="service-card-description">Lorem ipsum dolor sit amet consectetur. Sit rutrum risus cursus neque venenatis. Sagittis id eleifend leo pretium justo. A nibh id velit fermentum tempor.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card-header d-flex justify-content-center align-items-center w-100">
                        <h3>One-Day Workshop</h3>
                    </div>
                    <div class="card-body text-center">
                        <ul class="service-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>$2,500 [UP TO 30 PARTICIPANTS] BOOKS INCLUDED</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>OR BUY 100 BOOKS AND THE SEMINAR IS INCLUDED</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>25% OFF MASTERCLASS VIDEO SERIES</span>
                            </li>
                        </ul>
                        <a href="#contact" class="btn btn-warning service-card-button">Schedule a Consultation</a>
                        <p class="service-card-description">Lorem ipsum dolor sit amet consectetur. Sit rutrum risus cursus neque venenatis. Sagittis id eleifend leo pretium justo. A nibh id velit fermentum tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about-section-background">
            <div class="about-section-container">
                <div class="about-content-wrapper">
                    <div class="about-text-content">
                        <div class="about-section-title-wrapper d-none d-lg-block">
                            <h2 class="about-section-title">
                                <span class="about-title-blue">ABOUT</span>
                                <span class="about-title-yellow">TODD PATKIN</span>
                            </h2>
                        </div>
                        <div class="about-section-title-wrapper-mobile d-block d-lg-none text-center mb-4">
                            <h2 class="about-section-title">
                                <span class="about-title-blue">ABOUT</span>
                                <span class="about-title-yellow">TODD PATKIN</span>
                            </h2>
                        </div>
                        <div class="about-image-wrapper d-block d-lg-none mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" class="about-image">
                        </div>
                        <div class="about-text-paragraphs">
                            <p class="about-paragraph">Today's most successful companies have made a radical realization about their relationships with their employees. They've realized that they can get the best work out of their employees by empowering and enabling them rather than restricting and limiting them.</p>
                            <p class="about-paragraph">It's time for the rest of us to follow their lead.</p>
                            <p class="about-paragraph about-paragraph-last">
                                <strong class="about-culture-blueprint">The Culture Blueprint</strong> is a systematic guide to building a company culture that fosters committed, enthusiastic employees. In order to thrive, companies must do more than satisfy their employees—they must create passionate ones. This book will teach you how to develop a culture that does just that.
                            </p>
                        </div>
                        <a href="#" class="btn about-read-more-btn">READ MORE</a>
                    </div>
                    <div class="about-image-wrapper d-none d-lg-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" class="about-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Podcast Section -->
    <section id="podcast" class="podcast-section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">Top Picked <span
                        class="text-warning">Podcast</span></h2>
                <p class="text-muted">Find</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_1.png" class="img-fluid w-100" alt="Crack the happiness code"
                            style="height: 400px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h5 class="fw-bold mb-2">Crack the happiness code</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse
                                risus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_2.png" class="img-fluid w-100" alt="Crack the happiness code"
                            style="height: 400px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h5 class="fw-bold mb-2">Crack the happiness code</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur. Libero luctus augue suspendisse
                                risus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blogs" class="blog-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">Featured <span
                        class="text-warning">Blogs</span></h2>
                <p class="text-muted">Find</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-featured-1-41dc6a.png" class="card-img-top"
                            alt="Masks: The Other Side of the Coin" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-3">Masks: The Other Side of the Coin</h4>
                            <p class="card-text text-muted mb-4">Define ambitious service that challenge your team to
                                strive for benchmarks should be both to aim higher.</p>
                            <a href="#" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-featured-2-41dc6a.png" class="card-img-top"
                            alt="Season of Peace: The Importance of Quiet Time"
                            style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-3">Season of Peace: The Importance of Quiet Time</h4>
                            <p class="card-text text-muted mb-4">Define ambitious service that challenge your team to
                                strive for benchmarks should be both to aim higher.</p>
                            <a href="#" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-featured-3-41dc6a.png" class="card-img-top"
                            alt="5 Things Your Employees Are Dying to Hear from You"
                            style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-3">5 Things Your Employees Are Dying to Hear from You</h4>
                            <p class="card-text text-muted mb-4">Define ambitious service that challenge your team to
                                strive for benchmarks should be both to aim higher.</p>
                            <a href="#" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section  id="contact" class="contact-section text-white text-center" style="cursor: pointer;">
        <div class="container">
            <h2 class="display-4 fw-bold text-uppercase mb-4">Reach Out - <span class="text-warning">Magic Happens
                    Here</span></h2>
            <p style="color: #FFFFFF !important;" class="lead mb-4 ">Lorem ipsum dolor sit amet consectetur. Nec ut aliquam quis
                aenean.</p>
            <p class="lead mb-5 text-light opacity-75">Lorem Nec ut aliquam quis aenean.</p>
            <div class="row justify-content-center g-4 mb-5">
                <div class="col-12 col-md-5">
                    <div class="contact-card p-5 border border-secondary rounded bg-dark bg-opacity-50 h-100 d-flex flex-column">
                        <div class="mb-4">
                            <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-calendar-alt fa-2x text-dark"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-uppercase mb-3">Schedule a Consultation</h4>
                        <p class="text-muted mb-4 flex-grow-1">Lorem ipsum dolor sit amet consectetur. Odio scelerisque enim nisl
                            etiam. Scelerisque cras dolor sed</p>
                        <a href="#" class="btn btn-warning w-100 contact-card-btn" data-bs-toggle="modal" data-bs-target="#contactModal"><span class="btn-content">Schedule a Call</span></a>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="contact-card p-5 border border-secondary rounded bg-dark bg-opacity-50 h-100 d-flex flex-column">
                        <div class="mb-4">
                            <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-envelope fa-2x text-dark"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-uppercase mb-3">Contact Us Directly</h4>
                        <p class="text-muted mb-4 flex-grow-1">Lorem ipsum dolor sit amet consectetur. Odio scelerisque enim nisl
                            etiam. Scelerisque cras dolor sed</p>
                        <a href="mailto:todd@toddpatkin.com" class="btn btn-warning w-100 contact-card-btn"><span
                                class="btn-content">Contact Now</span></a>
                    </div>
                </div>
            </div>
            <p class="text-light mb-3">Have questions? We're here to help.</p>
            <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle text-warning me-2"></i>
                    <span>Quick response guaranteed</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle text-warning me-2"></i>
                    <span>Flexible scheduling available</span>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>