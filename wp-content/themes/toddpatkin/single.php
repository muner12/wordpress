<?php get_header(); ?>

<section class="blog-details-page-section bg-white">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Blog Post Content -->
        <div class="blog-details-content">

            <!-- Title -->
            <h1 class="blog-details-title">
                <?php the_title(); ?>
            </h1>

            <!-- Author -->
            <p class="blog-details-author">
                <?php the_author(); ?>
            </p>

            <!-- Featured Image -->
            <div class="blog-details-featured-image mb-4">
                <img src="<?php echo has_post_thumbnail()
                    ? get_the_post_thumbnail_url(get_the_ID(), 'large')
                    : get_template_directory_uri() . '/assets/images/default-blog.webp'; ?>"
                    alt="<?php the_title_attribute(); ?>"
                    class="img-fluid w-100">
            </div>

            <!-- Body Content (Gutenberg) -->
            <div class="blog-details-body">
                <?php the_content(); ?>
            </div>

        </div>

        <?php endwhile; endif; ?>

        <!-- RELATED BLOGS -->
        <?php
        $categories = wp_get_post_categories(get_the_ID());

        $related_args = [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post__not_in'   => [get_the_ID()],
            'category__in'   => $categories
        ];

        $related_query = new WP_Query($related_args);

        if ($related_query->have_posts()) :
        ?>
        <section class="related-blogs-section mt-5">
            <div class="text-center mb-5">
                <h2 class="related-blogs-title mb-2">
                    <span class="related-blogs-title-blue">RELATED</span>
                    <span class="related-blogs-title-yellow">BLOGS</span>
                </h2>
            </div>

            <div class="row g-4">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>

                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm h-100 blog-card">

                        <img src="<?php echo has_post_thumbnail()
                            ? get_the_post_thumbnail_url(get_the_ID(), 'medium')
                            : get_template_directory_uri() . '/assets/images/default-blog.webp'; ?>"
                            class="card-img-top blog-card-image"
                            alt="<?php the_title_attribute(); ?>">

                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge blog-badge">
                                    <?php
                                    $cat = get_the_category();
                                    echo $cat ? esc_html($cat[0]->name) : 'Blog';
                                    ?>
                                </span>
                            </div>

                            <h4 class="fw-bold mb-3 blog-card-title">
                                <?php the_title(); ?>
                            </h4>

                            <p class="text-muted mb-4 blog-card-description">
                                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-sm">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </section>

        <?php
        wp_reset_postdata();
        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>
