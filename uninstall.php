<?php
/**
 * This magic file runs automatically, so no need to call 'register_uninstall_hook'
 * 
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

// Check if WordPress has called uninstall.php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

require_once plugin_dir_path( __FILE__ ) . 'global-settings.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/db/db_uninstall.php';

/**
 * run the Uninstall method productive_demo_importer_uninstall_db ''.
 */
  productive_demo_importer_uninstall_db();
