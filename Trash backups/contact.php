<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/contact.css" type="text/css" />
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

<script src="jquery-1.7.1.js" type="text/javascript"></script>
<script src="jquery.inputhints.js" type="text/javascript"></script>
<script src="jquery.inputhints.min.js" type="text/javascript"></script>

<script type="text/javascript">
 //textbox description
$(document).ready(function(){
	$('input[title]').inputHints();
	$('textarea[title]').inputHints();
});
 </script>

</head>

<body>
<form name="contact_form" method="post" action="mailer.php" onSubmit="return evalid()" id="the-contactform">
    <p><input name="fname" type="text" size="30" title="Name" class="txtbox" /></p>
    <p><input type="text" name="mail" size="30" title="Email" class="txtbox" /></p>
    <p><textarea name="message" onkeyup="return limitarelungime(this, 255)" class="txtarea" title="Message..."></textarea></p>
    <p><input type="submit" name="Submit" value="Submit" class="submit"></p><span class="right">All Fields Required!</span>
</form>
</body>
</html>

