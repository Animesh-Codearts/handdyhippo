<?php   

     /*Custom Post type start*/
    function cw_post_type_banner() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Banner', 'plural'),
    'singular_name' => _x('Banner', 'singular'),
    'menu_name' => _x('Banner', 'admin menu'),
    'name_admin_bar' => _x('Banner', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Banner'),
    'new_item' => __('New Banner'),
    'edit_item' => __('Edit Banner'),
    'view_item' => __('View Banner'),
    'all_items' => __('All Banner'),
    'search_items' => __('Search Banner'),
    'not_found' => __('No Banner found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'banner'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-image',
    );
    register_post_type('cpt_banner', $args);
    }
    add_action('init', 'cw_post_type_banner');



         /*Custom Post type start*/
    function cw_post_type_project() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Project', 'plural'),
    'singular_name' => _x('Project', 'singular'),
    'menu_name' => _x('Project', 'admin menu'),
    'name_admin_bar' => _x('Project', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Project'),
    'new_item' => __('New Project'),
    'edit_item' => __('Edit Project'),
    'view_item' => __('View Project'),
    'all_items' => __('All Project'),
    'search_items' => __('Search Project'),
    'not_found' => __('No Project found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'project'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-pressthis',
    );
    register_post_type('cpt_project', $args);
    }
    add_action('init', 'cw_post_type_project');



         /*Custom Post type start*/
    function cw_post_type_testimonials() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Testimonials', 'plural'),
    'singular_name' => _x('Testimonials', 'singular'),
    'menu_name' => _x('Testimonials', 'admin menu'),
    'name_admin_bar' => _x('Testimonials', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Testimonials'),
    'new_item' => __('New Testimonials'),
    'edit_item' => __('Edit Testimonials'),
    'view_item' => __('View Testimonials'),
    'all_items' => __('All Testimonials'),
    'search_items' => __('Search Testimonials'),
    'not_found' => __('No Testimonials found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-status',
    );
    register_post_type('cpt_testimonials', $args);
    }
    add_action('init', 'cw_post_type_testimonials');



             /*Custom Post type start*/
    function cw_post_type_services() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('services', 'plural'),
    'singular_name' => _x('services', 'singular'),
    'menu_name' => _x('services', 'admin menu'),
    'name_admin_bar' => _x('services', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New services'),
    'new_item' => __('New services'),
    'edit_item' => __('Edit services'),
    'view_item' => __('View services'),
    'all_items' => __('All services'),
    'search_items' => __('Search services'),
    'not_found' => __('No services found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'services'),
    'has_archive' => false,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-status',
    );
    register_post_type('cpt_services', $args);
    }
    add_action('init', 'cw_post_type_services');



             /*Custom Post type start*/
    function cw_post_type_products() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Products', 'plural'),
    'singular_name' => _x('Products', 'singular'),
    'menu_name' => _x('Products', 'admin menu'),
    'name_admin_bar' => _x('Products', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Products'),
    'new_item' => __('New Products'),
    'edit_item' => __('Edit Products'),
    'view_item' => __('View Products'),
    'all_items' => __('All Products'),
    'search_items' => __('Search Products'),
    'not_found' => __('No Products found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'products'),
    'has_archive' => false,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-products',
    );
    register_post_type('cpt_products', $args);
    }
    add_action('init', 'cw_post_type_products');


                 /*Custom Post type start*/
    function cw_post_type_portfolio() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Portfolio', 'plural'),
    'singular_name' => _x('Portfolio', 'singular'),
    'menu_name' => _x('Portfolio', 'admin menu'),
    'name_admin_bar' => _x('Portfolio', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Portfolio'),
    'new_item' => __('New Portfolio'),
    'edit_item' => __('Edit Portfolio'),
    'view_item' => __('View Portfolio'),
    'all_items' => __('All Portfolio'),
    'search_items' => __('Search Portfolio'),
    'not_found' => __('No Portfolio found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'portfolio'),
    'has_archive' => false,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-share-alt',
    );
    register_post_type('cpt_portfolio', $args);
    }
    add_action('init', 'cw_post_type_portfolio');