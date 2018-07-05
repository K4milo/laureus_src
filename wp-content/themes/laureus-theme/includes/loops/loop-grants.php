<div id="grantsLoopSection" class="container-fluid">
	<div class="row grants-loop">
		<div class="container">
			<div class="grant-loop-wrapper">
				<?php

				$counter = 1;

				$args = array(
					'post_type' => 'grants',
					'posts_per_page' => -1
				);

				$query = new WP_Query($args);

				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();
				?>
				<div class="grant-item item__<?php echo $counter; ?>">
					<div class="inner-wrapper">
						<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></figure>
						<h4><?php the_title();?></h4>
						<?php the_excerpt();?>
						<a href="<?php the_permalink();?>">View more</a>
					</div>
				</div>

				<?php 
					$counter++;
					endwhile; 
					endif; 
					wp_reset_query(); 
				?>
			</div>
		</div>
	</div>
</div>