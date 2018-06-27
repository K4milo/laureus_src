<?php

function laureus_widgets_init() {

  /*
  Top bar (one widget area)
   
  register_sidebar( array(
    'name'            => __( 'Topbar', 'laureus' ),
    'id'              => 'top-widget-area',
    'description'     => __( 'The top widget area', 'laureus' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );
*/
}
add_action( 'widgets_init', 'laureus_widgets_init' );