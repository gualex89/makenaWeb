@extends('layouts.app')

@section('title', 'Funda de ' . $item->diseno . ' para ' . $item->modeloCEO . ' | ' . $item->categoria . ' - Makena')

@section('meta_description',
    'Funda personalizada de ' .
    $item->diseno .
    ' para modelo ' .
    $item->modeloCEO .
    '.
    Categoría: ' .
    $item->categoria .
    '. Alta calidad y diseño exclusivo.')
@section('meta_keywords', 'fundas anime, funda personalizada, funda ' . $item->diseno . ', ' .
    strtolower($item->categoria) . ', ' . $item->modeloCEO)


@section('og_title', 'Funda de ' . $item->diseno . ' para ' . $item->modeloCEO . ' | ' . $item->categoria . ' - Makena')
@section('og_description',
    'Conseguí tu funda de ' .
    $item->diseno .
    ' de la categoría ' .
    $item->categoria .
    ' con
    imagen ultra HD y agarres antideslizantes. Compatible con ' .
    $item->modeloCEO .
    '.')
@section('og_image', Voyager::image($item->image))

@section('twitter_title', 'Funda ' . $item->diseno . ' para ' . $item->modeloCEO . ' | ' . $item->categoria)
@section('twitter_description', 'Diseños de ' . $item->diseno . ' en fundas para ' . $item->modeloCEO . '. Categoría: '
    . $item->categoria . '. ¡Ideal para fans de anime y manga!')
@section('twitter_image', Voyager::image($item->image))


@section('canonical', url()->current())

@section('content')
    <div class="contenedorGeneralDinamico row py-5 my-5">


        <div class="container containerImagenDinamico text-center my-3 col-lg-6" style="height: 80v">

            <img id="imagenDinamico" src="{{ Voyager::image($item->image) }}"
                alt="Funda de {{ $item->diseno }} modelo {{ $item->modeloCEO }}" class="img-fluid my-4" width="280"
                {{-- o cualquier tamaño deseado --}} height="auto" />

        </div>
        <div id="info_dinamico" class="container my-5 col-lg-6">
            <div class="container_modelo">

                <h1>Funda de {{ $item->diseno }} {{ $item->file_name }}</h1>
                <h3><span style="color: #b321a6">{{ $item->categoria }}</span></h3>
            </div>

            <div class="container_cuotas">

                <span>2 cuotas <span style="color: #b321a6; font-weight: bold">SIN</span> interés llevando <span
                        style="color: #b321a6; font-weight: bold">1</span> funda de cualquier modelo</span><br>
                <span>3 cuotas <span style="color: #b321a6; font-weight: bold">SIN</span> interés llevando <span
                        style="color: #b321a6; font-weight: bold">2 o MÁS</span></span><br>
            </div>

            <div class="motorcycle_product_grid container_precio_dinamica">
                <span class="item_price_dinamico">{{ $precioFundas }}</span>
                <h6>Envíos a todo el país</h6>
                <a href="/calcula-envio" target="_blank" >🚚 Cotizá tu envío</a>
            </div>
            <div class="motorcycle_product_grid">
                <span>📱 Impresión HD ultra brillante</span><br>
                <span>💖 Diseño único y resistente</span>
            </div>

            <div class="container container_seleccionar_modelo py-5">
                <a class="alCarrito btn_seleccionar_modelo" href="#!"><span><i class="fas fa-shopping-cart"></i></span>
                    <span>Seleccioná tu modelo</span></a>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addToCartModalLabel">Seleccioná tu modelo</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="sb_widget sb_recent_post seleccionadores">
                        <div class="sb_widget sb_category">

                            <div class="col-lg-12 divMarcaDropdown2">
                                <label for="marcasDropdown"
                                    style="font-weight: bold; font-size: larger; margin:10px">Marca</label>
                                <select name="marcas" id="marcasDropdown">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                            <div class="col-lg-12 divModeloDropdown2">
                                <label for="marcasDropdown"
                                    style="font-weight: bold; font-size: larger; margin:10px">Modelo</label>
                                <select name="modelos" id="modelosDropdown">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="addToCartModalOkButton" class="btn btn-secondary" data-dismiss="modal"
                        disabled>Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
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

            function productoAgregadoAlCarrito() {
                // Mostrar SweetAlert2 en la esquina superior derecha que desaparece después de 1 segundo
                Swal.fire({
                    icon: 'success',
                    title: 'Producto agregado al carrito',
                    toast: true, // Hace que se muestre como una notificación tipo toast
                    position: 'top-end', // Lo coloca en la esquina superior derecha
                    showConfirmButton: false, // No muestra el botón de confirmación
                    timer: 1500, // Se cierra automáticamente después de 1 segundo (1000ms)
                    timerProgressBar: true,
                    iconColor: '#4CAF50', // Muestra una barra de progreso que indica el tiempo restante
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            }

            function mostrarAviso() {
                var aviso = document.getElementById("aviso");
                aviso.innerText = "¡Producto agregado al carrito!";
                aviso.style.display = "block";

                // Oculta el aviso después de 3 segundos
                setTimeout(function() {
                    aviso.style.display = "none";
                }, 3000);
            }

            function updatePrices() {
                const subtotalElement = document.querySelector('.total_price li:nth-child(1) span:nth-child(2)');
                const totalElement = document.querySelector('.total_price li:nth-child(2) span:nth-child(2)');

                subtotalElement.textContent = `$${subtotal}`;
                totalElement.textContent = `$${total}`;
            }

            let price, itemName, imageUrl; // Definir las variables fuera de la función addToCart

            function addToCart() {
                price = parseFloat(document.querySelector('.item_price_dinamico').textContent.replace('$', ''));
                itemName = document.querySelector('h1').textContent.trim();
                imageUrl = document.querySelector('img.img-fluid').getAttribute('src');

                $('#addToCartModal').modal('show');
            }


            // Agregar un manejador de eventos para el botón "OK" dentro de la modal
            document.getElementById('addToCartModalOkButton').addEventListener('click', function() {
                const selectedMarca = document.getElementById('marcasDropdown').value;
                const selectedModelo = document.getElementById('modelosDropdown').value;

                // Verificar si se ha seleccionado un modelo
                if (selectedModelo) {
                    const pendingCartItem = {
                        name: itemName,
                        price: price,
                        image: imageUrl,
                        marca: selectedMarca,
                        modelo: selectedModelo
                    };

                    // Agregar el artículo al carrito
                    cartItemCount++;
                    subtotal += pendingCartItem.price;
                    total = subtotal;
                    cartItems.push(pendingCartItem);
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                    updateCartItems();
                    updatePrices();
                    productoAgregadoAlCarrito();
                    // Cerrar la modal solo si se ha completado con éxito la acción
                    $('#addToCartModal').modal('hide');
                } else {
                    // Si no se ha seleccionado un modelo, muestra un mensaje de alerta dentro de la modal
                    alert('Por favor, seleccione un modelo');
                }
            });

            function updateCartItems() {
                const cartItemsList = document.querySelector('.cart_items_list');
                cartItemsList.innerHTML = ''; // Limpiar la lista de elementos del carrito

                cartItems.forEach(cartItem => {
                    const cartItemHTML = `
                    <li>
                        <div class="item_image">
                            <img src="${cartItem.image}" alt="Funda en carrito ${cartItem.name}">
                        </div>
                        <div class="item_content"> 
                            <span class="item_type">${cartItem.marca2 ? `Funda Doble ` : `Funda ` }<h4 class="item_title">${cartItem.name}</h4>
                            ${cartItem.marca} ${cartItem.modelo}
                            ${cartItem.marca2 ? `<span class="item_type">${cartItem.marca2} ${cartItem.modelo2}</span>` : ``}
                            
                            <b> <span class="_dinamico">$${cartItem.price}</span> </b>
                        </div>
                        <div>
                        <button type="button" class="remove_btn_carrito"><i class="fal fa-trash-alt remove_btn"></i></button>
                        </div>
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

            const carritoBtn = document.querySelector('.alCarrito');
            if (carritoBtn) {
                carritoBtn.addEventListener('click', function(event) {
                    event.preventDefault();
                    addToCart(); // ahora no se pasa ningún parámetro
                });
            }

            document.querySelectorAll('.ver-btn').forEach(btn => {
                btn.addEventListener('click', function(event) {
                    event.preventDefault();
                    const imageUrl = this.getAttribute('data-image');
                    const productName = this.getAttribute('data-title');
                    const productImageElement = document.getElementById('productImage');
                    productImageElement.src = imageUrl;
                    const modalTitleElement = document.getElementById('productImageModalLabel');
                    modalTitleElement.textContent = productName;
                    $('#productImageModal').modal('show');
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
    <script>
        $(document).ready(function() {
            // Cargar marcas al cargar la página
            $.get('/obtener-marcas', function(data) {
                console.log(data);

                data.forEach(function(marca) {
                    $('#marcasDropdown').append('<option value="' + marca + '">' + marca +
                        '</option>');
                    $('#marcasDropdown').niceSelect('update');
                });
            });

            // Manejar cambio en el dropdown de marcas
            $('#marcasDropdown').change(function() {
                var marcaSeleccionada = $(this).val();

                // Hacer una solicitud AJAX para obtener modelos según la marca seleccionada
                $.get('/obtener-modelos/' + marcaSeleccionada, function(data) {
                    // Limpiar modelos existentes
                    $('#modelosDropdown').empty();
                    $('#modelosDropdown').append($('<option>', {
                        value: '',
                        text: 'Seleccione'
                    }));

                    // Llenar modelos
                    data.forEach(function(modelo) {
                        $('#modelosDropdown').append('<option value="' + modelo + '">' +
                            modelo + '</option>');
                        $('#modelosDropdown').niceSelect('update');
                    });
                });
            });
            $('#modelosDropdown').change(function() {
                // Verificar si se ha seleccionado un modelo
                if ($(this).val() !== '') {
                    // Si se seleccionó un modelo, habilitar el botón "OK"
                    $('#addToCartModalOkButton').prop('disabled', false);
                } else {
                    // Si no se seleccionó un modelo, deshabilitar el botón "OK"
                    $('#addToCartModalOkButton').prop('disabled', true);
                }
            });
        });
    </script>
@endpush
