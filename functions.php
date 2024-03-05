<?php
function register_my_menu()
{
    register_nav_menu('main-menu', 'Menu principal');
    register_nav_menu('footer-menu', 'Menu pied_de_page');
}

function sqWeb_register_assets()
{
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3' );
    wp_enqueue_style('style_theme', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_style('fonts-style',  get_stylesheet_directory_uri() . '/assets/css/fonts-style.css');
    wp_enqueue_script('anime-js', get_stylesheet_directory_uri() . '/assets/js/anime.min.js', array(), '1.0.0', true);
    wp_enqueue_script('titre-principal-js', get_stylesheet_directory_uri() . '/assets/js/script-anime.js', array('jquery'), '1.0.0', true);
   
}

add_action('after_setup_theme', 'register_my_menu');
add_action('wp_enqueue_scripts', 'sqWeb_register_assets');

// Désactivez les balises <p> automatiques dans Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

//svg
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');






