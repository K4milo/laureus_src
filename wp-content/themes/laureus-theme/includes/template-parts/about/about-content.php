<?php
	
	/* about content fields 

		- content
		- video_url
		- video_thumbnail
	*/

	//global vars
	$video_url = get_field('video_url');
	$video_thumbnail = get_field('video_thumbnail');
?>

<div id="aboutContent" class="container-fluid">
	<div class="about-content container">
		<div class="col-md-6 text-wrapper">
			<?php the_content(); ?>
		</div>
		<div class="col-md-6 video-thumb">
			<figure class="video">
				<a href="<?php echo $video_url;?>" data-fancybox>
					<img src="<?php echo $video_thumbnail; ?>" alt="image video Laureus">
				</a>
			</figure>
		</div>
	</div>
</div>