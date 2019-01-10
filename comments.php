<?php
 
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
    	<?php wp_list_comments('callback=mytheme_comment'); ?>
    </ol>
     
		<div class="clear"></div><!--.clear-->
        
    <!--COMMNENTS CLOSED-->
		<?php if ('open' == $post->comment_status) : ?>
    
        <!--If comments are open, but there are no comments.-->
        <?php else : // comments are closed ?>
    
        <!--If comments are closed.-->
        <div class="nocomments info-holder">Comments are closed.</div>
        <?php endif; ?>
    <!--//COMMNENTS CLOSED-->
    
    <div class="comment-navigation">
        <!--<div class="older"><?php //previous_comments_link() ?></div>
        <div class="newer"><?php //next_comments_link() ?></div>-->
        <?php paginate_comments_links(); ?> 
    </div>    
    	
        <div class="clear"></div><!--.clear-->
        
<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
 
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
 
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link('Cancel Reply'); ?></small>
</div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( $user_ID ) : ?>
     
                <p class="admin-panel">
                    Logged in as: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account" class="right logout-link">[Logout]</a>
                </p><!--.admin-panel-->
     
    <?php else : ?>
     
    <input type="text" name="author" id="author" class="txtname" title="Name (Required)" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
    <input type="text" name="email" id="email" class="txtemail" title="Email (Required)" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2"/>
    <input type="text" name="url" id="url" class="txtwebsite" title="Website" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
     
    <?php endif; ?>
     
    <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
     
    <textarea name="comment" id="comment" class="textarea-comment" title="Message..." rows="10" tabindex="4"></textarea>
    <input name="submit" type="submit" id="submit" class="submit-comment" tabindex="5" value="Submit Comment" />
    <div class="gravatar"><a href="http://en.gravatar.com/" target="_new" class="en-gravatar">Gravatar</a></div><!--.gravatar-->
    
    <?php comment_id_fields(); ?><?php do_action('comment_form', $post->ID); ?>
 
</form>
 
<?php endif; // If registration required and not logged in ?>
</div>
 
<?php endif; // if you delete this the sky will fall on your head ?>