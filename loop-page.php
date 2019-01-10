<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h1 class="entry-title info-holder"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h2 class="entry-title info-holder"><?php the_title(); ?></h2>
					<?php } ?>
					
                    <div class="page-top-border"></div>
                    	<!--clear--><div class="clear"></div><!--clear-->  
					<div class="entry-content">
                    	<div class="page-content">                           
                            <?php the_content(); ?>
						</div><!---->
					</div><!-- .entry-content -->
                    	<!--clear--><div class="clear"></div><!--clear-->
                    <div class="page-bottom-border"><?php edit_post_link( __( '[Edit]', 'twentyten' ), '<div class="edit-link">', '</div>' ); ?></div>
				</article><!--#post-##-->
                
                                
                 <div class="page-comment">
                 	<?php comments_template( '', true ); ?>
                 </div>
                              
				<?php //comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>