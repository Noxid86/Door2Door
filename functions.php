<?php
  function door2door_styles(){
      wp_enqueue_style('style', get_stylesheet_uri());
  };

  function door2door_scripts() {
      wp_enqueue_script( 'navigator.js', get_template_directory_uri() . '/js/navigator.js', array( 'jquery' ));
  };

  add_action( 'wp_enqueue_scripts', 'door2door_scripts' );
  add_action('wp_enqueue_scripts', 'door2door_styles');

  // CUSTOM POST TYPES
  add_action('init', 'register_contacts', 0);
  function register_contacts() {
    $label = 'contact';
    $plural_label = 'contacts';
    $args = array(
      'label'                 => $label,
      'description'           => 'the type of contact '.$plural_label,
      'labels'                => array(
        'name'                  => $plural_label,
        'singular_name'         => $label,
        'menu_name'             => $plural_label,
        'name_admin_bar'        => $plural_label,
        'archives'              => $label.' Archives',
        'attributes'            => $label.' Attributes',
        'parent_item_colon'     => 'Parent '.$label.':',
        'all_items'             => 'All '.$plural_label,
        'add_new_item'          => 'Add New '.$label,
        'add_new'               => 'Add New',
        'new_item'              => 'New '.$label,
        'edit_item'             => 'Edit '.$label,
        'update_item'           => 'Update '.$label,
        'view_item'             => 'View '.$label,
        'view_items'            => 'View '.$plural_label,
        'search_items'          => 'Search '.$plural_label,
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into '.$label,
        'uploaded_to_this_item' => 'Uploaded to this '.$label,
        'items_list'            => $plural_label.' list',
        'items_list_navigation' => $plural_label.' list navigation',
        'filter_items_list'     => 'Filter '.$label.' list',
      ),
      'supports'              => array(
  																'thumbnail',
  																'title',
  																'revisions'
  															),
      'taxonomies'            => array(),
      'hierarchical'          => false,
      'public'                => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => null,
      'menu_icon'             => 'dashicons-businessman',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page'
    );
    register_post_type('contacts', $args);
  };


  // DEBUGGING FUNCTION
  if ( ! function_exists('write_log')) {
  			 	error_log('----WRITTEN LOG----');
     function write_log ( $log )  {
        if ( is_array( $log ) || is_object( $log ) ) {
           error_log( print_r( $log, true ) );
        } else {
           error_log( $log );
        };
     };
  };

?>
