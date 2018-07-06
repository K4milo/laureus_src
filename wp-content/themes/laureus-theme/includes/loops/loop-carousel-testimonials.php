<div id="TestimonialsSection" class="container-fluid">
	<div class="row testimonials-carousel">
		<div class="container">
			<div class="carosel-wrapper dark-carousel">
				<?php

				$args = array(
					'post_type' => 'testimonials',
					'posts_per_page' => -1
				);

				$query = new WP_Query($args);

				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();

				?>
				<div class="carousel-item testimonial-carousel__item">
					<div class="inner-wrapper">
						<div class="quote-content">
							<img src="<?php bloginfo('template_url')?>/img/icons/quote-left.png" class="quote-left" alt="Quotes">
							<i><?php the_content();?></i>
							<h3><?php the_title();?></h3>
							<h4><?php the_field('ambassador_charge');?></h4>
							<img src="<?php bloginfo('template_url')?>/img/icons/quote-right.png" class="quote-right" alt="Quotes">
						</div>
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
</div>