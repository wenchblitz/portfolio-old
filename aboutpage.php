<?php

/* Template Name: aboutpage
 */

get_header(); ?>
		
        <div id="main">
        <!--START PUTTING CONTENT HERE-->
        
        <div class="aboutpage">
        
        
                     <div class="page-top-border"></div>
                    	<!--clear--><div class="clear"></div><!--clear-->  
					<div class="entry-content">
                    	<div class="page-content">                           
                       	<!----><!----><!----><!---->
                       
                       
                       
                            <div class="aboutme">
                                <div class="myavatar">
	                                <span class="myphoto left">My Photo</span>
								</div><!--.myavatar-->                                    
                                
                                <div class="myinfo">
                                    <h1>Hello There!</h1>
                                    <p>&nbsp;&nbsp;&nbsp;I'm Jhonson V. Trazona a front-end developer &amp; web/graphic designer based at Cebu, Philippines. Owner/Designer of <a href="<?php bloginfo('url'); ?>">wenchblitx.x10.mx</a> my portfolio site.</p>                                    
                                    
                                    <h1>Skills</h1>                
                                        <ul>
                                            <li>Adobe Photoshop</li>
                                            <li>Adobe Dreamweaver</li>
                                            <li>XHTML/CSS &amp; HTML5/CCS3</li>
                                            <li>Wordpress</li>
                                        </ul>
                                
                                    <h1>What Can I Do?</h1>                
                                        <ul>
                                            <li>Web Design</li>
                                            <li>Blog Design</li>
                                            <li>PSD to XHTML/CSS Conversion</li>
                                            <li>Static HTML Site to Wordpress</li>
                                        </ul>
								</div><!--.myinfo-->                                        
                                                           
                        	</div><!--.aboutme-->
                        <!----><!----><!----><!---->   
						</div><!--.page-content-->
					</div><!-- .entry-content -->
                    	<!--clear--><div class="clear"></div><!--clear-->
                    <div class="page-bottom-border"></div>
                            
        	</div><!--.aboutpage-->
        		<div class="clear"></div><!--.clear-->
        	<div class="homepage">
            
                <h1 class="info-holder">Featured Projects</h1>        
                <ul class="gallery-view">
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/silenthunters/sh-thumbnail-view.jpg" alt="silenthunters" title="silenthunters" /></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/wenchblitz-theme/wenchblitz-theme-thumbnail-view.jpg" alt="wenchblitz" title="wenchblitz" /></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/PVZ-Theme/pvz-thumbnail-view.jpg" alt="Plants Vs. Zombies" title="Plants Vs. Zombies" /></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/Maple-Theme/maple-thumbnail-view.jpg" alt="Maple Theme" title="Maple Theme" /></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/"><img src="<?php bloginfo('template_url');?>/images/Grungee-Theme/grungee-thumbnail-view.jpg" alt="Grungee Theme" title="Grungee Theme" /></a></li>
                </ul>         
                    
            </div><!--homepage-->
        		<div class="clear"></div><!--.clear-->
			<div class="currently-working">
            	<h1 class="info-holder">Ongoing Projects</h1>
                <p>No ongoing projects.</p>
            </div><!--.currently-working-->

		<!--STOP PUTTING CONTENT HERE-->
        <!--.crumps--><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?><!--//.crumps-->
        </div><!--#main-->
              
<?php get_sidebar(); ?>         
<?php get_footer(); ?>        