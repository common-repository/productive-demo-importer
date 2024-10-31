<?php
/**
 *
 * @package productive-demo-importer
 */

if ( !defined('ABSPATH') ) {
	die();
}

/**
 * Method productive_demo_importer_save_demo_importer ''.
 */
function productive_demo_importer_save_demo_importer() {
        global $wpdb;
	$response = array();
        $insert_counter = 0;
	if ( 'POST' == $_SERVER['REQUEST_METHOD'] &&
            isset( $_POST['nonce'] ) && wp_verify_nonce($_POST['nonce'], 'productive_demo_importer_admin_scripts') ) {
                $theme_slug    = sanitize_text_field( $_POST['theme'] );
                $h    = sanitize_text_field( $_POST['h'] );
                $m    = sanitize_text_field( $_POST['m'] );
            
            $is_valid_theme = productive_demo_importer_is_valid_theme($theme_slug);
            if ( $is_valid_theme ) {
                $theme_base_path = PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/';
                if ( $h == 1 ) {
                    $insert_counter = productive_demo_importer_import_theme_demo( $theme_slug );
                }
                if ( $m == 1 ) {
                    $insert_counter += productive_demo_importer_import_terms( $theme_base_path );
                    $insert_counter += productive_demo_importer_import_posts( $theme_base_path );
                    $insert_counter += productive_demo_importer_import_postmeta( $theme_base_path );
                    $insert_counter += productive_demo_importer_import_term_taxonomy( $theme_base_path );
                    $insert_counter += productive_demo_importer_import_term_relationships( $theme_base_path );
                }
                $response['code'] = $insert_counter;
            } else {
                // Unrecognised Theme
                $response['code'] = 100;
            }
	} else {
            // Invalid request
            $response['code'] = 10;
	}
        $import_result_message = productive_demo_importer_save_demo_importer_result_message($response);
        wp_send_json_success($import_result_message);        
	wp_die();
}
add_action( 'wp_ajax_productive_demo_importer_save_demo_importer', 'productive_demo_importer_save_demo_importer' );


function productive_demo_importer_save_demo_importer_result_message($response) {
    $msg = intval( $response['code'] );
    $import_result_message = array(
        'code' => 0,
        'result' => __('Unable to complete your request - please try again later', 'productive-demo-importer')
    );
    
    if ( $msg == 1 || $msg == 5 || $msg == 6 ) {
        $msg = 1;
    }
    
    switch ($msg) {
        case $msg == 1:
            // Success
            $import_result_message['result'] = esc_html__('Demo data has been successfully imported', 'productive-demo-importer');            
            $import_result_message['code'] = 1;
            break;
        
        case $msg == 100:
            $import_result_message['result'] = esc_html__('Selected Theme is not recognised', 'productive-demo-importer');
            break;
        
        default:
            // Any other error
            break;
    }
    return $import_result_message;
}

function productive_demo_importer_is_valid_theme( $theme_slug ) {
    return in_array($theme_slug, Productive_Demo_Import_Global_Settings::get_valid_themes_slugs() );
}

/**
 * Refresh theme customiser 
 * @return int
 */
function productive_demo_importer_import_theme_demo( $theme_slug ) {
    $json_content = file_get_contents( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/' . $theme_slug . '/' . $theme_slug . '-demo.json' );    
    $items = json_decode($json_content, true);
    // Attempt add, if not already
    add_option('theme_mods_productive-ecommerce', '');
    add_option('theme_mods_productive-ecommerce-pro', '');
    
    $counter = 0;
    foreach ($items as $item) {
        $query_val=array(
            'option_name'=> $item['option_name'],
            'option_value'=> unserialize($item['option_value']),
            'autoload' => $item['autoload']
        );
        $updated = update_option( $query_val['option_name'], $query_val['option_value'], $query_val['autoload'] );
        if ( $updated ) {
            // saved successfully
            $counter++;
        }
    }
    $response = 0;
    if (count($items) == $counter ) {
        $response = 1;
    } else {
        $response = 0;
    }
    return $response;
}

/**
 * Add menu term
 * @global type $wpdb
 * @return int
 */
function productive_demo_importer_import_terms() {
    global $wpdb;
    $table = $wpdb->prefix . PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_TERMS;
    
    $json_content = file_get_contents( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/generic/terms.json' );    
    $items = json_decode($json_content, true);
    
    $counter = 0;
    foreach ($items as $item) {
        $query_val=array(
            'term_id'=> $item['term_id'],
            'name'=> $item['name'],
            'slug'=> $item['slug'],
            'term_group' => $item['term_group']
        );
        $inserted = $wpdb->insert($table, $query_val);
        
        if ( $inserted || 1 == $inserted ) {
            // saved successfully
            $counter++;
        }
    }
    
    $response = 0;
    if (count($items) == $counter ) {
        $response = 1;
    } else {
        $response = 0;
    }
    
    return $response;
}


/**
 * Add menu term
 * @global type $wpdb
 * @return int
 */
function productive_demo_importer_import_term_taxonomy() {
    global $wpdb;
    $table = $wpdb->prefix . PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_TERM_TAXONOMY;
    
    $json_content = file_get_contents( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/generic/term_taxonomy.json' );    
    $items = json_decode($json_content, true);
    
    $counter = 0;
    foreach ($items as $item) {
        $query_val=array(
            'term_taxonomy_id'=> $item['term_taxonomy_id'],
            'term_id'=> $item['term_id'],
            'taxonomy'=> $item['taxonomy'],
            'description' => $item['description'],
            'parent' => $item['parent'],
            'count' => $item['count']
        );
        $inserted = $wpdb->insert($table, $query_val);
        if ( $inserted || 1 == $inserted ) {
            // saved successfully
            $counter++;
        }
    }
    
    $response = 0;
    if (count($items) == $counter ) {
        $response = 1;
    } else {
        $response = 0;
    }
    
    return $response;
}

/**
 * Add menu term
 * @global type $wpdb
 * @return int
 */
function productive_demo_importer_import_term_relationships($theme_base_path) {
    global $wpdb;
    $table = $wpdb->prefix . PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_TERM_RELATIONSHIPS;
    
    $json_content = file_get_contents( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/generic/term_relationships.json' );    
    $items = json_decode($json_content, true);
    
    $counter = 0;
    foreach ($items as $item) {
        $query_val=array(
            'object_id'=> $item['object_id'],
            'term_taxonomy_id'=> $item['term_taxonomy_id'],
            'term_order'=> $item['term_order']
        );
        $inserted = $wpdb->insert($table, $query_val);
        if ( $inserted || 1 == $inserted ) {
            // saved successfully
            $counter++;
        }
    }
    
    $response = 0;
    if (count($items) == $counter ) {
        $response = 1;
    } else {
        $response = 0;
    }
    
    return $response;
}

/**
 * Add menu term
 * @global type $wpdb
 * @return int
 */
function productive_demo_importer_import_posts($theme_base_path) {
    global $wpdb;
    $table = $wpdb->prefix . PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_POSTS;
    
    $json_content = file_get_contents( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/generic/posts.json' );    
    $items = json_decode($json_content, true);
    
    $counter = 0;
    foreach ($items as $item) {
        $query_val=array(
            'ID'=> $item['ID'],
            'post_title'=> $item['post_title'],
            'post_status'=> $item['post_status'],
            'post_name'=> $item['post_name'],
            'post_parent'=> $item['post_parent'],
            'guid'=> $item['guid'],
            'post_type'=> $item['post_type']
        );
        $inserted = $wpdb->insert($table, $query_val);
        if ( $inserted || 1 == $inserted ) {
            // saved successfully
            $counter++;
        }
    }
    
    $response = 0;
    if (count($items) == $counter ) {
        $response = 1;
    } else {
        $response = 0;
    }
    
    return $response;
}

/**
 * Add menu term
 * @global type $wpdb
 * @return int
 */
function productive_demo_importer_import_postmeta($theme_base_path) {
    global $wpdb;
    $table = $wpdb->prefix . PRODUCTIVE_DEMO_IMPORTER_DATABASE_NAME_POSTMETA;
    
    $json_content = file_get_contents( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_PATH . 'data/generic/postmeta.json' );    
    $items = json_decode($json_content, true);
    
    $counter = 0;
    foreach ($items as $item) {
        $query_val=array(
            'meta_id'=> $item['meta_id'],
            'post_id'=> $item['post_id'],
            'meta_key'=> $item['meta_key'],
            'meta_value'=> $item['meta_value']
        );
        $inserted = $wpdb->insert($table, $query_val);
        if ( $inserted || 1 == $inserted ) {
            // saved successfully
            $counter++;
        }
    }
    
    $response = 0;
    if (count($items) == $counter ) {
        $response = 1;
    } else {
        $response = 0;
    }
    
    return $response;
}
