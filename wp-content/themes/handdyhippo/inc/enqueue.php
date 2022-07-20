<?php



/**

 * Enqueue scripts and styles.

 */



function handdyhippo_scripts() {

	// Theme stylesheet.

	wp_enqueue_style( 'handdyhippo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'handdyhippo-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-all-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-slide-css', get_theme_file_uri('/assets/css/slider_css/slide-css.css'), array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-slider-core', get_theme_file_uri('/assets/css/slider_css/slider-core.css'), array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-style-css', get_theme_file_uri('/assets/css/style.css'), array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-animation', get_theme_file_uri('/assets/css/animation.css'), array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );

	wp_enqueue_style( 'handdyhippo-responsive', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );









    wp_enqueue_script( 'jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0', true );

    wp_enqueue_script( 'jquery-migrate-js', get_theme_file_uri('/assets/js/jquery-migrate-1.4.1.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'pooper-min-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', array(), '1.0', true );

    wp_enqueue_script( 'bootstrap-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js', array(), '1.0', true );

    wp_enqueue_script( 'slicknav-js', get_theme_file_uri('/assets/js/jquery.slicknav.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'fastdom-js', get_theme_file_uri('/assets/js/slider_js/fastdom.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'gsap-js', get_theme_file_uri('/assets/js/slider_js/gsap.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'fontfaceobserver-js', get_theme_file_uri('/assets/js/slider_js/fontfaceobserver.js'), array(), '1.0', true );

    wp_enqueue_script( 'splittext-js', get_theme_file_uri('/assets/js/slider_js/SplitText.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'theme-js', get_theme_file_uri('/assets/js/slider_js/theme.min.js'), array(), '1.0', true );

  	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri('/assets/js/owl.carousel.js'), array(), '1.0', true );

 	wp_enqueue_script( 'app-js', get_theme_file_uri('/assets/js/app.js'), array(), '1.0', true );



}

add_action( 'wp_enqueue_scripts', 'handdyhippo_scripts' );

