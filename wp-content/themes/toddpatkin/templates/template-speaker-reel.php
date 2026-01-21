<?php
/**
 * Template Name: Speaker Reel
 */
get_header(); 
?>

<style>
/* Speaker Reel Responsive Styles */
@media (max-width: 991px) {
    .speaker-reel-hero h1 {
        font-size: 38px !important;
    }
    
    .speaker-reel-hero .section-description {
        font-size: 16px !important;
    }
    
    .speaker-one-sheet h2 {
        font-size: 36px !important;
    }
    
    .speaker-one-sheet h3 {
        font-size: 42px !important;
    }
    
    .speaker-info .book-cover-container img {
        max-width: 300px !important;
    }
}

@media (max-width: 768px) {
    .speaker-reel-hero {
        padding: 40px 0 !important;
    }
    
    .speaker-reel-hero h1 {
        font-size: 32px !important;
        margin-bottom: 16px !important;
    }
    
    .speaker-reel-hero .section-description {
        font-size: 15px !important;
        padding: 0 15px;
    }
    
    .speaker-one-sheet {
        padding: 40px 0 !important;
    }
    
    .speaker-one-sheet h2 {
        font-size: 28px !important;
        margin-bottom: 24px !important;
    }
    
    .speaker-one-sheet h3 {
        font-size: 36px !important;
        margin-bottom: 12px !important;
    }
    
    .speaker-info .book-cover-container img {
        max-width: 250px !important;
        margin: 0 auto 30px !important;
    }
    
    .speaker-info p {
        font-size: 14px !important;
    }
    
    .speaker-info ul {
        font-size: 14px !important;
    }
    
    .speaker-info .btn {
        padding: 12px 28px !important;
        font-size: 14px !important;
        width: 100%;
        text-align: center;
    }
    
    .testimonials-section {
        padding: 40px 0 !important;
    }
    
    .testimonial-card {
        padding: 24px 20px !important;
    }
    
    .testimonial-card p {
        font-size: 14px !important;
    }
}

.speaker-info .btn:hover {
    background: #e8c20b !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(250, 211, 12, 0.4);
}
</style>

<!-- Speaker Reel Hero Section -->
<section class="speaker-reel-hero" style="background: #FFFFFF; padding: 60px 0;">
    <div class="container" style="max-width: 1400px;">
        <!-- Section Title and Description -->
        <div class="text-center mb-5">
            <!-- Enhanced Two-Color Title -->
            <h1 class="section-title" style="font-family: 'Oswald', sans-serif; font-weight: 700; font-size: 56px; line-height: 1.2; text-transform: uppercase; margin-bottom: 24px; letter-spacing: 1px;">
                <span style="color: #275BA7;">SPEAKER</span>
                <span style="color: #FAD30C;"> REEL</span>
            </h1>
            <!-- Justified Description -->
            <p class="section-description" style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 18px; line-height: 1.8; color: #999999; max-width: 1100px; margin: 0 auto; text-align: justify; text-align-last: center;">
                Watch Todd in action as he shares his powerful story of transformation—from devastating
                breakdown to breakthrough. Experience his authentic, engaging style that resonates with
                audiences across all industries and demographics.
            </p>
        </div>

        <!-- Enhanced Video Section with Click-to-Play -->
        <div class="video-container mb-4" style="border-radius: 16px; overflow: hidden; position: relative; max-width: 1200px; margin: 0 auto; box-shadow: 0 8px 24px rgba(0,0,0,0.15);">
            <div id="speakerReelThumbnailWrapper" style="position: relative; width: 100%; max-width: 100%; margin: 0 auto; line-height: 0; cursor: pointer;">
                <!-- Thumbnail Image (shown initially) -->
                <img 
                    id="speakerReelVideoThumbnail"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/speak_reel_book_video.png" 
                    alt="Speaker Reel Preview"
                    style="width: 100%; max-width: 100%; height: 550px; object-fit: cover; object-position: center; display: block; margin: 0; padding: 0; border-radius: 16px;"
                    class="speaker-reel-thumbnail">
                
                <!-- Play Button Overlay -->
                <div class="speaker-reel-play-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10; pointer-events: none;">
                    <div style="width: 90px; height: 90px; background: rgba(250, 211, 12, 0.95); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(0,0,0,0.3); transition: all 0.3s ease;">
                        <i class="fas fa-play" style="color: #275BA7; font-size: 36px; margin-left: 6px;"></i>
                    </div>
                </div>
                
                <!-- Video Iframe (hidden initially - completely removed from layout, takes no space) -->
                <iframe 
                    id="speakerReelVideoIframe"
                    src=""
                    frameborder="0" 
                    title="Finding Happiness - Happiness Thought Leader Todd Patkin"
                    webkitallowfullscreen
                    mozallowfullscreen
                    allowfullscreen
                    style="display: none; visibility: hidden; border: none; margin: 0; padding: 0; position: absolute; top: -9999px; left: -9999px; opacity: 0; pointer-events: none;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

<style>
/* Speaker Reel Video Styles */
.speaker-reel-thumbnail {
    transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
}

#speakerReelThumbnailWrapper {
    transition: all 0.3s ease;
}

#speakerReelThumbnailWrapper:hover .speaker-reel-thumbnail {
    transform: scale(1.02);
    filter: brightness(0.95);
}

#speakerReelThumbnailWrapper:hover .speaker-reel-play-overlay > div {
    transform: scale(1.1);
    background: rgba(250, 211, 12, 1);
    box-shadow: 0 12px 32px rgba(250, 211, 12, 0.5);
}

/* Play Button Overlay Animation */
.speaker-reel-play-overlay {
    transition: all 0.3s ease;
}

.speaker-reel-play-overlay > div {
    transition: all 0.3s ease;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% {
        box-shadow: 0 8px 24px rgba(0,0,0,0.3);
    }
    50% {
        box-shadow: 0 8px 32px rgba(250, 211, 12, 0.6);
    }
}

/* Hide iframe completely when it has no src or is empty - takes no space */
#speakerReelVideoIframe:not([src]),
#speakerReelVideoIframe[src=""] {
    display: none !important;
    visibility: hidden !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    opacity: 0 !important;
    pointer-events: none !important;
    height: 0 !important;
    max-height: 0 !important;
    width: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
}

/* When iframe is active */
#speakerReelVideoIframe.active {
    display: block !important;
    visibility: visible !important;
    position: relative !important;
    width: 100% !important;
    height: 550px !important;
    max-width: 100% !important;
    opacity: 1 !important;
    pointer-events: auto !important;
}

/* Responsive thumbnail and iframe heights */
@media (max-width: 768px) {
    #speakerReelVideoThumbnail {
        height: 420px !important;
    }
    
    #speakerReelVideoIframe.active {
        height: 420px !important;
    }
}

@media (max-width: 576px) {
    #speakerReelVideoThumbnail {
        height: 350px !important;
    }
    
    #speakerReelVideoIframe.active {
        height: 350px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Speaker Reel video thumbnail click handler
    const speakerReelThumbnailWrapper = document.getElementById('speakerReelThumbnailWrapper');
    const speakerReelVideoThumbnail = document.getElementById('speakerReelVideoThumbnail');
    const speakerReelVideoIframe = document.getElementById('speakerReelVideoIframe');
    const speakerReelPlayOverlay = document.querySelector('.speaker-reel-play-overlay');
    const speakerReelVideoUrl = 'https://www.veed.io/embed/9eb82739-66fd-425f-9415-9e86fd897d48?watermark=0&color=&sharing=0&title=0&autoplay=1';
    
    function playSpeakerReelVideo(e) {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        console.log('playSpeakerReelVideo called');
        
        if (speakerReelVideoThumbnail && speakerReelVideoIframe) {
            console.log('All elements found, hiding thumbnail and showing iframe');
            
            // DO NOT hide the wrapper - keep it visible so iframe can be seen
            if (speakerReelThumbnailWrapper) {
                speakerReelThumbnailWrapper.style.cursor = 'default';
            }
            
            // Hide thumbnail completely
            speakerReelVideoThumbnail.style.setProperty('display', 'none', 'important');
            speakerReelVideoThumbnail.style.setProperty('visibility', 'hidden', 'important');
            
            // Hide play overlay
            if (speakerReelPlayOverlay) {
                speakerReelPlayOverlay.style.setProperty('display', 'none', 'important');
            }
            
            // Show and load iframe - use setProperty with important to override inline styles
            speakerReelVideoIframe.classList.add('active');
            speakerReelVideoIframe.style.setProperty('display', 'block', 'important');
            speakerReelVideoIframe.style.setProperty('visibility', 'visible', 'important');
            speakerReelVideoIframe.style.setProperty('position', 'relative', 'important');
            speakerReelVideoIframe.style.setProperty('top', '0', 'important');
            speakerReelVideoIframe.style.setProperty('left', '0', 'important');
            speakerReelVideoIframe.style.setProperty('width', '100%', 'important');
            speakerReelVideoIframe.style.setProperty('height', '550px', 'important');
            speakerReelVideoIframe.style.setProperty('max-width', '100%', 'important');
            speakerReelVideoIframe.style.setProperty('opacity', '1', 'important');
            speakerReelVideoIframe.style.setProperty('pointer-events', 'auto', 'important');
            speakerReelVideoIframe.style.setProperty('border-radius', '16px', 'important');
            
            // Set autoplay permissions
            speakerReelVideoIframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
            
            // Set src to load video with autoplay
            speakerReelVideoIframe.src = speakerReelVideoUrl;
            
            console.log('Iframe src set to:', speakerReelVideoUrl);
        } else {
            console.error('One or more elements not found!');
        }
    }
    
    // Add click handler to the wrapper (so play button is also clickable)
    if (speakerReelThumbnailWrapper) {
        speakerReelThumbnailWrapper.addEventListener('click', playSpeakerReelVideo);
        console.log('Click handler attached to speaker reel thumbnail wrapper');
    }
});
</script>

<!-- Speaker One Sheet Section -->
<section class="speaker-one-sheet py-5" style="background: #FFFFFF; padding: 50px 0;">
    <div class="container" style="max-width: 1400px;">
        <!-- Enhanced Section Title with Two Colors -->
        <div class="text-center mb-5">
            <h2 style="font-family: 'Oswald', sans-serif; font-weight: 700; font-size: 48px; line-height: 1.2; text-transform: uppercase; margin-bottom: 8px;">
                <span style="color: #275BA7;">SPEAKER ONE</span>
                <span style="color: #FAD30C;"> SHEET</span>
        </h2>
        </div>

        <div class="row align-items-center justify-content-center g-5">
            <!-- Book Cover Column with Enhanced Styling -->
            <div class="col-lg-5 text-center text-lg-start">
                <div class="book-cover-container" style="position: relative; display: inline-block;">
                    <!-- Decorative Background Element -->
                    <div style="position: absolute; top: -15px; left: -15px; width: calc(100% + 30px); height: calc(100% + 30px); background: linear-gradient(135deg, rgba(39, 91, 167, 0.1) 0%, rgba(250, 211, 12, 0.1) 100%); border-radius: 16px; z-index: 0;"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speak_reel_book.png" 
                         alt="Happiness Code Cracker Book Cover" 
                         class="img-fluid" 
                         style="max-width: 450px; border-radius: 12px; box-shadow: 0 12px 30px rgba(0,0,0,0.15); position: relative; z-index: 1; transition: transform 0.3s ease;">
                </div>
            </div>

            <!-- Content Column with Enhanced Styling -->
            <div class="col-lg-7">
                <div class="speaker-info">
                    <!-- Title Section with Badge -->
                    <div class="mb-4">
                        <h3 style="font-family: 'Oswald', sans-serif; font-weight: 700; font-size: 56px; line-height: 1.1; text-transform: uppercase; color: #2D2D2D; margin-bottom: 16px; letter-spacing: -1px;">
                            HAPPINESS CODE<br>CRACKER
                        </h3>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 22px; color: #275BA7;">4.0</span>
                            <div class="rating-stars d-flex gap-1">
                                <?php for($i = 0; $i < 5; $i++) : ?>
                                    <svg width="22" height="22" viewBox="0 0 25 24" fill="none">
                                        <path d="M12.5 2L15.09 9.26L23 9.27L16.5 14.14L18.18 21.02L12.5 17.27L6.82 21.02L8.5 14.14L2 9.27L9.91 9.26L12.5 2Z" fill="<?php echo ($i < 4) ? '#FAD30C' : '#E0E0E0'; ?>"/>
                                    </svg>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Quote with Enhanced Styling -->
                    <div style="background: linear-gradient(135deg, rgba(39, 91, 167, 0.08) 0%, rgba(39, 91, 167, 0.03) 100%); padding: 20px 24px; border-left: 4px solid #275BA7; border-radius: 8px; margin-bottom: 24px;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 17px; line-height: 1.6; color: #275BA7; margin: 0; font-style: italic;">
                        &quot;Happiness isn&apos;t measured by what your life looks like, but by how you look at your life.&quot;
                    </p>
                    </div>

                    <!-- Description with Enhanced Typography -->
                    <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.7; color: #555555; margin-bottom: 28px;">
                        Download Todd&apos;s comprehensive speaker one sheet featuring his biography, speaking topics, testimonials, and booking information.
                    </p>

                    <!-- Enhanced Bullet Points with Icons -->
                    <ul style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 2; color: #333333; list-style: none; padding-left: 0; margin-bottom: 32px;">
                        <li style="margin-bottom: 12px; padding-left: 32px; position: relative; display: flex; align-items: center;">
                            <span style="position: absolute; left: 0; width: 24px; height: 24px; background: linear-gradient(135deg, #FAD30C 0%, #FFC107 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(250, 211, 12, 0.3);">
                                <span style="color: #333333; font-weight: bold; font-size: 12px;">•</span>
                            </span>
                            <span>Author, Speaker &amp; Chief Happiness Officer</span>
                        </li>
                        <li style="margin-bottom: 12px; padding-left: 32px; position: relative; display: flex; align-items: center;">
                            <span style="position: absolute; left: 0; width: 24px; height: 24px; background: linear-gradient(135deg, #FAD30C 0%, #FFC107 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(250, 211, 12, 0.3);">
                                <span style="color: #333333; font-weight: bold; font-size: 12px;">•</span>
                            </span>
                            <span>Tufts University Graduate</span>
                        </li>
                        <li style="margin-bottom: 12px; padding-left: 32px; position: relative; display: flex; align-items: center;">
                            <span style="position: absolute; left: 0; width: 24px; height: 24px; background: linear-gradient(135deg, #FAD30C 0%, #FFC107 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(250, 211, 12, 0.3);">
                                <span style="color: #333333; font-weight: bold; font-size: 12px;">•</span>
                            </span>
                            <span>Former President of multi-million dollar business</span>
                        </li>
                        <li style="margin-bottom: 12px; padding-left: 32px; position: relative; display: flex; align-items: center;">
                            <span style="position: absolute; left: 0; width: 24px; height: 24px; background: linear-gradient(135deg, #FAD30C 0%, #FFC107 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(250, 211, 12, 0.3);">
                                <span style="color: #333333; font-weight: bold; font-size: 12px;">•</span>
                            </span>
                            <span>12-Week Happiness Boot Camp Program</span>
                        </li>
                    </ul>

                    <!-- Enhanced Download Button with Hover Effect -->
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/Todd_Patkin_One_Sheet .pdf" target="_blank" class="btn speaker-download-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 16px 40px; background: linear-gradient(135deg, #FAD30C 0%, #FFC107 100%); border: none; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 16px; line-height: 1.5; text-transform: uppercase; text-align: center; color: #333333; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(250, 211, 12, 0.3);">
                        <i class="fas fa-download" style="font-size: 18px;"></i>
                        <span>Download one sheet pdf</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Enhanced hover effects */
.book-cover-container img:hover {
    transform: translateY(-5px);
}

.speaker-download-btn:hover {
    background: linear-gradient(135deg, #FFC107 0%, #FAD30C 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(250, 211, 12, 0.4);
}
</style>

<!-- Reviews Section -->
<section class="reviews-section" style="background: #FFFFFF; padding: 60px 0;">
    <div class="container" style="max-width: 1400px;">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dr. Richard Levin.webp" alt="Dr. Richard Levin"
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-3.webp" alt="Dr. Mary Ann McDonnell"
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-author-3.webp" alt="Dr. Mary Ann McDonnell"
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dr. Fatima Garcia-Fedorowicz.jfif" alt="Dr. Fatima Garcia-Fedorowicz"
                                            class="review-author-image rounded-3">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brian fox.jpeg" alt="Brian Fox"
                                            class="review-author-image rounded-3">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Renée Kwok.jfif" alt="Renée Kwok"
                                            class="review-author-image rounded-3">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brian fox.jpeg" alt="Brian Fox"
                                            class="review-author-image rounded-3">
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
                                    <p class="review-text">"Whether you read one page or one hundred pages of Todd Patkin's book, you will find hope
                                         and inspiration in his words.
                                         He offers practical steps that will help all of us build happier lives. As Todd reminds us, 
                                         happiness is a journey, not a destination."</p>
                                    <hr class="review-divider">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Renée Kwok.jfif" alt="Renée Kwok"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Renée Kwok</h5>
                                            <small class="review-author-role">President, TFC Financial Management</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Desktop: Slide 3 (Cards 7, 8, 9) | Mobile: Individual slides -->
                    <!-- Review Card 7 -->
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
                                    <p class="review-text">"This book tells one man's compelling story—but it's also
                                         a powerful call to action. It's time for us to change what we prioritize,
                                          how we live our lives, and how we measure success. We can choose to 
                                          pursue our present course of being overstressed, overworked, and 
                                          fundamentally dissatisfied, or we can choose to take Todd Patkin's
                                           message of healing and hope to heart."</p>
                                    <hr class="review-divider">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Salman Ahmad.jfif" alt="Salman Ahmad"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Salman Ahmad</h5>
                                            <small class="review-author-role">UN Goodwill Ambassador</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Card 8 - Desktop only (part of slide 3) -->
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
                                    <p class="review-text">"There are plenty of people in the world who have enjoyed financial success... but very few who have done with that success what Todd Patkin has. He has given back to the world in so many ways and with so many
                                         different causes and personal relationships. Finding Happiness is yet another gift to a world Todd's already done so much for."</p>
                                    <hr class="review-divider">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gary Marino.jpeg" alt="Gary Marino"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Gary Marino</h5>
                                            <small class="review-author-role">Executive Director of Generation Excell</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Card 9 - Desktop only (part of slide 3) -->
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
                                    <p class="review-text">"Reading this book is like having a conversation with Todd Patkin.
                                         It's frank, funny, and disarming. As one who has seen depression, I was
                                          grateful for this tour through the mind of someone who suffered from the 
                                          condition and got out."</p>
                                    <hr class="review-divider">
                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Charity Sunshine Tillemann Dick.jfif" alt="Charity Sunshine Tillemann Dick"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Charity Sunshine Tillemann Dick</h5>
                                            <small class="review-author-role">Soprano</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review Card 8 - Mobile only -->
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
                                    <p class="review-text">"
                                    This book tells one man's compelling story—but it's also
                                         a powerful call to action. It's time for us to change what we prioritize,
                                          how we live our lives, and how we measure success. We can choose to 
                                          pursue our present course of being overstressed, overworked, and 
                                          fundamentally dissatisfied, or we can choose to take Todd Patkin's
                                           message of healing and hope to heart."</p>
                                    <hr class="review-divider">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Salman Ahmad.jfif" alt="Salman Ahmad"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Salman Ahmad</h5>
                                            <small class="review-author-role">UN Goodwill Ambassador</small>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                    <!-- Review Card 9 - Mobile only -->
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
                                    <p class="review-text">"There are plenty of people in the world who have enjoyed financial success... but very few who have done with that success what
                                         Todd Patkin has. He has given back to the world in so many ways and with so many different causes 
                                         and personal relationships. Finding Happiness is yet another gift to a world Todd's already done so much for."</p>
                                    <hr class="review-divider">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gary Marino.jpeg" alt="Gary Marino"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Gary Marino</h5>
                                            <small class="review-author-role">Executive Director of Generation Excell</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review Card 10 - Mobile only -->
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
                                    <p class="review-text">"Reading this book is like having a conversation with Todd Patkin. It's frank, funny, and disarming. As one who has seen depression, I was grateful for this tour through the mind of someone who suffered from the condition and got out. Finding Happiness is a useful guidebook for anyone who is looking to break out of a rut as well as for those who would like to help another person through to the sunshine on the other side of sadness."</p>
                                    <hr class="review-divider">
                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Charity Sunshine Tillemann Dick.jfif" alt="Charity Sunshine Tillemann Dick"
                                            class="review-author-image rounded-3">
                                        <div class="review-author-info">
                                            <h5 class="review-author-name">Charity Sunshine Tillemann Dick</h5>
                                            <small class="review-author-role">Soprano</small>
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
                    <!-- Desktop: 3 indicators (for 3 slides with 3 cards each) -->
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active d-none d-md-inline-block" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="3" class="d-none d-md-inline-block" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="6" class="d-none d-md-inline-block" aria-label="Slide 3"></button>
                    <!-- Mobile: 9 indicators (for 9 individual card slides) -->
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active d-md-none" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" class="d-md-none" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2" class="d-md-none" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="3" class="d-md-none" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="4" class="d-md-none" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="5" class="d-md-none" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="6" class="d-md-none" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="7" class="d-md-none" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="8" class="d-md-none" aria-label="Slide 9"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
