<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Capacitación Humanista y Empresarial | CECAHE</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="barra-navegacion">
            <div class="logo">
                <a href="<?php echo site_url('/'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logoCECAHEFull.webp" alt="logotipo"></a>
                <!-- <p class="text-logo"> <strong>Centro de<br>Capacitación Humanista<br>y Empresarial</strong></p> -->
            </div><!-- .logo -->
            <div class="contenedor-menu">
                <?php
                $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);
            ?>
                <?php
                $args = array(
                'theme_location' => 'menu-social',
                'container' => 'div',
                'container_class' => 'menu-social'
                );

                wp_nav_menu($args);
            ?>
                <p class="slogan">El lado humano de los negocios</p>
            </div><!-- .contenedor-menu -->

        </div><!-- .contenedor -->

    </header>