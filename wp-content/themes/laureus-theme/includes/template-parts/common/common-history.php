<?php
	
	// Block History content
	$parallax_img = get_field('parallax_background');
	$parallax_content = get_field('parallax_content');
	$additional_text = get_field('additional_text');
?>

<?php if($parallax_img || $parallax_content):  ?>

<div id="parallaxBlock">
	<div class="parallax-wrapper" style="background: url('<?php echo $parallax_img; ?>')">
		<div class="container">
			<?php echo $parallax_content; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if($additional_text):  ?>

<div id="additionalBlock">
	<div class="additional-wrapper">
		<div class="content-default">
			<div class="container">
				<?php echo $additional_text; ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>