<?php

/*
  Template Name: Home Template
*/

  get_header();

  	while(have_posts()):the_post();

  ?>


  <?php
  	endwhile;

  get_footer(); ?>