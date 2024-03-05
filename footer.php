<footer class="site_footer">
    <div class="custom-shape-divider-top-1707424932">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container-footer">
        <div class="container_logo">
            <?php
            get_template_part('template-parts/site-logo');
            ?>
        </div>
        <div class="cont-menu-reseaux">
            <div class="container-menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'container' => 'ul',
                        'menu_class' => 'site_footer_menu',
                    )
                );
                ?>
            </div>
            <div class="container-sociaux">
            <a href="mailto:nom@example.com">Me contacter : nom@example.com</a>
                <a href="http://www.linkedin.com/in/stéphanie-quibel-developpeuse-web" target="_blank"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>