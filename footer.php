  
<div class="row">
    <div class="col-lg-12 text-center">
        <?php
			$filename = basename($_SERVER['SCRIPT_NAME']);
			echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
			?>
			<br>
			<a href="https://www.facebook.com/SmashBrosEN?brand_redir=1"><img class="footer_img" src="img/facebook.png" alt="facebook icon"/></a>
    </div>
</div>
<!-- /.row -->
        

        