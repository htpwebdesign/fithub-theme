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
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-admin-users',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'template'           => array(array('core/paragraph')),
        'template_lock'      => 'all',
    );

    register_post_type('fithub-team', $args);
}
add_action('init', 'fithub_register_custom_post_types');

function fithub_register_taxonomies()
{
    // Add Team Category taxonomy
    $labels = array(
        'name'              => _x('Team Categories', 'taxonomy general name'),
        'singular_name'     => _x('Team Category', 'taxonomy singular name'),
        'search_items'      => __('Search Team Categories'),
        'all_items'         => __('All Team Category'),
        'parent_item'       => __('Parent Team Category'),
        'parent_item_colon' => __('Parent Team Category:'),
        'edit_item'         => __('Edit Team Category'),
        'view_item'         => __('Vview Team Category'),
        'update_item'       => __('Update Team Category'),
        'add_new_item'      => __('Add New Team Category'),
        'new_item_name'     => __('New Team Category Name'),
        'menu_name'         => __('Team Category'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'team-categories'),
    );
    register_taxonomy('fithub-team-category', array('fithub-team'), $args);
}
add_action('init', 'fithub_register_taxonomies');

function fithub_rewrite_flush()
{
    fithub_register_custom_post_types();
    fithub_register_taxonomies();
    fithub_rewrite_flush();
}
add_action('after_switch_theme', 'fithub_rewrite_flush');
