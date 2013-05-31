<div id="basicsearch">
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<fieldset>
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'habitatcambodia' ); ?>" />                
                <!--<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />-->
			</fieldset>
        </form>
</div>    
