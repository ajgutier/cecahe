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
            <div class="hambuguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" width="48" height="48" stroke-width="2.5">
                    <path d="M4 6l16 0"></path>
                    <path d="M4 12l16 0"></path>
                    <path d="M4 18l16 0"></path>
                </svg>
            </div>
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