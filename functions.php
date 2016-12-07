<?php
require TEMPLATEPATH.'/framework/theme.php';
$theme = new Theme(array(
	'menus' => array(
		'nav' => 'Navigation'
		)
	));




require_once('wp_bootstrap_navwalker.php');



 /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
 function theme_multipage_scripts() {
 	wp_deregister_script( 'Jquery' );
 	wp_enqueue_script( 'Jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
 	wp_enqueue_script( 'bootstrapsjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), false, false);
 	wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
 }

 add_action( 'wp_enqueue_scripts', 'theme_multipage_scripts' );


 add_theme_support('post-thumbnails');


 add_action( 'wp_enqueue_scripts', 'theme_multipage_scripts' );


 register_nav_menus( 
 	array(


 		'primaire'=> __('Barre de menu du thème','test')	
 		) 
 	);

 	?>