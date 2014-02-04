<?php

/* 
Template Name: Donate Page
*/

?>

<?php get_header(); ?>

</div>
<!--/wrap-->

<div style="background:url(<?php get_option_tree('bg_donate_page', '', true); ?>) 50% 0 no-repeat; height:475px; border-bottom:5px solid #F0EAD7; border-top:5px solid #F0EAD7;">
	<div class="wrap relative">
	
        <!-- <div class="content-box">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>        	
            <?php the_content(); ?>
            
            <?php		
					endwhile; 
				endif; 
			?>
            <p align="center">       
            <a href="https://www.habitat.org/cd/giving/donate.aspx?link=300" class="round-btn">Donate Now</a>        
            </p>
        </div> -->    
        <!-- <div class="content-box-bg"></div>-->
    
    </div>
    <!--/wrap-->
</div>
<!--/fullsize-image-->

<div class="wrap">
    <div id="quickviews">
    <?php if ( ! dynamic_sidebar( 'footer-side-donate-template' ) ) : ?>
    	<div class="box">
        	<h3><a href="#">Job Opportunities</a></h3>
        	<div class="inner-box">
            	<p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/jop-opportunity.jpg" alt="Volunteer teams" /></a></p>
                <p>Want to give yourself to a cause worth working for? We’re always looking for people who are passionate about what they do and why they do it.</p>
            </div>
        </div>
        
        <div class="box">
        	<h3><a href="#">Support Habitat</a></h3>
        	<div class="inner-box">
            	<p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/support-habitat-work.jpg" alt="Support Habitat Work" /></a></p>
                <p>You can also help bring them by buying cool stuff of building house to support Habitat community. Every purchase helps support Habitat’s work.</p>
            </div>
        </div>
        
        <div class="box last">
        	<h3><a href="<?php bloginfo('url'); ?>/?page_id=9">Contact</a></h3>
        	<div class="inner-box">  
                <p class="socialnetwork"><a href="#" title="Join Our Fan Page"><img src="<?php bloginfo('template_url'); ?>/images/facebook-icons.png" alt="facebook" /></a> <a href="#" title="Follow us on Twitter"><img src="<?php bloginfo('template_url'); ?>/images/twitter-icons.png" alt="twitter" /></a> <a href="#" title="Our Video on Youtube"><img src="<?php bloginfo('template_url'); ?>/images/youtube-icons.png" alt="Youtube" /></a> <a href="#" title="Angkor One"><img src="<?php bloginfo('template_url'); ?>/images/angkorone-icons.png" alt="Angkor One" /></a> </p>
                
                <p><strong>Habitat for Humanity Cambodia</strong>            <br />
                #35 Bis, Street 478, Sangkat Phsar Doeum Tkov<br />
                Khan Chamkar Morn, Phnom Penh </p>
                
                <p>Tel: +855 (0)23 997 840<br />
                Fax: +855 (0)23 997 840<br />
                Email: info@habitatcambodia.org</p>                
                
	       </div>
        </div>        
       <?php endif; // end Right widget area ?> 
    </div>
    <!--/quickviews-->

<?php get_footer(); ?>