<div id="teamSection" class="container-fluid">
	<div class="row team-list">
		<div class="container">
			<h3><span>Our</span>Team</h3>
			<div class="team-wrapper">
				<?php

				$counter = 1;

				$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1,
					'tax_query' => array(
				        array (
				            'taxonomy' => 'member_type',
				            'field' => 'slug',
				            'terms' => 'staff',
				        )
				    )
				);

				$query = new WP_Query($args);

				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();
				?>
				<div class="team-item item__<?php echo $counter; ?>" data-display="<?php echo $counter; ?>">
					<figure class="thumb">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title();?>">
						</a>
					</figure>
					<div class="content-wrapper">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
					</div>
				</div>

				<?php 
					$counter++;
					endwhile; 
					endif; 
					wp_reset_query(); 
				?>
			</div>
			<div class="read_more">
				<a href="#">See all the staff<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
			</div>

			<div class="bottom-ctas">
				<ul>
					<li class="btn-1"><a href="/about-us/out-team/">see all our staff</a></li>
					<li class="btn-2"><a href="/about-us/our-board-of-directors/">see all our board of directors</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>