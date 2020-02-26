<?php
/**
 * Template Name: Front page html
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="utf-8">
    <meta name="description" content="Qualunque sia la tua idea di vacanza, a Rosolina Mare puoi trovare hotel, villaggi turistici, spiagge ed escursioni che renderanno indimenticabile il tuo soggiorno."/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/my.css">
	<title>Rosolina mare | Dono di natura</title>
</head>
<body>
<div class="hidden"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="264.2 371 20.3 18.8" id="basket" xmlns="http://www.w3.org/2000/svg"><path class="st0" d="M283.7 378.2h-3.2l-3.4-6.8c-.2-.4-.6-.5-1-.3s-.5.6-.3 1l3.1 6.1h-9.1l3.1-6.1c.2-.4 0-.8-.3-1-.4-.2-.8 0-1 .3l-3.4 6.8H265c-.4 0-.8.3-.8.8 0 .4.3.8.8.8h.2l.9 3c-.2.1-.3.3-.3.6 0 .4.3.7.7.7l1.7 5.8h12.7l1.7-5.8c.4 0 .7-.3.7-.7 0-.2-.1-.5-.3-.6l.9-3h.2c.4 0 .8-.3.8-.8-.4-.5-.7-.8-1.2-.8zm-4.1 10.1h-10.4L268 384h12.9l-1.3 4.3zm1.6-5.8h-13.7l-.8-2.8H282l-.8 2.8z"/></symbol><symbol viewBox="0 0 511.626 511.627" id="external-link" xmlns="http://www.w3.org/2000/svg"><path d="M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z"/><path d="M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z"/></symbol><symbol fill="none" viewBox="0 0 9 19" id="facebook" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.35 13.736c0-1.348-.008-2.697.007-4.045 0-.229-.06-.297-.29-.29-.418.016-.837 0-1.264.008-.167.008-.236-.046-.228-.221.007-.838.007-1.684 0-2.522 0-.16.045-.213.213-.213.427.007.86-.015 1.288.007.251.016.297-.076.297-.304-.016-.64-.016-1.28 0-1.92.015-.785.228-1.516.693-2.149C3.653 1.28 4.49.914 5.458.868c.99-.045 1.988-.022 2.986-.03.137 0 .183.046.183.183-.008.853-.008 1.699 0 2.552 0 .152-.046.198-.198.198-.48-.008-.96 0-1.432 0-.64 0-1.021.328-1.06.96-.03.503-.007 1.013-.022 1.524-.008.183.107.167.221.167.724 0 1.455.008 2.179-.007.213 0 .282.045.259.266a137.02 137.02 0 0 0-.244 2.545c-.015.19-.107.229-.274.229a64.837 64.837 0 0 0-1.722 0c-.411 0-.373-.061-.373.358 0 2.643-.008 5.28.007 7.923 0 .282-.068.35-.342.343a76.647 76.647 0 0 0-2.956 0c-.274.008-.32-.091-.32-.335.007-1.349 0-2.682 0-4.008z" fill="#fff"/></symbol><symbol viewBox="0 0 24 24" id="instagram" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M-1-1h582v402H-1z"/><g fill="#fff"><path d="M12.004 5.838a6.157 6.157 0 0 0-6.158 6.158 6.157 6.157 0 0 0 6.158 6.158 6.157 6.157 0 0 0 6.158-6.158 6.157 6.157 0 0 0-6.158-6.158zm0 10.155a3.996 3.996 0 1 1 3.997-3.997 3.995 3.995 0 0 1-3.997 3.997z"/><path d="M16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941C-.283 4.325.012 7.435.012 11.996c0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"/><circle r="1.439" cy="5.595" cx="18.406"/></g></symbol><symbol fill="none" viewBox="0 0 20 14" id="mail" xmlns="http://www.w3.org/2000/svg"><path d="M1.854.211H17.69c.96 0 1.74.78 1.74 1.74v9.718c0 .9-.78 1.68-1.74 1.68H1.854c-.96 0-1.74-.78-1.74-1.68V1.951c0-.96.78-1.74 1.74-1.74zM18.29 11.97l-5.94-5.04-1.199.84c-.84.6-1.92.6-2.7 0l-1.26-.84-5.938 5.039c.12.24.36.36.6.36H17.69c.3 0 .48-.12.6-.36zm-5.1-5.699l5.22 4.44V2.49l-5.22 3.78zM1.135 10.71l5.219-4.44-5.219-3.779v8.218zm.3-9.299l7.618 5.52c.42.359 1.02.359 1.5-.001l7.619-5.519a.681.681 0 0 0-.48-.18H1.854c-.18 0-.36.06-.42.18z" fill="#fff"/></symbol></svg></div>
<header class="main-header"><a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.png" alt="logo"></a>
	<div class="main-menu">
		<li class="main-menu__item"><a class="main-menu__link" href="https://visitrosolina.it/scopri-rosolina-mare/">Scopri Rosolina mare<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg" alt="icon"></a>
			<div class="sub-menu">
				<div class="sub-menu__wrap">
					<div class="sub-menu__content">
						<h3 class="sub-menu__title">Scopri Rosolina mare</h3>
						<p class="sub-menu__text">Qualunque sia la tua idea di vacanza, a Rosolina puoi trovare escursioni, spiagge ed attrazioni che renderanno indimenticabile il tuo soggiorno.</p>
					</div>
					<ul class="sub-menu__list">
						<li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/escursioni/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-1.jpg">
								<h4 class="sub-menu__item-title">Escursioni</h4></a></li>
						<li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/spiagge/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-2.jpg">
								<h4 class="sub-menu__item-title">Spiagge</h4></a></li>
						<li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/attrazioni/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-3.jpg">
								<h4 class="sub-menu__item-title">Attrazioni</h4></a></li>
						<li class="sub-menu__item"><a href="https://visitrosolina.it/scopri-rosolina-mare/nei-dintorni/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-4.jpg">
								<h4 class="sub-menu__item-title">Nei dintorni</h4></a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class="main-menu__item"><a class="main-menu__link" href="<?php echo home_url(); ?>/rosolina-dove-dormire/">Dove dormire<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg" alt="icon"></a>
			<div class="sub-menu">
				<div class="sub-menu__wrap">
					<div class="sub-menu__content">
						<h3 class="sub-menu__title">Dove dormire</h3>
						<p class="sub-menu__text">Rosolina Mare è famosa per le sue spiagge incantevoli e per i suoi stabilimenti balneari adatti a grandi e piccoli.</p>
					</div>
					<ul class="sub-menu__list">
						<li class="sub-menu__item"><a href="<?php echo home_url(); ?>/rosolina-dove-dormire/hotel/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-5.jpg">
								<h4 class="sub-menu__item-title">Hotel</h4></a></li>
						<li class="sub-menu__item"><a href="<?php echo home_url(); ?>/rosolina-dove-dormire/vilaggi-turistici/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-6.jpg">
								<h4 class="sub-menu__item-title">Villaggi turistici</h4></a></li>
						<li class="sub-menu__item"><a href="<?php echo home_url(); ?>/rosolina-dove-dormire/agenzie-immobiliari/"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/sub-menu-7.jpg">
								<h4 class="sub-menu__item-title">Agenzie immobiliari</h4></a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class="main-menu__item"><a class="main-menu__link" href="https://visitrosolina.it/webcam-e-meteo/">Webcam e meteo<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg" alt="icon"></a></li>
		<li class="main-menu__item"><a class="main-menu__link" href="https://visitrosolina.it/eventi-e-news/">Eventi e news<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg" alt="icon"></a></li>
		<li class="main-menu__item"><a class="main-menu__link" href="https://visitrosolina.it/info-e-contatti/">Info e contatti<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/menu-icon.svg" alt="icon"></a></li>
	</div>
	<ul class="main-menu-mobile" id="js-main-menu-mobile">
		<li class="main-menu-mobile__item">
			<div class="main-menu-mobile__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-down-white.svg" alt="arrow"></div><a class="main-menu-mobile__link" href="https://visitrosolina.it/scopri-rosolina-mare/">Scopri Rosolina mare</a>
			<ul class="main-menu-mobile-submenu">
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="https://visitrosolina.it/scopri-rosolina-mare/escursioni/">Escursioni</a></li>
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="https://visitrosolina.it/scopri-rosolina-mare/spiagge/">Spiagge</a></li>
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="https://visitrosolina.it/scopri-rosolina-mare/attrazioni/">Attrazioni</a></li>
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="https://visitrosolina.it/scopri-rosolina-mare/nei-dintorni/">Nei dintorni</a></li>
			</ul>
		</li>
		<li class="main-menu-mobile__item">
			<div class="main-menu-mobile__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-down-white.svg" alt="arrow"></div><a class="main-menu-mobile__link" href="https://visitrosolina.it/dove-dormire/">Dove dormire</a>
			<ul class="main-menu-mobile-submenu">
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="hotel.html">Hotel</a></li>
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="vilagi-turistici.html">Villaggi turistici</a></li>
				<li class="main-menu-mobile-submenu__item"><a class="main-menu-mobile-submenu__link" href="agenzie-immobiliari.html">Agenzie immobiliari</a></li>
			</ul>
		</li>
		<li class="main-menu-mobile__item"><a class="main-menu-mobile__link" href="https://visitrosolina.it/webcam-e-meteo/">Webcam e meteo</a></li>
		<li class="main-menu-mobile__item"><a class="main-menu-mobile__link" href="https://visitrosolina.it/eventi-e-news/">Eventi e news</a></li>
		<li class="main-menu-mobile__item"><a class="main-menu-mobile__link" href="https://visitrosolina.it/info-e-contatti/">Info e contatti</a></li>
	</ul>
	<div class="sandwitch-wrap" id="js-sandwitch-wrap">
		<div class="sandwitch">
			<div class="sandwitch__line sandwitch__line--top"></div>
			<div class="sandwitch__line sandwitch__line--middle"></div>
			<div class="sandwitch__line sandwitch__line--bottom"></div>
		</div>
	</div>
</header>
<section class="intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/Home-page.jpg')">
	<div class="intro__content"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/big-logo.svg" alt="big logo">
		<h1 class="intro__title">Rosolina mare</h1>
		<p class="intro__text">Dono di natura</p>
	</div>
</section>
<section class="discover-block section section__dark">
	<div class="container">
		<h3 class="section__title">Scopri Rosolina Mare</h3>
		<div class="discover-block__content"><a class="discover-block__item" href="https://visitrosolina.it/scopri-rosolina-mare/escursioni/">
				<div class="h3 discover-block__title">Escursioni</div><img class="discover-block__icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-icon.svg" alt="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-block-1.jpg" alt="Ecsurcioni"></a><a class="discover-block__item" href="https://visitrosolina.it/scopri-rosolina-mare/spiagge/">
				<div class="h3 discover-block__title">Spiagge</div><img class="discover-block__icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-icon.svg" alt="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-block-2.jpg" alt="Spiagge"></a><a class="discover-block__item" href="https://visitrosolina.it/scopri-rosolina-mare/attrazioni/">
				<div class="h3 discover-block__title">Attrazioni</div><img class="discover-block__icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-icon.svg" alt="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-block-3.jpg" alt="Attrazioni"></a><a class="discover-block__item" href="https://visitrosolina.it/scopri-rosolina-mare/nei-dintorni/">
				<div class="h3 discover-block__title">Nei d'intorni</div><img class="discover-block__icon" src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-icon.svg" alt="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/discover-block-4.jpg" alt="Nei d'intorni"></a></div>
	</div>
</section>
<div class="where-to-sleep-block">
	<div class="where-to-sleep-block__item"><a class="where-to-sleep-block__wrap" href="<?php echo home_url(); ?>/rosolina-dove-dormire/hotel/"><img class="where-to-sleep-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/where-to-sleep-block/where-to-sleep-block-1.jpg" alt="image">
			<div class="where-to-sleep-block__content">
				<h3 class="where-to-sleep-block__subtitle">DOVE DORMIRE</h3>
				<h2 class="where-to-sleep-block__title">Hotel</h2>
			</div></a></div>
	<div class="where-to-sleep-block__item"><a class="where-to-sleep-block__wrap" href="<?php echo home_url(); ?>/rosolina-dove-dormire/vilaggi-turistici/"><img class="where-to-sleep-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/where-to-sleep-block/where-to-sleep-block-2.jpg" alt="image">
			<div class="where-to-sleep-block__content">
				<h3 class="where-to-sleep-block__subtitle">DOVE DORMIRE</h3>
				<h2 class="where-to-sleep-block__title">Villaggi turistici</h2>
			</div></a></div>
	<div class="where-to-sleep-block__item"><a class="where-to-sleep-block__wrap" href="<?php echo home_url(); ?>/rosolina-dove-dormire/agenzie-immobiliari/"><img class="where-to-sleep-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/where-to-sleep-block/where-to-sleep-block-3.jpg" alt="image">
			<div class="where-to-sleep-block__content">
				<h3 class="where-to-sleep-block__subtitle">DOVE DORMIRE</h3>
				<h2 class="where-to-sleep-block__title">Agenzie immobiliari</h2>
			</div></a></div>
</div>
<section class="section eventi-news-block">
	<div class="container">
		<h2 class="section__title">Eventi & News</h2>
		<div class="eventi-news-block__content" id="js-eventi-news-block__content"></div>
	</div>
</section>
<footer class="main-footer">
	<div class="main-footer__wrap">
		<div class="main-footer__contacts">
			<h2 class="section__title">Contattaci</h2>
			<div class="main-footer__form-wrap">
				<div class="form">
					<form method="POST" id="js-form">
						<div class="form-group form-group--flex">
							<div class="form-elem">
								<input type="text" id="js-text" name="name" placeholder="Nome">
							</div>
							<div class="form-elem">
								<input type="email" id="js-email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="form-elem">
								<input type="text" id="js-oggetto" name="oggetto" placeholder="Oggetto">
							</div>
						</div>
						<div class="form-group form-group--textarea">
							<div class="form-elem">
								<textarea name="messaggio" id="js-messaggio" placeholder="Messaggio"></textarea>
							</div>
						</div>
						<div class="form-footer">
							<input class="form-submit-btn" type="submit" value="Invia">
							<div class="privacy">
								<input class="checkbox" type="checkbox" name="check" id="check">
								<label for="check">Cliccando su invia dichiari di aver preso visione e di accettare la nostra <a href="https://visitrosolina.it/cookies-and-privacy/">privacy policy</a></label>
							</div>
                            <div id="submit-ajax"></div>
						</div>
					</form>
				</div>
				<div class="main-footer__text">
					<p>Ufficio informazioni e<br> accoglianza turistica</p>
					<p>Centro Congressi Piazzale Europa</p>
					<p>Orario di apertura Dal lunedì alla domentica 09-12 e 14-19</p>
					<p>Email: <a href="mailto:iat@comune.rosolina.ro.it">iat@comune.rosolina.ro.it</a></p>
				</div>
			</div>
		</div>
		<div class="main-footer__map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d351.84244581281496!2d12.322716!3d45.131613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4464ccfe4ab9226!2sCentro%20Congressi%20Rosolina%20Mare!5e0!3m2!1sit!2sus!4v1582278023649!5m2!1sit!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
	</div>
	<div class="to-up" id="js-to-up"><svg class="mk-svg-icon" data-name="mk-icon-chevron-up" data-cacheid="icon-5e539932b4822" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19l-531-531-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg></div>
</footer>
<div class="copyright">
	<div class="container">
		<div class="copyright__wrap">
			<div class="copyright__text">
				<p>Copyright © 2019 Consorzio di Promzione e Sviluppo Turistico Po e suo Delta</p>
				<p>Partita Iva : 01497590297</p>
			</div>
			<div class="copyright__logos">
				<p>Il Portale di Rosolina Mare è stato<br> realizzato da Bludelego</p><a href="https://bludelego.it/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo_bludelego.png" alt="bluedelego"></a>
			</div>
		</div>
	</div>
</div><!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jquery-valiate/dist/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>
