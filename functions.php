<?php
function your_theme_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    // Enqueue Theme Styles
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

// Register Navigation Menus
function your_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme'),
    ));
}
add_action('init', 'your_theme_menus');

function plantlover_enqueue_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'plantlover_enqueue_scripts');


// Add Theme Support
function your_theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'your_theme_setup');

function plantlover_enqueue_assets() {
    // CSS Files
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('vendor-css', get_template_directory_uri() . '/assets/css/vendor.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // JavaScript Files
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.0.min.js', array(), null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), null, true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'plantlover_enqueue_assets');

function plantlover_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&family=Open+Sans:wght@300;400;500;600;700&family=Over+the+Rainbow&display=swap');
    // Vendor CSS
    wp_enqueue_style('vendor-css', get_template_directory_uri() . '/css/vendor.css');
    // Main style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'plantlover_enqueue_styles');


function plantlover_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'plantlover'),
        'id'            => 'footer-1',
        'description'   => __('Widgets added here will appear in the footer.', 'plantlover'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'plantlover_widgets_init');

function plantlover_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'plantlover'),
    ));
}
add_action('init', 'plantlover_register_menus');

?>

