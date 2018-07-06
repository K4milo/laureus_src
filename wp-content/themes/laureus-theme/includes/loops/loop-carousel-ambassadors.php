<div id="ambassadorsSection" class="container-fluid">
	<div class="container beneficiaries-carousel">
		<h3><span>Our</span>Ambassadors</h3>
		<div class="carosel-wrapper light-carousel">
			<?php

			$args = array(
				'post_type' => 'ambassadors',
				'posts_per_page' => -1
			);

			$query = new WP_Query($args);

			if($query->have_posts()): 
				while($query->have_posts()): $query->the_post();

			?>
			<div class="carousel-item ambassador-carousel__item">
				<a href="<?php the_permalink();?>">
					<div class="inner-wrapper">
						<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></figure>
						<h4><?php the_title();?></h4>
						<?php the_excerpt();?>
						<a href="<?php the_permalink();?>" class="view-more">View more</a>
					</div>
				</a>
			</div>

			<?php 
				endwhile; 
				endif; 
				wp_reset_query(); 
			?>
		</div>	
	</div>
</div>