<?php
/**
 * JoshuaSzuslik functions and definitions
 *
 * @package joshuaszuslik
 */


 if ( ! function_exists( 'joshuasszuslik_setup' ) ) :
 function joshuaszuslik_setup() {
 	/*
 	 * Switch default core markup for search form, comment form, and comments
 	 * to output valid HTML5.
 	 */
 	add_theme_support( 'html5', array(
 		'search-form',
 		'comment-form',
 		'comment-list',
 		'gallery',
 		'caption',
 	) );
	load_theme_textdomain( 'joshuaszuslik', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
	add_theme_support( 'post-thumbnails' );
  function wpcodex_add_excerpt_support_for_pages() {
	   add_post_type_support( 'page', 'excerpt' );
  }
  add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );
  function new_excerpt_more() {
  	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
  }
  add_filter( 'excerpt_more', 'new_excerpt_more' );
	// Register Custom Navigation Walker
  require_once('wp_bootstrap_navwalker.php');
  require_once('_/inc/jms_custom_menus.php');
  // require_once('_/inc/jms_custom_post_type.php');


 	function joshuaszuslik_scripts_styles() {

 		// Load Stylesheets
		wp_enqueue_style('jms_google_fonts', "http://fonts.googleapis.com/css?family=Oswald:300,400,700|Roboto+Condensed:400,300,300italic,400italic,700,700italic");
    wp_enqueue_style( 'joshuaszuslik-reset', get_template_directory_uri(). '/css/reset.css' );
 		wp_enqueue_style( 'joshuaszuslik-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
 		wp_enqueue_style( 'joshuaszuslik-roboto', get_template_directory_uri() . '/css/roboto.min.css' );
 		wp_enqueue_style( 'joshuaszuslik-material' , get_template_directory_uri() . '/css/material.min.css' );
 		wp_enqueue_style( 'joshuaszuslik-ripples' , get_template_directory_uri() . '/css/ripples.min.css' );
    wp_enqueue_style( 'joshuaszuslik-font-awesome' , get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'joshuaszuslik-animate' , get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'joshuaszuslik-palette' , get_template_directory_uri() . '/css/palette.css' );
        wp_enqueue_style( 'joshuaszuslik-sass' , get_template_directory_uri() . '/assets/css/style.css' );
 		wp_enqueue_style( 'joshuaszuslik-style', get_stylesheet_uri() );

    wp_enqueue_script( 'joshuaszuslik-prefixfree', get_template_directory_uri(). '/_/js/prefixfree.min.js', array('jquery') );
 		wp_enqueue_script( 'joshuaszuslik-modernizr', get_template_directory_uri() . '/_/js/modernizr-2.8.0.dev.js' );
 		wp_enqueue_script( 'joshuaszuslik-bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.js' );
 		wp_enqueue_script( 'joshuaszuslik-response-js', get_template_directory_uri(). '/js/vendor/html5-3.6-respond-1.4.2.min.js');
 		wp_enqueue_script( 'joshuaszuslik-response-js', get_template_directory_uri(). '/js/vendor/ripples.min.js');
 		wp_enqueue_script( 'joshuaszuslik-response-js', get_template_directory_uri(). '/js/vendor/material.min.js');

 	}
 	add_action( 'wp_enqueue_scripts', 'joshuaszuslik_scripts_styles' );
   // Load jQuery
 	if ( !function_exists( 'core_mods' ) ) {
 		function core_mods() {
 			if ( !is_admin() ) {
 				wp_deregister_script( 'jquery' );
 				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
 				wp_enqueue_script( 'jquery' );
 			}
 		}
 		add_action( 'wp_enqueue_scripts', 'core_mods' );
 	}

}
endif; // joshuaszuslik_setup
add_action( 'after_setup_theme', 'joshuaszuslik_setup' );

  // If Dynamic Sidebar Exists
  if (function_exists('register_sidebar'))
  {
      // Define Sidebar Widget Area 1
      register_sidebar(array(
          'name' => __('Widget Area 1', 'joshuaszuslik'),
          'description' => __('Description for this widget-area...', 'joshuaszuslik'),
          'id' => 'widget-area-1',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
      ));

      // Define Sidebar Widget Area 2
      register_sidebar(array(
          'name' => __('Widget Area 2', 'joshuaszuslik'),
          'description' => __('Widget Area 2', 'joshuaszuslik'),
          'id' => 'widget-area-2',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
      ));
      // Define Footer Widget Area 2
      register_sidebar(array(
          'name' => __('Footer Area 1', 'joshuaszuslik'),
          'description' => __('Footer Area 1', 'joshuaszuslik'),
          'id' => 'footer-widget-area-1',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
      ));
      // Define Footer Widget Area 2
      register_sidebar(array(
          'name' => __('Footer Area 2', 'joshuaszuslik'),
          'description' => __('Footer Area 2', 'joshuaszuslik'),
          'id' => 'footer-widget-area-2',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
      ));
      // Define Footer Widget Area 3
      register_sidebar(array(
          'name' => __('Footer Area 3', 'joshuaszuslik'),
          'description' => __('Footer Area 3', 'joshuaszuslik'),
          'id' => 'footer-widget-area-3',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
      ));
      // Define Footer Widget Area 4
      register_sidebar(array(
          'name' => __('Footer Area 4', 'joshuaszuslik'),
          'description' => __('Footer Area 4', 'joshuaszuslik'),
          'id' => 'footer-widget-area-4',
          'before_widget' => '<div id="%1$s" class="%2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
      ));
  }

	// Navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
		echo '</div>';
	}
  // Add page slug to body class, love this - Credit: Starkers Wordpress Theme
	function add_slug_to_body_class($classes)
	{
	    global $post;
	    if (is_home()) {
	        $key = array_search('blog', $classes);
	        if ($key > -1) {
	            unset($classes[$key]);
	        }
	    } elseif (is_page()) {
	        $classes[] = sanitize_html_class($post->post_name);
	    } elseif (is_singular()) {
	        $classes[] = sanitize_html_class($post->post_name);
	    }

	    return $classes;
	}
  /*------------------------------------*\
	    Actions + Filters + ShortCodes
	\*------------------------------------*/
  add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
	add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
	add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)

  add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
  function baw_hack_wp_title_for_home( $title )
  {
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
      return __( 'Home', 'joshuaszuslik' ) . ' | ' . get_bloginfo( 'name' );
    } else {
      return __( get_the_title(). ' | ' . get_bloginfo(' name') );
    }
    return $title;
  }
	// Options Framework (https://github.com/devinsays/options-framework-plugin)
 	if ( !function_exists( 'optionsframework_init' ) ) {
 		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
 		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
 	}

  /**
   * Customizer additions.
   */
  require get_template_directory() . '/_/inc/customizer.php';
  $header = array(
	'flex-width'    => true,
	'width'         => 960,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => '',
	'uploads' => true
);
add_theme_support( 'custom-header', $header );

$background = array(
	'default-color'          => '',
	'default-image'          => ''
);
add_theme_support( 'custom-background', $background );

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar




 ?>
