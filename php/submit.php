<!DOCTYPE html>
<html lang="en">
<?php
	// this script will run once the user has submitted data to our form
	$fp = fopen("userinput.txt", "a");		// file to write all data to
	$message = "Email confirmation:\n";		// This will be the message to email users
    $content = "";
    $character = "";
    $color = "";
    $background_color = "";
	foreach($_POST as $key => $value){
		if($key == "interests"){			// Parse interest list
			foreach($_POST['interests'] as $interest){
				$interest = implode(', ', $_POST['interests']);
			}
			$content .= "$key: $interest <br>";
			fwrite($fp, "$key: $interest; ");
			$message .= "$key: $interest\n";
		}
		else{								// Parse all other inputs
			$content .= "$key: $value<br>";
			fwrite($fp, "$key: $value; ");
			$message .= "$key: $value\n";
		}	
        if ($key == "character")
            $character = $value;
        if ($key == "color")
            $color = $value;
        if ($key == "background_color")
            $background_color = $value;
	}

    $image = $character . "_" . $color . ".png";

	fwrite($fp, "END\n");					// Add final message and close file
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
	// That's all folks
?>
	<head>
	</head>
    <body>
        <?php print $content; ?>
        <div>
			<img alt="User Avater" src="../pics/<?php print $image; ?>">
        </div>
    </body>
		<script type="text/javascript" src="../js/redirect.js"></script>
        
</html>
