<?php

require('customizer/section-carousel.php');
require('customizer/section-contact.php');
require('customizer/section-description.php');
require('customizer/section-actualities.php');

function CMDS_customize_register($wp_customize) {
    // Panel
    $wp_customize->add_panel('CMDS_theme_panel', [
        'title' => 'CMDS',
        'description' => "Gestion de l'apparence du site",
        'priority' => 1
    ]);

    // Section carousel 

    $wp_customize->add_section('CMDS_theme_carousel', [
        'title' => 'Carousel d\'images',
        'panel' => 'CMDS_theme_panel',
        'priority' => 1
    ]);

    CMDS_customize_carousel($wp_customize);

    // Section Contact

    $wp_customize->add_section('CMDS_theme_contact', [
        'title' => 'Contact',
        'panel' => 'CMDS_theme_panel',
        'prioriy' => 10
        ]);

    CMDS_customize_contact($wp_customize);

    // Section Description

    $wp_customize->add_section('CMDS_theme_description', [
        'title' => 'Description',
        'panel' => 'CMDS_theme_panel',
        'prioriy' => 4
        ]);

    CMDS_customize_description($wp_customize);

    // Post section

    $wp_customize->add_section('CMDS_theme_actualities', [
        'title' => 'Actualités',
        'panel' => 'CMDS_theme_panel',
        'priority' => 6
    ]);

    CMDS_customize_actualities($wp_customize);
}

add_action('customize_register', 'CMDS_customize_register');