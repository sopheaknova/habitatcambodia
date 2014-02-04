<?php

## CREATE SLIDER CUSTOM POST TYPE META BOXES

add_action('save_post', 'o_save_slider_settings');

function o_add_slider_meta () {

add_meta_box('o_slider_settings', "Slider Item Settings", 'o_slider_settings_meta_box', 'slider', 'normal', 'high');

}

function o_slider_settings_meta_box () {

wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

?>

<div style="padding: 0px 20px 20px 20px;">
<ul>
	<li>   
        <label for="o_slider_item_order"><strong>Slide Order</strong></label><br />
        <input type="text" style="width: 29%;" name="o_slider_item_order" value="<?php echo get_post_meta($_GET['post'], 'o_slider_item_order', 12351); ?>" /> 
        <span style="color:#666666;">(The position of the slide in the slider)</span>
    </li>
    <li>    
        <label for="o_slider_item_link"><strong>Slide Link</strong></label><br />
        <input type="text" style="width: 29%;" name="o_slider_item_link" value="<?php echo get_post_meta($_GET['post'], 'o_slider_item_link', 12351); ?>" />
    	<span style="color:#666666;">(Past the full path to text box bellow)</span>
    </li>    
</ul>        
</div>

<?php
}

function o_save_slider_settings ($post_id) {

  if ( !wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }

  update_post_meta($post_id, 'o_slider_item_order', $_POST['o_slider_item_order']);    
  update_post_meta($post_id, 'o_slider_item_link', $_POST['o_slider_item_link']);    
  
}


## CREATE JOBS CUSTOM POST TYPE META BOXES

add_action('save_post', 'o_save_job_settings');
add_action('add_meta_boxes', 'o_add_jobs_meta');

function o_add_jobs_meta () {

add_meta_box('o_jobs_settings', "Jobs Item Settings", 'o_jobs_settings_meta_box', 'jobs', 'normal', 'high');

}

function o_jobs_settings_meta_box () {

wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

?>

<div style="padding: 0px 20px 20px 20px;">
<ul>
	<li>    
        <label for="o_job_location"><strong>Job Location</strong></label><br />
        <input type="text" style="width: 29%;" name="o_job_location" value="<?php echo get_post_meta($_GET['post'], 'o_job_location', 12351); ?>" />
    	<span style="color:#666666;"> e.g: Phnom Penh, Siem Reap ...</span>
    </li>    
    <li>   
        <label for="o_job_report_to"><strong>Report to</strong></label><br />
        <input type="text" style="width: 29%;" name="o_job_report_to" value="<?php echo get_post_meta($_GET['post'], 'o_job_report_to', 12351); ?>" /> 
        <span style="color:#666666;"> e.g: Program Manager ...</span>
    </li>
    <li>    
        <label for="o_job_type"><strong>Job Type</strong></label><br />
        <input type="text" style="width: 29%;" name="o_job_type" value="<?php echo get_post_meta($_GET['post'], 'o_job_type', 12351); ?>" />
    	<span style="color:#666666;"> e.g: Phnom Penh, Siem Reap ...</span>
    </li>        
</ul>        
</div>

<?php
}

function o_save_job_settings ($post_id) {

  if ( !wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }

  update_post_meta($post_id, 'o_job_location', $_POST['o_job_location']);    
  update_post_meta($post_id, 'o_job_report_to', $_POST['o_job_report_to']);      
  update_post_meta($post_id, 'o_job_type', $_POST['o_job_type']);      
  
}


## CREATE EVENT CUSTOM POST TYPE META BOXES

add_action('save_post', 'o_save_event_settings');
add_action('add_meta_boxes', 'o_add_events_meta');

function o_add_events_meta () {

add_meta_box('o_events_settings', "Events Item Settings", 'o_events_settings_meta_box', 'events', 'normal', 'high');

}

function o_events_settings_meta_box () {

wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

?>

<div style="padding: 0px 20px 20px 20px;">
<ul>
	<li>    
        <label for="o_event_date"><strong>Event Date</strong></label><br />
        <input type="text" style="width: 29%;" name="o_event_date" value="<?php echo get_post_meta($_GET['post'], 'o_event_date', 12351); ?>" />
    	<span style="color:#666666;"> e.g: 29 July - 12 August or 8 - 16 August ...</span>
    </li>
    <li>    
        <label for="o_event_location"><strong>Event Location</strong></label><br />
        <input type="text" style="width: 29%;" name="o_event_location" value="<?php echo get_post_meta($_GET['post'], 'o_event_location', 12351); ?>" />
    	<span style="color:#666666;"> e.g: Phnom Penh, Siem Reap ...</span>
    </li>        
</ul>        
</div>

<?php
}

function o_save_event_settings ($post_id) {

  if ( !wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }

  update_post_meta($post_id, 'o_event_date', $_POST['o_event_date']);    
  update_post_meta($post_id, 'o_event_location', $_POST['o_event_location']);    
  
}


## CREATE PARTNERSHIP CUSTOM POST TYPE META BOXES

add_action('save_post', 'o_save_partner_settings');
add_action('add_meta_boxes', 'o_add_partners_meta');

function o_add_partners_meta () {

add_meta_box('o_partners_settings', "Partners Item Settings", 'o_partners_settings_meta_box', 'partnership', 'normal', 'high');

}

function o_partners_settings_meta_box () {

wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

?>

<div style="padding: 0px 20px 20px 20px;">
<ul>
	<li>    
        <label for="o_partner_link"><strong>Partner Link</strong></label><br />
        <input type="text" style="width: 29%;" name="o_partner_link" value="<?php echo get_post_meta($_GET['post'], 'o_partner_link', 12351); ?>" />
    	<span style="color:#666666;"> e.g: www.usaid.gov ...</span>
    </li>
</ul>        
</div>

<?php
}

function o_save_partner_settings ($post_id) {

  if ( !wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }

  update_post_meta($post_id, 'o_partner_link', $_POST['o_partner_link']);    
 
}

## CREATE GALLERY CUSTOM POST TYPE META BOXES

add_action('save_post', 'o_save_gallery_settings');
add_action('add_meta_boxes', 'o_add_galleries_meta');

function o_add_galleries_meta () {

add_meta_box('o_galleris_settings', "Galleries Item Settings", 'o_galleris_settings_meta_box', 'gallery', 'normal', 'high');

}

function o_galleris_settings_meta_box () {

wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

?>

<div>

<div style="border:1px solid #dddddd; padding: 0px 20px 20px 20px; margin:10px 0;">
    <h2>Image Setting</h2>
    <ul>
        <li>    
            <label for="o_image_path"><strong>Image Path</strong></label><br />
            <input type="text" style="width: 59%;" name="o_image_path" value="<?php echo get_post_meta($_GET['post'], 'o_image_path', 12351); ?>" />
            <span style="color:#666666;"> Please past the full path of image.</span>
        </li>
        <li>    
            <label for="o_image_desc"><strong>Enter image caption</strong></label><br />
            <textarea cols="41" rows="3" style="width: 59%;" name="o_image_desc" /><?php echo get_post_meta($_GET['post'], 'o_image_desc', 12351); ?></textarea>
            <span style="color:#666666;"> write short description of image</span>
        </li>
    </ul> 
</div>                  
<div style="border:1px solid #dddddd; padding: 0px 20px 20px 20px; margin:10px 0;">
    <h2>Video Setting</h2>
    <ul>
        <li>    
            <label for="o_video_path"><strong>Video Path</strong></label><br />
            <input type="text" style="width: 59%;" name="o_video_path" value="<?php echo get_post_meta($_GET['post'], 'o_video_path', 12351); ?>" />
            <span style="color:#666666;"> Please past the full path of video. BoQ98STwip8</span>
        </li> 
    </ul> 
</div>              
</div>

<?php
}

function o_save_gallery_settings ($post_id) {

  if ( !wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }

  update_post_meta($post_id, 'o_image_path', $_POST['o_image_path']);    
  update_post_meta($post_id, 'o_image_desc', $_POST['o_image_desc']);    
  update_post_meta($post_id, 'o_video_path', $_POST['o_video_path']);    
 
}


## CREATE NEWS ROOM CUSTOM POST TYPE META BOXES

add_action('save_post', 'o_save_newsroom_settings');
add_action('add_meta_boxes', 'o_add_newsrooms_meta');

function o_add_newsrooms_meta () {

add_meta_box('o_newsroom_settings', "Upload file for room item", 'o_newsroom_settings_meta_box', 'newsroom', 'normal', 'high');

}

function o_newsroom_settings_meta_box () {

wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

?>

<div style="padding: 0px 20px 20px 20px;">
<ul>
	<li>    
        <label for="o_roomfile_kh_link"><strong>Report or Newsletter in Khmer Link</strong></label><br />
        <input type="text" style="width: 59%;" name="o_roomfile_kh_link" value="<?php echo get_post_meta($_GET['post'], 'o_roomfile_kh_link', 12351); ?>" />
    	<span style="color:#666666;"> Please past your full path of Report or Newsletter file.</span>
    </li>
    <li>    
        <label for="o_roomfile_eng_link"><strong>Report or Newsletter in English Link</strong></label><br />
        <input type="text" style="width: 59%;" name="o_roomfile_eng_link" value="<?php echo get_post_meta($_GET['post'], 'o_roomfile_eng_link', 12351); ?>" />
    	<span style="color:#666666;"> Please past your full path of Report or Newsletter file.</span>
    </li>
</ul>        
</div>

<?php
}

function o_save_newsroom_settings ($post_id) {

  if ( !wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }

  update_post_meta($post_id, 'o_roomfile_kh_link', $_POST['o_roomfile_kh_link']);    
  update_post_meta($post_id, 'o_roomfile_eng_link', $_POST['o_roomfile_eng_link']);    
 
}