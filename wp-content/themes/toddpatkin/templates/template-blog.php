<?php

/**
 * Template Name: Blog
 */
get_header();
?>
<style>
    /* Make entire blog card clickable with proper cursor */
    .blog-section a.text-decoration-none {
        cursor: pointer;
        display: block;
        text-decoration: none;
        color: inherit;
        position: relative;
        z-index: 1;
    }
    
    .blog-section a.text-decoration-none:hover {
        text-decoration: none;
        color: inherit;
    }
    
    /* Ensure card hover effects work with anchor wrapper */
    .blog-section a.text-decoration-none .blog-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .blog-section a.text-decoration-none:hover .blog-card {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15) !important;
        border-color: #ffc107 !important;
    }
    
    /* Ensure link works properly - don't block pointer events */
    .blog-section a.text-decoration-none .blog-card,
    .blog-section a.text-decoration-none .blog-card * {
        cursor: pointer;
    }
    
    /* Responsive Blog Badge Styles */
    .blog-section .badge {
        display: inline-flex !important;
        align-items: center;
        gap: 6px;
    }
    
    .blog-section .badge img {
        flex-shrink: 0;
        object-fit: contain;
    }
    
    @media (max-width: 768px) {
        .blog-section .badge {
            font-size: 11px !important;
            padding: 3px 6px !important;
        }
        
        .blog-section .badge img {
            width: 12px !important;
            height: 12px !important;
            margin-right: 4px !important;
        }
    }
    
    @media (max-width: 576px) {
        .blog-section .badge {
            font-size: 10px !important;
            padding: 2px 5px !important;
        }
        
        .blog-section .badge img {
            width: 11px !important;
            height: 11px !important;
            margin-right: 3px !important;
        }
    }
    
    /* Align Read More button to bottom of all cards */
    .blog-section .blog-card {
        display: flex;
        flex-direction: column;
    }
    
    .blog-section .blog-card .card-body {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    
    .blog-section .blog-card .card-body .card-text {
        flex-grow: 1;
    }
    
    .blog-section .blog-card .card-body .btn,
    .blog-section .blog-card .card-body a.btn {
        margin-top: auto;
        align-self: flex-start;
    }
</style>
<!-- Blog Section -->
<section id="blogs" class="blog-section bg-white">
    <div class="container ">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">Featured <span
                    class="text-warning">Blogs</span></h2>
            <p class="text-muted">Listen to Todd share insights on happiness, mental health, and personal transformation</p>
        </div>

        <!-- Blog Cards Grid -->
        <?php
        // Removed WordPress post query - only showing custom blog pages (blog-1 through blog-7)
        ?>

        <?php
        // Static blogs for cards 4-7 - using actual content from blogs_content.txt
        $static_blogs = [];
        
        // Blog 4: Season of Peace
        $blog4 = toddpatkin_get_blog_content(4);
        if ($blog4) {
            $static_blogs[] = [
                'image' => get_template_directory_uri() . '/assets/images/blog_4.png',
                'title' => $blog4['title'],
                'excerpt' => toddpatkin_get_blog_excerpt(4, 30),
                'link' => esc_url(home_url('/blog/blog-4'))
            ];
        }
        
        // Blog 5: How to boost your employee engagement
        $blog5 = toddpatkin_get_blog_content(5);
        if ($blog5) {
            $static_blogs[] = [
                'image' => get_template_directory_uri() . '/assets/images/blog_5.png',
                'title' => $blog5['title'],
                'excerpt' => toddpatkin_get_blog_excerpt(5, 30),
                'link' => esc_url(home_url('/blog/blog-5'))
            ];
        }
        
        // Blog 6: Online While on Vacation
        $blog6 = toddpatkin_get_blog_content(6);
        if ($blog6) {
            $static_blogs[] = [
                'image' => get_template_directory_uri() . '/assets/images/blog_6.png',
                'title' => $blog6['title'],
                'excerpt' => toddpatkin_get_blog_excerpt(6, 30),
                'link' => esc_url(home_url('/blog/blog-6'))
            ];
        }
        
        // Blog 7: Yes, parents, the kids really are okay
        $blog7 = toddpatkin_get_blog_content(7);
        if ($blog7) {
            $static_blogs[] = [
                'image' => get_template_directory_uri() . '/assets/images/blog_7.png',
                'title' => $blog7['title'],
                'excerpt' => toddpatkin_get_blog_excerpt(7, 30),
                'link' => esc_url(home_url('/blog/blog-7'))
            ];
        }
        
        // Removed $image_index and $post_count as we're only showing static blog cards
        ?>
        
        <div class="row g-4">
            <?php 
            // Always show first three cards with specific content from front-page
            // Card 1
            ?>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png" class="card-img-top blog-card-img"
                            alt="Masks: The Other Side of the Coin">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2 flex-wrap">
                                <span class="badge d-flex align-items-center" style="padding: 4px 8px; font-size: 12px; white-space: nowrap;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-line.png" alt="Blog Icon" style="width: 14px; height: 14px; margin-right: 6px; flex-shrink: 0;">
                                    <span style="color: #275BA7; font-weight: 500;">Blog</span>
                                </span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Masks: The Other Side of the <br/> Coin</h4>
                            <p class="card-text text-muted mb-3">
                            <?php 
                            $blog1_excerpt = toddpatkin_get_blog_excerpt(1, 30);
                            echo $blog1_excerpt ? esc_html($blog1_excerpt) : 'Two weeks ago I wrote about the "masks" we so often wear in our daily lives—an appropriate topic to post about on the day before Halloween, I thought! Here\'s an excerpt of what I wrote: As many people go through life...';
                            ?>
                            </p>
                            <a href="<?php echo esc_url(home_url('/blog/blog-1')); ?>" class="btn btn-sm" style="background-color: transparent; border: 2px solid #FAD30C; border-radius: 8px;"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
            
            <?php 
            // Card 2
            ?>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_2.png" class="card-img-top blog-card-img"
                            alt="5 Things Your Employees Are Dying to Hear from You">
                        <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-2 flex-wrap">
                                <span class="badge d-flex align-items-center" style="padding: 4px 8px; font-size: 12px; white-space: nowrap;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-line.png" alt="Blog Icon" style="width: 14px; height: 14px; margin-right: 6px; flex-shrink: 0;">
                                    <span style="color: #275BA7; font-weight: 500;">Blog</span>
                                </span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">5 Things Your Employees Are Dying to Hear from You</h4>
                            <p class="card-text text-muted mb-3">
                            <?php 
                            $blog2_excerpt = toddpatkin_get_blog_excerpt(2, 30);
                            echo $blog2_excerpt ? esc_html($blog2_excerpt) : 'Business leaders and owners: What were your last 10 or 15 employee conversations like? Chances are, they included phrases like, "I need you to finish that projection by the end of the day," or, "I\'m putting you on the Brown...';
                            ?>
                            </p>
                            <a href="<?php echo esc_url(home_url('/blog/blog-2')); ?>" class="btn btn-sm" style="background-color: transparent; border: 2px solid #FAD30C;  border-radius: 8px;"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
            
            <?php 
            // Card 3
            ?>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_3.png" class="card-img-top blog-card-img"
                            alt="It's up to you..... your happiness that is!">
                        <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-2 flex-wrap">
                                <span class="badge d-flex align-items-center" style="padding: 4px 8px; font-size: 12px; white-space: nowrap;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-line.png" alt="Blog Icon" style="width: 14px; height: 14px; margin-right: 6px; flex-shrink: 0;">
                                    <span style="color: #275BA7; font-weight: 500;">Blog</span>
                                </span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">It's Up to You…Your Happiness, That Is!</h4>
                            <p class="card-text text-muted mb-3">
                            <?php 
                            $blog3_excerpt = toddpatkin_get_blog_excerpt(3, 30);
                            echo $blog3_excerpt ? esc_html($blog3_excerpt) : 'The phrase "happiness is a choice" is something we\'ve all heard before. But have you ever really stopped to think about what it means? If you\'re like me, your first reaction was probably something like, Yeah, right...';
                            ?>
                            </p>
                            <a href="<?php echo esc_url(home_url('/blog/blog-3')); ?>" class="btn btn-sm" style="background-color: transparent; border: 2px solid #FAD30C; border-radius: 8px;"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
            
            <?php 
            // Display static blog cards (blog-4 through blog-7)
            // Cards 1-3 are already displayed above
            foreach ($static_blogs as $blog) :
            ?>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo esc_url($blog['image']); ?>"
                            class="card-img-top blog-card-img"
                            alt="<?php echo esc_attr($blog['title']); ?>">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2 flex-wrap">
                                <span class="badge d-flex align-items-center" style="padding: 4px 8px; font-size: 12px; white-space: nowrap;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-line.png" alt="Blog Icon" style="width: 14px; height: 14px; margin-right: 6px; flex-shrink: 0;">
                                    <span style="color: #275BA7; font-weight: 500;">Blog</span>
                                </span>
                            </div>
                            <h4 class="card-title fw-bold mb-2"><?php echo esc_html($blog['title']); ?></h4>
                            <p class="card-text text-muted mb-3"><?php echo esc_html($blog['excerpt']); ?></p>
                            <a href="<?php echo esc_url($blog['link']); ?>" class="btn btn-sm" style="background-color: transparent; border: 2px solid #FAD30C; border-radius: 8px;"><span class="btn-content">Read More</span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>