<?php
	
	/* work cities fields 

		- cities_sports_content
		- cities_sports_image
		- cities_sports
		  - city_name
		  - city_url
	*/

	//global vars
	$cities_sports_content = get_field('cities_sports_content');
	$cities_sports_image = get_field('cities_sports_image');
	$cities_sports = get_field('cities_sports');
?>


<?php if($cities_sports_content || $cities_sports_image || $cities_sports): ?>

<div id="workCities" class="container-fluid">
	<div class="work-cities row">

		<figure class="side-city image" style="background-image: url('<?php echo $cities_sports_image; ?>')">
			<img src="<?php echo $cities_sports_image; ?>" alt="Image laureus cities"/>
		</figure>
		
		<div class="side-city text-wrapper">
			<?php echo $cities_sports_content; ?>
			<?php if($cities_sports):?>
				<ul>
				<?php while(have_rows('cities_sports')): the_row();

					// scope vars
					$city_name = get_sub_field('city_name');
					$city_url  = get_sub_field('city_url');

				?>
					<li><a href="<?php echo $city_url; ?>"><?php echo $city_name; ?></a></li>
				<?php endwhile;?>	
				</ul>
			<?php endif;?>	
		</div>
		
	</div>
</div>
<?php endif; ?>