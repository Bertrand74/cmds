<?php

require('customizer/section-carousel.php');

function CMDS_customize_register($wp_customize)
{

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
    'priority' => 9
]);

CMDS_customize_carousel($wp_customize);

}

add_action('customize_register', 'CMDS_customize_register');