<?php

/* 
Template Name: Media Page
*/

?>
<?php get_header(); ?>

<div id="content" class="newsroom">
    	
        <div class="c1">        	
        	<h2><?php the_title(); ?></h2>
            <div class="gallery-type">
			<ul>
			<?php 	  	
                $wpq = array ('post_type' => 'gallery', 'orderby' => 'name', 'order' => 'asc', 'gallery-categories' => 'image-gallery', 'post_status' => 'publish', 'paged' => $paged, 'posts_per_page' => 12);
				
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$img = 1;
				$class_last = '';
                query_posts($wpq);
            ?>
            <?php if (have_posts()) : ?>
				   <?php while (have_posts()) : the_post(); 
                        
                        if (($img%3)==0) : 
                            $class_last = 'class="last"';
                        else : 
                            $class_last = '';
                        endif;
                   ?>                     
            
            <li><a href="<?php echo get_post_meta($post->ID, "o_image_path", true) ?>" rel="prettyPhoto[gallery1]" title="<?php echo get_post_meta($post->ID, "o_image_desc", true) ?>" <?php echo $class_last; ?>><img src="<?php bloginfo('template_url'); ?>/script/timthumb.php?src=<?php echo get_post_meta($post->ID, "o_image_path", true) ?>&amp;w=180&amp;h=121&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" /></a></li>
            
            <?php $img++;
				endwhile; ?>              
            <div class="clear"></div>
            </ul>                                
            </div>
            <?php
					if (function_exists('wp_pagenavi')) {
	            		wp_pagenavi();
					}					
			?>		
            
            <?php else : ?>            
                <p>Sorry, there are not image and video available yet.</p>
			<?php endif; wp_reset_query(); ?>
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>