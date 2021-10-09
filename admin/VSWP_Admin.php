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

        $slug = 'vue-starter-wordpress-plugin';

        $hook =  add_menu_page(
            esc_html__('Vue Starter WordPress Plugin', 'text-domain'),
            esc_html__('Vue Admin', 'text-domain'),
            'manage_options',
            $slug,
            array( $this, 'vue_admin_page_callback' ),
            'dashicons-insert',
            26
        );

        add_submenu_page($slug, 'Settings','Settings', 'manage_options', 'vue-plugin-settings', [ $this, 'vue_plugin_settings' ]);



    }

    /**
     * Callback function for admin page.
     *
     * @return string|array|mixed
     */
    public function vue_admin_page_callback(){

        wp_enqueue_style('VSWP_bootstrap_style');
        wp_enqueue_style('VSWP_admin_style');
        wp_enqueue_script('bootstrap');

        include_once(dirname(__FILE__) . '/VSWP_Admin_Template.php');
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

        // Bootstrap style.
        wp_register_style('VSWP_bootstrap_style', VSWP_PLUGIN_URL . '/assets/css/bootstrap.min.css', null, VSWP_PLUGIN_VERSION, 'all');

        // Custom Admin Style.
        wp_register_style('VSWP_admin_style', VSWP_PLUGIN_URL . '/assets/css/admin-style.css', null, VSWP_PLUGIN_VERSION, 'all');

        // Bootstrap script
        wp_register_script('bootstrap', VSWP_PLUGIN_URL .'/assets/js/bootstrap.bundle.min.js', null, VSWP_PLUGIN_VERSION, true);

    }


}

/**
 * Create instance of the class.
 */
new VSWP_Admin();

?>