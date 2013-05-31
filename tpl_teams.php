<?php

/* 
Template Name: Teams Page
*/

?>

<?php get_header(); ?>

<div id="content">
    	
        <div class="c1">        	
        	<h2><?php the_title(); ?></h2>
                        
            <div class="our-people">
                
                <div class="profile">
                <div class="photo"><img src="<?php bloginfo('template_url'); ?>/images/no-team-image.gif" /></div>
                <span class="name">Bernadette Bolo-Duthy</span>
                <span class="position">Country Director</span>
                <span class="email"><a href="mailto:bbolo@habitatcambodia.org">bbolo@habitatcambodia.org</a></span>
                </div>
                
                <div class="one_half">
                <div class="profile">
                <div class="photo"><img src="<?php bloginfo('template_url'); ?>/images/no-team-image.gif" /></div>
                <span class="name">John Zaidi</span>
                <span class="position">Admin/Finance Director</span>
                <span class="email"><a href="mailto:jzaidi@habitat.org">jzaidi@habitat.org</a></span>
                </div>
                </div>
                
                <div class="one_half last">
                <div class="profile">
                <div class="photo"><img src="<?php bloginfo('template_url'); ?>/images/no-team-image.gif" /></div>
                <span class="name">Iv Bonnakar</span>
                <span class="position">Southeast Program Coordinator</span>
                <span class="email"><a href="mailto:iv_bonnakar@habitatcambodia.org">iv_bonnakar@habitatcambodia.org</a></span>
                </div>
                </div>
                
                <div class="profile">
                <div class="profile">
                <div class="photo"><img src="<?php bloginfo('template_url'); ?>/images/no-team-image.gif" /></div>
                <span class="name">Bells Regino-Borja</span>
                <span class="position">RD and Communications Manager</span>
                <span class="email"><a href="mailto:bells_borja@habitatcambodia.org">bells_borja@habitatcambodia.org</a></span>
                </div>
                </div>

            </div>
            
        </div>
        <!--/c1-->
        
        <?php get_sidebar(); ?>
        
    </div>
    <!--/content-->

<?php get_footer(); ?>