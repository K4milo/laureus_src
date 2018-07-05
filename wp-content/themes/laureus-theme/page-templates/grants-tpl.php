<?php
  
  /*
  Template Name: Grants Template
*/

  get_header();

    while(have_posts()):the_post();

       // Hero Title
      get_template_part('includes/common/common','herotitle');

      // Breadcrumb
      get_template_part('includes/common/common','breadcrumb');

      // Site Content
      get_template_part('includes/template-parts/common/common','content'); 
      
      // Grants Loop
      get_template_part('includes/loops/loop','grants');

      // Patrons inline
      get_template_part('includes/loops/loop-patrons-inline');

      // Prefooter
      get_template_part('includes/common/common','prefooter');

    endwhile;

  get_footer(); ?>