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
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2><img src="images/logos/check.png" alt="icono check" width="5%"> ¡Recibimos tu pedido con éxito!</h2>
						<h3>Ahora solo falta un paso para comenzar con la producción de tu funda 🤩</h3>
					</div>
				
					<div class="card-transferencia mx-auto">
						<p>💸 <strong>Elegiste pagar por transferencia bancaria.</strong></p>
						<p>Para continuar con tu pedido, <strong>realizá la transferencia</strong><br>y <strong>envía el comprobante por WhatsApp.</strong></p>
						<p>🕒 <strong>El pedido se confirma una vez recibido el comprobante.</strong></p>
						
						<p><strong>Tu número de orden es: <span style="font-size: 22px">{{$orden->id_order}}</span></strong></p>
						<p><strong>Titular:</strong> Gabriela Oropeza<br>
							 <strong>CVU:</strong> 0000003100051303419183<br>
							 <strong>Alias:</strong> makenafundas.mp<br>
							 <strong>CUIT:</strong> 27-95821492-3<br>
							 <strong>Monto: </strong><span class="monto">{{ number_format($orden->total, 0, ',', '.') }}$</span>

						</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
						<!-- Enviar comprobante de pago por WhatsApp -->
						<h4 ><a style="color: #b321a6" href="https://api.whatsapp.com/send/?phone=5491122444188&text=Hola%21+Te+env%C3%ADo+el+comprobante+de+mi+pedido+numero+de+orden+%23{{ $orden->id_order }}&type=phone_number&app_absent=0 " rel="noopener noreferrer" target="_blank">📤 Enviar comprobante por WhatsApp</a></h4>
						
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
		</script>
		
		
		
		
		
		
		
		
		

		
	</body>
</html>