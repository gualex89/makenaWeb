<!DOCTYPE html>
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Makena</title>
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">


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

    <style>
        .sb_category ul ul {
            display: none;
            list-style: none;
        }


        .sb_category ul li.active>ul {
            display: block;
        }
    </style>

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
        @include('partials.sidebar')




        <!-- breadcrumb_section - start
   ================================================== -->


        <!-- breadcrumb_section - end
   ================================================== -->
        <!-- product_section - start
   ================================================== -->

        <!-- cart_section - start
   ================================================== -->
        <section
            class="cart_section sec_ptb_140 clearfix cart_section vh-100 d-flex justify-content-center align-items-center">
            <div class="container text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="images/logos/fail.png" alt="icono fail" width="20%">
                    <h1>¡Oh No, Ocurrió un error en el pago!</h1>

                    <h3></h3>
                    <h3></h3>
                    <h2 class="mt-5"> Ánimo volvé a intentarlo </h2>

                    <a class="custom_btn bg_carparts_red text-uppercase" href="/carrito">Volver al Carrito</a>

                    <p class="mt-5"></p>
                </div>
            </div>
        </section>
        <!-- cart_section - end
   ================================================== -->

        <!-- product_section - end
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
        $(document).ready(function() {
            // Mostrar todas las imágenes al cargar la página
            showImages('all');

            // Manejar el clic en los enlaces de filtrado
            $('a[data-category]').on('click', function(e) {
                e.preventDefault();
                var category = $(this).data('category');
                showImages(category);
            });

            // Función para mostrar/ocultar imágenes según la categoría
            function showImages(category) {
                $('.image-item').hide(); // Ocultar todas las imágenes

                if (category === 'all') {
                    $('.image-item').show(); // Mostrar todas las imágenes si la categoría es 'all'
                } else {
                    $('.image-item[data-category="' + category + '"]')
                .show(); // Mostrar imágenes de la categoría seleccionada
                }
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const parentItems = document.querySelectorAll('.parent');

            parentItems.forEach(item => {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    this.classList.toggle('active');

                    // Desactivar todas las categorías
                    parentItems.forEach(parent => {
                        if (parent !== this && parent.classList.contains('active')) {
                            parent.classList.remove('active');
                        }
                    });
                    // Activar la categoría seleccionada

                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function updateCartCounter() {
                const badgeElements = document.querySelectorAll('.btn_badge');
                badgeElements.forEach(function(element) {
                    element.textContent = cartItems.length;
                });
            }

            function updatePrices(subtotal, total) {
                // Actualizar subtotal y total en el resumen del carrito
                document.querySelectorAll('.cart_pricing_table ul li span:nth-child(2)').forEach(function(element,
                    index) {
                    if (index === 0) { // Primer span es el subtotal
                        element.textContent = `$${subtotal.toFixed(2)}`;
                    } else if (index === 1) { // Segundo span es el total
                        element.textContent = `$${total.toFixed(2)}`;
                    }
                });
            }

            function updateCartItems(cartItems) {
                const cartTableBody = document.querySelector('.cart_section table tbody');
                cartTableBody.innerHTML = '';

                let subtotal = 0; // Inicializamos el subtotal a 0
                cartItems.forEach(function(cartItem, index) {
                    const itemPrice = cartItem.price; // Precio individual del producto
                    subtotal += itemPrice; // Sumamos el precio individual al subtotal total

                    const cartItemHTML = `
							<tr>
								<td>
									<div class="cart_product">
										<div class="item_image">
											<img src="${cartItem.image}" alt="Funda en carrito ${cartItem.name}">
										</div>
										<div class="item_content"> 
											<span class="item_type">${cartItem.marca2 ? `Funda Doble ` : `Funda ` }<h4 class="item_title">${cartItem.name}</h4>
											${cartItem.marca} ${cartItem.modelo}
											${cartItem.marca2 ? `<span class="item_type">${cartItem.marca2} ${cartItem.modelo2}</span>` : ``}
											
											<b> <span class="item_price">$${cartItem.price}</span> </b>
										</div>
										<button type="button" class="remove_btn">
											<i class="fal fa-times"></i>
										</button>
									</div>
								</td>
								<td><span class="item_price" style="font-size: 30px; ">$${itemPrice.toFixed(2)}</span></td> 
							</tr>
						`;
                    cartTableBody.innerHTML += cartItemHTML;
                });

                // Calcular el total basado en el subtotal
                const total = subtotal;

                // Actualizar precios del carrito
                updatePrices(subtotal, total);

                // Reasignar eventos click a los botones de eliminar
                document.querySelectorAll('.remove_btn').forEach(function(removeButton, index) {
                    removeButton.addEventListener('click', function() {
                        // Eliminar el elemento del carrito en el índice especificado
                        cartItems.splice(index, 1);

                        // Actualizar localStorage
                        localStorage.setItem('cartItems', JSON.stringify(cartItems));

                        // Actualizar contador del carrito
                        updateCartCounter();

                        // Actualizar visualización del carrito
                        updateCartItems(cartItems);
                    });
                });
            }

            // Obtener los elementos del carrito almacenados en el localStorage
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            // Actualizar visualización del carrito
            updateCartItems(cartItems);
            updateCartCounter();
        });
    </script>











</body>

</html>
