<div id="newsSection" class="container-fluid">
	<div class="row news-grid">
		<div class="container">
			<h3><span>News and</span>Announcements</h3>
			<div class="news-wrapper">
				<?php

				$counter = 1;

				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 2
				);

				$query = new WP_Query($args);

				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();

				?>
				<div class="news-item item__<?php echo $counter; ?>">
					<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></figure>
					<div class="content-wrapper">
						<h4><?php the_title();?></h4>
						<?php the_excerpt();?>
						<a href="<?php the_permalink(); ?>">Read more</a>
					</div>
				</div>

				<?php 
					$counter++;
					endwhile; 
					endif; 
					wp_reset_query(); 
				?>

				<div class="news-item item__3 twitter_read">
					<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></figure>
					<div class="content-wrapper">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>