<?php

/**
 * Template Name: Blog
 */
get_header();
?>
<!-- Blog Section -->
<section class="blog-page-section bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="blog-page-title mb-2">
                <span class="blog-page-title-blue">FEATURED</span>
                <span class="blog-page-title-yellow">BLOGS</span>
            </h2>
              <p class="blog-page-subtitle">Lorem ipsum dolor sit amet consectetur. Mattis eu quisque nulla</p>
        </div>

        <!-- Blog Cards Grid -->
        <div class="blog-cards-grid">
           <?php
$default_image = get_template_directory_uri() . '/assets/images/default-blog.webp';

$paged = get_query_var('paged') ? get_query_var('paged') : get_query_var('page');
$paged = $paged ? $paged : 1;

$args = [
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'paged'          => $paged
];

$blog_query = new WP_Query($args);
?>

<?php if ($blog_query->have_posts()) : ?>
    <div class="row g-4">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>

                        <div class="col-12 col-md-4">
                            <div class="card border-0 shadow-sm h-100 blog-card">

                                <img src="<?php echo has_post_thumbnail()
                                                ? get_the_post_thumbnail_url(get_the_ID(), 'medium')
                                                : esc_url($default_image); ?>"
                                    class="card-img-top blog-card-image"
                                    alt="<?php the_title_attribute(); ?>">

                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="badge blog-badge">
                                            <?php
                                            $category = get_the_category();
                                            echo $category ? esc_html($category[0]->name) : 'Blog';
                                            ?>
                                        </span>
                                    </div>

                                    <h4 class="card-title fw-bold mb-3 blog-card-title">
                                        <?php the_title(); ?>
                                    </h4>

                                    <p class="card-text text-muted mb-4 blog-card-description">
                                        <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>"
                                        class="btn btn-warning btn-sm blog-read-more-btn">
                                        <span class="btn-content">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
    </div>

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

<?php wp_reset_postdata(); endif; ?>

        </div>

        <!-- View More Button -->
        <!-- <div class="text-center mt-5">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                class="btn btn-warning btn-lg">
                <span class="btn-content">View More</span>
            </a>
        </div> -->
    </div>
</section>

<?php
get_footer();
?>