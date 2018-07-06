<div id="teamLoopSection" class="container-fluid">
	<div class="row team-loop">
		<div class="container">
			<div class="team-loop-wrapper">
				<?php

				$counter = 1;

				$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'tax_query' => array(
				        array (
				            'taxonomy' => 'member_type',
				            'field' => 'slug',
				            'terms' => 'director',
				        )
				    )
				);

				$query = new WP_Query($args);

				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();
				?>
				<div class="team-item item__<?php echo $counter; ?>">
					<figure class="thumb">
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()):?>
								<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title();?>">
							<?php else: ?>
								<img src="<?php bloginfo('template_url'); ?>/img/misc/profile-thumb.png" alt="<?php the_title();?>">
							<?php endif;?>
						</a>
					</figure>
					<div class="content-wrapper">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						<h4><?php the_field('ambassador_charge')?></h4>
						<?php the_content(); ?>
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