
   
<div class="row">
    <div class="col-lg-12">
        <?php
			$filename = basename($_SERVER['SCRIPT_NAME']);
			echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
			?>
    </div>
</div>
<!-- /.row -->
        