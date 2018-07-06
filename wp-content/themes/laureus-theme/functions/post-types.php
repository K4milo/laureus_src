<?php

// Custom post types creation
function create_posttype() {

     ////////////////////
    // POST TYPES
    ///////////////////
    
    //Post Type Ambassadors

    register_post_type( 'ambassadors',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Ambassadors' ),
                'singular_name' => __( 'Ambassador' )
            ),
            'rewrite' => array('slug' => 'ambassador'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post'
        )
    );

    //Post Type Testimonials

    register_post_type( 'testimonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'rewrite' => array('slug' => 'testimonials'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 6,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type Partners

    register_post_type( 'patrons',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Global Patrons' ),
                'singular_name' => __( 'Patron' )
            ),
            'rewrite' => array('slug' => 'patrons'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 7,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type Testimonials

    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Our Team' ),
                'singular_name' => __( 'Team Member' )
            ),
            'rewrite' => array('slug' => 'team'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 8,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type Grants

    register_post_type( 'grants',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Grant' ),
                'singular_name' => __( 'Grant Item' )
            ),
            'rewrite' => array('slug' => 'grant'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 9,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type Events

    register_post_type( 'events',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'rewrite' => array('slug' => 'event'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type News

    register_post_type( 'news',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'New' )
            ),
            'rewrite' => array('slug' => 'news'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 11,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    // Post Type for contacts
    register_post_type( 'contacts',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Contacts' ),
                'singular_name' => __( 'Contact' )
            ),
            'rewrite' => array('slug' => 'contact'),
            'supports' => array( 'title', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 12,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    
    ////////////////////
    // TAXONOMIES
    ///////////////////


    $media_labels = array(
        'name' => _x( 'Ambassador Types', 'type of Ambassadors' ),
        'singular_name' => _x( 'Ambassador Type', 'type media' ),
        'search_items' =>  __( 'Search Ambassador Types' ),
        'all_items' => __( 'All Ambassador Types' ),
        'parent_item' => __( 'Parent Ambassador Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ), 
        'update_item' => __( 'Update Ambassador Type' ),
        'add_new_item' => __( 'Add New Ambassador Type' ),
        'new_item_name' => __( 'New Type Number' ),
        'menu_name' => __( 'Ambassador Type' ),
    ); 

    register_taxonomy('ambassador_type',array('ambassadors'), array(
        'hierarchical' => true,
        'labels' => $media_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'media-year',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'ambassador-type' ),
    )); 

    $media_labels2 = array(
        'name' => _x( 'Team Field', 'Team Field' ),
        'singular_name' => _x( 'Member Type', 'type media' ),
        'search_items' =>  __( 'Search Team Field' ),
        'all_items' => __( 'All Member Team Field' ),
        'parent_item' => __( 'Parent MemberTeam Field' ),
        'parent_item_colon' => __( 'ParentTeam Field:' ),
        'edit_item' => __( 'Edit Type' ), 
        'update_item' => __( 'Update Team Field' ),
        'add_new_item' => __( 'Add New Team Field' ),
        'new_item_name' => __( 'New Type Number' ),
        'menu_name' => __( 'Team Field' ),
    ); 

    register_taxonomy('member_type', array('team'), array(
        'hierarchical' => true,
        'labels' => $media_labels2,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'memeber-type',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'member-type' ),
    ));  

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );