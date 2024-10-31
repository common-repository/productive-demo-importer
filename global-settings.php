<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

// Plugin global variables
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI', plugin_dir_url( __FILE__ ) );

define( 'PRODUCTIVE_DEMO_IMPORTER_ADMIN_OVERVIEW_REQUEST_URI', 'productive_options_overview' );
define( 'PRODUCTIVE_DEMO_IMPORTER_ADMIN_PAGE_REQUEST_URI', 'productive_demo_importer_options_submenu' );

define( 'PRODUCTIVE_DEMO_IMPORTER_OPTION_VERSION_KEY', 'productive_demo_importer_current_db_version' );

define( 'PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_OPTIONS', 'options' );
define( 'PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_TERMS', 'terms' );
define( 'PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_TERM_TAXONOMY', 'term_taxonomy' );
define( 'PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_TERM_RELATIONSHIPS', 'term_relationships' );
define( 'PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_POSTS', 'posts' );
define( 'PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_POSTMETA', 'postmeta' );


abstract class Productive_Demo_Import_Global_Settings {
    const theme_slug_productive_ecommerce = 'productive-ecommerce';
    const theme_slug_productive_ecommerce_pro = 'productive-ecommerce-pro';
    const theme_slug_productive_business = 'productive-business';
    const theme_slug_productive_business_pro = 'productive-business-pro';
    const theme_slug_stockist = 'stockist';
    const theme_slug_stockist_pro = 'stockist-pro';
    
    const theme_name_productive_ecommerce = 'Productive ECommerce';
    const theme_name_productive_ecommerce_pro = 'Productive ECommerce Pro';
    const theme_name_productive_business = 'Productive Business';
    const theme_name_productive_business_pro = 'Productive Business Pro';
    const theme_name_stockist = 'Stockist';
    const theme_name_stockist_pro = 'Stockist Pro';
    
    public static function get_all_themes() {
        return array(
            Productive_Demo_Import_Global_Settings::theme_slug_productive_ecommerce => Productive_Demo_Import_Global_Settings::theme_name_productive_ecommerce,
            Productive_Demo_Import_Global_Settings::theme_slug_productive_ecommerce_pro => Productive_Demo_Import_Global_Settings::theme_name_productive_ecommerce_pro,
            Productive_Demo_Import_Global_Settings::theme_slug_productive_business => Productive_Demo_Import_Global_Settings::theme_name_productive_business,
            Productive_Demo_Import_Global_Settings::theme_slug_productive_business_pro => Productive_Demo_Import_Global_Settings::theme_name_productive_business_pro,
            Productive_Demo_Import_Global_Settings::theme_slug_stockist => Productive_Demo_Import_Global_Settings::theme_name_stockist,
            Productive_Demo_Import_Global_Settings::theme_slug_stockist_pro => Productive_Demo_Import_Global_Settings::theme_name_stockist_pro
        );
    }
    
    public static function get_valid_themes_slugs() {
        return array(
            Productive_Demo_Import_Global_Settings::theme_slug_productive_ecommerce, 
            Productive_Demo_Import_Global_Settings::theme_slug_productive_ecommerce_pro, 
            Productive_Demo_Import_Global_Settings::theme_slug_productive_business,
            Productive_Demo_Import_Global_Settings::theme_slug_productive_business_pro,
            Productive_Demo_Import_Global_Settings::theme_slug_stockist,
            Productive_Demo_Import_Global_Settings::theme_slug_stockist_pro
        );
    }
}