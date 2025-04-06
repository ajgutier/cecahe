<?php get_header(); ?>

<main class="main propuesta-valor">
    <section class="valores section titulos">
        <div class="contenedor">
            <h2>En CECAHE, combinamos excelencia académica y desarrollo personal para capacitar y certificar personas
                líderes responsables y éticas.</h2>
        </div>
        <div class="contenedor cards">

            <div class="card">
                <div class="face front">
                    <img class="img_valores" src="<?php echo get_template_directory_uri(); ?>/img/valor_propuesta.webp"
                        alt="imagen valores">
                    <div class="etiqueta-valor">
                        <h3>Propuesta de valor</h3>

                    </div><!-- .etiqueta-valor -->
                </div>
                <div class="face back">

                    <p class="description">
                        Nuestra propuesta de valor radica en proporcionar herramientas y conocimientos de alta calidad,
                        que
                        no sólo prepara a nuestros estudiantes para el éxito laboral, sino que también fomenta su
                        crecimiento personal y humano.<br>
                        Nos diferenciamos por nuestro compromiso con la responsabilidad, la ética, el respeto y la
                        lealtad,
                        creando un entorno de aprendizaje inclusivo y enriquecedor que certifica a los líderes del
                        mañana
                        para ser agentes de cambio positivo en la sociedad.

                    </p>
                </div>
            </div>



            <div class="card">
                <div class="face front">
                    <img class="img_valores" src="<?php echo get_template_directory_uri(); ?>/img/valor_mision.webp"
                        alt="imagen valores">
                    <div class="etiqueta-valor">
                        <h3>Misión</h3>
                    </div><!-- .etiqueta-valor -->
                </div>
                <div class="face back">

                    <p class="description">
                        Proporcionar una capacitación y certificación integral y de alta calidad que fomente el
                        desarrollo
                        profesional y personal de nuestros clientes y estudiantes. Nos comprometemos a formar líderes
                        éticos
                        y responsables, preparados para enfrentar los desafíos del mundo moderno y contribuir
                        positivamente
                        a la sociedad.<br>
                        Empoderar a nuestros estudiantes para que se conviertan en agentes de cambio, capaces de
                        transformar
                        sus vidas y las de quienes los rodean.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img class="img_valores" src="<?php echo get_template_directory_uri(); ?>/img/valor_vision.webp"
                        alt="imagen valores">
                    <div class="etiqueta-valor">
                        <h3>Visión</h3>
                    </div><!-- .etiqueta-valor -->
                </div>
                <div class="face back">
                    <p class="description">
                        Es ser un referente en la capacitación y certificación integral de profesionales, combinando la
                        excelencia académica con el desarrollo personal y humano. <br>
                        Aspiramos a crear un entorno de aprendizaje inclusivo y enriquecedor, donde cada individuo pueda
                        alcanzar su máximo potencial y contribuir positivamente a la sociedad. Nuestra visión es formar
                        líderes comprometidos con la excelencia y la sociedad.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img class="img_valores" src="<?php echo get_template_directory_uri(); ?>/img/valores.webp"
                        alt="imagen valores">
                    <div class="etiqueta-valor">
                        <h3>Valores</h3>
                    </div><!-- .etiqueta-valor -->
                </div>
                <div class="face back">
                    <p class="description">
                        Nuestros valores fundamentales:<br>
                        <br>
                        <span>Responsabilidad.</span><br>
                        <span>Ética.</span><br>
                        <span>Respeto.</span><br>
                        <span>Lealtad.</span><br>
                        <br>
                        En el Centro de Capacitación Humanista y Empresarial, creemos en la importancia de formar
                        personas
                        competentes y éticas, preparadas para enfrentar los desafíos del mundo laboral y contribuir
                        positivamente a la sociedad.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="procesos section titulos">
        <div class="contenedor">
            <div class="contenido-valores">
                <h2>La decisión está en ti y en nosotros está el ofrecerte lo que requieres, certifícate con nosotros y
                    obtendrás entre otras cosas las siguientes ventajas:</h2>
                <ul>
                    <li>
                        <p>Obtienen un número de registro a nivel nacional de competencia laboral</p>
                    </li>
                    <li>
                        <p>Recibe un documento oficial avalado por la SEP.</p>
                    </li>
                    <li>
                        <p>Aumentar tu competitividad y valor profesional en el mercado laboral.</p>
                    </li>
                    <li>
                        <p>Estar certificado te permite acceder a mejores ofertas laborales y mejores salarios.</p>
                    </li>
                </ul>
                <p>
                    <span>CECAHE</span>, tiene una clara convicción: sostenerse con valores que todo emprendedor debe
                    poseer. Honestidad, confianza, empatía, gratitud y paciencia. <span>PDF</span>
                </p>
                <p>
                    Un estándar de competencia describe el conjunto de conocimientos, habilidades, destrezas y
                    comportamientos que requiere una persona para realizar actividades con un alto nivel de desempeño y
                    competitividad. La certificación de competencias es el proceso a través del cual las personas
                    demuestran por medio de evidencias que cuentan con los conocimientos, habilidades y destrezas
                    necesarias para cumplir determinada función que ostenta ser especialista.
                </p>
                <p>
                    CECAHE está acreditado por la <span>SEP – CONOCER</span> para certificar las competencias
                    profesionales o adquiridas de las personas con base en un determinado estándar de competencia
                    inscrito en el Registro Nacional Estándares de Competencia (RENAEC).
                </p>
                <p>
                    Entregamos a tu proceso de certificación toda nuestra experiencia, infraestructura y apoyo para que
                    logres la meta que esperas alcanzar.
                </p>
            </div>
            <div class="proceso contenido-valores">
                <h2>El proceso de certificación consta de 6 etapas:</h2>
                <img class="timeline" class="img_valores"
                    src="<?php echo get_template_directory_uri(); ?>/img/time-line.webp" alt="imagen timeline">
            </div>
    </section>
    <section class="titulos certificaciones">
        <div class="contenedor">
            <h2>NUESTRA OFERTA DE CERTIFICACIONES.</h2>
            <div class="listado-certificaciones">
                <ul class="listado-grid">
                    <?php
                        $args = array(
                            'post_type' => 'cecahe_certifica'
                        );
                        $certificaciones = new WP_Query($args);
                        while($certificaciones->have_posts()) {
                            $certificaciones->the_post();
                    ?>
                    <li class="card">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="contenido">
                            <a target="_blank" href="<?php the_field('pdf_descargable'); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div><!-- .contenido -->
                    </li>
                    <?php } wp_reset_postdata(); ?>
                </ul>
            </div><!-- .lista-certificaciones -->
        </div>
    </section>
</main>
<?php get_footer(); ?>