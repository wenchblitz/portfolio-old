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

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
					<div class="single-top-border"></div>
                    	<!--clear--><div class="clear"></div><!--clear-->         
					<div class="entry-content">
						<div class="single-heading">
                        	<div class="image-single">
	            				<?php the_post_thumbnail(array(212,212)); ?>
                            </div><!--//image-single-->
                           
                            <div class="single-meta">                                
                                <div class="entry-meta">
									<?php twentyten_posted_on(); ?> in <?php the_category(', ') ?>
								</div><!-- .entry-meta -->
                                
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                
                                	<!--clear--><div class="clear"></div><!--clear-->
                                    
                                <div class="single-sharethis">
                                    <div class="single-ratings"> 
                                        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                                    </div><!--//single-ratings-->
                                    
                                    <!--clear--><div class="clear"></div><!--clear--> 
                                                                                                   
                                	<span class='st_facebook_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_twitter_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_email_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span>
                                </div><!--//single-sharethis-->

                            </div><!--//single-meta-->
                        </div><!--//single-heading-->
                    		
                            <!--clear--><div class="clear"></div><!--clear-->                           
                            
                        <div class="single-content">
                            <?php the_content(); ?><?php edit_post_link( __( '[Edit]', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!--.single-content-->
				
                            <!--clear--><div class="clear"></div><!--clear-->                                                   
                            
                        <div class="split-post-navigation">
                            <?php custom_wp_link_pages(); ?>
                        </div><!--.split-post-navigation-->
                        
                            <!--clear--><div class="clear"></div><!--clear-->                            
   					
                        
						<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
                            <div id="entry-author-info">
                                <div id="author-avatar">
                                    <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
                                </div><!-- #author-avatar -->
                                <div id="author-description">
                                    <h2><?php printf( __( 'Hi I&rsquo;m %s!', 'twentyten' ), get_the_author() ); ?></h2>
                                    <?php the_author_meta( 'description' ); ?>
                                    <div id="author-link">
                                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
                                            <?php printf( __( 'View all posts by %s <span class="meta-nav">&raquo;&raquo;</span>', 'twentyten' ), get_the_author() ); ?>
                                        </a>
                                    </div><!-- #author-link	-->
                                </div><!-- #author-description -->
                            </div><!-- #entry-author-info -->
						<?php endif; ?>
					</div><!-- .entry-content -->
                    	<!--clear--><div class="clear"></div><!--clear-->
                    <div class="single-bottom-border"></div>
				</article><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>