<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    	<div id="main">
        <!--START PUTTING CONTENT HERE-->
           	<div id="blogpost">
                <div id="post-0" class="post error404 not-found">
                    <h1 class="entry-title"><?php _e( 'Page Not Found! (404 Error)', 'twentyten' ); ?></h1>
                    <div class="entry-content">
                        <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
                    </div><!-- .entry-content -->
                </div><!-- #post-0 -->
    
                <script type="text/javascript">
                    // focus on search field after it has loaded
                    document.getElementById('s') && document.getElementById('s').focus();
                </script>           
 			</div><!--$blogpost-->	
      	<!--STOP PUTTING CONTENT HERE-->			
        </div><!--#main-->
        
<?php get_sidebar(); ?>         
<?php get_footer(); ?>