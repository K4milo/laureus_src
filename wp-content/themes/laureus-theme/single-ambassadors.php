<?php
  get_header();

    while(have_posts()):the_post();

    // Hero Title
    get_template_part('includes/common/common','herotitle');

    // Breadcrumb
    get_template_part('includes/common/common','breadcrumb');

    // Site Content
    get_template_part('includes/template-parts/common/team','content'); 

    // Ambassadors
    get_template_part('includes/loops/loop-carousel-ambassadors-cream');

    // Patrons inline
    get_template_part('includes/loops/loop-patrons-inline');

    // Prefooter
    get_template_part('includes/common/common','prefooter');

    endwhile;

  get_footer(); ?>