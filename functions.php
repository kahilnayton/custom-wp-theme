<?php
// Register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');

wp_enqueue_style( "style", get_stylesheet_uri() );

// Theme Support
function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    //Nav Menues
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'wpbootstrap' ),
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  add_action('after_setup_theme','wpb_theme_setup');

  add_theme_support( 'customize-selective-refresh-widgets' );

  	// Add support for editor styles.
	add_theme_support( 'styles' );


// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

register_sidebar(array(
  'name'  => 'Box1',
  'id'    => 'box1',
  'before_widget' => '<div class="box">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

register_sidebar(array(
  'name'  => 'Box2',
  'id'    => 'box2',
  'before_widget' => '<div class="box">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

register_sidebar(array(
  'name'  => 'Box3',
  'id'    => 'box3',
  'before_widget' => '<div class="box">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

register_sidebar(array(
  'name'  => 'Box4',
  'id'    => 'box4',
  'before_widget' => '<div class="box">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

register_sidebar(array(
  'name'  => 'Box5',
  'id'    => 'box5',
  'before_widget' => '<div class="box">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));


}

add_action('widgets_init', 'wpb_init_widgets');


// Customizer File
require get_template_directory(). '/inc/customizer.php';


// adding work


function sHomeQuote($atts, $content = null) {
  return '<div class="grid_16" id="main_quote_container">
 <div class="grid_10 push_2" id="main_quote_text">' . do_shortcode($content) . '</div></div>
 <div class="clear"></div>';
}
add_shortcode('HomeQuote', 'sHomeQuote');




// mailing list

add_shortcode('LoyalesMailing', 'LoyalesMailing');
function LoyalesMailing()
{
return '
 ';
}



?>

