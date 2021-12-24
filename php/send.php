<?php if(!$_POST) exit;

	$to	= "gokul@iamdesigning.com";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];
	
	
	$subject 	= "Citrus : HTML Template - ( $subject )  You've been contacted by $name";
	
	$content 	= "$name sent you a message from your enquiry form:\r\n\n";
	$content   .= "Contact Reason: $msg \n\nEmail: $email \n\n";
	
	if(@mail($to, $subject, $content, "From: $email \r\n Reply-To: $email \r\nReturn-Path: $email\r\n")) {
		echo "<h5 class='success'>Message Sent</h5>";
        echo "<br/><p class='success'>Thank you <strong>$name</strong>, your message has been submitted and someone will contact you shortly.</p>";
	}else{
		echo "<h5 class='failure'>Sorry, Try again Later.</h5>";
	}?>