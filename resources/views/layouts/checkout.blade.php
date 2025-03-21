<!DOCTYPE html>
<html lang="en">

	

	<style>
		#mensajeEntrega {
			font-size: 28px;
		}
	</style>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		

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

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-P9QG5632');</script>
	<!-- End Google Tag Manager -->

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

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9QG5632"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_wts">
			<a href="http://wa.me/541122444188" class="go_to_wts" >
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
			<div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<div class="msb_widget brand_logo text-center">
						<a href="/">
							<img src="images/logo/logo_black.png" srcset="images/logo/logo_black.png" alt="logo negro makena">
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
							<li>
								<a href="/frecuentes" aria-haspopup="true" aria-expanded="false">Preguntas Frecuentes</a>
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
			<section class="cart_section sec_ptb_20 clearfix">
				<section class="checkout_section sec_ptb_140 clearfix">
						<div class="container">
							<div class="accordion" id="accordionExample">
								<!-- Primer cuerpo del acordeón -->
								<div class="card">
									<div class="card-header" id="headingOne">
										<h4 class="mb-0">
											<button id="primerAcordeon" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Datos Personales
											</button>
										</h4>
									</div>
					
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<div class="form_wrap">
												<div class="row">
													<div class="col-lg-4">
														<div class="form_item">
															<span class="input_title">Nombre<sup>*</sup></span>
															<input type="text" name="nombre" 
															class="form-control" value="{{ old('nombre') }}">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form_item">
															<span class="input_title">Apellido<sup>*</sup></span>
															<input type="text" name="apellido" class="form-control" value="{{ old('apellido') }}">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form_item">
															<span class="input_title">DNI<sup>*</sup></span>
															<input type="text" name="dni" class="form-control" maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="{{ old('dni') }}" >
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6 form_item">
														<span class="input_title">Email<sup>*</sup></span>
														<input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
													</div>
													<div class="col-lg-6 form_item">
														<span class="input_title">Telefono<sup>*</sup></span>
														<input type="tel" name="telefono" class="form-control" id="telefonoInput" pattern="\d*" title="Ingrese solo números" value="{{ old('telefono') }}">
													</div>
												</div>
												<button  id="continuarButton1" class="custom_btn bg_carparts_red text-uppercase special_button"  style=" max-width: 200px;">Continuar</button>
											</div>
											
										</div>
									</div>
								</div>
					
								<!-- Segundo cuerpo del acordeón -->
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h4 class="mb-0">
											<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="segundoAcordeon" disabled>
												Tipo de entrega
											</button>
										</h4>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
											<div class="form_wrap">
												<div class="row">
													<div class="col-lg-6">
														<div class="pl-2">
															<input type="radio" id="radioRetiro" name="tipoEntrega" value="retiro" class="form-check-input">
															<label for="retiro">Retiro</label>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="pl-2">
															<input type="radio" id="radioEnvio" name="tipoEntrega" value="envio" class="form-check-input">
															<label for="envio">Envío</label>
														</div>
													</div>
												</div>
												
												<div id="mensajeEntrega" style="display: inline-block" class="mt-3"></div><small class="pl-5" id="soloNumeros" style="display: none;">Solo Números</small>
												
												<div class="form_item" id="codigoPostalContainer" style="display: none;">
													<span class="input_title">Código Postal<sup>*</sup></span>
													<input id="numeroCP" type="text" name="codigoPostal" class="form-control">
													<a href="https://www.correoargentino.com.ar/formularios/cpa" target="_blank"><small>No se mi Código Postal</small></a>
													<div>
														<button onclick="testZippin()" id="continuarTipoEntregaButton" class="custom_btn bg_carparts_red text-uppercase special_button"  style=" max-width: 200px;">Buscar</button>
													</div>
												</div>
											</div>
											<button  id="continuarButtonRetiro" class="custom_btn bg_carparts_red text-uppercase special_button"  style=" max-width: 200px;">Continuar</button>
											<div id="radioFields"></div>

											<div id="radioFieldsPuntoDeEntrega">
												<div id="mensajePuntoDeEntrega"></div>
												

											</div>
											<button  id="continuarButtonRetiroSucursal" class="custom_btn bg_carparts_red text-uppercase special_button"  style=" max-width: 200px; display:none">Continuar</button>

											<div id="formAddress" class="card-body" style="display: none" >
												<div class="form_wrap">
													<div class="row">
														<div class="col-lg-6">
															<div class="form_item">
																<div>
																	<label for="localidad">
																		<b>PROVINCIA*</b>
																	</label>
																</div>
																<div class="divProvinciaDropdown">
																	<select name="provincia" id="provinciasDropdown" class="form-control" style="width: 100%">
																		<option value="">Seleccione</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form_item">
																<div>
																	<label for="localidad">
																		<b>LOCALIDAD*</b>
																	</label>
																</div>
																<input type="text" name="localidad" class="form-control" >
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form_item">
																<div>
																	<label for="calle">
																		<b>CALLE*</b>
																	</label>
																</div>
																<input type="text" name="calle" class="form-control">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form_item">
																<div>
																	<label for="altura">
																		<b>ALTURA*</b>
																	</label>
																</div>
																<input type="text" name="altura" class="form-control">
															</div>
														</div>
														<div class="col-lg-12">
															<div class="form_item">
																<div>
																	<label for="comentarios">
																		<b>OBSERVACIONES PARA LA ENTREGA</b>
																	</label>
																</div>
																<input type="text" name="comentarios" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<button  id="continuarButton2" class="custom_btn bg_carparts_red text-uppercase special_button"  style=" max-width: 200px;">Continuar</button>
											</div>
										</div>
									</div>
								</div>	
								<!-- Tercer cuerpo del acordeón -->
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h4 class="mb-0">
											<button class="collapsed" type="button" aria-expanded="false" aria-controls="collapseThree" id="tercerAcordeon" disabled>
												Pagar
											</button>
										</h4>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<section class="cart_section sec_ptb_10 clearfix">
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
															<li><span>Subtotal</span> <span id="subtotalValor">$0</span></li>
															<li><span>Envío</span> <span id="envioValor">$0</span></li>
															<li id="descuentoSpan" style="display: none"><span>Descuento</span> <span id="descuentoValor">$0</span></li>
															<li><span>Total</span> <span id="totalValor">$0</span></li>
														
														<div>
															<div id="mercadopago_container">
																<div id="wallet_container"></div>
															</div>
															<ul class="ul_li_block clearfix">
															<div>
																<input type="text" id="discount-code" placeholder="Código de Descuento">
															</div>
														</ul>
        													<button id="apply-discount" class="custom_btn bg_success">Aplicar Descuento</button>
														</div>

														
														
													</div>
												</div>
									
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					
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
										<img src="images/logo/logomakena.png"  alt="logo makena">
									</a>
								</div>

								<ul class="footer_contact_info ul_li_block mb_30 clearfix">
									<li><span>Email:</span> contacto@makenafundas.com.ar</li>
									<li><span>Teléfono:</span> 11 2244 4188</li>
								</ul>

								<ul class="circle_social_links ul_li clearfix justify-content-center d-flex">
									<li><a href="https://www.instagram.com/makenafundas/"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://wa.me/541122444188"><i class="fab fa-whatsapp"></i></a></li>
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
						© Diseñado por <a href="https://wa.me/56967656673" class="author_link text-white">Tatsu Web Design</a>
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
		
		<script src="https://sdk.mercadopago.com/js/v2"></script>
		<script>
			
			

		</script>
		<script>
			// JavaScript para controlar el botón "Continuar" y habilitar el segundo acordeón
			$('#continuarButton1').on('click', function() {
				// Verificar si se han completado los campos del primer formulario (datos personales)
				var nombre = $('input[name=nombre]').val().trim();
				var apellido = $('input[name=apellido]').val().trim();
				var email = $('input[name=email]').val().trim();
				var telefono = $('input[name=telefono]').val().trim();
				var telefonoPattern = /^\d{10}$/;
				var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

				
				
				
    			

				//Validadacion de formato de correo
				if (!email.match(emailPattern)) {
					alert('Por favor, introduce un correo electrónico válido.');
					event.preventDefault();
				}
				
				if (!telefono.match(telefonoPattern)) {
					alert('Por favor, introduce un número de teléfono válido');
					event.preventDefault();
				}
		
				if (nombre !== '' && apellido !== '' && email !== '' && telefono !=='' && email.match(emailPattern) && telefono.match(telefonoPattern)) {
					// Habilitar y expandir el segundo acordeón
					$('#segundoAcordeon').removeAttr('disabled');
					$('#collapseTwo').collapse('show');
				} else {
					alert("Por favor, complete todos los campos del formulario de datos personales.");
				}
			});
			$('input[name=tipoEntrega]').on('change', function() {
				var selectedValue = $('input[name=tipoEntrega]:checked').val();
				if (selectedValue === 'retiro') {
					$('#mensajeEntrega').text('Retirá tu funda en "Manuel Castro 5563 Lanús Oeste, Buenos Aires"');
					$('#codigoPostalContainer').hide();
					$('#soloNumeros').hide();
					$('#radioFields').hide();
					hidePickupPoints();
					hideFormAddress();
					hideRadioTipoEntrega();
					$('#continuarButtonRetiroSucursal').hide();
					$('#continuarButtonRetiro').show();
				} else if (selectedValue === 'envio'){
					$('#mensajeEntrega').text('Ingresa tu código postal para el envío');
					$('#codigoPostalContainer').show();
					$('#soloNumeros').show();
					$('#radioFields').show();
					$('#continuarButtonRetiro').hide();}
			});
			$('#primerAcordeon').on('click', function() {
				$('#segundoAcordeon').attr('disabled', 'disabled');
				$('#tercerAcordeon').attr('disabled', 'disabled');
				total = 0;
				subtotal = 0;
				$('#wallet_container').empty();
				$('#descuentoSpan').hide();
								
			});
			$('#segundoAcordeon').on('click', function() {
				$('#tercerAcordeon').attr('disabled', 'disabled');
				subtotal = 0;
				total = 0;
				$('#wallet_container').empty();
				$('#descuentoSpan').hide();
				
				
				
			});
			let discount = 0;
			let total = 0;
			let subtotal = 0;
			$(document).ready(function() {
				function updateCartCounter() {
					const badgeElements = $('.btn_badge');
					badgeElements.each(function(index, element) {
						element.textContent = cartItems.length;
					});
				}
				
		
				function updatePrices(subtotal, shippingCost, total) {
					// Actualizar subtotal, envío y total en el resumen del carrito
					const subtotalValor = document.getElementById('subtotalValor');
					const totalValor = document.getElementById('totalValor');
					const envioValor = document.getElementById('envioValor');

					subtotalValor.textContent = `$${subtotal.toFixed(2)}`;
					totalValor.textContent = `$${total.toFixed(2)}`;
					envioValor.textContent = `$${shippingCost.toFixed(2)}`;

		
					
				}
				
				let shippingCost = 0;
				function updateCartItems(cartItems) {
					const cartTableBody = $('.cart_section table tbody');
					cartTableBody.html('');
		
					 // Inicializamos el subtotal a 0
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
											<h4 class="item_title">${cartItem.name}</h4>
											<span class= "item_marca">${cartItem.marca}</span>
											<span class="item_type">${cartItem.modelo}</span>
											${cartItem.marca2 ? `<span class="item_marca2">${cartItem.marca2}</span>` : ``}
											${cartItem.marca2 ? `<span class="item_type2">${cartItem.modelo2}</span>` : ``}
											<span style="display: none" class="item_nombre_imagen">${cartItem.uniqueName}</span>
										</div>
									</div>
								</td>
								<td><span class="item_price" style="font-size: 30px; ">$${itemPrice.toFixed(2)}</span></td> 
							</tr>
						`;
						cartTableBody.append(cartItemHTML);
					});
				
					// Calcular el total basado en el subtotal
							// Calcular el total basado en el subtotal
					shippingCost = parseFloat($('input[name="carrier"]:checked').val());

					// Obtener el valor del radio button tipo de entrega
					const tipoEntrega = $('input[name="tipoEntrega"]:checked').val();

					// Verificar si el tipo de entrega es "retiro" y asignar el costo de envío correspondiente
					if (tipoEntrega === "retiro") {
					shippingCost = 0;
					}

					console.log(shippingCost);

					total = subtotal + shippingCost;

					// Actualizar precios del carrito
					updatePrices(subtotal, shippingCost, total);

					
		
					// Reasignar eventos click a los botones de eliminar
					$('.remove_btn').each(function(index, removeButton) {
						$(removeButton).on('click', function() {
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
				document.getElementById('apply-discount').addEventListener('click', function() {
					const discountCode = document.getElementById('discount-code').value;
					const subtotalValor = document.getElementById('subtotalValor');
					const totalValor = document.getElementById('totalValor');
					
					// Get the numeric value of the subtotal
					subtotal = parseFloat(subtotalValor.textContent.replace('$', ''));

					// Check if the discount code is correct
					if (discountCode === 'MKN2X5' ||  discountCode === 'MAKENAMAYO6' || discountCode === 'MKN3X5' || discountCode === 'MKNTX5') {
						
						if (discountCode === 'MKN2X5' ) {
							discount = subtotal * 0.10;
						}
						if (discountCode === 'MKN3X5') {
							discount = subtotal * 0.15;
						}
						if (discountCode === 'MKNTX5') {
							discount = subtotal * 0.95;
						}
						if (discountCode === 'MAKENAMAYO6') {
							discount = subtotal * 0.38;
						}

						
						// Calculate the discount
						
						$('#descuentoValor').text(`$${discount.toFixed(2)}`);
						$('#descuentoSpan').show();
						// Apply the discount
						const newTotal = subtotal - discount + shippingCost;
						const newTotalSinEnvio = subtotal - discount;
						// Update the total element
						totalValor.textContent = `$${newTotal.toFixed(2)}`;
						$('#wallet_container').empty();
						
						
						updateDescuento()
						.then(() => {
							console.log(newTotalSinEnvio);
							return mercadoPago(total, subtotal, shippingCost, idOrder, discount);
						})
						.then(preferenceId => {
							return updateOrder(idOrder, preferenceId);
						})
						.then(() => {
							console.log("Todos los pasos completados correctamente.");
						})
						.catch(error => {
							console.error("Ocurrió un error:", error);
						});
						
						total = newTotal;
						
					} else {
						// If the code is incorrect, just set the total to the original subtotal
						totalValor.textContent = subtotalValor.textContent;
					}
				});
		
				// Obtener los elementos del carrito almacenados en el localStorage
				let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
		
				// Actualizar visualización del carrito
				updateCartCounter();
		
				// JavaScript para controlar el botón "Continuar" y habilitar el tercer acordeón
				$('#continuarButtonRetiro').on('click', function() {
					// Habilitar y expandir el tercer acordeón

					if ($('#radioRetiro').is(':checked')) {

						
						$('#collapseThree').collapse('show');

						let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
						updateCartItems(cartItems);
						saveOrder()
						.then(idOrder => {
							return mercadoPago(total, subtotal, shippingCost, idOrder, 0).then(preference_id => {
								return { idOrder, preference_id };
							});
						})
						.then(({ idOrder, preference_id }) => {
							return updateOrder(idOrder, preference_id);
						})
						.then(() => {
							$('#tercerAcordeon').removeAttr('disabled');
							console.log("Todos los pasos completados correctamente.");
						})
						.catch(error => {
							console.error("Ocurrió un error:", error);
						});
					}
					if (!$('#radioRetiro').is(':checked') && !$('#radioEnvio').is(':checked')) {
						alert('Por favor, selecciona un tipo de entrega');
					}
					
				});


				
		
				$('#continuarButton2').on('click', function() {
					// Verificar si se han completado los campos del segundo formulario (dirección de envío
					var provincia = $('select[name=provincia]').val();
					var localidad = $('input[name=localidad]').val().trim();
					var calle = $('input[name=calle]').val().trim();
					var altura = $('input[name=altura]').val().trim();

					console.log(provincia, localidad, calle, altura);

					if (calle !== '' && altura !== '') {

					// Habilitar y expandir el tercer acordeón
						
						$('#collapseThree').collapse('show');
						let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
						updateCartItems(cartItems);
						saveOrder()
						.then(idOrder => {
							return mercadoPago(total, subtotal, shippingCost, idOrder, 0).then(preference_id => {
								return { idOrder, preference_id };
							});
						})
						.then(({ idOrder, preference_id }) => {
							return updateOrder(idOrder, preference_id);
						})
						.then(() => {
							$('#tercerAcordeon').removeAttr('disabled');
							console.log("Todos los pasos completados correctamente.");
						})
						.catch(error => {
							console.error("Ocurrió un error:", error);
						});
					}else {
						alert('Por favor, completa todos los datos');
					}
				});
				$('#continuarButtonRetiroSucursal').on('click', function() {
					// Habilitar y expandir el tercer acordeón
					
					$('#collapseThree').collapse('show');
					let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
					updateCartItems(cartItems);
					saveOrder()
					.then(idOrder => {
						return mercadoPago(total, subtotal, shippingCost, idOrder, 0).then(preference_id => {
							return { idOrder, preference_id };
						});
					})
					.then(({ idOrder, preference_id }) => {
						return updateOrder(idOrder, preference_id);
					})
					.then(() => {
						$('#tercerAcordeon').removeAttr('disabled');
						console.log("Todos los pasos completados correctamente.");
					})
					.catch(error => {
						console.error("Ocurrió un error:", error);
					});
				});
				
			});
			let preference_id = null;

			function mercadoPago(total, subtotal, shippingCost, idOrder, discount) {
				return new Promise((resolve, reject) => {
					console.log("se ejecuto la funcion de MP");
					
					if ($('#wallet_container').children().length === 0) {
						const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
						console.log(total);
						
						fetch('/api/mercado-pago', {    
							method: 'POST',
							headers: {
								'Content-Type': 'application/json',
								'X-CSRF-TOKEN': csrfToken // Agrega el token CSRF de Laravel
							},
							body: JSON.stringify({
								total: total,
								shippingCost: shippingCost,
								subtotal: subtotal,
								externalReference: idOrder,
								discount: discount
							}),
						})
						.then(response => {
							if (response.ok) {
								return response.json();
							}
							throw new Error('Error en la respuesta del servidor.');
						})
						.then(data => {
							console.log('Respuesta del servidor:', data);
							preference_id = data.preferenceId
							const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
								locale: 'es-AR'
							});
							const bricksBuilder = mp.bricks();

							mp.bricks().create("wallet", "wallet_container", {
								initialization: {
									redirectMode: "self",
									preferenceId: data.preferenceId,
								},
								customization: {
									texts: {
										valueProp: 'smart_option',
									},
								},
							});
							resolve(preference_id); // Resuelve la promesa con el preferenceId
						})
						.catch(error => {
							console.error('Error al enviar los datos:', error);
							reject(error); // Rechaza la promesa con el error
						});
					} 
				});
			}
		
		
		
			function testZippin() {
				hideRadioTipoEntrega();
				hidePickupPoints();
				hideFormAddress();
				var codigoPostal = document.getElementById('numeroCP').value;

				var logistic_type;
				var service_type_code;
				var carrier_id;
				var point_id_selected;
				// Referencia al botón
				var button = document.getElementById('continuarTipoEntregaButton');

				// Cambiar estado del botón a "buscando"
				button.innerText = 'Buscando...';
				button.style.backgroundColor = '#CCCCCC';
				button.style.color = '#F831FE'; // color de texto, ajusta según tu diseño
				button.disabled = true;
				
				// Realizar solicitud a la ruta que apunta al controlador
				fetch('/api/consulta-envio/' + codigoPostal) 
					.then(response => response.json())
					.then(data => {
						// Manejar la respuesta aquí
						console.log(data);
						// Mostrar la propiedad 'results' dentro de 'data' en el div
						if (data.all_results && Array.isArray(data.all_results)) {
							/* document.getElementById('response').innerHTML = JSON.stringify(data); */
							// Crear campos de selección radio para cada resultado
							createRadioFields(data.all_results, data);
						} else {
							document.getElementById('response').innerHTML = 'No se encontraron resultados.';
							document.getElementById('radioFields').innerHTML = '';
						}
					})
					.catch(error => {
						// Manejar errores aquí
						console.error(error);
						// Mostrar el error en el div si lo deseas
						document.getElementById('response').innerHTML = 'Error: ' + error.message;
						document.getElementById('radioFields').innerHTML = '';
					})
					.finally(() => {
						// Restaurar estado del botón
						button.innerText = 'Buscar';
						button.style.backgroundColor = ''; // restaurar color original (usa clase)
						button.style.color = ''; // restaurar color original
						button.disabled = false;
					});
			}
			var logistic_type;
			var service_type_code;
			var carrier_id;
			var point_id_selected;
			
	
			function createRadioFields(results, data) {
				const radioFieldsDiv = document.getElementById('radioFields');
				radioFieldsDiv.innerHTML = ''; // Limpiar cualquier contenido anterior

				// Iterar sobre cada resultado y crear un campo de selección radio para cada uno
				results.forEach((result, index) => {

					const price = result.amounts.price_incl_tax;
					var service_type = result.service_type.name;
					if (service_type === "Entrega en punto de entrega") {
						service_type = "Retiro en Sucursal";
					}
					var carrierName = result.carrier.name;
					if (carrierName === "Flete Propio") {
						carrierName = "Motomensajería Makena";
						
					}

					const radioField = document.createElement('input');
					radioField.type = 'radio';
					radioField.name = 'carrier';
					radioField.value = price;
					radioField.id = 'carrier_' + index;


					const label = document.createElement('label');
					const label2 = document.createElement('label');
					const label3 = document.createElement('label');

					label.setAttribute('for', 'carrier_' + index);
					label.textContent = carrierName;
					label2.setAttribute('for', 'carrier_' + index);
					label2.textContent = service_type;
					label3.setAttribute('for', 'carrier_' + index);
					label3.textContent ='$' + price ;

					// Añadir el campo de selección radio y su etiqueta al div
					radioFieldsDiv.appendChild(radioField);
					radioFieldsDiv.appendChild(label);
					radioFieldsDiv.appendChild(label2);
					radioFieldsDiv.appendChild(label3);
					radioFieldsDiv.appendChild(document.createElement('br'));

					radioField.addEventListener('change', function() {
						//Rescatando valores necesarios para crer el Envio en zippin
						logistic_type = result.logistic_type;
						service_type_code = result.service_type.code;
						carrier_id = result.carrier.id;
						
						console.log(result);
						



						const provincia = data.destination.state;
						const localidad = data.destination.city;
						
						
						if (service_type == "Retiro en Sucursal" && radioField.checked) {
							var codigoPostal = document.getElementById('numeroCP').value;
							$.get('/obtener-provincias/' + codigoPostal, function(data) {
									console.log(data);

									// Limpiar opciones previas y agregar una opción por defecto
									$('#provinciasDropdown').empty().append('<option value="">Seleccione una provincia</option>');

									// Verificar si hay datos
									if (data.length > 0) {
											data.forEach(function(provincia) {
													$('#provinciasDropdown').append('<option value="' + provincia.provinceCode + '">' + provincia.provincia + '</option>');
											});

											// Seleccionar el primer elemento automáticamente
											$('#provinciasDropdown').val(data[0].provinceCode).change();

											// También actualizar el input oculto si es necesario
											
											document.querySelector('input[name="localidad"]').value = localidad;
									}

									// Actualizar niceSelect si lo usas
									$('#provinciasDropdown').niceSelect('update');
							});
							showPickupPoints(result);
							hideFormAddress();
						} else if (service_type === "Entrega a domicilio" && radioField.checked) {
							var codigoPostal = document.getElementById('numeroCP').value;

							$.get('/obtener-provincias/' + codigoPostal, function(data) {
									console.log(data);

									// Limpiar opciones previas y agregar una opción por defecto
									$('#provinciasDropdown').empty().append('<option value="">Seleccione una provincia</option>');

									// Verificar si hay datos
									if (data.length > 0) {
											data.forEach(function(provincia) {
													$('#provinciasDropdown').append('<option value="' + provincia.provinceCode + '">' + provincia.provincia + '</option>');
											});

											// Seleccionar el primer elemento automáticamente
											$('#provinciasDropdown').val(data[0].provinceCode).change();

											// También actualizar el input oculto si es necesario
											
											document.querySelector('input[name="localidad"]').value = localidad;
									}

									// Actualizar niceSelect si lo usas
									$('#provinciasDropdown').niceSelect('update');
							});

							// Ocultar y mostrar elementos adicionales según sea necesario
							hidePickupPoints();
							showFormAddress();
							$('#continuarButtonRetiroSucursal').hide();

						} else {
							hidePickupPoints();
							showFormAddress();
						}
							

					});
				});
			}

			function showFormAddress() {
				const formAddress = document.getElementById('formAddress');
				if (formAddress) {
					formAddress.style.display = 'block';
				}
			}
			function hideFormAddress() {
				const formAddress = document.getElementById('formAddress');
				if (formAddress) {
					formAddress.style.display = 'none';
				}
			}

			function showPickupPoints(result) {
				const radioFieldsPuntoDeEntregaDiv = document.getElementById('radioFieldsPuntoDeEntrega');
				radioFieldsPuntoDeEntregaDiv.innerHTML = ''; // Limpiar cualquier contenido anterior

				// Agregar un encabezado h3 antes de los puntos de entrega
				const h3 = document.createElement('h3');
				h3.textContent = 'Elige tu punto de entrega';
				radioFieldsPuntoDeEntregaDiv.appendChild(h3);

				const puntosDeEntrega = result.pickup_points;
				puntosDeEntrega.forEach((puntoDeEntrega, index) => {

					const point_id = puntoDeEntrega.point_id
					const nombrePunto = puntoDeEntrega.description;
					const DireccionPunto = puntoDeEntrega.location.street + " " + puntoDeEntrega.location.street_number + " - " + puntoDeEntrega.location.city + ", " + puntoDeEntrega.location.state;
					const radioFieldPuntoDeEntrega = document.createElement('input');

					radioFieldPuntoDeEntrega.type = 'radio';
					radioFieldPuntoDeEntrega.name = 'punto';
					radioFieldPuntoDeEntrega.value = point_id;
					radioFieldPuntoDeEntrega.id = 'punto_' + index;

					const labelPunto = document.createElement('label');

					labelPunto.setAttribute('for', 'punto_' + index);
					labelPunto.textContent = " " + nombrePunto + " -> " + DireccionPunto;

					radioFieldsPuntoDeEntregaDiv.appendChild(radioFieldPuntoDeEntrega);
					radioFieldsPuntoDeEntregaDiv.appendChild(labelPunto);
					radioFieldsPuntoDeEntregaDiv.appendChild(document.createElement('br'));
					
					console.log(DireccionPunto);
					console.log(point_id);
					radioFieldPuntoDeEntrega.addEventListener('change', function() {
						//Rescatando valores necesarios para crer el Envio en zippin
						point_id_selected = puntoDeEntrega.point_id;
						console.log(point_id_selected);
						$('#continuarButtonRetiroSucursal').show();
						
					});
					//console.log(point_id_selected);
					
				});
				
			}

			function hidePickupPoints() {
				document.getElementById('radioFieldsPuntoDeEntrega').innerHTML = ''; // Limpiar cualquier contenido
			}
			function hideRadioTipoEntrega() {
				document.getElementById('radioFields').innerHTML = ''; // Limpiar cualquier contenido
			}

		
			// Validaciones de campos varios

			
			
			
			var point_id_selected='';
			var codigo_postal='';	
			var provincia='';
				
			var localidad='';	
			var calle='';
			var altura='';
			var direccion='';
			var comentarios='';
			var valor_envio='';
			var logistic_type='';
			var service_type_code='';
			let idOrder='';
			var carrier_id='';00

			
			function saveOrder() {
				return new Promise((resolve, reject) => {
					var nombre = document.querySelector('input[name="nombre"]').value;
					var apellido = document.querySelector('input[name="apellido"]').value;
					var documento = document.querySelector('input[name="dni"]').value;
					var email = document.querySelector('input[name="email"]').value;
					var telefono = document.querySelector('input[name="telefono"]').value;
					var tipo_entrega = document.querySelector('input[name="tipoEntrega"]:checked').value;
					var codigo_postal = 0;
					var provincia = '';
					var provinceCode = '';
					var localidad = ''; 
					var calle = '';
					var altura= '';
					var direccion= '';
					var comentarios = '';
					var valor_envio= 0;
					if (tipo_entrega === "envio") {
						codigo_postal = document.querySelector('input[name="codigoPostal"]').value;
						provincia = $('select[name=provincia] option:selected').text();
						provinceCode = $('select[name=provincia]').val();    
						localidad = document.querySelector('input[name="localidad"]').value;
						calle = document.querySelector('input[name="calle"]').value;
						altura = document.querySelector('input[name="altura"]').value;
						direccion = calle + " " + altura;
						comentarios = document.querySelector('input[name="comentarios"]').value;
						valor_envio = parseInt(document.querySelector('input[name="carrier"]:checked').value);
					}
					var cantidad_items = document.querySelectorAll('.cart_product').length;
					var valor_subtotal = subtotal;
					var valor_total = total;

					
					

					// Obtener todos los elementos con la clase 'item_title'
					const diseno = document.querySelectorAll('.item_title');
                    const nombreImagen = document.querySelectorAll('.item_nombre_imagen');
                    const marca = document.querySelectorAll('.item_marca');
                    const modelo = document.querySelectorAll('.item_type');



                    const itemsCart = [];

                    document.querySelectorAll('.item_type').forEach((item, index) => {
                        let container = item.closest('tr'); // Buscamos el <tr> como contenedor más cercano

                        if (!container) {
                            console.warn(`No se encontró el contenedor para el elemento en el índice ${index}`);
                            return;
                        }

                        let titulo = container.querySelector('.item_title')?.textContent.trim() || "";
                        let nombreImagenPNG = container.querySelector('.item_nombre_imagen')?.textContent.trim() || "";
                        let itemMarca = container.querySelector('.item_marca')?.textContent.trim() || "";
                        let itemModelo = item.textContent.trim();

                        // Buscar modelo2 y marca2 dentro del mismo contenedor del producto
                        let itemModelo2 = container.querySelector('.item_type2')?.textContent.trim() || "";
                        let itemMarca2 = container.querySelector('.item_marca2')?.textContent.trim() || "";

                        // Solo concatenar si existen valores en modelo2 y marca2
                        const modeloFinal = itemModelo2 ? `${itemModelo} -> ${itemModelo2}` : itemModelo;
                        const marcaFinal = itemMarca2 ? `${itemMarca} -> ${itemMarca2}` : itemMarca;

                        itemsCart.push({ modelo: modeloFinal, diseno: titulo, marca: marcaFinal, nombreImagen: nombreImagenPNG });
                    });

                    console.log(itemsCart);




					const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

					fetch('/guardar-orden', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
							'X-CSRF-TOKEN': '{{ csrf_token() }}' // Agrega el token CSRF de Laravel
						},
						body: JSON.stringify({
							nombre: nombre,
							apellido: apellido,
							documento: documento,
							email: email,
							telefono: telefono,
							tipo_entrega: tipo_entrega,
							codigo_postal: codigo_postal,
							provincia: provincia,
							provinceCode: provinceCode,
							localidad: localidad,
							calle: calle,
							altura :altura,
							direccion: direccion,
							observacion_entrega: comentarios,
							valor_envio: valor_envio,
							cantidad_items: cantidad_items,
							valor_subtotal: valor_subtotal,
							valor_total: valor_total,
							logistic_type: logistic_type,
							service_type_code: service_type_code,
							carrier_id: carrier_id,
							point_id_selected: point_id_selected,
							items_cart: itemsCart  
						})
					})
					.then(response => {
						if (response.ok) {
							return response.json();
						}
						throw new Error('Error en la respuesta del servidor.');
					})
					.then(data => {
						console.log('Respuesta del servidor:', data);
						idOrder = data.id;
						resolve(data.id); // Resuelve la promesa con el ID de la orden
					})
					.catch(error => {
						console.error('Error al enviar los datos:', error);
						reject(error); // Rechaza la promesa con el error
					});
				});
			}

			function updateOrder(){
				fetch('/actualizar-orden', {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
						'X-CSRF-TOKEN': '{{ csrf_token() }}' // Agrega el token CSRF de Laravel
					},
					body: JSON.stringify({
						preference_id: preference_id,
						idOrder: idOrder
							

					})
				})
				.then(response => {
					if (response.ok) {
						return response.json();
					}
					throw new Error('Error en la respuesta del servidor.');
				})
				.then(data => {
					console.log('Respuesta del servidor:', data);
					
					 // Puedes manejar la respuesta del servidor aquí
				})
				.catch(error => {
					console.error('Error al enviar los datos:', error);
				});
			}
			function updateDescuento() {
				return new Promise((resolve, reject) => {
					fetch('/actualizar-descuento', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
							'X-CSRF-TOKEN': '{{ csrf_token() }}' // Agrega el token CSRF de Laravel
						},
						body: JSON.stringify({
							preference_id: preference_id,
							idOrder: idOrder,
							discount: discount,
						})
					})
					.then(response => {
						if (response.ok) {
							return response.json();
						}
						throw new Error('Error en la respuesta del servidor.');
					})
					.then(data => {
						console.log('Respuesta del servidor:', data);
						resolve(); // Resuelve la promesa cuando la operación se completa
					})
					.catch(error => {
						console.error('Error al enviar los datos:', error);
						reject(error); // Rechaza la promesa con el error
					});
				});
			}

			

			
		</script>
		
		
		
		
		
		
		
		
		

		
	</body>
</html>