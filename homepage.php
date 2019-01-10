<?php

/* Template Name: homepage
 */

get_header(); ?>
		
    <div id="main">
    <!--START PUTTING CONTENT HERE-->
        
	<?php include( TEMPLATEPATH . '/featured.php' ); ?>
    
    <div class="homepage">
    
        <h1 class="info-holder">Featured Works</h1>        
        <ul class="gallery-view">
            <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/silenthunters/sh-thumbnail-view.jpg" alt="silenthunters" title="silenthunters" /></a></li>
            <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/wenchblitz-theme/wenchblitz-theme-thumbnail-view.jpg" alt="wenchblitz" title="wenchblitz" /></a></li>
            <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/PVZ-Theme/pvz-thumbnail-view.jpg" alt="Plants Vs. Zombies" title="Plants Vs. Zombies" /></a></li>
            <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/Maple-Theme/maple-thumbnail-view.jpg" alt="Maple Theme" title="Maple Theme" /></a></li>
            <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/Grungee-Theme/grungee-thumbnail-view.jpg" alt="Grungee Theme" title="Grungee Theme" /></a></li>
        </ul>        
        <hr class="long" />         
            
    </div><!--homepage-->              	
        
    <!--STOP PUTTING CONTENT HERE-->
    </div><!--#main-->
              
<?php get_sidebar(); ?>         
<?php get_footer(); ?>        