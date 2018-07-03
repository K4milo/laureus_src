<?php
	
	/* about content fields 

		- content
		- post-thumbnail
	*/
?>

<div id="workContent" class="container-fluid">
	<div class="work-content container">
		<div class="col-md-6 text-wrapper">
			<?php the_content(); ?>
		</div>
		<div class="col-md-6 work-thumb">
			<figure class="the_thumb">
				<?php the_post_thumbnail('full'); ?>
			</figure>
		</div>
	</div>
</div>