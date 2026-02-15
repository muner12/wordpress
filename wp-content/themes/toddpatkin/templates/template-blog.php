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
    
    /* Force blog section content to be visible immediately - override animation classes */
    /* DO NOT override display for grid columns - preserve Bootstrap grid layout */
    .blog-section .card,
    .blog-section .blog-card {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        animation: none !important;
    }
    
    /* Override all scroll animation classes for blog section */
    .blog-section .card.scroll-fade-in,
    .blog-section .blog-card.scroll-fade-in,
    .blog-section .scroll-fade-in:not(.row):not([class*="col-"]),
    .blog-section .scroll-scale-in:not(.row):not([class*="col-"]),
    .blog-section .scroll-slide-left:not(.row):not([class*="col-"]),
    .blog-section .scroll-slide-right:not(.row):not([class*="col-"]) {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        animation: none !important;
    }
    
    /* Force blog card content to be visible - preserve display properties for grid */
    .blog-section .card *,
    .blog-section .blog-card *,
    .blog-section img,
    .blog-section h1,
    .blog-section h2,
    .blog-section h3,
    .blog-section h4,
    .blog-section .btn,
    .blog-section .badge {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        animation: none !important;
    }
    
    /* Ensure row and column classes maintain their Bootstrap display properties */
    .blog-section .row {
        display: flex !important;
    }
    
    .blog-section [class*="col-"] {
        /* Preserve Bootstrap column display - don't override */
    }
</style>

<script>
// Force blog cards to be visible immediately on blog listing page
(function() {
    function forceBlogCardsVisible() {
        const blogCards = document.querySelectorAll('.blog-section .card, .blog-section .blog-card');
        blogCards.forEach(card => {
            // Remove scroll-fade-in class or force it to be visible
            card.classList.remove('scroll-fade-in');
            card.classList.add('animated');
            card.style.setProperty('opacity', '1', 'important');
            card.style.setProperty('visibility', 'visible', 'important');
            card.style.setProperty('transform', 'translateY(0)', 'important');
            card.style.setProperty('display', 'block', 'important');
            
            // Force all children to be visible
            const children = card.querySelectorAll('*');
            children.forEach(child => {
                child.style.setProperty('opacity', '1', 'important');
                child.style.setProperty('visibility', 'visible', 'important');
            });
        });
    }
    
    // Run immediately
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', forceBlogCardsVisible);
    } else {
        forceBlogCardsVisible();
    }
    
    // Run multiple times to catch late-loading content
    setTimeout(forceBlogCardsVisible, 0);
    setTimeout(forceBlogCardsVisible, 100);
    setTimeout(forceBlogCardsVisible, 500);
    setTimeout(forceBlogCardsVisible, 1000);
    
    // Prevent IntersectionObserver from hiding blog section content
    if ('MutationObserver' in window) {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    const target = mutation.target;
                    const parent = target.closest('.blog-section');
                    if (parent) {
                        // Remove all animation classes and force visibility
                        target.classList.remove('scroll-fade-in', 'scroll-scale-in', 'scroll-slide-left', 'scroll-slide-right');
                        target.classList.add('animated');
                        target.style.setProperty('opacity', '1', 'important');
                        target.style.setProperty('visibility', 'visible', 'important');
                        target.style.setProperty('transform', 'none', 'important');
                        target.style.setProperty('display', 'block', 'important');
                        target.style.setProperty('animation', 'none', 'important');
                    }
                }
            });
        });
        
        // Observe the blog section and all its children
        const blogSection = document.querySelector('.blog-section');
        if (blogSection) {
            observer.observe(blogSection, {
                attributes: true,
                attributeFilter: ['class', 'style'],
                subtree: true,
                childList: true
            });
        }
    }
    
    // Also prevent scrollObserver from observing blog section elements
    if (window.scrollObserver) {
        const blogSection = document.querySelector('.blog-section');
        if (blogSection) {
            const allElements = blogSection.querySelectorAll('*');
            allElements.forEach(el => {
                try {
                    window.scrollObserver.unobserve(el);
                } catch(e) {}
            });
            try {
                window.scrollObserver.unobserve(blogSection);
            } catch(e) {}
        }
    }
})();
</script>
<!-- Blog Section -->
<section id="blogs" class="blog-section bg-white">
    <div class="container ">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">Featured <span
                    class="text-warning">Blogs</span></h2>
            <p class="text-muted">Read Todd's insights on happiness, mental health, and personal transformation</p>
        </div>

        <!-- Blog Cards Grid -->
        <?php
        // Removed WordPress post query - only showing custom blog pages (blog-1 through blog-7)
        ?>

        <?php
        // Static blogs for cards 4-17
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
        
        // New 2025 Blogs (8-17)
        $new_blogs = [
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/workplace_blog.png',
                'title' => 'Beyond Burnout: 14 Micro-Practices to Transform Your Workday in 2025',
                'excerpt' => 'In 2025, burnout isn\'t just a buzzword—it\'s an epidemic. Whether you\'re navigating hybrid work schedules, adapting to AI-enhanced workflows, or managing the constant connectivity of remote collaboration tools, the line between "on" and "off" has never been more blurred.',
                'link' => esc_url(home_url('/blog/blog-8'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/leadership_blog.png',
                'title' => '10 Phrases That Will Transform Your Team',
                'excerpt' => 'Business leaders and owners: What were your last 10 or 15 employee conversations like? Chances are, they included phrases like, "I need you to finish that projection by the end of the day," or, "I\'m putting you on the Brown account."',
                'link' => esc_url(home_url('/blog/blog-9'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/perfection_blog.png',
                'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion',
                'excerpt' => 'Perfectionism is a trap. In a world that celebrates achievement and success, we often become our own harshest critics. But what if treating yourself with the same kindness you\'d show a friend could transform your life?',
                'link' => esc_url(home_url('/blog/blog-10'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/breaking_blog.png',
                'title' => 'Breaking the Silence: Mental Health in the Modern Workplace',
                'excerpt' => 'Mental health stigma is real, especially in professional settings. But the conversation is changing. In 2025, workplaces are finally recognizing that mental health is just as important as physical health.',
                'link' => esc_url(home_url('/blog/blog-11'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/digital_boundries_blog.png',
                'title' => 'How to Unplug (Even When It Feels Impossible)',
                'excerpt' => 'In a world where we\'re constantly connected, unplugging feels impossible. But digital boundaries aren\'t just nice to have—they\'re essential for your mental health, relationships, and overall well-being.',
                'link' => esc_url(home_url('/blog/blog-12'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/Reframing_blog.png',
                'title' => 'The Stress Reset: Practical Strategies to Reclaim Calm in Chaotic Times',
                'excerpt' => 'Economic uncertainty, political polarization, climate anxiety—stress is everywhere in 2025. But stress doesn\'t have to control your life. Learn practical strategies to reclaim calm and build resilience.',
                'link' => esc_url(home_url('/blog/blog-13'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/self_compassion.png',
                'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion',
                'excerpt' => 'Self-compassion isn\'t self-pity or making excuses. It\'s treating yourself with the same kindness, concern, and support you\'d show a good friend. Research shows it\'s one of the most powerful tools for resilience and happiness.',
                'link' => esc_url(home_url('/blog/blog-14'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/purpose_blog.png',
                'title' => 'Finding Your Purpose: How to Build a Life That Matters',
                'excerpt' => 'Purpose isn\'t something you find—it\'s something you build. In a world that often measures success by external achievements, discovering what truly matters to you is the foundation of lasting happiness.',
                'link' => esc_url(home_url('/blog/blog-15'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/meaningful_blog.png',
                'title' => 'Beyond Small Talk: The Art of Meaningful Conversation in a Digital Age',
                'excerpt' => 'In an age of digital communication, meaningful conversations are becoming rare. But deep, authentic connection is essential for our well-being. Learn how to move beyond small talk and create conversations that matter.',
                'link' => esc_url(home_url('/blog/blog-16'))
            ],
            [
                'image' => get_template_directory_uri() . '/assets/images/newblog/reducing_blog.png',
                'title' => 'Raising Happy Kids in an Achievement-Obsessed Culture: A Parent\'s Guide',
                'excerpt' => 'Academic pressure, social media comparison, achievement culture—today\'s kids face unprecedented stress. But you can help your children thrive without sacrificing their happiness or mental health.',
                'link' => esc_url(home_url('/blog/blog-17'))
            ]
        ];
        
        // Don't merge yet - we'll display new blogs first, then old blogs
        ?>
        
        <div class="row g-4">
            <?php 
            // Display NEW blogs first (blog-8 through blog-17)
            foreach ($new_blogs as $blog) :
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
            
            <?php 
            // Then show the original three cards (blog-1, blog-2, blog-3)
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
                            alt="Making Mother's Day Meaningful">
                        <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-2 flex-wrap">
                                <span class="badge d-flex align-items-center" style="padding: 4px 8px; font-size: 12px; white-space: nowrap;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-line.png" alt="Blog Icon" style="width: 14px; height: 14px; margin-right: 6px; flex-shrink: 0;">
                                    <span style="color: #275BA7; font-weight: 500;">Blog</span>
                                </span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Making Mother's Day Meaningful</h4>
                            <p class="card-text text-muted mb-3">
                            <?php 
                            $blog2_excerpt = toddpatkin_get_blog_excerpt(2, 30);
                            echo $blog2_excerpt ? esc_html($blog2_excerpt) : 'In case you haven\'t checked your calendar recently, Mother\'s Day is coming up: Sunday, May 12th, to be exact. What are your plans? Are you going to send some flowers or a card, chat with your mom on the phone...';
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
            // Finally, display static blog cards (blog-4 through blog-7)
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