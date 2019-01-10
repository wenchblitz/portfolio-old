<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

<aside>
    <ul>      
        <li id="search">
            <div>
				<?php get_search_form(); ?>
            </div>                        
        </li>
                       
        <li id="login-me-in">
            <?php if (!(current_user_can('level_0'))){ ?>
            	
                <div>
                    <h2>Login</h2>
                    
                    <div>
                        <form action="<?php echo get_option('home'); ?>/wp-login.php" method="post" class="login-form">
                            <p><input type="text" class="login-txtbox" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" title="username" size="20" /></p>
                            <p><input type="password" class="login-txtbox" name="pwd" id="pwd" title="password" size="20" /></p>
                            <p><input type="submit" name="submit" value="Login" class="button login-btn" /></p>
                            <p class="center icenter"><label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" <?php checked( $rememberme ); ?>/>Remember Me</label>
                            <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />&nbsp;&frasl;&nbsp;&nbsp;<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">Forgot your password?</a></p>
                        </form>                        
                  	</div>
                 </div>
                
           <?php } else { ?>
           
           		<!--###########################################################################################-->           		
				<?php if ((is_404()) || (is_search())) { ?>           
                    <div>   
                        <h2>
                            <?php global $current_user;
                                  get_currentuserinfo();
                            
                                  echo 'Hello&nbsp;' . $current_user->user_login . '!'; 
                            ?>
                        </h2>
                    </div>    
                <?php } else { ?> 
           		<div>   
                    <h2>
						<?php global $current_user;
      						  get_currentuserinfo();
						
							  echo 'Hello&nbsp;' . $current_user->user_login . '!'; 
						?>
                    </h2> 
                    
                    <?php if (is_page()) : ?>
                    	<!--//DO NOTHING-->
                    <?php else : ?>
                    <div> 
                        <div class="user-avatar"><?php echo get_avatar( get_the_author_meta('user_email'), 51 ); ?></div>
                        <div class="user-description"><?php the_author_meta( 'description' ); ?></div>
                        <ul class="user-panel">
                        	<li><a href="<?php bloginfo('url')?>/wp-admin/">Admin</a></li>
                            <li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
                        </ul>
                    </div>                    
                    <?php endif ?>
                    
                </div>
                <?php } ?>                
                <!--###########################################################################################-->
                
          <?php }?>
        </li>       
             
        <li id="category">
            <div>
                <h2>Category</h2>
                    <ul>
                        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0&exclude=3'); ?>
                    </ul>
            </div>
        </li>
        
        <li id="archives">
            <div>
                <h2>Archives</h2>
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
            </div>
            <hr class="sidebar"/>            
        </li>
        
        <li id="articles">
            <div>
                <h2>Recent Articles</h2>
                <hr />
                    <div class="article-holder">
                        <ul>
                        <?php query_posts($query_string . 'showposts=4&cat=-3'); ?>
                        
                        <?php while (have_posts()) : the_post(); ?>
                        
                        	<li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(127,125)); ?></a></li>
                        
                        <?php endwhile;?>
                        </ul>
					</div><!--#article-holder-->                    
            </div>
            <hr />         
        </li>
        
        <li id="comments">
            <div>	
                <h2>Recent Comments</h2>                
                <hr />
                    <ul>
                    
                    <?php
                      $comments = get_comments('number=10&amp;amp;status=approve');                
                      $true_comment_count = 0;                
                      foreach($comments as $comment) :
                    ?>
                    
                    <?php $comment_type = get_comment_type(); ?>
                    <?php if($comment_type == 'comment') { ?>
                    
                    <?php $true_comment_count = $true_comment_count +1; ?>
                    
                    <?php $comm_title = get_the_title($comment->comment_post_ID);?>
                    <?php $comm_link = get_comment_link($comment->comment_ID);?>
                    <?php $comm_comm_temp = get_comment($comment->comment_ID,ARRAY_A);?>
                    <?php $comm_content = $comm_comm_temp['comment_content'];?>
                    
                    <li>
                    <?php echo get_avatar( $comment, '50' ); ?>
                    <span class="footer_comm_author"><?php echo ("<strong>".$comment->comment_author."</strong>")?>:</span>&nbsp;<a href="<?php echo($comm_link)?>" title="<?php echo $comm_title?>"><?php echo wp_html_excerpt( $comment->comment_content, 125 ); ?>...</a>
                    </li> 
                    
                    <?php } ?>
                    
                    <?php if($true_comment_count == 5) {break;} ?>
                    <?php endforeach;?>
                    
                    </ul> 
            </div>
            <hr />
        </li>
        
        <li id="chatango">
        	<div>
            	<h2>Chatango</h2>
                <hr />
					<object width="280" height="500" id="obj_1331312126728"><param name="movie" value="http://jhonsontrazona.chatango.com/group"/><param name="wmode" value="transparent"/><param name="AllowScriptAccess" VALUE="always"/><param name="AllowNetworking" VALUE="all"/><param name="AllowFullScreen" VALUE="true"/><param name="flashvars" value="cid=1331312126728&c=FFFFFF&d=27C2F3&f=10&g=FFFFFF&k=27C2F3&l=3C3C3C&m=EEEEEE&o=75&q=EEEEEE&w=0"/><embed id="emb_1331312126728" class="ichat" src="http://jhonsontrazona.chatango.com/group" width="280" height="500" wmode="transparent" allowScriptAccess="always" allowNetworking="all" type="application/x-shockwave-flash" allowFullScreen="true" flashvars="cid=1331312126728&c=FFFFFF&d=27C2F3&f=10&g=FFFFFF&k=27C2F3&l=3C3C3C&m=EEEEEE&o=75&q=EEEEEE&w=0"></embed></object>
            <hr class="last-hr" />
            </div>
        </li>
        
    <!--<li style="margin: 0 auto !important; padding: 0; overflow: auto; position: relative;">
            <ul>
                <?php //fb_list_authors(10, FALSE); ?>
            </ul>
            
            <ol>
                <?php //fb_list_authors(); ?>
            </ol>
            
            <ul>
                <?php //fb_list_authors(1, TRUE); ?>
            </ul>            
        </li>-->
    </ul>                      
</aside><!--aside-->