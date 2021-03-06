<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
 
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?></h3>
 
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=advanced_comment'); //this is the important part that ensures we call our custom comment layout defined above ?>
	</ol>
    
	<div class="clear"></div>
    
	<div class="comment-navigation">
		<div class="older"><?php previous_comments_link() ?></div>
		<div class="newer"><?php next_comments_link() ?></div>
	</div>
    
    <div class="clear"></div>
    
 <?php else : // this is displayed if there are no comments so far ?>
 
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
 
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
 
	<?php endif; ?>
<?php endif; ?>
 
 
<?php if ( comments_open() ) : ?>
 
<div id="respond">
<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to <span class="reply-to">%s</span>' ); ?></h3>
 
    <div class="cancel-comment-reply">
        <small><?php cancel_comment_reply_link('Cancel'); ?></small>
    </div>
 
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    
<?php else : ?>

    <div class="comment-form">   
        <div class="letscomment">
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
             
            <?php if ( is_user_logged_in() ) : ?>
             
			<div class="admin-panel">
            	Logged in as: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account" class="right logout-link">[Logout]</a>
            </div><!--.admin-panel-->
             
            <?php else : //this is where we setup the comment input forums ?>
             
               <input type="text" name="author" id="author" class="txtname" title="Name (required)" value="<?php echo $comment_author; ?>"  tabindex="1" />        
               <input type="text" name="email" id="email" class="txtemail" title="Email (required)" value="<?php echo $comment_author_email; ?>" tabindex="2" />        
               <input type="text" name="url" id="url" class="txtwebsite" title="Website" value="<?php echo $comment_author_url; ?>" tabindex="3" />
             
            <?php endif; ?>
             
            <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
             
                <textarea name="comment" id="comment" class="textarea-comment" title="Message..."  tabindex="4"></textarea>
                <input name="submit" class="submit-comment" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /><div class="gravatar"><a href="http://en.gravatar.com/" target="_new" class="en-gravatar">Gravatar</a></div><!--.gravatar-->
    
            <?php do_action('comment_form', $post->ID); ?>
            </form>
        </div><!--//letscomment-->
    <div class="clear"></div>
    </div><!--//comment-form-->
 
<?php endif; // If registration required and not logged in ?>
</div>
 
<?php endif; // if you delete this the sky will fall on your head ?>