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

        <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/style.css') }}">

        <!-- Reponsive -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/responsive.css') }}">

        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="{{ asset('assets_new/icon/Favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets_new/icon/Favicon.png') }}">
        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        
        
         <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css">

        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.js"></script>
        

        @stack('head')
    </head>

    

    
    
    <body class="body header-fixed counter-scroll">
        <div class="backtotop bg_wts">
            <a href="http://wa.me/541122444188" class="go_to_wts">
                <i class="fab fa-whatsapp" style="font-size: 24px;"></i>
            </a>
        </div>
        <div id="wrapper">
            <div id="page" class="pt-40">
                <!-- header_section - start
                ================================================== -->
                @include('partials.headernew')
                <!-- header_section - end
                ================================================== -->

                <main>
                    @yield('content')
                </main>
            </div>
            @include('partials.addToCartModal')
             <!-- footer_section - start
             ================================================== -->
             @include('partials.footernew')
            <!-- footer_section - end
            ================================================== -->
             <div class="cart_sidebar" style="display:none; position:fixed; top:0; right:0; width:370px; height:100vh; background:#181818; z-index:9999; box-shadow:-2px 0 10px rgba(0,0,0,0.2); overflow-y:auto;">
                <button type="button" class="close_btn" style="background:none; border:none; color:#fff; font-size:2rem; position:absolute; top:15px; right:15px; z-index:10001;"><i class="fas fa-times"></i></button>
                <div style="padding:40px 24px 24px 24px;">
                    <ul class="cart_items_list ul_li_block mb_30 clearfix" style="padding:0; margin:0 0 30px 0;">
                        <!-- Items del carrito se llenan por JS -->
                    </ul>
                    <ul class="total_price ul_li_block mb_30 clearfix" style="padding:0; margin:0 0 30px 0;">
                        <li class="total_sidecart">
                            <span>Subtotal:</span>
                            <span>$0</span>
                        </li>
                        <li class="total_sidecart">
                            <span>Total:</span>
                            <span>$0</span>
                        </li>
                    </ul>
                    <ul class="btns_group ul_li_block clearfix" style="padding:0;">
                        <li><a href="/carrito" class="tf-button style-1 w-100">Ir al carrito</a></li>
                    </ul>
                </div>
            </div>
    
        </div>

        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
            </svg>
        </div>


        <!-- Javascript -->
        <script src="{{ asset('assets_new/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script src="{{ asset('assets_new/js/bootstrap.min.js') }}"></script> --}}
        <script src="{{ asset('assets_new/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/swiper.js') }}"></script>
        <script src="{{ asset('assets_new/js/count-down.js') }}"></script>
        <script src="{{ asset('assets_new/js/simpleParallax.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/gsap.js') }}"></script>
        <script src="{{ asset('assets_new/js/SplitText.js') }}"></script>
        <script src="{{ asset('assets_new/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('assets_new/js/gsap-animation.js') }}"></script>
        <script src="{{ asset('assets_new/js/tsparticles.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/tsparticles.js') }}"></script>
        <script src="{{ asset('assets_new/js/main.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

        <script src="{{ asset('js/nice-select.min.js') }}"></script>
        

        @stack('scripts')
    </body>
</html>
