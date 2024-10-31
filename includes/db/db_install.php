<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}


/**
 * Method productive_demo_importer_database_setup ''.
 */
function productive_demo_importer_database_install() {

        // Check Multisite
        if ( is_multisite() ) {
            // Main plugin version
            add_site_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY, PRODUCTIVE_DEMO_IMPORTER_VERSION );
        } else {
            // Main plugin version
            add_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY, PRODUCTIVE_DEMO_IMPORTER_VERSION );
        }
}
