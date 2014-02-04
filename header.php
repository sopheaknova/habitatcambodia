<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="google-site-verification" content="MG2gDnaj7LufQocbyNC7gxtH8c1YYsotdPLA9V8svts" />



<title><?php bloginfo('name'); if(!is_home() || !is_front_page()) wp_title(' | '); ?></title>



    <meta name="description" content="Habitat for Humanity works in partnership with people everywhere, from all walks of life, to develop communities with people in need by building and renovating houses so that there are decent houses in thriving communities in which people can experience God’s love, and can live and grow into all that God intends." />

    

    <meta name="keywords" content="habitat for humanity, habitat cambodia, cambodia humanity, cambodian people, habitat people, building House, develop communities, renovating house, eliminate hosing, homelessness, basic house, poverty housing, cambodia social, cambodia politically, emergency housing, habitat for humanity volunteer, habitat housing, habitat housing program, build a school, join habitat for humanity" />

    

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php wp_head(); ?>



<style type="text/css">

	@import "<?php bloginfo('template_url'); ?>/css/uibase.css";	

	@import "<?php bloginfo('template_url'); ?>/css/nivo-slider.css";	

	@import "<?php bloginfo('template_url'); ?>/css/prettyPhoto.css";	

</style>



<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.2.min.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>



<!-- (cufn) Font Replacement -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/font/cufon-yui.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/font/Serena_400.font.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/font/vegur_400-vegur_700.font.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/font/One_Stroke_Script_LET_500.font.js"></script>



<script src="<?php bloginfo('template_url'); ?>/js/custom.js" type="text/javascript"></script>

<style type="text/css">
.test{color:#fff;}
body {

<?php 
if ( function_exists( 'ot_get_option' ) ) {
	$bg_img = ot_get_option('bg_img_body', '', false, true); 
	if ( ! empty( $bg_img  ) ) {
		if ( ! empty($bg_img['background-color']) ) {
		echo 'background-color:' . $bg_img['background-color'] . ';';
		} 
		if ( ! empty($bg_img['background-image']) ) {
		echo 'background-image:url(' . $bg_img['background-image'] . ');';		
		}
		if ( ! empty($bg_img['background-repeat']) ) {
		echo 'background-repeat:' . $bg_img['background-repeat'] . ';';		
		}
		if ( ! empty($bg_img['background-attachment']) ) {
		echo 'background-attachment:' . $bg_img['background-attachment'] . ';';		
		}
		
	}
}
?>

}

</style>


</head>



<body <?php body_class(); ?>>



<div class="wrap">

	<div id="header">

    	<div id="logo">

    	<h1><a href="<?php bloginfo('url'); ?>" title="Habitat for Humanity Cambodia"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Habitat for Humanity Cambodia" /></a><span>Habitat for Humanity Cambodia</span></h1>

        </div>

        <!--/logo-->

        

        <?php get_search_form(); ?>

        <?php wp_nav_menu(array('theme_location' => 'primary', 'container_id' => 'smoothmenu1', 'container_class' => 'ddsmoothmenu')); ?>        

        <!--/smoothmenu1-->

        

    </div>

    <!--/header-->