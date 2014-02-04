<?php

/* 
Template Name: Contact Page
*/

?>

<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            
            <!--<p><h4>Maricelle Bells Borja</h4>
			<span class="position">R/D and Communication Manager</span>
            </p>-->
            
            <div class="maps">
					<script type="text/javascript"
                        src="http://maps.google.com/maps/api/js?sensor=false">
                    </script>
                    <script type="text/javascript">					
                      jQuery(document).ready(function ($)
                        {
                            var myLatlng = new google.maps.LatLng(11.5351,104.9178  );
                            var myOptions = {							  
                              zoom: 12,
                              center: myLatlng,
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                            }
                            var map = new google.maps.Map(document.getElementById("gm-map"), myOptions);
                            
                            var marker = new google.maps.Marker({
                                position: myLatlng, 
                                map: map,
                                animation: google.maps.Animation.DROP,
                                title:"Habitat for Humanity Cambodia"
                            });
                        });
                    </script>
            <div id="gm-map"></div>
            </div>
            <!--/Map-->
            
            <!--Make Anquiry-->
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/form.js"></script>
			<script language="javascript">
            <!--
            jQuery(document).ready(function ($)
            {
                $('#myform').FormValidate({
                    phpFile:"<?php bloginfo('template_url'); ?>/send.php",
                    ajax:true,
                    validCheck: true
                });
            });
            -->
            </script>
                <style type="text/css">
                .valid{border:1px solid green !important;}
                .invalid{border:1px solid #800 !important;}
                </style>
                
            <div class="anquiry">            
                <h4>For any question or enquiry:</h4>
                <p>Feel free to contact me or please fill up below in the following details and we will be in touch shortly.</p>
                <div>
                <form id="myform">
                	<div>
                    <label for="name">Name / Company:</label>
                    <label for="email">Email:</label>
                    <label for="subject" class="last">Subject:</label>
                    </div>
                	<div>
                    <input type="text" name="name" class="txt-box is_required" />
                    <input type="text" name="email" class="txt-box is_required" />
                    <input type="text" name="subject" class="txt-box is_required" />                    
                    <label for="message">Message:</label>
                    <textarea name="message" class="txt-area is_required" rows="8"></textarea>                    
                    </div>
                    <p align="center"><input type="submit" value="" class="submit_btn" /></p>
                </form>
                </div>
            </div>
            <!--/Make Anquiry-->
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