<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {

    bundle('fonts')
        ->enqueueCss();

    bundle('app')
        ->enqueue();
}, 100);

add_action('enqueue_block_editor_assets', function () {
    bundle('editor')
        ->enqueue();
}, 100);


/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation_left' => __('Primary Navigation Left', 'sage'),
        'primary_navigation_right' => __('Primary Navigation Right', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('category-thumbnails');

//    load_textdomain('sage', realpath(get_template_directory() . '/resources/lang/' . get_locale(). '.mo'));

}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => null,
        'after_widget' => null,
    ];

    register_sidebar([
        'name' => __('Social media', 'sage'),
        'id' => 'social-media-sidebar',
    ] + $config);

    register_sidebar([
        'name' => __('Footer 1', 'sage'),
        'id' => 'footer-col-1',
    ] + $config);

    register_sidebar([
        'name' => __('Footer 2', 'sage'),
        'id' => 'footer-col-2',
    ] + $config);

    register_sidebar([
        'name' => __('Footer 3', 'sage'),
        'id' => 'footer-col-3',
    ] + $config);

    register_sidebar([
        'name' => __('Footer 4', 'sage'),
        'id' => 'footer-col-4',
    ] + $config);
});


add_action('init', function () {


    register_taxonomy('project-category',
    'project',
    [
        'label' => __('Category', 'sage'),
        'public' => true,
        'meta_box_cb' => 'post_categories_meta_box'
    ]
    );

    register_post_type('project', [
        'label' => __('Projects', 'sage'),
        'menu_icon' => 'dashicons-admin-multisite',
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => [
            'title',
            'thumbnail'
        ]
    ]);

    register_post_type('event', [
        'label' => __('Events', 'sage'),
        'menu_icon' => 'dashicons-admin-multisite',
        'public' => true,
        'menu_position' => 5,
        'supports' => [
            'title',
            'thumbnail'
        ]
    ]);

    register_post_type('license', [
        'label' => __('Licenses', 'sage'),
        'menu_icon' => 'dashicons-media-default',
        'menu_position' => 6,
        'public' => true,
        'supports' => [
            'title',
            'thumbnail'
        ]
    ]);

    register_post_type('acknowledgment', [
        'label' => __('Acknowledgments', 'sage'),
        'menu_icon' => 'dashicons-media-default',
        'menu_position' => 7,
        'public' => true,
        'supports' => [
            'title',
            'thumbnail'
        ]
    ]);
}, 0);
