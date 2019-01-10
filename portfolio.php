<?php

/* Template Name: portfolio
 */

get_header(); ?>
		
<div id="main">
<!--START PUTTING CONTENT HERE-->    

	<div class="portfoliopage">        
        <!--START PUTTING CODE HERE-->
        <div class="my-personal-works">
        
        <div class="personal">    
            <h1 class="info-holder">Personal Works</h1> 
            
					<div class="project-boxLeft">
                        <h2 class="header-title">Silent Hunters</h2>
                        <a href="<?php bloginfo('url'); ?>/portfolio/silenthunters/">
                            <img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="¤ Silent Hunters ¤" /></a>
                	</div><!--.project-boxLeft-->
					
                    <div class="project-boxRight">
                        <h2 class="header-title">wenchblitz</h2>
                        <a href="<?php bloginfo('url'); ?>/portfolio/wenchblitz-theme/">
                            <img src="<?php bloginfo('template_url');?>/images/project-WENCHBLITZ.jpg" width="260" height="210" alt="" title="http://wenchblitz.x10.mx" /></a>
		     		</div><!--.project-boxRight-->
        </div><!--.personal-->
        
			<div class="clear"></div>
            
        <div class="free-wordpress-themes">    
            <h1 class="info-holder">Free Wordpress Themes</h1> 
            
					<div class="project-boxLeft">
                        <h2 class="header-title">Plants Vs. Zombies</h2>
                        <a href="<?php bloginfo('url'); ?>/portfolio/pvz-theme/">
                            <img src="<?php bloginfo('template_url');?>/images/project-PVZ.jpg" width="260" height="210" alt="" title="Plants Vs. Zombies" /></a>
                	</div><!--.project-boxLeft-->
					
                    <div class="project-boxRight">
                        <h2 class="header-title">Maple</h2>
                        <a href="<?php bloginfo('url'); ?>/portfolio/maple-theme/">
                            <img src="<?php bloginfo('template_url');?>/images/project-MAPLE.jpg" width="260" height="210" alt="" title="Maple" /></a>
		     		</div><!--.project-boxRight-->
                    
					<div class="project-boxLeft">
                        <h2 class="header-title">Grungee</h2>
                        <a href="<?php bloginfo('url'); ?>/portfolio/grungee-theme/">
                            <img src="<?php bloginfo('template_url');?>/images/project-GRUNGEE.jpg" width="260" height="210" alt="" title="Grungee" /></a>
                	</div><!--.project-boxLeft-->                                    
        </div><!--.free-wordpress-themes-->            

			<div class="clear"></div>
                       
        </div><!--.my-personal-works-->
        <!--STOP PUTTING CODE HERE-->                    
	</div><!--.portfolio-->
      
<!--STOP PUTTING CONTENT HERE-->
<!--.crumps--><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?><!--//.crumps-->
</div><!--#main-->
              
<?php get_sidebar(); ?>         
<?php get_footer(); ?>