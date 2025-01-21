<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Fundas para tu Celu - Makena | Personalizadas para Samsung, Motorola, Xiaomi e iPhone</title>
    <meta name="description" content="Fundas personalizadas para Samsung, Motorola, Xiaomi y iPhone en Makena. Elige entre más de 1000 modelos o crea tu diseño. Envíos a toda Argentina.">
    <meta name="keywords" content="fundas personalizadas, fundas celulares, carcasas, anime, Dragon Ball, iPhone, Samsung, Argentina">
    <link rel="canonical" href="https://makenafundas.com.ar">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Fundas para celulares en Argentina - Makena">
    <meta property="og:description" content="Compra fundas personalizadas y de alta calidad para tu celular. Envíos rápidos y precios accesibles en toda Argentina.">
    <meta property="og:image" content="https://makenafundas.com.ar/images/logo/makenaminiicon.png">
    <meta property="og:url" content="https://makenafundas.com.ar">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fundas para tu Celular - Makena">
    <meta name="twitter:description" content="Fundas personalizadas para Samsung, Motorola, Xiaomi y iPhone. ¡Crea tu funda en Makena!">
    <meta name="twitter:image" content="https://makenafundas.com.ar/images/logo/makenaminiicon.png">

    <link rel="shortcut icon" href="images/logo/makenaminiicon.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="css/nice-select.css">
    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9QG5632');
    </script>
    <!-- End Google Tag Manager -->

</head>




<body class="home_motorcycle">


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9QG5632" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_wts">
        <a href="http://wa.me/541122444188" class="go_to_wts">
            <i class="fab fa-whatsapp" style="font-size: 24px;"></i>
        </a>
    </div>

    <!-- backtotop - end -->

    <!-- preloader - start -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader - end -->


    <!-- header_section - start
  ================================================== -->
    @include('partials.header')
    <!-- header_section - end
  ================================================== -->


    <!-- main body - start
  ================================================== -->
    <main>


        <!-- sidebar mobile menu & sidebar cart - start
   ================================================== -->
        @include('partials.sidebar')
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->




        <!-- slider_section - start
   ================================================== -->
        <section class="slider_section motorcycle_slider position-relative clearfix">
            <div class="main_slider clearfix" data-slick='{"dots": false}'>
                @foreach ($sliderPrincipal as $image)
                    <div class="item d-flex align-items-center text-white"
                        data-background="images/slider/motorcycle/bg_01.webp">
                        <span class="overlay" data-bg-color="#191919"></span>
                        <div class="container maxw_1430">
                            <div class="col-lg-6">
                                <div class="slider_content">
                                    <h3 class="text-white" data-animation="fadeInUp" data-delay=".4s">
                                        {{ $image->texto1 }} <span>{{ $image->texto_resaltado }} </span>
                                        {{ $image->texto2 }}
                                    </h3>
                                    <p data-animation="fadeInUp" data-delay=".6s">

                                    </p>
                                    <div class="abtn_wrap" data-animation="fadeInUp" data-delay=".8s">
                                        <a class="custom_btn bg_carparts_red text-uppercase"
                                            href="{{ $image->href }}">{{ $image->nombre_boton }} </a>
                                    </div>
                                </div>
                            </div>

                            <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                                <img src="{{ Voyager::image($image->image) }}" alt="{{ $image->name }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="carousel_nav">
                <button type="button" class="main_left_arrow"> <i class="fal fa-arrow-left"></i></button>
                <button type="button" class="main_right_arrow"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="slide_count_wrap">
                <span class="current">1</span>
                <span class="total">{{ $totalImages }}</span>
            </div>
        </section>
        <!-- slider_section - end
   ================================================== -->


        <section class="video_section mb-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="video">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/nZBAXstf5Zs"
                                frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="descripcion">
                            <p style="font-size: 50px; text-align: center; font-weight: bold; line-height: 1.2;"><span
                                    style="color: #F831FE">Todo</span> lo que buscabas</p>

                            <p style="font-size: 35px; text-align: center; line-height: 1.4;">Acabado brillante,
                                impresión <strong>Ultra HD 1200 DPI</strong> altura borde de cámara 1.5mm para
                                <strong>protegerla</strong> y agarres laterales <strong>anti-slip</strong>.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- product_section - start
   ================================================== -->
        <section class="product_section sec_ptb_100 deco_wrap clearfix">
            <div class="container maxw_1430">
                <div class="motorcyclenuevas_section_title mb_30 text-center">
                    <h1 class="title_text">Nuestros <span>Productos</span></h1>
                </div>
                <div class="tab-content mb_50">
                    <div class="row justify-content-center">
                        @foreach ($misProductos as $key => $producto)
                            @if ($key % 3 == 0)
                    </div>
                    <div class="row justify-content-center">
                        @endif
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div id="latest_tab" class="tab-pane active">
                                <div class="motorcycle_product_grid">
                                    <div class="item_image">
                                        <a href="/catalogo">
                                            <img src="{{ Voyager::image($producto->image) }}" alt="Funda personalizada de {{ $producto->name }}">
                                        </a>
                                    </div>
                                    <div class="item_content">

                                        <h3 class="item_title">
                                            <a href="#!">{{ $producto->name }}</a>
                                        </h3>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="abtn_wrap text-center pt-5 mt_5">
                        <a class="custom_btn bg_carparts_red text-uppercase special_button" style="max-width: 200px;"
                            href="/catalogo">Ver Más</a>
                    </div>
                </div>



            </div>

            <div class="deco_image motorcycle_image_1">
                <img class="imagen_lateral_base" style="display: none" src="images/backgroundLateral.png"
                    alt="Funda personalizada lateral">
            </div>
        </section>
        <!-- product_section - end
   ================================================== -->





        <!-- feature_section - start
   ================================================== -->
        <section class="feature_section clearfix" id="cortinas">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature_fullimage text-center">
                            <img src="images/ventajastpu.webp" alt="Fundas personalizadas con Bordes antideslizantes">
                            <div class="item_content">
                                <h3 class="item_title text-white mb_30">BORDES</h3>
                                <h3 class="item_title text-white mb_30">ANTIDESLIZANTES</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature_fullimage text-center fondo-ventajas">
                            <img src="images/ventajastpu2.webp" alt="Fundas personalizadas con laminas de aluminio">
                            <div class="item_content">
                                <h3 class="item_title text-white mb_30">LÁMINA DE</h3>
                                <h3 class="item_title text-white mb_30">ALUMINIO</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature_fullimage text-center">
                            <img src="images/ventajastpu3.webp" alt="Fundas personalizadas con cubierta TPU">
                            <div class="item_content">
                                <h3 class="item_title text-white mb_30">CUBIERTA</h3>
                                <h3 class="item_title text-white mb_30">TPU</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature_fullimage text-center">
                            <img src="images/ventajastpu4.webp" alt="Fundas personalizadas con Bordes antideslizantes">
                            <div class="item_content">
                                <h3 class="item_title text-white mb_30">BORDES</h3>
                                <h3 class="item_title text-white mb_30">ANTI-GOLPES</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_section - end
   ================================================== -->





        <!-- testimonial_section - start
   ================================================== -->
        <section class="testimonial_section motorcycle_testimonial sec_ptb_100 clearfix">
            <div class="half_bg parallaxie" data-background="images/backgrounds/ventajasbackground.webp"></div>
            <div class="container maxw_1430">
                <div class="carousel_wrap position-relative">
                    <div class="motorcycle_testimonial_carousel" data-slick='{"dots": false}'>
                        <div class="item">
                            <div class="motorcycle_testimonial_item bg_white">
                                <div class="item_image">
                                    <img src="images/seComplico.webp" alt="Funda personalizada">
                                </div>
                                <div class="item_content">
                                    <h4 class="sub_title">¿Se complicó?</h4>
                                    <h3 class="title_text">
                                        NUESTRA ATENCIÓN TAMBIÉN ES <span>PERSONALIZADA</span>
                                    </h3>
                                    <h4 class="mb-0">
                                        A veces "Crea tu Funda" no es suficiente para lograr la funda perfecta. Nuestro
                                        diseñador esta On fire para ayudarte. Escribinos a nuestro
                                        whatsapp para cotizar!
                                    </h4>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
        </section>
        <!-- testimonial_section - end
   ================================================== -->








    </main>
    <!-- main body - end
  ================================================== -->


    <!-- footer_section - start
  ================================================== -->
    <footer class="footer_section motorcycle_footer clearfix">
        <div class="footer_widget_area sec_ptb_100 clearfix"
            data-background="images/backgrounds/makenaFooterBackground.webp">
            <div class="container">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="footer_widget footer_about text-center">
                            <div class="brand_logo mb_30">
                                <a href="#!">
                                    <img src="images/logo/logomakena.png" alt="logo makena">
                                </a>
                            </div>

                            <ul class="footer_contact_info ul_li_block mb_30 clearfix">
                                <li><span>Email:</span> contacto@makenafundas.com.ar</li>
                                <li><span>Teléfono:</span> 11 2244 4188</li>
                            </ul>

                            <ul class="circle_social_links ul_li clearfix justify-content-center d-flex">
                                <li><a href="https://www.instagram.com/makenafundas/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://wa.me/541122444188"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://www.facebook.com/makenafundas"><i
                                            class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>







                </div>
            </div>
        </div>

        <div class="footer_bottom text-center" data-bg-color="#151515">
            <div class="container">
                <p class="copyright_text mb-0">
                    © Diseñado por <a href="https://wa.me/56967656673" class="author_link text-white">Tatsu Web
                        Design</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer_section - end
  ================================================== -->


    <!-- fraimwork - jquery include -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- mobile menu - jquery include -->
    <script src="js/mCustomScrollbar.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="js/gmaps.min.js"></script>

    <!-- animation - jquery include -->
    <script src="js/parallaxie.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- nice select - jquery include -->
    <script src="js/nice-select.min.js"></script>

    <!-- carousel - jquery include -->
    <script src="js/slick.min.js"></script>

    <!-- countdown timer - jquery include -->
    <script src="js/countdown.js"></script>

    <!-- popup images & videos - jquery include -->
    <script src="js/magnific-popup.min.js"></script>

    <!-- filtering & masonry layout - jquery include -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>

    <!-- jquery ui - jquery include -->
    <script src="js/jquery-ui.js"></script>

    <!-- custom - jquery include -->
    <script src="js/custom.js"></script>

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
                cartItemsList.innerHTML = ''; // Limpiar la lista de elementos del carrito

                cartItems.forEach(cartItem => {
                    const cartItemHTML = `
							<li>
								<div class="item_image">
									<img src="${cartItem.image}" alt="Funda en carrito ${cartItem.name}"> <!-- Usar la URL de la imagen -->
								</div>
								<div class="item_content"> 
									<span class="item_type">${cartItem.marca2 ? `Funda Doble ` : `Funda ` }<h4 class="item_title">${cartItem.name}</h4>
									${cartItem.marca} ${cartItem.modelo}
									${cartItem.marca2 ? `<span class="item_type">${cartItem.marca2} ${cartItem.modelo2}</span>` : ``}
									
									<b> <span class="item_price">$${cartItem.price}</span> </b>
								</div>
								<button type="button" class="remove_btn"><i class="fal fa-trash-alt remove_btn"></i></button>
							</li>
						`;
                    cartItemsList.innerHTML += cartItemHTML;
                });

                // Actualizar el contador del carrito
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
                if (event.target.classList.contains('remove_btn')) {
                    const item = event.target.closest('li');
                    removeFromCart(item);
                }
            });
        });
    </script>


</body>

</html>
