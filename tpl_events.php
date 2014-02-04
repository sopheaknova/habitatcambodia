<?php

/* 
Template Name: Events Page
*/

?>

<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">        	
        	<h2><?php the_title(); ?></h2>
            <?php if (have_posts()) : while(have_posts()) : the_post();
            	the_content();

				endwhile; 
			endif;	
            ?>        
            <?php
			
				$wpq = array ('post_type' => 'events', 'orderby' => 'name', 'order' => 'desc', 'post_status' => 'publish', 'paged' => $paged, 'posts_per_page' => 16);
				
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
											
				query_posts($wpq);
				
				if (have_posts()) : 
			?>
        	<div class="upcoming">          
            <h3>Upcoming Event</h3>      
			<ul>
            <?php while(have_posts()) : the_post(); ?>            
            <li>            	
                <?php the_title(); ?> in <?php echo get_post_meta($post->ID, 'o_event_location', 23231); ?><br />
                <span class="datepost"><?php echo get_post_meta($post->ID, 'o_event_date', 23231); ?></span>
            </li>    
            <?php		
					endwhile; 
					
					/*if (function_exists('wp_pagenavi')) {
	            		wp_pagenavi();
					}*/					
			?>
            </ul>
            </div>
            <!--/event-list-->
            
            <?php else : ?>            
                <p>Sorry, there are not event available yet.</p>
			<?php endif; wp_reset_query(); ?>
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>