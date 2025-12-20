<?php
/**
 * kmtradingjp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kmtradingjp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once get_template_directory() . '/inc/theme-setup.php';
// require_once get_template_directory() . '/inc/enqueue.php';
// require_once get_template_directory() . '/inc/custom-post-types.php';

/**
 * Create required pages on theme activation
 */
function toddpatkin_create_required_pages() {
    $pages = array(
        array( 'slug' => 'expertise', 'title' => 'Expertise', 'template' => 'templates/template-expertise.php' ),
        array( 'slug' => 'about-book', 'title' => 'About Book', 'template' => 'templates/template-about-book.php' ),
        array( 'slug' => 'about-author', 'title' => 'About Author', 'template' => 'templates/template-about-author.php' ),
        array( 'slug' => 'course', 'title' => 'Course', 'template' => 'templates/template-course.php' ),
        array( 'slug' => 'podcast', 'title' => 'Podcast', 'template' => 'templates/template-podcast.php' ),
        array( 'slug' => 'blog', 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        array( 'slug' => 'preview-book', 'title' => 'Preview Book', 'template' => 'templates/template-preview-book.php' ),
    );
    
    foreach ( $pages as $page_data ) {
        $page = get_page_by_path( $page_data['slug'] );
        
        if ( ! $page ) {
            $new_page = array(
                'post_title'    => $page_data['title'],
                'post_name'     => $page_data['slug'],
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
                'post_author'   => 1,
            );
            
            $page_id = wp_insert_post( $new_page, true );
            
            if ( ! is_wp_error( $page_id ) && $page_id && ! empty( $page_data['template'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        } else {
            // Update template if page exists
            if ( ! empty( $page_data['template'] ) ) {
                $current_template = get_page_template_slug( $page->ID );
                if ( $current_template !== $page_data['template'] ) {
                    update_post_meta( $page->ID, '_wp_page_template', $page_data['template'] );
                }
            }
        }
    }
    
    flush_rewrite_rules();
}

// Create pages on theme activation
add_action( 'after_switch_theme', 'toddpatkin_create_required_pages' );

// Create pages when admin visits (for existing installations)
add_action( 'admin_init', 'toddpatkin_create_required_pages' );

// Force create pages on every page load if missing (aggressive for Hostinger)
add_action( 'wp', 'toddpatkin_force_create_pages_on_load' );
function toddpatkin_force_create_pages_on_load() {
    // Check if we've already checked in the last minute (to avoid performance issues)
    $last_check = get_transient( 'toddpatkin_pages_last_check' );
    if ( $last_check ) {
        return;
    }
    
    $required_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book' );
    $missing = false;
    
    foreach ( $required_slugs as $slug ) {
        $page = get_page_by_path( $slug );
        if ( ! $page ) {
            $missing = true;
            break;
        }
    }
    
    if ( $missing ) {
        toddpatkin_create_required_pages();
        flush_rewrite_rules( false );
    }
    
    // Set transient to check again in 1 minute
    set_transient( 'toddpatkin_pages_last_check', time(), 60 );
}

// Also create pages on frontend init if they're missing (for Hostinger)
add_action( 'init', 'toddpatkin_ensure_pages_exist', 1 );
function toddpatkin_ensure_pages_exist() {
    // Check if any required pages are missing
    $required_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book' );
    $missing = false;
    
    foreach ( $required_slugs as $slug ) {
        $page = get_page_by_path( $slug );
        if ( ! $page ) {
            $missing = true;
            break;
        }
    }
    
    // If any pages are missing, create them all
    if ( $missing ) {
        toddpatkin_create_required_pages();
        // Flush rewrite rules after creating pages
        flush_rewrite_rules( false );
    }
}

/**
 * Intercept requests BEFORE WordPress determines 404
 * This runs very early to catch missing pages
 */
add_action( 'parse_request', 'toddpatkin_intercept_missing_pages', 1 );
function toddpatkin_intercept_missing_pages( $wp ) {
    if ( ! isset( $_SERVER['REQUEST_URI'] ) ) {
        return;
    }
    
    $request_uri = trim( $_SERVER['REQUEST_URI'], '/' );
    $path_parts = array_filter( explode( '/', $request_uri ) );
    $slug = end( $path_parts );
    $slug = strtok( $slug, '?' );
    $slug = rtrim( $slug, '/.html' );
    
    $page_templates = array(
        'expertise' => array( 'title' => 'Expertise', 'template' => 'templates/template-expertise.php' ),
        'about-book' => array( 'title' => 'About Book', 'template' => 'templates/template-about-book.php' ),
        'about-author' => array( 'title' => 'About Author', 'template' => 'templates/template-about-author.php' ),
        'course' => array( 'title' => 'Course', 'template' => 'templates/template-course.php' ),
        'podcast' => array( 'title' => 'Podcast', 'template' => 'templates/template-podcast.php' ),
        'blog' => array( 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        'preview-book' => array( 'title' => 'Preview Book', 'template' => 'templates/template-preview-book.php' ),
    );
    
    if ( ! empty( $slug ) && isset( $page_templates[ $slug ] ) ) {
        $page = get_page_by_path( $slug );
        
        if ( ! $page ) {
            // Create the page immediately
            $page_data = array(
                'post_title'    => $page_templates[ $slug ]['title'],
                'post_name'     => $slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
                'post_author'   => 1,
            );
            
            $page_id = wp_insert_post( $page_data, false ); // Use false to avoid validation issues
            
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                if ( ! empty( $page_templates[ $slug ]['template'] ) ) {
                    update_post_meta( $page_id, '_wp_page_template', $page_templates[ $slug ]['template'] );
                }
                
                // Flush rewrite rules
                flush_rewrite_rules( false );
                
                // Redirect to the new page
                $permalink = get_permalink( $page_id );
                if ( $permalink ) {
                    wp_redirect( $permalink, 302 );
                    exit;
                }
            }
        }
    }
}

/**
 * Handle 404 errors - create page if it's one of our required pages
 * This is a backup in case parse_request doesn't catch it
 */
add_action( 'template_redirect', 'toddpatkin_handle_404_create_page', 1 );
function toddpatkin_handle_404_create_page() {
    if ( ! is_404() ) {
        return;
    }
    
    if ( ! isset( $_SERVER['REQUEST_URI'] ) ) {
        return;
    }
    
    $request_uri = trim( $_SERVER['REQUEST_URI'], '/' );
    $path_parts = array_filter( explode( '/', $request_uri ) );
    $slug = end( $path_parts );
    $slug = strtok( $slug, '?' );
    $slug = rtrim( $slug, '/.html' );
    
    $page_templates = array(
        'expertise' => array( 'title' => 'Expertise', 'template' => 'templates/template-expertise.php' ),
        'about-book' => array( 'title' => 'About Book', 'template' => 'templates/template-about-book.php' ),
        'about-author' => array( 'title' => 'About Author', 'template' => 'templates/template-about-author.php' ),
        'course' => array( 'title' => 'Course', 'template' => 'templates/template-course.php' ),
        'podcast' => array( 'title' => 'Podcast', 'template' => 'templates/template-podcast.php' ),
        'blog' => array( 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        'preview-book' => array( 'title' => 'Preview Book', 'template' => 'templates/template-preview-book.php' ),
    );
    
    if ( ! empty( $slug ) && isset( $page_templates[ $slug ] ) ) {
        $page = get_page_by_path( $slug );
        
        if ( ! $page ) {
            $page_data = array(
                'post_title'    => $page_templates[ $slug ]['title'],
                'post_name'     => $slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
                'post_author'   => 1,
            );
            
            $page_id = wp_insert_post( $page_data, false );
            
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                if ( ! empty( $page_templates[ $slug ]['template'] ) ) {
                    update_post_meta( $page_id, '_wp_page_template', $page_templates[ $slug ]['template'] );
                }
                
                flush_rewrite_rules( false );
                
                $permalink = get_permalink( $page_id );
                if ( $permalink ) {
                    wp_redirect( $permalink, 302 );
                    exit;
                }
            }
        } else {
            // Page exists but we're on 404, redirect to it
            $permalink = get_permalink( $page->ID );
            if ( $permalink ) {
                wp_redirect( $permalink, 302 );
                exit;
            }
        }
    }
}

/**
 * Add admin page to manually create pages (for Hostinger troubleshooting)
 */
add_action( 'admin_menu', 'toddpatkin_add_create_pages_menu' );
function toddpatkin_add_create_pages_menu() {
    add_theme_page(
        'Create Required Pages',
        'Create Pages',
        'manage_options',
        'toddpatkin-create-pages',
        'toddpatkin_create_pages_admin_page'
    );
}

function toddpatkin_create_pages_admin_page() {
    if ( isset( $_POST['create_pages'] ) && check_admin_referer( 'toddpatkin_create_pages_action' ) ) {
        toddpatkin_create_required_pages();
        echo '<div class="notice notice-success"><p>All required pages have been created successfully!</p></div>';
    }
    
    ?>
    <div class="wrap">
        <h1>Create Required Pages</h1>
        <p>This will create all required pages for the Todd Patkin theme:</p>
        <ul>
            <li>Expertise</li>
            <li>About Book</li>
            <li>About Author</li>
            <li>Course</li>
            <li>Podcast</li>
            <li>Blog</li>
            <li>Preview Book</li>
        </ul>
        <form method="post" action="">
            <?php wp_nonce_field( 'toddpatkin_create_pages_action' ); ?>
            <p>
                <input type="submit" name="create_pages" class="button button-primary" value="Create All Pages Now" />
            </p>
        </form>
    </div>
    <?php
}