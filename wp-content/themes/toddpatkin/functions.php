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
        // Podcast detail pages
        array( 'slug' => 'podcast/podcast-1', 'title' => 'Podcast 1: Crack the Happiness Code', 'template' => 'templates/template-podcast-1.php' ),
        array( 'slug' => 'podcast/podcast-2', 'title' => 'Podcast 2: Helping Others Helps You', 'template' => 'templates/template-podcast-2.php' ),
        array( 'slug' => 'podcast/podcast-3', 'title' => 'Podcast 3: Happiness Isn\'t What You Think', 'template' => 'templates/template-podcast-3.php' ),
        array( 'slug' => 'blog', 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        // Blog detail pages
        array( 'slug' => 'blog/blog-1', 'title' => 'Money and Happiness: Why More Isn\'t Always Better', 'template' => 'templates/template-blog-1.php' ),
        array( 'slug' => 'blog/blog-2', 'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything', 'template' => 'templates/template-blog-2.php' ),
        array( 'slug' => 'blog/blog-3', 'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)', 'template' => 'templates/template-blog-3.php' ),
        array( 'slug' => 'blog/blog-4', 'title' => 'The Power of Gratitude: How Thankfulness Transforms Your Life', 'template' => 'templates/template-blog-4.php' ),
        array( 'slug' => 'blog/blog-5', 'title' => 'Building Authentic Relationships: The Foundation of True Happiness', 'template' => 'templates/template-blog-5.php' ),
        array( 'slug' => 'blog/blog-6', 'title' => 'Finding Your Purpose: A Journey from Success to Significance', 'template' => 'templates/template-blog-6.php' ),
        array( 'slug' => 'preview-book', 'title' => 'Preview Book', 'template' => 'templates/template-preview-book.php' ),
        array( 'slug' => 'preview-boot-camp', 'title' => 'Preview Boot Camp Book', 'template' => 'templates/template-preview-boot-camp.php' ),
        array( 'slug' => 'boot-camp', 'title' => 'Boot Camp Book', 'template' => 'templates/template-boot-camp.php' ),
        array( 'slug' => 'hire-todd', 'title' => 'Hire Todd', 'template' => 'templates/template-hire.php' ),
        // Course module pages
        array( 'slug' => 'course/module-1', 'title' => 'Module 1: Being Easier on Yourself', 'template' => 'templates/template-module-1.php' ),
        array( 'slug' => 'course/module-2', 'title' => 'Module 2: Taking Charge of Your Mind', 'template' => 'templates/template-module-2.php' ),
        array( 'slug' => 'course/module-3', 'title' => 'Module 3: Living in the Present', 'template' => 'templates/template-module-3.php' ),
        array( 'slug' => 'course/module-4', 'title' => 'Module 4: The Power of Self-Love', 'template' => 'templates/template-module-4.php' ),
        array( 'slug' => 'course/module-5', 'title' => 'Module 5: Exercise as Medicine', 'template' => 'templates/template-module-5.php' ),
        array( 'slug' => 'course/module-6', 'title' => 'Module 6: Connecting to Your Higher Power', 'template' => 'templates/template-module-6.php' ),
        array( 'slug' => 'course/module-7', 'title' => 'Module 7: The Relationship Factor', 'template' => 'templates/template-module-7.php' ),
        array( 'slug' => 'course/module-8', 'title' => 'Module 8: Handling Negative People', 'template' => 'templates/template-module-8.php' ),
        array( 'slug' => 'course/module-9', 'title' => 'Module 9: The Gratitude Practice', 'template' => 'templates/template-module-9.php' ),
        array( 'slug' => 'course/module-10', 'title' => 'Module 10: The Service Secret', 'template' => 'templates/template-module-10.php' ),
        array( 'slug' => 'course/module-11', 'title' => 'Module 11: Building Your Support System', 'template' => 'templates/template-module-11.php' ),
        array( 'slug' => 'course/module-12', 'title' => 'Module 12: Sustaining Your Practice', 'template' => 'templates/template-module-12.php' ),
    );
    
    // First, get the course page ID for child pages
    $course_page = get_page_by_path( 'course' );
    $course_page_id = $course_page ? $course_page->ID : 0;
    
    foreach ( $pages as $page_data ) {
        // Check if this is a nested path (course module)
        $is_nested = strpos( $page_data['slug'], '/' ) !== false;
        
        if ( $is_nested ) {
            // Handle nested paths like 'course/module-1'
            $path_parts = explode( '/', $page_data['slug'] );
            $parent_slug = $path_parts[0];
            $child_slug = $path_parts[1];
            
            // Get parent page
            $parent_page = get_page_by_path( $parent_slug );
            if ( ! $parent_page ) {
                continue; // Skip if parent doesn't exist
            }
            
            // Check if child page exists
            $child_page = get_page_by_path( $page_data['slug'] );
            
            if ( ! $child_page ) {
                $new_page = array(
                    'post_title'    => $page_data['title'],
                    'post_name'     => $child_slug,
                    'post_status'   => 'publish',
                    'post_type'     => 'page',
                    'post_content'  => '',
                    'post_author'   => 1,
                    'post_parent'   => $parent_page->ID,
                );
                
                $page_id = wp_insert_post( $new_page, true );
                
                if ( ! is_wp_error( $page_id ) && $page_id ) {
                    if ( ! empty( $page_data['template'] ) ) {
                        update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
                    }
                }
            } else {
                // Update template if page exists
                if ( ! empty( $page_data['template'] ) ) {
                    $current_template = get_page_template_slug( $child_page->ID );
                    if ( $current_template !== $page_data['template'] ) {
                        update_post_meta( $child_page->ID, '_wp_page_template', $page_data['template'] );
                    }
                }
            }
        } else {
            // Handle regular pages
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
    
    $required_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd' );
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
    $required_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd' );
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
    
    // Remove query string
    $request_uri = strtok( $request_uri, '?' );
    
    // Remove .html extension if present
    $request_uri = rtrim( $request_uri, '/.html' );
    
    // Skip if this is likely a blog post (check if it's a post, not a page)
    // First, check if it matches any known page template slugs
    $known_page_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd', 'module-1', 'module-2', 'module-3', 'module-4', 'module-5', 'module-6', 'module-7', 'module-8', 'module-9', 'module-10', 'module-11', 'module-12', 'podcast-1', 'podcast-2', 'podcast-3', 'blog-1', 'blog-2', 'blog-3', 'blog-4', 'blog-5', 'blog-6' );
    
    $path_parts_temp = array_filter( explode( '/', $request_uri ) );
    $last_slug_temp = end( $path_parts_temp );
    $last_slug_temp = strtok( $last_slug_temp, '?' );
    $last_slug_temp = rtrim( $last_slug_temp, '/.html' );
    
    // Check if it's a course module, podcast page, or blog page
    $is_course_or_podcast = ( strpos( $request_uri, 'course/' ) !== false || strpos( $request_uri, 'podcast/' ) !== false || strpos( $request_uri, 'blog/' ) !== false );
    
    // Check if it's a blog detail page - prevent author archive routing
    if ( preg_match( '#^blog/blog-([1-6])$#i', $request_uri ) ) {
        // This is a blog detail page, not an author archive - let it continue to page creation/routing
        $is_course_or_podcast = true; // Treat it like a known page path
    }
    
    // If the last slug doesn't match any known page template and it's not a course/podcast/blog path, it's likely a blog post - skip
    if ( ! in_array( $last_slug_temp, $known_page_slugs ) && ! $is_course_or_podcast ) {
        // Check if it's actually a blog post by trying to find it
        $post_check = get_page_by_path( $last_slug_temp, OBJECT, 'post' );
        if ( $post_check && $post_check->post_type === 'post' ) {
            return; // It's a blog post, let WordPress handle it normally
        }
        // If not found as a post, check if it exists as a page - if not, it's likely a blog post
        $page_check = get_page_by_path( $last_slug_temp );
        if ( ! $page_check ) {
            // Not a page and not a known template - likely a blog post, skip
            return;
        }
    }
    
    // Check if it's a nested path (course/module-X, podcast/podcast-X, or blog/blog-X)
    $is_course_module = false;
    $is_podcast_page = false;
    $is_blog_page = false;
    $module_slug = '';
    $podcast_slug = '';
    $blog_slug = '';
    
    // Check various patterns for course modules
    if ( preg_match( '#course[/-]module-(\d+)#i', $request_uri, $matches ) ) {
        $module_slug = 'module-' . $matches[1];
        $is_course_module = true;
    } elseif ( strpos( $request_uri, 'course/' ) !== false ) {
        $parts = explode( 'course/', $request_uri );
        if ( isset( $parts[1] ) ) {
            $module_slug = trim( $parts[1], '/' );
            $module_slug = strtok( $module_slug, '?' );
            $module_slug = rtrim( $module_slug, '/.html' );
            $is_course_module = true;
        }
    }
    
    // Check various patterns for podcast pages
    if ( preg_match( '#podcast[/-]podcast-(\d+)#i', $request_uri, $matches ) ) {
        $podcast_slug = 'podcast-' . $matches[1];
        $is_podcast_page = true;
    } elseif ( strpos( $request_uri, 'podcast/' ) !== false ) {
        $parts = explode( 'podcast/', $request_uri );
        if ( isset( $parts[1] ) ) {
            $podcast_slug = trim( $parts[1], '/' );
            $podcast_slug = strtok( $podcast_slug, '?' );
            $podcast_slug = rtrim( $podcast_slug, '/.html' );
            $is_podcast_page = true;
        }
    }
    
    // Check various patterns for blog pages
    if ( preg_match( '#blog[/-]blog-(\d+)#i', $request_uri, $matches ) ) {
        $blog_slug = 'blog-' . $matches[1];
        $is_blog_page = true;
    } elseif ( strpos( $request_uri, 'blog/' ) !== false ) {
        $parts = explode( 'blog/', $request_uri );
        if ( isset( $parts[1] ) ) {
            $blog_slug = trim( $parts[1], '/' );
            $blog_slug = strtok( $blog_slug, '?' );
            $blog_slug = rtrim( $blog_slug, '/.html' );
            $is_blog_page = true;
        }
    }
    
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
        // Podcast detail pages
        'podcast-1' => array( 'title' => 'Podcast 1: Crack the Happiness Code', 'template' => 'templates/template-podcast-1.php', 'parent' => 'podcast' ),
        'podcast-2' => array( 'title' => 'Podcast 2: Helping Others Helps You', 'template' => 'templates/template-podcast-2.php', 'parent' => 'podcast' ),
        'podcast-3' => array( 'title' => 'Podcast 3: Happiness Isn\'t What You Think', 'template' => 'templates/template-podcast-3.php', 'parent' => 'podcast' ),
        'blog' => array( 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        // Blog detail pages
        'blog-1' => array( 'title' => 'Money and Happiness: Why More Isn\'t Always Better', 'template' => 'templates/template-blog-1.php', 'parent' => 'blog' ),
        'blog-2' => array( 'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything', 'template' => 'templates/template-blog-2.php', 'parent' => 'blog' ),
        'blog-3' => array( 'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)', 'template' => 'templates/template-blog-3.php', 'parent' => 'blog' ),
        'blog-4' => array( 'title' => 'The Power of Gratitude: How Thankfulness Transforms Your Life', 'template' => 'templates/template-blog-4.php', 'parent' => 'blog' ),
        'blog-5' => array( 'title' => 'Building Authentic Relationships: The Foundation of True Happiness', 'template' => 'templates/template-blog-5.php', 'parent' => 'blog' ),
        'blog-6' => array( 'title' => 'Finding Your Purpose: A Journey from Success to Significance', 'template' => 'templates/template-blog-6.php', 'parent' => 'blog' ),
        'preview-book' => array( 'title' => 'Preview Book', 'template' => 'templates/template-preview-book.php' ),
        'preview-boot-camp' => array( 'title' => 'Preview Boot Camp Book', 'template' => 'templates/template-preview-boot-camp.php' ),
        'boot-camp' => array( 'title' => 'Boot Camp Book', 'template' => 'templates/template-boot-camp.php' ),
        'hire-todd' => array( 'title' => 'Hire Todd', 'template' => 'templates/template-hire.php' ),
        // Course modules
        'module-1' => array( 'title' => 'Module 1: Being Easier on Yourself', 'template' => 'templates/template-module-1.php', 'parent' => 'course' ),
        'module-2' => array( 'title' => 'Module 2: Taking Charge of Your Mind', 'template' => 'templates/template-module-2.php', 'parent' => 'course' ),
        'module-3' => array( 'title' => 'Module 3: Living in the Present', 'template' => 'templates/template-module-3.php', 'parent' => 'course' ),
        'module-4' => array( 'title' => 'Module 4: The Power of Self-Love', 'template' => 'templates/template-module-4.php', 'parent' => 'course' ),
        'module-5' => array( 'title' => 'Module 5: Exercise as Medicine', 'template' => 'templates/template-module-5.php', 'parent' => 'course' ),
        'module-6' => array( 'title' => 'Module 6: Connecting to Your Higher Power', 'template' => 'templates/template-module-6.php', 'parent' => 'course' ),
        'module-7' => array( 'title' => 'Module 7: The Relationship Factor', 'template' => 'templates/template-module-7.php', 'parent' => 'course' ),
        'module-8' => array( 'title' => 'Module 8: Handling Negative People', 'template' => 'templates/template-module-8.php', 'parent' => 'course' ),
        'module-9' => array( 'title' => 'Module 9: The Gratitude Practice', 'template' => 'templates/template-module-9.php', 'parent' => 'course' ),
        'module-10' => array( 'title' => 'Module 10: The Service Secret', 'template' => 'templates/template-module-10.php', 'parent' => 'course' ),
        'module-11' => array( 'title' => 'Module 11: Building Your Support System', 'template' => 'templates/template-module-11.php', 'parent' => 'course' ),
        'module-12' => array( 'title' => 'Module 12: Sustaining Your Practice', 'template' => 'templates/template-module-12.php', 'parent' => 'course' ),
    );
    
    // Use module slug if it's a course module, podcast slug if it's a podcast page, or blog slug if it's a blog page
    $check_slug = $is_course_module ? $module_slug : ( $is_podcast_page ? $podcast_slug : ( $is_blog_page ? $blog_slug : $slug ) );
    
    if ( ! empty( $check_slug ) && isset( $page_templates[ $check_slug ] ) ) {
        $page_template = $page_templates[ $check_slug ];
        
        // Check if it's a child page
        if ( isset( $page_template['parent'] ) ) {
            $parent_page = get_page_by_path( $page_template['parent'] );
            if ( $parent_page ) {
                // Try full path first
                $page = get_page_by_path( $page_template['parent'] . '/' . $check_slug );
                // If not found, try to find by slug and verify parent
                if ( ! $page ) {
                    $pages = get_pages( array(
                        'name' => $check_slug,
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'post_parent' => $parent_page->ID,
                        'number' => 1
                    ) );
                    if ( ! empty( $pages ) ) {
                        $page = $pages[0];
                    }
                }
            } else {
                $page = null;
            }
        } else {
            $page = get_page_by_path( $check_slug );
        }
        
        if ( ! $page ) {
            // Create the page immediately
            $page_data = array(
                'post_title'    => $page_template['title'],
                'post_name'     => $check_slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
                'post_author'   => 1,
            );
            
            // Set parent if it's a child page
            if ( isset( $page_template['parent'] ) ) {
                $parent_page = get_page_by_path( $page_template['parent'] );
                if ( $parent_page ) {
                    $page_data['post_parent'] = $parent_page->ID;
                }
            }
            
            $page_id = wp_insert_post( $page_data, false ); // Use false to avoid validation issues
            
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                if ( ! empty( $page_template['template'] ) ) {
                    update_post_meta( $page_id, '_wp_page_template', $page_template['template'] );
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
    
    // Remove query string
    $request_uri = strtok( $request_uri, '?' );
    
    // Remove .html extension if present
    $request_uri = rtrim( $request_uri, '/.html' );
    
    // Skip if this is likely a blog post
    $known_page_slugs = array( 'expertise', 'about-book', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd', 'module-1', 'module-2', 'module-3', 'module-4', 'module-5', 'module-6', 'module-7', 'module-8', 'module-9', 'module-10', 'module-11', 'module-12', 'podcast-1', 'podcast-2', 'podcast-3', 'blog-1', 'blog-2', 'blog-3', 'blog-4', 'blog-5', 'blog-6' );
    
    $path_parts = array_filter( explode( '/', $request_uri ) );
    $slug = end( $path_parts );
    $slug = strtok( $slug, '?' );
    $slug = rtrim( $slug, '/.html' );
    
    // Check if it's a course module, podcast page, or blog page
    $is_course_or_podcast = ( strpos( $request_uri, 'course/' ) !== false || strpos( $request_uri, 'podcast/' ) !== false || strpos( $request_uri, 'blog/' ) !== false );
    
    // If the slug doesn't match any known page template and it's not a course/podcast/blog path, it's likely a blog post - skip
    if ( ! in_array( $slug, $known_page_slugs ) && ! $is_course_or_podcast ) {
        // Check if it's actually a blog post
        $post_check = get_page_by_path( $slug, OBJECT, 'post' );
        if ( $post_check && $post_check->post_type === 'post' ) {
            return; // It's a blog post, let WordPress handle it normally
        }
        // If not found as a post, check if it exists as a page - if not, it's likely a blog post
        $page_check = get_page_by_path( $slug );
        if ( ! $page_check ) {
            // Not a page and not a known template - likely a blog post, skip
            return;
        }
    }
    
    // Check if it's a nested path (course/module-X, podcast/podcast-X, or blog/blog-X) - improved detection
    $is_course_module = false;
    $is_podcast_page = false;
    $is_blog_page = false;
    $module_slug = '';
    $podcast_slug = '';
    $blog_slug = '';
    
    // Check various patterns for course modules
    if ( preg_match( '#course[/-]module-(\d+)#i', $request_uri, $matches ) ) {
        $module_slug = 'module-' . $matches[1];
        $is_course_module = true;
    } elseif ( strpos( $request_uri, 'course/' ) !== false ) {
        $parts = explode( 'course/', $request_uri );
        if ( isset( $parts[1] ) ) {
            $module_slug = trim( $parts[1], '/' );
            $module_slug = strtok( $module_slug, '?' );
            $module_slug = rtrim( $module_slug, '/.html' );
            $is_course_module = true;
        }
    }
    
    // Check various patterns for podcast pages
    if ( preg_match( '#podcast[/-]podcast-(\d+)#i', $request_uri, $matches ) ) {
        $podcast_slug = 'podcast-' . $matches[1];
        $is_podcast_page = true;
    } elseif ( strpos( $request_uri, 'podcast/' ) !== false ) {
        $parts = explode( 'podcast/', $request_uri );
        if ( isset( $parts[1] ) ) {
            $podcast_slug = trim( $parts[1], '/' );
            $podcast_slug = strtok( $podcast_slug, '?' );
            $podcast_slug = rtrim( $podcast_slug, '/.html' );
            $is_podcast_page = true;
        }
    }
    
    // Check various patterns for blog pages
    if ( preg_match( '#blog[/-]blog-(\d+)#i', $request_uri, $matches ) ) {
        $blog_slug = 'blog-' . $matches[1];
        $is_blog_page = true;
    } elseif ( strpos( $request_uri, 'blog/' ) !== false ) {
        $parts = explode( 'blog/', $request_uri );
        if ( isset( $parts[1] ) ) {
            $blog_slug = trim( $parts[1], '/' );
            $blog_slug = strtok( $blog_slug, '?' );
            $blog_slug = rtrim( $blog_slug, '/.html' );
            $is_blog_page = true;
        }
    }
    
    $page_templates = array(
        'expertise' => array( 'title' => 'Expertise', 'template' => 'templates/template-expertise.php' ),
        'about-book' => array( 'title' => 'About Book', 'template' => 'templates/template-about-book.php' ),
        'about-author' => array( 'title' => 'About Author', 'template' => 'templates/template-about-author.php' ),
        'course' => array( 'title' => 'Course', 'template' => 'templates/template-course.php' ),
        'podcast' => array( 'title' => 'Podcast', 'template' => 'templates/template-podcast.php' ),
        // Podcast detail pages
        'podcast-1' => array( 'title' => 'Podcast 1: Crack the Happiness Code', 'template' => 'templates/template-podcast-1.php', 'parent' => 'podcast' ),
        'podcast-2' => array( 'title' => 'Podcast 2: Helping Others Helps You', 'template' => 'templates/template-podcast-2.php', 'parent' => 'podcast' ),
        'podcast-3' => array( 'title' => 'Podcast 3: Happiness Isn\'t What You Think', 'template' => 'templates/template-podcast-3.php', 'parent' => 'podcast' ),
        'blog' => array( 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        // Blog detail pages
        'blog-1' => array( 'title' => 'Money and Happiness: Why More Isn\'t Always Better', 'template' => 'templates/template-blog-1.php', 'parent' => 'blog' ),
        'blog-2' => array( 'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything', 'template' => 'templates/template-blog-2.php', 'parent' => 'blog' ),
        'blog-3' => array( 'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)', 'template' => 'templates/template-blog-3.php', 'parent' => 'blog' ),
        'blog-4' => array( 'title' => 'The Power of Gratitude: How Thankfulness Transforms Your Life', 'template' => 'templates/template-blog-4.php', 'parent' => 'blog' ),
        'blog-5' => array( 'title' => 'Building Authentic Relationships: The Foundation of True Happiness', 'template' => 'templates/template-blog-5.php', 'parent' => 'blog' ),
        'blog-6' => array( 'title' => 'Finding Your Purpose: A Journey from Success to Significance', 'template' => 'templates/template-blog-6.php', 'parent' => 'blog' ),
        'preview-book' => array( 'title' => 'Preview Book', 'template' => 'templates/template-preview-book.php' ),
        'preview-boot-camp' => array( 'title' => 'Preview Boot Camp Book', 'template' => 'templates/template-preview-boot-camp.php' ),
        'boot-camp' => array( 'title' => 'Boot Camp Book', 'template' => 'templates/template-boot-camp.php' ),
        'hire-todd' => array( 'title' => 'Hire Todd', 'template' => 'templates/template-hire.php' ),
        // Course modules
        'module-1' => array( 'title' => 'Module 1: Being Easier on Yourself', 'template' => 'templates/template-module-1.php', 'parent' => 'course' ),
        'module-2' => array( 'title' => 'Module 2: Taking Charge of Your Mind', 'template' => 'templates/template-module-2.php', 'parent' => 'course' ),
        'module-3' => array( 'title' => 'Module 3: Living in the Present', 'template' => 'templates/template-module-3.php', 'parent' => 'course' ),
        'module-4' => array( 'title' => 'Module 4: The Power of Self-Love', 'template' => 'templates/template-module-4.php', 'parent' => 'course' ),
        'module-5' => array( 'title' => 'Module 5: Exercise as Medicine', 'template' => 'templates/template-module-5.php', 'parent' => 'course' ),
        'module-6' => array( 'title' => 'Module 6: Connecting to Your Higher Power', 'template' => 'templates/template-module-6.php', 'parent' => 'course' ),
        'module-7' => array( 'title' => 'Module 7: The Relationship Factor', 'template' => 'templates/template-module-7.php', 'parent' => 'course' ),
        'module-8' => array( 'title' => 'Module 8: Handling Negative People', 'template' => 'templates/template-module-8.php', 'parent' => 'course' ),
        'module-9' => array( 'title' => 'Module 9: The Gratitude Practice', 'template' => 'templates/template-module-9.php', 'parent' => 'course' ),
        'module-10' => array( 'title' => 'Module 10: The Service Secret', 'template' => 'templates/template-module-10.php', 'parent' => 'course' ),
        'module-11' => array( 'title' => 'Module 11: Building Your Support System', 'template' => 'templates/template-module-11.php', 'parent' => 'course' ),
        'module-12' => array( 'title' => 'Module 12: Sustaining Your Practice', 'template' => 'templates/template-module-12.php', 'parent' => 'course' ),
    );
    
    // Use module slug if it's a course module, podcast slug if it's a podcast page, or blog slug if it's a blog page
    $check_slug = $is_course_module ? $module_slug : ( $is_podcast_page ? $podcast_slug : ( $is_blog_page ? $blog_slug : $slug ) );
    
    if ( ! empty( $check_slug ) && isset( $page_templates[ $check_slug ] ) ) {
        $page_template = $page_templates[ $check_slug ];
        
        // Check if it's a child page
        if ( isset( $page_template['parent'] ) ) {
            $parent_page = get_page_by_path( $page_template['parent'] );
            if ( $parent_page ) {
                // Try full path first
                $page = get_page_by_path( $page_template['parent'] . '/' . $check_slug );
                // If not found, try to find by slug and verify parent
                if ( ! $page ) {
                    $pages = get_pages( array(
                        'name' => $check_slug,
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'number' => 1
                    ) );
                    if ( ! empty( $pages ) && $pages[0]->post_parent == $parent_page->ID ) {
                        $page = $pages[0];
                    }
                }
            } else {
                $page = null;
            }
        } else {
            $page = get_page_by_path( $check_slug );
        }
        
        if ( ! $page ) {
            $page_data = array(
                'post_title'    => $page_template['title'],
                'post_name'     => $check_slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
                'post_author'   => 1,
            );
            
            // Set parent if it's a child page
            if ( isset( $page_template['parent'] ) ) {
                $parent_page = get_page_by_path( $page_template['parent'] );
                if ( $parent_page ) {
                    $page_data['post_parent'] = $parent_page->ID;
                }
            }
            
            $page_id = wp_insert_post( $page_data, false );
            
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                if ( ! empty( $page_template['template'] ) ) {
                    update_post_meta( $page_id, '_wp_page_template', $page_template['template'] );
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
        flush_rewrite_rules();
        echo '<div class="notice notice-success"><p>All required pages have been created successfully and permalinks have been flushed!</p></div>';
    }
    
    if ( isset( $_POST['flush_permalinks'] ) && check_admin_referer( 'toddpatkin_flush_permalinks_action' ) ) {
        flush_rewrite_rules();
        echo '<div class="notice notice-success"><p>Permalinks have been flushed successfully!</p></div>';
    }
    
    if ( isset( $_POST['fix_templates'] ) && check_admin_referer( 'toddpatkin_fix_templates_action' ) ) {
        $fixed = toddpatkin_fix_page_templates();
        echo '<div class="notice notice-success"><p>' . $fixed . ' page templates have been fixed!</p></div>';
    }
    
    // Check permalink structure
    $permalink_structure = get_option( 'permalink_structure' );
    $is_plain_permalinks = empty( $permalink_structure );
    
    ?>
    <div class="wrap">
        <h1>Create Required Pages</h1>
        
        <?php if ( $is_plain_permalinks ) : ?>
            <div class="notice notice-error">
                <p><strong>Warning:</strong> Your permalink structure is set to "Plain". Nested URLs like <code>/course/module-1</code> will not work with plain permalinks.</p>
                <p>Please go to <a href="<?php echo admin_url( 'options-permalink.php' ); ?>">Settings → Permalinks</a> and select "Post name" or another pretty permalink structure, then save changes.</p>
            </div>
        <?php else : ?>
            <div class="notice notice-info">
                <p>Your permalink structure is configured correctly. Current structure: <code><?php echo esc_html( $permalink_structure ); ?></code></p>
            </div>
        <?php endif; ?>
        
        <p>This will create all required pages for the Todd Patkin theme:</p>
        <ul>
            <li>Expertise</li>
            <li>About Book</li>
            <li>About Author</li>
            <li>Course</li>
            <li>Course Modules (Module 1-12)</li>
            <li>Podcast</li>
            <li>Blog</li>
            <li>Preview Book</li>
            <li>Hire Todd</li>
        </ul>
        
        <form method="post" action="" style="margin: 20px 0;">
            <?php wp_nonce_field( 'toddpatkin_create_pages_action' ); ?>
            <p>
                <input type="submit" name="create_pages" class="button button-primary" value="Create All Pages Now" />
            </p>
        </form>
        
        <form method="post" action="" style="margin: 20px 0;">
            <?php wp_nonce_field( 'toddpatkin_flush_permalinks_action' ); ?>
            <p>
                <input type="submit" name="flush_permalinks" class="button button-secondary" value="Flush Permalinks" />
                <span class="description">Use this if pages exist but URLs are still showing 404 errors.</span>
            </p>
        </form>
        
        <form method="post" action="" style="margin: 20px 0;">
            <?php wp_nonce_field( 'toddpatkin_fix_templates_action' ); ?>
            <p>
                <input type="submit" name="fix_templates" class="button button-secondary" value="Fix Page Templates" />
                <span class="description">Use this if pages are loading but showing the wrong template (e.g., showing "PAGE.PHP" message).</span>
            </p>
        </form>
        
        <div class="card" style="max-width: 800px;">
            <h2>Troubleshooting</h2>
            <p>If you're still getting 404 errors after creating pages:</p>
            <ol>
                <li>Make sure permalinks are set to "Post name" (not "Plain") in <a href="<?php echo admin_url( 'options-permalink.php' ); ?>">Settings → Permalinks</a></li>
                <li>Click "Save Changes" on the Permalinks page (even without changing anything) to flush rewrite rules</li>
                <li>Click the "Flush Permalinks" button above</li>
                <li>Clear any caching plugins if you're using them</li>
            </ol>
        </div>
    </div>
    <?php
}

/**
 * Force correct template to load based on page slug
 * This ensures custom templates are used even if WordPress doesn't recognize them
 */
add_filter( 'page_template', 'toddpatkin_force_page_template' );
function toddpatkin_force_page_template( $template ) {
    global $post;
    
    if ( ! $post || ! is_page() ) {
        return $template;
    }
    
    // Get page slug
    $page_slug = $post->post_name;
    
    // Check if it's a child page (module page)
    $is_module = false;
    $parent_id = $post->post_parent;
    
    if ( $parent_id ) {
        $parent_page = get_post( $parent_id );
        if ( $parent_page && $parent_page->post_name === 'course' ) {
            $is_module = true;
        }
    }
    
    // Template mapping
    $template_map = array(
        'expertise' => 'templates/template-expertise.php',
        'about-book' => 'templates/template-about-book.php',
        'about-author' => 'templates/template-about-author.php',
        'course' => 'templates/template-course.php',
        'podcast' => 'templates/template-podcast.php',
        'podcast-1' => 'templates/template-podcast-1.php',
        'podcast-2' => 'templates/template-podcast-2.php',
        'podcast-3' => 'templates/template-podcast-3.php',
        'blog' => 'templates/template-blog.php',
        'preview-book' => 'templates/template-preview-book.php',
        'preview-boot-camp' => 'templates/template-preview-boot-camp.php',
        'boot-camp' => 'templates/template-boot-camp.php',
        'module-1' => 'templates/template-module-1.php',
        'module-2' => 'templates/template-module-2.php',
        'module-3' => 'templates/template-module-3.php',
        'module-4' => 'templates/template-module-4.php',
        'module-5' => 'templates/template-module-5.php',
        'module-6' => 'templates/template-module-6.php',
        'module-7' => 'templates/template-module-7.php',
        'module-8' => 'templates/template-module-8.php',
        'module-9' => 'templates/template-module-9.php',
        'module-10' => 'templates/template-module-10.php',
        'module-11' => 'templates/template-module-11.php',
        'module-12' => 'templates/template-module-12.php',
        'hire-todd' => 'templates/template-hire.php',
    );
    
    // Check if this page has a custom template
    if ( isset( $template_map[ $page_slug ] ) ) {
        $custom_template = get_template_directory() . '/' . $template_map[ $page_slug ];
        if ( file_exists( $custom_template ) ) {
            return $custom_template;
        }
    }
    
    return $template;
}

/**
 * Alternative approach: Use template_include filter as backup
 * This runs later and can override if page_template didn't work
 */
/**
 * Ensure WordPress recognizes ?p=POST_ID as a single post
 */
// Ensure WordPress properly handles single post queries
add_action( 'parse_query', 'toddpatkin_handle_single_post_query', 1 );
function toddpatkin_handle_single_post_query( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        // Handle ?p= parameter for single posts
        if ( isset( $_GET['p'] ) && ! empty( $_GET['p'] ) ) {
            $post_id = intval( $_GET['p'] );
            if ( $post_id > 0 ) {
                $post = get_post( $post_id );
                if ( $post && $post->post_type === 'post' && $post->post_status === 'publish' ) {
                    // Set query parameters
                    $query->set( 'p', $post_id );
                    $query->set( 'post_type', 'post' );
                    $query->set( 'posts_per_page', 1 );
                    $query->set( 'name', '' ); // Clear name to avoid conflicts
                    
                    // Force WordPress to recognize this as a single post
                    $query->is_single = true;
                    $query->is_singular = true;
                    $query->is_page = false;
                    $query->is_home = false;
                    $query->is_archive = false;
                    $query->is_search = false;
                    $query->is_404 = false;
                }
            }
        }
    }
}

// Additional hook to ensure post is properly set up before template loads
add_action( 'wp', 'toddpatkin_setup_single_post', 1 );
function toddpatkin_setup_single_post() {
    if ( ! is_admin() && isset( $_GET['p'] ) && ! empty( $_GET['p'] ) ) {
        $post_id = intval( $_GET['p'] );
        if ( $post_id > 0 ) {
            $post = get_post( $post_id );
            if ( $post && $post->post_type === 'post' && $post->post_status === 'publish' ) {
                global $wp_query;
                // Ensure query is set up correctly
                $wp_query->is_single = true;
                $wp_query->is_singular = true;
                $wp_query->is_page = false;
                $wp_query->is_home = false;
                $wp_query->is_404 = false;
            }
        }
    }
}

add_filter( 'template_include', 'toddpatkin_force_template_include', 99 );
function toddpatkin_force_template_include( $template ) {
    global $wp_query, $post;
    
    // FIRST: Check if this is the front page - ensure front-page.php loads
    if ( is_front_page() ) {
        $front_page_template = get_template_directory() . '/front-page.php';
        if ( file_exists( $front_page_template ) ) {
            return $front_page_template;
        }
    }
    
    // Check if this is a blog detail page request (prevent author archive routing)
    if ( isset( $_SERVER['REQUEST_URI'] ) ) {
        $request_uri = trim( $_SERVER['REQUEST_URI'], '/' );
        $request_uri = strtok( $request_uri, '?' );
        $request_uri = rtrim( $request_uri, '/.html' );
        
        // Check if it's a blog detail page (blog/blog-1 through blog/blog-6)
        if ( preg_match( '#^blog/blog-([1-6])$#i', $request_uri, $matches ) ) {
            $blog_num = $matches[1];
            $blog_template = get_template_directory() . '/templates/template-blog-' . $blog_num . '.php';
            if ( file_exists( $blog_template ) ) {
                // Prevent author archive routing
                if ( is_author() ) {
                    $wp_query->is_author = false;
                }
                return $blog_template;
            }
        }
    }
    
    // SECOND: Check if we're dealing with a single blog post
    $post_id = 0;
    $is_single_post = false;
    
    // Check multiple ways to detect a single post
    if ( isset( $_GET['p'] ) && ! empty( $_GET['p'] ) ) {
        $post_id = intval( $_GET['p'] );
        if ( $post_id > 0 ) {
            $post_obj = get_post( $post_id );
            if ( $post_obj && $post_obj->post_type === 'post' && $post_obj->post_status === 'publish' ) {
                $is_single_post = true;
            }
        }
    } elseif ( isset( $wp_query->query_vars['p'] ) && ! empty( $wp_query->query_vars['p'] ) ) {
        $post_id = intval( $wp_query->query_vars['p'] );
        if ( $post_id > 0 ) {
            $post_obj = get_post( $post_id );
            if ( $post_obj && $post_obj->post_type === 'post' && $post_obj->post_status === 'publish' ) {
                $is_single_post = true;
            }
        }
    } elseif ( is_single() && get_post_type() === 'post' ) {
        $post_id = get_the_ID();
        $is_single_post = true;
    } elseif ( $post && isset( $post->ID ) && $post->post_type === 'post' ) {
        $post_id = $post->ID;
        $is_single_post = true;
    }
    
    // If this is a single blog post, load single.php
    if ( $is_single_post && $post_id > 0 ) {
        $single_template = get_template_directory() . '/single.php';
        if ( file_exists( $single_template ) ) {
            // Ensure the post is set up correctly
            if ( ! $post || $post->ID != $post_id ) {
                $post = get_post( $post_id );
                setup_postdata( $post );
            }
            return $single_template;
        }
    }
    
    // THIRD: Only process custom page templates if we're on a page (but not front page)
    if ( ! is_page() || is_front_page() ) {
        return $template;
    }
    
    global $post;
    if ( ! $post ) {
        return $template;
    }
    
    $page_slug = $post->post_name;
    
    // Check if it's a child page (module page)
    $is_module = false;
    $parent_id = $post->post_parent;
    
    if ( $parent_id ) {
        $parent_page = get_post( $parent_id );
        if ( $parent_page && $parent_page->post_name === 'course' ) {
            $is_module = true;
        }
    }
    
    // Template mapping
    $template_map = array(
        'expertise' => 'templates/template-expertise.php',
        'about-book' => 'templates/template-about-book.php',
        'about-author' => 'templates/template-about-author.php',
        'course' => 'templates/template-course.php',
        'podcast' => 'templates/template-podcast.php',
        'podcast-1' => 'templates/template-podcast-1.php',
        'podcast-2' => 'templates/template-podcast-2.php',
        'podcast-3' => 'templates/template-podcast-3.php',
        'blog' => 'templates/template-blog.php',
        'preview-book' => 'templates/template-preview-book.php',
        'preview-boot-camp' => 'templates/template-preview-boot-camp.php',
        'boot-camp' => 'templates/template-boot-camp.php',
        'module-1' => 'templates/template-module-1.php',
        'module-2' => 'templates/template-module-2.php',
        'module-3' => 'templates/template-module-3.php',
        'module-4' => 'templates/template-module-4.php',
        'module-5' => 'templates/template-module-5.php',
        'module-6' => 'templates/template-module-6.php',
        'module-7' => 'templates/template-module-7.php',
        'module-8' => 'templates/template-module-8.php',
        'module-9' => 'templates/template-module-9.php',
        'module-10' => 'templates/template-module-10.php',
        'module-11' => 'templates/template-module-11.php',
        'module-12' => 'templates/template-module-12.php',
        'hire-todd' => 'templates/template-hire.php',
    );
    
    // Check if this page has a custom template
    if ( isset( $template_map[ $page_slug ] ) ) {
        $custom_template = get_template_directory() . '/' . $template_map[ $page_slug ];
        if ( file_exists( $custom_template ) ) {
            // Only override if current template is the default page.php
            $current_template = basename( $template );
            if ( $current_template === 'page.php' || strpos( $template, 'page.php' ) !== false ) {
                return $custom_template;
            }
        }
    }
    
    return $template;
}

/**
 * Fix page templates for existing pages
 * Ensures all pages have the correct template assigned
 */
function toddpatkin_fix_page_templates() {
    $template_map = array(
        'expertise' => 'templates/template-expertise.php',
        'about-book' => 'templates/template-about-book.php',
        'about-author' => 'templates/template-about-author.php',
        'course' => 'templates/template-course.php',
        'podcast' => 'templates/template-podcast.php',
        'podcast-1' => 'templates/template-podcast-1.php',
        'podcast-2' => 'templates/template-podcast-2.php',
        'podcast-3' => 'templates/template-podcast-3.php',
        'blog' => 'templates/template-blog.php',
        'preview-book' => 'templates/template-preview-book.php',
        'preview-boot-camp' => 'templates/template-preview-boot-camp.php',
        'boot-camp' => 'templates/template-boot-camp.php',
        'module-1' => 'templates/template-module-1.php',
        'module-2' => 'templates/template-module-2.php',
        'module-3' => 'templates/template-module-3.php',
        'module-4' => 'templates/template-module-4.php',
        'module-5' => 'templates/template-module-5.php',
        'module-6' => 'templates/template-module-6.php',
        'module-7' => 'templates/template-module-7.php',
        'module-8' => 'templates/template-module-8.php',
        'module-9' => 'templates/template-module-9.php',
        'module-10' => 'templates/template-module-10.php',
        'module-11' => 'templates/template-module-11.php',
        'module-12' => 'templates/template-module-12.php',
        'hire-todd' => 'templates/template-hire.php',
    );
    
    $fixed_count = 0;
    
    // Get all pages
    $pages = get_pages();
    
    foreach ( $pages as $page ) {
        $page_slug = $page->post_name;
        
        // Check if this page should have a custom template
        if ( isset( $template_map[ $page_slug ] ) ) {
            $expected_template = $template_map[ $page_slug ];
            $current_template = get_page_template_slug( $page->ID );
            
            // Fix if template is wrong or missing
            if ( $current_template !== $expected_template ) {
                update_post_meta( $page->ID, '_wp_page_template', $expected_template );
                $fixed_count++;
            }
        }
    }
    
    return $fixed_count;
}

/**
 * Prevent author archive routing for blog detail pages
 */
add_action( 'pre_get_posts', 'toddpatkin_prevent_author_archive_for_blog_pages' );
function toddpatkin_prevent_author_archive_for_blog_pages( $query ) {
    // Only run on main query and frontend
    if ( ! $query->is_main_query() || is_admin() ) {
        return;
    }
    
    // Check if this is an author archive request
    if ( $query->is_author() && isset( $_SERVER['REQUEST_URI'] ) ) {
        $request_uri = trim( $_SERVER['REQUEST_URI'], '/' );
        $request_uri = strtok( $request_uri, '?' );
        $request_uri = rtrim( $request_uri, '/.html' );
        
        // If it's a blog detail page (blog/blog-1 through blog/blog-6), prevent author archive
        if ( preg_match( '#^blog/blog-([1-6])$#i', $request_uri ) ) {
            $query->is_author = false;
            $query->is_404 = false;
            $query->is_page = true;
        }
    }
}