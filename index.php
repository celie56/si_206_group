<!DOCTYPE html>
<html lang="en">
	<?php
        // Just in case we want to change these easily
        $header     =   "header.php";
        $landing    =   "pages/home.html";
        $footer     =   "footer.php";
        $styles     =   "styles.html";      // all css files
        $scripts    =   "scripts.html";     // all javascript files
	?>
	<head>
		<title>Battle Royal</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
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

