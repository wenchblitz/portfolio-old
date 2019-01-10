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
            <!--START PUTTING CODE HERE-->
            <div class="my-personal-works">
                
                <hr class="long" />
                
                <h1 class="header-info clear">My Personal Works</h1>
                
                <hr class="long" />         
                
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/silenthunters"><img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="¤ Silent Hunters ¤" /></a></li>
                    <li class="evenlist"><a href="<?php bloginfo('url'); ?>/portfolio/silenthunters"><img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="Beadline Accent" /></a></li>
                </ul>
                
                <hr class="long" />
                
                <h1 class="header-info clear">Mock Ups</h1>
                
                <hr class="long" />
                
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/silenthunters"><img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="¤ Silent Hunters ¤" /></a></li>
                    <li class="evenlist"><a href="<?php bloginfo('url'); ?>/portfolio/silenthunters"><img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="Beadline Accent" /></a></li>
                </ul>
                
                <hr class="long" />
                
                <h1 class="header-info clear">Print Design</h1>
                
                <hr class="long" />
                
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/portfolio/silenthunters"><img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="¤ Silent Hunters ¤" /></a></li>
                    <li class="evenlist"><a href="<?php bloginfo('url'); ?>/portfolio/silenthunters"><img src="<?php bloginfo('template_url');?>/images/project-SH.jpg" width="260" height="210" alt="" title="Beadline Accent" /></a></li>
                </ul>
                        
            	<hr class="long" />                                                
               
            </div><!--.my-personal-works-->
            <!--STOP PUTTING CODE HERE-->                    
        </article><!--#post-##-->
                    
    <?php endwhile; // end of the loop. ?>           
<!--STOP PUTTING CONTENT HERE-->
<!--.crumps--><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?><!--//.crumps-->
</div><!--#main-->
              
<?php get_sidebar(); ?>         
<?php get_footer(); ?>