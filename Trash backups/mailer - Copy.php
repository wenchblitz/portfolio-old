<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'wench_blitz@yahoo.com';
$fromsubject = 'Portfolio Site';
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Message received from'.$fromsubject.'Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is:  '.$fname.'
	 E-mail: '.$mail.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='javascript: history.go(-1)'>Home Page</a>"; 
								mail($to, $subject, $body);
 } else { 
echo "You must write a message. </br> Please go to <a href='index.html' target='_top'>Back</a>"; 
}
?> 