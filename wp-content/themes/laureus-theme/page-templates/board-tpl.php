<?php

/*
  Template Name: Team Director Template
*/

  get_header();

  	while(have_posts()):the_post();

  		// Hero Title
  		get_template_part('includes/common/common','herotitle');

      // Breadcrumb
      get_template_part('includes/common/common','breadcrumb');

      // Team Posts
      get_template_part('includes/loops/loop-team-director');

      // Patrons inline
      get_template_part('includes/loops/loop-patrons-inline');

      // Related Posts
      get_template_part('includes/common/common','related-inline'); 

      // Prefooter
      get_template_part('includes/common/common','prefooter');

  	endwhile;

  get_footer(); ?>