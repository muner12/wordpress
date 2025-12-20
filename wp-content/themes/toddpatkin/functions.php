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
 * Get page URL by slug
 * Returns the permalink of a page by its slug
 * Auto-creates page if it doesn't exist (for Hostinger compatibility)
 * 
 * @param string $slug Page slug
 * @param string $template_name Template name to assign (optional)
 * @return string Page permalink
 */
function toddpatkin_get_page_url( $slug, $template_name = '' ) {
    if ( empty( $slug ) ) {
        return home_url( '/' );
    }
    
    // Try to get page by slug
    $page = get_page_by_path( $slug );
    
    if ( ! $page ) {
        // Page doesn't exist, try to create it
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
        
        if ( ! is_wp_error( $page_id ) && $page_id ) {
            // Assign template if provided
            if ( ! empty( $template_name ) ) {
                update_post_meta( $page_id, '_wp_page_template', $template_name );
            }
            
            // Flush rewrite rules
            flush_rewrite_rules( false );
            
            // Get the page object
            $page = get_post( $page_id );
        }
    }
    
    if ( $page ) {
        // Page exists, update template if needed
        if ( ! empty( $template_name ) ) {
            $current_template = get_page_template_slug( $page->ID );
            if ( $current_template !== $template_name ) {
                update_post_meta( $page->ID, '_wp_page_template', $template_name );
            }
        }
        return get_permalink( $page->ID );
    }
    
    // Fallback if page creation failed
    return home_url( '/' . $slug . '/' );
}

/**
 * Handle 404 errors and create pages on-the-fly
 * This intercepts 404 errors for required pages and creates them automatically
 */
add_action( 'template_redirect', 'toddpatkin_create_page_on_404', 1 );
function toddpatkin_create_page_on_404() {
    // Only process if we're on a 404 page
    if ( ! is_404() ) {
        return;
    }
    
    // Get the requested URL
    if ( ! isset( $_SERVER['REQUEST_URI'] ) ) {
        return;
    }
    
    $request_uri = trim( $_SERVER['REQUEST_URI'], '/' );
    $path_parts = array_filter( explode( '/', $request_uri ) );
    $slug = end( $path_parts );
    
    // Remove query string
    $slug = strtok( $slug, '?' );
    
    // Map of page slugs to their templates
    $page_templates = array(
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
    if ( ! empty( $slug ) && isset( $page_templates[ $slug ] ) ) {
        // Create the page
        $page_data = array(
            'post_title'    => $page_templates[ $slug ]['title'],
            'post_name'     => $slug,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_content'  => '',
            'post_author'   => 1,
        );
        
        $page_id = wp_insert_post( $page_data, true );
        
        if ( ! is_wp_error( $page_id ) && $page_id ) {
            // Assign template
            if ( ! empty( $page_templates[ $slug ]['template'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_templates[ $slug ]['template'] );
            }
            
            // Flush rewrite rules
            flush_rewrite_rules( false );
            
            // Redirect to the newly created page
            $permalink = get_permalink( $page_id );
            if ( $permalink ) {
                wp_redirect( $permalink, 302 );
                exit;
            }
        }
    }
}