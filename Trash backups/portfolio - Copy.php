<?php

/* Template Name: portfolio
 */

get_header(); ?>
		
        <div id="main">
        <!--START PUTTING CONTENT HERE-->
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( is_front_page() ) { ?>
                        <h1 class="entry-title info-holder"><?php the_title(); ?></h1>
                    <?php } else { ?>
                        <h2 class="entry-title info-holder"><?php the_title(); ?></h2>
                    <?php } ?>
                    
                    <!--##########################################-->                   
                    
                    <div class="page-top-border"></div>
                        <!--clear--><div class="clear"></div><!--clear-->  
                    <div class="entry-content">
                        <div class="page-content">
                        <!--START PUTTING CODE HERE--> 
                        	<h1 class="header-info clear">Personal Works</h1>                     
                            
                            <div id="personal-works">
                                <div class="project-container">
                            
                                    <div class="projects">
                                        <div id="project1" class="ic_container">
                                            <img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt=""/>
                                            <div class="overlay" style="display:none;"></div>
                                            <div class="ic_caption">
                                                <p class="ic_category">Web Design</p>
                                                <h3>¤ Silent Hunters ¤</h3>
                                                <p class="ic_text">
                                                    A Tantra Online Game Clan website from Philippines.
                                                    <a href="http://localhost/wordpress/portfolio/silenthunters" class="right">More info&nbsp;&raquo;</a>
                                                </p>
                                            </div>
                                        </div> 
                                    <div class="shadow">image shadow</div>                      
                                    </div><!--.projects-->
                                     
                                </div><!--project-container-->
                        	</div><!--#personal-works-->
                        <!--STOP PUTTING CODE HERE-->                            
                        </div><!--.page-content-->
                    </div><!-- .entry-content -->
                        <!--clear--><div class="clear"></div><!--clear-->
                    <div class="page-bottom-border"></div>
                    <!--##########################################-->
                    
                    <!--##########################################-->                           
                    <!--<h2 class="info-holder clear">Web Design</h2>-->

                    <!--<div class="page-top-border"></div>
                        <!--clear--><!--<div class="clear"></div><!--clear-->  
                    <!--<div class="entry-content">
                        <div class="page-content">
                        <!--START PUTTING CODE HERE-->                
                            <!--<div class="web-designs">
                            
                            </div><!--.web-designs-->
						<!--STOP PUTTING CODE HERE-->                            
                        <!--</div><!---->
                    <!--</div><!-- .entry-content -->
                        <!--clear--><!--<div class="clear"></div><!--clear-->
                    <!--<div class="page-bottom-border"></div>-->
                    <!--##########################################-->
                </article><!--#post-##-->
                            
            <?php endwhile; // end of the loop. ?>           
      	<!--STOP PUTTING CONTENT HERE-->
        </div><!--#main-->
              
<?php get_sidebar(); ?>         
<?php get_footer(); ?>