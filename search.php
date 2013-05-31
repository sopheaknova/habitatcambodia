<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">
        	
            <?php if (have_posts()) : ?>

             <h2 id="title">Search Results</h2>
        
                <?php while (have_posts()) : the_post(); ?>
        
                    <div <?php post_class() ?>>
                        <h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt() ?>
                    </div>
        
                <?php endwhile; ?>
        
                <?php
                    if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    }					
                ?>		
                
                <?php else : ?> 
                <h2>Search Not Found</h2>           
                <p align="center">Sorry, Please Try a different search?</p>                
                
                <?php endif; wp_reset_query(); ?> 
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>