<?php

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
function enqueue_theme_scripts()
{
    // Frick this dependency 
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );

    // Generic theme scripts
    wp_enqueue_style( 'orel_css', get_theme_file_uri( 'assets/css/style.css' ) );
    wp_enqueue_style( 'normalize_css', get_theme_file_uri( 'assets/css/normalize.css' ) );
    wp_enqueue_style( 'theme_style_css', get_theme_file_uri( 'assets/css/theme-style.css' ) );
    wp_enqueue_style( 'fonts_css', get_theme_file_uri( 'assets/css/fonts.css' ) );

    //Bootstrap and Co
    wp_enqueue_style('orel_bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('orel_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], false, true);
    wp_enqueue_script('orel_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['orel_popper', 'jquery'], false, true);

    // Fontawesome
    wp_enqueue_style('jnr_fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    // JQuery Mask
    wp_enqueue_script('orel_jquery_mask_js', get_theme_file_uri('assets/js/jquery.mask.min.js'), ['jquery'], false, true);

     // Mask Validation (used in contact forms) 
     wp_enqueue_script('orel_mask_validation', get_theme_file_uri('assets/js/mask-validate.js'), ['jquery'], false, true);

    // Go to Top Button 
    wp_enqueue_script('orel_topup_button', get_theme_file_uri('assets/js/top-up.js'), [], false, true);

}

// Navigation Menu
function wpb_custom_new_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );