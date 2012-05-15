<?
	//register custom post types
	//register custom post types
  add_action( 'init', 'create_post_type' );
  function create_post_type() {
		//generic projects
		register_post_type(
			'ms_project',
			array(
				'labels' => array(
					'name'				=> __( 'Projects', 'mysociety' ),
					'singular_name'		=> __( 'Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Project', 'mysociety'),
					'new_item'			=> __( 'New Project', 'mysociety' ),
					'view_item'			=> __( 'View Project', 'mysociety'),
					'search_items'		=> __( 'Search Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> true,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'projects')
			)
		);
		
		//for organisations
		register_post_type(
			'ms_org',
			array(
				'labels' => array(
					'name'				=> __( 'For Organisations', 'mysociety' ),
					'singular_name'		=> __( 'Commercial Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Commercial Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Commercial Project', 'mysociety'),
					'new_item'			=> __( 'New Commercial Project', 'mysociety' ),
					'view_item'			=> __( 'View commercial Project', 'mysociety'),
					'search_items'		=> __( 'Search Commercial Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> true,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'projects/for-orgs')
			)
		);
		
		//for councils
		register_post_type(
			'ms_councils',
			array(
				'labels' => array(
					'name'				=> __( 'For Councils', 'mysociety' ),
					'singular_name'		=> __( 'Civil Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Civic Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Civic Project', 'mysociety'),
					'new_item'			=> __( 'New Civic Project', 'mysociety' ),
					'view_item'			=> __( 'View Civic Project', 'mysociety'),
					'search_items'		=> __( 'Search Civic Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> true,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'projects/for-the-public')
			)
		);
		
		//for volunteers
		register_post_type(
			'ms_volunteer',
			array(
				'labels' => array(
					'name'				=> __( 'For Volunteers', 'mysociety' ),
					'singular_name'		=> __( 'Volunteer Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Volunteer Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Volunteer Project', 'mysociety'),
					'new_item'			=> __( 'New Volunteer Project', 'mysociety' ),
					'view_item'			=> __( 'View Volunteer Project', 'mysociety'),
					'search_items'		=> __( 'Search Volunteer Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> true,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'projects/for-volunteers')
			)
		);
		
		//for volunteers
		register_post_type(
			'ms_volunteer',
			array(
				'labels' => array(
					'name'				=> __( 'For Volunteers', 'mysociety' ),
					'singular_name'		=> __( 'Volunteer Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Volunteer Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Volunteer Project', 'mysociety'),
					'new_item'			=> __( 'New Volunteer Project', 'mysociety' ),
					'view_item'			=> __( 'View Volunteer Project', 'mysociety'),
					'search_items'		=> __( 'Search Volunteer Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> true,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'projects/for-volunteers')
			)
		);
	}

	// register field groups
	if(function_exists("register_field_group")) {
		// include('field_groups/basic.php'); //basic fields 
		// include('field_groups/person.php'); //person fields
	}
?>