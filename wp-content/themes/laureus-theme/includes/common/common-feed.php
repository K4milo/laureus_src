<div id="feeds" class="container-fluid">
	<div class="feed-grid row">
		<div class="container">
			<div class="col-md-6">
				<div class="item-feed twitter">
					<header>
						<img src="<?php bloginfo('template_url')?>/img/icons/twitter.png" alt="Twitter icon">
						<h3>Twitter Feed</h3>
					</header>
					<div class="wrapper-feed">
						<a class="twitter-timeline" href="https://twitter.com/Laureus_USA?ref_src=twsrc%5Etfw">Tweets by Laureus_USA</a> 
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="item-feed events">
					<header>
						<h3>Events</h3>
					</header>
					<div class="wrapper-feed">
						<?php

						$counter = 1;

						$args = array(
							'post_type' => 'events',
							'posts_per_page' => -1
						);

						$query = new WP_Query($args);

						if($query->have_posts()): 
							while($query->have_posts()): $query->the_post();
						?>
						<div class="feed-item item__<?php echo $counter; ?>">
							<figure class="thumb">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title();?>">
								</a>
							</figure>
							<div class="content-wrapper">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
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