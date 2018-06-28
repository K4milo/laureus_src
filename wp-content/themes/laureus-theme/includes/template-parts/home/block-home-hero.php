<?php
	
	/* hero block fields 

		- hero_content_field
		- link_hero_field
		- text_hero_field
	*/

	//global vars
	$hero_content = get_field('hero_content_field');
	$hero_url = get_field('link_hero_field');
	$hero_url_text = get_field('text_hero_field');

?>

<?php if($hero_content || $hero_url || $hero_url_text): ?>
<div id="heroComponent" class="container-fluid">
	<div class="row hero-home-block">
		<div class="hero-caption">	
			<?php if($hero_content): ?>
				<div class="hero-caption--text"><?php echo $hero_content; ?></div>
			<?php endif; ?>
			<?php if($hero_url): ?>
				<a href="<?php echo $hero_url; ?>" class="hero-caption--url green-cta"><?php echo $hero_url_text; ?></a>
			<?php endif; ?>
		</div>
		<a href="#" class="bottom-scroll">Scroll</a>
	</div>
</div>
<?php endif; ?>