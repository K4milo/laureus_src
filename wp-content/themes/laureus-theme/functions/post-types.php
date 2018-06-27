<?php

// Custom post types creation
function create_posttype() {
    
    //Post Type Beneficiaries

    /*

    register_post_type( 'beneficiaries',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Beneficiaries' ),
                'singular_name' => __( 'Beneficiary' )
            ),
            'rewrite' => array('slug' => 'beneficiary'),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    /////////
    // TAXONOMIES
    /////////

    

    $media_labels = array(
        'name' => _x( 'Media Years', 'type of media' ),
        'singular_name' => _x( 'Media Year', 'type media' ),
        'search_items' =>  __( 'Search Media Years' ),
        'all_items' => __( 'All Media Years' ),
        'parent_item' => __( 'Parent Media Year' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ), 
        'update_item' => __( 'Update Year' ),
        'add_new_item' => __( 'Add New Year' ),
        'new_item_name' => __( 'New Type Number' ),
        'menu_name' => __( 'Media Years' ),
    ); 

    register_taxonomy('media_year',array('multimedia'), array(
        'hierarchical' => true,
        'labels' => $media_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'media-year',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'media-year' ),
    ));  

    */ 

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );