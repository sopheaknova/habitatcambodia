<?php get_header(); 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<?php get_header(); ?>

<div id="content" class="newsroom">
    	
        <div class="c1"> 
                        
            <?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_per_page = 30; // -1 shows all posts
				$do_not_show_stickies = 1; // 0 to show stickies														
				$today = getdate();
				//$this_year = $today["year"];	
				$img = 1;
				$class_last = '';			
				
				$args=array(					
					'post_type' => 'gallery',
					'gallery-categories'=> $term->name,
					'order' => 'asc',
					//'year' => $this_year,
					'post_status' => 'publish',
					'posts_per_page' => $post_per_page,
					'paged' => $paged,
					'caller_get_posts' => $do_not_show_stickies
				);
				
				$temp = $wp_query;  // assign orginal query to temp variable for later use
				$wp_query = null;
				$wp_query = new WP_Query($args);
				if( $wp_query->have_posts() ) :
			?>
            <h2><?php echo $term->name ?></h2>
            <div class="gallery-type">
            <ul>	
				
			<?php
					while ($wp_query->have_posts()) : $wp_query->the_post();
					
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
            
            <?php if (function_exists('wp_pagenavi')) { ?>
            <?php wp_pagenavi(); ?>
            <?php } ?>
             
            <?php else : ?>            
            	<h2>Gallery not Found</h2>
                <p>Sorry, there are not image and video available yet.</p>
			<?php endif; wp_reset_query(); ?>

            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>