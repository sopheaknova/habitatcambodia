<?php get_header(); ?>

<?php $job_app_from = ot_get_option('job_app_form', '', false); ?>

<div id="content">
    	
        <div class="c1">        	
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<h2><?php the_title(); ?></h2>
            <p class="postmetadata">Posted on <?php the_time('l, F jS, Y') ?></p>
            <p>
				<strong>Workplace: </strong><?php echo get_post_meta($post->ID, 'o_job_location', 23231); ?><br />
                <strong>Report to: </strong><?php echo get_post_meta($post->ID, 'o_job_report_to', 23231); ?><br />
                <strong>Job Type: </strong><?php echo get_post_meta($post->ID, 'o_job_type', 23231); ?><br />
            </p>
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