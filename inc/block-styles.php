<?php


if (!function_exists('quasifolio_block_styles')) :

    /**
     * Register block styles.
     *
     * @since Quasifolio 1.0.0
     */
    function quasifolio_block_styles()
    {

        $block_styles = array(

            'core/navigation'           => array(
                'bg-hover'   => __('BG Hover', 'quasifolio'),
                'hover-underline'   => __('Hover Underline', 'quasifolio'),
            ),
            'core/search'           => array(
                'search-icon'   => __('Search Icon', 'quasifolio'),
                'search-opinionated'   => __('Search Opinionated', 'quasifolio'),
            ),
            'core/post-terms'           => array(
                'boxed-post-term'   => __('Boxed Post Term', 'quasifolio'),
                'no-decoration'   => __('No Decoration', 'quasifolio'),
            ),
            'core/query-pagination'           => array(
                'boxed-pagination'   => __('Boxed Pagination', 'quasifolio'),
            ),

        );

        foreach ($block_styles as $block => $styles) {
            foreach ($styles as $style_name => $style_label) {
                register_block_style(
                    $block,
                    array(
                        'name'  => $style_name,
                        'label' => $style_label,
                    )
                );
            }
        }
    }


endif;

add_action('init', 'quasifolio_block_styles');
