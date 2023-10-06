<?php

if (!function_exists('quasifolio_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     * 
     *  @since Quasifolio 1.0.0
     *
     * @return void
     */
    function quasifolio_setup()
    {

        /**
         * Enable themes to opt-in to slightly more opinionated styles for the front end.
         * 
         * @see 'wp-includes/css/dist/block-library/theme.css'
         */
        add_theme_support('wp-block-styles');

        /**
         * Editor Styles allow you to provide the CSS used by WordPress’ Visual Editor so that it can match the frontend styling.
         */
        add_editor_style('/assets/css/gutenberg-editor.css');
    }

endif;

add_action('after_setup_theme', 'quasifolio_setup');
