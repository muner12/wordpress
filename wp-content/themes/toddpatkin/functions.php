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
 * Returns the permalink of a page by its slug, auto-creates page if it doesn't exist
 * 
 * @param string $slug Page slug
 * @param string $template_name Template name to assign (optional)
 * @return string Page permalink
 */
function toddpatkin_get_page_url( $slug, $template_name = '' ) {
    $page = get_page_by_path( $slug );
    
    if ( ! $page ) {
        // Page doesn't exist, create it
        $page_data = array(
            'post_title'    => ucwords( str_replace( '-', ' ', $slug ) ),
            'post_name'     => $slug,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_content'  => '',
        );
        
        $page_id = wp_insert_post( $page_data );
        
        // Assign template if provided
        if ( $page_id && $template_name ) {
            update_post_meta( $page_id, '_wp_page_template', $template_name );
        }
        
        if ( $page_id ) {
            return get_permalink( $page_id );
        }
    }
    
    if ( $page ) {
        // Update template if provided and different
        if ( $template_name ) {
            $current_template = get_page_template_slug( $page->ID );
            if ( $current_template !== $template_name ) {
                update_post_meta( $page->ID, '_wp_page_template', $template_name );
            }
        }
        return get_permalink( $page->ID );
    }
    
    // Fallback
    return home_url( '/' . $slug );
}