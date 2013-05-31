<?php 


##  CUSTOM LOGO LOGIN
function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; height:104px !important; background-size:326px 104px !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');


##   SET FAVICONS FOR BACKEND CODE 
function adminfavicon() {
echo '<link rel="icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'/images/logo-icons.png" />';
}

add_action( 'admin_head', 'adminfavicon' );


##  REMOVE ERROR MESSAGE LOGIN
add_filter('login_errors',create_function('$a', "return null;"));

##   CHANGE DASHBOARD FOOTER TEXT
function remove_footer_admin () {
    echo "Thank you for creating with nova";
} 

add_filter('admin_footer_text', 'remove_footer_admin');


##   REMOVE WORDPRESS VERSION GENERATION   
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

##   REMOVE WORDPRESS LINK ON ADMIN LOGIN LOGO 
function remove_link_on_admin_login_info() {
     return  get_bloginfo('url');
}
  
add_filter('login_headerurl', 'remove_link_on_admin_login_info');

## MISC

//add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

## WP2.9+ Thumbnails Settings

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 56, 56, true ); // Normal thumbnails
	add_image_size( 'full', 2000, '', true ); // Full thumbnails
	add_image_size( 'large', 600, '', true ); // Large thumbnails
	add_image_size( 'medium', 200, '', true ); // Medium thumbnails
	add_image_size( 'small', 125, '', true ); // Small thumbnails
}

## REGISTER NAV MENUS

register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'Top Menu' ),
	'footer' => __( 'Footer Navigation', 'Footer Menu' ),
) );

## RENAME POSE MENU

function ds_posts_menu_renamed() {
global $menu;
	unset($menu[5]);
	$menu[5] = array( __('Highlights'), 'edit_posts', 'edit.php', '', 'open-if-no-js menu-top menu-icon-post', 'menu-posts', 'div' );
}
add_action('_admin_menu','ds_posts_menu_renamed');


## Adding a CSS class to the all last menu items

function add_last_item_class($menuHTML) {
  $last_items_ids  = array();

  // Get all custom menus
  $menus = wp_get_nav_menus();

  // For each menu find last items
  foreach ( $menus as $menu_maybe ) {

    // Get items of specific menu
    if ( $menu_items = wp_get_nav_menu_items($menu_maybe->term_id) ) {

      $items = array();
      foreach ( $menu_items as $menu_item ) {
        $items[$menu_item->menu_item_parent][] .= $menu_item->ID;
      }

      // Find IDs of last items
      foreach ( $items as $item ) {
        $last_items_ids[] .= end($item);
      }
   }
}

  foreach( $last_items_ids as $last_item_id ) {
    $items_add_class[] .= ' menu-item-'.$last_item_id;
    $replacement[]     .= ' menu-item-'.$last_item_id . ' last';
  }

  $menuHTML = str_replace($items_add_class, $replacement, $menuHTML);
  return $menuHTML;

}
add_filter('wp_nav_menu','add_last_item_class');


## Limited The Character

function limit_word($desc, $num){
	$max_len = $num;
	$len_title = strlen($desc);
	if ($len_title >= $max_len) {
		echo substr($desc, 0, $max_len) . '...'; 
	} else {
		echo $desc;
	}
	
}

## Register Widgets Sidbar

function nova_widgets_init() { 
	// Area 1, located at the right of the sidebar.	
	register_sidebar(
		array(
			'id' => 'right-side',
			'name' => __( 'Righ Sidebar' ),
			'description' => __( 'The sidebar for the optional to put on right column.' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	// Area 2, located at the footer page.	
	register_sidebar(
		array(
			'id' => 'contact-side',
			'name' => __( 'Contact Footer Sidebar' ),
			'description' => __( 'The sidebar for putting contact us widget.' ),
			'before_widget' => '<div id="%1$s" class="widget box %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);

	// Area 3, located at the footer page wide background KHB tempage.	
	register_sidebar(
		array(
			'id' => 'footer-side-khb-template',
			'name' => __( 'Footer Sidebar on KHB Page' ),
			'description' => __( 'The block for putting image box' ),
			'before_widget' => '<div id="%1$s" class="widget box %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
	// Area 3, located at the footer page wide background Donate tempage.	
	register_sidebar(
		array(
			'id' => 'footer-side-donate-template',
			'name' => __( 'Footer Sidebar on Donate Page' ),
			'description' => __( 'The block for putting image box' ),
			'before_widget' => '<div id="%1$s" class="widget box %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);

}

## Register sidebars by running nova_widgets_init() */
add_action( 'widgets_init', 'nova_widgets_init' );	

## DEFINE THEME CONSTANTS

define(MSF, TEMPLATEPATH."/o_framework/");
define(TINYMCE, TEMPLATEPATH."/tinymce/");

## CREATE ARRAY OF INCLUDES

$ms_files = array('o_custom_post_types', 'o_custom_write_panels', 'o_shortcode');


## INCLUDE FRAMEWORK & THEME OPTIONS

include(MSF."nova.php");

## INCLUDE button shortcode in Tinymce
include(TINYMCE."toggle.php");
include(TINYMCE."columns.php");
include(TINYMCE."teams.php");


?>