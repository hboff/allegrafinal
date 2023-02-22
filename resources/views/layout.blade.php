
<!DOCTYPE html>
    <html lang="de">
    <head>

	        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<br />

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://allegra-immobilienbewertung.de/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://allegra-immobilienbewertung.de/assets/css/styles.css">
@yield('head')
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
@if(str_contains(url()->current(), "/immobilienbewertung/"))
@include('partials._footer2')
@else
@include('partials._footer')
@endif

        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>