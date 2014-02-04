<?php
/* 

Template Name: MBB Page

*/
?>

<?php get_header(); ?>

</div><!--/wrap-->

<div style="background:url(<?php get_option_tree('bg_mbb_page', '', true); ?>) 50% 0 no-repeat; height:522px; border-bottom:5px solid #F0EAD7; border-top:5px solid #F0EAD7;">

	<div class="wrap relative">

        <div class="content-box-mbb">
			
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>        	
			<div class="col">
            <h2 class="cufont"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; ?>
			</div>
			<?php endif; ?>
            
            <div class="video">
            	<iframe width="450" height="278" src="<?php get_option_tree('video_mbb_page', '', true); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="clear"></div>

        </div>    

        <div class="content-box-bg-mbb"></div>

    </div> <!--/wrap-->

</div><!--/fullsize-image-->

<div class="wrap">

    <div id="quickviews">

    <?php if ( ! dynamic_sidebar( 'footer-side-mbb-template' ) ) : ?>

    	<div class="box">

        	<h3><a href="#">About this sidebar</a></h3>

        	<div class="inner-box">

                <p>The Khmer Harvest Build offers a unique Habitat for Humanity opportunity for volunteers to come to Cambodia to build affordable homes for families.</p>

            </div>

        </div>

    <?php endif; // end Right widget area ?>

    </div>

    <!--/quickviews-->



<?php get_footer(); ?>