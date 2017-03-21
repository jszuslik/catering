<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'html5reset'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();

	$options[] = array(
		'name' => __('Header Meta', 'html5reset'),
		'type' => 'heading');

// Standard Meta
	$options[] = array(
		'name' => __('Head ID', 'html5reset'),
		'desc' => __("", 'html5reset'),
		'id' => 'meta_headid',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Mobile Viewport', 'html5reset'),
		'desc' => __('Uncomment to use; use thoughtfully!', 'html5reset'),
		'id' => 'meta_viewport',
		'std' => 'width=device-width, initial-scale=1.0',
		'type' => 'text');
// Icons
	$options[] = array(
		'name' => __('Site Favicon', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'head_favicon',
		'type' => 'upload');
// Contact info
	$options[] = array(
		'name' => __('Contact Info', 'html5reset'),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __('Address', 'html5reset'),
		'desc' => __('Street Address', 'html5reset'),
		'id' => 'options_address',
		'type' => 'text'
	);
	$options[] = array(
		'desc' => __('City', 'html5reset'),
		'id' => 'options_city',
		'type' => 'text'
	);
	$options[] = array(
		'desc' => __('State', 'html5reset'),
		'id' => 'options_state',
		'type' => 'text'
	);
	$options[] = array(
		'desc' => __('Zip Code', 'html5reset'),
		'id' => 'options_zip',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('Phone Number', 'html5reset'),
		'desc' => __('ex: (555) 555-5555', 'html5reset'),
		'id' => 'options_phone',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('Email Address', 'html5reset'),
		'desc' => __('ex: info@whatever.com', 'html5reset'),
		'id' => 'options_email',
		'type' => 'text'
	);

// Social Media
	$options[] = array(
		'name' => __('Social Media', 'html5reset'),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __('Twitter Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'twitter_icon',
		'type' => 'text');
	$options[] = array(
		'name' => __('Facebook Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'facebook_icon',
		'type' => 'text');
	$options[] = array(
		'name' => __('Google Plus Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'google_icon',
		'type' => 'text');
	$options[] = array(
		'name' => __('Pinterest Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'pinterest_icon',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('Instagram Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'instagram_icon',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('LinkedIn Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'linkedin_icon',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('YouTube Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'youtube_icon',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('RSS Feed Link', 'html5reset'),
		'desc' => __('', 'html5reset'),
		'id' => 'rss_icon',
		'type' => 'text'
	);

	return $options;

}
