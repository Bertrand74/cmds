<?php 

 $menu = wp_nav_menu([
                'theme_location' => 'Principal',
                'container_class' => '',
                'container_id' => '',
                'menu_id' => '',
                'menu_class' => 'navbar-nav mr-auto',
                'echo' => false,
                ]);
                
                $menu = strip_tags($menu, '<a><li class="nav-item"><ul>');              
                $menu = str_replace('a href', 'a class="nav-link text-white" style="font-size: 1.5rem;" href ', $menu);
                
                echo $menu;