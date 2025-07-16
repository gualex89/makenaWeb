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
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-P9QG5632');</script>
	<!-- End Google Tag Manager -->

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
			<a href="https://wa.me/541122444188" class="go_to_wts" >
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
							<img src="images/logo/logo_25_1x.png" srcset="images/logo/logo_black.png" alt="logo negro makena">
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
			
			
			<!-- breadcrumb_section - end
			================================================== -->
			<!-- product_section - start
			================================================== -->
			
				<!-- cart_section - start
			================================================== -->
			<section class="cart_section sec_ptb_120 clearfix cart_section  d-flex justify-content-center align-items-center">
				<div class="container text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
						<h1>Calculá tu envío</h1>
						
					</div>

					<div>
						<div class="form_item mt-3" id="codigoPostalContainer" >

							<h4>Ingresá solo los números de tu Código Postal para calcular tu envío</h4>

							<div class="mt-5">

								<input id="numeroCP" type="text" name="codigoPostal"
								class="form-control m-auto" style="width: 300px" placeholder="Código Postal (Solo números)">
							</div>
								<a href="https://www.correoargentino.com.ar/formularios/cpa"
								target="_blank"><small>No se mi Código Postal</small></a>
							<div>
								<button onclick="testZippin()" id="continuarTipoEntregaButton"
									class="custom_btn bg_carparts_red text-uppercase special_button"
									style=" max-width: 200px;">Buscar</button>
							</div>
							<div>
							<div id="tituloProvincia"></div>	
							<div id="radioFields"></div>

							<div id="radioFieldsPuntoDeEntrega">
								<div id="mensajePuntoDeEntrega"></div>
								
							</div>
						</div>
					</div>
				
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
						<!-- Enviar comprobante de pago por WhatsApp -->
						
						
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
										<img src="images/logo/logomakena.png" alt="logo makena">
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
				localStorage.clear();
				let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

				// Eliminar el ítem específico del carrito en localStorage
				localStorage.removeItem('cartItems');

				// Asegurarse de que cartItems esté vacío
				cartItems = [];
				


				
				

			})
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

			function hidePickupPoints() {
				document.getElementById('radioFieldsPuntoDeEntrega').innerHTML = ''; // Limpiar cualquier contenido
			}

			function hideRadioTipoEntrega() {
				document.getElementById('radioFields').innerHTML = ''; // Limpiar cualquier contenido
				document.getElementById('tituloProvincia').innerHTML = ''; // Limpiar cualquier contenido
			}

			function hideFormAddress() {
				const formAddress = document.getElementById('formAddress');
				if (formAddress) {
					formAddress.style.display = 'none';
				}
			}
			function createRadioFields(results, data) {
				const radioFieldsDiv = document.getElementById('radioFields');
				const tituloProvinciaDiv = document.getElementById('tituloProvincia');
				radioFieldsDiv.innerHTML = ''; // Limpiar cualquier contenido anterior
				tituloProvinciaDiv.innerHTML = ''; // Limpiar cualquier contenido anterior

				const tituloh2 = document.createElement('h2');
				tituloh2.textContent = data.destination.city + ', ' + data.destination.state;

				tituloProvinciaDiv.appendChild(tituloh2);


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

					

					
					const label = document.createElement('label');
					const label2 = document.createElement('label');
					const label3 = document.createElement('label');

					

					label.setAttribute('for', 'carrier_' + index);
					label.textContent = carrierName;
					label2.setAttribute('for', 'carrier_' + index);
					label2.textContent = service_type;
					label3.setAttribute('for', 'carrier_' + index);
					label3.textContent = '$' + price;

					// Añadir el campo de selección radio y su etiqueta al div
					
					radioFieldsDiv.appendChild(label);
					radioFieldsDiv.appendChild(label2);
					radioFieldsDiv.appendChild(label3);
					radioFieldsDiv.appendChild(document.createElement('br'));

					
				});
			}
		</script>
		
		
		
		
		
		
		
		
		

		
	</body>
</html>