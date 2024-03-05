<?php get_header(); ?>
<?php
get_template_part('template-parts/site-banner-home');
?>
</header>

<main class="front">
    <div class="titre_front">
        <h2 class="titre-principal">Dans le monde d'aujourd'hui, un site web est un outil clé pour toute structure.
            Il vous connecte au monde, met en valeur votre activité et attire de nouvelles opportunités. Un site web est plus qu'une présence en ligne, c'est un levier essentiel pour votre croissance et votre visibilité.
        </h2>
    </div>
    <section class="prestations">
    <?php include(get_stylesheet_directory() . '/includes/divider-top.php'); ?>
        <h2 class="titre_prestations">Mes services</h2>
        <?php get_template_part('template-parts/site-prestations'); ?>
        <?php include(get_stylesheet_directory() . '/includes/divider-bottom.php'); ?>
    </section>

    <!-- Section étapes conception -->
    <section id="conception" class="etapes">
        <h2 class="titre_etapes">La création réussie d'un site internet <br> passe par<br> des étapes indispensables</h2>
        <?php
        get_template_part('template-parts/site-conception');
        ?>
    </section>

    <section id="a-propos" class="pourquoi">
    <?php include(get_stylesheet_directory() . '/includes/divider-top.php'); ?>
        <div class="pourquoi_title">
            <h2 class="title_pourquoi"> Pourquoi me choisir ?</h2>
            <?php
            get_template_part('template-parts/site-pourquoi');
            ?>
        </div>
        <?php include(get_stylesheet_directory() . '/includes/divider-bottom.php'); ?>
    </section>

    <section id="greenIt" class="green">
        <h2 class="green-title">Vers un internet plus vert :<br> l'importance du Green IT dans le développement web</h2>

        <?php
        get_template_part('template-parts/site-greenIt');
        ?>
    </section>


    <section class="a_propos">
    <?php include(get_stylesheet_directory() . '/includes/divider-top.php'); ?>
        <div class="propos-title">
            <h2 id="qui" class="title_propos"> Qui suis-je?</h2>
        </div>
        <?php
        get_template_part('template-parts/site-propos');
        ?>
        <?php include(get_stylesheet_directory() . '/includes/divider-bottom.php'); ?>
    </section>

    <section id="contact" class="contact">
        <div class="form_title">

            <h2 class="titre_contact" id="contact">Me contacter</h2>
            <div class="contact-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/accueil/contact.gif" class="img-contact" alt="Illustration d'une enveloppe qui s'ouvre">
            </div>
        </div>

        <?php echo do_shortcode(' [contact-form-7 id="f50fe39" title="Formulaire de contact 1"]'); ?>

    </section>


</main>

<?php get_footer(); ?>