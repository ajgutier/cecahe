<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Capacitación Humanista y Empresarial | CECAHE</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header-contacto">
        <div class="barra-navegacion">
            <div class="logo">
                <a href="<?php echo site_url('/'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo_cecahe_blanco.webp"
                        alt="logotipo"></a>
                <!-- <p class="text-logo"> <strong>Centro de<br>Capacitación Humanista<br>y Empresarial</strong></p> -->
            </div><!-- .logo -->
            <div class="contenedor-menu">
                <?php
                $args = array(
                'theme_location' => 'menu-contacto',
                'container' => 'nav',
                'container_class' => 'menu-contacto'
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
    <main class="contacto">
        <section class="contacto">
            <div class="contenedor">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident soluta reprehenderit maxime
                repellendus ea nobis nihil unde quia dolorem at hic aspernatur temporibus, incidunt dolor voluptas
                facilis, officiis, fuga quam culpa harum id tempore cupiditate sit. Nobis provident esse, in ex quo
                magnam eaque nesciunt? Quisquam debitis maiores minima ipsa dolores nostrum est, aspernatur hic
                doloremque molestias omnis dignissimos quam fugit mollitia deleniti, vero facilis minus temporibus
                libero amet dolorum sit! Nostrum molestiae, non illum fugiat veniam sequi hic optio aperiam perferendis
                magnam dicta corporis asperiores quaerat quia animi eum aspernatur eaque assumenda voluptatem minus qui?
                Consectetur, cumque, ex ipsam magnam quaerat recusandae vitae esse eligendi quam fugiat aperiam aut eum
                dolor, delectus eos architecto dignissimos nobis neque ratione sed rerum culpa. Mollitia quia quibusdam
                reprehenderit asperiores, sapiente consequuntur expedita cupiditate doloremque assumenda alias vero
                maiores veniam laudantium doloribus animi quasi at totam sunt quidem voluptatem dignissimos esse, dolor
                possimus earum. Excepturi omnis laborum repellat, explicabo autem eius, quisquam possimus consectetur
                nulla ut id ducimus adipisci. Ut recusandae esse asperiores aliquid aliquam illo impedit dolorum magni
                suscipit. Necessitatibus laboriosam alias veniam, sit assumenda sapiente at obcaecati distinctio, saepe
                cupiditate error provident laudantium non, ratione enim suscipit debitis? Labore ipsam debitis similique
                quo tempora sequi mollitia? Explicabo repudiandae, obcaecati veniam quo earum, doloremque ipsum
                necessitatibus eveniet enim labore magni. Temporibus et commodi sint dolores, obcaecati molestiae
                aliquam dicta sed officiis, nisi at minima magni quis eum perspiciatis placeat in quasi voluptas.
                Quaerat et debitis quod, magnam dolores incidunt recusandae facilis corporis officiis, perferendis,
                dolorem iste quis dolorum soluta inventore itaque. Laudantium doloremque asperiores voluptatibus
                reiciendis distinctio! Dignissimos molestias eum commodi at voluptate nemo? Dignissimos sed inventore
                quaerat vero nostrum velit omnis qui dolorem, aperiam, rerum repudiandae rem hic, magnam earum
                consequuntur nisi fuga non saepe! Molestias repellat voluptate laboriosam distinctio quisquam?
            </div><!-- .contacto -->
        </section>
    </main>