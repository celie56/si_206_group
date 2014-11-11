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
?>
