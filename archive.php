<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">
        	
            <?php if (have_posts()) : ?>

			  <?php $post = $posts[0]; ?>
              
              <?php if (is_category()) { ?>
                
                <h2 class="pagetitle"><?php single_cat_title(); ?></h2>
                
              <?php } elseif( is_tag() ) { ?>
                <h2 class="pagetitle"><?php echo 'Tag archive for'; ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
              
              <?php } elseif (is_day()) { ?>
                <h2 class="pagetitle"><?php echo 'Date archive for'; ?> <?php the_time('F jS, Y'); ?></h2>
              
              <?php } elseif (is_month()) { ?>
                <h2 class="pagetitle"><?php echo 'Date archive for'; ?> <?php the_time('F, Y'); ?></h2>
              
              <?php } elseif (is_year()) { ?>
                <h2 class="pagetitle"><?php echo 'Date archive for'; ?> <?php the_time('Y'); ?></h2>
              
              <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2 class="pagetitle"><?php echo 'Blog Archives'; ?></h2>
              <?php } ?>
              
              <ul class="archive-list">
                <?php while (have_posts()) : the_post(); ?>
              	<li>
               	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>                     
                <span class="datepost"><?php the_time('F j, Y') ?></span>                  
                <?php the_excerpt(''); ?>                
                </li>  
              	<?php endwhile; ?>
			  </ul>
              
				<?php
                    if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    }					
                ?>		
                
                <?php else : ?>            
                <p>Sorry, Please try to search form below again:</p>
                
                <?php endif; wp_reset_query(); ?>  
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>