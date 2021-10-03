<?php

/**
 * Class VSWP_Admin
 */
class VSWP_Admin{

    /**
     * VSWP_Admin constructor.
     */
    function __construct(){
        if(is_admin()){
            $this->admin_init();
        }
    }

    /**
     * Initialize admin hooks.
     *
     * @return void.
     */
    public function admin_init(){
        add_action('admin_menu', [ $this, 'load_admin_menu' ]);
        add_action('admin_enqueue_scripts', [ $this, 'load_admin_enqueue_scripts' ]);
    }


    /**
     * Create admin submenu page.
     *
     * @return void.
     */
    public function load_admin_menu(){

        add_menu_page(
            esc_html__('Vue Starter WordPress Plugin', 'text-domain'),
            esc_html__('Vue Admin', 'text-domain'),
            'manage_options',
            'vue-starter-wordpress-plugin',
            array( $this, 'vue_admin_page_callback' ),
            'dashicons-insert',
            26
        );

        add_submenu_page('vue-starter-wordpress-plugin', 'Settings','Settings', 'manage_options', 'vue-plugin-settings', [ $this, 'vue_plugin_settings' ]);

    }

    /**
     * Callback function for admin page.
     *
     * @return string|array|mixed
     */
    public function vue_admin_page_callback(){
        echo "Test";
    }

    /**
     * Callback function for submenu page.
     *
     * @return mixed.
     */
    public function vue_plugin_settings(){
        echo "Settings";
    }


    /**
     * Load admin style and script here.
     *
     * @return array|mixed
     */
    public function load_admin_enqueue_scripts(){

    }


}

/**
 * Create instance of the class.
 */
new VSWP_Admin();

?>