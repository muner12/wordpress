<?php

/**
 * Template Name: About Book
 */
get_header();
?>
<!-- About Book Hero Section -->
<section class="about-book-hero-section" style="margin-bottom: 0; padding-bottom: 32px !important;">
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
                <div class="book-header-section mb-4">
                    <h2 class="book-section-title">FINDING<br>HAPPINESS</h2>
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
                        <p class="book-description-text mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D;">This is Todd's story because it is Todd's journey. I have been a co-navigator, occasionally having my hand on the tiller, sometimes suggesting course corrections and periodically offering my own views of the landscape but adamant that Todd take the helm at all times.</p>
                    </div>
                    
                    <div class="book-description-item mb-4" style="padding-left: 24px; border-left: 3px solid #275BA7; position: relative;">
                        <div class="book-icon-badge" style="position: absolute; left: -12px; top: 0; width: 24px; height: 24px; background: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(39, 91, 167, 0.4);">
                            <i class="fas fa-heart" style="color: #FFC107; font-size: 12px;"></i>
                        </div>
                        <p class="book-description-text book-description-secondary mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D;">It took me a while to learn Todd's voice and repress my own style, which led to some entertaining discussions about vocabulary and seemingly endless comma wars, but I hope that for you, the reader, the narrative flows seamlessly. Our goal was to keep this a living story, not a textbook.</p>
                    </div>
                    
                    <div class="book-highlight-box p-4 mb-4" style="background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border: 2px solid #FFC107; border-radius: 12px; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.15); position: relative;">
                        <div class="d-flex align-items-start gap-3">
                            <div class="quote-icon" style="flex-shrink: 0; width: 40px; height: 40px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-quote-left" style="color: #275BA7; font-size: 18px;"></i>
                            </div>
                            <div>
                                <p class="book-description-text book-description-italic mb-0" style="font-size: 16px; line-height: 1.7; color: #2D2D2D; font-style: italic;">That said, there are occasional footnotes to scholarly work, but that comes from our respect and recognition for those people who actually did the research as well as from a desire to provide you with an opportunity to follow up with other relevant sources if you so wish.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Excerpts Section with Toggle -->
                <div class="excerpts-section border rounded mb-4" style="background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border: 2px solid #FFC107 !important; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.15); overflow: hidden;">
                    <div class="excerpts-header d-flex justify-content-between align-items-center p-3 border-bottom" style="background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); border-bottom: 2px solid rgba(39, 91, 167, 0.1) !important;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="excerpts-icon-wrapper" style="width: 40px; height: 40px; background: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                                <i class="fas fa-file-alt" style="color: #275BA7; font-size: 18px;"></i>
                            </div>
                            <div>
                                <h3 class="excerpts-title mb-0" style="font-family: 'Oswald', sans-serif; font-weight: 600; font-size: 18px; color: #275BA7; text-transform: uppercase; letter-spacing: 0.5px;">Book Excerpts</h3>
                                <p class="excerpts-subtitle mb-0" style="font-size: 12px; color: #666; margin-top: 2px;">Explore key chapters</p>
                            </div>
                        </div>
                        <button class="excerpts-toggle-btn btn btn-sm rounded-circle border-0" type="button" data-bs-toggle="collapse" data-bs-target="#excerptsList" aria-expanded="true" aria-controls="excerptsList" style="width: 36px; height: 36px; background: #FFFFFF; color: #275BA7; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="collapse show" id="excerptsList">
                        <div class="excerpts-content-wrapper p-3" style="max-height: 280px; overflow-y: auto;">
                            <ul class="excerpts-list list-unstyled mb-0">
                                <li class="mb-2">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/PotatoSaladorColeSlaw.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">1</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">Potato Salad or Coleslaw: Inside a Breakdown</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/WorkBoots.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">2</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">A Footwear Faux Pas: A Look at How Our Memories Can Deceive Us and Influence Our Self-Worth</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/AnExpertViewonExercise.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">3</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">An Expert View on Exercise</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/SelfHelpatWork.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">4</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">Self-Help at Work: How Tony Robbins' Teachings Helped Todd Manage Stress</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/PayingitForward.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">5</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">Paying It Forward: How Todd Spreads Happiness in the Workplace</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/DreamOn.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">6</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">Dream On: Aerosmith Aids a Friend</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                                <li class="mb-0">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdfs/HappinessisaChoice.pdf" target="_blank" class="excerpt-link-item d-flex align-items-center gap-2 p-2 rounded" style="text-decoration: none; transition: all 0.2s ease; border-left: 3px solid transparent;">
                                        <span class="excerpt-number" style="width: 24px; height: 24px; background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%); color: #275BA7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; flex-shrink: 0;">7</span>
                                        <span class="excerpt-text flex-grow-1" style="font-size: 14px; color: #2D2D2D; line-height: 1.4;">Happiness Is a Choice</span>
                                        <i class="fas fa-external-link-alt" style="color: #FFC107; font-size: 12px; opacity: 0.6; flex-shrink: 0;"></i>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
                </div>
              
                
                <div class="d-flex gap-3 flex-nowrap mb-4 mt-4">
                    <a href="<?php echo esc_url( home_url( '/preview-book' ) ); ?>" class="btn btn-warning btn-lg book-preview-btn" style="box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4); transition: all 0.3s ease;"><span class="btn-content">PREVIEW BOOK</span></a>
                    <a href="<?php echo esc_url( home_url( '/about-book' ) ); ?>" class="btn btn-outline-dark btn-lg book-purchase-btn" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"><span class="btn-content">PURCHASE BOOK</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section - Same structure as front-page.php -->
<section class="reviews-section" style="padding-top: 0 !important; margin-top: 0 !important; padding-bottom: 3rem;">
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

<!-- More From Todd Section -->
<section class="more-from-todd-section">
    <div class="container">
        <h2 class="more-from-todd-title text-center">
            <span class="text-primary-blue">MORE FROM</span> <span class="text-warning">TODD</span>
        </h2>

        <div class="row g-4">
            <!-- Boot Camp Book Card -->
            <div class="col-12 col-md-6 col-lg-5">
                <a href="<?php echo esc_url( home_url( '/boot-camp' ) ); ?>" class="text-decoration-none" style="cursor: pointer; display: block;">
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
                </a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>