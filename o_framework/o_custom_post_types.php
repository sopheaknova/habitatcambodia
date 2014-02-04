<?php 

add_action('init', 'o_register_sliders_type');
add_action('init', 'o_register_job_type');
add_action('init', 'o_register_event_type');
add_action('init', 'o_register_partnership_type');
add_action('init', 'o_register_newsroom_type');
add_action('init', 'o_register_gallery_type');


## ADD SLIDER POST TYPE

function o_register_sliders_type () {

	$labels = array(
	
		'name' => _x('Slider Items', 'post type general name'),
		'singular_name' => _x('Slider Item', 'post type singular name'),
		'add_new' => _x('Add New Slide', 'slider'),
		'add_new_item' => __('Add A New Slider Item'),
		'edit_item' => __('Edit Slider Item'),
		'new_item' => __('New Slider Item'),
		'view_item' => __('View Slider Item'),
		'search_items' => __('Search Slider Items'),
		'not_found' =>  __('No slider items found'),
		'not_found_in_trash' => __('No slider items found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Slider Items'
	
	);
	
	$args = array (
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'publicly_queryable' => true,
	'capability_type' => 'post',
	'supports' => array ('thumbnail', 'title'),
	'menu_position' => 26, 
	'menu_icon' => get_stylesheet_directory_uri() . '/images/logo-icons.png',
	'register_meta_box_cb' => 'o_add_slider_meta',
	'query_var' => true,
	'rewrite' => true,
	'show_in_nav_menus' => false
	);
	
	register_post_type('slider', $args);


}


## ADD JOB POST TYPE

function o_register_job_type () {

	$labels = array(
	
		'name' => _x('Jobs', 'post type general name'),
		'singular_name' => _x('Jobs', 'post type singular name'),
		'add_new' => _x('Add New Job', 'Job'),
		'add_new_item' => __('Add A New Job Item'),
		'edit_item' => __('Edit Job Item'),
		'new_item' => __('New Job Item'),
		'view_item' => __('View Job Item'),
		'search_items' => __('Search Job Items'),
		'not_found' =>  __('No job items found'),
		'not_found_in_trash' => __('No job items found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Job Items'
	
	);
	
	$args = array (
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'publicly_queryable' => true,
	'capability_type' => 'post',
	'supports' => array ('title', 'editor'),
	'menu_position' => 27, 
	'menu_icon' => get_stylesheet_directory_uri() . '/images/logo-icons.png',
	'query_var' => true,
	'rewrite' => true,
	'show_in_nav_menus' => false
	);
	
	register_post_type('jobs', $args);
	
	/*$jobtype_labels = array(
		'name' => _x( 'Jobs Type', 'taxonomy general name' ),
		'singular_name' => _x( 'Jobs Type', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Jobs type' ),
		'popular_items' => __( 'Popular Jobs type' ),
		'all_items' => __( 'All Jobs type' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Jobs type' ), 
		'update_item' => __( 'Update Jobs type' ),
		'add_new_item' => __( 'Add New Jobs type' ),
		'new_item_name' => __( 'New Jobs type Name' ),
		'separate_items_with_commas' => __( 'Separate jobs type with commas' ),
		'add_or_remove_items' => __( 'Add or remove jobs type' ),
		'choose_from_most_used' => __( 'Choose from the most used jobs type' ),
		'menu_name' => __( 'Job Type' ),
	);
	
	
	register_taxonomy("jobtype-categories", array("jobs"), array("hierarchical" => true, "label" => "Jobtype", "singular_label" => "Job Type Category", "labels" => $jobtype_labels, 'query_var' => true, "rewrite" => true, "show_in_nav_menus" => false));*/

}


## ADD EVENT POST TYPE

function o_register_event_type () {

	$labels = array(
	
		'name' => _x('Upcoming Event', 'post type general name'),
		'singular_name' => _x('Event', 'post type singular name'),
		'add_new' => _x('Add New Event', 'Event'),
		'add_new_item' => __('Add A New Event Item'),
		'edit_item' => __('Edit Event Item'),
		'new_item' => __('New Event Item'),
		'view_item' => __('View Event Item'),
		'search_items' => __('Search Event Items'),
		'not_found' =>  __('No Event items found'),
		'not_found_in_trash' => __('No Event items found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Event Items'
	
	);
	
	$args = array (
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'publicly_queryable' => true,
	'capability_type' => 'post',
	'supports' => array ('title', 'editor'),
	'menu_position' => 28, 
	'menu_icon' => get_stylesheet_directory_uri() . '/images/logo-icons.png',
	'query_var' => true,
	'rewrite' => true,
	'show_in_nav_menus' => false
	);
	
	register_post_type('events', $args);

}


## ADD PANERSHIP POST TYPE

function o_register_partnership_type () {

	$labels = array(
	
		'name' => _x('Partnership Items', 'post type general name'),
		'singular_name' => _x('Partner Items', 'post type singular name'),
		'add_new' => _x('Add New Partner', 'Partner'),
		'add_new_item' => __('Add A New Partner Item'),
		'edit_item' => __('Edit Partner Item'),
		'new_item' => __('New Partner Item'),
		'view_item' => __('View Partner Item'),
		'search_items' => __('Search Partner Items'),
		'not_found' =>  __('No Partner items found'),
		'not_found_in_trash' => __('No Partner items found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Partnership Items'
	
	);
	
	$args = array (
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'publicly_queryable' => true,
	'capability_type' => 'post',
	'supports' => array ('thumbnail', 'editor', 'title'),
	'menu_position' => 29, 
	'menu_icon' => get_stylesheet_directory_uri() . '/images/logo-icons.png',
	'query_var' => true,
	'rewrite' => true,
	'show_in_nav_menus' => false
	);
	
	register_post_type('partnership', $args);
	
	$g_labels = array(
		'name' => _x( 'Partnership', 'taxonomy general name' ),
		'singular_name' => _x( 'Partnership', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Partnership' ),
		'popular_items' => __( 'Popular Partnership' ),
		'all_items' => __( 'All Partnership' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Partnership' ), 
		'update_item' => __( 'Update Partnership' ),
		'add_new_item' => __( 'Add New Partnership' ),
		'new_item_name' => __( 'New Partnership Name' ),
		'separate_items_with_commas' => __( 'Separate Partnership with commas' ),
		'add_or_remove_items' => __( 'Add or remove Partnership' ),
		'choose_from_most_used' => __( 'Choose from the most used Partnership' ),
		'menu_name' => __( 'Partnership Type' ),
	);
	  
	register_taxonomy("partnership-categories", array("partnership"), array("hierarchical" => true, "label" => "Partnership", "singular_label" => "Partnership Category", "labels" => $g_labels, 'query_var' => true, "rewrite" => true, "show_in_nav_menus" => true));
	
	add_post_type_support('partnership', 'thumbnail'); 

}

## ADD PANERSHIP POST TYPE

function o_register_gallery_type () {

	$labels = array(
	
		'name' => _x('Gallery Items', 'post type general name'),
		'singular_name' => _x('Gallery Items', 'post type singular name'),
		'add_new' => _x('Add New Gallery', 'Partner'),
		'add_new_item' => __('Add A New Gallery Item'),
		'edit_item' => __('Edit Gallery Item'),
		'new_item' => __('New Gallery Item'),
		'view_item' => __('View Gallery Item'),
		'search_items' => __('Search Gallery Items'),
		'not_found' =>  __('No Gallery items found'),
		'not_found_in_trash' => __('No Gallery items found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Gallery Items'
	
	);
	
	$args = array (
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'publicly_queryable' => true,
	'capability_type' => 'post',
	'supports' => array ('thumbnail', 'title'),
	'menu_position' => 30, 
	'menu_icon' => get_stylesheet_directory_uri() . '/images/logo-icons.png',
	'query_var' => true,
	'rewrite' => true,
	'show_in_nav_menus' => false
	);
	
	register_post_type('gallery', $args);
	
	$g_labels = array(
		'name' => _x( 'Gallery', 'taxonomy general name' ),
		'singular_name' => _x( 'Gallery', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Gallery' ),
		'popular_items' => __( 'Popular Gallery' ),
		'all_items' => __( 'All Gallery' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Gallery' ), 
		'update_item' => __( 'Update Gallery' ),
		'add_new_item' => __( 'Add New Gallery' ),
		'new_item_name' => __( 'New Gallery Name' ),
		'separate_items_with_commas' => __( 'Separate Gallery with commas' ),
		'add_or_remove_items' => __( 'Add or remove Gallery' ),
		'choose_from_most_used' => __( 'Choose from the most used Gallery' ),
		'menu_name' => __( 'Gallery Type' ),
	);
	  
	register_taxonomy("gallery-categories", array("gallery"), array("hierarchical" => true, "label" => "Gallery", "singular_label" => "Gallery Category", "labels" => $g_labels, 'query_var' => true, "rewrite" => true, "show_in_nav_menus" => false));
	
	add_post_type_support('gallery', 'thumbnail'); 

}


## ADD NEWS ROOM POST TYPE

function o_register_newsroom_type () {

	$labels = array(
	
		'name' => _x('News Room Items', 'post type general name'),
		'singular_name' => _x('News Room Items', 'post type singular name'),
		'add_new' => _x('Add New Room Item', 'News Room'),
		'add_new_item' => __('Add A New Room Item'),
		'edit_item' => __('Edit News Room Item'),
		'new_item' => __('New News Room Item'),
		'view_item' => __('View News Room Item'),
		'search_items' => __('Search News Room Items'),
		'not_found' =>  __('No News Room items found'),
		'not_found_in_trash' => __('No News Room items found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'News Room Items'
	
	);
	
	$args = array (
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'publicly_queryable' => true,
	'capability_type' => 'post',
	'supports' => array ('thumbnail', 'title'),
	'menu_position' => 31, 
	'menu_icon' => get_stylesheet_directory_uri() . '/images/logo-icons.png',
	'query_var' => true,
	'rewrite' => true,
	'show_in_nav_menus' => false
	);
	
	register_post_type('newsroom', $args);
	
	$g_labels = array(
		'name' => _x( 'News Room Type', 'taxonomy general name' ),
		'singular_name' => _x( 'News Room Type', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search News Room' ),
		'popular_items' => __( 'Popular News Room' ),
		'all_items' => __( 'All News Room' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit News Room' ), 
		'update_item' => __( 'Update News Room' ),
		'add_new_item' => __( 'Add New Room type' ),
		'new_item_name' => __( 'New News Room Name' ),
		'separate_items_with_commas' => __( 'Separate News Room with commas' ),
		'add_or_remove_items' => __( 'Add or remove News Room' ),
		'choose_from_most_used' => __( 'Choose from the most used News Room' ),
		'menu_name' => __( 'News Room Type' ),
	);
	  
	register_taxonomy("room-categories", array("newsroom"), array("hierarchical" => true, "label" => "Room", "singular_label" => "Room Category", "labels" => $g_labels, 'query_var' => true, "rewrite" => true, "show_in_nav_menus" => true));
	
	add_post_type_support('newsroom', 'thumbnail'); 

}



## Slider_columns, <-  register_post_type then append _columns
add_filter("manage_edit-slider_columns", "slider_edit_columns");
add_action("manage_posts_custom_column",  "slider_custom_columns");

function slider_edit_columns($columns){

		$newcolumns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"thumbnail" => "Images"
		);
		
		$columns= array_merge($newcolumns, $columns);

		return $columns;
}

function slider_custom_columns($column){
		global $post;
		switch ($column)
		{
			case "description":
				#the_excerpt();
			break;
				
			case "thumbnail":								
				echo the_post_thumbnail(array(100,100));	
			break;	
			
		}
}


## Partnership columns, <-  register_post_type then append _columns
add_filter("manage_edit-partnership_columns", "partnership_edit_columns");
add_action("manage_posts_custom_column",  "partnership_custom_columns");

function partnership_edit_columns($columns){

		$newcolumns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"description" => "Description",
			"thumbnail" => "Preview",
			"partnership-categories" => "Partnership Type"
		);
		
		$columns= array_merge($newcolumns, $columns);

		return $columns;
}

function partnership_custom_columns($column){
		global $post;
		switch ($column) {
				
			case "thumbnail":				
				echo '';	
			break;
				
			case "partnership-categories":
				echo get_the_term_list($post->ID, 'partnership-categories', '', ', ','');
			break;
		}
}

## Gallery columns, <-  register_post_type then append _columns
add_filter("manage_edit-gallery_columns", "gallery_edit_columns");
add_action("manage_posts_custom_column",  "gallery_custom_columns");

function gallery_edit_columns($columns){

		$newcolumns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"gallery-categories" => "Gallery Type"
		);
		
		$columns= array_merge($newcolumns, $columns);

		return $columns;
}

function gallery_custom_columns($column){
		global $post;
		switch ($column) {
				
			case "gallery-categories":
				echo get_the_term_list($post->ID, 'gallery-categories', '', ', ','');
			break;
		}
}


## News Room columns, <-  register_post_type then append _columns
add_filter("manage_edit-newsroom_columns", "newsroom_edit_columns");
add_action("manage_posts_custom_column",  "newsroom_custom_columns");

function newsroom_edit_columns($columns){

		$newcolumns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Title",
			"room-categories" => "News Room Type"
		);
		
		$columns= array_merge($newcolumns, $columns);

		return $columns;
}

function newsroom_custom_columns($column){
		global $post;
		switch ($column) {
				
			case "room-categories":
				echo get_the_term_list($post->ID, 'room-categories', '', ', ','');
			break;
		}
}


?>