<?php
	
	/* story block fields 

		- story_video_thumbnail
		- story_video_url
		- story_text_content
		- story_related_links
			- story_related_link_url
			- story_related_link_url_text
	*/

	//global vars

	$video_thumbnail = get_field('story_video_thumbnail');
	$video_url = get_field('story_video_url');
	$text_content = get_field('story_text_content');
	$related_links = get_field('story_related_links');

?>

<?php if($video_thumbnail || $video_url || $text_content || $related_links): ?>
<div id="storyComponent" class="container-fluid">
	<div class="row story-home-block">
		
		<?php if($video_thumbnail): ?>
			<div class="side-story video-wrapper" style="background-image: url('<?php echo $video_thumbnail; ?>')">
				<a href="<?php echo $video_url; ?>" data-fancybox class="play-icon"></a>
			</div>
		<?php endif; ?>

		<?php if($text_content): ?>
			<div class="side-story text-wrapper">
				<div class="text-content">
					<?php echo $text_content; ?>
					
					<?php if($related_links): ?>
						<div class="bottom-links">
							<ul>
							<?php while(have_rows('story_related_links')): the_row(); 
									$related_link_url = get_sub_field('story_related_link_url');
									$related_link_url_text = get_sub_field('story_related_link_url_text');
							?>
								<li><a href="<?php echo $related_link_url; ?>"><?php echo $related_link_url_text; ?></a></li>
							<?php endwhile;?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
		
	</div>
</div>
<?php endif; ?>