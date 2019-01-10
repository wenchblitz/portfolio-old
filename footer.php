<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	//get_sidebar( 'footer' );
?>

</div><!--#container-->

	<div class="clear"></div><!--.clear-->
  
<footer>
    <div id="footer-contents">
    <span class="paperclip">Paperclip</span>
    <span class="contact-tag">Contact Me</span>   	
        <div id="inner-footer">        
            <div id="who-is-this-guy">            	
                <div id="author-photo">                	
                    <a href="http://facebook.com./wenchblitz/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/wenchblitz.png" alt="Jhonson V. Trazona" /></a>
                    <h2><a href="javascript:void(0)">Back To Top</a></h2>
                </div><!--#footer-first-section-->
                
                <div id="author-info">
                    <h2>Hello there!</h2>
                    <p>I'm Jhonson V. Trazona a front-end developer / web designer. All my personal works and stuff goes here in this portfolio site. Knows XHTML/CSS, Photoshop, Dreamweaver and PSD to XHTML/CSS Conversion. <br/><br/>I love rock/alternative music and Plants Vs. Zombies is my favorite time pass game LOL!
                    </p>
                </div><!--#about-the-author-->      
            </div><!--#who-is-this-guy-->
            
            <div id="footer-recent-comments">
                <h2>Recent Comments</h2>
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
                    
                    <?php if($true_comment_count == 3) {break;} ?>
                    <?php endforeach;?>
                    
                    </ul>                                                   		
            </div><!--#footer-recent-comments-->
            
            <div id="footer-contact-me">
                <form name="contact_form" method="post" action="<?php bloginfo('template_url');?>/mailer.php" onSubmit="return evalid()" id="the-contactform">
                    <p><input name="fname" type="text" size="30" title="Name" class="txtbox" /></p>
                    <p><input type="text" name="mail" size="30" title="Email" class="txtbox" /></p>
                    <p><input type="text" name="subject" size="30" title="Subject" class="txtbox" /></p>
                    <p><textarea name="message" onKeyUp="return limitarelungime(this, 255)" class="txtarea" title="Message..."></textarea></p>
                    <p><input type="submit" name="Submit" value="Submit" class="submit"></p><span class="rightside">All Fields Required!</span>
                </form>                                            
            </div><!--#footer-contact-me-->
            
        </div><!--#inner-footer-->        	
            <div class="clear"></div><!--.clear-->            
        <div id="footer-info">
            <div class="allrightsreserved">All Rights Reserved&nbsp;&reg;&nbsp;2012</div>
            <div class="poweredby">Proudly Powered by: <a href="http://wordpress.org/" target="_top">Wordpress</a></div>
        </div><!--#footer-info--> 
          
    </div><!--#footer-contents-->
</footer><!--footer-->

<script type="text/javascript">
	//On Resume Next
	function stoperror(){
	return true
	}
	window.onerror=stoperror

	//bxSlider
	jQuery(document).ready(function(){
	  jQuery('#slider').bxSlider({
		mode:'fade',
		infiniteLoop: true,
		auto: true,
		speed: 850,
		autoHover: true,
		pager: true 
	  });
	});
	
	//BackToTop Script
	jQuery(document).ready(function(){
		jQuery('#author-photo h2 a').click(function(){
			jQuery('html, body').animate({scrollTop:0}, 'slow'); 
			return false; 
		}); 
	});
	
	//Div Height
	$(document).ready(function(){
		if ($("#main").height() > $("aside").height()){
				//Do Nothing!
			}	
					
		else{
			$("#main").height($("aside").height());}
	});
		
	//Textbox Description
	$(document).ready(function(){
		$('input[title]').inputHints();
		$('textarea[title]').inputHints();
	});
	
	//Hover Menu Effect
	$(function(){
		
		if ( ($.browser.msie) && ($.browser.version <= '8.0') ){
			//Do Nothing!
		} 
		
		else {

				   $('#menu ul li a').append('<span class="hover"></span>');
				   // span whose opacity will animate when mouse hovers.
		
				   $('#menu ul li a').hover(
					 function() {
					 $('.hover', this).stop().animate({
					'opacity': 1
					}, 700,'easeOutSine')
					},
					function() {
				   $('.hover', this).stop().animate({
					'opacity': 0
					}, 700, 'easeOutQuad')
				})
			}
	});

	//Hover Logo Effect
	$(function(){

		   $('#header h1 a').append('<span class="hover"></span>');
           // span whose opacity will animate when mouse hovers.

		   $('#header h1 a').hover(
             function() {
	         $('.hover', this).stop().animate({
			'opacity': 1
			}, 700,'easeOutSine')
        	},
            function() {
	       $('.hover', this).stop().animate({
			'opacity': 0
			}, 700, 'easeOutQuad')

		})
	});
	
	//IMAGE JQUERY
</script>

<script type="text/javascript">
//email form validation

function everif(str) {

		var at="@"
		var punct="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var lpunct=str.indexOf(punct)
		if (str.indexOf(at)==-1){
		   alert("Valid email must be entered")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Valid email must be entered")
		   return false
		}

		if (str.indexOf(punct)==-1 || str.indexOf(punct)==0 || str.indexOf(punct)==lstr){
		    alert("Valid email must be entered")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Valid email must be entered")
		    return false
		 }

		 if (str.substring(lat-1,lat)==punct || str.substring(lat+1,lat+2)==punct){
		    alert("Valid email must be entered")
		    return false
		 }

		 if (str.indexOf(punct,(lat+2))==-1){
		    alert("Valid email must be entered")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Valid email must be entered")
		    return false
		 }

 		 return true					
	}

function evalid(){
	var emailID=document.contact_form.mail
	
	if (everif(emailID.value)==false){
		emailID.focus()
		return false
	}
	
//empty field validation
	
	var fname=document.contact_form.fname
	if ((fname.value==null)||(fname.value=="")){
        alert("Fields marqued with * must be entered")
        fname.focus()
        return false
        }
 
	var message=document.contact_form.message	
	if ((message.value==null)||(message.value=="")){
        alert("Fields marqued with * must be entered")
        message.focus()
        return false
        }
			
	return true
 }
</script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>

</body>
</html>