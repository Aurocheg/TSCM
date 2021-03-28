<?php
	add_action('wp_enqueue_scripts', 'tscm_styles');
	add_action('wp_enqueue_scripts', 'tscm_scripts');

	function tscm_styles() {
		wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap');
		wp_enqueue_style( 'tscm-style', get_stylesheet_uri());
		wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
		wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	}

	function tscm_scripts() {
		wp_enqueue_script('tscm-scripts', get_template_directory_uri() . '/js/script.min.js', array(), null, true);
		wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
		wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js');
	}

	add_theme_support('custom-logo');
?>