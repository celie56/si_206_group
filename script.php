<?php
	$fp = fopen("userinput.txt", "a");
	fwrite($fp, $message);
	foreach($_POST as $k => $v){
		print "$k: $v<br>";
		fwrite($fp, "$k: $v, ");
		$message += "$k: $v,";
	}
	fwrite($fp, "END\n");
	fclose($fp);

	//registration email
	if (isset($_POST['emailme']) && $_POST['emailme'] == "yes"){
		$to = $_POST["email"];
		$subject =	'Thank you for registering';
		$headers =	'From: webmaster@example.com' . "\r\n" .
					'Reply-To: webmaster@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		print "Email sent";
	}
?>
