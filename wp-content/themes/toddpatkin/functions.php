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

// Intercept 404 errors and create pages on-the-fly
add_action( 'template_redirect', 'toddpatkin_handle_404_and_create_page', 1 );
function toddpatkin_handle_404_and_create_page() {
    // Get the requested URL path
    if ( ! isset( $_SERVER['REQUEST_URI'] ) ) {
        return;
    }
    
    $request_uri = trim( $_SERVER['REQUEST_URI'], '/' );
    $path_parts = array_filter( explode( '/', $request_uri ) );
    $slug = end( $path_parts );
    
    // Remove query string if present
    $slug = strtok( $slug, '?' );
    
    // Map of slugs to templates
    $page_map = array(
        'expertise' => array(
            'title' => 'Expertise',
            'template' => 'templates/template-expertise.php'
        ),
        'about-book' => array(
            'title' => 'About Book',
            'template' => 'templates/template-about-book.php'
        ),
        'about-author' => array(
            'title' => 'About Author',
            'template' => 'templates/template-about-author.php'
        ),
        'course' => array(
            'title' => 'Course',
            'template' => 'templates/template-course.php'
        ),
        'podcast' => array(
            'title' => 'Podcast',
            'template' => 'templates/template-podcast.php'
        ),
        'blog' => array(
            'title' => 'Blog',
            'template' => 'templates/template-blog.php'
        ),
        'preview-book' => array(
            'title' => 'Preview Book',
            'template' => 'templates/template-preview-book.php'
        ),
    );
    
    // Check if this is one of our required pages
    if ( ! empty( $slug ) && isset( $page_map[ $slug ] ) ) {
        // Check if page already exists
        $page = get_page_by_path( $slug );
        
        if ( ! $page ) {
            // Create the page
            $page_data = array(
                'post_title'    => $page_map[ $slug ]['title'],
                'post_name'     => $slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
                'post_author'   => 1,
            );
            
            $page_id = wp_insert_post( $page_data, true );
            
            if ( ! is_wp_error( $page_id ) && $page_id ) {
                // Assign template
                if ( ! empty( $page_map[ $slug ]['template'] ) ) {
                    update_post_meta( $page_id, '_wp_page_template', $page_map[ $slug ]['template'] );
                }
                
                // Flush rewrite rules
                flush_rewrite_rules( false );
                
                // Get the permalink and redirect
                $permalink = get_permalink( $page_id );
                if ( $permalink ) {
                    wp_redirect( $permalink, 302 );
                    exit;
                }
            }
        } else {
            // Page exists, ensure template is correct
            if ( ! empty( $page_map[ $slug ]['template'] ) ) {
                $current_template = get_page_template_slug( $page->ID );
                if ( $current_template !== $page_map[ $slug ]['template'] ) {
                    update_post_meta( $page->ID, '_wp_page_template', $page_map[ $slug ]['template'] );
                }
            }
        }
    }
}

// Run on theme activation
add_action( 'after_switch_theme', 'toddpatkin_create_required_pages' );

// Also run on admin_init to ensure pages exist (for existing installations)
add_action( 'admin_init', 'toddpatkin_create_required_pages_once' );
function toddpatkin_create_required_pages_once() {
    // Always try to create pages when admin visits (for Hostinger compatibility)
    toddpatkin_create_required_pages();
}

// Force create pages on every page load if they're missing (for Hostinger)
add_action( 'init', 'toddpatkin_ensure_pages_exist' );
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
    }
}

// Also try to create pages on frontend if they're missing (runs once)
add_action( 'wp', 'toddpatkin_create_required_pages_on_frontend' );
function toddpatkin_create_required_pages_on_frontend() {
    // Check if pages exist, create if missing
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
    if ( empty( $slug ) ) {
        return home_url( '/' );
    }
    
    // Try to get page by slug (try multiple methods for Hostinger compatibility)
    $page = get_page_by_path( $slug );
    
    // If not found, try by title
    if ( ! $page ) {
        $pages = get_pages( array(
            'number' => 1,
            'post_status' => 'publish',
            'meta_key' => '_wp_page_template',
            'meta_value' => $template_name
        ) );
        
        if ( ! empty( $pages ) ) {
            foreach ( $pages as $p ) {
                if ( $p->post_name === $slug ) {
                    $page = $p;
                    break;
                }
            }
        }
    }
    
    if ( ! $page ) {
        // Page doesn't exist, create it immediately
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
            // Log error for debugging (remove in production if needed)
            error_log( 'Todd Patkin Theme: Failed to create page ' . $slug . ' - ' . $page_id->get_error_message() );
            // Return fallback URL
            return home_url( '/' . $slug . '/' );
        }
        
        // Assign template if provided
        if ( $page_id && ! empty( $template_name ) ) {
            $result = update_post_meta( $page_id, '_wp_page_template', $template_name );
            if ( ! $result ) {
                error_log( 'Todd Patkin Theme: Failed to assign template ' . $template_name . ' to page ' . $slug );
            }
        }
        
        if ( $page_id ) {
            // Flush rewrite rules after creating page (non-blocking)
            flush_rewrite_rules( false );
            
            // Get permalink
            $permalink = get_permalink( $page_id );
            if ( $permalink ) {
                return $permalink;
            }
        }
        
        // If we still don't have a permalink, return fallback
        return home_url( '/' . $slug . '/' );
    } else {
        // Page exists, update template if needed
        if ( ! empty( $template_name ) ) {
            $current_template = get_page_template_slug( $page->ID );
            if ( $current_template !== $template_name ) {
                update_post_meta( $page->ID, '_wp_page_template', $template_name );
            }
        }
        
        $permalink = get_permalink( $page->ID );
        return $permalink ? $permalink : home_url( '/' . $slug . '/' );
    }
}