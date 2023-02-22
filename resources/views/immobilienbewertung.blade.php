@extends('layout')

@section('head')

<title>Immobilienbewertung {{$ortsname}}</title>
<meta name="Description" content="Sachverständiger Immobilienbewertung {{$ortsname}} ▶ Kostenlose Beratung ✔ TÜV zertifizierte Gutachter ✔ Festpreise  ✔ Kurzfristige Termine ✔ Verkehrswertgutachten ✔">

@endsection

@section('content')

<main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="/img/allegra.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">Immobilienbewertung<br><b>in {{$ortsname}}</b></h1>
                       

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                   
                </div>
            </section>
            <section class="container">

</section>
</main>


@endsection