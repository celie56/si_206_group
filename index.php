<!DOCTYPE html>
<html lang="en">
	<?php
        // Just in case we want to change these easily
        $header = "header.php";
        $landing = "home.html";
        $footer = "footer.php";
        $styles = "styles.html";
        $scripts = "scripts.html";
	?>
	<head>
		<title>Battle Royal</title>
		<meta charset="utf-8"> <!-- yup, we got charmander -->
		<meta name="viewport" content="width=device-width,initial-scale=1">		<!-- Got that viewport all right -->
        <?php include "$styles"; ?>
	</head>
	<body>
		<?php include "$header"; ?>
		<div id="content" class="">
			<!-- Let's load this with php and update it with js -->
			<?php include "$landing"; ?>
		</div>
		<?php include "$footer"; ?>
		<?php include "$scripts"; ?>
	</body>
</html>

