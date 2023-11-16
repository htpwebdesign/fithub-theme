<?php
function fithub_register_custom_post_types()
{
    // Register Team
    $labels = array(
        'name'               => _x('Team', 'post type general name'),
        'singular_name'      => _x('Team', 'post type singular name'),
        'menu_name'          => _x('Team', 'admin menu'),
        'name_admin_bar'     => _x('Team', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Team'),
        'add_new_item'       => __('Add New Team'),
        'new_item'           => __('New Team'),
        'edit_item'          => __('Edit Team'),
        'view_item'          => __('View Team'),
        'all_items'          => __('All Team'),
        'search_items'       => __('Search Team'),
        'parent_item_colon'  => __('Parent Team:'),
        'not_found'          => __('No Team found.'),
        'not_found_in_trash' => __('No Team found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'team'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-admin-users',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'template'           => array(array('core/paragraph')),
        'template_lock'      => 'all',
    );

    register_post_type('fithub-team', $args);

    // Register Service
    $labels = array(
        'name'               => _x('Service', 'post type general name'),
        'singular_name'      => _x('Service', 'post type singular name'),
        'menu_name'          => _x('Service', 'admin menu'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Service'),
        'add_new_item'       => __('Add New Service'),
        'new_item'           => __('New Service'),
        'edit_item'          => __('Edit Service'),
        'view_item'          => __('View Service'),
        'all_items'          => __('All Service'),
        'search_items'       => __('Search Service'),
        'parent_item_colon'  => __('Parent Service:'),
        'not_found'          => __('No Service found.'),
        'not_found_in_trash' => __('No Service found in Trash.'),
        'archives'           => __('Service Archives'),
        'insert_into_item'   => __('Insert into Service'),
        'uploaded_to_this_item' => __('Uploaded to this Service'),
        'filter_item_list'   => __('Filter Service list'),
        'items_list_navigation' => __('Service list navigation'),
        'items_list'         => __('Service list'),
        'featured_image'     => __('Service featured image'),
        'set_featured_image' => __('Set Service featured image'),
        'remove_featured_image' => __('Remove Service featured image'),
        'use_featured_image' => __('Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'service'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'template'           => array(array('core/paragraph')),
        'template_lock'     => 'all',
    );

    register_post_type('fithub-service', $args);
}
add_action('init', 'fithub_register_custom_post_types');

// function fithub_register_taxonomies()
// {
//     // Add Team taxonomy
//     $labels = array(
//         'name'              => _x('Team', 'taxonomy general name'),
//         'singular_name'     => _x('Team', 'taxonomy singular name'),
//         'search_items'      => __('Search Team'),
//         'all_items'         => __('All Team'),
//         'parent_item'       => __('Parent Team'),
//         'parent_item_colon' => __('Parent Team:'),
//         'edit_item'         => __('Edit Team'),
//         'update_item'       => __('Update Team'),
//         'add_new_item'      => __('Add New Team'),
//         'new_item_name'     => __('New Team'),
//         'menu_name'         => __('Team Type'),
//     );

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'show_in_rest'      => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'team'),
//     );

//     register_taxonomy('fithub-team-type', array('fithub-team'), $args);

//     // Add Service Category taxonomy
//     $labels = array(
//         'name'              => _x('Service Categories', 'taxonomy general name'),
//         'singular_name'     => _x('Service Category', 'taxonomy singular name'),
//         'search_items'      => __('Search Service Categories'),
//         'all_items'         => __('All Service Category'),
//         'parent_item'       => __('Parent Service Category'),
//         'parent_item_colon' => __('Parent Service Category:'),
//         'edit_item'         => __('Edit Service Category'),
//         'view_item'         => __('Vview Service Category'),
//         'update_item'       => __('Update Service Category'),
//         'add_new_item'      => __('Add New Service Category'),
//         'new_item_name'     => __('New Service Category Name'),
//         'menu_name'         => __('Service Category'),
//     );
//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_in_menu'      => true,
//         'show_in_nav_menu'  => true,
//         'show_in_rest'      => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'service-categories'),
//     );
//     register_taxonomy('fithub-service-category', array('fithub-service'), $args);
// }
// add_action('init', 'fithub_register_taxonomies');

function fithub_rewrite_flush()
{
    fithub_register_custom_post_types();
    // fithub_register_taxonomies();
    fithub_rewrite_flush();
}
add_action('after_switch_theme', 'fithub_rewrite_flush');
