<?php

/* 
Template Name: Khmer Harvest Build Page
*/

?>

<?php get_header(); ?>

</div>
<!--/wrap-->

<div style="background:url(<?php get_option_tree('bg_khb_page', '', true); ?>) 50% 0 no-repeat; height:475px; border-bottom:5px solid #F0EAD7; border-top:5px solid #F0EAD7;">
	<div class="wrap relative">
	
        <div class="content-box-2">
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>        	
            <?php the_content(); ?>
            
            <?php		
					endwhile; 
				endif; 
			?>
        </div>    
        <div class="content-box-bg-2"></div>
    
    </div>
    <!--/wrap-->
</div>
<!--/fullsize-image-->

<div class="wrap">
    <div id="quickviews">
    <?php if ( ! dynamic_sidebar( 'footer-side-khb-template' ) ) : ?>
    	<div class="box">
        	<h3><a href="#">Khmer Harvest Build</a></h3>
        	<div class="inner-box">
            	<p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/about-khb-footer.jpg" alt="Khmer Harvest Build" /></a></p>
                <p>The Khmer Harvest Build offers a unique Habitat for Humanity opportunity for volunteers to come to Cambodia to build affordable homes for families.</p>
            </div>
        </div>
        
        <div class="box">
        	<h3><a href="#">Home Partner Profile</a></h3>
        	<div class="inner-box">
            	<p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/home-partner-profile.jpg" alt="Home Partner Profile" /></a></p>
                <p>HFH Cambodia welcomes Global Village volunteers from all over the world. International teams join HFH Cambodia to work alongside our home partners.</p>
            </div>
        </div>
        
        <div class="box last">
        	<h3><a href="#">Get Involved</a></h3>
        	<div class="inner-box">
            	<p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/get-involved-footer.jpg" alt="Get Involved" /></a></p>
                <p>Donate to the Khmer Harvest Build, participate in 'Donate and Win' as a donor or tell your friends about the chance to build in Cambodia.</p>
            </div>
        </div>
    <?php endif; // end Right widget area ?>
    </div>
    <!--/quickviews-->

<?php get_footer(); ?>