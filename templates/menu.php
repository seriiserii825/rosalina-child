<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<div class="main-menu">
    <li class="main-menu__item"><a class="main-menu__link"
                                   href="https://visitrosolina.it/scopri-rosolina-mare/">Scopri Rosolina mare
            <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg"
                 alt="icon">
        </a>
        <div class="sub-menu">
            <div class="sub-menu__wrap">
                <div class="sub-menu__content">
                    <h3 class="sub-menu__title">Scopri Rosolina mare</h3>
                    <p class="sub-menu__text">Qualunque sia la tua idea di vacanza, a Rosolina puoi trovare escursioni, spiagge ed attrazioni che renderanno indimenticabile il tuo soggiorno.</p>
                </div>
                <ul class="sub-menu__list">
                    <li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/escursioni/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-1.jpg">
                            <h4 class="sub-menu__item-title">Escursioni</h4></a></li>
                    <li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/spiagge/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-2.jpg">
                            <h4 class="sub-menu__item-title">Spiagge</h4></a></li>
                    <li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/attrazioni/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-3.jpg">
                            <h4 class="sub-menu__item-title">Attrazioni</h4></a></li>
                    <li class="sub-menu__item"><a
                            href="https://visitrosolina.it/scopri-rosolina-mare/nei-dintorni/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-4.jpg">
                            <h4 class="sub-menu__item-title">Nei dintorni</h4></a></li>
                </ul>
            </div>
        </div>
    </li>
    <?php require_once __DIR__ . '/inc-custom/dove-dormire-menu.php'; ?>
    <li class="main-menu__item"><a class="main-menu__link"
                                   href="https://visitrosolina.it/webcam-e-meteo/">Webcam e meteo
            <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg"
                 alt="icon">
        </a></li>
    <li class="main-menu__item"><a class="main-menu__link"
                                   href="https://visitrosolina.it/eventi-e-news/">Eventi e news
            <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg"
                 alt="icon">
        </a></li>
    <li class="main-menu__item"><a class="main-menu__link"
                                   href="https://visitrosolina.it/info-e-contatti/">Info e contatti
            <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg"
                 alt="icon">
        </a></li>
</div>
<ul class="main-menu-mobile" id="js-main-menu-mobile">
    <li class="main-menu-mobile__item">
        <div class="main-menu-mobile__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-down-white.svg" alt="arrow">
        </div>
        <a class="main-menu-mobile__link"
           href="https://visitrosolina.it/scopri-rosolina-mare/">Scopri Rosolina mare</a>
        <ul class="main-menu-mobile-submenu">
            <li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link"
                                                          href="https://visitrosolina.it/scopri-rosolina-mare/escursioni/">Escursioni</a>
            </li>
            <li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link"
                                                          href="https://visitrosolina.it/scopri-rosolina-mare/spiagge/">Spiagge</a>
            </li>
            <li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link"
                                                          href="https://visitrosolina.it/scopri-rosolina-mare/attrazioni/">Attrazioni</a>
            </li>
            <li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link"
                                                          href="https://visitrosolina.it/scopri-rosolina-mare/nei-dintorni/">Nei dintorni</a>
            </li>
        </ul>
    </li>
    <?php require_once __DIR__ . '/inc-custom/dove-dormire-mobile-menu.php'; ?>
    <li class="main-menu-mobile__item"><a class="main-menu-mobile__link"
                                          href="https://visitrosolina.it/webcam-e-meteo/">Webcam e meteo</a></li>
    <li class="main-menu-mobile__item"><a class="main-menu-mobile__link"
                                          href="https://visitrosolina.it/eventi-e-news/">Eventi e news</a></li>
    <li class="main-menu-mobile__item"><a class="main-menu-mobile__link"
                                          href="https://visitrosolina.it/info-e-contatti/">Info e contatti</a></li>
</ul>
<div class="sandwitch-wrap" id="js-sandwitch-wrap">
    <div class="sandwitch">
        <div class="sandwitch__line sandwitch__line--top"></div>
        <div class="sandwitch__line sandwitch__line--middle"></div>
        <div class="sandwitch__line sandwitch__line--bottom"></div>
    </div>
</div>

