<?php get_header(); 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">        	
        	<h2><?php echo $term->name ?></h2>
                        
            <?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_per_page = 20; // -1 shows all posts
				$do_not_show_stickies = 1; // 0 to show stickies														
				
				$args=array(					
					'post_type' => 'partnership',
					'partnership-categories'=> $term->name,
					'order' => 'desc',
					'post_status' => 'publish',
					'posts_per_page' => $post_per_page,
					'paged' => $paged,
					'caller_get_posts' => $do_not_show_stickies
				);
				
				$temp = $wp_query;  // assign orginal query to temp variable for later use
				$wp_query = null;
				$wp_query = new WP_Query($args);
				if( have_posts() ) :
					while ($wp_query->have_posts()) : $wp_query->the_post(); 
                    
				$image_id = get_post_thumbnail_id();  
				$image_url = wp_get_attachment_image_src($image_id, 'full');
			?>			            
            
            <div class="partner-by-category">
                <div class="partner-info">            	
                    <div class="partner-logo">                        
                        <a href="http://<?php echo get_post_meta($post->ID, "o_partner_link", true); ?>" target="_blank"><img src="<?php echo $image_url[0]; ?>" title="<?php the_title(); ?>" /></a>
                    </div>                
    
                    <div class="bio">	      
                    	<span class="name"><a href="http://<?php echo get_post_meta($post->ID, "o_partner_link", true); ?>" target="_blank"><strong><?php the_title(); ?></strong></a></span>
                        <?php the_content(); ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!--/partner-items-->            
            
            <?php endwhile; ?>
            
            <?php if (function_exists('wp_pagenavi')) { ?>
            <?php wp_pagenavi(); ?>
            <?php } ?>
             
            <?php else : ?>
            
             <h5>Not Found</h5>
             <p>Try using the search form on the top</p>
            
            <?php endif; 
				$wp_query = $temp;  //reset back to original query
			?>

            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>