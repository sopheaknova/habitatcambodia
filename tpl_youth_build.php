<?php

/* 
Template Name: Youth Build Page
*/

?>

<?php get_header(); ?>

<div id="content">
    	
        <div id="yb-slides" class="theme-default">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

			 $args = array(
			   'post_type' => 'attachment',
			   'numberposts' => -1,
			   'post_status' => null,
			   'post_parent' => $post->ID
			  );
			
			  $attachments = get_posts( $args );
				 if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
					   $image_url = wp_get_attachment_image_src( $attachment->ID, 'full' );
				?>	   
					   <img src="<?php bloginfo('template_url'); ?>/script/timthumb.php?src=<?php echo $image_url[0]; ?>&amp;w=950&amp;h=351&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" />
                <?php       
					}
				 }
			
			 endwhile; endif; ?>
        </div>
        
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
        
        <div class="c2">
        <?php if ( ! dynamic_sidebar( 'youth-build-template' ) ) : ?>

    	<div class="box">

        	<h3><a href="#">About this sidebar</a></h3>

        	<div class="inner-box">

                <p>The Khmer Harvest Build offers a unique Habitat for Humanity opportunity for volunteers to come to Cambodia to build affordable homes for families.</p>

            </div>

        </div>

    	<?php endif; // end Right widget area ?>
    	</div><!--/c2-->
        
    </div>
    <!--/content-->

<?php get_footer(); ?>