<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

/** 
 * Method productive_demo_importer_uninstall_db ''.
 */
function productive_demo_importer_uninstall_db() {
    // Check Multisite
    if ( is_multisite() ) {
        // Main plugin version
        delete_site_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY );
    } else {
        // Main plugin version
        delete_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY );
    }
}