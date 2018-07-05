<div class="team-single container">
	<div class="team-item item__<?php echo $counter; ?>">
		<figure class="thumb">
			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title();?>">
		</figure>
		<div class="content-wrapper">
			<h3><?php the_title();?></h3>
			<h4><?php the_field('ambassador_charge')?></h4>
			<?php the_content(); ?>
		</div>
	</div>
</div>