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
        $default_image = get_template_directory_uri() . '/assets/images/default-blog.webp';

        $paged = get_query_var('paged') ? get_query_var('paged') : get_query_var('page');
        $paged = $paged ? $paged : 1;

        $args = [
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'paged'          => $paged,
            'post__not_in'   => get_option('sticky_posts'),
            'meta_query'     => [
                'relation' => 'OR',
                [
                    'key'     => '_exclude_from_blog',
                    'value'   => '1',
                    'compare' => '!='
                ],
                [
                    'key'     => '_exclude_from_blog',
                    'compare' => 'NOT EXISTS'
                ]
            ]
        ];

        $blog_query = new WP_Query($args);
        ?>

        <?php
        // Array of blog images to cycle through (first 3 cards)
        $blog_images = [
            get_template_directory_uri() . '/assets/images/blog_1.png',
            get_template_directory_uri() . '/assets/images/blog_2.png',
            get_template_directory_uri() . '/assets/images/blog_3.png',
        ];
        
        // Featured blog images (last 3 cards)
        $featured_blog_images = [
            get_template_directory_uri() . '/assets/images/blog-featured-1-41dc6a.png',
            get_template_directory_uri() . '/assets/images/blog-featured-2-41dc6a.png',
            get_template_directory_uri() . '/assets/images/blog-featured-3-41dc6a.png',
        ];
        
        // Static blog content (fallback or additional cards)
        // Helper function to get blog detail page URL by title
        function get_blog_permalink_by_title($title) {
            // Map blog titles to their page slugs
            $blog_map = [
                'Money and Happiness: Why More Isn\'t Always Better' => 'blog-1',
                'The Quiet Time Revolution: Why Doing Nothing Changed Everything' => 'blog-2',
                '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)' => 'blog-3',
                'The Power of Gratitude: How Thankfulness Transforms Your Life' => 'blog-4',
                'Building Authentic Relationships: The Foundation of True Happiness' => 'blog-5',
                'Finding Your Purpose: A Journey from Success to Significance' => 'blog-6'
            ];
            
            if (isset($blog_map[$title])) {
                $blog_slug = $blog_map[$title];
                // Always use direct URL structure to avoid WordPress routing issues
                // This ensures we go to the blog detail page, not author archives
                return esc_url(home_url('/blog/' . $blog_slug));
            }
            
            // Final fallback to blog listing URL
            return esc_url(home_url('/blog'));
        }
        
        $static_blogs = [
            [
                'image' => $blog_images[0],
                'title' => 'Money and Happiness: Why More Isn\'t Always Better',
                'excerpt' => 'Despite achieving financial success beyond my wildest dreams, I discovered the hard way that wealth can\'t buy happiness. Here\'s what actually creates lasting contentment...',
                'link' => get_blog_permalink_by_title('Money and Happiness: Why More Isn\'t Always Better')
            ],
            [
                'image' => $blog_images[1],
                'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything',
                'excerpt' => 'As a chronic achiever and perfectionist, the concept of \'quiet time\' seemed impossible—and unnecessary. But learning to be still became one of the most transformative...',
                'link' => get_blog_permalink_by_title('The Quiet Time Revolution: Why Doing Nothing Changed Everything')
            ],
            [
                'image' => $blog_images[2],
                'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)',
                'excerpt' => 'You\'re successful, accomplished, and from the outside your life looks perfect. But inside, you\'re struggling. These are the warning signs I wish I\'d recognized sooner...',
                'link' => get_blog_permalink_by_title('5 Signs You\'re a High-Functioning Depressive (And What to Do About It)')
            ],
            [
                'image' => $featured_blog_images[0],
                'title' => 'Money and Happiness: Why More Isn\'t Always Better',
                'excerpt' => 'Despite achieving financial success beyond my wildest dreams, I discovered the hard way that wealth can\'t buy happiness. Here\'s what actually creates lasting contentment...',
                'link' => get_blog_permalink_by_title('Money and Happiness: Why More Isn\'t Always Better')
            ],
            [
                'image' => $featured_blog_images[1],
                'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything',
                'excerpt' => 'As a chronic achiever and perfectionist, the concept of \'quiet time\' seemed impossible—and unnecessary. But learning to be still became one of the most transformative...',
                'link' => get_blog_permalink_by_title('The Quiet Time Revolution: Why Doing Nothing Changed Everything')
            ],
            [
                'image' => $featured_blog_images[2],
                'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)',
                'excerpt' => 'You\'re successful, accomplished, and from the outside your life looks perfect. But inside, you\'re struggling. These are the warning signs I wish I\'d recognized sooner...',
                'link' => get_blog_permalink_by_title('5 Signs You\'re a High-Functioning Depressive (And What to Do About It)')
            ],
        ];
        
        $image_index = 0;
        $post_count = 0;
        ?>
        
        <div class="row g-4">
            <?php 
            // Always show first card with specific content
            if ($post_count == 0) : 
                // Always use direct URL structure to avoid routing issues
                $first_blog_link = esc_url(home_url('/blog/blog-1'));
            ?>
                <div class="col-12 col-md-4">
                    <a href="<?php echo $first_blog_link; ?>" class="text-decoration-none" title="Money and Happiness: Why More Isn't Always Better">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo esc_url($blog_images[0]); ?>"
                            class="card-img-top blog-card-img"
                            alt="Money and Happiness: Why More Isn't Always Better">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-2">Money and Happiness: Why More Isn't Always Better</h4>
                            <p class="card-text text-muted mb-3">Despite achieving financial success beyond my wildest dreams, I discovered the hard way that wealth can't buy happiness. Here's what actually creates lasting contentment...</p>
                                <span class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $post_count++; ?>
            <?php endif; ?>
            
            <?php if ($blog_query->have_posts()) : ?>
                <?php while ($blog_query->have_posts() && $post_count < 6) : $blog_query->the_post(); 
                    // Skip default "Hello World" post
                    $post_title = get_the_title();
                    $post_slug = get_post_field('post_name', get_the_ID());
                    if (strtolower($post_title) === 'hello world!' || $post_slug === 'hello-world') {
                        continue;
                    }
                ?>
                    <?php 
                    // For dynamic posts, link to blog listing or use a default
                    // Since we're using static blog pages, link dynamic posts to blog listing
                    $post_permalink = esc_url(home_url('/blog'));
                ?>
                    <div class="col-12 col-md-4">
                        <a href="<?php echo $post_permalink; ?>" class="text-decoration-none" title="<?php the_title_attribute(); ?>">
                        <div class="card shadow-sm h-100 blog-card">
                            <img src="<?php echo esc_url($blog_images[$image_index % count($blog_images)]); ?>"
                                class="card-img-top blog-card-img"
                                alt="<?php the_title_attribute(); ?>">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-warning text-dark me-2">
                                        <?php
                                        $category = get_the_category();
                                        $category_name = $category ? esc_html($category[0]->name) : 'Blogs';
                                        // Skip "Uncategorized" category
                                        if (strtolower($category_name) === 'uncategorized') {
                                            $category_name = 'Blogs';
                                        }
                                        echo $category_name;
                                        ?>
                                    </span>
                                </div>
                                <h4 class="card-title fw-bold mb-2"><?php the_title(); ?></h4>
                                <p class="card-text text-muted mb-3"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <span class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php 
                    $image_index++; 
                    $post_count++;
                    ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            
            <?php 
            // Fill remaining slots with static blog cards if we have less than 6 posts
            $total_cards = 6;
            $remaining = $total_cards - $post_count;
            for ($i = 0; $i < $remaining && $i < count($static_blogs); $i++) : 
                $blog = $static_blogs[($post_count + $i) % count($static_blogs)];
            ?>
                <div class="col-12 col-md-4">
                    <a href="<?php echo esc_url($blog['link']); ?>" class="text-decoration-none">
                    <div class="card shadow-sm h-100 blog-card">
                        <img src="<?php echo esc_url($blog['image']); ?>"
                            class="card-img-top blog-card-img"
                            alt="<?php echo esc_attr($blog['title']); ?>">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning text-dark me-2">Blogs</span>
                            </div>
                            <h4 class="card-title fw-bold mb-2"><?php echo esc_html($blog['title']); ?></h4>
                            <p class="card-text text-muted mb-3"><?php echo esc_html($blog['excerpt']); ?></p>
                                <span class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>

        <?php if ($blog_query->have_posts() && $blog_query->max_num_pages > 1) : ?>
            <div class="blog-pagination text-center mt-5">
                <?php
                echo paginate_links([
                    'current'   => max(1, $paged),
                    'total'     => $blog_query->max_num_pages,
                    'prev_text' => '&laquo; Prev',
                    'next_text' => 'Next &raquo;',
                ]);
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
?>