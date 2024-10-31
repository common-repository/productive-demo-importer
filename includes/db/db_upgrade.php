<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}


function productive_demo_importer_database_upgrade_init() {
    $current_version_in_db = get_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY );
    if ( $current_version_in_db  < PRODUCTIVE_DEMO_IMPORTER_VERSION ) {
        productive_demo_importer_database_upgrade();
    }
}
// Enable below when there is an upgrade
add_action( 'plugins_loaded', 'productive_demo_importer_database_upgrade_init');

/**
 * Method productive_demo_importer_database_upgrade ''.
 */
function productive_demo_importer_database_upgrade() {

    global $wpdb;

    $current_version_in_db = get_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY );

    if ( $current_version_in_db  < PRODUCTIVE_DEMO_IMPORTER_VERSION ) {
        update_option( PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY, PRODUCTIVE_DEMO_IMPORTER_VERSION );
    }
}
