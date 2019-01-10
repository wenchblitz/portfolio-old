<?php

/* Template Name: silenthunters
 */

get_header(); ?>
		
        <div id="main">
        <!--START PUTTING CONTENT HERE-->
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php if ( is_front_page() ) { ?>
                                    <h2 class="entry-title"><?php the_title(); ?></h2>
                                <?php } else { ?>
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                <?php } ?>
                                
                                <div class="page-top-border"></div>
                                    <!--clear--><div class="clear"></div><!--clear-->  
                                <div class="entry-content">
                                    <div class="page-content">
									<!--START PUTTING PAGE CONTENT HERE-->
                                        <ul id="sh-gallery">
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/silenthunters-preview.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/silenthunters-preview.jpg" alt="" title="Home Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Blog.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Blog.jpg" alt="" title="Blog Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-BlogSingle.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-BlogSingle.jpg" alt="" title="Blog Single Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Members.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Members.jpg" alt="" title="Members Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Pictures.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Pictures.jpg" alt="" title="Picture Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Guest.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Guest.jpg" alt="" title="Guest Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-History.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-History.jpg" alt="" title="About Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Extras.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Extras.jpg" alt="" title="Extras Page"></a></li>
                                            <li><a href="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Signatures.jpg"><img src="http://localhost/wordpress/wp-content/themes/wenchblitz/images/SH-Signatures.jpg" alt="" title="Forum Signature Page"></a></li>
                                            </ul>
                                            
                                        <hr/>
                                        
                                        <strong>CMS:</strong> Wordpress<br/>
                                        <strong>URL:</strong> <a href="http://ashram-silenthunters.x10.mx" target="_blank">http://ashram-silenthunters.x10.mx</a>
                                    <!--STOP PUTTING PAGE CONTENT HERE-->
                                    </div><!--.page-content-->
                                </div><!-- .entry-content -->
                                    <!--clear--><div class="clear"></div><!--clear-->
                                <div class="page-bottom-border"></div>
                            </article><!--#post-##-->
                                          
                            <?php //edit_post_link( __( '[Edit]', 'twentyten' ), '<div class="edit-link">', '</div>' ); ?>
            
            <?php endwhile; // end of the loop. ?>
      	<!--STOP PUTTING CONTENT HERE-->
        </div><!--#main-->
              
<?php get_sidebar(); ?>         
<?php get_footer(); ?>