    
</div><!--/wrap-->

<div id="footer">
	<div class="footer-patern"></div>
    <div class="footer-content">
    <div class="footer-wrap">
    	<div class="copyright">
	<?php wp_nav_menu(array('theme_location' => 'footer', 'container_id' => 'footer-links', 'container_class' => 'footermenu', 'after' => ' -')); ?>
    
    Copyright &copy; 2012, Habitat Cambodia. All rights reserved.
    	</div> <!--.copyright-->
    	<div class="social-network">
        	<span>Join us on:</span>
            <a href="<?php get_option_tree('url_facebook', '', true); ?>" title="Facebook" target="_blank">
           	<img src="<?php bloginfo('template_url'); ?>/images/facebook-icon.png" />
            </a>
	    <a href="<?php get_option_tree('url_twitter', '', true); ?>" title="Youtube" target="_blank">
           	<img src="<?php bloginfo('template_url'); ?>/images/twitter-icon.png" />
            </a>
            <a href="<?php get_option_tree('url_youtube', '', true); ?>" title="Youtube" target="_blank">
           	<img src="<?php bloginfo('template_url'); ?>/images/you-tube-icon.png" />
            </a>
            
        </div> <!--.social-network-->
        <div class="clear"></div>
    </div>
    </div>
</div>
<!--/footer-->

<?php wp_footer(); ?>

<script type="text/javascript"> Cufon.now(); </script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6103560-31']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>