<?php get_header(); ?>

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
                         <p class="hero-tagline">TWELVE WEEKS TO LIVING A HAPPIER LIFE.</p>
                    <h1 class="hero-main-heading mb-4">Discover the power <br class="d-none d-md-block">of <span class="text-warning">positive mind</span></h1>
                         <p class="hero-subtitle mb-2">Finding Happiness with Todd</p>
                         <p class="hero-subtitle-secondary mb-4">Check out Todd's new video series</p>
                    <div class="hero-buttons-wrapper d-flex justify-content-center gap-3 flex-wrap mb-5">
                             <a href="https://www.youtube.com/watch?v=9BJm5MzxBQY" target="_blank" rel="noopener noreferrer" class="btn bg-warning hero-watch-video-btn"><span class="btn-content">Watch Videos</span></a>
                             <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-outline-light hero-hire-btn"><span class="btn-content">Hire Todd</span></a>
                    </div>
                    <div class="hero-scroll-indicator">
                        <p class="hero-scroll-text mb-2">Scroll down</p>
                        <div class="hero-scroll-icon">
                            <svg width="24" height="40" viewBox="0 0 24 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="4" width="4" height="12" rx="2" fill="white"/>
                                <path d="M12 20L12 36" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M8 32L12 36L16 32" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
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
    <section id="expertise" class="features-section text-center  bg-light">
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
                        <p class="feature-text mb-0">Help your team members overcome perfectionism, manage stress, and develop the resilience needed to thrive during organizational transitions and personal challenges.</p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-lg-4">
                    <div class="d-flex flex-column align-items-center text-center py-4">
                        <div class="feature-icon mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/increase-accountability-5368cb.png" alt="Increase Accountability"
                                class="img-fluid">
                        </div>
                        <p class="feature-text mb-0">Create a workplace culture where employees feel valued, supported, and empowered to bring their best selves to work every day—resulting in higher engagement and retention.</p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-lg-4">
                    <div class="d-flex flex-column align-items-center text-center py-4">
                        <div class="feature-icon mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/singular-mission-375067.png" alt="Singular Mission" class="img-fluid">
                        </div>
                        <p class="feature-text feature-text-third mb-0">Equip your team with practical, proven strategies for managing anxiety, improving work-life balance, and developing sustainable happiness habits that last.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo esc_url( toddpatkin_get_page_url( 'expertise', 'templates/template-expertise.php' ) ); ?>" class="btn btn-warning features-btn mb-1"><span class="btn-content">Explore
                        More</span></a>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="video-section ">
        <div class="container">
            <div class="text-center mb-3">
                <h2 class="video-section-title mb-2">Watch <span class="text-warning">todd</span> Speak</h2>
                <p class="video-section-subtitle mb-0">See why audiences call Todd's message 'life-changing'</p>
            </div>
            <div class="row  g-2 g-lg-2">
                <!-- Mobile: Inner heading first -->
                <div class="col-12 d-lg-none order-1">
                    <h2 class="video-inner-title text-center mb-2">TODD PATKIN AT <span class="text-danger">TEDx</span></h2>
                </div>
                <!-- Video -->
                <div class="col-12 col-lg-6  order-3 order-lg-1 d-flex justify-content-end px-5">
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
                        <p class="video-text-content mb-0">In this impactful TEDx talk, Todd shares his honest journey from being a high-achieving businessman to experiencing a complete personal breakdown. Through vulnerable storytelling, he challenges the common belief that success and a "perfect" life automatically lead to happiness. Todd explains how external achievements often mask internal struggles and emotional burnout. He highlights the disconnect between societal definitions of success and genuine well-being. By reflecting on his experiences, he uncovers what truly contributes to lasting happiness. His insights emphasize self-awareness, emotional health, and purposeful living. The talk encourages viewers to reassess their priorities beyond material success. Ultimately, it delivers a powerful reminder that true happiness comes from inner balance, not outward perfection.</p>
                    </div>
                </div>
                <!-- Mobile description after video -->
                <div class="col-12 d-lg-none order-4">
                    <p class="video-text-content mb-0">In this impactful TEDx talk, Todd shares his honest journey from being a high-achieving businessman to experiencing a complete personal breakdown. Through vulnerable storytelling, he challenges the common belief that success and a "perfect" life automatically lead to happiness. Todd explains how external achievements often mask internal struggles and emotional burnout. He highlights the disconnect between societal definitions of success and genuine well-being. By reflecting on his experiences, he uncovers what truly contributes to lasting happiness. His insights emphasize self-awareness, emotional health, and purposeful living. The talk encourages viewers to reassess their priorities beyond material success. Ultimately, it delivers a powerful reminder that true happiness comes from inner balance, not outward perfection.</p>
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
                <p class="book-section-subtitle mb-0">Discover the story that's changing lives</p>
            </div>
            <!-- Book Carousel - Entire Book Section -->
            <div id="bookCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <!-- Book Item 1 -->
                    <div class="carousel-item active">
                        <div class="row align-items-start">
                            <div class="col-12 col-lg-5 order-1 order-lg-1 mb-4 mb-lg-0">
                                <div class="book-image-wrapper  position-relative">
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
                                <!-- Carousel Indicators - Desktop below image, Mobile below image -->
                                <div class="carousel-indicators book-carousel-indicators mt-3">
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
                                <p class="book-subtitle-text mb-2" style="font-size: 14px; color: #666;">One Man's Quest to Beat Depression and Anxiety and—Finally—Let the Sunshine In</p>
                                
                                <div class="d-flex align-items-center gap-2 mb-4 book-rating-wrapper">
                                    <span class="book-rating-number">4.9</span>
                                    <div class="book-rating-stars d-flex gap-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="book-description-text">Discover what real happiness truly looks like. At age 36, Todd Patkin had everything society calls success—a thriving family business, financial security, and a loving family—yet a complete breakdown revealed years of hidden anxiety, perfectionism, and depression.</p>
                                <p class="book-description-text book-description-secondary">In Finding Happiness, Todd courageously shares his raw personal journey alongside expert insights from renowned psychologist Dr. Howard J. Rankin. This compelling blend of memoir and practical guide shows how to break free from emotional pain and the pressure to appear perfect.</p>
                                <p class="book-description-text book-description-italic">You'll discover the exact strategies that transformed Todd's life and have since helped thousands find lasting joy. <strong>The book includes his proven, step-by-step "Twelve Weeks to Living a Happier Life" program</strong>—your clear roadmap to authentic happiness.</p>
                                <p class="book-description-text">If you're tired of struggling on the inside while looking fine on the outside, this book is the way forward.</p>
                                <div class="d-flex gap-3 flex-nowrap mb-1">
                                    <a href="<?php echo esc_url( toddpatkin_get_page_url( 'preview-book', 'templates/template-preview-book.php' ) ); ?>" class="btn btn-warning btn-lg book-preview-btn"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="<?php echo esc_url( toddpatkin_get_page_url( 'about-book', 'templates/template-about-book.php' ) ); ?>" class="btn btn-outline-dark btn-lg book-purchase-btn"><span
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
                                <!-- Carousel Indicators - Desktop below image, Mobile below image -->
                                <div class="carousel-indicators book-carousel-indicators mt-3">
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
                                    <a href="<?php echo esc_url( toddpatkin_get_page_url( 'preview-book', 'templates/template-preview-book.php' ) ); ?>" class="btn btn-warning btn-lg book-preview-btn"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="<?php echo esc_url( toddpatkin_get_page_url( 'about-book', 'templates/template-about-book.php' ) ); ?>" class="btn btn-outline-dark btn-lg book-purchase-btn"><span
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
                                <!-- Carousel Indicators - Desktop below image, Mobile below image -->
                                <div class="carousel-indicators book-carousel-indicators mt-3">
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
                                    <a href="<?php echo esc_url( toddpatkin_get_page_url( 'preview-book', 'templates/template-preview-book.php' ) ); ?>" class="btn btn-warning btn-lg book-preview-btn"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="<?php echo esc_url( toddpatkin_get_page_url( 'about-book', 'templates/template-about-book.php' ) ); ?>" class="btn btn-outline-dark btn-lg book-purchase-btn"><span
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
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="review-rating-number">5.0</span>
                                </div>
                            </div>
                            <p class="review-text">Todd is a gifted storyteller whose powerful, uplifting stories motivate and inspire us to strive for the stars. He provides a true-life path that can take any one of us from despair to hope, from anguish to joy.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-1.png" alt="Dr. Richard Levin"
                                    class="review-author-image rounded-3">
                                <div class="review-author-info">
                                    <h5 class="review-author-name">Dr. Richard Levin</h5>
                                    <small class="review-author-role">Executive Coach & Leadership Developer</small>
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
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="review-rating-number">5.0</span>
                </div>
                            </div>
                            <p class="review-text">Depression with high achievers is sadly too common. Todd courageously pulls back the curtain and reveals a practical prescription to a more balanced and satisfying life through his own heartfelt story.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-2.png" alt="Jeffrey S. Davis"
                                    class="review-author-image rounded-3">
                                <div class="review-author-info">
                                    <h5 class="review-author-name">Jeffrey S. Davis</h5>
                                    <small class="review-author-role">CEO & Founder, Mage LLC | Adjunct Professor, Babson College</small>
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
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="review-rating-number">5.0</span>
                </div>
                            </div>
                            <p class="review-text">Todd radiates positive energy and love, in person and throughout the pages of his book. His success in overcoming life's obstacles is truly inspirational and will further his lifelong goal to help others.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-3.png" alt="Dr. Mary Ann McDonnell"
                                    class="review-author-image rounded-3">
                                <div class="review-author-info">
                                    <h5 class="review-author-name">Dr. Mary Ann McDonnell</h5>
                                    <small class="review-author-role">CEO & Cofounder, STEP Up for Kids, Inc.</small>
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
                        <p class="testimonial-quote">"I spent 36 years chasing success, only to discover I was running away from happiness. This journey from breakdown to breakthrough taught me that how you look at your life matters more than what your life looks like."</p>
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
                <p class="course-section-subtitle mb-0 text-center">Master the art of sustainable happiness in 12 transformative weeks</p>
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
                        <p class="course-description-text">Transform your relationship with stress, anxiety, and negative thinking through Todd's comprehensive 12-week video course. Based on the proven program that helped him recover from complete breakdown and refined through years of helping others, this MasterClass takes you step-by-step through practical strategies for building sustainable happiness.</p>
                        <p class="course-description-text">Each week builds on the last, creating sustainable change rather than quick fixes. You'll get lifetime access to all videos, downloadable workbooks, and bonus materials.</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA Box - Separate Row -->
            <div class="row mt-4  ">
                <div class="col-12">
                    <div class="course-cta-box w-100">
                        <div class="text-center">
                            <p class="course-cta-text-line1">Purchase the MasterClass and receive a FREE signed copy of</p>
                            <p class="course-cta-text-line2">Finding Happiness</p>
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
                                <span>Powerful and inspirational 60-minute keynote talks</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Broken into organized sections</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Tailored to your group's specific needs and preferences</span>
                            </li>
                        </ul>
                        <a href="#contact" class="btn btn-warning service-card-button">Book Todd</a>
                        <p class="service-card-description">Todd's passionate, no-holds-barred style makes an impact while getting audiences to laugh. He shares extraordinary life stories with the relevant, applicable lessons they've taught him about resilience, happiness, and human connection.</p>
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
                                <span>6-hour full-day intensive happiness bootcamp</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Interactive workshops with Q&A sessions included</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Includes workbook and ongoing resource access</span>
                            </li>
                        </ul>
                        <a href="#contact" class="btn btn-warning service-card-button">Schedule a Consultation</a>
                        <p class="service-card-description">Go deeper with Todd's transformational workshop. Your team will learn practical strategies for managing stress, building resilience, and creating lasting positive change. Includes Todd's proprietary workbook and actionable takeaways participants can implement immediately.</p>
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
                            <p class="about-paragraph">Todd Patkin knows firsthand that having a 'perfect' life doesn't guarantee happiness—in fact, his perfect exterior once hid a devastating struggle with depression and anxiety.</p>
                            <p class="about-paragraph">After graduating from Tufts University, Todd joined the family business and spent 18 years helping grow it to new heights. Despite achieving extraordinary business success, Todd was privately battling perfectionism, low self-esteem, chronic stress, and hidden depression. At age 36, everything came crashing down in a complete breakdown.</p>
                            <p class="about-paragraph">That breakdown became his breakthrough.</p>
                            <p class="about-paragraph about-paragraph-last">
                                <strong class="about-culture-blueprint">The Culture Blueprint:</strong> Todd transformed his insights into a comprehensive system that's helped thousands build sustainable happiness. His vulnerability in sharing his story—including the painful and embarrassing moments—has opened doors for others to acknowledge their own struggles and seek the help they deserve. Since the sale of the family business to Advance Auto Parts in 2005, Todd has devoted himself to his true passions: philanthropy, giving back, spending time with family and friends, and helping people discover genuine happiness.
                            </p>
                        </div>
                        <a href="<?php echo esc_url( toddpatkin_get_page_url( 'about-author', 'templates/template-about-author.php' ) ); ?>" class="btn about-read-more-btn">READ MORE</a>
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
                <p class="text-muted">Listen to Todd share insights on happiness, mental health, and personal transformation</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_1.png" class="img-fluid w-100 podcast-card-img" alt="Crack the happiness code">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_2.png" class="img-fluid w-100 podcast-card-img" alt="Why Helping Others is the Secret to Helping Yourself">
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( toddpatkin_get_page_url( 'podcast', 'templates/template-podcast.php' ) ); ?>" class="btn btn-warning btn-lg"><span class="btn-content">View More</span></a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blogs" class="blog-section bg-white">
        <div class="container ">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">
                Featured <span class="text-warning">Blogs</span>
            </h2>
            <p class="text-muted">Listen to Todd share insights on happiness, mental health, and personal transformation</p>
        </div>

        <div class="row g-4">
            <?php
            $default_image = get_template_directory_uri() . '/assets/images/default-blog.webp';

            $args = [
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish'
            ];

            $home_blogs = new WP_Query($args);

            if ($home_blogs->have_posts()) :
                while ($home_blogs->have_posts()) : $home_blogs->the_post();
            ?>

                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">

                        <img src="<?php echo has_post_thumbnail()
                            ? get_the_post_thumbnail_url(get_the_ID(), 'medium')
                            : esc_url($default_image); ?>"
                            class="card-img-top blog-card-img"
                            alt="<?php the_title_attribute(); ?>"
                            style="height: 300px; object-fit: cover;">

                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning text-dark me-2">
                                    <?php
                                    $category = get_the_category();
                                    echo $category ? esc_html($category[0]->name) : 'Blogs';
                                    ?>
                                </span>
                            </div>

                            <h4 class="card-title fw-bold mb-2">
                                <?php the_title(); ?>
                            </h4>

                            <p class="card-text text-muted mb-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-sm">
                                <span class="btn-content">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url( toddpatkin_get_page_url( 'blog', 'templates/template-blog.php' ) ); ?>"
                class="btn btn-warning btn-lg">
                <span class="btn-content">View More</span>
            </a>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section  id="contact" class="contact-section text-white text-center" style="cursor: pointer;">
        <div class="container">
            <h2 class="display-4 fw-bold text-uppercase mb-4">Reach Out - <span class="text-warning">Magic Happens
                    Here</span></h2>
            <p style="color: #FFFFFF !important;" class="lead mb-4 ">Let's start a conversation about bringing happiness to your organization</p>
            <div class="row justify-content-center g-4 mb-5">
                <div class="col-12 col-md-5">
                    <div class="contact-card p-5 border border-secondary rounded bg-dark bg-opacity-50 h-100 d-flex flex-column">
                        <div class="mb-4">
                            <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-calendar-alt fa-2x text-dark"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-uppercase mb-3">Get Consultation</h4>
                        <p class="text-muted mb-4 flex-grow-1">Schedule a free 30-minute call with Todd to discuss your organization's needs. We'll explore how Todd's programs can help your team build resilience, manage stress, and create a healthier workplace culture.</p>
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
                        <p class="text-muted mb-4 flex-grow-1">Have questions about Todd's speaking, workshops, or courses? Our team typically responds within 24 hours and will help you find the perfect solution for your needs.</p>
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