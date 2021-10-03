<?php

/**
 * Class Uta_Loader
 */
class VSWP_Loader{

    // Autoload dependency.
    public function __construct(){
        $this->load_dependency();
    }

    /**
     * Load all Plugin FIle.
     */
    public function load_dependency(){

        include_once( VSWP_PLUGIN_PATH . '/include/VSWP_Helpers.php' );
        include_once( VSWP_PLUGIN_PATH. '/include/VSWP_i18n.php' );
        include_once( VSWP_PLUGIN_PATH . '/admin/VSWP_Admin.php' );
        include_once( VSWP_PLUGIN_PATH . '/frontend/VSWP_Frontend.php' );
    }
}

/**
 * Initialize load class .
 */
function vue_starter_wp_plugin(){
    if ( class_exists( 'VSWP_Loader' ) ) {
        new VSWP_Loader();
    }
}

