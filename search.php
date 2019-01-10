<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    	<div id="main">
        <!--START PUTTING CONTENT HERE-->
			<div id="blogpost">
                
				<?php if ( have_posts() ) : ?>
                
                	<h1 class="page-title info-holder"><?php /* Search Count */ 
				printf( __( '<strong>Search Results for: </strong>')); $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('article(s)'); wp_reset_query(); ?><?php //printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    
				<?php
                /* Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called loop-search.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'search' );
                ?>
                                
                <?php else : ?>
                
                    <div id="post-0" class="post no-results not-found">
                        <h2 class="entry-title"><?php _e( 'Nothing Found!', 'twentyten' ); ?></h2>
                        <div class="entry-content">
                            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
                        </div><!-- .entry-content -->
                    </div><!-- #post-0 -->
            
                <?php endif; ?>
                
			</div><!--#blogpost-->
      	<!--STOP PUTTING CONTENT HERE-->			
        </div><!--#main--> 
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
