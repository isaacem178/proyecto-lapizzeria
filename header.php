<!DOCTYPE html>
<html lang="">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>La Pizzeria</title>
	  <?php wp_head(); ?>
 </head>
    <body <?php body_class(); ?>>

        <header class="encabezado-sitio">
            <div class="contenedor">
                <div class="logo">
                    <a href="<?php echo esc_url (home_url('/') ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" class="logotipo">
                    </a>
                </div> <!-- .logo-->
                <div class="informacion-encabezado">
                    <div class="redes-sociales">
                        <?php 

                        $args = array(
                        'theme_location' => 'social-menu',
                        'container' => 'nav',
                        'container_class' => 'sociales',
                        'container_id' => 'sociales',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>'
                        );

                        wp_nav_menu($args);
                        ?>
                    </div> <!-- .redes-sociales -->
                    <div class="direccion">
                        <p><?php echo esc_html( get_option('lapizzeria_direccion') );?></p>
                        <p>Teléfono:<?php echo esc_html( get_option('lapizzeria_telefono') );?></p>
                    </div>

                </div>

            </div><!-- .contenedor -->
        </header>
        
        <div class="menu-principal">
            <div class="mobile-menu">
                <a class="mobile" href="#"><i class="fa-solid fa-bars"></i>Menú</a>
            </div>

            <div class="contenedor navegacion">
                <?php 
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'menu-sitio'
                ); 

                    wp_nav_menu($args);
                ?>
            </div>
        </div>

        <!-- <nav class="menu-sitio"> -->
        <!-- </nav> -->
