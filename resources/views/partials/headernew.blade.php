<header id="header_main" class="header_1 header-fixed">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">                              
                <div id="site-header-inner"> 
                    <div class="wrap-box flex row" >
                        <div id="site-logo" class="col-6">
                            <div id="site-logo-inner" class="ml-4">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img style="width: 198px" id="logo_header" src="{{ asset('images/logo/logomakena.png') }}">
                                        
                                </a>
                                
                                
                            </div>
                        </div><!-- logo -->
                        <div class="col-6">
                             @if (!request()->is('carritonew', 'checkoutnew'))
                            <button type="button" class="cart_btn">
                                <i class="fas fa-shopping-cart open-cart-sidebar"></i>
                                <span class="btn_badge">0</span>
                            </button>
                            @endif
                        </div>
                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->
                        <nav id="main-nav" class="main-nav ml-5">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item">
                                    <a>Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a>Fundas</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="/catalogo">Catálogo</a></li>
                                        <li class="menu-item"><a href="explore-2.html">Crea tu Funda</a></li>
                                        <li class="menu-item"><a href="explore-3.html">Fundas Duo</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a>Cuadros</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="/catalogocuadros">Catálogo</a></li>
                                        <li class="menu-item"><a href="/tucuadro">Crea tu Cuadro</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a>Preguntas Frecuentes</a>
                                    
                                </li>
                                
                            </ul>
                        </nav><!-- /#main-nav -->
                        @if (!request()->is('carritonew', 'checkoutnew'))
                        <div class="flat-wallet flex">
                            <div class="" id="wallet-header">
                                <a href="javascript:void(0);" id="connectbtn" class="tf-button style-1 open-cart-sidebar">
                                    <span>CARRITO</span>
                                    <span class="btn_badge">0</span>
                                </a>
                            </div>
                            
                            
                        </div>
                        @endif
                    </div> 
                </div>
            </div>
        </div>
    </div>
    
    <div class="mobile-nav-wrap">
        <div class="overlay-mobile-nav"></div>
        <div class="inner-mobile-nav">
            <a href="index.html" rel="home" class="main-logo aling-center">
                <img class="" style="width: 150px" id="mobile-logo_header" src="{{ asset('images/logo/logomakena.png') }}">
            </a>
            <div class="mobile-nav-close">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve"><g><path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/></g></svg>
            </div>
            <nav id="mobile-main-nav" class="mobile-main-nav">
                <ul id="menu-mobile-menu" class="menu">
                    <li class="menu-item">
                        <a>Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a class="item-menu-mobile">Fundas</a>
                        <ul class="sub-menu-mobile">
                            <li class="menu-item"><a href="/catalogo">Catálogo</a></li>
                            <li class="menu-item"><a href="explore-2.html">Crea tu Funda</a></li>
                            <li class="menu-item"><a href="explore-3.html">Fundas Duo</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a class="item-menu-mobile">Cuadros</a>
                        <ul class="sub-menu-mobile">
                            <li class="menu-item"><a href="/catalogo">Catálogo</a></li>
                            <li class="menu-item"><a href="explore-2.html">Crea tu Cuadro</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="item-menu-mobile" href="contact-us.html">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<style>
    /* Por defecto, no muestres el botón extra del carrito en desktop */
.cart_btn { 
  display: none;
}

/* Carrito solo visible en mobile */
@media (max-width: 768px) {
  /* Botón carrito: reset de estilos que vienen del theme */
  .cart_btn{
    position: absolute;
    right: 70px;           /* ajusta si hace falta */
    top: 15px;             /* ajusta si hace falta */
    display: inline-flex;
    align-items: center;
    justify-content: center;

    /* Reset para que no recorte el badge */
    width: 28px;
    height: 28px;
    padding: 0 !important;
    margin: 0 !important;
    background: transparent !important;
    border: 0 !important;
    border-radius: 0 !important;
    line-height: 1 !important;
    overflow: visible !important;  /* <- clave */
    z-index: 101;
  }

  .cart_btn i{
    font-size: 22px;
    color: #fff !important;
    position: relative;    /* stacking context para el icono */
    z-index: 1;
  }

  .cart_btn .btn_badge{
    position: absolute;
    top: -6px;             /* muévelo fino si hace falta */
    right: -8px;
    min-width: 16px;
    height: 16px;
    padding: 0 4px;
    border-radius: 9999px;
    font-size: 10px;
    line-height: 16px;
    display: flex;
    align-items: center;
    justify-content: center;

    /* que quede por encima de cualquier contenedor circular */
    z-index: 10;
    background: #b321a6;   /* si prefieres, pon el que usabas */
    color: #fff;
    font-weight: 700;
    pointer-events: none;  /* no interfiera con el click del carrito */
  }

  /* Evita duplicado del botón grande en mobile */
  .flat-wallet{ display: none !important; }
}



</style>
