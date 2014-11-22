<?php
	$file = basename($_SERVER['SCRIPT_NAME'], ".php");
	$class = "active";
?>
<nav>
	<ul>
		<li><a class="<?php if ($file == "index"){ echo "class";} ?>" href="index.php">Home</a></li>
		<li><a class="<?php if ($file == "about"){ echo "class";} ?>" href="about.php">About</a></li>
		<li><a class="<?php if ($file == "extra"){ echo "class";} ?>" href="extra.php">Extra</a></li>
	</ul>
</nav>
