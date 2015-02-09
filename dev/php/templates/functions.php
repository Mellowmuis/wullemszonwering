<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "wullemszonwering", 
		  "Haarmanweg 21A 4538 AN  Terneuzen", 
		  "0115630299", 
		  "info@wullemszonwering.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}


include_once('includes/antispam.php');

add_action('init', 'cptui_register_my_cpt_actie');
function cptui_register_my_cpt_actie() {
register_post_type('actie', array(
'label' => 'Acties',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'actie', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Acties',
  'singular_name' => 'Actie',
  'menu_name' => 'Acties',
  'add_new' => 'Add Actie',
  'add_new_item' => 'Add New Actie',
  'edit' => 'Edit',
  'edit_item' => 'Edit Actie',
  'new_item' => 'New Actie',
  'view' => 'View Actie',
  'view_item' => 'View Actie',
  'search_items' => 'Search Acties',
  'not_found' => 'No Acties Found',
  'not_found_in_trash' => 'No Acties Found in Trash',
  'parent' => 'Parent Actie',
)
) ); }
?>
