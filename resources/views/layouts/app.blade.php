<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title', 'Fundas Personalizadas - Makena')</title>
    <meta name="description" content="@yield('meta_description', 'Catálogo de fundas personalizadas para celulares con diseños de anime y manga.')">
    <meta name="keywords" content="@yield('meta_keywords', 'fundas personalizadas, celulares, anime, manga, Makena')">

    <link rel="canonical" href="@yield('canonical', url()->current())">
    <link rel="shortcut icon" href="{{ asset('images/logo/makenaminiicon.png') }}">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="@yield('og_title', 'Fundas de Celu Manga y Anime - Makena')">
    <meta property="og:description" content="@yield('og_description', 'Fundas para Samsung, Motorola, Xiaomi y iPhone. Catálogo de anime y manga.')">
    <meta property="og:image" content="@yield('og_image', asset('images/logo/makenaminiicon.png'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Makena Fundas')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Fundas de alta calidad con diseños de anime.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/logo/makenaminiicon.png'))">

    <!-- CSS & Frameworks -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.js"></script>

    @stack('head')
</head>
<body class="home_motorcycle">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9QG5632" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="thetop"></div>
    <div class="backtotop bg_wts">
        <a href="http://wa.me/541122444188" class="go_to_wts">
            <i class="fab fa-whatsapp" style="font-size: 24px;"></i>
        </a>
    </div>

    @include('partials.header')
    @include('partials.sidebar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>
