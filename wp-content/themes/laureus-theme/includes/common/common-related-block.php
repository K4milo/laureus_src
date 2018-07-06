<?php
	// GLobal Posts Call
	$post_objects = get_field('related_pages');
?>

<?php if( $post_objects ): ?>

	<div id="heroTitle" class="container-fluid">
		<div class="row wrapper-related block">
			<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
			    <?php setup_postdata($post); ?>
			    <a href="<?php the_permalink(); ?>">
					<div class="item item__block">
					    <figure><img src="<?php the_field('section_icon'); ?>" alt="<?php the_title(); ?>"></figure>
					    <h3><?php the_title(); ?></h3>
					    <?php the_excerpt(); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>

    <?php wp_reset_postdata();?>
<?php endif;