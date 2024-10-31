<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'includes/db/db_install.php';
require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'includes/db/db_upgrade.php';
require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'includes/db/db_transactions.php';

/**
 * Method productive_demo_importer_activate ''.
 */
function productive_demo_importer_activate() {
    productive_demo_importer_database_install();
}
