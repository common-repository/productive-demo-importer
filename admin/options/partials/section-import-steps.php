<?php
/**
 * @package productive-demo-importer
 */

function productive_demo_importer_section_get_about() {
    ?>
    <div class="productiveminds_double_grid column_70_30">
        <div class="productiveminds_double_grid_content">
            <?php
                productive_demo_importer_about_section_intro();
                productive_demo_importer_section_get_about_main_content();
            ?>
        </div>
        <div class="productiveminds_double_grid_content">
            <?php
                productive_demo_importer_about_section_about();
            ?>
        </div>
    </div>
<?php
}

function productive_demo_importer_about_section_intro() {
    ?>
    <h2 class="">
        <?php echo __( 'How To Use ', 'productive-demo-importer' ) . PRODUCTIVE_DEMO_IMPORTER_CURRENT_PLUGIN_NAME; ?>
    </h2>
<?php
}

function productive_demo_importer_section_get_about_main_content() {
    ?>
    <div class="productive-global-admin-content-container">    
        <div class="get-pro-features-box-list">

            <div class="options-section-container-top">

                <h3><?php echo esc_html__( 'Getting Started', 'productive-demo-importer' ) ?></h3>

                <div class="warning-content bordered-left-info">
                    <?php 
                        echo esc_html( 'This demo importer showcases the theme&#39;s capabilities; it&#39;s not designed for website management. Using the demo content works best as an introductory guide or in testing scenarios. ', 'productive-demo-importer' );
                        echo esc_html( 'Be aware that the newly imported content might replace your existing content. ', 'productive-demo-importer' );
                    ?>
                    <br>
                    <br>
                    <?php 
                        echo esc_html( 'To bring in the theme&#39;s demo content, please follow the three steps detailed below.', 'productive-demo-importer' );
                    ?>
                    <?php if ( !class_exists( 'woocommerce' ) ) { ?>
                    <br>
                    <b>
                        <?php echo esc_html( 'First, ', 'productive-demo-importer' ); ?>
                        <a target="_blank" href="https://wordpress.org/plugins/woocommerce">
                            <?php echo esc_html( 'install WooCommerce', 'productive-demo-importer' ) ?></a><?php echo esc_html( ', then continue to part 1 below.', 'productive-demo-importer' ); ?>
                    </b>
                    <?php } ?>
                </div>
            </div>


            <div class="options-section-container">
                <h3><?php echo esc_html( 'Step 1. Activate Essential Plugins', 'productive-demo-importer' ); ?></h3>
            </div>

            <ol class="get-pro-features-box-list">
                <?php
                    if ( 1 === productive_demo_importer_is_tgm_complete() ) {
                        // TGM active - all installed
                ?> 
                    <li>
                        <?php echo esc_html( 'This part has been successfully completed', 'productive-demo-importer' ); ?>           
                    </li>
                <?php
                    } else if ( 2 === productive_demo_importer_is_tgm_complete() ) {
                        // TGM active, but some not installed
                ?>
                    <li>
                        <?php echo esc_html( 'Install ', 'productive-demo-importer' ); ?>    
                        <a href="?page=<?php echo productive_demo_importer_get_tpma_menu(); ?>">
                            <?php echo esc_html( 'theme&#39;s required plugins here.', 'productive-demo-importer' ) ?></a>
                        <?php echo esc_html( 'Ensure they are activated.', 'productive-demo-importer' ); ?>           
                    </li>
                    <li>
                        <?php echo esc_html( 'Review the list, then install and activate the suggested plugins. It&#39;s crucial to install the recommended WordPress Importer plugin to facilitate demo Blog Posts and WooCommerce Product imports in the subsequent steps.', 'productive-demo-importer' ); ?>           
                    </li>
                <?php } else { ?>
                    <?php if( !function_exists( 'productive_style_is_active' ) ) { ?>
                    <li>
                        <?php echo esc_html( 'Install and activate  ', 'productive-demo-importer' ) ?>
                        <a target="_blank" href="https://wordpress.org/plugins/productive-style">
                            <?php echo esc_html( 'Productive Style', 'productive-demo-importer' ) ?></a>
                    </li>
                    <?php } ?>
                    <li>
                        <?php echo esc_html( 'Install and activate ', 'productive-demo-importer' ) ?>
                        <a target="_blank" href="https://wordpress.org/plugins/wordpress-importer">
                            <?php echo esc_html( 'WordPress Importer plugin.', 'productive-demo-importer' ) ?></a>
                    </li>
                <?php } ?>
            </ol>

            <div class="options-section-container">
                <h3><?php echo esc_html( 'Step 2. Import the Demo Content', 'productive-demo-importer' ); ?></h3>
            </div>
            <ol class="get-pro-features-box-list">
                <li>
                    <div>
                        <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI ); ?>data/xml/productive-demo-content-v6-ecommerce.xml.zip">
                            <?php echo esc_html( 'Download our e-commerce demo data here, ', 'productive-demo-importer' ) ?>
                        </a>
                        <?php echo esc_html( 'if you require WooCommerce content. ', 'productive-demo-importer' ) ?>
                    </div>
                    <div>
                        <?php echo esc_html( 'Or,', 'productive-demo-importer' ) ?>
                    </div>
                    <div>
                        <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI ); ?>data/xml/productive-demo-content-v6-standard.xml.zip">
                            <?php echo esc_html( 'Download our standard demo data here, ', 'productive-demo-importer' ) ?>
                        </a>
                        <?php echo esc_html( 'if you do not require WooCommerce content.', 'productive-demo-importer' ) ?>
                    </div>
                </li>
                <li>
                    <?php echo esc_html( 'Uncompress and save the XML within the downloaded file to your local device.', 'productive-demo-importer' ); ?>           
                </li>
                <li>
                    <?php echo esc_html( 'Install and activate the ', 'productive-demo-importer' ); ?>
                    <a target="_blank" href="https://wordpress.org/plugins/wordpress-importer">
                        <?php echo esc_html( 'WordPress Importer plugin', 'productive-demo-importer' ) ?>.
                    </a>
                </li>
                <li>
                    <?php echo esc_html( 'Utilize the WordPress Importer plugin to import the XML file you uncompressed above. ', 'productive-demo-importer' ); ?>           
                </li>
                <li>
                    <?php echo esc_html( 'If you need additional guidance with the WordPress Importer, ', 'productive-demo-importer' ); ?>   
                    <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_DEMO_IMPORTER_PLUGIN_XML_IMPORT_DOCUMENTATION_URL ); ?>">
                        <?php echo esc_html( 'our WordPress Importer documentation here', 'productive-demo-importer' ) ?></a>
                    <?php echo esc_html( ' offers a detailed walkthrough.', 'productive-demo-importer' ); ?>         
                </li>
            </ol>


            <div class="options-section-container">
                <h3><?php echo esc_html( 'Step 3. Configure Header and Footer Navigation Menus', 'productive-demo-importer' ); ?></h3>
            </div>

            <ol class="get-pro-features-box-list">
                <li>
                    <?php echo esc_html( 'Navigate to Appearance => Menus.', 'productive-demo-importer' ); ?>        
                </li>
                <li>
                    <?php echo esc_html( 'Assign the "Primary Header Menu" as the "Primary" (Header Menu).', 'productive-demo-importer' ); ?>        
                </li>   
                <li>
                    <?php echo esc_html( 'Designate the "Primary Footer Menu" as the "Primary Footer Menu".', 'productive-demo-importer' ); ?>        
                </li>
                <li>
                    <?php echo esc_html( 'Designate the "Secondary Header Menu" as the "Secondary Header Menu".', 'productive-demo-importer' ); ?>        
                </li>
                <li>
                    <?php echo esc_html( 'Designate the "Secondary Footer Menu" as the "Secondary Footer Menu".', 'productive-demo-importer' ); ?>        
                </li>
            </ol>
            
            <div class="options-section-container">
                <div>
                    <?php echo esc_html( 'Your website should now have similar content as our demo site.', 'productive-demo-importer' ); ?>
                </div>
                <div>
                    <?php echo esc_html( 'Should you need additional assistance, feel free to consult the step-by-step guide available via the documentation button at the top of this page.', 'productive-demo-importer' ); ?>
                </div>
            </div>

        </div>
        <div class="clear_min"></div>

    </div>
    
    <?php
}


function productive_demo_importer_about_section_about() {
    ?>
    <div class="productive-global-admin-content-container">
        <div class="productiveminds_double_grid column_100">
            <div class="productiveminds_double_grid_content">
                <div class="get-pro-features-box-list">
                    <h3 class=""><?php echo __( 'Leave a Review', 'productive-demo-importer' ); ?></h3>
                    <div>
                        <?php echo __( 'Share Your Insights! Get featured on our website and help enhance our effort.', 'productive-demo-importer' ); ?>
                    </div>
                    <div class="productive-global-block-link-container">
                        <?php
                            if( function_exists( 'productive_demo_importer_extra_is_active' ) ) { 
                                $plugin_review_url = PRODUCTIVE_DEMO_IMPORTER_PLUGIN_FEATURES_OR_BUY_URL;
                            } else {
                                $plugin_review_url = PRODUCTIVE_DEMO_IMPORTER_PLUGIN_REVIEW_ON_REPO_URL;
                            }
                        ?>
                        <a target="_blank" class="standard-link" href="<?php echo esc_url( $plugin_review_url ); ?>">
                            <?php echo esc_html__( 'Kindly submit a review', 'productive-demo-importer' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear_min"></div>
    </div>
    <div class="productive-global-admin-content-container">
        <div class="productiveminds_double_grid column_100">
            <div class="productiveminds_double_grid_content">
                <div class="get-pro-features-box-list">
                    <h3 class=""><?php echo __( 'Get Support', 'productive-demo-importer' ); ?></h3>
                    <div>
                        <?php echo __( 'Contact us effortlessly for timely assistance.', 'productive-demo-importer' ); ?>
                    </div>
                    <div class="productive-global-block-link-container">
                        <a target="_blank" class="standard-link" href="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_SUPPORT_URL; ?>">
                            <?php echo esc_html__( 'Access Support', 'productive-demo-importer' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear_min"></div>
    </div>
    <div class="productive-global-admin-content-container">
        <div class="productiveminds_double_grid column_100">
            <div class="productiveminds_double_grid_content">
                <div class="get-pro-features-box-list">
                    <h3 class=""><?php echo __( 'Documentation', 'productive-demo-importer' ); ?></h3>
                    <div>
                        <?php echo __( 'Seeking user guides for configuring this plugin on your website?', 'productive-demo-importer' ); ?>
                    </div>
                    <div class="productive-global-block-link-container">
                        <a target="_blank" class="standard-link" href="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_DOCUMENTATION_URL; ?>">
                            <?php echo esc_html__( 'Access documentation', 'productive-demo-importer' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear_min"></div>
    </div>
    <div class="productive-global-admin-content-container">
        <div class="productiveminds_double_grid column_100">
            <div class="productiveminds_double_grid_content">
                <div class="get-pro-features-box-list dense">
                    
                    <h3 class=""><?php echo __( 'Our Plugins', 'productive-demo-importer' ); ?></h3>
                    
                    <div class="items-in-rows">
                        <div class="productiveminds_section-container columns_left_icon-50px closeup">
                            <div>
                                <a target="_blank" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_OUR_URL; ?>">
                                    <img src="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'public/images/productivemedia/productive-style.webp' ?>" alt="" width="100%" height="auto" />
                                </a>
                            </div>
                            <div>
                                <div class="small-heading">
                                    <?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TITLE; ?>
                                </div>
                                <div class="small-text">
                                    <?php echo __( 'Web pages and content building tools...', 'productive-demo-importer' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="productive-global-block-link-container">
                            <?php if( !function_exists( 'productive_style_is_active' ) ) { ?>
                                <a target="_blank" class="standard-link" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_REPO_URL; ?>">
                                    <?php echo esc_html__( 'Install plugin', 'productive-demo-importer' ); ?>
                                </a>
                            <?php } else { ?>
                                <a class="standard-link" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_ADMIN_OPTIONS_LINK; ?>">
                                    <?php echo esc_html__( 'Customize plugin', 'productive-demo-importer' ); ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <?php if( class_exists( 'woocommerce' ) ) { ?>
                        <div class="items-in-rows">
                            <div class="productiveminds_section-container columns_left_icon-50px closeup">
                                <div>
                                    <a target="_blank" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_OUR_URL; ?>">
                                        <img src="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'public/images/productivemedia/productive-commerce.webp' ?>" alt="" width="100%" height="auto" />
                                    </a>
                                </div>
                                <div>
                                    <div class="small-heading">
                                        <?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TITLE; ?>
                                    </div>
                                    <div class="small-text">
                                        <?php echo __( 'Wishlist, Compare, Quick View, MiniCart...', 'productive-demo-importer' ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="productive-global-block-link-container">
                                <?php if( !function_exists( 'productive_commerce_is_active' ) ) { ?>
                                    <a target="_blank" class="standard-link" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_REPO_URL; ?>">
                                        <?php echo esc_html__( 'Install plugin', 'productive-demo-importer' ); ?>
                                    </a>
                                <?php } else { ?>
                                    <a class="standard-link" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_ADMIN_OPTIONS_LINK; ?>">
                                        <?php echo esc_html__( 'Customize plugin', 'productive-demo-importer' ); ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    
                    <div class="items-in-rows">
                        <div class="productiveminds_section-container columns_left_icon-50px closeup">
                            <div>
                                <a target="_blank" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_OUR_URL; ?>">
                                    <img src="<?php echo PRODUCTIVE_DEMO_IMPORTER_PLUGIN_URI . 'public/images/productivemedia/productive-forms.webp' ?>" alt="" width="100%" height="auto" />
                                </a>
                            </div>
                            <div>
                                <div class="small-heading">
                                    <?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TITLE; ?>
                                </div>
                                <div class="small-text">
                                    <?php echo __( 'Contact forms, Newsletter opt-ins...', 'productive-demo-importer' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="productive-global-block-link-container">
                            <?php if( !function_exists( 'productive_forms_is_active' ) ) { ?>
                                <a target="_blank" class="standard-link" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_REPO_URL; ?>">
                                    <?php echo esc_html__( 'Install plugin', 'productive-demo-importer' ); ?>
                                </a>
                            <?php } else { ?>
                                <a class="standard-link" href="<?php echo PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_ADMIN_OPTIONS_LINK; ?>">
                                    <?php echo esc_html__( 'Customize plugin', 'productive-demo-importer' ); ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="clear_min"></div>
    </div>
<?php
}