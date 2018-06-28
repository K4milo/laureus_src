<?php
	
	/* portfolio block fields 

		- portfolio_text
		- portfolio_items
		   - portfolio_item_icon
		   - portfolio_item_title
		   - portfolio_item_number
	*/


	//global vars
	$portfolio_text = get_field('portfolio_text');
	$portfolio_items = get_field('portfolio_items');

?>

<?php if($portfolio_text || $portfolio_items ): ?>
<div id="portfolioComponent" class="container-fluid">
	<div class="row portfolio-home-block">
		<div class="container">	
			<?php if($portfolio_text): ?>
				<div class="side-portfolio text-wrapper"><?php echo $portfolio_text; ?></div>
			<?php endif; ?>

			<?php if($portfolio_items): ?>
				<div class="side-portfolio items-wrapper">
					<ul>
						<?php while(have_rows('portfolio_items')): the_row(); 

								//Subfileds
								$item_icon = get_sub_field('portfolio_item_icon');
								$item_title = get_sub_field('portfolio_item_title');
								$item_number = get_sub_field('portfolio_item_number');
						?>
							<li>
								<img src="<?php echo $item_icon; ?>" alt="<?php echo $item_title; ?>">
								<span>
									<h4><?php echo $item_title; ?></h4>
									<h5 class="counter"><?php echo $item_number; ?></h5>
								</span>
							</li>
						<?php endwhile;?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>