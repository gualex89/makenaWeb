<!DOCTYPE html>
<html lang="en">

	@php
		
		// SDK de Mercado Pago
		use MercadoPago\MercadoPagoConfig;
		use MercadoPago\Client\Preference\PreferenceClient;
		// Agrega credenciales
		MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));

		$client = new PreferenceClient();
		$preference = $client->create([
		"items"=> array(
			array(
			"title" => "Mi producto",
			"quantity" => 1,
			"unit_price" => 9550
			)
		)
		]);
		$preference->back_urls = array(
			"success" => "https://www.tu-sitio/success",
			"failure" => "http://www.tu-sitio/failure",
			"pending" => "http://www.tu-sitio/pending"
		);
	@endphp	


	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Makena</title>
		<link rel="shortcut icon" href="images/logo/makenaMiniIcon.png">

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
		<style>
			.sb_category ul ul {
				display: none;
				list-style: none;
			}
	
			
			.sb_category ul li.active > ul {
				display: block;
			}
		</style>

	</head>


	<body class="home_motorcycle">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_carparts_red">
			<a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<!-- <div id="preloader"></div> -->
		<!-- preloader - end -->


		<!-- header_section - start
		================================================== -->
		<header class="header_section motorcycle_header sticky_header clearfix">
			<div class="header_content_wrap d-flex align-items-center" id="cintillo_carrito">
				<div class="container-fluid prl_90">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<div class="brand_logo">
								<a class="brand_link" href="/">
									<img src="images/logo/logoMakena.png" srcset="images/logo/logoMakena.png 2x" alt="logo_not_found">
								</a>

								<ul class="mh_action_btns ul_li clearfix">
									
									<li>
										<button type="button" class="cart_btn">
											<i class="fal fa-shopping-cart"></i>
											<span class="btn_badge">2</span>
										</button>
									</li>
									<li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li class="menu_item_has_child">
										<a href="/">Home</a>
									</li>
									<li class="menu_item_has_child">
										<a href="/catalogo">Catálogo</a>
									</li>
									<li class="menu_item_has_child">
										<a href="/tufunda">Crea tu Funda</a>
									</li>
								</ul>
							</nav>
						</div>

						<div class="col-lg-4">
							<ul class="action_items ul_li_right clearfix">
								
								<li>
									<button type="button" class="mobile_menu_btn bg_carparts_red">
										<i class="fas fa-th"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			
		</header>
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main>
			<div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<div class="msb_widget brand_logo text-center">
						<a href="/">
							<img src="images/logo/logo_25_1x.png" srcset="images/logo/logo_black.png" alt="logo_not_found">
						</a>
					</div>

					<div class="msb_widget mobile_menu_list clearfix">
						<h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu</h3>
						<ul class="ul_li_block clearfix">
							<li>
								<a href="/" aria-haspopup="true" aria-expanded="false">Home</a>
							</li>
							<li>
								<a href="/catalogo" aria-haspopup="true" aria-expanded="false">Catálogo</a>
							</li>
							<li>
								<a href="/tufunda" aria-haspopup="true" aria-expanded="false">Crea tu Funda</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="overlay"></div>
			</div>

			


			<!-- breadcrumb_section - start
			================================================== -->
			
			<section class="breadcrumb_section_carrito  has_overlay" >
				
				
			</section>
			<!-- breadcrumb_section - end
			================================================== -->
			<!-- product_section - start
			================================================== -->
			
				<!-- cart_section - start
			================================================== -->
			<section class="cart_section sec_ptb_140 clearfix">
				<div class="container d-flex align-items-start">
		
					<div class="cart_table mb_50 col-lg-8">
						<table class="table">
							<thead class="text-uppercase">
								<tr>
									<th>Producto</th>
									<th>Precio</th>
								</tr>
							</thead>
							<tbody>
								
								
							</tbody>
						</table>
					</div>
		
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<!-- Contenido de este div -->
						<div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
							<h3 class="table_title text-center" data-bg-color="#ededed">Total</h3>
							<ul class="ul_li_block clearfix">
								<li><span>Subtotal</span> <span>$0</span></li>
								<li><span>Total</span> <span>$0</span></li>
							</ul>
							<a href="/checkout" class="custom_btn bg_success">Realizar Pago</a>
						</div>
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
			<div class="footer_widget_area sec_ptb_100 clearfix" data-background="images/backgrounds/makenaFooterBackground.webp">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
							<div class="footer_widget footer_about text-center">
								<div class="brand_logo mb_30">
									<a href="#!">
										<img src="images/logo/logoMakena.png" srcset="images/logo/logo_22_2x.png 2x" alt="logo_not_found">
									</a>
								</div>

								<ul class="footer_contact_info ul_li_block mb_30 clearfix">
									<li><span>Email:</span> contacto@makenafundas.com.ar</li>
									<li><span>Teléfono:</span> 11 2244 4188</li>
								</ul>

								<ul class="circle_social_links ul_li clearfix justify-content-center d-flex">
									<li><a href="https://www.instagram.com/makenafundas/"><i class="fab fa-instagram"></i></a></li>
									<li><a href="http://wa.me/541122444188"><i class="fab fa-whatsapp"></i></a></li>
									<li><a href="https://www.facebook.com/makenafundas"><i class="fab fa-facebook-f"></i></a></li>
								</ul>
							</div>
						</div>

						

						

						

					</div>
				</div>
			</div>

			<div class="footer_bottom text-center" data-bg-color="#151515">
				<div class="container">
					<p class="copyright_text mb-0">
						© All Rights Reserved <a href="#!" class="author_link text-white">jthemes</a>
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
						$('.image-item[data-category="' + category + '"]').show(); // Mostrar imágenes de la categoría seleccionada
					}
				}
			});
			document.addEventListener('DOMContentLoaded', function () {
				const parentItems = document.querySelectorAll('.parent');

				parentItems.forEach(item => {
					item.addEventListener('click', function (event) {
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
					document.querySelectorAll('.cart_pricing_table ul li span:nth-child(2)').forEach(function(element, index) {
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
											<img src="${cartItem.image}" alt="${cartItem.name}">
										</div>
										<div class="item_content">
											<h4 class="item_title">${cartItem.name}</h4>
											<span class="item_type">${cartItem.marca} ${cartItem.modelo}</span>
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
		<script src="https://sdk.mercadopago.com/js/v2"></script>
		<script>
			
			const mp = new MercadoPago("{{config('services.mercadopago.key')}}");
			const bricksBuilder = mp.bricks();


			mp.bricks().create("wallet", "wallet_container", {
				initialization: {
					preferenceId: '{{$preference->id}}',
				},
				customization: {
				texts: {
					
					valueProp: 'smart_option',
				},
				},
				});

		</script>
		
		
		
		
		
		
		
		

		
	</body>
</html>