@extends('layouts.newmakena.app2')

@section('title', 'Remera de ' . $item->diseno . ' | ' . $item->categoria . ' - Makena')

@section('meta_description',
    $item->nombreRemeras .
    '. Categoría: ' .
    $item->categoria .
    '. Alta calidad y diseño
    exclusivo.')
@section('meta_keywords', 'Remeras ' . $item->categoria . ', Remera personalizada, Remera de ' . $item->diseno . ', ' .
    strtolower($item->categoria))


@section('og_title', 'Remera de ' . $item->diseno . ' | ' . $item->categoria . ' - Makena')
@section('og_description',
    'Conseguí tu remera de ' .
    $item->diseno .
    ' de la categoría ' .
    $item->categoria .
    ' con
    diseño premium.')
@section('og_image', Voyager::image($item->image))

@section('twitter_title', 'Remera ' . $item->diseno . ' | ' . $item->categoria)
@section('twitter_description', 'Remeras con diseño personalizados de ' . $item->diseno . '. Categoría: ' .
    $item->categoria . '. ¡Ideal para fans de anime y manga!')
@section('twitter_image', Voyager::image($item->image))


@section('canonical', url()->current())

@section('content')
    <div class="tf-section-2 product-detail">
        <div class="themesflat-container">
            <div class="row">
                <div data-wow-delay="0s" class="wow fadeInLeft col-md-6">
                    <div class="tf-card-box style-5 mb-0">
                        <div class="card-media card-media-cuadros  image-hover-container">
                            <a href="#">
                                <img id="imagenPrincipal" src="{{ Voyager::image($item->image) }}"
                                    alt="Remera de {{ $item->diseno }}"
                                    class="main-img img-fluid " width="280" height="auto" />

                                <img id="imagenDinamico-cuadros" src="{{ Voyager::image($item->image2) }}"
                                    data-hover="{{ Voyager::image($item->image2) }}"
                                    alt="Remera de {{ $item->diseno }} - vista alterna" class="hover-img img-fluid "
                                    width="280" height="auto" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-wow-delay="0s" class="wow fadeInRight infor-product">


                        <h2 class="item_title">{{ $item->nombreRemeras }} {{ $item->file_name }}</h2>
                        <h3><span style="color: #b321a6">{{ $item->categoria }}</span></h3>

                        <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales mt-20">

                            <div class="content">
                                <div class="text">Precio </div>
                                <div class="flex justify-between">
                                    <p class="item_price">${{ number_format((float) preg_replace('/[^0-9.]/', '', $item->precio), 0, ',', '.') }} </p>
                                    <a id="btnAgregarCarrito" href="#" 
                                        data-price-id="{{ $item->price_id }}"
                                        data-nombre="{{ $item->nombreRemeras }}"
                                        data-modelo="{{ $item->file_name }}"
                                        data-imagen="{{ Voyager::image($item->image) }}"
                                        data-tipo="Remera"
                                        class="tf-button style-1 h50 alCarrito"><i
                                            class="fas fa-shopping-cart"></i>Seleccionar talle</a>
                                </div>
                            </div>
                        </div>
                        <div class="container_cuotas pt-4">
                            <h6>Hasta <span style="color: #b321a6; font-weight: bold">3</span> cuotas<span
                                    style="color: #b321a6; font-weight: bold"> sin interés</span></h6><br>

                        </div>

                        <div class="meta mb-20 mt-5">
                            <div class="meta-item view">
                                Algodón Premium&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Estampado de Alta Durabilidad&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Corte Oversize&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Diseños Exclusivos
                            </div>


                        </div>
                    </div>



                    <div class="mt-5">

                        <h6>Envíos a todo el país</h6><br>
                        <a href="/calcula-envio" target="_blank">
                            <h6>🚚 Cotizá tu envío acá</h6>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
    @include('partials.addToCartModalRemeras')
@endsection
@push('scripts')
    <script></script>


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

            // Variables temporales para el producto pendiente de agregar
            let pendingPriceId = null;
            let pendingNombre = null;
            let pendingImagen = null;
            let pendingPrecio = null;
            let pendingModelo = null;
            let pendingTipo = null;

            const tallesPorProducto = @json($tallesPorProducto);

            function addToCart(btn) {
                pendingPriceId = btn.dataset.priceId;
                pendingNombre = btn.dataset.nombre + ' - ' + btn.dataset.modelo;
                pendingImagen = btn.dataset.imagen;
                pendingModelo = btn.dataset.modelo;
                pendingTipo = btn.dataset.tipo;

                // Obtener precio del elemento
                const priceEl = document.querySelector('.item_price');
                pendingPrecio = priceEl ? parseFloat(priceEl.textContent.replace(/[^0-9,]/g, '').replace(',', '.')) : 0;

                // Llenar dropdown de talles
                const select = document.getElementById('talleDropdown');
                if (select) {
                    select.innerHTML = '<option value="">Seleccione un Talle</option>';

                    const talles = tallesPorProducto[pendingPriceId] || [];
                    talles.forEach(talle => {
                        const opt = document.createElement('option');
                        opt.value = talle.nombre || talle.talle || talle.name;
                        opt.textContent = talle.nombre || talle.talle || talle.name;
                        select.appendChild(opt);
                    });

                    // Deshabilitar botón hasta que elijan talle
                    document.getElementById('addToCartModalRemerasOkButton').disabled = true;
                }

                $('#addToCartModalRemeras').modal('show');
            }

            document.getElementById('addToCartModalRemerasOkButton').addEventListener('click', async () => {
                const talleSeleccionado = document.getElementById('talleDropdown').value;
                if (!talleSeleccionado) {
                    alert('Por favor, seleccione un talle');
                    return;
                }

                try {
                    Swal.fire({
                        title: 'Agregando al carrito...',
                        text: 'Por favor, espera un momento ⏳',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    const pendingCartItem = {
                        name: pendingNombre,
                        price: pendingPrecio,
                        image: pendingImagen,
                        talle: talleSeleccionado,
                        tipo: 'Remera',
                        marca: talleSeleccionado,
                        modelo: pendingModelo
                    };

                    // Recuperar y actualizar carrito existente
                    cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                    cartItems.push(pendingCartItem);
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));

                    // Actualizar contador y precios
                    cartItemCount = cartItems.length;
                    subtotal = cartItems.reduce((sum, item) => sum + item.price, 0);
                    total = subtotal;

                    updateCartItems();
                    updatePrices();
                    updateCartCounter();
                    Swal.close();
                    productoAgregadoAlCarrito();
                    $('#addToCartModalRemeras').modal('hide');

                } catch (error) {
                    console.error('Error al agregar al carrito:', error);
                }
            });

            // Habilitar botón OK cuando se seleccione un talle
            const talleDropdown = document.getElementById('talleDropdown');
            if (talleDropdown) {
                talleDropdown.addEventListener('change', function() {
                    document.getElementById('addToCartModalRemerasOkButton').disabled = !this.value;
                });
            }

            function updateCartItems() {
                const cartItemsList = document.querySelector('.cart_items_list');
                if (!cartItemsList) return;

                cartItemsList.innerHTML = '';

                cartItems.forEach(cartItem => {
                    let tipoProducto;
                    if (cartItem.tipo) {
                        tipoProducto = cartItem.tipo;
                    } else if (cartItem.marca2) {
                        tipoProducto = 'Funda Doble';
                    } else if (cartItem.talle) {
                        tipoProducto = 'Remera';
                    } else if (cartItem.name && typeof cartItem.name === 'string' && cartItem.name
                        .toLowerCase().includes('cuadro')) {
                        tipoProducto = 'Cuadro';
                    } else {
                        tipoProducto = 'Funda';
                    }

                    // Detalle adicional según tipo
                    let detalle = '';
                    if (cartItem.talle) detalle = `Talle: ${cartItem.talle}`;
                    else if (cartItem.tamaño) detalle =
                        `${cartItem.tamaño}${cartItem.colgante ? ' / ' + cartItem.colgante : ''}`;
                    else if (cartItem.marca) detalle = `${cartItem.marca} ${cartItem.modelo || ''}`;
                    if (cartItem.marca2) detalle += ` | ${cartItem.marca2} ${cartItem.modelo2 || ''}`;

                    const cartItemHTML = `
                    <li style="background:transparent; margin-bottom:32px; padding:0; display:flex; align-items:center;">
                    <div style="background:#fff; border-radius:18px; padding:12px; display:flex; align-items:center; width:70px; min-width:30px; justify-content:center;">
                        <img src="${cartItem.image}" alt="${tipoProducto} ${cartItem.name}" style="width:100%; border-radius:4px; display:block;"/>
                    </div>
                    <div class="item_content" style="color:#fff; margin-left:18px; position:relative; flex:1;">
                        <div style="padding-right:32px;">
                         
                        <div style="font-weight:700; font-size:18px; margin:2px 0;"><span class="item_title">${cartItem.name}</span></div>
                        ${detalle ? `<div style="font-size:15px; margin-bottom:2px;">${detalle}</div>` : ''}
                        <div style="font-weight:700; font-size:17px; margin-top:6px;"><span class="item_price">$${cartItem.price ? Number(cartItem.price).toLocaleString('es-CL') : '0'}</span></div>
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
                    addToCart(this);
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
        document.addEventListener('DOMContentLoaded', function() {
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
            const img = document.getElementById('imagenDinamico-cuadros');
            if (!img) return;

            const original = img.src;
            const hover = img.dataset.hover;

            img.addEventListener('mouseenter', () => {
                if (hover) img.src = hover;
            });
            img.addEventListener('mouseleave', () => {
                img.src = original;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Lógica específica para dropdowns si fuera necesaria
        });
    </script>
@endpush
