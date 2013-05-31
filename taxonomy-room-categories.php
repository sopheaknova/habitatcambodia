<?php get_header(); 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<?php get_header(); ?>

<div id="content" class="newsroom">
    	
        <div class="c1">        	
        	<h2><?php echo $term->name ?></h2>
            <ul>            
            <?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_per_page = 30; // -1 shows all posts
				$do_not_show_stickies = 1; // 0 to show stickies														
				$today = getdate();
				//$this_year = $today["year"];				
				
				$args=array(					
					'post_type' => 'newsroom',
					'room-categories'=> $term->name,
					'order' => 'desc',
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
					while ($wp_query->have_posts()) : $wp_query->the_post(); 
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
            
            <?php endwhile; ?>
            </ul>
            
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