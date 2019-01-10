<?php // Do not delete these lines

if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password)) { // if there's a password

	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie

?>

<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>
<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!--You can start editing here.-->

<?php if ($comments) : ?>

	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Comments' );?></h3><!-- to &#8220;<?php //the_title(); ?>&#8221;-->

<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>

    <!--author comments-->
    <?php if (1==$comment->user_id) { ?>
    <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
        <div class="authorcomment">
            <div class="the-avatar">
                <?php echo get_avatar( $comment, 90 ); ?>                
            </div><!--//the-avatar-->
        
            <div class="the-comment">
                <div class="commentmetadata">        
                    <strong><?php comment_author_link() ?></strong>&nbsp;<?php _e('says: '); ?><?php edit_comment_link('[Edit]','',''); ?>               
                </div><!--//commentmetadata--> 
            <?php comment_text() ?>            
            </div><!--//the-comment-->
        </div><!--//authorcomment-->
    <div class="timestamp right"><a href="#comment-<?php comment_ID() ?>" title=""><time><?php comment_date('l - F j, Y') ?><?php _e(' at '); ?><?php comment_time('h:i A') ?></time></a></div>
    </li>
    <?php } else { ?>
    <!--author comments-->

	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
        <div class="commentbox">
            <div class="the-avatar">
                <?php echo get_avatar( $comment, 90 ); ?>
            </div><!--//the-avatar-->
        
            <div class="the-comment">
                <div class="commentmetadata">        
                	<strong><?php comment_author_link() ?></strong>&nbsp;<?php _e('says: '); ?><?php edit_comment_link('[Edit]','',''); ?>               
                        <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('<span class="moderation">Your comment is awaiting moderation.</span>'); ?></em>
                        <?php endif; ?>
                </div><!--//commentmetadata--> 
            <?php comment_text() ?>            
            </div><!--//the-comment-->         
        </div><!--//commentbox-->
	<div class="timestamp right"><a href="#comment-<?php comment_ID() ?>" title=""><time><?php comment_date('l - F j, Y') ?><?php _e(' at '); ?><?php comment_time('h:i A') ?></time></a></div>        
	</li>
    
    <?php } ?>
    
<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt'; ?>


<?php endforeach; /* end for each comment */ ?>
	</ol>
    
    <!--Comments Closed-->
		<?php if ('open' == $post->comment_status) : ?>
    
        <!--If comments are open, but there are no comments.-->
        <?php else : // comments are closed ?>
    
        <!--If comments are closed.-->
        <div class="nocomments info-holder">Comments are closed.</div>
        <?php endif; ?>
    <!--Comments closed-->
    
    <div class="clear"></div>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>

	<!--If comments are open, but there are no comments.-->
	<?php else : // comments are closed ?>

	<!--If comments are closed.-->
	<div class="nocomments info-holder">Comments are closed.</div>
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<h3 id="respond">Leave a Reply</h3>
    
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
    
    	<div class="login-to-comment">
        	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
        </div>
    
    <?php else : ?>

<div class="comment-form">   
    <div class="letscomment">
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( $user_ID ) : ?>
        
			<div class="admin-panel">
            	Logged in as: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account" class="right logout-link">[Logout]</a>
            </div><!--.admin-panel-->
        
        <?php else : ?>
        
        	<!--<p><small><strong>XHTML:</strong> <?php //_e('You can use these tags&#58;'); ?> <?php //echo allowed_tags(); ?></small></p>-->
        
           <input type="text" name="author" id="author" class="txtname" title="Name (required)" value="<?php echo $comment_author; ?>"  tabindex="1" />        
           <input type="text" name="email" id="email" class="txtemail" title="Email (required)" value="<?php echo $comment_author_email; ?>" tabindex="2" />        
           <input type="text" name="url" id="url" class="txtwebsite" title="Website" value="<?php echo $comment_author_url; ?>" tabindex="3" />
        
        <?php endif; ?>     
        
            <textarea name="comment" id="comment" class="textarea-comment" title="Message..."  tabindex="4"></textarea>
            <input name="submit" class="submit-comment" type="submit" id="submit" tabindex="5" value="Submit Comment" />
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /><div class="gravatar"><a href="http://en.gravatar.com/" target="_new" class="en-gravatar">Gravatar</a></div><!--.gravatar-->

        <?php do_action('comment_form', $post->ID); ?>
        </form>
	</div><!--//letscomment-->

<div class="clear"></div>
</div><!--//comment-form-->

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>