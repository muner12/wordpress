<?php 
/**
 * Template for blog posts index page
 * This is used when WordPress is set to show blog posts on a separate page
 * For the front page, front-page.php is used instead
 */
get_header(); 
?>
<section class="blog-section bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">Blog <span class="text-warning">Posts</span></h2>
        </div>
        <?php if ( have_posts() ) : ?>
            <div class="row g-4">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm h-100 blog-card">
                            <img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : get_template_directory_uri() . '/assets/images/default-blog.webp'; ?>"
                                class="card-img-top blog-card-img"
                                alt="<?php the_title_attribute(); ?>">
                            <div class="card-body p-3">
                                <h4 class="card-title fw-bold mb-2"><?php the_title(); ?></h4>
                                <p class="card-text text-muted mb-3"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No blog posts found.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>