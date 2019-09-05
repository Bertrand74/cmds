<?php 

     function CMDS_customize_actualities($wp_customize)
     {

     $wp_customize->add_setting('CMDS_theme_actualities_active', [

     ]);

     $wp_customize->add_control('CMDS_theme_actualities_active', [
         'type' => 'checkbox',
         'section' => 'CMDS_theme_actualities',
         'label' => 'Desactiver les news',
     ]);

     $wp_customize->add_setting('CMDS_theme_actualities_numbers', [
         'default' => '6'
     ]);

     $wp_customize->add_control('CMDS_theme_actualities_numbers', [
         'type' => 'number',
         'section' => 'CMDS_theme_actualities',
         'label' => 'Nombre de news ( -1 = tous )',
         'input_attrs' => [
             'step' => 1
         ]
     ]);
}