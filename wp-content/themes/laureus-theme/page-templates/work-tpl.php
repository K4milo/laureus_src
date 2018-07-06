<?php

/*
  Template Name: Our Work Template
*/

  get_header();

  	while(have_posts()):the_post();

  		// Hero Title
  		get_template_part('includes/common/common','herotitle');

      // Breadcrumb
      get_template_part('includes/common/common','breadcrumb');

      // Site Content
      get_template_part('includes/template-parts/work/work','content'); 

      // History Block
      get_template_part('includes/template-parts/work/work','cities'); 

      // Ambassadors
      get_template_part('includes/loops/loop-carousel-ambassadors');

      // History Block
      get_template_part('includes/template-parts/work/work','league'); 

      // Related Posts
      get_template_part('includes/common/common','related-block'); 

      // Patrons inline
      get_template_part('includes/loops/loop-patrons-inline');

      // Prefooter
      get_template_part('includes/common/common','prefooter');

  	endwhile;

  get_footer(); ?>