<?php
	
	/* about history fields 

		- history_image
		- our_history_text
	*/

	//global vars
	$history_image = get_field('history_image');
	$our_history_text = get_field('our_history_text');
?>

<?php if($history_image || $our_history_text): ?>

<div id="aboutHistoryContent" class="container-fluid">
	<div class="about-history-content row">
		<div class="side-history image-wrapper">
			<figure style="background-image: url('<?php echo $history_image; ?>')"></figure>
		</div>
		<div class="side-history text">
			<?php echo $our_history_text; ?>
			<a href="/history">Read More</a>
		</div>
	</div>
</div>

<?php endif; ?>