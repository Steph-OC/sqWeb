<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--définit automatiquement la langue en fonction des régalages WP -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>"><!-- permet de définir l'encodage et permet de récupérer d'autres infos -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?> <!-- !important, c'est par cette fonction que sont déclarer les scripts de style -->

</head>

<body <?php body_class('site'); ?>> <!-- permet d'obtenir des noms de classe css en fonction de la page visitée -->

    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="site_header">
            <div class="container_text_logo">
                <div class="logo_fixe">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo-sq_web.svg" alt="Logo sq-web">
                </div>
                <div class="container_text_header">
                    <h2 class="text_header">
                        Votre Projet, Notre Engagement<br> Créons Ensemble un Web Qui Vous Ressemble
                    </h2>
                </div>
                <?php include('includes/bouton-cta.php'); ?>
            </div>
            <div class="container_nav">

                <nav class="site_nav">
                    <div class="arrow"><span>M</span><span>E</span><span>N</span><span>U</span></div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => 'ul',
                            'menu_class' => 'site_header_menu',
                        )
                    ); ?>
                </nav>
            </div>