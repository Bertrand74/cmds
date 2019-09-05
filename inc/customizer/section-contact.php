<?php 

function CMDS_customize_contact($wp_customize)
{
    // Show or hide contact section 
    $wp_customize->add_setting('CMDS_theme_contact_active', [

    ]);

    $wp_customize->add_control('CMDS_theme_contact_active', [
        'type' => 'checkbox',
        'section' => 'CMDS_theme_contact',
        'label' => 'Desactiver/activer la section contact',
    ]);

    // Change society name

    $wp_customize->add_setting('CMDS_theme_contact_society', [

    ]);

    $wp_customize->add_control('CMDS_theme_contact_society', [
        'type' => 'text',
        'section' => 'CMDS_theme_contact',
        'label' => 'Nom de la société',
    ]);

    // Change adress ( street )

    $wp_customize->add_setting('CMDS_theme_contact_street', [

    ]);

    $wp_customize->add_control('CMDS_theme_contact_street', [
        'type' => 'text',
        'section' => 'CMDS_theme_contact',
        'label' => 'Rue',
    ]);

    // Change City

    $wp_customize->add_setting('CMDS_theme_contact_city', [

    ]);

    $wp_customize->add_control('CMDS_theme_contact_city', [
        'type' => 'text',
        'section' => 'CMDS_theme_contact',
        'label' => 'Code postal et ville ',
    ]);


    // Change phone number

    $wp_customize->add_setting('CMDS_theme_contact_phone', [
        'default' => '06.06.06.06.07'
    ]);

    $wp_customize->add_control('CMDS_theme_contact_phone', [
        'type' => 'text',
        'section' => 'CMDS_theme_contact',
        'label' => 'Numero de téléphone de contact'
    ]);


    // Change email

    $wp_customize->add_setting('CMDS_theme_contact_email', [

    ]);

    $wp_customize->add_control('CMDS_theme_contact_email', [
        'type' => 'email',
        'section' => 'CMDS_theme_contact',
        'label' => 'Email de contact'
    ]);
}