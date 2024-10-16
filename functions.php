<?php

if ( ! function_exists( 'aidzone_setup' ) ) :
    
     
    //Setup theme defaults and registers support for various WordPress features
    function aidzone_setup() {
    
        
        //For Language's Support
        load_theme_textdomain( 'aidzone', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        // Dynamic Title Call
        add_theme_support( 'title-tag' );
     
        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 825, 510, true );
    
        //Registering Navigation Menu's
        register_nav_menus( array(
            'primary' => __( 'Primary Menu',      'aidzone' ),
            'social'  => __( 'Social Links Menu', 'aidzone' ),
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5  
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        
        //Enable support for Post Formats.
         add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );
       
    }
    endif; 
    
    //aidzone theme setup
    add_action( 'after_setup_theme', 'aidzone_setup' );

   




 //Enqueueing Style and Scripts
 function aidzone_enqueueing_scripts() {
	 
    //styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.3', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'custom-animation', get_template_directory_uri() . '/assets/css/custom-animation.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '6.5.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'flaticon-aid', get_template_directory_uri() . '/assets/css/flaticon_aid.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'aidzone-core', get_template_directory_uri() . '/assets/css/aidzone-core.css', array(), '1.0', 'all' );
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
	
    //scripts
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ), '5.1.3', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), '6.5.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.1.3 ', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '1.1.0 ', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array( 'jquery' ), '1.0 ', true );
    wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array( 'jquery' ), '1.5.0', true );
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/appear.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'knob', get_template_directory_uri() . '/assets/js/knob.js', array( 'jquery' ), '1.2.10', true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'jquery' ), '3.0.5', true );
    wp_enqueue_script( 'slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/jarallax.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array( 'imagesloaded' ), '1.0', true );
   
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
//enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'aidzone_enqueueing_scripts' );