<div id="basicsearch">
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<fieldset>
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'habitatcambodia' ); ?>" />                
                <!--<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />-->
			</fieldset>
        </form>
        
        <a href="<?php echo get_permalink(get_option_tree('url_donate_page', '', false)); ?>" class="button">Donate</a>
</div>    
