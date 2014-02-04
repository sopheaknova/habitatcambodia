<?php

/* 
Template Name: Partnership Page
*/

?>

<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">        	
        	<h2><?php the_title(); ?></h2>
                        
            <?php 			
				$categories=  get_categories('taxonomy=partnership-categories'); 
				foreach ($categories as $category) {
					$partner_category = $category->category_nicename;
					$partnername = $category->cat_name;								
			?>
			
			<?php 
				query_posts("posts_per_page=1&post_type=partnership&partnership-categories=$partner_category&order=desc"); 
				
				if (have_posts()) : while(have_posts()) : the_post();
				$image_id = get_post_thumbnail_id();  
				$image_url = wp_get_attachment_image_src($image_id, 'full');
			?>
            
            <div class="partner-items">
                <div class="partner-name">
                    <h4><?php echo $partnername; ?></h4><span class="morepartner"><a href="<?php bloginfo('url'); ?>/partnership-categories/<?php echo $category->slug; ?>">See more <?php echo $partnername; ?> &rsaquo;&rsaquo;</a></span>
                    <div class="clear"></div>
                </div>
                
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
            
            <?php		endwhile; endif; wp_reset_query(); ?>
            <?php 	} //end foreach ?>
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>