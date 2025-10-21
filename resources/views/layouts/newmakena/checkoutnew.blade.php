@extends('layouts.newmakena.app2')

@section('content')

    <section class="checkout-scope cart_section sec_ptb_20 clearfix my-20">
        <section class="checkout_section sec_ptb_140 clearfix">
            <div class="container">

            <div class="accordion" id="accordionExample">

                {{-- 1) DATOS PERSONALES --}}
                <div class="card">
                <div class="card-header" id="headingOne">
                    <h4 class="mb-0">
                    <button id="primerAcordeon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        Datos Personales
                    </button>
                    </h4>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="card-body">
                    <div class="form_wrap">
                        <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="form_item">
                            <span class="input_title">Nombre<sup>*</sup></span>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
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
                            <input type="text" name="dni" class="form-control" maxlength="8"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    value="{{ old('dni') }}">
                            </div>
                        </div>
                        </div>

                        <div class="row g-3">
                        <div class="col-lg-6 form_item">
                            <span class="input_title">Email<sup>*</sup></span>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                        <div class="col-lg-6 form_item">
                            <span class="input_title">Telefono<sup>*</sup></span>
                            <input type="tel" name="telefono" class="form-control" id="telefonoInput" pattern="\d*" title="Ingrese solo números"
                                value="{{ old('telefono') }}">
                        </div>
                        </div>

                        <div class="mt-3">
                        <button id="continuarButton1" class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                                style="max-width:220px;">Continuar</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                {{-- 2) TIPO DE ENTREGA --}}
                <div class="card">
                <div class="card-header" id="headingTwo">
                    <h4 class="mb-0">
                    <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo" id="segundoAcordeon" disabled>
                        Tipo de entrega
                    </button>
                    </h4>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="card-body">
                    <div class="form_wrap">

                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input custom-radio" type="radio" name="tipoEntrega" id="radioRetiro" value="retiro">
                                <label class="form-check-label text-white" for="radioRetiro">Retiro</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input custom-radio" type="radio" name="tipoEntrega" id="radioEnvio" value="envio">
                                <label class="form-check-label text-white" for="radioEnvio">Envío</label>
                                </div>
                            </div>
                        </div>


                        <div id="mensajeEntrega"  style="font-size: 2rem" class="mt-3 d-inline-block"></div>
                        <small id="soloNumeros" class="pl-5 d-none">Solo Números</small>

                        <div id="codigoPostalContainer" class="form_item mt-3" style="display: none;">
                            <span class="input_title">Código Postal<sup>*</sup></span>
                            <input id="numeroCP" type="text" name="codigoPostal" class="form-control my-3">
                            <a class="mt-4" href="https://www.correoargentino.com.ar/formularios/cpa" target="_blank"><small style="font-size: 1.4rem">No sé mi Código Postal</small></a>
                            <div class="mt-2">
                                <button onclick="testZippin()" id="continuarTipoEntregaButton" class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block mt-4" style="max-width:220px;">Buscar</button>
                            </div>
                        </div>

                    </div>

                    <div class="mt-3">
                        <button id="continuarButtonRetiro"
                                        class="custom_btn bg_carparts_red text-uppercase special_button"
                                        style=" max-width: 220px;">Continuar</button>
                    </div>

                    <div id="radioFields" class="mt-3"></div>

                    <div id="radioFieldsPuntoDeEntrega" class="mt-3">
                        <div id="mensajePuntoDeEntrega"></div>
                    </div>

                    <button id="continuarButtonRetiroSucursal"
                                        class="custom_btn bg_carparts_red text-uppercase special_button"
                                        style=" max-width: 220px; display:none">Continuar</button>

                    <div id="formAddress" class="card-body px-0" style="display: none">
                        <div class="form_wrap">
                        <div class="row g-3">
                            <div class="col-lg-6">
                            <div class="form_item">
                                <label><b>PROVINCIA*</b></label>
                                <div class="divProvinciaDropdown">
                                <select name="provincia" id="provinciasDropdown" class="form-control" style="width: 100%; height: 50px; font-size: 14px;">
                                    <option value="">Seleccione</option>
                                </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="form_item">
                                <label><b>LOCALIDAD*</b></label>
                                <input type="text" name="localidad" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="form_item">
                                <label><b>CALLE*</b></label>
                                <input type="text" name="calle" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="form_item">
                                <label><b>ALTURA*</b></label>
                                <input type="text" name="altura" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form_item">
                                <label><b>OBSERVACIONES PARA LA ENTREGA</b></label>
                                <input type="text" name="comentarios" class="form-control">
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="mt-3">
                        <button id="continuarButton2" class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                                style="max-width:220px;">Continuar</button>
                        </div>
                    </div>

                    </div>
                </div>
                </div>

                {{-- 3) PAGAR --}}
                <div class="card">
                <div class="card-header" id="headingThree">
                    <h4 class="mb-0">
                    <button class="collapsed" type="button" aria-expanded="false" aria-controls="collapseThree"
                            id="tercerAcordeon" disabled>
                        Pagar
                    </button>
                    </h4>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <section class="cart_section sec_ptb_10 clearfix">
                        <div class="container">
                            <div class="row g-4 align-items-start">

                            <div class="col-lg-8">
                                <div class="cart_table">
                                <table class="table my-4">
                                    <thead class="text-uppercase ">
                                    <tr>
                                        <th>Producto</th>
                                        <th class="text-end">Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="cart_summary">
                                <h3 class="summary_title">Total</h3>
                                <ul class="summary_list">
                                    <li><span>Subtotal</span> <span id="subtotalValor">$0</span></li>
                                    <li><span>Envío</span> <span id="envioValor">$0</span></li>
                                    <li id="descuentoSpan" style="display:none;"><span>Descuento</span> <span id="descuentoValor">$0</span></li>
                                    <li class="summary_total"><span>Total</span> <span id="totalValor">$0</span></li>
                                </ul>

                                <div id="mercadopago_container">
                                    <div id="wallet_container"></div>
                                </div>

                                <ul class="ul_li_block clearfix my-4">
                                    <div>
                                    <input type="text" id="discount-code" placeholder="Código de Descuento" class="form-control">
                                    </div>
                                </ul>

                                <button id="apply-discount" class="custom_btn bg_success w-100">Aplicar Descuento</button>
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



@endsection

@push('scripts')

    
 
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

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script></script>
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

            if (nombre !== '' && apellido !== '' && email !== '' && telefono !== '' && email.match(emailPattern) &&
                telefono.match(telefonoPattern)) {
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
            } else if (selectedValue === 'envio') {
                $('#mensajeEntrega').text('Ingresa tu código postal para el envío');
                $('#codigoPostalContainer').show();
                $('#soloNumeros').show();
                $('#radioFields').show();
                $('#continuarButtonRetiro').hide();
            }
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
											<span class= "item_marca">${cartItem.marca || cartItem.tamaño}</span>
											<span class="item_type">${cartItem.modelo || cartItem.colgante}</span>
											${cartItem.marca2 ? `<span class="item_marca2">${cartItem.marca2}</span>` : ``}
											${cartItem.marca2 ? `<span class="item_type2">${cartItem.modelo2}</span>` : ``}
											<span style="display: none" class="item_nombre_imagen">${cartItem.uniqueName}</span>
											<span style="display: none" class="item_id_drive">${cartItem.idDrive}</span>
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
                if (discountCode === 'MKN2X5' || discountCode === 'MAKENAMAYO6' || discountCode ===
                    'MKN3X5' || discountCode === 'PRIMAKENA') {

                    if (discountCode === 'MKN2X5') {
                        discount = subtotal * 0.10;
                    }
                    if (discountCode === 'MKN3X5') {
                        discount = subtotal * 0.15;
                    }

                    if (discountCode === 'MAKENAMAYO6') {
                        discount = subtotal * 0.38;
                    }

                    if (discountCode === 'PRIMAKENA') {
                        discount = subtotal * 0.10;
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
                            return mercadoPago(total, subtotal, shippingCost, idOrder, 0).then(
                                preference_id => {
                                    return {
                                        idOrder,
                                        preference_id
                                    };
                                });
                        })
                        .then(({
                            idOrder,
                            preference_id
                        }) => {
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
                            return mercadoPago(total, subtotal, shippingCost, idOrder, 0).then(
                                preference_id => {
                                    return {
                                        idOrder,
                                        preference_id
                                    };
                                });
                        })
                        .then(({
                            idOrder,
                            preference_id
                        }) => {
                            return updateOrder(idOrder, preference_id);
                        })
                        .then(() => {
                            $('#tercerAcordeon').removeAttr('disabled');
                            console.log("Todos los pasos completados correctamente.");
                        })
                        .catch(error => {
                            console.error("Ocurrió un error:", error);
                        });
                } else {
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
                        return mercadoPago(total, subtotal, shippingCost, idOrder, 0).then(
                            preference_id => {
                                return {
                                    idOrder,
                                    preference_id
                                };
                            });
                    })
                    .then(({
                        idOrder,
                        preference_id
                    }) => {
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
                            const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
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
            button.style.color = '#b321a6'; // color de texto, ajusta según tu diseño
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

                // Contenedor de la fila
                const row = document.createElement('div');
                row.className = 'carrier-row';

                // Radio button
                const radioField = document.createElement('input');
                radioField.type = 'radio';
                radioField.name = 'carrier';
                radioField.value = price;
                radioField.id = 'carrier_' + index;
                radioField.className = 'carrier-radio';

                // Etiquetas de texto
                const nameLabel = document.createElement('label');
                nameLabel.className = 'carrier-name';
                nameLabel.htmlFor = radioField.id;
                nameLabel.textContent = carrierName;

                const typeLabel = document.createElement('label');
                typeLabel.className = 'carrier-type';
                typeLabel.htmlFor = radioField.id;
                typeLabel.textContent = service_type;

                const priceLabel = document.createElement('label');
                priceLabel.className = 'carrier-price';
                priceLabel.htmlFor = radioField.id;
                priceLabel.textContent = '$' + price;

                // Armar la fila
                row.appendChild(radioField);
                row.appendChild(nameLabel);
                row.appendChild(typeLabel);
                row.appendChild(priceLabel);

                // Agregar la fila al contenedor principal
                radioFieldsDiv.appendChild(row);

                // Evento de cambio
                radioField.addEventListener('change', function () {
                    logistic_type = result.logistic_type;
                    service_type_code = result.service_type.code;
                    carrier_id = result.carrier.id;

                    const provincia = data.destination.state;
                    const localidad = data.destination.city;

                    if (service_type == "Retiro en Sucursal" && radioField.checked) {
                        var codigoPostal = document.getElementById('numeroCP').value;
                        $.get('/obtener-provincias/' + codigoPostal, function (data) {
                            $('#provinciasDropdown').empty().append(
                                '<option value="">Seleccione una provincia</option>'
                            );

                            if (data.length > 0) {
                                data.forEach(function (provincia) {
                                    $('#provinciasDropdown').append('<option value="' +
                                        provincia.provinceCode + '">' + provincia.provincia + '</option>');
                                });

                                $('#provinciasDropdown').val(data[0].provinceCode).change();
                                document.querySelector('input[name="localidad"]').value = localidad;
                            }

                            $('#provinciasDropdown').niceSelect('update');
                        });

                        showPickupPoints(result);
                        hideFormAddress();
                    } else if (service_type === "Entrega a domicilio" && radioField.checked) {
                        var codigoPostal = document.getElementById('numeroCP').value;

                        $.get('/obtener-provincias/' + codigoPostal, function (data) {
                            $('#provinciasDropdown').empty().append(
                                '<option value="">Seleccione una provincia</option>'
                            );

                            if (data.length > 0) {
                                data.forEach(function (provincia) {
                                    $('#provinciasDropdown').append('<option value="' +
                                        provincia.provinceCode + '">' + provincia.provincia + '</option>');
                                });

                                $('#provinciasDropdown').val(data[0].provinceCode).change();
                                document.querySelector('input[name="localidad"]').value = localidad;
                            }

                            $('#provinciasDropdown').niceSelect('update');
                        });

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
  const wrap = document.getElementById('radioFieldsPuntoDeEntrega');
  wrap.innerHTML = '';

  const h3 = document.createElement('h3');
  h3.textContent = 'Elige tu punto de entrega';
  wrap.appendChild(h3);

  const puntosDeEntrega = result.pickup_points || [];

  puntosDeEntrega.forEach((p, index) => {
    const point_id = p.point_id;
    const nombrePunto = p.description;
    const dir = `${p.location.street} ${p.location.street_number} - ${p.location.city}, ${p.location.state}`;

    // contenedor bootstrap
    const formCheck = document.createElement('div');
    formCheck.className = 'form-check my-4';

    // input RADIO **NATIVO** (solo form-check-input)
    const input = document.createElement('input');
    input.type = 'radio';
    input.name = 'punto';
    input.value = point_id;
    input.id = `punto_${index}`;
    input.className = 'form-check-input'; // <- nada de custom-radio

    // label bootstrap
    const label = document.createElement('label');
    label.className = 'form-check-label text-white';
    label.htmlFor = input.id;
    label.textContent = ` ${nombrePunto} → ${dir}`;

    formCheck.appendChild(input);
    formCheck.appendChild(label);
    wrap.appendChild(formCheck);

    // (opcional) preseleccionar el primero
    if (index === 0) input.checked = true;

    input.addEventListener('change', function () {
      point_id_selected = point_id;
      $('#continuarButtonRetiroSucursal').show();
    });
  });
}


        function hidePickupPoints() {
            document.getElementById('radioFieldsPuntoDeEntrega').innerHTML = ''; // Limpiar cualquier contenido
        }

        function hideRadioTipoEntrega() {
            document.getElementById('radioFields').innerHTML = ''; // Limpiar cualquier contenido
        }


        // Validaciones de campos varios




        var point_id_selected = '';
        var codigo_postal = '';
        var provincia = '';

        var localidad = '';
        var calle = '';
        var altura = '';
        var direccion = '';
        var comentarios = '';
        var valor_envio = '';
        var logistic_type = '';
        var service_type_code = '';
        let idOrder = '';
        var carrier_id = '';
        00


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
                var altura = '';
                var direccion = '';
                var comentarios = '';
                var valor_envio = 0;
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
                    let idDrive = container.querySelector('.item_id_drive')?.textContent.trim() || "";
                    let itemMarca = container.querySelector('.item_marca')?.textContent.trim() || "";
                    let itemModelo = item.textContent.trim();

                    // Buscar modelo2 y marca2 dentro del mismo contenedor del producto
                    let itemModelo2 = container.querySelector('.item_type2')?.textContent.trim() || "";
                    let itemMarca2 = container.querySelector('.item_marca2')?.textContent.trim() || "";

                    // Solo concatenar si existen valores en modelo2 y marca2
                    const modeloFinal = itemModelo2 ? `${itemModelo} -> ${itemModelo2}` : itemModelo;
                    const marcaFinal = itemMarca2 ? `${itemMarca} -> ${itemMarca2}` : itemMarca;

                    itemsCart.push({
                        modelo: modeloFinal,
                        diseno: titulo,
                        marca: marcaFinal,
                        nombreImagen: nombreImagenPNG,
                        idDrive: idDrive
                    });
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
                            altura: altura,
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

        function updateOrder() {
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
@endpush
@push('head')

<style>

.cart_product .item_image img {
  height: 100px;
  width: auto;
  object-fit: contain; /* evita deformaciones */
  display: block;
  margin: 0 auto; /* centra horizontalmente */
}
  /* radios custom visibles en fondo oscuro */
.checkout-scope .custom-radio {
  appearance: none;
  -webkit-appearance: none;
  width: 20px;
  height: 20px;
  border: 2px solid #fff;
  border-radius: 50%;
  margin-right: 8px;
  display: inline-block;
  position: relative;
  cursor: pointer;
  background-color: transparent;
  vertical-align: middle;
  transition: all 0.2s ease-in-out;
}

.checkout-scope .custom-radio:checked {
  border-color: #b321a6;
  background-color: #b321a6;
}

.checkout-scope .custom-radio:checked::after {
  content: '';
  position: absolute;
  top: 4px;
  left: 4px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: white;
}

.checkout-scope .form-check-label {
  color: #fff;
  font-weight: 600;
  font-size: 1.4rem;
  cursor: pointer;
}
/* Contenedor principal: opciones en columna */
.checkout-scope #radioFields {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

/* Cada opción en una fila horizontal */
.checkout-scope #radioFields .carrier-row {
  display: flex;
  align-items: center;
  gap: 14px;
  color: #fff; /* Cambia a #333 si fondo claro */
}

/* Precio alineado a la derecha, sin irse al borde */
.checkout-scope #radioFields .carrier-price {
  
  font-weight: 700;
  white-space: nowrap;
}

/* Labels sin márgenes extra */
.checkout-scope #radioFields label {
  margin: 0;
  white-space: nowrap;
  font-weight: 500;
}

/* Radio alineado */
.checkout-scope #radioFields .carrier-radio {
  margin: 0;
}

/* Por si quedan <br> sueltos del código previo */
.checkout-scope #radioFields br {
  display: none;
}

/* Caja del select */
.nice-select {
  background-color: #1a1a1a !important; /* fondo oscuro */
  color: #fff !important;               /* texto blanco */
  border: 1px solid #666 !important;
  border-radius: 4px;
  height: 40px;
  line-height: 38px;
  padding-right: 30px; /* espacio para la flecha */
}

/* Flechita blanca */
.nice-select::after {
  border-bottom: 2px solid #fff !important;
  border-right: 2px solid #fff !important;
  right: 12px;               /* ajusta la posición horizontal */
  width: 7px;
  height: 7px;
}

/* Cuando el select está abierto (rotar flecha) */
.nice-select.open::after {
  transform: rotate(-135deg);
}

/* Lista desplegable */
.nice-select .list {
  background-color: #1a1a1a !important;
  color: #fff !important;
  border: 1px solid #666 !important;
}

/* Hover sobre opciones */
.nice-select .option:hover {
  background-color: #333 !important;
  color: #fff !important;
}








/* ====== SCOPE CHECKOUT ====== */
.checkout-scope { color:#fff; min-height:60vh; }

/* cards del acordeón */
.checkout-scope .card { background:#1b1b1b; border:1px solid #2a2a2a; border-radius:12px; overflow:hidden; }
.checkout-scope .card + .card { margin-top:16px; }
.checkout-scope .card-header { background:#222; border-bottom:1px solid #2a2a2a; padding:12px 16px; }
.checkout-scope .card-header h4 { margin:0; }
.checkout-scope .card-header button {
  background:transparent; border:0; color:#fff; font-weight:800; letter-spacing:.02em; font-size:1.6rem;
}
.checkout-scope .card-header button[disabled] { opacity:.5; cursor:not-allowed; }

.checkout-scope .card-body { padding:16px; }

/* inputs y labels */
.checkout-scope .input_title,
.checkout-scope label { font-weight:700; font-size:1.3rem; display:block; margin-bottom:6px; }
.checkout-scope .form-control {
  background:#141414; border:1px solid #2a2a2a; color:#fff;
}
.checkout-scope .form-control:focus { border-color:#b321a6; box-shadow:none; }

/* botones principales */
.checkout-scope .custom_btn { border-radius:10px; }
.checkout-scope .special_button { font-weight:700; letter-spacing:.02em; }

/* resumen de pago / lado derecho */
.checkout-scope .cart_summary{
  background:#1f1f1f; border:1px solid #2a2a2a; border-radius:14px; padding:18px; position:sticky; top:24px;
}
.checkout-scope .summary_title{ margin:0 0 12px 0; font-size:1.8rem; font-weight:800; }
.checkout-scope .summary_list{ list-style:none; margin:0 0 16px 0; padding:0; }
.checkout-scope .summary_list li{
  display:flex; justify-content:space-between; align-items:center; padding:10px 0; border-bottom:1px solid #2a2a2a; font-size:1.5rem;
}
.checkout-scope .summary_list li:last-child{ border-bottom:none; }
.checkout-scope .summary_list .summary_total{ font-size:1.7rem; font-weight:800; }

/* tabla de pagar */
.checkout-scope .cart_table thead tr{ background:#ededed; }
.checkout-scope .cart_table thead th{ color:#111; text-transform:uppercase; font-weight:800; letter-spacing:.03em; padding:14px 16px; border:none; }
.checkout-scope .cart_table tbody td{ vertical-align:middle; border-top:1px solid #2a2a2a; padding:16px; }
.checkout-scope .cart_product{ display:flex; gap:14px; align-items:center; position:relative; }
.checkout-scope .cart_product .item_image{ width:100px; min-width:90px; height:auto; border-radius:10px; overflow:hidden; border:1px solid #2a2a2a; }
.checkout-scope .cart_product .item_image img{ width:100%; height:100%; object-fit:cover; display:block; }
.checkout-scope .cart_product .item_title{ font-size:1.5rem; margin:0 0 6px 0; font-weight:700; }
.checkout-scope .cart_product .item_type{ display:block; opacity:.8; font-size:1.2rem; }
.checkout-scope .item_price{ display:inline-block; font-size:1.9rem; font-weight:700; }
.checkout-scope .remove_btn{ position:absolute; top:6px; right:6px; background:transparent; border:0; color:#bbb; }
.checkout-scope .remove_btn:hover{ color:#fff; }

/* radios de entrega */
.checkout-scope .form-check-input{ margin-top:0; }

/* pequeños ajustes */
.checkout-scope .g-3>[class^="col-"], .checkout-scope .g-4>[class^="col-"] { padding-top:.5rem; }

/* Responsivo */
@media (max-width: 991.98px){
  .checkout-scope .cart_summary{ position:static; }
}
</style>
@endpush
