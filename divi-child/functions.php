<?php
function my_theme_enqueue_styles() { 
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Enqueue the JS and CSS for the .collapsing-mobile-submenu
function enqueue_collapsing_mobile_submenu() {
  $css_path = get_stylesheet_directory() . '/collapsing-mobile-submenu.css';
  $css_url = get_stylesheet_directory_uri() . '/collapsing-mobile-submenu.css';
  $css_ver = date( 'ymd-Gis', filemtime( $css_path ) );
  wp_enqueue_style( 'mobile_menu_css', $css_url, array(), $css_ver );
  $js_path = get_stylesheet_directory() . '/collapsing-mobile-submenu.js';
  $js_url = get_stylesheet_directory_uri() . '/collapsing-mobile-submenu.js';
  $js_ver = date( 'ymd-Gis', filemtime( $js_path ) );
  wp_enqueue_script( 'mobile_menu', $js_url, 'jquery', $js_ver, false );
}
// add_action( 'wp_enqueue_scripts', 'enqueue_collapsing_mobile_submenu' );

// This little gem was copied from the old child theme.
// It uses functions within the WP-Members plugin to redirect blocked/restricted pages
// back to the login page ("For Clinicians") if accessed while not logged in.
add_filter('template_redirect', function () {
  if (wpmem_is_blocked() && !is_user_logged_in()) {
    wpmem_redirect_to_login();
  }
});

// Enqueue the JS and CSS for the .fancy-tabs on the About page
function enqueue_about_page_styles() {
  $css_path = get_stylesheet_directory() . '/about-page.css';
  $css_url = get_stylesheet_directory_uri() . '/about-page.css';
  $css_ver = date( 'ymd-Gis', filemtime( $css_path ) );
  wp_enqueue_style( 'about_page_css', $css_url, array(), $css_ver );
  $js_path = get_stylesheet_directory() . '/about-page.js';
  $js_url = get_stylesheet_directory_uri() . '/about-page.js';
  $js_ver = date( 'ymd-Gis', filemtime( $js_path ) );
  wp_enqueue_script( 'about_page', $js_url, 'jquery', $js_ver, false );
}
// add_action( 'wp_enqueue_scripts', 'enqueue_about_page_styles' );

require_once 'posttype-testimonial.php';
require_once 'shortcodes.php';

function old_enqueue_assets() {
  // wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style('flightdeck-style', get_stylesheet_directory_uri() . '/css/style.css');

  wp_enqueue_script('macy', 'https://cdn.jsdelivr.net/npm/macy@2.5.1', [], '2.5.1', true);
  // wp_enqueue_script('theme-old-js', get_stylesheet_directory_uri() . '/js/theme-old.min.js', ['macy'], false, true);
  wp_enqueue_script('theme-old-js', get_stylesheet_directory_uri() . '/js/theme-old.js/theme-old.js', ['macy'], false, true);
  // wp_enqueue_style()
  // wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.min.js', [], false, true);
}
add_action( 'wp_enqueue_scripts', 'old_enqueue_assets' );

/* Make theme directory available in JS */
function add_footer_script() {
  ?>
<script type="text/javascript">
  window.template_directory_uri = '<?=get_template_directory_uri()?>';
  window.stylesheet_directory_uri = '<?=get_stylesheet_directory_uri()?>';
</script>
<?php
};
add_action('wp_footer', 'add_footer_script');

// Enqueue the JS and CSS for the .fancy-tabs on the About page
function enqueue_testimonials_styles() {
  $css_path = get_stylesheet_directory() . '/testimonials.css';
  $css_url = get_stylesheet_directory_uri() . '/testimonials.css';
  $css_ver = date( 'ymd-Gis', filemtime( $css_path ) );
  wp_enqueue_style( 'about_page_css', $css_url, array(), $css_ver );
  // $js_path = get_stylesheet_directory() . '/testimonials.js';
  // $js_url = get_stylesheet_directory_uri() . '/testimonials.js';
  // $js_ver = date( 'ymd-Gis', filemtime( $js_path ) );
  // wp_enqueue_script( 'about_page', $js_url, 'jquery', $js_ver, false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_testimonials_styles' );
