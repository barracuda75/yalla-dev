<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Yalla ! pour les enfants</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
    <header>
        <h1><a href="{{ url('') }}"><img src="{{ asset('img-layout/logo.png') }}" alt=""></a></h1>
        <div class="burger-menu">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('about') }}">Qui sommes-nous ?</a></li>
                <li><a href="{{ url('missions') }}">Nos actions</a></li>
                <li><a href="{{ url('donate') }}">Faire un don</a></li>
                <li><a href="{{ url('news') }}">Actualités</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer style="margin-top: 3%;">
        <div class="newsletter">
            <p>Restez informé(e)s et recevez notre newsletter</p>
            <form action="">
                <input type="email" placeholder="Votre adresse mail">
                <input type="submit" value="OK">
            </form>
        </div>
        <div class="socials">
            <p>Suivez-nous sur les réseaux sociaux</p>
            <div class="fb"><a href=""><img src="{{ asset('img-layout/facebook.svg') }}" alt=""></a></div>
            <div class="insta"><a href=""><img src="{{ asset('img-layout/instagram.svg') }}" alt=""></a></div>
            <div class="twitter"><a href=""><img src="{{ asset('img-layout/twitter.svg') }}" alt=""></a></div>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('contact') }}">Contact</a></li>
                <li><a href="{{ url('mentions-legales') }}">Mentions légales</a></li>
            </ul>
        </nav>
    </footer>
<script src="{{ asset('js/burger.js') }}"></script>
@yield('scripts')
</body>
</html>
