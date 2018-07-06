<div id="newsTabsSection" class="container-fluid">
	<div class="row news-tabs">
		<div class="container">

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#news">Latest News</a></li>
				<li><a data-toggle="tab" href="#blog">Latest Posts</a></li>
			</ul>

			<div class="tab-content">
				<div id="news" class="tab-pane fade in active">
					<div class="news-wrapper">
						<?php

						$counter = 1;

						$args = array(
							'post_type' => 'news',
							'posts_per_page' => 5
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
					</div>
				</div>
				<div id="blog" class="tab-pane fade">
					<div class="news-wrapper">
						<?php

						$counter = 1;

						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 5
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>