<?php
$to      = 'test@place.com';
$subject = 'the subject';
$message = 'hallo';
$headers = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
