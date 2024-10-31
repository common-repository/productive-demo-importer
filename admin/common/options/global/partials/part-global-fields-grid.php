<?php
/**
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

// Start: Grid
function productive_global_section_grid_description_callback() {
?>
    <p>
        <h2><?php echo esc_html__( 'Breakpoints and Gap Settings for Grids', 'productive-demo-importer' ) ?></h2>
        <div><?php echo esc_html__( 'These setting are relevant to all grids that are generated by our plugins and themes.', 'productive-demo-importer' ) ?></div>
    </p>
<?php
}

/* ============ START Section fields ================= */
function productive_global_add_section_grid_fields($productive_global_section_grid_options) {
    
    // Gaps
    $args_field_1a = array(
        'label_for' => 'productive_global_grid_heading_gaps', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_gaps', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_gaps',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_1a
        );
    
    $args_field_1b = array( 
        'label_for' => 'productive_global_grid_row_gap', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_row_gap', // field id
        __( 'Row Gap (px)', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_row_gap',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_1b
        );
    
    $args_field_1c = array( 
        'label_for' => 'productive_global_grid_column_gap', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_column_gap', // field id
        __( 'Column Gap (px)', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_column_gap',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_1c
        );
    
    // Widescreen
    $args_field_1d = array(
        'label_for' => 'productive_global_grid_heading_widescreen', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_widescreen', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_widescreen',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_1d
        );
    
    $args_field_2a = array( 
        'label_for' => 'productive_global_grid_breakpoint_widescreen', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_breakpoint_widescreen', // field id
        __( 'Widescreen Breakpoint', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_breakpoint_widescreen',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_2a
        );
    
    $args_field_3a = array(
        'label_for' => 'productive_global_grid_cols_per_row_widescreen',
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_cols_per_row_widescreen', // field id
        __( 'Columns per row', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_cols_per_row_widescreen', // This callback function will be rendering this field. So, all html of this field will be rendered in this callback function.
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_3a
        );
    
    
    // Desktop
    $args_field_4a = array(
        'label_for' => 'productive_global_grid_heading_desktop', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_desktop', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_desktop',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_4a
        );
    
    $args_field_5a = array( 
        'label_for' => 'productive_global_grid_breakpoint_desktop', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_breakpoint_desktop', // field id
        __( 'Desktop Breakpoint', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_breakpoint_desktop',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_5a
        );
    
    $args_field_6a = array(
        'label_for' => 'productive_global_grid_cols_per_row_desktop',
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_cols_per_row_desktop', // field id
        __( 'Columns per row', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_cols_per_row_desktop', // This callback function will be rendering this field. So, all html of this field will be rendered in this callback function.
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_6a
        );
    
    // Tablet Landscape
    $args_field_7a = array(
        'label_for' => 'productive_global_grid_heading_tablet_landscape', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_tablet_landscape', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_tablet_landscape',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_7a
        );
    
    $args_field_8a = array( 
        'label_for' => 'productive_global_grid_breakpoint_tablet_landscape', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_breakpoint_tablet_landscape', // field id
        __( 'Tablet (Lanscape) Breakpoint', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_breakpoint_tablet_landscape',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_8a
        );
    
    $args_field_9a = array(
        'label_for' => 'productive_global_grid_cols_per_row_tablet_landscape',
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_cols_per_row_tablet_landscape', // field id
        __( 'Columns per row', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_cols_per_row_tablet_landscape', // This callback function will be rendering this field. So, all html of this field will be rendered in this callback function.
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_9a
        );
    
    // Tablet Portrait
    $args_field_10a = array(
        'label_for' => 'productive_global_grid_heading_tablet_portrait', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_tablet_portrait', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_tablet_portrait',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_10a
        );
    
    $args_field_11a = array( 
        'label_for' => 'productive_global_grid_breakpoint_tablet_portrait', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_breakpoint_tablet_portrait', // field id
        __( 'Tablet (Portrait) Breakpoint', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_breakpoint_tablet_portrait',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_11a
        );
    
    $args_field_12a = array(
        'label_for' => 'productive_global_grid_cols_per_row_tablet_portrait',
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_cols_per_row_tablet_portrait', // field id
        __( 'Columns per row', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_cols_per_row_tablet_portrait', // This callback function will be rendering this field. So, all html of this field will be rendered in this callback function.
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_12a
        );
    
    
    // Mobile Landscape
    $args_field_13a = array(
        'label_for' => 'productive_global_grid_heading_mobile_landscape', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_mobile_landscape', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_mobile_landscape',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_13a
        );
    
    $args_field_14a = array( 
        'label_for' => 'productive_global_grid_breakpoint_mobile_landscape', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_breakpoint_mobile_landscape', // field id
        __( 'Tablet (Lanscape) Breakpoint', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_breakpoint_mobile_landscape',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_14a
        );
    
    $args_field_15a = array(
        'label_for' => 'productive_global_grid_cols_per_row_mobile_landscape',
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_cols_per_row_mobile_landscape', // field id
        __( 'Columns per row', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_cols_per_row_mobile_landscape', // This callback function will be rendering this field. So, all html of this field will be rendered in this callback function.
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_15a
        );
    
    // Mobile Portrait
    $args_field_16a = array(
        'label_for' => 'productive_global_grid_heading_mobile_portrait', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_heading_mobile_portrait', // field id
        __( '', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_heading_mobile_portrait',
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_16a
        );
    
    $args_field_17a = array( 
        'label_for' => 'productive_global_grid_breakpoint_mobile_portrait', 
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_breakpoint_mobile_portrait', // field id
        __( 'Tablet (Portrait) Breakpoint', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_breakpoint_mobile_portrait',
        $productive_global_section_grid_options, 
        'productive_global_section_grid', 
        $args_field_17a
        );
    
    $args_field_18a = array(
        'label_for' => 'productive_global_grid_cols_per_row_mobile_portrait',
        'class'     => 'options_field_args_css_class'
    );
    add_settings_field(
        'productive_global_grid_cols_per_row_mobile_portrait', // field id
        __( 'Columns per row', 'productive-demo-importer' ), // Field label
        'productive_global_callback_grid_cols_per_row_mobile_portrait', // This callback function will be rendering this field. So, all html of this field will be rendered in this callback function.
        $productive_global_section_grid_options,   // The menu slug of the page that will display this field
        'productive_global_section_grid',   // Section name
        $args_field_18a
        );
}

function productive_global_callback_grid_heading_gaps( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Grid Gaps', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_row_gap( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_row_gap = '';
        if (isset( $options['productive_global_grid_row_gap']) ) {
            $productive_global_grid_row_gap = $options['productive_global_grid_row_gap'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_row_gap]" value="<?php echo esc_attr( $productive_global_grid_row_gap ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_column_gap( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_column_gap = '';
        if (isset( $options['productive_global_grid_column_gap']) ) {
            $productive_global_grid_column_gap = $options['productive_global_grid_column_gap'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_column_gap]" value="<?php echo esc_attr( $productive_global_grid_column_gap ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

/**
 * 
 * @param type Widescreen
 */
function productive_global_callback_grid_heading_widescreen( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Widescreens', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_breakpoint_widescreen( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_breakpoint_widescreen = '';
        if (isset( $options['productive_global_grid_breakpoint_widescreen']) ) {
            $productive_global_grid_breakpoint_widescreen = $options['productive_global_grid_breakpoint_widescreen'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_breakpoint_widescreen]" value="<?php echo esc_attr( $productive_global_grid_breakpoint_widescreen ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_cols_per_row_widescreen( $args ) {
    $options = productive_global_get_section_grid_options_object();
    $productive_global_grid_cols_per_row_widescreen = 1;
    if( isset( $options['productive_global_grid_cols_per_row_widescreen'] ) ) {
        $productive_global_grid_cols_per_row_widescreen = $options['productive_global_grid_cols_per_row_widescreen'];
    }
    ?>
        <select id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>"
                    name="productive_global_section_grid_options[productive_global_grid_cols_per_row_widescreen]">
            <?php
                $productive_global_get_grid_cols_per_row_widescreens = productive_global_get_popup_cols_per_row_values();
                foreach ( $productive_global_get_grid_cols_per_row_widescreens as $key => $productive_global_get_grid_cols_per_row_widescreen ) {
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $productive_global_grid_cols_per_row_widescreen, esc_attr( $key ), false ); ?>>
                       <?php echo esc_html( $productive_global_get_grid_cols_per_row_widescreen ); ?>
                    </option>
            <?php
                }
            ?>
        </select>
        <p>
            <?php echo esc_html__( 'Columns per row in a grid on Widescreens', 'productive-demo-importer' ); ?>
        </p>
    <?php
}


/**
 * 
 * @param Desktop
 */
function productive_global_callback_grid_heading_desktop( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Desktop', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_breakpoint_desktop( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_breakpoint_desktop = '';
        if (isset( $options['productive_global_grid_breakpoint_desktop']) ) {
            $productive_global_grid_breakpoint_desktop = $options['productive_global_grid_breakpoint_desktop'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_breakpoint_desktop]" value="<?php echo esc_attr( $productive_global_grid_breakpoint_desktop ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_cols_per_row_desktop( $args ) {
    $options = productive_global_get_section_grid_options_object();
    $productive_global_grid_cols_per_row_desktop = 1;
    if( isset( $options['productive_global_grid_cols_per_row_desktop'] ) ) {
        $productive_global_grid_cols_per_row_desktop = $options['productive_global_grid_cols_per_row_desktop'];
    }
    ?>
        <select id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>"
                    name="productive_global_section_grid_options[productive_global_grid_cols_per_row_desktop]">
            <?php
                $productive_global_get_grid_cols_per_row_desktops = productive_global_get_popup_cols_per_row_values();
                foreach ( $productive_global_get_grid_cols_per_row_desktops as $key => $productive_global_get_grid_cols_per_row_desktop ) {
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $productive_global_grid_cols_per_row_desktop, esc_attr( $key ), false ); ?>>
                       <?php echo esc_html( $productive_global_get_grid_cols_per_row_desktop ); ?>
                    </option>
            <?php
                }
            ?>
        </select>
        <p>
            <?php echo esc_html__( 'Columns per row in a grid on Widescreens', 'productive-demo-importer' ); ?>
        </p>
    <?php
}


/**
 * 
 * @param Tablet Landscape
 */
function productive_global_callback_grid_heading_tablet_landscape( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Tablet (Landscape)', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_breakpoint_tablet_landscape( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_breakpoint_tablet_landscape = '';
        if (isset( $options['productive_global_grid_breakpoint_tablet_landscape']) ) {
            $productive_global_grid_breakpoint_tablet_landscape = $options['productive_global_grid_breakpoint_tablet_landscape'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_breakpoint_tablet_landscape]" value="<?php echo esc_attr( $productive_global_grid_breakpoint_tablet_landscape ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_cols_per_row_tablet_landscape( $args ) {
    $options = productive_global_get_section_grid_options_object();
    $productive_global_grid_cols_per_row_tablet_landscape = 1;
    if( isset( $options['productive_global_grid_cols_per_row_tablet_landscape'] ) ) {
        $productive_global_grid_cols_per_row_tablet_landscape = $options['productive_global_grid_cols_per_row_tablet_landscape'];
    }
    ?>
        <select id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>"
                    name="productive_global_section_grid_options[productive_global_grid_cols_per_row_tablet_landscape]">
            <?php
                $productive_global_get_grid_cols_per_row_tablet_landscapes = productive_global_get_popup_cols_per_row_values();
                foreach ( $productive_global_get_grid_cols_per_row_tablet_landscapes as $key => $productive_global_get_grid_cols_per_row_tablet_landscape ) {
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $productive_global_grid_cols_per_row_tablet_landscape, esc_attr( $key ), false ); ?>>
                       <?php echo esc_html( $productive_global_get_grid_cols_per_row_tablet_landscape ); ?>
                    </option>
            <?php
                }
            ?>
        </select>
        <p>
            <?php echo esc_html__( 'Columns per row in a grid on Tablet (Landscape)', 'productive-demo-importer' ); ?>
        </p>
    <?php
}


/**
 * 
 * @param Tablet Portrait
 */
function productive_global_callback_grid_heading_tablet_portrait( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Tablet (Portrait)', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_breakpoint_tablet_portrait( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_breakpoint_tablet_portrait = '';
        if (isset( $options['productive_global_grid_breakpoint_tablet_portrait']) ) {
            $productive_global_grid_breakpoint_tablet_portrait = $options['productive_global_grid_breakpoint_tablet_portrait'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_breakpoint_tablet_portrait]" value="<?php echo esc_attr( $productive_global_grid_breakpoint_tablet_portrait ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_cols_per_row_tablet_portrait( $args ) {
    $options = productive_global_get_section_grid_options_object();
    $productive_global_grid_cols_per_row_tablet_portrait = 1;
    if( isset( $options['productive_global_grid_cols_per_row_tablet_portrait'] ) ) {
        $productive_global_grid_cols_per_row_tablet_portrait = $options['productive_global_grid_cols_per_row_tablet_portrait'];
    }
    ?>
        <select id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>"
                    name="productive_global_section_grid_options[productive_global_grid_cols_per_row_tablet_portrait]">
            <?php
                $productive_global_get_grid_cols_per_row_tablet_portraits = productive_global_get_popup_cols_per_row_values();
                foreach ( $productive_global_get_grid_cols_per_row_tablet_portraits as $key => $productive_global_get_grid_cols_per_row_tablet_portrait ) {
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $productive_global_grid_cols_per_row_tablet_portrait, esc_attr( $key ), false ); ?>>
                       <?php echo esc_html( $productive_global_get_grid_cols_per_row_tablet_portrait ); ?>
                    </option>
            <?php
                }
            ?>
        </select>
        <p>
            <?php echo esc_html__( 'Columns per row in a grid on Tablet (Portrait)', 'productive-demo-importer' ); ?>
        </p>
    <?php
}

/**
 * 
 * @param Mobile Landscape
 */
function productive_global_callback_grid_heading_mobile_landscape( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Mobile (Landscape)', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_breakpoint_mobile_landscape( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_breakpoint_mobile_landscape = '';
        if (isset( $options['productive_global_grid_breakpoint_mobile_landscape']) ) {
            $productive_global_grid_breakpoint_mobile_landscape = $options['productive_global_grid_breakpoint_mobile_landscape'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_breakpoint_mobile_landscape]" value="<?php echo esc_attr( $productive_global_grid_breakpoint_mobile_landscape ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_cols_per_row_mobile_landscape( $args ) {
    $options = productive_global_get_section_grid_options_object();
    $productive_global_grid_cols_per_row_mobile_landscape = 1;
    if( isset( $options['productive_global_grid_cols_per_row_mobile_landscape'] ) ) {
        $productive_global_grid_cols_per_row_mobile_landscape = $options['productive_global_grid_cols_per_row_mobile_landscape'];
    }
    ?>
        <select id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>"
                    name="productive_global_section_grid_options[productive_global_grid_cols_per_row_mobile_landscape]">
            <?php
                $productive_global_get_grid_cols_per_row_mobile_landscapes = productive_global_get_popup_cols_per_row_values();
                foreach ( $productive_global_get_grid_cols_per_row_mobile_landscapes as $key => $productive_global_get_grid_cols_per_row_mobile_landscape ) {
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $productive_global_grid_cols_per_row_mobile_landscape, esc_attr( $key ), false ); ?>>
                       <?php echo esc_html( $productive_global_get_grid_cols_per_row_mobile_landscape ); ?>
                    </option>
            <?php
                }
            ?>
        </select>
        <p>
            <?php echo esc_html__( 'Columns per row in a grid on Mobile (Landscape)', 'productive-demo-importer' ); ?>
        </p>
    <?php
}


/**
 * 
 * @param Mobile Portrait
 */
function productive_global_callback_grid_heading_mobile_portrait( $args ) {
    ?>
    <h3><?php echo esc_html__( 'Mobile (Portrait)', 'productive-demo-importer' ) ?></h3>
   <?php
}

function productive_global_callback_grid_breakpoint_mobile_portrait( $args ) {
        $options = productive_global_get_section_grid_options_object();
        $productive_global_grid_breakpoint_mobile_portrait = '';
        if (isset( $options['productive_global_grid_breakpoint_mobile_portrait']) ) {
            $productive_global_grid_breakpoint_mobile_portrait = $options['productive_global_grid_breakpoint_mobile_portrait'];
        }
    ?>
    <input type="number" name="productive_global_section_grid_options[productive_global_grid_breakpoint_mobile_portrait]" value="<?php echo esc_attr( $productive_global_grid_breakpoint_mobile_portrait ); ?>" size="20" id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>" />
   <?php
}

function productive_global_callback_grid_cols_per_row_mobile_portrait( $args ) {
    $options = productive_global_get_section_grid_options_object();
    $productive_global_grid_cols_per_row_mobile_portrait = 1;
    if( isset( $options['productive_global_grid_cols_per_row_mobile_portrait'] ) ) {
        $productive_global_grid_cols_per_row_mobile_portrait = $options['productive_global_grid_cols_per_row_mobile_portrait'];
    }
    ?>
        <select id="<?php echo esc_attr( $args['label_for'] ); ?>" class="<?php echo esc_attr( $args['class'] ); ?>"
                    name="productive_global_section_grid_options[productive_global_grid_cols_per_row_mobile_portrait]">
            <?php
                $productive_global_get_grid_cols_per_row_mobile_portraits = productive_global_get_popup_cols_per_row_values();
                foreach ( $productive_global_get_grid_cols_per_row_mobile_portraits as $key => $productive_global_get_grid_cols_per_row_mobile_portrait ) {
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $productive_global_grid_cols_per_row_mobile_portrait, esc_attr( $key ), false ); ?>>
                       <?php echo esc_html( $productive_global_get_grid_cols_per_row_mobile_portrait ); ?>
                    </option>
            <?php
                }
            ?>
        </select>
        <p>
            <?php echo esc_html__( 'Columns per row in a grid on Mobile (Portrait)', 'productive-demo-importer' ); ?>
        </p>
    <?php
}

/* ============ END Section fields ================= */
// Stop: Grid