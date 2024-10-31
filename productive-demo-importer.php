<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

/**
 * Plugin Name:       Productive Demo Importer
 * Plugin URI:        https://www.productiveminds.com/product/productive-demo-importer
 * Description:       The official demo content Importer for themes by productiveminds.com. This plugin will import demo content including Header and Footer menu, Widgets settings and customiser settings to set up your new WordPress website with similar content as our live demo of the theme. It is lightweight and works with little effort.
 * Version:           1.1.18
 * Requires at least: 5.4
 * Requires PHP:      7.0
 * Author:            productiveminds.com
 * Author URI:        https://www.productiveminds.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       productive-demo-importer
 * Domain Path:       /languages
 */

if ( !defined('ABSPATH') ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'global-settings.php';

if( ! function_exists('get_plugin_data') ){
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
$productive_demo_importer_plugin_version_obj = get_plugin_data( __FILE__ );
$productive_demo_importer_plugin_version = $productive_demo_importer_plugin_version_obj['Version'];

$productiveminds_base_demo_url = 'https://demo.productiveminds.com';
$productiveminds_base_support_url = 'https://www.productiveminds.com/support';
$productiveminds_base_documentation_url = 'https://www.productiveminds.com/support/docs';

$plugin_name = $productive_demo_importer_plugin_version_obj[ 'Name' ];
$plugin_url = $productive_demo_importer_plugin_version_obj[ 'PluginURI' ];
$author_name = $productive_demo_importer_plugin_version_obj[ 'Author' ];
$author_url = $productive_demo_importer_plugin_version_obj[ 'AuthorURI' ];
$plugin_demo_url = $productiveminds_base_demo_url . '/' . $productive_demo_importer_plugin_version_obj[ 'TextDomain' ];
$plugin_support_url = $productiveminds_base_support_url;
$plugin_documentation_url = $productiveminds_base_documentation_url . '/' . $productive_demo_importer_plugin_version_obj[ 'TextDomain' ];
$plugin_wordpress_xml_import_documentation_url = $productiveminds_base_documentation_url . '/' . 'how-to-import-xml-data-with-wordpress-importer-plugin';
$plugin_review_on_repo_url = 'https://wordpress.org/support/plugin' . '/' . $productive_demo_importer_plugin_version_obj[ 'TextDomain' ] . '/reviews/';
$plugin_download_from_repo_url = 'https://downloads.wordpress.org/plugin' . '/' . $productive_demo_importer_plugin_version_obj[ 'TextDomain' ] . 
        '.' . $productive_demo_importer_plugin_version . '.zip';

define( 'PRODUCTIVE_DEMO_IMPORTER_VERSION', $productive_demo_importer_plugin_version );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DEVELOPER_NAME', 'productiveminds.com' );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DEVELOPER_WEBSITE', $author_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_CURRENT_PLUGIN_NAME', $plugin_name );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DEMO_URL', $plugin_demo_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_SUPPORT_URL', $plugin_support_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DOCUMENTATION_URL', $plugin_documentation_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_XML_IMPORT_DOCUMENTATION_URL', $plugin_wordpress_xml_import_documentation_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DOWNLOAD_FROM_REPO_URL', $plugin_download_from_repo_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_REVIEW_ON_REPO_URL', $plugin_review_on_repo_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PRO_REVIEW_URL', $productiveminds_base_demo_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_FEATURES_OR_BUY_URL', $plugin_url );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_ICON', PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'public/images/plugin-icon.webp' );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLACEHOLDER_IMAGE_POSTS', PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'public/images/posts-placeholder.webp' );

define( 'PRODUCTIVE_DEMO_IMPORTER_OPTION_TAB_ABOUT_TITLE', esc_html__( 'Demo Import Steps', 'productive-demo-importer' ) );
define( 'PRODUCTIVE_DEMO_IMPORTER_OPTION_TAB_1_TITLE', esc_html__( 'Old Steps (please ignore)', 'productive-demo-importer' ) );


// These requires must be here, after global vars assignments
require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'includes/activate.php';
require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'includes/deactivate.php';
require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'admin/options/settings.php';

// Start main plugin activation
register_activation_hook( __FILE__, 'productive_demo_importer_activate');

// Start main plugin deactivation
register_deactivation_hook( __FILE__, 'productive_demo_importer_deactivate' );



/**
 * Method productive_demo_importer_is_active.
 */
function productive_demo_importer_is_active() {}


/**
 * Load (wp_enqueue_script) admin css * JS files.
 */
function productive_demo_importer_admin_scripts() {
    global $productive_demo_importer_plugin_version;
    
    // Admin Common assets
    if ( !function_exists( 'productiveminds_common_asset_admin') ) {
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_style( 'productive_demo_importer_admin_css', PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'admin/css/admin-style.css', array(), $productive_demo_importer_plugin_version );
    
        require_once PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'admin/common/productiveminds-common-asset-admin.php';
    }
    wp_enqueue_script( 'productive_demo_importer_admin_js_handle', PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'admin/js/admin-plugin.js', array(), $productive_demo_importer_plugin_version, true );

    $admin_ajax_php_class = array(
        'ajax_admin_url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce('productive_demo_importer_admin_scripts'),
        'msg_error_select_a_theme' => __( 'Select a Theme, then try again.', 'productive-demo-importer' ),
        'msg_error_confirm_fresh_install' => __( 'Please confirm this is a test site or new WordPress installation, then try again.', 'productive-demo-importer' ),
        'msg_error_select_a_demo' => __( 'Select the Required Demo Content (Homepage or Menu), then try again.', 'productive-demo-importer' ),
    );
    wp_localize_script(
    'productive_demo_importer_admin_js_handle',
    'productive_demo_importer_admin_js_url_name',
    $admin_ajax_php_class
    );
}
if ( ( is_admin() && isset($_GET[ 'page' ]) ) && 
        ( $_GET[ 'page' ] === PRODUCTIVE_DEMO_IMPORTER_ADMIN_OVERVIEW_REQUEST_URI || $_GET[ 'page' ] === PRODUCTIVE_DEMO_IMPORTER_ADMIN_PAGE_REQUEST_URI ) ) {
    add_action( 'admin_enqueue_scripts', 'productive_demo_importer_admin_scripts' );
}


	/**
	 * Method productive_demo_importer_setup_plugin
	 */
function productive_demo_importer_setup_plugin() {
	// initiate text-domain.
	load_plugin_textdomain( 'productive-demo-importer', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
// hook for productive_demo_importer_setup_plugin.
add_action( 'init', 'productive_demo_importer_setup_plugin' );


function productive_demo_importer_add_action_links ( $actions ) {
   $settings_text = __( 'Start Demo Import', 'productive-demo-importer' );
   $setting_page_uri = 'admin.php?page=' . PRODUCTIVE_DEMO_IMPORTER_ADMIN_PAGE_REQUEST_URI;
   $plugin_action_links = array();
   $plugin_action_links[] = '<a href="' . esc_url( admin_url( $setting_page_uri ) ) . '">' . esc_html($settings_text) . '</a>';
   $action_links = array_merge( $actions, $plugin_action_links );
   return $action_links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'productive_demo_importer_add_action_links' );


function productive_demo_importer_is_tgm_complete() {
    if ( class_exists( 'TGM_Plugin_Activation' ) ) {
        if ( TGM_Plugin_Activation::get_instance()->is_tgmpa_complete() ) {
            return 1;
        } else {
            return 2;
        }
    } else {
        return 3;
    }
}


function productive_demo_importer_get_tpma_menu() {
    if ( class_exists( 'TGM_Plugin_Activation' ) ) {
        return 'tgmpa-install-plugins';
    } else {
        return '';
    }
}