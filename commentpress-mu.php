<?php
/*
Plugin Name: Commentpress for Multisite
Version: 1.0
Plugin URI: http://www.futureofthebook.org/commentpress/
Description: This plugin integrates CommentPress in a WordPress Multisite environment and offers various management options. This plugin must be Network Activated. <strong>If you are using Commentpress in a BuddyPress environment, please use Commentpress for BuddyPress instead.</strong>
Author: Institute for the Future of the Book
Author URI: http://www.futureofthebook.org
Network: true
*/





// define version
define( 'CPMU_PLUGIN_VERSION', '1.0' );

// store reference to this file
if ( !defined( 'CPMU_PLUGIN_FILE' ) ) {
	define( 'CPMU_PLUGIN_FILE', __FILE__ );
}

// store URL to this plugin's directory
if ( !defined( 'CPMU_PLUGIN_URL' ) ) {
	define( 'CPMU_PLUGIN_URL', plugin_dir_url( CPMU_PLUGIN_FILE ) );
}
// store PATH to this plugin's directory
if ( !defined( 'CPMU_PLUGIN_PATH' ) ) {
	define( 'CPMU_PLUGIN_PATH', plugin_dir_path( CPMU_PLUGIN_FILE ) );
}





/*
----------------------------------------------------------------
Init plugin
----------------------------------------------------------------
*/

// do we have our class?
if ( !class_exists( 'CommentPressMultiSiteLoader' ) ) {

	// define filename
	$class_file = 'class_commentpress_mu_loader.php';

	// get path
	$class_file_path = cpmu_file_is_present( $class_file );
	
	// we're fine, include class definition
	require_once( $class_file_path );

	// instantiate it
	$cpmu_obj = new CommentPressMultiSiteLoader;
	
}






/*
--------------------------------------------------------------------------------
Misc Utility Functions
--------------------------------------------------------------------------------
*/

/** 
 * @description: utility to check for presence of vital files
 * @param string $filename the name of the Commentpress Plugin file
 * @return string $filepath absolute path to file
 * @todo: 
 *
 */
function cpmu_file_is_present( $filename ) {

	// define path to our requested file
	$filepath = CPMU_PLUGIN_PATH . $filename;

	// is our class definition present?
	if ( !is_file( $filepath ) ) {
	
		// oh no!
		die( 'File "'.$filepath.'" is missing from the plugin directory.' );
	
	}
	
	
	
	// --<
	return $filepath;

}







/** 
 * @description: utility to show theme environment
 * @todo: 
 *
 */
function _cpmu_environment() {
	
	// don't show in admin
	if ( !is_admin() ) {
		
		// dump our environment
		echo 'TEMPLATEPATH<br />'.TEMPLATEPATH.'<br /><br />';
		echo 'STYLESHEETPATH<br />'.STYLESHEETPATH.'<br /><br />';
		echo 'stylesheet_directory<br />'.get_bloginfo('stylesheet_directory').'<br /><br />';
		echo 'template_directory<br />'.get_bloginfo('template_directory').'<br /><br />';	
		echo 'template_url<br />'.get_bloginfo('template_url').'<br /><br />';	
		echo 'stylesheet_url<br />'.get_bloginfo('stylesheet_url').'<br /><br />';
		echo 'get_stylesheet_directory<br />'.get_stylesheet_directory().'<br /><br />';
		echo 'get_stylesheet_directory_uri<br />'.get_stylesheet_directory_uri().'<br /><br />';
		echo 'get_template_directory<br />'.get_template_directory().'<br /><br />';
		echo 'get_template_directory_uri<br />'.get_template_directory_uri().'<br /><br />';
		echo 'locate_template<br />'.locate_template( array( 'style/js/cp_js_common.js' ), false ).'<br /><br />';
		die();
	
	}
	
}

//add_action( 'template_redirect', '_cpmu_environment' );






/** 
 * @description: utility to show tests
 * @todo: 
 *
 */
function _cpmu_test() {

	global $commentpress_obj;
	//print_r( $commentpress_obj ); die();
	
}

//add_action( 'wp_head', '_cpmu_test' );






?>