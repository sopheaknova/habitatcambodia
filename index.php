<?php get_header(); ?>



<div id="featured" class="theme-default">

    

    <?php 

	$slider_number = ot_get_option('slide_number', '', false);

        query_posts("post_type=slider&order=ASC&orderby=meta_value_num&meta_key=o_slider_item_order&posts_per_page=$slider_number");

	

	if (have_posts()) : while (have_posts()) : the_post();

		

		$image_id = get_post_thumbnail_id();  

		$image_url = wp_get_attachment_image_src($image_id, 'full');

	?>	

	

	<a href="<?php echo get_post_meta($post->ID, 'o_slider_item_link', 23231); ?>" title="<?php the_title(); ?>">

		<img src="<?php bloginfo('template_url'); ?>/script/timthumb.php?src=<?php echo $image_url[0]; ?>&amp;w=950&amp;h=351&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" />

	</a>

	

	<?php 

	endwhile; endif; 



	wp_reset_query();

	?>

       

</div>

<!--/featured-->

<div id="gallery">

  <h3 class="title-brown">Building homes, communities and hope</h3>

  <ul>

    <?php 	  	

		$wpq = array ('post_type' => 'gallery', 'orderby' => 'name', 'order' => 'asc', 'gallery-categories' => 'image-gallery', 'post_status' => 'publish', 'posts_per_page' => 10);

		$query = new WP_Query( $wpq );

	?>

	<?php if ($query->have_posts()) : ?>

		   <?php while ($query->have_posts()) : $query->the_post(); ?>   

	

	<li><a href="<?php echo get_post_meta($post->ID, "o_image_path", true) ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/script/timthumb.php?src=<?php echo get_post_meta($post->ID, "o_image_path", true) ?>&amp;w=75&amp;h=75&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" /></a></li>

	

	<?php endwhile; ?>

	<?php endif; wp_reset_query(); ?>

    <li><a href="<?php bloginfo('url'); ?>/news-room/media/" class="media-btn" title="More Photo Gallery"><img src="<?php bloginfo('template_url'); ?>/images/media-btn.gif" alt="More" /></a></li>

  </ul>

</div>

<!--/gallery-->

<div id="quickviews">

  <div class="box">

    <h3><a href="<?php bloginfo('url'); ?>/category/highlights/">Highlights</a></h3>

    <div class="inner-box">
	<?php 
		$category_id = get_option_tree('highlight_post', '', false); 
		$category_link =  get_category_link( $category_id );
	?>	
      <ul>

      <?php 	  	

	  	$query = new WP_Query( 'cat=$category_id&posts_per_page=4' );

	  ?>

      <?php if ($query->have_posts()) : ?>

               <?php while ($query->have_posts()) : $query->the_post(); ?>   

               

        <li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php limit_word(get_the_title(), 70); ?></a><br />

        <span class="datepost"><?php the_time('F j, Y') ?></span> </li>

	  	

		<?php endwhile; ?>

      <?php endif; wp_reset_query(); ?>    

      </ul>

      <a href="<?php echo $category_link; ?>" class="morebycats">More Highlight &raquo;</a> 

  </div>

  </div>

  <div class="box">

    <h3><a href="<?php bloginfo('url'); ?>/update/">Update</a></h3>

    <div class="inner-box">

      <ul>

        

        <?php

		$wpq = array ('post_type' => 'events', 'orderby' => 'name', 'order' => 'desc', 'post_status' => 'publish', 'paged' => $paged, 'posts_per_page' => 4);

		 	  	

	  	$query = new WP_Query( $wpq );

	  ?>

      <?php if ($query->have_posts()) : ?>

               <?php while ($query->have_posts()) : $query->the_post(); ?>   

               

        <li>

			<?php the_title(); ?> in <?php echo get_post_meta($post->ID, 'o_event_location', 23231); ?><br />

            <span class="datepost"><?php echo get_post_meta($post->ID, 'o_event_date', 23231); ?></span>

        </li>

	  	

		<?php endwhile; ?>

      <?php endif; wp_reset_query(); ?>

      </ul>

      <a href="<?php bloginfo('url'); ?>/update/" class="morebycats">More Events &raquo;</a> 

  </div>

  </div>

  

  <?php if ( ! dynamic_sidebar( 'contact-side' ) ) : ?> 

  <div class="box"> 

    <h3><a href="<?php echo get_permalink(9); ?>">Contact</a></h3>

    <div class="inner-box">

    <p class="socialnetwork"><a href="#" title="Join Our Fan Page"><img src="<?php bloginfo('template_url'); ?>/images/facebook-icons.png" alt="facebook" /></a> <a href="#" title="Follow us on Twitter"><img src="<?php bloginfo('template_url'); ?>/images/twitter-icons.png" alt="twitter" /></a> <a href="#" title="Our Video on Youtube"><img src="<?php bloginfo('template_url'); ?>/images/youtube-icons.png" alt="Youtube" /></a></p>

      <p><strong>Habitat for Humanity Cambodia</strong> <br />

        #35 Bis, Street 478, Sangkat Phsar Doeum Tkov<br />

        Khan Chamkar Morn, Phnom Penh </p>

      <p>Tel: +855 (0)23 997 840<br />

        Fax: +855 (0)23 997 840<br />

        Email: info@habitatcambodia.org</p>      

    </div>    

  </div>    

  <?php endif; // end contact widget area ?>  

  

</div>

<!--/gallery-->

<?php get_footer(); ?>

