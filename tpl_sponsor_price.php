<?php

/* 
Template Name: Sponsor Price Page
*/

?>

<?php get_header(); ?>

<div id="content" class="sponsor-price-list">
    	
        <div class="c1">
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            
            <?php		
					endwhile; 
				endif; 
			?>
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>