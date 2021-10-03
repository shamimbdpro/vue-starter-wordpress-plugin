<?php

class VSWP_i18n
{
    /**
     * Intialize text domain.
     *
     * @since 1.0.0
     */
    function __construct(){
        add_action( 'plugins_loaded', [ $this, 'load_plugin_text_domain' ] );
    }

    /**
     * Load the plugin text domain for translation.
     *
     * @since 1.0.0
     */
    public function load_plugin_text_domain() {
        load_plugin_textdomain(
            'text-domain',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );

    }
}

new VSWP_i18n();
