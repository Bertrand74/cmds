<?php

function CMDS_scripts()
{
    wp_enqueue_style(
        'CMDS_app_css',
        get_theme_file_uri('/public/css/app.css'),
        ['CMDS_vendors_css'],
        '1.0.0'
    );

    wp_enqueue_style(
        'CMDS_vendors_css',
        get_theme_file_uri('/public/css/vendors.css'),
        [],
        '1.0.0'
        );

    wp_enqueue_script(
        'CMDS_app_js',
        get_theme_file_uri('/public/js/app.js'),
        ['CMDS_vendors_js'],
        '1.0.0',
        true
    );

        wp_enqueue_script(
        'CMDS_vendors_js',
        get_theme_file_uri('/public/js/vendors.js'),
        [],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts' ,'CMDS_scripts');