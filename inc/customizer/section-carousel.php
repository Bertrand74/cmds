<?php

function CMDS_customize_carousel($wp_customize) {

    // Show or hide carousel
    $wp_customize->add_setting('CMDS_theme_carousel_active', [

    ]);

    $wp_customize->add_control('CMDS_theme_carousel_active', [
        'type' => 'checkbox',
        'section' =>'CMDS_theme_carousel',
        'label' => 'Désactiver/Activer le carousel d\'images',
    ]);

    // Change image 

    $wp_customize->add_setting( 'CMDS_theme_carousel_image' , [

    ]);

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'CMDS_theme_carousel_image', [
        'section' => 'CMDS_theme_carousel',
        'settings' => 'CMDS_theme_carousel_image',
        'label' => 'Image du carousel 1',
     ] ) );

      $wp_customize->add_setting( 'CMDS_theme_carousel_image2' , [

    ]);

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'CMDS_theme_carousel_image2', [
        'section' => 'CMDS_theme_carousel',
        'settings' => 'CMDS_theme_carousel_image2',
        'label' => 'Image du carousel 2',
     ] ) );

    $wp_customize->add_setting( 'CMDS_theme_carousel_image3' , [

    ]);

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'CMDS_theme_carousel_image3', [
        'section' => 'CMDS_theme_carousel',
        'settings' => 'CMDS_theme_carousel_image3',
        'label' => 'Image du carousel 3',
     ] ) );

     // Change interval between 2 slides 

     $wp_customize->add_setting('CMDS_theme_carousel_interval', [

    ]);

    $wp_customize->add_control('CMDS_theme_carousel_interval',[
        'type' => 'number',
        'section' => 'CMDS_theme_carousel',
        'label' => 'Temps entre 2 images en millisecondes (1000ms = 1 sec )'
    ]);


}