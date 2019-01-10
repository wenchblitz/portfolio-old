<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>
  
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<!--<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php //previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php //next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
					<!--<h1 class="entry-title"><?php //the_title(); ?></h1>
					<div class="entry-meta">
						<?php //twentyten_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
                    
  						<div class="single-heading">
                        	<div class="image-single">
	            				<?php the_post_thumbnail(); ?>
                                <div class="clear"></div>
                            </div><!--//image-single-->
                           
                            <div class="single-meta">
                                <div class="entry-meta">
                                    <?php //twentyten_posted_on(); ?>
                                    <?php _e('<strong>Posted on</strong> '); ?><?php the_date(); ?><?php _e(' <strong>in</strong> '); ?><?php the_category(', ') ?><?php _e(' <strong>by</strong> '); ?><?php the_author(); ?>
                                </div><!-- .entry-meta -->
                                
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                
                                	<!--CLEAR--><div class="clear"></div><!--CLEAR-->
                                    
                                <div class="single-sharethis">
                                    <div class="single-ratings"> 
                                        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                                    </div><!--//single-ratings-->
                                    
                                        <!--CLEAR--><div class="clear"></div><!--CLEAR-->                                                            
                                	<span class='st_facebook_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_twitter_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_email_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span>
                                </div><!--//single-sharethis-->

                            </div><!--//single-meta-->
                        <div class="clear"></div>
                        </div><!--//single-heading-->
                    	
                        	<!--CLEAR--><div class="clear"></div><!--CLEAR-->
                        
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                        <div class="clear"></div>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>


					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->

<?php endif; ?>

					<!--<div class="entry-utility">
						<?php //twentyten_posted_in(); ?>
						<?php //edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div>--><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php //previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php //next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->
				
              
				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>                 