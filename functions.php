<?php 

function learningWordpress_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordpress_resources');

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'menu-script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/menu-script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

//Get top ancestor
function get_top_ancestor_id(){
	global $post;
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];	
	}
	
	return $post->ID;
}

//Does page have children?
function has_children() {
	global $post;
	
	$pages  =get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

//Customize excerpt word count length
function custom_excerpt_length(){
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function learningWordpress_setup() {
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
		'side' => __( 'Side Menu')
	));
	
	//Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small_thumbnail', 180, 120, true);
	add_image_size('banner-image',920,210,true);
	
	//Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learningWordpress_setup');

//Add Our Widget Locations
function ourWidgetsInit(){
	
	/*register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="my-special-class">',
		'after_title' => '</h4>'
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2'
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3'
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4'
	));*/
}
add_action('widgets_init', 'ourWidgetsInit');

// Customize Appearance Options
function learningWordPress_customize_register($wp_customize){
	
	$wp_customize->add_setting('lwp_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_section('lwp_lstandard_colors', array(
		'title' => __('Standard Colours', 'LearningWordPress'),
		'priority' => 30,
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize, 'lwp_link_color_control', array(
		'label' =>__('Link Colour', 'LearningWordPress'),
		'section' => 'lwp_lstandard_colors',
		'settings' => 'lwp_link_color',
	)));
}

add_action('customize_register','learningWordPress_customize_register');