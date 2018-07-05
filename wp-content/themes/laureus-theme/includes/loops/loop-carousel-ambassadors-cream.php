<div id="ambassadorsSection" class="cream-wrapper-main">
	<div class="container beneficiaries-carousel cream-wrapper">
		<h3><span>Our</span>Ambassadors</h3>
		<div class="carosel-wrapper light-carousel cream-carousel">
			<?php

			$theID = $post->ID;

			$args = array(
				'post_type' => 'ambassadors',
				'posts_per_page' => -1,
				'post__not_in' => array($theID)
			);

			$query = new WP_Query($args);

			if($query->have_posts()): 
				while($query->have_posts()): $query->the_post();

			?>
			<div class="carousel-item ambassador-carousel__item">
				
				<div class="inner-wrapper">
					<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></figure>
					<h4><?php the_title();?></h4>
					<?php the_excerpt();?>
					<a href="<?php the_permalink();?>">View more</a>
				</div>
			</div>

			<?php 
				endwhile; 
				endif; 
				wp_reset_query(); 
			?>
		</div>	
	</div>
</div>