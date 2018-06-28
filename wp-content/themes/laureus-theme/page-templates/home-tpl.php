<?php

/*
  Template Name: Home Template
*/

  get_header();

  	while(have_posts()):the_post();

  		// hero banner
  		get_template_part('includes/template-parts/home/block-home','hero'); 

  		// story banner
  		get_template_part('includes/template-parts/home/block-home','story');

  		// portfolio banner
  		get_template_part('includes/template-parts/home/block-home','portfolio');

      // Ambassadors
      get_template_part('includes/loops/loop-carousel-ambassadors');

      // Involved
      get_template_part('includes/template-parts/home/block-home','involved');

      // loop posts
      get_template_part('includes/loops/loop-news-blocks');

  	endwhile;

  get_footer(); ?>