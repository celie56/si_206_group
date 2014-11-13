<?php
	
	$fp = fopen("userinput.txt", "a");
	$message="";
	fwrite($fp, $message);
	foreach($_POST as $k => $v){
		if($k == "interests")
		{
			print "$k:";
			foreach($_POST['interests'] as $i)
			{
				$i = implode(', ', $_POST['interests']);
			}
			print(" $i <br>");
			fwrite($fp, "$k: $i ");
			$message+= "$k: $i ";
		}
		else
		{
			print "$k: $v<br>";
			fwrite($fp, "$k: $v ");
			$message += "$k: $v ";
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
