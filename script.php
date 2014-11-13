<?php
	
	$fp = fopen("userinput.txt", "a");
	$message="";
	fwrite($fp, $message);
	foreach($_POST as $key => $value){
		if($key == "interests")
		{
			print "$key:";
			foreach($_POST['interests'] as $interest)
			{
				$interest = implode(', ', $_POST['interests']);
			}
			print(" $interest <br>");
			fwrite($fp, "$key: $interest ");
			$message+= "$key: $interest ";
		}
		else
		{
			print "$key: $value<br>";
			fwrite($fp, "$key: $value ");
			$message += "$key: $value ";
		}	
			
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
