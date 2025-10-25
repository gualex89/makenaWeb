@extends('layouts.newmakena.app2')

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
    <div class="tf-section-2 product-detail">
        <div class="themesflat-container">
            <div class="row">
                <div data-wow-delay="0s" class="wow fadeInLeft col-md-6">
                    <div class="tf-card-box style-5 mb-0">
                        <div class="card-media  image-hover-container">
                            <a href="#">
                                <img src="{{ Voyager::image($item->image) }}" 
                                    alt="Funda de {{ $item->diseno }} modelo {{ $item->modeloCEO }}" 
                                    class="main-img img-fluid " width="280" height="auto" />

                                <img src="{{ Voyager::image($item->image2) }}" 
                                    alt="Funda de {{ $item->diseno }} - vista alterna" 
                                    class="hover-img img-fluid my-4" width="280" height="auto" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-wow-delay="0s" class="wow fadeInRight infor-product">
                        
                        
                        <h2>Funda de {{ $item->diseno }} {{ $item->file_name }}</h2>
                        <h3><span style="color: #b321a6">{{ $item->categoria }}</span></h3>

                         <div class="container_cuotas pt-4">

                            <h6>2 cuotas <span style="color: #b321a6; font-weight: bold">SIN</span> interés llevando <span
                                    style="color: #b321a6; font-weight: bold">1</span> funda de cualquier modelo</h6><br>
                            <h6>3 cuotas <span style="color: #b321a6; font-weight: bold">SIN</span> interés llevando <span
                                    style="color: #b321a6; font-weight: bold">2 o MÁS</span></h6><br>
                        </div>
                        
                        <div class="meta mb-20 mt-5">
                            <div class="meta-item view">
                                📱 Impresión HD ultra brillante
                            </div>
                            <div class="meta-item rating">
                                💖 Diseño único y resistente
                            </div>
                            
                        </div>
                    </div>

                    

                    <div class="mt-5">

                        <h6>Envíos a todo el país</h6><br>
                        <a href="/calcula-envio" target="_blank" ><h6>🚚 Cotizá tu envío</h6></a>
                    </div>

                    <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales mt-20">
                        
                        <div class="content">
                            <div class="text">Precio</div>
                            <div class="flex justify-between">
                                <p>{{ $precioCuadroBasic }} </p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#addToCartModalCuadros" class="tf-button style-1 h50 w216"><i class="fas fa-shopping-cart"></i>Seleccioná tu modelo</i></a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@include('partials.addToCartModalCuadros')
@push('scripts')
    <script>
        document.querySelectorAll('.categorias-menu li.parent > a').forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                // Cerrar otros abiertos
                document.querySelectorAll('.categorias-menu li.parent.open').forEach(el => {
                    if (el !== link.parentElement) el.classList.remove('open');
                });
                link.parentElement.classList.toggle('open');
            });
        });
    </script>


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

                subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                totalElement.textContent = `$${total.toFixed(2)}`;
            }

            let price, itemName, imageUrl; 

            /* function addToCart(productItem) {
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
            } */
            function addToCart(productItem) {
                price = parseFloat(productItem.querySelector('.item_price').textContent.replace('$', ''));
                itemName = productItem.querySelector('.item_title').textContent;
                imageUrl = productItem.querySelector('img').getAttribute(
                'src'); // Obtener la URL de la imagen completa

                // Mostrar la modal
                $('#addToCartModalCuadros').modal('show');


            }
            document.getElementById('addToCartModalOkButton').addEventListener('click', function() {
                const selectedMarca = document.getElementById('colganteDropdown').value;
                const selectedModelo = document.getElementById('tamanoDropdown').value;

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
                    $('#addToCartModalCuadros').modal('hide');
                } else {
                    // Si no se ha seleccionado un modelo, muestra un mensaje de alerta dentro de la modal
                    alert('Por favor, seleccione un modelo');
                }
            });

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

            document.querySelectorAll('.alCarrito').forEach(btn => {
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
        document.addEventListener('DOMContentLoaded', function () {
            const parents = document.querySelectorAll('.categorias-menu li.parent');

            parents.forEach(parent => {
                const link = parent.querySelector('a');
                const submenu = parent.querySelector('ul');

                link.addEventListener('click', e => {
                e.preventDefault();

                // Cerrar todos los demás
                document.querySelectorAll('.categorias-menu li.parent').forEach(other => {
                    if (other !== parent) {
                    other.classList.remove('open');
                    const otherSub = other.querySelector('ul');
                    if (otherSub) otherSub.style.maxHeight = null;
                    }
                });

                // Alternar este
                parent.classList.toggle('open');
                if (submenu.style.maxHeight) {
                    submenu.style.maxHeight = null;
                } else {
                    submenu.style.maxHeight = submenu.scrollHeight + "px";
                }
                });
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            // Mostrar todas las imágenes al cargar la página
            showImages('all');

            // Función para mostrar/ocultar imágenes según la categoría
            function showImages(category) {
                if (window.innerWidth < 600 && window.location.pathname.startsWith('/catalogo') && window.location
                    .search.includes('categoria=')) {
                    window.scrollBy({
                        top: 500,
                        behavior: 'smooth'
                    });
                }
                $('.image-item').hide(); // Ocultar todas las imágenes

                if (category === 'all') {
                    $('.image-item').show(); // Mostrar todas las imágenes si la categoría es 'all'
                } else {
                    $('.image-item[data-category="' + category + '"]')
                .show(); // Mostrar imágenes de la categoría seleccionada
                }
            }

            // Manejar el clic en los enlaces de filtrado
            $('a[data-category]').on('click', function(e) {
                var category = $(this).data('category');
                showImages(category);
            });

            // Capturar el clic en los elementos de categoría para alternar la clase 'active'
            const parentItems = document.querySelectorAll('.parent');

            parentItems.forEach(item => {
                item.addEventListener('click', function(event) {
                    this.classList.toggle('active');

                    // Desactivar todas las categorías excepto la actual
                    parentItems.forEach(parent => {
                        if (parent !== this && parent.classList.contains('active')) {
                            parent.classList.remove('active');
                        }
                    });
                });
            });
        });
        //Hover imagen dinámico
        document.addEventListener('DOMContentLoaded', function() {
            const img = document.getElementById('imagenDinamico');
            const original = img.src;
            const hover = img.dataset.hover;

            img.addEventListener('mouseenter', () => img.src = hover);
            img.addEventListener('mouseleave', () => img.src = original);
        });
    </script>
    <script>
            $(document).ready(function() {
                // Cargar marcas al cargar la página

                
                $('#tamanoDropdown').change(function() {
                    console.log('Hola');
                    // Verificar si se ha seleccionado un modelo
                    if ($(this).val() !== '' && $('#colganteDropdown').val() !== '') {
                        // Si se seleccionó un modelo, habilitar el botón "OK"
                        $('#addToCartModalOkButton').prop('disabled', false);
                    } else {
                        // Si no se seleccionó un modelo, deshabilitar el botón "OK"
                        $('#addToCartModalOkButton').prop('disabled', true);
                    }
                });
                $('#colganteDropdown').change(function() {
                    // Verificar si se ha seleccionado un modelo
                    if ($(this).val() !== '' && $('#tamanoDropdown').val() !== '') {
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