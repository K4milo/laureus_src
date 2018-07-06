<div id="TestimonialsSection" class="container-fluid">
	<div class="row testimonials-carousel">
		<h3><span>Testimonials from youth,</span>Coaches and Stakeholders</h3>
		<div class="containerr">
			<div class="carosel-wrapper dark-carousel">
				<?php

				$args = array(
					'post_type' => 'testimonials',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order'   => 'ASC'
				);

				$query = new WP_Query($args);

				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();

				?>
				<div class="carousel-item testimonial-carousel__item">
					<div class="inner-wrapper">
						<div class="quote-content">
							<i><?php the_content();?></i>
							<h3><?php the_title();?></h3>
							<h4><?php the_field('ambassador_charge');?></h4>
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