<?php
	// Follow us block Vars
	$facebook = get_option("facebook_url");
	$twitter = get_option("twitter_url");
	$instagram = get_option("instagram_url");
	$youtube = get_option("youtube_url");
?>	

<div id="socialSection" class="container-fluid">
	<div class="row follow-block">
		<h3>Follow Us</h3>
		<ul>
			<?php if($facebook):?>
				<li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<?php endif;?>
			<?php if($twitter):?>
				<li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<?php endif;?>
			<?php if($instagram):?>
				<li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<?php endif;?>
			<?php if($youtube):?>
				<li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			<?php endif;?>
		</ul>
	</div>
</div>
