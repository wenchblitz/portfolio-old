<div id="featured">
<?php query_posts('category_name=Featured&showposts=1'); ?>
 
<?php while (have_posts()) : the_post(); ?>
 
<div class="featured-post">
<span class="featured-ribbon">Featured Ribbon</span>
<!--BEGIN FEATURED POST-->
	<div class="entry-content">            
		<div class="image-comment">
			<?php the_post_thumbnail(array(211,159)); ?> 
				
				<div class="comment-tag">
					<img src="<?php bloginfo('template_url');?>/images/comment-cloud.png" class="left" alt="" />         
					<span class="comments-link">
						<?php if ('open' == $post->comment_status) : ?>
						
						<!--If comments are open, but there are no comments.-->
							<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?>
						
						<?php else : // comments are closed ?>                        
						<!--If comments are closed.-->
						<a class="comments-closed" href="<?php the_permalink() ?>">Comments Closed!</a>
						<?php endif; ?>						
					</span>                     
				</div><!--//comment-tag-->
		</div><!--//image-comment-->
		
		<div class="post-details">
		    <div class="entry-meta">
			    <?php twentyten_posted_on(); ?> <!--in--> <?php //the_category(', ') ?>
		    </div><!--.entry-meta-->
			
		    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>         	
            <?php global $more; $more = 0; ?>
		    <?php the_content( __( 'Read More <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
		</div><!--//post-details-->                                            
	</div><!--.entry-content-->
<!--BEGIN FEATURED POST-->
</div><!--// .featured-post-->
 
<?php endwhile;?>

</div><!--// .featured-->