
<!DOCTYPE html>
    <html lang="de">
    <head>

	        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<br />

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://allegra-immobilienbewertung.de/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://allegra-immobilienbewertung.de/assets/css/styles.css">

    </head>
    <body> 
	        <header class="header" id="header">
            <nav class="nav container">
                <a href="https://allegra-immobilienbewertung.de" class="nav__logo">Allegra</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="https://allegra-immobilienbewertung.de" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#discover" class="nav__link">Unsere Dienstleistungen</a>
                        </li>
                        <li class="nav__item">
                            <a href="ueber-uns" class="nav__link">Über Uns</a>
                        </li>
                    </ul>

                    
                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

@yield('content')

	        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Allegra Immobilienbewertung</h3>
                        <p class="footer__description">Wenn es um die Bewertung von Immobilien geht, ist Qualität der Schlüssel.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Kontakt</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Telefon:05722-913804</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">E-Mail: info@allegra-immobilienbewertung.de</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Adresse: Waltherstraße 18, <br> 80337 München</a>
                            </li>
                        </ul>
                    </div>
    
                    
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Weitere Standorte</h3>
                        

                        
                    </div>
                </div>

                <div class="footer__rights">
                    
                    <div class="footer__terms">
                        <a href="impressum" class="footer__terms-link">Impressum</a>
                        <a href="datenschutzerklaerung" class="footer__terms-link">Datenschutzerklärung</a>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>