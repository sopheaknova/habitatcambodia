<?php

/* 
Template Name: Jobs Page
*/

?>

<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">        	
        	<h2><?php the_title(); ?></h2>
            
            <?php
			
				$wpq = array ('post_type' => 'jobs', 'orderby' => 'name', 'order' => 'desc', 'post_status' => 'publish', 'paged' => $paged, 'posts_per_page' => 16);
				
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
											
				query_posts($wpq);
				
				if (have_posts()) : 
			?>            
			<table class="job-list">
            <tr>
            	<th width="15%">Date Post</th>
                <th width="40%">Job Title</th>
                <th width="15%">Job Type</th>
                <th width="20%">Workplace</th>
            </tr>
            <?php while(have_posts()) : the_post(); ?>
            <tr>
            	<td><?php the_time('F j, Y') ?></td>
                <td><strong><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong></td>
                <td><?php echo get_post_meta($post->ID, 'o_job_type', 23231); ?></td>
                <td><?php limit_word(get_post_meta($post->ID, 'o_job_location', 23231), 33); ?></td>
            </tr>            
            
            <?php		
					endwhile; 
			?>
            </table>            
            <!--/job-list-->
            
            <?php
					if (function_exists('wp_pagenavi')) {
	            		wp_pagenavi();
					}					
			?>		
            
            <?php else : ?>            
                <p>Sorry, the job announcement not available yet.</p>
			<?php endif; wp_reset_query(); ?>
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>