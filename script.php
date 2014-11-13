<?php
	
	$fp = fopen("userinput.txt", "a");
	$message = "Email confirmation:\n";
	foreach($_POST as $key => $value){
		if($key == "interests")
		{
			foreach($_POST['interests'] as $interest)
			{
				$interest = implode(', ', $_POST['interests']);
			}
			print("$key: $interest <br>");
			fwrite($fp, "$key: $interest; ");
			$message .= "$key: $interest\n";
		}
		else
		{
			print "$key: $value<br>";
			fwrite($fp, "$key: $value; ");
			$message .= "$key: $value\n";
		}	
			
	}

	fwrite($fp, "END\n");
	fclose($fp);

	//registration email
	if (isset($_POST['emailme']) && $_POST['emailme'] == "yes"){
		$to = $_POST["email"];
		$subject =	'Thank you for registering with si 206';
		$headers =	'From: si_206@example.com' . "\r\n" .
					'Reply-To: si_206@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		print "Email sent";
	}

?>
