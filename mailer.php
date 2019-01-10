<?php session_start();
if(isset($_POST['Submit'])) {

$youremail = 'wench_blitz@yahoo.com';

$fromsubject = 'www.wenchblitz.x10.mx';

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$mail = $_POST['mail'];

$subject = $_POST['subject']; 

$message = $_POST['message']; 

$to = $youremail; 

$mailsubject = 'Message received from'.$fromsubject.'Contact Page';
	
$body = $fromsubject.'
	
From: '.$fname.'
E-mail: '.$mail.'
Subject: '.$subject.'

Message:
'.$message.' 
	 
'; 
	
	echo "
	
	<!doctype html>
	<html>
	<head>
	<title>Mail</title>
	<style type='text/css'>
		<!--
			body { margin: 0px; padding: 0px; background:url(images/darkwood.jpg) repeat 0 0; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: normal;}
			a { text-decoration: none; color: #3434e8;}
			a:hover { text-decoration: underline; color: #FF0000;}
			.success { 
						background: none repeat scroll 0 0 #FFFFE0;
						border: 5px solid #E6DB55;
						border-radius: 3px 3px 3px 3px;
						top: 50%;
						left: 50%;
						margin-left: -180px;
						margin-top: -36px;
						padding: 15px;
						position: absolute;
						width: 360px;
					}
		//-->
	</style>
	</head>
	
	<body>

		<div class='success'>
			Thank you fo your feedback. I will contact you shortly if needed.<br>Go to <a href='javascript: history.go(-1)'>Previous Page</a>
		</div>
	
	</body>
	</html>
			
	"; 
	
	mail($to, $subject, $body);
	
 	} else { 
	
		echo "You must write a message. </br> Please go to <a href='index.html' target='_top'>Back</a>";
	 
	}
?> 