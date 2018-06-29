<div id="patronsSection" class="container-fluid">
	<div class="row patrons-inline">
		<ul>
			<li>Global Patrons</li>	
			<?php

			$args = array(
				'post_type' => 'patrons',
				'posts_per_page' => -1
			);

			$query = new WP_Query($args);

			if($query->have_posts()): 
				while($query->have_posts()): $query->the_post();

			?>
				<li><?php the_post_thumbnail('full'); ?></li>			
			<?php 
				endwhile; 
				endif; 
				wp_reset_query(); 
			?>
		</ul>
	</div>
</div>