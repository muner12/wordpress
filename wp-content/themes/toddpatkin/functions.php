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
        array( 'slug' => 'speaker-reel', 'title' => 'Speaker Reel', 'template' => 'templates/template-speaker-reel.php' ),
        array( 'slug' => 'about-author', 'title' => 'About Author', 'template' => 'templates/template-about-author.php' ),
        array( 'slug' => 'course', 'title' => 'Course', 'template' => 'templates/template-course.php' ),
        array( 'slug' => 'podcast', 'title' => 'Podcast', 'template' => 'templates/template-podcast.php' ),
        // Podcast detail pages
        array( 'slug' => 'podcast/podcast-1', 'title' => 'Podcast 1: Crack the Happiness Code', 'template' => 'templates/template-podcast-1.php' ),
        array( 'slug' => 'podcast/podcast-2', 'title' => 'Podcast 2: Helping Others Helps You', 'template' => 'templates/template-podcast-2.php' ),
        array( 'slug' => 'podcast/podcast-3', 'title' => 'Podcast 3: Happiness Isn\'t What You Think', 'template' => 'templates/template-podcast-3.php' ),
        array( 'slug' => 'podcast/podcast-4', 'title' => 'Podcast 4: 12 Steps to Happiness', 'template' => 'templates/template-podcast-4.php'),
        array( 'slug' => 'podcast/podcast-5', 'title' => 'Podcast 5: The Happiness Code', 'template' => 'templates/template-podcast-5.php'),
        array( 'slug' => 'blog', 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        // Blog detail pages
        array( 'slug' => 'blog/blog-1', 'title' => 'Money and Happiness: Why More Isn\'t Always Better', 'template' => 'templates/template-blog-1.php' ),
        array( 'slug' => 'blog/blog-2', 'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything', 'template' => 'templates/template-blog-2.php' ),
        array( 'slug' => 'blog/blog-3', 'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)', 'template' => 'templates/template-blog-3.php' ),
        array( 'slug' => 'blog/blog-4', 'title' => 'The Power of Gratitude: How Thankfulness Transforms Your Life', 'template' => 'templates/template-blog-4.php' ),
        array( 'slug' => 'blog/blog-5', 'title' => 'Building Authentic Relationships: The Foundation of True Happiness', 'template' => 'templates/template-blog-5.php' ),
        array( 'slug' => 'blog/blog-6', 'title' => 'Finding Your Purpose: A Journey from Success to Significance', 'template' => 'templates/template-blog-6.php' ),
        array( 'slug' => 'blog/blog-7', 'title' => 'Yes, parents, the kids really are okay.', 'template' => 'templates/template-blog-7.php' ),
        // New 2025 blog pages
        array( 'slug' => 'blog/blog-8', 'title' => 'Beyond Burnout: 14 Micro-Practices to Transform Your Workday in 2025', 'template' => 'templates/template-blog-8.php' ),
        array( 'slug' => 'blog/blog-9', 'title' => '10 Phrases That Will Transform Your Team', 'template' => 'templates/template-blog-9.php' ),
        array( 'slug' => 'blog/blog-10', 'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion', 'template' => 'templates/template-blog-10.php' ),
        array( 'slug' => 'blog/blog-11', 'title' => 'Breaking the Silence: Mental Health in the Modern Workplace', 'template' => 'templates/template-blog-11.php' ),
        array( 'slug' => 'blog/blog-12', 'title' => 'How to Unplug (Even When It Feels Impossible)', 'template' => 'templates/template-blog-12.php' ),
        array( 'slug' => 'blog/blog-13', 'title' => 'The Stress Reset: Practical Strategies to Reclaim Calm in Chaotic Times', 'template' => 'templates/template-blog-13.php' ),
        array( 'slug' => 'blog/blog-14', 'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion', 'template' => 'templates/template-blog-14.php' ),
        array( 'slug' => 'blog/blog-15', 'title' => 'Finding Your Purpose: How to Build a Life That Matters', 'template' => 'templates/template-blog-15.php' ),
        array( 'slug' => 'blog/blog-16', 'title' => 'Beyond Small Talk: The Art of Meaningful Conversation in a Digital Age', 'template' => 'templates/template-blog-16.php' ),
        array( 'slug' => 'blog/blog-17', 'title' => 'Raising Happy Kids in an Achievement-Obsessed Culture: A Parent\'s Guide', 'template' => 'templates/template-blog-17.php' ),
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
    $required_slugs = array( 'expertise', 'about-book', 'speaker-reel', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd' );
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
    $known_page_slugs = array( 'expertise', 'about-book', 'speaker-reel', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd', 'module-1', 'module-2', 'module-3', 'module-4', 'module-5', 'module-6', 'module-7', 'module-8', 'module-9', 'module-10', 'module-11', 'module-12', 'podcast-1', 'podcast-2', 'podcast-3', 'podcast-4', 'podcast-5', 'blog-1', 'blog-2', 'blog-3', 'blog-4', 'blog-5', 'blog-6', 'blog-7', 'blog-8', 'blog-9', 'blog-10', 'blog-11', 'blog-12', 'blog-13', 'blog-14', 'blog-15', 'blog-16', 'blog-17' );
    
    $path_parts_temp = array_filter( explode( '/', $request_uri ) );
    $last_slug_temp = end( $path_parts_temp );
    $last_slug_temp = strtok( $last_slug_temp, '?' );
    $last_slug_temp = rtrim( $last_slug_temp, '/.html' );
    
    // Check if it's a course module, podcast page, or blog page
    $is_course_or_podcast = ( strpos( $request_uri, 'course/' ) !== false || strpos( $request_uri, 'podcast/' ) !== false || strpos( $request_uri, 'blog/' ) !== false );
    
    // Check if it's a blog detail page - prevent author archive routing
    if ( preg_match( '#^blog/blog-([1-7])$#i', $request_uri ) ) {
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
        'podcast-4' => array( 'title' => 'Podcast 4: 12 Steps to Happiness', 'template' => 'templates/template-podcast-4.php', 'parent' => 'podcast' ),
        'podcast-5' => array( 'title' => 'Podcast 5: The Happiness Code', 'template' => 'templates/template-podcast-5.php', 'parent' => 'podcast' ),
        'blog' => array( 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        // Blog detail pages
        'blog-1' => array( 'title' => 'Money and Happiness: Why More Isn\'t Always Better', 'template' => 'templates/template-blog-1.php', 'parent' => 'blog' ),
        'blog-2' => array( 'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything', 'template' => 'templates/template-blog-2.php', 'parent' => 'blog' ),
        'blog-3' => array( 'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)', 'template' => 'templates/template-blog-3.php', 'parent' => 'blog' ),
        'blog-4' => array( 'title' => 'The Power of Gratitude: How Thankfulness Transforms Your Life', 'template' => 'templates/template-blog-4.php', 'parent' => 'blog' ),
        'blog-5' => array( 'title' => 'Building Authentic Relationships: The Foundation of True Happiness', 'template' => 'templates/template-blog-5.php', 'parent' => 'blog' ),
        'blog-6' => array( 'title' => 'Finding Your Purpose: A Journey from Success to Significance', 'template' => 'templates/template-blog-6.php', 'parent' => 'blog' ),
        'blog-7' => array( 'title' => 'Yes, parents, the kids really are okay.', 'template' => 'templates/template-blog-7.php', 'parent' => 'blog' ),
        // New 2025 blog pages
        'blog-8' => array( 'title' => 'Beyond Burnout: 14 Micro-Practices to Transform Your Workday in 2025', 'template' => 'templates/template-blog-8.php', 'parent' => 'blog' ),
        'blog-9' => array( 'title' => '10 Phrases That Will Transform Your Team', 'template' => 'templates/template-blog-9.php', 'parent' => 'blog' ),
        'blog-10' => array( 'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion', 'template' => 'templates/template-blog-10.php', 'parent' => 'blog' ),
        'blog-11' => array( 'title' => 'Breaking the Silence: Mental Health in the Modern Workplace', 'template' => 'templates/template-blog-11.php', 'parent' => 'blog' ),
        'blog-12' => array( 'title' => 'How to Unplug (Even When It Feels Impossible)', 'template' => 'templates/template-blog-12.php', 'parent' => 'blog' ),
        'blog-13' => array( 'title' => 'The Stress Reset: Practical Strategies to Reclaim Calm in Chaotic Times', 'template' => 'templates/template-blog-13.php', 'parent' => 'blog' ),
        'blog-14' => array( 'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion', 'template' => 'templates/template-blog-14.php', 'parent' => 'blog' ),
        'blog-15' => array( 'title' => 'Finding Your Purpose: How to Build a Life That Matters', 'template' => 'templates/template-blog-15.php', 'parent' => 'blog' ),
        'blog-16' => array( 'title' => 'Beyond Small Talk: The Art of Meaningful Conversation in a Digital Age', 'template' => 'templates/template-blog-16.php', 'parent' => 'blog' ),
        'blog-17' => array( 'title' => 'Raising Happy Kids in an Achievement-Obsessed Culture: A Parent\'s Guide', 'template' => 'templates/template-blog-17.php', 'parent' => 'blog' ),
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
    $known_page_slugs = array( 'expertise', 'about-book', 'speaker-reel', 'about-author', 'course', 'podcast', 'blog', 'preview-book', 'preview-boot-camp', 'boot-camp', 'hire-todd', 'module-1', 'module-2', 'module-3', 'module-4', 'module-5', 'module-6', 'module-7', 'module-8', 'module-9', 'module-10', 'module-11', 'module-12', 'podcast-1', 'podcast-2', 'podcast-3', 'podcast-4', 'podcast-5', 'blog-1', 'blog-2', 'blog-3', 'blog-4', 'blog-5', 'blog-6', 'blog-7', 'blog-8', 'blog-9', 'blog-10', 'blog-11', 'blog-12', 'blog-13', 'blog-14', 'blog-15', 'blog-16', 'blog-17' );
    
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
        'speaker-reel' => array( 'title' => 'Speaker Reel', 'template' => 'templates/template-speaker-reel.php' ),
        'about-author' => array( 'title' => 'About Author', 'template' => 'templates/template-about-author.php' ),
        'course' => array( 'title' => 'Course', 'template' => 'templates/template-course.php' ),
        'podcast' => array( 'title' => 'Podcast', 'template' => 'templates/template-podcast.php' ),
        // Podcast detail pages
        'podcast-1' => array( 'title' => 'Podcast 1: Crack the Happiness Code', 'template' => 'templates/template-podcast-1.php', 'parent' => 'podcast' ),
        'podcast-2' => array( 'title' => 'Podcast 2: Helping Others Helps You', 'template' => 'templates/template-podcast-2.php', 'parent' => 'podcast' ),
        'podcast-3' => array( 'title' => 'Podcast 3: Happiness Isn\'t What You Think', 'template' => 'templates/template-podcast-3.php', 'parent' => 'podcast' ),
        'podcast-4' => array( 'title' => 'Podcast 4: 12 Steps to Happiness', 'template' => 'templates/template-podcast-4.php', 'parent' => 'podcast' ),
        'podcast-5' => array( 'title' => 'Podcast 5: The Happiness Code', 'template' => 'templates/template-podcast-5.php', 'parent' => 'podcast' ),
        'blog' => array( 'title' => 'Blog', 'template' => 'templates/template-blog.php' ),
        // Blog detail pages
        'blog-1' => array( 'title' => 'Money and Happiness: Why More Isn\'t Always Better', 'template' => 'templates/template-blog-1.php', 'parent' => 'blog' ),
        'blog-2' => array( 'title' => 'The Quiet Time Revolution: Why Doing Nothing Changed Everything', 'template' => 'templates/template-blog-2.php', 'parent' => 'blog' ),
        'blog-3' => array( 'title' => '5 Signs You\'re a High-Functioning Depressive (And What to Do About It)', 'template' => 'templates/template-blog-3.php', 'parent' => 'blog' ),
        'blog-4' => array( 'title' => 'The Power of Gratitude: How Thankfulness Transforms Your Life', 'template' => 'templates/template-blog-4.php', 'parent' => 'blog' ),
        'blog-5' => array( 'title' => 'Building Authentic Relationships: The Foundation of True Happiness', 'template' => 'templates/template-blog-5.php', 'parent' => 'blog' ),
        'blog-6' => array( 'title' => 'Finding Your Purpose: A Journey from Success to Significance', 'template' => 'templates/template-blog-6.php', 'parent' => 'blog' ),
        'blog-7' => array( 'title' => 'Yes, parents, the kids really are okay.', 'template' => 'templates/template-blog-7.php', 'parent' => 'blog' ),
        // New 2025 blog pages
        'blog-8' => array( 'title' => 'Beyond Burnout: 14 Micro-Practices to Transform Your Workday in 2025', 'template' => 'templates/template-blog-8.php', 'parent' => 'blog' ),
        'blog-9' => array( 'title' => '10 Phrases That Will Transform Your Team', 'template' => 'templates/template-blog-9.php', 'parent' => 'blog' ),
        'blog-10' => array( 'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion', 'template' => 'templates/template-blog-10.php', 'parent' => 'blog' ),
        'blog-11' => array( 'title' => 'Breaking the Silence: Mental Health in the Modern Workplace', 'template' => 'templates/template-blog-11.php', 'parent' => 'blog' ),
        'blog-12' => array( 'title' => 'How to Unplug (Even When It Feels Impossible)', 'template' => 'templates/template-blog-12.php', 'parent' => 'blog' ),
        'blog-13' => array( 'title' => 'The Stress Reset: Practical Strategies to Reclaim Calm in Chaotic Times', 'template' => 'templates/template-blog-13.php', 'parent' => 'blog' ),
        'blog-14' => array( 'title' => 'Stop Beating Yourself Up: The Science and Practice of Self-Compassion', 'template' => 'templates/template-blog-14.php', 'parent' => 'blog' ),
        'blog-15' => array( 'title' => 'Finding Your Purpose: How to Build a Life That Matters', 'template' => 'templates/template-blog-15.php', 'parent' => 'blog' ),
        'blog-16' => array( 'title' => 'Beyond Small Talk: The Art of Meaningful Conversation in a Digital Age', 'template' => 'templates/template-blog-16.php', 'parent' => 'blog' ),
        'blog-17' => array( 'title' => 'Raising Happy Kids in an Achievement-Obsessed Culture: A Parent\'s Guide', 'template' => 'templates/template-blog-17.php', 'parent' => 'blog' ),
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
        'speaker-reel' => 'templates/template-speaker-reel.php',
        'about-author' => 'templates/template-about-author.php',
        'course' => 'templates/template-course.php',
        'podcast' => 'templates/template-podcast.php',
        'podcast-1' => 'templates/template-podcast-1.php',
        'podcast-2' => 'templates/template-podcast-2.php',
        'podcast-3' => 'templates/template-podcast-3.php',
        'podcast-4' => 'templates/template-podcast-4.php',
        'podcast-5' => 'templates/template-podcast-5.php',
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
        
        // Check if it's a blog detail page (blog/blog-1 through blog/blog-17)
        if ( preg_match( '#^blog/blog-([1-9]|1[0-7])$#i', $request_uri, $matches ) ) {
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
        'speaker-reel' => 'templates/template-speaker-reel.php',
        'about-author' => 'templates/template-about-author.php',
        'course' => 'templates/template-course.php',
        'podcast' => 'templates/template-podcast.php',
        'podcast-1' => 'templates/template-podcast-1.php',
        'podcast-2' => 'templates/template-podcast-2.php',
        'podcast-3' => 'templates/template-podcast-3.php',
        'podcast-4' => 'templates/template-podcast-4.php',
        'podcast-5' => 'templates/template-podcast-5.php',
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
        'podcast-4' => 'templates/template-podcast-4.php',
        'podcast-5' => 'templates/template-podcast-5.php',
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
        
        // If it's a blog detail page (blog/blog-1 through blog/blog-17), prevent author archive
        if ( preg_match( '#^blog/blog-([1-9]|1[0-7])$#i', $request_uri ) ) {
            $query->is_author = false;
            $query->is_404 = false;
            $query->is_page = true;
        }
    }
}

/**
 * Parse blogs_content.txt and extract blog content by number
 * 
 * @param int $blog_number The blog number (1-7)
 * @return array|false Returns array with 'title' and 'content' or false if not found
 */
function toddpatkin_get_blog_content($blog_number) {
    static $blogs_cache = null;
    
    // Cache the parsed blogs to avoid reading file multiple times
    if ($blogs_cache === null) {
        $blogs_cache = array();
        $content_file = get_template_directory() . '/blogs_content.txt';
        
        if (!file_exists($content_file)) {
            return false;
        }
        
        $content = file_get_contents($content_file);
        $lines = explode("\n", $content);
        
        $current_blog = null;
        $current_title = '';
        $current_content = array();
        
        foreach ($lines as $line) {
            // Check if line starts with a blog number (e.g., "1->", "2->", etc.)
            if (preg_match('/^(\d+)->(.+)$/', $line, $matches)) {
                // Save previous blog if exists
                if ($current_blog !== null) {
                    $blogs_cache[$current_blog] = array(
                        'title' => $current_title,
                        'content' => trim(implode("\n", $current_content))
                    );
                }
                
                // Start new blog
                $current_blog = (int)$matches[1];
                $current_title = trim($matches[2]);
                $current_content = array();
            } else {
                // Add line to current blog content
                if ($current_blog !== null) {
                    $current_content[] = $line;
                }
            }
        }
        
        // Save last blog
        if ($current_blog !== null) {
            $blogs_cache[$current_blog] = array(
                'title' => $current_title,
                'content' => trim(implode("\n", $current_content))
            );
        }
    }
    
    return isset($blogs_cache[$blog_number]) ? $blogs_cache[$blog_number] : false;
}

/**
 * Get blog excerpt from content
 * 
 * @param int $blog_number The blog number (1-7)
 * @param int $word_count Number of words for excerpt (default: 25)
 * @return string|false Returns excerpt or false if blog not found
 */
function toddpatkin_get_blog_excerpt($blog_number, $word_count = 25) {
    $blog = toddpatkin_get_blog_content($blog_number);
    
    if (!$blog) {
        return false;
    }
    
    // Remove title from content for excerpt
    $content = $blog['content'];
    
    // Clean up content - remove extra whitespace
    $content = preg_replace('/\s+/', ' ', $content);
    $content = trim($content);
    
    // Get excerpt
    $words = explode(' ', $content);
    if (count($words) > $word_count) {
        $excerpt = implode(' ', array_slice($words, 0, $word_count));
        return $excerpt . '...';
    }
    
    return $content;
}

/**
 * Format blog content for display in detail pages
 * Converts plain text to formatted HTML paragraphs with enhanced styling
 * 
 * @param string $content The raw blog content
 * @return string Formatted HTML content
 */
function toddpatkin_format_blog_content($content) {
    if (empty($content)) {
        return '';
    }
    
    // Split content into lines
    $lines = explode("\n", $content);
    
    $formatted = '';
    $in_list = false;
    $list_items = array();
    $paragraph_count = 0;
    $first_paragraph = true;
    
    foreach ($lines as $line) {
        $line = trim($line);
        
        // Skip empty lines
        if (empty($line)) {
            if ($in_list && !empty($list_items)) {
                // Close the list - output as regular paragraphs without blue border box
                foreach ($list_items as $item) {
                    $formatted .= '<p class="blog-details-paragraph mb-3" style="font-size: 14px; line-height: 1.6; color: #2D2D2D; margin: 0;">' . esc_html($item) . '</p>' . "\n";
                }
                $list_items = array();
                $in_list = false;
            }
            continue;
        }
        
        // Check if it's a bullet point (starts with * or -)
        if (preg_match('/^[\*\-\•]\s*(.+)$/', $line, $matches)) {
            $in_list = true;
            $list_items[] = trim($matches[1]);
        } else {
            // If we were in a list, close it first - format as styled list
            if ($in_list && !empty($list_items)) {
                // Check if this looks like a numbered list of phrases (blog-2 style)
                $is_phrase_list = false;
                foreach ($list_items as $item) {
                    // Check if items start with quotes (phrases)
                    if (preg_match('/^["\']/', $item) || preg_match('/^[A-Z][^.!?]*[.!?]$/', $item)) {
                        $is_phrase_list = true;
                        break;
                    }
                }
                
                if ($is_phrase_list && count($list_items) > 3) {
                    // Format as styled phrase list with better presentation
                    $formatted .= '<div class="blog-phrase-list-container mb-5" style="margin: 40px 0; padding: 30px; background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">' . "\n";
                    $formatted .= '<h3 style="color: #275BA7; font-size: 20px; font-weight: 600; margin-bottom: 20px; font-family: \'Oswald\', sans-serif;">10 Phrases That Will Transform Your Team</h3>' . "\n";
                    $formatted .= '<div class="blog-phrase-list" style="display: flex; flex-direction: column; gap: 15px;">' . "\n";
                    
                    foreach ($list_items as $index => $item) {
                        $phrase = '';
                        $description = '';
                        
                        // Check if item starts with a quoted phrase followed by description
                        if (preg_match('/^["\']([^"\']+)["\']\s+(.+)$/', $item, $matches)) {
                            // Format: "Phrase" Description text
                            $phrase = trim($matches[1]);
                            $description = trim($matches[2]);
                        } elseif (preg_match('/^["\'](.+)["\']$/', $item, $matches)) {
                            // Format: Just "Phrase"
                            $phrase = trim($matches[1]);
                        } elseif (preg_match('/^([A-Z][^.!?]*[.!?])\s+(.+)$/', $item, $matches)) {
                            // Format: Phrase. Description (no quotes)
                            $phrase = trim($matches[1]);
                            $description = trim($matches[2]);
                        } else {
                            // No clear structure, use entire item
                            $phrase = trim($item);
                        }
                        
                        $formatted .= '<div class="blog-phrase-item" style="padding: 15px; background: #FFFFFF; border-left: 4px solid #275BA7; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: all 0.3s ease;">' . "\n";
                        $formatted .= '<div style="display: flex; align-items: flex-start; gap: 12px;">' . "\n";
                        $formatted .= '<div style="flex-shrink: 0; width: 32px; height: 32px; background: linear-gradient(135deg, #275BA7 0%, #1a4a8a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-weight: bold; font-size: 14px; box-shadow: 0 2px 6px rgba(39, 91, 167, 0.3);">' . ($index + 1) . '</div>' . "\n";
                        $formatted .= '<div style="flex: 1;">' . "\n";
                        $formatted .= '<p style="font-size: 14px; font-weight: 600; color: #275BA7; margin: 0 0 6px 0; line-height: 1.4;">' . esc_html($phrase) . '</p>' . "\n";
                        if (!empty($description)) {
                            $formatted .= '<p style="font-size: 11px; line-height: 1.5; color: #2D2D2D; margin: 0;">' . esc_html($description) . '</p>' . "\n";
                        }
                $formatted .= '</div>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '</div>' . "\n";
                    }
                    
                    $formatted .= '</div>' . "\n";
                    $formatted .= '</div>' . "\n";
                } else {
                    // Regular list - format as styled paragraphs
                    foreach ($list_items as $item) {
                        $formatted .= '<p class="blog-details-paragraph mb-3" style="font-size: 14px; line-height: 1.6; color: #2D2D2D; margin: 0 0 12px 0; padding-left: 20px; position: relative;">' . "\n";
                        $formatted .= '<span style="position: absolute; left: 0; top: 0; color: #275BA7; font-weight: bold; font-size: 18px;">•</span>' . "\n";
                        $formatted .= esc_html($item) . "\n";
                        $formatted .= '</p>' . "\n";
                    }
                }
                $list_items = array();
                $in_list = false;
            }
            
            // Check for quotes or emphasized text
            $is_quote = false;
            $is_important = false;
            
            // Detect quotes (lines that start with quotes or contain quote-like patterns)
            if (preg_match('/^["\']|["\']$/', $line) || strlen($line) < 150 && preg_match('/^[A-Z][^.!?]*[.!?]$/', $line)) {
                // Check if it looks like a quote
                if (preg_match('/^["\']/', $line) || (strlen($line) < 200 && preg_match('/\b(remember|think|believe|know|realize|understand)\b/i', $line))) {
                    $is_quote = true;
                }
            }
            
            // Detect important statements (short, impactful sentences)
            if (strlen($line) < 200 && preg_match('/\b(important|key|essential|crucial|vital|remember|note|tip)\b/i', $line)) {
                $is_important = true;
            }
            
            // Format paragraph with enhanced styling inspired by book section
            $paragraph_count++;
            $paragraph_class = 'blog-details-paragraph';
            
            // First paragraph gets special treatment - styled like book intro
            if ($first_paragraph) {
                $formatted .= '<div class="blog-description-item mb-4" style="padding-left: 24px; border-left: 3px solid #FFC107; position: relative; margin-bottom: 30px;">' . "\n";
                $formatted .= '<div class="blog-icon-badge" style="position: absolute; left: -10px; top: -1px; width: 20px; height: 20px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(255, 193, 7, 0.4); z-index: 2; margin: 0; padding: 0;">' . "\n";
                $formatted .= '<i class="fas fa-lightbulb" style="color: #275BA7; font-size: 10px; margin: 0; padding: 0; line-height: 20px; display: block; width: 100%; height: 100%; text-align: center;"></i>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '<p class="blog-description-text mb-0" style="font-size: 14px; line-height: 1.6; color: #2D2D2D;">' . esc_html($line) . '</p>' . "\n";
                $formatted .= '</div>' . "\n";
                $first_paragraph = false;
            }
            // Quote styling - styled like book highlight box
            else if ($is_quote) {
                $formatted .= '<div class="blog-highlight-box p-4 mb-4" style="background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border: 2px solid #FFC107; border-radius: 12px; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.15); position: relative; margin: 30px 0;">' . "\n";
                $formatted .= '<div class="d-flex align-items-start gap-3">' . "\n";
                $formatted .= '<div class="quote-icon" style="flex-shrink: 0; width: 40px; height: 40px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(255, 193, 7, 0.4);">' . "\n";
                $formatted .= '<i class="fas fa-quote-left" style="color: #275BA7; font-size: 18px;"></i>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '<div>' . "\n";
                $formatted .= '<p class="blog-description-text blog-description-italic mb-0" style="font-size: 14px; line-height: 1.6; color: #2D2D2D; font-style: italic; margin: 0;">' . esc_html($line) . '</p>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '</div>' . "\n";
            } 
            // Important statement styling - styled like book CTA box
            else if ($is_important) {
                $formatted .= '<div class="blog-cta-text mb-4" style="padding: 16px 20px; background: linear-gradient(135deg, #275BA7 0%, #1E4A7A 100%); border-radius: 8px; box-shadow: 0 4px 8px rgba(39, 91, 167, 0.2); margin: 25px 0;">' . "\n";
                $formatted .= '<div class="d-flex align-items-center gap-2 mb-2">' . "\n";
                $formatted .= '<i class="fas fa-check-circle" style="color: #FFC107; font-size: 18px;"></i>' . "\n";
                $formatted .= '<span style="color: #FFFFFF; font-weight: 600; font-size: 15px; letter-spacing: 0.5px;">KEY INSIGHT</span>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '<p class="blog-description-text mb-0" style="font-size: 12px; line-height: 1.5; color: #FFFFFF; margin: 0;">' . esc_html($line) . '</p>' . "\n";
                $formatted .= '</div>' . "\n";
            }
            // Regular paragraphs - styled like book description items with alternating colors
            else {
                // Alternate between yellow and blue borders
                $border_color = ($paragraph_count % 2 == 0) ? '#275BA7' : '#FFC107';
                $icon_bg = ($paragraph_count % 2 == 0) ? '#275BA7' : '#FFC107';
                $icon_color = ($paragraph_count % 2 == 0) ? '#FFC107' : '#275BA7';
                $icon_type = ($paragraph_count % 2 == 0) ? 'fa-heart' : 'fa-lightbulb';
                
                $formatted .= '<div class="blog-description-item mb-4 blog-paragraph-interactive" style="padding-left: 24px; border-left: 3px solid ' . $border_color . '; position: relative; transition: all 0.3s ease;">' . "\n";
                $formatted .= '<div class="blog-icon-badge" style="position: absolute; left: -10px; top: -1px; width: 20px; height: 20px; background: ' . $icon_bg . '; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(' . ($paragraph_count % 2 == 0 ? '39, 91, 167' : '255, 193, 7') . ', 0.4); z-index: 2; transition: all 0.3s ease; margin: 0; padding: 0;">' . "\n";
                $formatted .= '<i class="fas ' . $icon_type . '" style="color: ' . $icon_color . '; font-size: 10px; margin: 0; padding: 0; line-height: 20px; display: block; width: 100%; height: 100%; text-align: center;"></i>' . "\n";
                $formatted .= '</div>' . "\n";
                $formatted .= '<p class="blog-description-text mb-0" style="font-size: 14px; line-height: 1.6; color: #2D2D2D; margin: 0;">' . esc_html($line) . '</p>' . "\n";
                $formatted .= '</div>' . "\n";
            }
        }
    }
    
    // Close any remaining list - format as styled list
    if ($in_list && !empty($list_items)) {
        $is_phrase_list = false;
        foreach ($list_items as $item) {
            if (preg_match('/^["\']/', $item) || preg_match('/^[A-Z][^.!?]*[.!?]$/', $item)) {
                $is_phrase_list = true;
                break;
            }
        }
        
        if ($is_phrase_list && count($list_items) > 3) {
            $formatted .= '<div class="blog-phrase-list-container mb-5" style="margin: 40px 0; padding: 30px; background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">' . "\n";
            $formatted .= '<h3 style="color: #275BA7; font-size: 24px; font-weight: 600; margin-bottom: 25px; font-family: \'Oswald\', sans-serif;">Key Phrases</h3>' . "\n";
            $formatted .= '<div class="blog-phrase-list" style="display: flex; flex-direction: column; gap: 20px;">' . "\n";
            
            foreach ($list_items as $index => $item) {
                $phrase = '';
                $description = '';
                
                // Check if item starts with a quoted phrase followed by description
                if (preg_match('/^["\']([^"\']+)["\']\s+(.+)$/', $item, $matches)) {
                    // Format: "Phrase" Description text
                    $phrase = trim($matches[1]);
                    $description = trim($matches[2]);
                } elseif (preg_match('/^["\'](.+)["\']$/', $item, $matches)) {
                    // Format: Just "Phrase"
                    $phrase = trim($matches[1]);
                } elseif (preg_match('/^([A-Z][^.!?]*[.!?])\s+(.+)$/', $item, $matches)) {
                    // Format: Phrase. Description (no quotes)
                    $phrase = trim($matches[1]);
                    $description = trim($matches[2]);
                } else {
                    // No clear structure, use entire item
                    $phrase = trim($item);
                }
                
                $formatted .= '<div class="blog-phrase-item" style="padding: 15px; background: #FFFFFF; border-left: 4px solid #275BA7; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">' . "\n";
                $formatted .= '<div style="display: flex; align-items: flex-start; gap: 12px;">' . "\n";
                $formatted .= '<div style="flex-shrink: 0; width: 32px; height: 32px; background: linear-gradient(135deg, #275BA7 0%, #1a4a8a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-weight: bold; font-size: 14px;">' . ($index + 1) . '</div>' . "\n";
                $formatted .= '<div style="flex: 1;">' . "\n";
                $formatted .= '<p style="font-size: 14px; font-weight: 600; color: #275BA7; margin: 0 0 6px 0;">' . esc_html($phrase) . '</p>' . "\n";
                if (!empty($description)) {
                    $formatted .= '<p style="font-size: 11px; line-height: 1.5; color: #2D2D2D; margin: 0;">' . esc_html($description) . '</p>' . "\n";
                }
        $formatted .= '</div>' . "\n";
        $formatted .= '</div>' . "\n";
        $formatted .= '</div>' . "\n";
            }
            
            $formatted .= '</div>' . "\n";
            $formatted .= '</div>' . "\n";
        } else {
            foreach ($list_items as $item) {
                $formatted .= '<p class="blog-details-paragraph mb-3" style="font-size: 16px; line-height: 1.8; color: #2D2D2D; margin: 0 0 15px 0; padding-left: 20px; position: relative;">' . "\n";
                $formatted .= '<span style="position: absolute; left: 0; top: 0; color: #275BA7; font-weight: bold; font-size: 18px;">•</span>' . "\n";
                $formatted .= esc_html($item) . "\n";
                $formatted .= '</p>' . "\n";
            }
        }
    }
    
    return $formatted;
}