<form name="contact_form" method="post" action="<?php bloginfo('template_url');?>/mailer.php" onSubmit="return evalid()" id="the-contactform">
    <p><input name="fname" type="text" size="30" title="Name" class="txtbox" /></p>
    <p><input type="text" name="mail" size="30" title="Email" class="txtbox" /></p>
    <p><input type="text" name="subject" size="30" title="Subject" class="txtbox" /></p>
    <p><textarea name="message" onKeyUp="return limitarelungime(this, 255)" class="txtarea" title="Message..."></textarea></p>
    <p><input type="submit" name="Submit" value="Submit" class="submit"></p><span class="right">All Fields Required!</span>
</form>