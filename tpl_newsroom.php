<?php

/* 
Template Name: News Room Page
*/

?>

<?php get_header(); ?>

<div id="content" class="newsroom">
    	
        <div class="c1">        	
        	<h2><?php the_title(); ?></h2>
            
            <div class="video-type">
                <h4><a href="http://www.youtube.com/user/hfhcambodia" target="_blank">Video</a></h4>
                <?php 	  	
					$wpq = array ('post_type' => 'gallery', 'gallery-categories' => 'video-gallery', 'post_status' => 'publish', 'posts_per_page' => 1);
					$query = new WP_Query( $wpq );
				?>
				<?php if ($query->have_posts()) : ?>
					   <?php while ($query->have_posts()) : $query->the_post(); ?>   
                <iframe width="590" height="363" src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, "o_video_path", true) ?>?wmode=opaque
" frameborder="0" allowfullscreen></iframe>
                <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
            </div>
            <!--/video-->
            
            <div class="gallery-type">
            	<h4><a href="<?php bloginfo('url'); ?>/news-room/media/">Image Gallery</a></h4>
            	<ul>
    			<?php 	  	
					$wpq = array ('post_type' => 'gallery', 'orderby' => 'name', 'order' => 'asc', 'gallery-categories' => 'image-gallery', 'post_status' => 'publish', 'posts_per_page' => 12);
					$query = new WP_Query( $wpq );
				?>
				<?php if ($query->have_posts()) : ?>
					   <?php while ($query->have_posts()) : $query->the_post(); ?>   
				
                <li><a href="<?php echo get_post_meta($post->ID, "o_image_path", true) ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/script/timthumb.php?src=<?php echo get_post_meta($post->ID, "o_image_path", true) ?>&amp;w=80&amp;h=80&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" /></a></li>
                
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
      
                <div class="clear"></div>
                </ul>                                
                <a href="<?php bloginfo('url'); ?>/news-room/media/" class="morebycats">More Gallery &raquo;</a>
            </div>
            <!--/gallery-->            
                        
            <?php 			
				// Query 5 post for each Newsletter and Report
				$categories=  get_categories('taxonomy=room-categories'); 
				foreach ($categories as $category) {
					$room_category = $category->category_nicename;
					$roomname = $category->cat_name;								
			?>
			
            <div class="one_half">
                <h4><a href="<?php bloginfo('url'); ?>/room-categories/<?php echo $category->slug; ?>"><?php echo $roomname; ?></a></h4>
                <ul>
                <?php 
                    query_posts("posts_per_page=5&post_type=newsroom&room-categories=$room_category&order=desc"); 
                    
                    if (have_posts()) : while(have_posts()) : the_post();
                ?>
                <li>    
                <div class="room-items">
                    <?php the_title(); ?><br />
                    <span class="datepost">Posted on <?php the_time('F j, Y') ?></span>               <br /> 
                    <div class="download">Download in 
                    <?php if (get_post_meta($post->ID, "o_roomfile_kh_link", true)) : ?>
                        <a href="<?php echo get_post_meta($post->ID, "o_roomfile_kh_link", true); ?>">Khmer</a> - 
                    <?php else : ?>
                        <span class="na">Khmer (N/A)</span> -
                    <?php endif; ?> 
                    
                    <?php if (get_post_meta($post->ID, "o_roomfile_eng_link", true)) : ?>
                        <a href="<?php echo get_post_meta($post->ID, "o_roomfile_eng_link", true); ?>">English</a>
                    <?php else : ?>
                        <span class="na">English (N/A)</span>
                    <?php endif; ?>
                    </div>
                </div>
                <!--/room-items-->
                </li>
                
                <?php		endwhile; endif; wp_reset_query(); ?>
                </ul>
                <a href="<?php bloginfo('url'); ?>/room-categories/<?php echo $category->slug; ?>" class="morebycats">More <?php echo $category->slug; ?> &raquo;</a>
            </div>
            <!--/one_half-->
            
            <?php 	} //end foreach ?>
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>