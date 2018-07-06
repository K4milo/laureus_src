<div id="ambassadorsSection" class="cream-wrapper-main">
	<div class="container beneficiaries-carousel cream-wrapper">
		<h3><span>Our</span>Team</h3>
		<div class="carosel-wrapper light-carousel cream-carousel">
			<?php

			$theID = $post->ID;

			$args = array(
				'post_type' => 'team',
				'posts_per_page' => -1,
				'post__not_in' => array($theID),
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