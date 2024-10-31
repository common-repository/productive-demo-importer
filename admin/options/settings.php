<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

require PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'admin/common/options/global/global-settings-admin.php';

require PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'admin/options/partials/section-import-steps.php'; 

$productive_demo_importer_admin_navbar_title = PRODUCTIVE_DEMO_IMPORTER_CURRENT_PLUGIN_NAME . esc_html__( ' Admin Settings and Options', 'productive-demo_importer' );
$productive_demo_importer_admin_topmenu_title = esc_html('Productive...');


add_action('wp_loaded', 'productive_demo_importer_goto_plugin_options');
function productive_demo_importer_goto_plugin_options() {
    if( isset( $_GET[ 'page' ] ) && ( $_GET[ 'page' ] == PRODUCTIVE_DEMO_IMPORTER_ADMIN_OVERVIEW_REQUEST_URI && !isset( $_GET[ 'tab' ] ) ) ) {
        wp_safe_redirect( add_query_arg( array( 'page' => PRODUCTIVE_DEMO_IMPORTER_ADMIN_PAGE_REQUEST_URI .'&tab=section_about_tab' ), admin_url( 'admin.php' ) ) );
    }
}


function productive_demo_importer_plugin_options_render_page_menu() {
    
    global $productive_demo_importer_admin_navbar_title;
    global $productive_demo_importer_admin_topmenu_title;
        
    $menu_title         = PRODUCTIVE_DEMO_IMPORTER_CURRENT_PLUGIN_NAME;
    $capability         = 'administrator';          // allowed user role.
    $icon_url           = 'dashicons-carrot';
    $position           = 60; // Just after the Appearnce Page Menu
    
    // Plugin Custom Top-Level Menu & SubMenu
    // Register a new section in the "productive_demo_importer" page.
    add_menu_page(
        $productive_demo_importer_admin_navbar_title, // Browser navbar title
        $productive_demo_importer_admin_topmenu_title, // Sidebar menu text
        $capability,
        PRODUCTIVE_DEMO_IMPORTER_ADMIN_OVERVIEW_REQUEST_URI, // Unique id, which will be used to bind submenus to this top menu
        'productive_demo_importer_plugin_options_render_page_menu_html', // Callback function for the menu
        $icon_url, 
        $position,
    );
   
    // Plugin Custom Top-Level Menu & SubMenu
    // Register a new section in the "productive_demo_importer" page.
    add_submenu_page(
        PRODUCTIVE_DEMO_IMPORTER_ADMIN_OVERVIEW_REQUEST_URI,
        $productive_demo_importer_admin_navbar_title, // Browser navbar title
        $menu_title, // Sidebar menu text
        $capability, 
        PRODUCTIVE_DEMO_IMPORTER_ADMIN_PAGE_REQUEST_URI, // Unique id
        'productive_demo_importer_plugin_options_render_page_menu_html' // Callback function for the menu
    );
}
add_action( 'admin_menu', 'productive_demo_importer_plugin_options_render_page_menu' );


function productive_demo_importer_options_main_init() {
    // Register section 1
    
}
add_action( 'admin_init', 'productive_demo_importer_options_main_init' );


function productive_demo_importer_plugin_options_render_page_menu_html() {
    // check user capabilities
    if ( !current_user_can( 'manage_options' ) ) {
        add_settings_error( 'productive_demo_importer_admin_messages', 'productive_demo_importer_admin_message', esc_html__( 'You do not have permision to access this page', 'productive-demo-importer' ), 'error' );
        settings_errors( 'productive_demo_importer_admin_messages' );
    } else {
    
    // error/update messages
    settings_errors( 'productive_demo_importer_admin_messages' );
    ?>
    
    <?php 
        $active_tab = 'section_about_tab';
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = sanitize_text_field( $_GET[ 'tab' ] );
        }
    ?>
    
    <div class="wrap productive-global-options-page-wrapper">
        <div class="page-wrapper-heading-container">
            <div class="page-wrapper-heading">
                <h1>
                    <img style="vertical-align: middle; margin-right: 10px; border-radius: 5px;" src="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'public/images/plugin-icon.png' ?>" alt="" width="40px" height="auto" />
                    <?php echo PRODUCTIVE_DEMO_IMPORTER_CURRENT_PLUGIN_NAME; ?>
                    <a target="_blank" class="page-wrapper-heading-get-pro" href="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DOCUMENTATION_URL; ?>"><?php echo esc_html__( 'Documentation', 'productive-demo-importer' ); ?></a>
                    <a target="_blank" class="page-wrapper-heading-get-pro" href="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_SUPPORT_URL; ?>"><?php echo esc_html__( 'Get Support', 'productive-demo-importer' ); ?></a>
                </h1>
            </div>
            <div class="page-wrapper-heading-version">
                <div><?php echo 'v' . PRODUCTIVE_DEMO_IMPORTER_VERSION; ?></div>
            </div>
        </div>
        <div class="page-wrapper-body">
            
            <div class="page-wrapper-options-error">
                <?php settings_errors('productive_demo_importer_section_1_options'); ?>
            </div>
            <?php
                $section_about_tab = '';
                if ( $active_tab === 'section_about_tab' ) {
                    $section_about_tab = 'nav-tab-active';
                }
                $section_1_options_tab = '';
                if ( $active_tab === 'section_1_options_tab' ) {
                    $section_1_options_tab = 'nav-tab-active';
                }
            ?>
            <h2 class="nav-tab-wrapper">
                <a href="?page=<?php echo PRODUCTIVE_DEMO_IMPORTER_ADMIN_PAGE_REQUEST_URI; ?>&tab=section_about_tab" class="nav-tab <?php echo $active_tab == 'section_about_tab' ? 'nav-tab-active' : ''; ?>"><?php echo PRODUCTIVE_DEMO_IMPORTER_OPTION_TAB_ABOUT_TITLE; ?></a>
            </h2>
            <div class="page-wrapper-body-form">    
                <form name="productive_demo_importer_options_form" method="post">
                    <?php
                        if ( $active_tab == 'section_about_tab' ) {
                            
                            productive_demo_importer_section_get_about();
                            
                        } else if ( $active_tab == 'section_1_options_tab' ) { ?>
                            <?php
                                settings_fields( 'productive_demo_importer_section_1_options' );
                                do_settings_sections( 'productive_demo_importer_section_1_options' );
                           ?>

                            <div class="warning-before-action-box"><?php echo esc_html( 'For best result, install and activate the selected theme before importing the demo content.', 'productive-demo-importer' ) ?></div>
                            <div id="info-is-loading-container-outer" class="info-is-loading-container-outer noned">
                                    <div id="info-is-loading-container" class="info-is-loading-container">
                                    <div class="demoimporter-content-overlay noned"><div class="transformer-container"><div class="transformer"></div></div></div>
                            <div id="is_loading_error_msg" class="noned"></div>
                            <div id="is_loading_success_msg" class="noned"></div>
                            <div id="is_loading_info_msg" class="noned"></div>
                            </div>
                            </div>

                           <?php 
                                submit_button(esc_html( 'Start Import', 'productive-demo-importer' ), 'primary', 'demo_import_button');
                            ?>
                        <?php } ?>
                </form>
            </div>
            
            <div class="leave-a-review-box">
                <?php _e( 'Support our efforts, interact with fellow users, and contribute to enhancing ', 'productive-demo-importer' ); ?>
                <?php echo PRODUCTIVE_DEMO_IMPORTER_CURRENT_PLUGIN_NAME; ?>.
                <a target="_blank" href="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_REVIEW_ON_REPO_URL; ?>">
                    <?php _e( 'Kindly submit a review', 'productive-demo-importer' ); ?>
               </a>
            </div>
            
        </div>
    </div>
    <?php
    }
}
