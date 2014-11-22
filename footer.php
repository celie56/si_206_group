
<footer>
	<div>
		Such footer 	
	</div>
	<?php
		$filename = basename($_SERVER['SCRIPT_NAME']);
		echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
	?>
</footer>
