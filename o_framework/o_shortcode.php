<?php

// Empty Pragraph Fix
  /*
    Plugin Name: Shortcode empty Paragraph fix
    Plugin URI: http://www.johannheyne.de/wordpress/shortcode-empty-paragraph-fix/
    Description: Fix issues when shortcodes are embedded in a block of content that is filtered by wpautop.
    Author URI: http://www.johannheyne.de
    Version: 0.1
    Put this in /wp-content/plugins/ of your Wordpress installation
    */


    add_filter('the_content', 'shortcode_empty_paragraph_fix');
    function shortcode_empty_paragraph_fix($content)
    {   
        $array = array (
            '<p>[' => '[', 
            ']</p>' => ']', 
            ']<br />' => ']'
        );

        $content = strtr($content, $array);

		return $content;
    }

## SPONSOR PRICES LIST SHORT CODE

function sponsor_name( $atts, $content = null ) {
   return '<span class="sponsor-name">' . do_shortcode($content) . '</span>';
}
add_shortcode('sp_name', 'sponsor_name');

function sponsor_price( $atts, $content = null ) {
   return '<span class="sponsor-price">' . do_shortcode($content) . '</span>';
}
add_shortcode('sp_price', 'sponsor_price');


## DONATE BUTTON SHORT CODE
function donate_button_link($atts, $content = null) {
	extract(shortcode_atts(array(
		"to" => 'https://www.habitat.org/cd/giving/donate.aspx?link=300'
	), $atts));
	return '<p align="center"><a class="round-btn" href="'.$to.'">'.$content.'</a></p>';
}
add_shortcode('donate_button', 'donate_button_link');


## TOGGLE CONTENT SHORT CODE
function toggle($atts, $content) {
	extract(shortcode_atts(array(
		'type' => '',/*frame - min*/
                'style'=> '',/*Open - Close*/
                'title' => ''
		), $atts));
	if($type=='') {
		$type='';
	} else {
		$type='_'. $type;
	}

	return '<div class="toggle_wrap'.$type.' '.$style.$type.'"><div class="toggle'.$type.'">'.$title.'</div><div class="toggle_content'.$type.' toggle_'.$style.'">'.do_shortcode($content).'</div></div>';
			
	}

add_shortcode('toggle', 'toggle');

## TOGGLE COLUMNS SHORT CODE
function columns($atts, $content=null, $code) {
	return '<div class="'.$code.'">' . do_shortcode($content) . '</div>';
	}
	
function columns_last($atts, $content=null, $code) {
	return '<div class="'.str_replace('_last','',$code).' last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}

add_shortcode('one_half', 'columns');
add_shortcode('one_half_last', 'columns_last');

## TOGGLE TEAM PROFILE SHORT CODE
function teams($atts, $content) {
	extract(shortcode_atts(array(
				'photo' => '',
		        'name'=> '',
                'position' => '',
				'email' => ''
		), $atts));
	$content = '<div class="profile">';
	$content .= '<div class="photo"><img src="' . $photo . '"></div>';
	$content .= '<span class="name">' . $name . '</span>';
	$content .= '<span class="position">' . $position . '</span>';
	$content .= '<span class="email"><a href="mailto:' . $email . '">' . $email . '</a></span>';
	$content .= '</div>';
	return $content;
	
	}

add_shortcode('teams', 'teams');

?>