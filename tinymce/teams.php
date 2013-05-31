<?php 

 add_action('init', 'add_button_teams');
 
 function add_button_teams() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin_teams');
     add_filter('mce_buttons_3', 'register_button_teams');
   }
}

function register_button_teams($buttons) {
   array_push($buttons, "teams");
   return $buttons;
}

function add_plugin_teams($plugin_array) {
   $plugin_array['teams'] = get_template_directory_uri().'/tinymce/teams.js';
   return $plugin_array;
}
