<?php
/*
 * Plugin Name: Child Themify
 * Description: Create child themes at the click of a button
 * Version: 2.0.1
 * Plugin URI: https://github.com/johnpbloch/child-themify
 * Author: John P. Bloch
 * License: GPL-2.0+
 * Text Domain: child-themify
 * Network: true
 */

define( 'JPB_CTF_PATH', __FILE__ );
define( 'JPB_CTF_URL', plugin_dir_url( JPB_CTF_PATH ) );
define( 'JPB_CTF_VERSION', '2.0.1' );

function ctf_plugins_loaded() {
	$inc = plugin_dir_path( JPB_CTF_PATH ) . '/includes/';
	require_once $inc . 'util.php';
	require_once $inc . 'api.php';
	child_themify_api_init();
	if ( is_admin() ) {
		require_once $inc . 'admin.php';
		child_themify_admin_init();
	}
}

add_action( 'plugins_loaded', 'ctf_plugins_loaded' );
