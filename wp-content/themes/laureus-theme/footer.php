<footer>
	<div class="footer-section brand">
		<figure class="footer-logo">
			<img src="<?php bloginfo('template_url')?>/img/logos/logo.png" alt="Laureus Site">
		</figure>
	</div>
	<div class="footer-section sitemap">
	  <?php
			//Menu Call
	    wp_nav_menu( 
			array(
				'theme_location'    => 'navbar-footer',
				'depth'             => 2,
				'menu_class'        => 'nav navbar-nav-footer'
			)
		);
	  ?>
	</div>
	<div class="footer-section secondary-menu">
		<a href="#" class="green-btn">Donate</a>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>