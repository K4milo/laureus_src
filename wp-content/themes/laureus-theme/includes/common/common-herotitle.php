<?php
	
	// Block for Hero banner title
	$hero_img = get_field('top_header_image');
?>

<?php if($hero_img):  ?>

	<div id="heroTitle" class="container-fluid">
		<div class="row hero-title-wrapper" style="background-image: url('<?php echo $hero_img; ?>')">
			<div class="container">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
			</div>
		</div>
	</div>

<?php else:  ?>
	<div id="heroTitle" class="container-fluid">
		<div class="row hero-title-wrapper default-image">
			<div class="container">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
			</div>
		</div>
	</div>

<?php endif; ?>