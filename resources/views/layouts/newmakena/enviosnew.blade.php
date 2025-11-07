@extends('layouts.newmakena.app2')

@section('content')

<section class="cart_section sec_ptb_120 clearfix cart_section d-flex justify-content-center align-items-center" style="min-height:70vh;">
				<div class="container text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
						<h1>Calculá tu envío</h1>
						
					</div>

					<div>
						<div class="form_item mt-3" id="codigoPostalContainer" >

							<h4>Ingresá solo los números de tu Código Postal para calcular tu envío</h4>

							<div class="mt-5">

								<input id="numeroCP" type="text" name="codigoPostal"
								class="form-control m-auto " style="width: 300px; background-color: #f9f9f9;" placeholder="Código Postal (Solo números)">
							</div>
							<div class="mt-4">

								<a href="https://www.correoargentino.com.ar/formularios/cpa"
								target="_blank"><small class="my-small">No se mi Código Postal</small></a>
							</div>
							<div class="mt-4">
								<button onclick="testZippin()" id="continuarTipoEntregaButton"
									class="custom_btn bg_carparts_red text-uppercase special_button"
									style=" max-width: 200px;">Buscar</button>
							</div>
							<div class="mt-4">
								<div id="tituloProvincia"></div>	
								<div class="mt-3" style="font-size: 1.7rem" id="radioFields"></div>

								
								<div id="mensajePuntoDeEntrega"></div>
								
							</div>
						</div>
					</div>
				
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
						<!-- Enviar comprobante de pago por WhatsApp -->
						
						
					</div>
					
				</div>
				
			</section>

@endsection

@push('scripts')
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

				const tituloh2 = document.createElement('h4');
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
					label3.style.fontWeight = 'bold';
					label3.textContent = '$' + price;

					label.classList.add('mt-2');
					label2.classList.add('mt-2');
					label3.classList.add('mt-2');

					label.style.marginRight = '8px';
					label2.style.marginRight = '8px';
					label3.style.marginRight = '12px';


					// Añadir el campo de selección radio y su etiqueta al div
					
					radioFieldsDiv.appendChild(label);
					radioFieldsDiv.appendChild(label2);
					radioFieldsDiv.appendChild(label3);
					radioFieldsDiv.appendChild(document.createElement('br'));

					
				});
			}
		</script>
@endpush