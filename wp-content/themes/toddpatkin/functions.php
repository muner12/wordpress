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
 * Create all required pages on theme activation
 */
function toddpatkin_create_required_pages() {
    $pages = array(
        array(
            'slug' => 'expertise',
            'title' => 'Expertise',
            'template' => 'templates/template-expertise.php'
        ),
        array(
            'slug' => 'about-book',
            'title' => 'About Book',
            'template' => 'templates/template-about-book.php'
        ),
        array(
            'slug' => 'about-author',
            'title' => 'About Author',
            'template' => 'templates/template-about-author.php'
        ),
        array(
            'slug' => 'course',
            'title' => 'Course',
            'template' => 'templates/template-course.php'
        ),
        array(
            'slug' => 'podcast',
            'title' => 'Podcast',
            'template' => 'templates/template-podcast.php'
        ),
        array(
            'slug' => 'blog',
            'title' => 'Blog',
            'template' => 'templates/template-blog.php'
        ),
        array(
            'slug' => 'preview-book',
            'title' => 'Preview Book',
            'template' => 'templates/template-preview-book.php'
        ),
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
            // Update template if page exists but template is different
            if ( ! empty( $page_data['template'] ) ) {
                $current_template = get_page_template_slug( $page->ID );
                if ( $current_template !== $page_data['template'] ) {
                    update_post_meta( $page->ID, '_wp_page_template', $page_data['template'] );
                }
            }
        }
    }
    
    // Flush rewrite rules to ensure permalinks work
    flush_rewrite_rules();
}

// Run on theme activation
add_action( 'after_switch_theme', 'toddpatkin_create_required_pages' );

// Also run on admin_init to ensure pages exist (for existing installations)
add_action( 'admin_init', 'toddpatkin_create_required_pages_once' );
function toddpatkin_create_required_pages_once() {
    // Only run once per installation
    $pages_created = get_option( 'toddpatkin_pages_created', false );
    if ( ! $pages_created ) {
        toddpatkin_create_required_pages();
        update_option( 'toddpatkin_pages_created', true );
    }
}

// Also try to create pages on frontend if they're missing (runs once)
add_action( 'wp', 'toddpatkin_create_required_pages_on_frontend' );
function toddpatkin_create_required_pages_on_frontend() {
    // Only run once, and only if pages haven't been created yet
    $pages_created = get_option( 'toddpatkin_pages_created', false );
    if ( ! $pages_created && current_user_can( 'edit_pages' ) ) {
        // Only create if user has permission (to avoid issues on Hostinger)
        toddpatkin_create_required_pages();
        update_option( 'toddpatkin_pages_created', true );
    }
}

// Add admin notice if pages are missing
add_action( 'admin_notices', 'toddpatkin_check_pages_notice' );
function toddpatkin_check_pages_notice() {
    $required_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book' );
    $missing_pages = array();
    
    foreach ( $required_slugs as $slug ) {
        $page = get_page_by_path( $slug );
        if ( ! $page ) {
            $missing_pages[] = $slug;
        }
    }
    
    if ( ! empty( $missing_pages ) ) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p><strong>Todd Patkin Theme:</strong> Some required pages are missing. ';
        echo '<a href="' . esc_url( admin_url( 'themes.php?page=toddpatkin-create-pages' ) ) . '">Click here to create them automatically</a>.</p>';
        echo '</div>';
    }
}

// Add admin page for manual page creation
add_action( 'admin_menu', 'toddpatkin_add_admin_page' );
function toddpatkin_add_admin_page() {
    add_theme_page(
        'Create Required Pages',
        'Create Pages',
        'manage_options',
        'toddpatkin-create-pages',
        'toddpatkin_create_pages_page'
    );
}

function toddpatkin_create_pages_page() {
    if ( isset( $_GET['create_pages'] ) && $_GET['create_pages'] === '1' ) {
        check_admin_referer( 'toddpatkin_create_pages' );
        toddpatkin_create_required_pages();
        delete_option( 'toddpatkin_pages_created' ); // Reset to allow re-creation
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
        <p>
            <a href="<?php echo esc_url( wp_nonce_url( admin_url( 'themes.php?page=toddpatkin-create-pages&create_pages=1' ), 'toddpatkin_create_pages' ) ); ?>" class="button button-primary">
                Create All Pages
            </a>
        </p>
    </div>
    <?php
}

/**
 * Get page URL by slug
 * Returns the permalink of a page by its slug, auto-creates page if it doesn't exist
 * 
 * @param string $slug Page slug
 * @param string $template_name Template name to assign (optional)
 * @return string Page permalink
 */
function toddpatkin_get_page_url( $slug, $template_name = '' ) {
    // Try to get page by slug
    $page = get_page_by_path( $slug );
    
    if ( ! $page ) {
        // Page doesn't exist, create it
        $page_title = ucwords( str_replace( '-', ' ', $slug ) );
        $page_data = array(
            'post_title'    => $page_title,
            'post_name'     => $slug,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_content'  => '',
            'post_author'   => 1,
        );
        
        $page_id = wp_insert_post( $page_data, true );
        
        // Check for errors
        if ( is_wp_error( $page_id ) ) {
            // If creation failed, return fallback URL
            return home_url( '/' . $slug . '/' );
        }
        
        // Assign template if provided
        if ( $page_id && ! empty( $template_name ) ) {
            update_post_meta( $page_id, '_wp_page_template', $template_name );
        }
        
        if ( $page_id ) {
            // Flush rewrite rules after creating page
            flush_rewrite_rules( false );
            return get_permalink( $page_id );
        }
    } else {
        // Page exists, update template if needed
        if ( ! empty( $template_name ) ) {
            $current_template = get_page_template_slug( $page->ID );
            if ( $current_template !== $template_name ) {
                update_post_meta( $page->ID, '_wp_page_template', $template_name );
            }
        }
        return get_permalink( $page->ID );
    }
    
    // Final fallback
    return home_url( '/' . $slug . '/' );
}