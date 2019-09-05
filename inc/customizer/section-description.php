<?php 

function CMDS_customize_description($wp_customize)
{
    $wp_customize->add_setting('CMDS_theme_description', [

    ]);

    $wp_customize->add_control('CMDS_theme_description', [
        'type' => 'textarea',
        'section' => 'CMDS_theme_description',
        'label' => 'Texte de description pour la page d\'acceuil',
    ]);
};