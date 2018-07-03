<?php
	
	/* work league fields 

		- good_league_content
		- good_league_image
		- good_league_cta
		
	*/

	//global vars
	$good_league_content = get_field('good_league_content');
	$good_league_image = get_field('good_league_image');
	$good_league_cta = get_field('good_league_cta');
?>

<?php if($good_league_content || $good_league_image || $good_league_cta): ?>
<div id="workLeague" class="container-fluid">
	<div class="work-good row">
		<div class="side-good work-thumb">
			<figure style="background-image: url('<?php echo $good_league_image; ?>')"></figure>
		</div>
		<div class="side-good text-wrapper">
			<?php echo $good_league_content; ?>
			<a href="<?php echo $good_league_cta; ?>">Join the League</a>
		</div>
	</div>
</div>
<?php endif;?>