let isMenuVertical = false;


document.addEventListener('DOMContentLoaded', function () {
    // Animation titre h1
    anime({
        targets: '.letter',
        opacity: 1,
        translateY: 50,
        rotate: {
            value: 360,
            duration: 2000,
            easing: 'easeInExpo'
        },
        delay: anime.stagger(100, { start: 1000 }),
        translateX: [-10, 30]
    });

    // Animation du menu
    handleMenuAnimation();

    // Animation des containers avec IntersectionObserver
    setupContainerAnimations();

    // Animation spécifique sur des éléments SVG
    animateSVGElements();



    (function ($) {
        // Votre code utilisant $ ici
        function setupOfferButtonInteraction() {
            $('.btn_offre').click(function () {
                $(this).closest('.container-page').toggleClass('flipped');
            });
        }
        // Assurez-vous que cette fonction est appelée quelque part, ou ajoutez directement le code ici.
        setupOfferButtonInteraction();
    })(jQuery);

});

function handleMenuAnimation() {
    window.addEventListener('scroll', function () {
        let currentScroll = window.scrollY;
        let nav = document.querySelector('.site_nav');

        // Gestion de l'animation du menu en fonction du scroll
        manageMenuScrollAnimation(currentScroll, nav);
    });

    // Gestion des animations de survol sur les liens du menu
    setupMenuHoverAnimations();
}

function manageMenuScrollAnimation(currentScroll, nav) {
    if (currentScroll > 100 && !isMenuVertical) {
        // Passage en mode vertical
        isMenuVertical = true;
        animateMenuToVertical(nav);
    } else if (currentScroll <= 100 && isMenuVertical) {
        // Retour en mode horizontal
        isMenuVertical = false;
        animateMenuToHorizontal(nav);
    }
}

function animateMenuToVertical(nav) {
    // Animer les liens du menu pour les déplacer de gauche à droite
    anime({
        targets: '.site_header_menu li a',
        translateX: [0, 270],
        opacity: [1, 0],
        delay: anime.stagger(100),
        easing: 'easeInExpo',
        complete: function () {
            nav.classList.add('vertical');
            // Animation pour révéler les liens du menu vertical
            anime({
                targets: '.site_nav.vertical .site_header_menu li a',
                translateX: [270, 0],
                opacity: [0, 1],
                delay: anime.stagger(100),
                easing: 'easeOutExpo'
            });
        }
    });
}

function animateMenuToHorizontal(nav) {
    nav.classList.remove('vertical');
    // Masquer temporairement le menu horizontal
    setTimeout(() => {
        anime({
            targets: '.site_header_menu li a',
            translateX: [270, 0],
            opacity: [0, 1],
            delay: anime.stagger(100),
            easing: 'easeOutExpo'
        });
    }, 300);
}

function setupMenuHoverAnimations() {
    const menuLinks = document.querySelectorAll('.site_header_menu a');

    menuLinks.forEach(link => {
        link.addEventListener('mouseenter', (e) => {
            anime({
                targets: e.target,
                scale: 1.2,
                duration: 300,
                easing: 'easeInOutQuad'
            });
        });

        link.addEventListener('mouseleave', (e) => {
            anime({
                targets: e.target,
                scale: 1,
                duration: 300,
                easing: 'easeInOutQuad'
            });
        });
    });
}

function setupContainerAnimations() {
    // Détecte si l'écran est un mobile
    const isMobile = window.innerWidth <= 880;

    // Configuration pour les animations des éléments et des images avec overlays
    const animationConfigDesktop = [
        {
            elements: ['.container-1 .etape-1', '.container-1 .container-img1'],
            animationClasses: ['animate-moveLeft', 'animate-moveRight']
        },
        {
            elements: ['.container-2 .etape-2', '.container-2 .container-img2'],
            animationClasses: ['animate-moveRight', 'animate-moveLeft']
        },
        // Ajoutez d'autres configurations ici si nécessaire
    ];

    // Configuration adaptée pour mobile
    const animationConfigMobile = [
        {
            elements: ['.container-1 .etape-1', '.container-1 .container-img1'],
            animationClasses: ['animate-moveDown', 'animate-moveUp']
        },
        {
            elements: ['.container-2 .etape-2', '.container-2 .container-img2'],
            animationClasses: ['animate-moveDown', 'animate-moveUp']
        },
        // Ajoutez d'autres configurations pour mobile ici si nécessaire
    ];

    // Choisissez la configuration en fonction de la taille de l'écran
    const animationConfig = isMobile ? animationConfigMobile : animationConfigDesktop;

    animationConfig.forEach(config => {
        config.elements.forEach((selector, index) => {
            document.querySelectorAll(selector).forEach(element => {
                // Observer pour déclencher l'animation
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            element.classList.add(config.animationClasses[index]);
                            if (selector.includes('container-img')) { // Appliquer l'animation de l'overlay uniquement sur les .container-img*
                                element.addEventListener('animationend', () => {
                                    // Suppression de l'overlay après l'animation
                                    const overlay = element.querySelector('.overlay');
                                    if (overlay) {
                                        overlay.style.opacity = '0';
                                    }
                                }, { once: true });
                            }
                            observer.unobserve(element);
                        }
                    });
                }, { threshold: 0.5 });
                observer.observe(element);
            });
        });
    });
}

document.addEventListener('DOMContentLoaded', setupContainerAnimations);



function animateSVGElements() {
    // Animation du chemin
    anime({
        targets: '#path43951',
        opacity: [0, 1],
        duration: 2000,
        loop: true
    });

    // Animation du texte
    anime({
        targets: '#text46043',
        scale: [1, 1.5],
        duration: 1500,
        easing: 'easeInOutExpo',
        loop: true
    });
}



