<?php

if (!function_exists('quasifolio_styles')) :

    /**
     * Enqueue styles.
     *
     * @since Quasifolio 1.0.0
     *
     * @return void
     */
    function  quasifolio_styles()
    {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_register_style(
            'Quasifolio-Style',
            get_template_directory_uri() . '/assets/css/theme.css',
            array(),
            $version_string
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style('Quasifolio-Style');
    }

endif;

add_action('wp_enqueue_scripts', 'quasifolio_styles');
