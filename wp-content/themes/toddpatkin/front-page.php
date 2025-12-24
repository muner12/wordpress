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
                         <p class="hero-tagline">TWELVE WEEKS TO LIVING A HAPPIER LIFE</p>
                    <h1 class="hero-main-heading mb-4">Discover the power <br class="d-none d-md-block">of <span class="text-warning">positive mind</span></h1>
                         <p class="hero-subtitle mb-2">Finding Happiness with Todd</p>
                         <p class="hero-subtitle-secondary mb-4">Check out Todd's new video series</p>
                    <div class="hero-buttons-wrapper d-flex justify-content-center gap-3 flex-wrap mb-5">
                             <a href="https://www.youtube.com/watch?v=9BJm5MzxBQY" target="_blank" rel="noopener noreferrer" class="btn bg-warning hero-watch-video-btn"><span class="btn-content">Watch Videos</span></a>
                             <a href="<?php echo esc_url( home_url( '/hire-todd' ) ); ?>" class="btn btn-outline-light hero-hire-btn"><span class="btn-content">Hire Todd</span></a>
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
                                </div>
                            </div>
                            <div class="col-12 col-lg-7  order-2 order-lg-2 book-content-wrapper">
                                <div class="book-header-section mb-4">
                                <h2 class="book-section-title ">FINDING<br>HAPPINESS</h2>
                                    <div class="book-subtitle-badge d-inline-flex align-items-center gap-2 px-3 py-2 mb-3" style="background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); border-radius: 8px; box-shadow: 0 2px 8px rgba(255, 193, 7, 0.3);">
                                        <i class="fas fa-book-open" style="color: #275BA7; font-size: 14px;"></i>
                                        <p class="book-subtitle-text mb-0" style="font-size: 13px; color: #275BA7; font-weight: 600; letter-spacing: 0.5px;">One Man's Quest to Beat Depression and Anxiety and—Finally—Let the Sunshine In</p>
                                    </div>
                                </div>
                                
                                <div class="book-rating-card d-inline-flex align-items-center gap-3 px-4 py-3 mb-4" style="background: #F8F9FA; border-left: 4px solid #FFC107; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                    <div class="d-flex align-items-center gap-2">
                                    <span class="book-rating-number">4.9</span>
                                    <div class="book-rating-stars d-flex gap-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                    <span style="color: #666; font-size: 14px; font-weight: 500;">Excellent Rating</span>
                                </div>
                                
                                <div class="book-description-content" style="position: relative;">
                                    <div class="book-description-item mb-4" style="padding-left: 24px; border-left: 3px solid #FFC107; position: relative;">
                                        <div class="book-icon-badge" style="position: absolute; left: -12px; top: 0; width: 24px; height: 24px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(255, 193, 7, 0.4);">
                                            <i class="fas fa-lightbulb" style="color: #275BA7; font-size: 12px;"></i>
                                        </div>
                                        <p class="book-description-text mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D;">Discover what real happiness truly looks like. At age 36, Todd Patkin had everything society calls success—a thriving family business, financial security, and a loving family—yet a complete breakdown revealed years of hidden anxiety, perfectionism, and depression.</p>
                                    </div>
                                    
                                    <div class="book-description-item mb-4" style="padding-left: 24px; border-left: 3px solid #275BA7; position: relative;">
                                        <div class="book-icon-badge" style="position: absolute; left: -12px; top: 0; width: 24px; height: 24px; background: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(39, 91, 167, 0.4);">
                                            <i class="fas fa-heart" style="color: #FFC107; font-size: 12px;"></i>
                                        </div>
                                        <p class="book-description-text book-description-secondary mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D;">In Finding Happiness, Todd courageously shares his raw personal journey alongside expert insights from renowned psychologist Dr. Howard J. Rankin. This compelling blend of memoir and practical guide shows how to break free from emotional pain and the pressure to appear perfect.</p>
                                    </div>
                                    
                                    <div class="book-highlight-box p-4 mb-4" style="background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border: 2px solid #FFC107; border-radius: 12px; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.15); position: relative;">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="quote-icon" style="flex-shrink: 0; width: 40px; height: 40px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-quote-left" style="color: #275BA7; font-size: 18px;"></i>
                                            </div>
                                            <div>
                                                <p class="book-description-text book-description-italic mb-2" style="font-size: 16px; line-height: 1.7; color: #2D2D2D; font-style: italic;">You'll discover the exact strategies that transformed Todd's life and have since helped thousands find lasting joy. <strong style="color: #275BA7; font-weight: 600;">The book includes his proven, step-by-step "Twelve Weeks to Living a Happier Life" program</strong>—your clear roadmap to authentic happiness.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="book-cta-text mb-4" style="padding: 16px 20px; background: linear-gradient(135deg, #275BA7 0%, #1E4A7A 100%); border-radius: 8px; box-shadow: 0 4px 8px rgba(39, 91, 167, 0.2);">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="fas fa-check-circle" style="color: #FFC107; font-size: 18px;"></i>
                                            <span style="color: #FFFFFF; font-weight: 600; font-size: 15px; letter-spacing: 0.5px;">READY TO TRANSFORM YOUR LIFE?</span>
                                        </div>
                                        <p class="book-description-text mb-0" style="font-size: 15px; line-height: 1.6; color: #FFFFFF; margin: 0;">If you're tired of struggling on the inside while looking fine on the outside, this book is the way forward.</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex gap-3 flex-nowrap mb-4 mt-4">
                                    <a href="<?php echo esc_url( home_url( '/preview-book' ) ); ?>" class="btn btn-warning btn-lg book-preview-btn" style="box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4); transition: all 0.3s ease;"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="<?php echo esc_url( home_url( '/about-book' ) ); ?>" class="btn btn-outline-dark btn-lg book-purchase-btn" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"><span
                                            class="btn-content">PURCHASE BOOK</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Book Item 2 - Boot Camp -->
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png" alt="Twelve Weeks to Finding Happiness Boot Camp"
                                        class="img-fluid book-cover">
                                </div>
                                <!-- Carousel Indicators - Desktop below image, Mobile below image -->
                                <div class="carousel-indicators book-carousel-indicators mt-3">
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="0"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#bookCarousel" data-bs-slide-to="1" class="active"
                                        aria-current="true" aria-label="Slide 2"></button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 order-2 order-lg-2 book-content-wrapper">
                                <div class="book-header-section mb-4">
                                    <h2 class="book-section-title">TWELVE WEEKS TO<br>FINDING HAPPINESS</h2>
                                    <div class="book-subtitle-badge d-inline-flex align-items-center gap-2 px-3 py-2 mb-3" style="background: linear-gradient(135deg, #275BA7 0%, #1E4A7A 100%); border-radius: 8px; box-shadow: 0 2px 8px rgba(39, 91, 167, 0.3);">
                                        <i class="fas fa-dumbbell" style="color: #FFC107; font-size: 14px;"></i>
                                        <p class="book-subtitle-text mb-0" style="font-size: 13px; color: #FFC107; font-weight: 600; letter-spacing: 0.5px;">BOOT CAMP for Building Happier People</p>
                                    </div>
                                </div>
                                
                                <div class="book-rating-card d-inline-flex align-items-center gap-3 px-4 py-3 mb-4" style="background: #F8F9FA; border-left: 4px solid #275BA7; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="book-rating-number">4.9</span>
                                    <div class="book-rating-stars d-flex gap-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                    <span style="color: #666; font-size: 14px; font-weight: 500;">Excellent Rating</span>
                                </div>
                                
                                <div class="book-description-content" style="position: relative;">
                                    <div class="book-description-item mb-4" style="padding-left: 24px; border-left: 3px solid #FFC107; position: relative;">
                                        <div class="book-icon-badge" style="position: absolute; left: -12px; top: 0; width: 24px; height: 24px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(255, 193, 7, 0.4);">
                                            <i class="fas fa-lightbulb" style="color: #275BA7; font-size: 12px;"></i>
                </div>
                                        <p class="book-description-text mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D;">Earlier in my life, if you had told me that happiness was a choice, I would have told you that you were crazy. After all, no one chooses to experience things like the pain of low self-esteem, anxiety, or depression. But what I've come to realize is that happiness isn't about leading an obstacle-free life—instead, it's about learning how to change what you focus on and how you react to circumstances, regardless of whether they're good or bad.</p>
                        </div>
                                    
                                    <div class="book-description-item mb-4" style="padding-left: 24px; border-left: 3px solid #275BA7; position: relative;">
                                        <div class="book-icon-badge" style="position: absolute; left: -12px; top: 0; width: 24px; height: 24px; background: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(39, 91, 167, 0.4);">
                                            <i class="fas fa-target" style="color: #FFC107; font-size: 12px;"></i>
                    </div>
                                        <p class="book-description-text book-description-secondary mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D;">"Twelve Weeks to Finding Happiness" is designed to help you do just that—focus more often on the behaviors, people, and things that will enrich and fulfill you, and that will inspire your positive physical, mental, and emotional growth.</p>
                                </div>
                                    
                                    <div class="book-highlight-box p-4 mb-4" style="background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border: 2px solid #275BA7; border-radius: 12px; box-shadow: 0 4px 12px rgba(39, 91, 167, 0.15); position: relative;">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="quote-icon" style="flex-shrink: 0; width: 40px; height: 40px; background: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-calendar-check" style="color: #FFC107; font-size: 18px;"></i>
                                </div>
                                            <div>
                                                <p class="book-description-text book-description-italic mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D; font-style: italic;">In this program, you'll be given a new task or lifestyle change to focus on each week for twelve weeks, while keeping up the habits you've begun in previous weeks. <strong style="color: #275BA7; font-weight: 600;">Each week's focal point is an important tool that you'll need to create your greatest life.</strong></p>
                            </div>
                                    </div>
                                </div>
                                    
                                    <div class="book-cta-text mb-4" style="padding: 16px 20px; background: linear-gradient(135deg, #275BA7 0%, #1E4A7A 100%); border-radius: 8px; box-shadow: 0 4px 8px rgba(39, 91, 167, 0.2);">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="fas fa-rocket" style="color: #FFC107; font-size: 18px;"></i>
                                            <span style="color: #FFFFFF; font-weight: 600; font-size: 15px; letter-spacing: 0.5px;">START YOUR 12-WEEK JOURNEY TODAY</span>
                                        </div>
                                        <p class="book-description-text mb-0" style="font-size: 15px; line-height: 1.6; color: #FFFFFF; margin: 0;">Transform your life with this proven step-by-step program designed to build lasting happiness.</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex gap-3 flex-nowrap mb-4 mt-4">
                                    <a href="<?php echo esc_url( home_url( '/preview-boot-camp' ) ); ?>" class="btn btn-warning btn-lg book-preview-btn" style="box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4); transition: all 0.3s ease;"><span
                                            class="btn-content">PREVIEW BOOK</span></a>
                                    <a href="<?php echo esc_url( home_url( '/boot-camp' ) ); ?>" class="btn btn-outline-dark btn-lg book-purchase-btn" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"><span
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
            <div class="reviews-cards-wrapper position-relative">
                <!-- Reviews Carousel -->
                <div id="reviewsCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <!-- Desktop: Slide 1 (Cards 1, 2, 3) | Mobile: Individual slides -->
                    <!-- Review Card 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4 justify-content-center">
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
                                        <p class="review-text">Todd is a gifted storyteller whose powerful, uplifting stories motivate and inspire us to strive for the stars. He provides a true-life path that can take any one of us from despair to hope, from anguish to joy, transforming lives through his authentic journey.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dr. Richard Levin.jpeg" alt="Dr. Richard Levin"
                                    class="review-author-image rounded-3">
                                <div class="review-author-info">
                                    <h5 class="review-author-name">Dr. Richard Levin</h5>
                                    <small class="review-author-role">Executive Coach & Leadership Developer</small>
                        </div>
                            </div>
                        </div>
                    </div>
                                <!-- Review Card 2 - Desktop only (part of slide 1) -->
                                <div class="col-12 col-md-4 d-none d-md-block">
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
                                        <p class="review-text">Depression with high achievers is sadly too common. Todd courageously pulls back the curtain and reveals a practical prescription to a more balanced and satisfying life through his own heartfelt and inspiring story.</p>
                            <hr class="review-divider">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Jeffrey S. Davis.jpeg" alt="Jeffrey S. Davis"
                                    class="review-author-image rounded-3">
                                <div class="review-author-info">
                                    <h5 class="review-author-name">Jeffrey S. Davis</h5>
                                    <small class="review-author-role">CEO & Founder, Mage LLC | Adjunct Professor, Babson College</small>
                        </div>
                            </div>
                        </div>
                    </div>
                                <!-- Review Card 3 - Desktop only (part of slide 1) -->
                                <div class="col-12 col-md-4 d-none d-md-block">
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
                                        <p class="review-text">Todd radiates positive energy and love, in person and throughout the pages of his book. His success in overcoming life's obstacles is truly inspirational and will further his lifelong goal to help others find their own path to happiness.</p>
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
                        <!-- Review Card 2 - Mobile only -->
                        <div class="carousel-item d-md-none">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
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
                                        <p class="review-text">Depression with high achievers is sadly too common. Todd courageously pulls back the curtain and reveals a practical prescription to a more balanced and satisfying life through his own heartfelt and inspiring story.</p>
                                        <hr class="review-divider">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Jeffrey S. Davis.jpeg" alt="Jeffrey S. Davis"
                                                class="review-author-image rounded-3">
                                            <div class="review-author-info">
                                                <h5 class="review-author-name">Jeffrey S. Davis</h5>
                                                <small class="review-author-role">CEO & Founder, Mage LLC | Adjunct Professor, Babson College</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review Card 3 - Mobile only -->
                        <div class="carousel-item d-md-none">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
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
                                        <p class="review-text">Todd radiates positive energy and love, in person and throughout the pages of his book. His success in overcoming life's obstacles is truly inspirational and will further his lifelong goal to help others find their own path to happiness.</p>
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
                        <!-- Desktop: Slide 2 (Cards 4, 5, 6) | Mobile: Individual slides -->
                        <!-- Review Card 4 -->
                        <div class="carousel-item">
                            <div class="row g-4 justify-content-center">
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
                                        <p class="review-text">"Helping others—and not just yourself—is a key component of cultivating happiness. I know. I have a small optometry practice in a close-knit Massachusetts town. I like to think that my job enables me to make people's lives better—and I am continually amazed by how much joy that brings me."</p>
                                        <hr class="review-divider">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="review-author-image rounded-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #275BA7; color: #FFC107; font-weight: bold; font-size: 20px;">
                                                FG
                                            </div>
                                            <div class="review-author-info">
                                                <h5 class="review-author-name">Dr. Fatima Garcia-Fedorowicz</h5>
                                                <small class="review-author-role">Optometrist</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Review Card 5 - Desktop only (part of slide 2) -->
                                <div class="col-12 col-md-4 d-none d-md-block">
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
                                        <p class="review-text">"I have known Todd Patkin for many years. When I read Finding Happiness, I was pleased to see his forthright honesty on subjects that most people shy away from. I deeply admire him for exposing his life so that others can learn what the components of happiness truly are."</p>
                                        <hr class="review-divider">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="review-author-image rounded-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #275BA7; color: #FFC107; font-weight: bold; font-size: 20px;">
                                                BF
                                            </div>
                                            <div class="review-author-info">
                                                <h5 class="review-author-name">Brian Fox</h5>
                                                <small class="review-author-role">Creative Fine Artist</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Review Card 6 - Desktop only (part of slide 2) -->
                                <div class="col-12 col-md-4 d-none d-md-block">
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
                                        <p class="review-text">"Whether you read one page or one hundred pages of Todd Patkin's book, you will find hope and inspiration in his words. He offers practical steps that will help all of us build happier lives. As Todd reminds us, happiness is a journey, not a destination."</p>
                                        <hr class="review-divider">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="review-author-image rounded-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #275BA7; color: #FFC107; font-weight: bold; font-size: 20px;">
                                                RK
                                            </div>
                                            <div class="review-author-info">
                                                <h5 class="review-author-name">Renée Kwok</h5>
                                                <small class="review-author-role">President, TFC Financial Management</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review Card 5 - Mobile only -->
                        <div class="carousel-item d-md-none">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
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
                                        <p class="review-text">"I have known Todd Patkin for many years. When I read Finding Happiness, I was pleased to see his forthright honesty on subjects that most people shy away from. I deeply admire him for exposing his life so that others can learn what the components of happiness truly are."</p>
                                        <hr class="review-divider">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="review-author-image rounded-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #275BA7; color: #FFC107; font-weight: bold; font-size: 20px;">
                                                BF
                                            </div>
                                            <div class="review-author-info">
                                                <h5 class="review-author-name">Brian Fox</h5>
                                                <small class="review-author-role">Creative Fine Artist</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review Card 6 - Mobile only -->
                        <div class="carousel-item d-md-none">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
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
                                        <p class="review-text">"Whether you read one page or one hundred pages of Todd Patkin's book, you will find hope and inspiration in his words. He offers practical steps that will help all of us build happier lives. As Todd reminds us, happiness is a journey, not a destination."</p>
                                        <hr class="review-divider">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="review-author-image rounded-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #275BA7; color: #FFC107; font-weight: bold; font-size: 20px;">
                                                RK
                                            </div>
                                            <div class="review-author-info">
                                                <h5 class="review-author-name">Renée Kwok</h5>
                                                <small class="review-author-role">President, TFC Financial Management</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev reviews-carousel-control" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next reviews-carousel-control" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators reviews-carousel-indicators mt-4">
                        <!-- Desktop: 2 indicators (for 2 slides with 3 cards each) -->
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active d-none d-md-inline-block" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="3" class="d-none d-md-inline-block" aria-label="Slide 2"></button>
                        <!-- Mobile: 6 indicators (for 6 individual card slides) -->
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active d-md-none" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" class="d-md-none" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2" class="d-md-none" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="3" class="d-md-none" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="4" class="d-md-none" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="5" class="d-md-none" aria-label="Slide 6"></button>
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
        <style>
            /* Play Button Hover Effect */
            .course-video-thumbnail:hover .course-video-play-overlay {
                transform: translate(-50%, -50%) scale(1.1);
            }
            
            .course-video-thumbnail:hover .course-video-play-overlay > div {
                box-shadow: 0 6px 30px rgba(250, 211, 12, 0.7);
            }
            
            /* Ensure play button is visible on thumbnail */
            .course-video-play-overlay {
                pointer-events: none;
            }
            
            .course-video-play-overlay > div {
                pointer-events: auto;
            }
        </style>
        <div class=" ">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="course-section-title mb-2">HAPPINESS <span class="course-section-title-white">COURSE</span></h2>
                <p class="course-section-subtitle mb-0 text-center">Master the art of sustainable happiness in 12 transformative weeks</p>
            </div>

            <!-- Main Content Layout -->
            <div class="row g-4 g-lg-3">
                <!-- Right Side: Video and Episode Cards - First on Mobile -->
                <div class="col-12 col-lg-6 course-right-content order-1 order-lg-2 d-flex flex-column align-items-center">
                    <div style="width: 100%; ">
                    <!-- Video Container -->
                        <div class="course-video-container mb-4 w-100" style="position: relative;">
                            <div class="course-video-wrapper w-100" style="position: relative;">
                                <!-- Thumbnail Image -->
                                <div class="course-video-thumbnail w-100" id="courseVideoThumbnail" style="cursor: pointer; position: relative;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/week_1.png" alt="Course Preview"
                                         class="img-fluid w-100"
                                          >
                                    <!-- Play Icon Overlay -->
                                    <div class="course-video-play-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10; transition: all 0.3s ease;">
                                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #FAD30C 0%, #FFD54F 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 20px rgba(250, 211, 12, 0.5); cursor: pointer;">
                                            <i class="fas fa-play" style="color: #1a1a1a; font-size: 32px; margin-left: 4px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- Video Iframe (Initially Hidden) -->
                                <div class="course-video-iframe-wrapper w-100" id="courseVideoIframeWrapper" style="display: none;">
                                    <div class="ratio ratio-16x9">
                                        <iframe 
                                            id="courseVideoIframe"
                                            src="" 
                                            title="Course Preview"
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                            allowfullscreen
                                            class="w-100"
                                            style="border-radius: 12px;">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Topics List with Icons - Moved to right side -->
                        <div class="course-topics-box mb-4 w-100" style="padding: 20px; background: rgba(255, 255, 255, 0.05); border-radius: 12px; border: 1px solid rgba(250, 211, 12, 0.2);">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="fas fa-list-check" style="color: #FAD30C; font-size: 18px;"></i>
                                <h5 style="color: #FAD30C; font-weight: 600; font-size: 18px; margin: 0;">Essential Topics Covered</h5>
                            </div>
                            <div class="course-topics-list">
                                <div class="d-flex align-items-start gap-3 mb-2">
                                    <i class="fas fa-check-circle" style="color: #FAD30C; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                                    <span style="color: #FFFFFF; font-size: 15px; line-height: 1.6;">Understanding the root causes of anxiety</span>
                                </div>
                                <div class="d-flex align-items-start gap-3 mb-2">
                                    <i class="fas fa-check-circle" style="color: #FAD30C; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                                    <span style="color: #FFFFFF; font-size: 15px; line-height: 1.6;">Developing healthy coping mechanisms</span>
                                </div>
                                <div class="d-flex align-items-start gap-3 mb-2">
                                    <i class="fas fa-check-circle" style="color: #FAD30C; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                                    <span style="color: #FFFFFF; font-size: 15px; line-height: 1.6;">Building self-compassion and meaningful connections</span>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <i class="fas fa-check-circle" style="color: #FAD30C; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                                    <span style="color: #FFFFFF; font-size: 15px; line-height: 1.6;">Practical exercises for daily implementation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left Side: Text Content - Second on Mobile -->
                <div class="col-12  col-lg-6 course-left-content order-2 order-lg-1">
                    <div class="course-text-content">
                        <!-- Introduction Badge -->
                        <div class="course-intro-badge d-inline-flex align-items-center gap-2 px-3 py-2 mb-4" style="background: linear-gradient(135deg, #FAD30C 0%, #FFD54F 100%); border-radius: 8px; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.3);">
                            <i class="fas fa-graduation-cap" style="color: #1a1a1a; font-size: 16px;"></i>
                            <span style="color: #1a1a1a; font-weight: 600; font-size: 14px; letter-spacing: 0.5px;">12-WEEK MASTERCLASS PROGRAM</span>
                    </div>
                        
                        <!-- Main Description with Icon -->
                        <div class="course-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                            <div class="course-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                <i class="fas fa-play-circle" style="color: #1a1a1a; font-size: 14px;"></i>
                            </div>
                            <p class="course-description-text mb-0" style="font-size: 16px; line-height: 1.75; color: #FFFFFF; text-align: justify;">Transform your relationship with stress, anxiety, and negative thinking through Todd's comprehensive 12-week video course. Based on the proven program that helped him recover from complete breakdown and refined through years of helping others, this MasterClass takes you step-by-step through practical strategies for building sustainable happiness.</p>
                        </div>
                        
                        <!-- Description with Icon - Same styling as main description -->
                        <div class="course-description-item mb-4" style="padding-left: 28px; border-left: 3px solid #FAD30C; position: relative;">
                            <div class="course-icon-badge" style="position: absolute; left: -14px; top: 0; width: 28px; height: 28px; background: #FAD30C; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(250, 211, 12, 0.4);">
                                <i class="fas fa-chart-line" style="color: #1a1a1a; font-size: 14px;"></i>
                            </div>
                            <p class="course-description-text mb-0" style="font-size: 16px; line-height: 1.75; color: #FFFFFF; text-align: justify;">Each week builds on the last, creating sustainable change rather than quick fixes. You'll discover how to identify and break free from the patterns that keep you stuck in cycles of worry and self-doubt. Through Todd's personal stories and evidence-based techniques, you'll learn to reframe your thoughts, manage overwhelming emotions, and develop <strong style="color: #FAD30C; font-weight: 600;">resilience that lasts</strong>.</p>
                        </div>
                        
                        <!-- Final CTA Text -->
                        <div class="course-cta-text-box p-3 mb-0" style="background: linear-gradient(135deg, rgba(250, 211, 12, 0.15) 0%, rgba(250, 211, 12, 0.05) 100%); border-left: 4px solid #FAD30C; border-radius: 8px;">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="fas fa-rocket" style="color: #FAD30C; font-size: 18px;"></i>
                                <span style="color: #FAD30C; font-weight: 600; font-size: 15px; letter-spacing: 0.5px;">YOUR JOURNEY TO HAPPINESS STARTS HERE</span>
                            </div>
                            <p class="course-description-text mb-0" style="font-size: 15px; line-height: 1.7; color: #FFFFFF; margin: 0; text-align: justify;">You'll explore practical exercises designed to help you implement these strategies in your daily life, making real progress week by week.</p>
                        </div>
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
                                            <span>Week 2</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Week 2: Focus on: Movement</h5>
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
                                <span>Week 3</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Week 3: Focus on Taking Change of Your Mind</h5>
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
                                <span>Week 4</span>
                                        </div>
                                    </div>
                                    <h5 class="course-episode-title">Week 4: Focus on Living in the Present</h5>
                                    <p class="course-episode-description">Congratulations, graduates! (And parents of graduates, too.) As you gaze with pride on your diplomas, I'm sure you're also thinking about what comes next. No</p>
                                </div>
                                <a href="#" class="btn course-episode-button d-flex align-items-center justify-content-center" style="gap: 5.41px;">Purchase Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
              
            
            </div>

            <!-- View More Button -->
            <div class="text-center mt-4">
                <a href="<?php echo esc_url( home_url( '/course' ) ); ?>" class="btn course-view-more-button">View More</a>
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
                        <a href="<?php echo esc_url( home_url( '/hire-todd' ) ); ?>" class="btn btn-warning service-card-button">Book Todd</a>
                        <div class="service-card-description-box mt-3 p-3" style="background: rgba(250, 211, 12, 0.1); border-left: 3px solid #FAD30C; border-radius: 8px;">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fas fa-quote-left" style="color: #FAD30C; font-size: 16px; margin-top: 2px; flex-shrink: 0;"></i>
                                <p class="service-card-description mb-0" style="font-size: 13px; line-height: 1.5; color: #FFFFFF; text-align: left; font-style: italic;">Todd's passionate style makes an impact while getting audiences to laugh. He shares extraordinary life stories with practical lessons about resilience, happiness, and human connection.</p>
                            </div>
                        </div>
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
                        <a href="<?php echo esc_url( home_url( '/hire-todd' ) ); ?>" class="btn btn-warning service-card-button">Schedule a Consultation</a>
                        <div class="service-card-description-box mt-3 p-3" style="background: rgba(250, 211, 12, 0.1); border-left: 3px solid #FAD30C; border-radius: 8px;">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fas fa-quote-left" style="color: #FAD30C; font-size: 16px; margin-top: 2px; flex-shrink: 0;"></i>
                                <p class="service-card-description mb-0" style="font-size: 13px; line-height: 1.5; color: #FFFFFF; text-align: left; font-style: italic;">Go deeper with Todd's transformational workshop. Your team will learn practical strategies for managing stress, building resilience, and creating lasting positive change.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about-section-background">
            <!-- Decorative Elements -->
            <div class="about-decorative-shape about-shape-1"></div>
            <div class="about-decorative-shape about-shape-2"></div>
            <div class="about-decorative-shape about-shape-3"></div>
            
            <div class="about-section-container">
                <div class="about-content-wrapper">
                    <div class="about-text-content">
                        <!-- Enhanced Title Section -->
                        <div class="about-section-title-wrapper d-none d-lg-block">
                            <div class="about-title-decoration mb-3">
                                <div class="about-title-line"></div>
                                <div class="about-title-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="about-title-line"></div>
                            </div>
                            <h2 class="about-section-title">
                                <span class="about-title-blue">ABOUT</span>
                                <span class="about-title-yellow">TODD PATKIN</span>
                            </h2>
                            <div class="about-title-subtitle">
                                <span>Transforming Lives Through Authentic Stories</span>
                            </div>
                        </div>
                        <div class="about-section-title-wrapper-mobile d-block d-lg-none text-center mb-4">
                            <div class="about-title-decoration mb-3">
                                <div class="about-title-line"></div>
                                <div class="about-title-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="about-title-line"></div>
                            </div>
                            <h2 class="about-section-title">
                                <span class="about-title-blue">ABOUT</span>
                                <span class="about-title-yellow">TODD PATKIN</span>
                            </h2>
                            <div class="about-title-subtitle">
                                <span>Transforming Lives Through Authentic Stories</span>
                            </div>
                        </div>
                        <div class="about-image-wrapper d-block d-lg-none mb-4">
                            <div class="about-image-container-mobile">
                                <div class="about-image-frame">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" class="about-image">
                                    <div class="about-image-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="about-text-paragraphs">
                            <!-- Introduction Badge -->
                            <div class="about-intro-badge mb-3">
                                <i class="fas fa-user-circle me-2"></i>
                                <span>Personal Journey</span>
                        </div>
                            
                            <!-- First Paragraph with Icon Badge -->
                            <div class="about-paragraph-item mb-4">
                                <div class="about-paragraph-icon-badge">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <p class="about-paragraph mb-0">Todd Patkin knows firsthand that having a 'perfect' life doesn't guarantee happiness—in fact, his perfect exterior once hid a devastating struggle with depression and anxiety.</p>
                            </div>
                            
                            <!-- Second Paragraph with Timeline Badge -->
                            <div class="about-paragraph-item mb-4">
                                <div class="about-timeline-badge mb-2">
                                    <i class="fas fa-graduation-cap me-2"></i>
                                    <span>18 Years of Growth</span>
                                </div>
                                <p class="about-paragraph mb-0">After graduating from Tufts University, Todd joined the family business and spent 18 years helping grow it to new heights. Despite achieving extraordinary business success, Todd was privately battling perfectionism, low self-esteem, chronic stress, and hidden depression. At age 36, everything came crashing down in a complete breakdown.</p>
                            </div>
                            
                            <!-- Breakthrough Highlight Box -->
                            <div class="about-breakthrough-box mb-4">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-rocket" style="color: #FAD30C; font-size: 20px;"></i>
                                    <strong style="color: #275BA7; font-size: 18px; font-family: 'Oswald', sans-serif;">That breakdown became his breakthrough.</strong>
                                </div>
                            </div>
                            
                            <!-- Culture Blueprint Section -->
                            <div class="about-culture-blueprint-section mb-4">
                                <div class="about-culture-header mb-3">
                                    <div class="about-culture-icon-badge">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <h4 class="about-culture-title mb-0">
                                        <span class="about-culture-blueprint">The Culture Blueprint</span>
                                    </h4>
                                </div>
                                <p class="about-paragraph mb-0">Todd transformed his insights into a comprehensive system that's helped thousands build sustainable happiness. His vulnerability in sharing his story—including the painful and embarrassing moments—has opened doors for others to acknowledge their own struggles and seek the help they deserve.</p>
                            </div>
                            
                            <!-- Passions Highlight Box -->
                            <div class="about-passions-box">
                                <div class="d-flex align-items-start gap-2">
                                    <i class="fas fa-heart" style="color: #FAD30C; font-size: 18px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <p class="about-paragraph mb-0" style="font-style: italic;">Since the sale of the family business to Advance Auto Parts in 2005, Todd has devoted himself to his true passions: philanthropy, giving back, spending time with family and friends, and helping people discover genuine happiness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-cta-wrapper mt-4">
                            <a href="<?php echo esc_url( home_url( '/about-author' ) ); ?>" class="btn course-view-more-button about-read-more-btn-enhanced">
                                <span class="btn-text">READ MORE</span>
                                <i class="fas fa-arrow-right btn-icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="about-image-wrapper d-none d-lg-block">
                        <div class="about-image-container">
                            <div class="about-image-frame">
                                <div class="about-image-bg-pattern"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" class="about-image">
                                <div class="about-image-overlay"></div>
                                <div class="about-image-badge">
                                    <i class="fas fa-award"></i>
                                    <span>Author & Speaker</span>
                    </div>
                </div>
                            <!-- Floating Stats -->
                            <div class="about-floating-stats">
                                <div class="about-stat-item">
                                    <div class="about-stat-number">18+</div>
                                    <div class="about-stat-label">Years Experience</div>
                                </div>
                                <div class="about-stat-item">
                                    <div class="about-stat-number">1000+</div>
                                    <div class="about-stat-label">Lives Changed</div>
                                </div>
                            </div>
                        </div>
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
            <div class="podcast-custom-grid">
                <div class="podcast-grid-item">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_1.png" class="img-fluid w-100 podcast-card-img" alt="Crack the happiness code">
                    </div>
                </div>
                <div class="podcast-grid-item">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative podcast-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podcast_2.png" class="img-fluid w-100 podcast-card-img" alt="Why Helping Others is the Secret to Helping Yourself">
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( home_url( '/podcast' ) ); ?>" class="btn course-view-more-button">View More</a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blogs" class="blog-section bg-white">
        <div class="container ">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">Featured <span
                        class="text-warning">Blogs</span></h2>
                <p class="text-muted">Listen to Todd share insights on happiness, mental health, and personal transformation</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png" class="card-img-top blog-card-img"
                            alt="Masks: The Other Side of the Coin">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Money and Happiness: Why More Isn't Always Better</h4>
                            <p class="card-text text-muted mb-3">Despite achieving financial success beyond my wildest dreams, I discovered the hard way that wealth can't buy happiness. Here's what actually creates lasting contentment...</p>
                            <a href="<?php echo esc_url(home_url('/blog/blog-1')); ?>" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_2.png" class="card-img-top blog-card-img"
                            alt="Season of Peace: The Importance of Quiet Time">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">The Quiet Time Revolution: Why Doing Nothing Changed Everything</h4>
                            <p class="card-text text-muted mb-3">As a chronic achiever and perfectionist, the concept of 'quiet time' seemed impossible—and unnecessary. But learning to be still became one of the most transformative...</p>
                            <a href="<?php echo esc_url(home_url('/blog/blog-2')); ?>" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_3.png" class="card-img-top blog-card-img"
                            alt="5 Things Your Employees Are Dying to Hear from You">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">5 Signs You're a High-Functioning Depressive (And What to Do About It)</h4>
                            <p class="card-text text-muted mb-3">You're successful, accomplished, and from the outside your life looks perfect. But inside, you're struggling. These are the warning signs I wish I'd recognized sooner...</p>
                            <a href="<?php echo esc_url(home_url('/blog/blog-3')); ?>" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn course-view-more-button">View More</a>
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
                        <!-- Icon Badge -->
                        <div class="mb-4">
                            <div class="contact-icon-wrapper">
                                <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center contact-icon-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-calendar-alt fa-2x text-dark"></i>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Title with Badge -->
                        <div class="contact-title-wrapper mb-3">
                            <div class="contact-badge mb-2">
                                <i class="fas fa-clock me-1"></i>
                                <span>30-Minute Free Call</span>
                            </div>
                            <h4 class="fw-bold text-uppercase mb-0 text-white">Get Consultation</h4>
                        </div>
                        
                        <!-- Enhanced Description -->
                        <div class="contact-description-wrapper mb-4 flex-grow-1">
                            <div class="contact-description-item mb-3">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <i class="fas fa-check-circle text-warning mt-1" style="font-size: 14px; flex-shrink: 0;"></i>
                                    <p class="text-white mb-0" style="font-size: 15px; line-height: 1.6;">Schedule a free 30-minute call with Todd to discuss your organization's needs.</p>
                                </div>
                            </div>
                            
                            <div class="contact-highlight-box mb-3">
                                <div class="d-flex align-items-start gap-2">
                                    <i class="fas fa-lightbulb text-warning mt-1" style="font-size: 16px; flex-shrink: 0;"></i>
                                    <p class="text-white mb-0" style="font-size: 14px; line-height: 1.6; font-style: italic;">We'll explore how Todd's programs can help your team build resilience, manage stress, and create a healthier workplace culture.</p>
                                </div>
                            </div>
                            
                            <div class="contact-features-list">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-star text-warning" style="font-size: 12px;"></i>
                                    <span class="text-white" style="font-size: 13px;">Build team resilience</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-star text-warning" style="font-size: 12px;"></i>
                                    <span class="text-white" style="font-size: 13px;">Manage workplace stress</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-star text-warning" style="font-size: 12px;"></i>
                                    <span class="text-white" style="font-size: 13px;">Create healthier culture</span>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-warning w-100 contact-card-btn" data-bs-toggle="modal" data-bs-target="#contactModal"><span class="btn-content">Schedule a Call</span></a>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="contact-card p-5 border border-secondary rounded bg-dark bg-opacity-50 h-100 d-flex flex-column">
                        <!-- Icon Badge -->
                        <div class="mb-4">
                            <div class="contact-icon-wrapper">
                                <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center contact-icon-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-envelope fa-2x text-dark"></i>
                            </div>
                        </div>
                    </div>
                        
                        <!-- Title with Badge -->
                        <div class="contact-title-wrapper mb-3">
                            <div class="contact-badge mb-2">
                                <i class="fas fa-reply me-1"></i>
                                <span>24-Hour Response</span>
                </div>
                            <h4 class="fw-bold text-uppercase mb-0 text-white">Contact Us Directly</h4>
            </div>
                        
                        <!-- Enhanced Description -->
                        <div class="contact-description-wrapper mb-4 flex-grow-1">
                            <div class="contact-description-item mb-3">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <i class="fas fa-question-circle text-warning mt-1" style="font-size: 14px; flex-shrink: 0;"></i>
                                    <p class="text-white mb-0" style="font-size: 15px; line-height: 1.6;">Have questions about Todd's speaking, workshops, or courses?</p>
                                </div>
                            </div>
                            
                            <div class="contact-highlight-box mb-3">
                                <div class="d-flex align-items-start gap-2">
                                    <i class="fas fa-users text-warning mt-1" style="font-size: 16px; flex-shrink: 0;"></i>
                                    <p class="text-white mb-0" style="font-size: 14px; line-height: 1.6; font-style: italic;">Our team typically responds within 24 hours and will help you find the perfect solution for your needs.</p>
                                </div>
                            </div>
                            
                            <div class="contact-features-list">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-microphone text-warning" style="font-size: 12px;"></i>
                                    <span class="text-white" style="font-size: 13px;">Speaking engagements</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="fas fa-chalkboard-teacher text-warning" style="font-size: 12px;"></i>
                                    <span class="text-white" style="font-size: 13px;">Workshop programs</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-book-reader text-warning" style="font-size: 12px;"></i>
                                    <span class="text-white" style="font-size: 13px;">Course information</span>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-warning w-100 contact-card-btn" data-bs-toggle="modal" data-bs-target="#contactModal"><span class="btn-content">Contact Now</span></a>
                    </div>
                </div>
            </div>
            <div class="contact-assurance-section mt-4">
                <p class="text-light mb-4" style="font-size: 18px; font-weight: 500;">Have questions? We're here to help.</p>
            <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
                    <div class="contact-assurance-item">
                        <div class="d-flex align-items-center gap-2">
                            <div class="contact-assurance-icon">
                                <i class="fas fa-check-circle"></i>
                </div>
                            <span class="contact-assurance-text">Quick response guaranteed</span>
                        </div>
                    </div>
                    <div class="contact-assurance-item">
                        <div class="d-flex align-items-center gap-2">
                            <div class="contact-assurance-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="contact-assurance-text">Flexible scheduling available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content contact-modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contact-modal-header mb-4">
                        <h2 class="contact-modal-title">Contact Us</h2>
                        <p class="contact-modal-subtitle">Lorem ipsum dolor sit amet consectetur. In</p>
                    </div>
                    <form class="contact-modal-form">
                        <div class="mb-3">
                            <label for="firstName" class="form-label contact-form-label">First Name</label>
                            <input type="text" class="form-control contact-form-input" id="firstName" placeholder="Please enter first name" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label contact-form-label">Last Name</label>
                            <input type="text" class="form-control contact-form-input" id="lastName" placeholder="Please enter last name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label contact-form-label">Email Address</label>
                            <input type="email" class="form-control contact-form-input" id="email" placeholder="Please enter your email" required>
                        </div>
                        <div class="mb-4">
                            <label for="reason" class="form-label contact-form-label">Reason for contacting</label>
                            <input type="text" class="form-control contact-form-input contact-form-date" id="reason" placeholder="DD/MM/YYYY" required>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 contact-modal-submit-btn">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content success-modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="success-modal-header text-center">
                        <div class="success-modal-icon mb-4">
                            <div class="success-checkmark-outer">
                                <div class="success-checkmark-inner">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="success-modal-title mb-3">Successfull</h2>
                        <p class="success-modal-message mb-4">Please purchase the book to get complete access to the book</p>
                        <button type="button" class="btn btn-warning w-100 success-modal-close-btn" data-bs-dismiss="modal">
                            Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>