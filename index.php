<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Battle Royal</title>
		<meta charset="utf-8"> <!-- yup, we got charmander -->
		<meta name="viewport" content="width=device-width,initial-scale=1">		<!-- Got that viewport all right -->
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>		<!-- JQuery Hosted Externally -->
		<link href="bootstrap.min.css" rel="stylesheet">		<!-- Bootstrappin Hosted Externally -->
		<link id="theme" rel="stylesheet" href="">		<!-- Theme to be changed -->
	</head>
	<?php
        // Just in case we want to change these easily
        $header = "header.php";
        $landing = "home.html";
        $footer = "footer.php";
	?>
	<body>
		<?php include "$header"; ?>
		<div id="content" class="">
			<!-- Let's load this with php and update it with js -->
			<?php include "$landing"; ?>
		</div>
		<?php include "$footer"; ?>
		<script type="text/javascript" src="login.js"></script>		<!-- Our Javascript, yet to be set -->
	</body>
</html>

