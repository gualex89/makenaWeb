<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Open9 | NFT Marketplace HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets_new/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets_new/icon/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body class="body">

    <div id="wrapper">
        <div id="page" class="pt-40 home-1">

            <!-- header_section - start
            ================================================== -->
            @include('partials.headernew')
            <!-- header_section - end
            ================================================== -->
            
            <!-- Banner_section - start
            ================================================== -->

            <div class="swiper swiper-motorcycle-banner" style="width:100vw; max-width:1920px; height:42.25vw; max-height:1080px; margin:auto; position:relative;">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        
                        <div class="swiper-slide" style="position:relative;">
                            <img src="{{ Voyager::image($banner->image) }}" alt="{{ $banner->name }}" style="width:100%; object-fit:cover;" class="desktop-image">
                            <img src="{{ Voyager::image($banner->image_mobile) }}" alt="{{ $banner->name }}" style="width:100%; object-fit:cover; display:none;" class="mobile-image">

                            <div class="slide-btn-wrapper">
                                <div class="button-banner">
                                    <a href="{{ $banner->href }}" class="tf-button style-1" style="width:220px; height:60px; display:inline-flex; align-items:center; justify-content:center;">
                                        {{ $banner->name_button }}<i class="icon-arrow-up-right2" style="margin-left:8px;"></i>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    @endforeach
                </div>
                <!-- Botones dentro del swiper -->
                <div class="swiper-button-next next-3d over" style="z-index: 10; right: 20px;"></div>
                <div class="swiper-button-prev prev-3d over" style="z-index: 10; left: 20px;"></div>
            </div>

            <!-- Banner_section - end
            ================================================== -->
            
            
            <div class="tf-card-box style-1 mt-5 p-5" style="width: 80%; margin:auto;">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="video">
                            <iframe width="100%" height="315" class="yt-video" src="https://www.youtube.com/embed/nZBAXstf5Zs"
                                frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="descripcion p-4" style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                            <p class="tiulo-resaltado"><span
                                    style="color: #b321a6">Todo</span> lo que buscabas</p>

                            <p class="parrafo-resaltado" >Acabado brillante,
                                impresión <strong>Ultra HD 1200 DPI</strong> altura borde de cámara 1.5mm para
                                <strong>protegerla</strong> y agarres laterales <strong>anti-slip</strong>.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            

            <div class="flat-pages-title">
                <div class="widget-bg-line">
                    <div class="wraper">
                        <div class="bg-grid-line y bottom">
                            <div class="bg-line"></div>
                        </div>
                    </div>
                </div>
                <div class="themesflat-container w1490">
                    <div class="row">
                        <div class="col-12 pages-title">
                            
                            <div class="icon-background">
                                <img class="absolute item1" src="{{ asset('assets_new/images/item-background/item1.png') }} " alt="">
                                <img class="absolute item2" src="{{ asset('assets_new/images/item-background/item2.png') }} " alt="">
                                
                                <img class="absolute item4" src="{{ asset('assets_new/images/item-background/item1.png') }} " alt="">
                                <img class="absolute item5" src="{{ asset('assets_new/images/item-background/item1.png') }}" alt="">
                                
                                <img class="absolute item7" src="{{ asset('assets_new/images/item-background/item5.png' ) }}" alt="">
                                <img class="absolute item8" src="{{ asset('assets_new/images/item-background/item5.png' ) }}" alt="">
                            </div>
                            <div class="relative">
                                <div class="swiper swiper-3d-7" >
                                    <div class="swiper-wrapper">
                                        @foreach ($carrusel_cuadros as $carrusel_cuadro)
                                            <div class="swiper-slide">
                                                <div class="tf-card-box tf-card-box-cuadros">
                                                    <div class="card-media">
                                                        <a href="#">
                                                            <img src="{{ Voyager::image($carrusel_cuadro->image) }}" alt="Cuadro personalizado de {{ $carrusel_cuadro->name }}">
                                                        </a>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="meta-info text-center">
                                                        <h5 class="name"><a href="nft-detail-2.html">{{ $carrusel_cuadro->name }}</a></h5>
                                                        <h6 class="price gem"><i class="icon-gem"></i>{{ $carrusel_cuadro->text1 }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination pagination-number"></div>
                                </div>
                                <div class="swiper-button-next next-3d over"></div>
                                <div class="swiper-button-prev prev-3d over"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            

            <div class="tf-section-3 discover-item ">
                <div class="themesflat-container">
                    <div class="row">
                        
                        @foreach ($home_categories_fundas as $home_categories_funda)
                        <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="{{ $home_categories_funda->href }}">
                                        <img src="{{ Voyager::image($home_categories_funda->image) }}" alt="{{ $home_categories_funda->name }}">
                                    </a>
                                    <div class="button-place-bid">
                                        <a href="{{ $home_categories_funda->href }}"  class="tf-button"><span>Ir a {{$home_categories_funda->name}}</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">{{ $home_categories_funda->name }}</a></h5>
                                
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">

                                    <h6 class="price gem"><i class="icon-dollar"></i>{{ $precioFunda }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="tf-section create-sell">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section justify-content-center">
                                <h5 class="tf-title pb-30">Comprá rápido, fácil y seguro</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tf-box-icon relative text-center">
                                <div class="image">
                                    <img src="{{ asset('assets_new/icon/envios.png') }}" alt=""> 
                                                                                                              
                                </div>
                                <h5 class="heading"><a href="contact-us.html">Envíos a todo el país</a></h5>
                                <p class="content">Recibí tu pedido donde estés. Trabajamos con envíos rápidos y seguros a todas las provincias.</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tf-box-icon relative text-center type-1">
                                <div class="image">
                                    <img src="{{ asset('assets_new/icon/medios_pagos.png') }}" alt=""> 
                                                                                                            
                                </div>
                                <h5 class="heading"><a href="contact-us.html">Aceptamos todos los medios de pago</a></h5>
                                <p class="content">Elegí la forma de pago que más te convenga, con un proceso simple y completamente seguro.</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tf-box-icon relative text-center">
                                <div class="image">
                                    <img src="{{ asset('assets_new/icon/compra_segura.png') }}" alt=""> 
                                                                                                             
                                </div>
                                <h5 class="heading"><a href="contact-us.html">Tu compra es segura</a></h5>
                                <p class="content">Protegemos tus datos y tu información en cada transacción.</p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="tf-section action">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="action__body">
                                <div class="tf-tsparticles">
                                    <div id="tsparticles1" data-color="#161616" data-line="#000"></div>
                                </div>
                                <h3>Dale tu toque o encontrá el match ideal</h3>
                                <div class="flat-button flex">
                                    <a href="/tufunda" class="tf-button style-2 h50 w190 mr-10">Crea tu Funda<i class="icon-arrow-up-right2"></i></a>
                                    <a href="/catalogo" class="tf-button style-2 h50 w230">Ir al Catálogo<i class="icon-arrow-up-right2"></i></a>
                                </div>
                                <div class="bg-home7">
                                    <div class="swiper-container autoslider3reverse" data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-2.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container autoslider4reverse" data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false,
                                            "reverseDirection": true
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-3.png') }}" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-4.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container autoslider3reverse" data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-6.png') }}" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-6.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer_section - start
            ================================================== -->
            @include('partials.footernew')
            <!-- footer_section - end
            ================================================== -->
        
        </div>
        <!-- /#page -->

        <!-- Carrito Sidebar -->
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
    <!-- /#wrapper -->

    

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets_new/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/bootstrap.min.js') }}"></script>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let cartItemCount = 0;
            let subtotal = 0;
            let total = 0;
            let cartItems = [];

            function updateCartCounter() {
                const badgeElements = document.querySelectorAll('.btn_badge');
                badgeElements.forEach(function(element) {
                    element.textContent = cartItemCount;
                });
            }

            function updatePrices() {
                const subtotalElement = document.querySelector('.total_price li:nth-child(1) span:nth-child(2)');
                const totalElement = document.querySelector('.total_price li:nth-child(2) span:nth-child(2)');

                subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                totalElement.textContent = `$${total.toFixed(2)}`;
            }

            function addToCart(productItem) {
                const price = parseFloat(productItem.querySelector('.item_price').textContent.replace('$', ''));
                const itemName = productItem.querySelector('.item_title').textContent;
                const imageUrl = productItem.querySelector('img').getAttribute(
                    'src'); // Obtener la URL de la imagen completa

                cartItemCount++;
                subtotal += price;
                total = subtotal;

                const cartItem = {
                    name: itemName,
                    price: price,
                    image: imageUrl // Guardar la URL completa de la imagen en el objeto del carrito
                };

                cartItems.push(cartItem);

                // Guardar el carrito en el almacenamiento local
                localStorage.setItem('cartItems', JSON.stringify(cartItems));

                // Llamar a la función para mostrar los elementos del carrito
                updateCartItems();
                updatePrices();
            }

            function updateCartItems() {
                    const cartItemsList = document.querySelector('.cart_items_list');
                    if (!cartItemsList) return;

                    cartItemsList.innerHTML = '';

                    cartItems.forEach(cartItem => {
                    let tipoProducto = 'Funda';

                    if (cartItem.marca2) {
                    tipoProducto = 'Funda Doble';
                    } else if (cartItem.name.toLowerCase().includes('cuadro')) {
                    tipoProducto = 'Cuadro';
                    }

                    const cartItemHTML = `
                        <li style="background:transparent; margin-bottom:32px; padding:0; display:flex; align-items:center;">
                        <div style="background:#fff; border-radius:18px; padding:12px; display:flex; align-items:center; width:70px; min-width:30px; justify-content:center;">
                            <img src="${cartItem.image}" alt="${tipoProducto} ${cartItem.name}" style="width:100%; border-radius:4px; display:block;"/>
                        </div>
                        <div class="item_content" style="color:#fff; margin-left:18px; position:relative; flex:1;">
                            <div style="padding-right:32px;">
                            <span class="item_type" style="font-size:13px;">${tipoProducto}</span>
                            <div style="font-weight:700; font-size:18px; margin:2px 0;"><span class="item_title">${cartItem.name}</span></div>
                            <div style="font-size:15px; margin-bottom:2px;">${cartItem.marca || ''} ${cartItem.modelo || ''}</div>
                            ${cartItem.marca2 ? `<div style="font-size:15px;">${cartItem.marca2} ${cartItem.modelo2}</div>` : ''}
                            <div style="font-weight:700; font-size:17px; margin-top:6px;"><span class="item_price">$${cartItem.price.toLocaleString('es-CL')}</span></div>
                            </div>
                        </div>
                        <button type="button" class="remove_btn" style="background:none; border:none; color:#fff; font-size:2rem;">
                            <i class="bi bi-trash"></i>
                        </button>
                        </li>
                    `;

                    cartItemsList.innerHTML += cartItemHTML;
                    });

                    updateCartCounter();
                }

            // Restaurar el carrito al cargar la página
            function restoreCart() {
                const storedCartItems = localStorage.getItem('cartItems');
                if (storedCartItems) {
                    cartItems = JSON.parse(storedCartItems);
                    cartItemCount = cartItems.length;
                    cartItems.forEach(cartItem => {
                        subtotal += cartItem.price;
                    });
                    total = subtotal;

                    updateCartItems();
                    updatePrices();
                }
            }

            function removeFromCart(item) {
                const itemName = item.querySelector('.item_title').textContent;

                // Encontrar el índice del elemento a eliminar en cartItems
                const indexToRemove = cartItems.findIndex(cartItem => cartItem.name === itemName);

                if (indexToRemove !== -1) { // Verificar si se encontró el elemento
                    const price = cartItems[indexToRemove].price;

                    // Actualizar subtotal y total
                    subtotal -= price;
                    total = subtotal;

                    // Eliminar el elemento del carrito
                    cartItems.splice(indexToRemove, 1);

                    // Actualizar el almacenamiento local
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));

                    // Actualizar el contador del carrito
                    cartItemCount--;

                    // Actualizar la visualización del carrito
                    updateCartItems();
                    updatePrices();
                    updateCartCounter(); // Actualizar el contador del carrito
                }
            }


            // Llamar a la función para restaurar el carrito al cargar la página
            restoreCart();

            document.querySelectorAll('.product_action_btns a').forEach(btn => {
                btn.addEventListener('click', function(event) {
                    event.preventDefault();
                    const productItem = this.closest('.motorcycle_product_grid');
                    addToCart(productItem);
                });
            });

            document.querySelector('.cart_items_list').addEventListener('click', function(event) {
                if (
                    event.target.classList.contains('remove_btn') ||
                    (event.target.closest('.remove_btn'))
                ) {
                    const item = event.target.closest('li');
                    removeFromCart(item);
                }
            });
            document.addEventListener('mousedown', function(event) {
                const sidebar = document.querySelector('.cart_sidebar');
                if (
                    sidebar.style.display === 'block' &&
                    !sidebar.contains(event.target) &&
                    !event.target.classList.contains('open-cart-sidebar')
                ) {
                    closeCartSidebar();
                }
            });

            // Mostrar/ocultar sidebar del carrito
            function openCartSidebar() {
                document.querySelector('.cart_sidebar').style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
            function closeCartSidebar() {
                document.querySelector('.cart_sidebar').style.display = 'none';
                document.body.style.overflow = '';
            }
            document.querySelectorAll('.open-cart-sidebar').forEach(btn => {
                btn.addEventListener('click', openCartSidebar);
            });
            document.querySelector('.cart_sidebar .close_btn').addEventListener('click', closeCartSidebar);
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    new Swiper('.swiper-motorcycle-banner', {
        loop: true,
        navigation: {
            nextEl: '.swiper-motorcycle-banner .swiper-button-next',
            prevEl: '.swiper-motorcycle-banner .swiper-button-prev',
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        effect: 'slide'
    });
});
</script>


</body>
</html>