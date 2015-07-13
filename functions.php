<?php 
/**
* Enqueues scripts and styles for front end.
*
* @since Wp Bootstrap 1.0
*
* @return void
*/
function cwd_wp_bootstrap_scripts_styles() {

wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
wp_enqueue_style('bootstrapwp', get_template_directory_uri() . '/css/bootstrap.min.css', false ,'3.0.0'); 
}
add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles');

//register widget areas
if ( function_exists('register_sidebars'))
{
    register_sidebar(array(
    'name' => 'Footer Widget 1',
    'id' =>'footer1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4 class="footer-title">',
    'after_title' => '</h4>'
    ));
    
    register_sidebar(array(
    'name' => 'Search Form Widget',
    'id' =>'search1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
    ));
}

add_image_size('home-slider', 1400, 600, true);

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}

function register_my_menu()
{
  register_nav_menus(
  array(
  'primary' => __( 'Primary' ),
  'secondary' => __( 'Secondary' )
  ));
}
add_action('init', 'register_my_menu');

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    //return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
      return get_bloginfo( 'description' );
  }
  return $title;
}