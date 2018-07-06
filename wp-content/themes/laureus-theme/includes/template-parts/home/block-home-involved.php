<?php
	
	/* story block Involved
		- get_involve_items
			- involved_image_item
			- involved_icon
			- involved_title_item
			- involved_item_link
	*/

	//global vars

	$involve_items = get_field('get_involve_items');
	
?>

<?php if($involve_items): ?>
<div id="involvedComponent" class="container-fluid">
	<div class="row involved-home-block">
		<h3><span>Get</span>Involved</h3>
		<ul>
		<?php while(have_rows('get_involve_items')): the_row(); 
				// Local vars
				$involved_image_item = get_sub_field('involved_image_item');
				$involved_icon = get_sub_field('involved_icon');
				$involved_title_item = get_sub_field('involved_title_item');
				$involved_item_link = get_sub_field('involved_item_link');
				$target = get_sub_field('new_tab');
				$url_destination = "";
				if($target == true){
					$url_destination = "_blank";
				}
		?>
			<li style="background-image: url('<?php echo $involved_image_item; ?>')">
				<a href="<?php echo $involved_item_link; ?>" title="<?php echo $involved_title_item; ?>" target="<?php echo $url_destination; ?>"></a>
				<div class="involved__wrap">
					
					<img src="<?php echo $involved_icon; ?>" alt="Icon <?php echo $involved_title_item; ?>">
					<a href="<?php echo $involved_item_link; ?>" title="<?php echo $involved_title_item; ?>" target="<?php echo $url_destination; ?>"><h4><?php echo $involved_title_item; ?></h4></a>
					
				</div>
			</li>
		<?php endwhile;?>
		</ul>
	</div>
</div>
<?php endif; ?>