<?php
$fp = fopen("userinput.txt", "a");
fwrite($fp, $message);
foreach($_GET as $k => $v){
	print "$k: $v<br>";
	fwrite($fp, "$k: $v, ");
	$message += "$k: $v,";
}
fwrite($fp, "END\n");
fclose($fp);

//registration email
  $message="";
  foreach($_POST as $n => $val) {
	
   $message .="$n : $val\n";
	
  }

	$to = $_POST["email"];

	$subject = 'Thank you for registering';
	$headers = 'From: webmaster@example.com' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	echo "Email sent";
?>