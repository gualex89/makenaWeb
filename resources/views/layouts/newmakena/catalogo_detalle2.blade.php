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
                        <div class="card-media mb-0">
                            <a href="#">
                                <img src="{{ asset('assets_new/images/box-item/product-detail-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <h6 class="price gem"><i class="icon-gem"></i></h6>
                        <div class="wishlist-button">10<i class="icon-heart"></i></div>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-wow-delay="0s" class="wow fadeInRight infor-product">
                        <div class="text">8SIAN Main Collection <span class="icon-tick"><span class="path1"></span><span class="path2"></span></span></div>
                        <div class="menu_card">
                            <div class="dropdown">
                                <div class="icon">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="icon-link-1"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="icon-link"></i>Copy link</a>
                                        <a class="dropdown-item" href="#"><i class="icon-facebook"></i>Share on facebook</a>
                                        <a class="dropdown-item mb-0" href="#"><i class="icon-twitter"></i>Share on twitter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <div class="icon">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="icon-content"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="icon-refresh"></i>Refresh metadata</a>
                                        <a class="dropdown-item mb-0" href="#"><i class="icon-report"></i>Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Themesflat #0270</h2>
                        <div class="author flex items-center mb-30">
                            <div class="avatar">
                                <img src="{{ asset('assets_new/images/avatar/avatar-box-05.jpg') }}" alt="Image">
                            </div>
                            <div class="info">
                                <span>Owned by:</span>
                                <h6><a href="author-1.html">Marvin McKinney</a> </h6>
                            </div>
                        </div>
                        <div class="meta mb-20">
                            <div class="meta-item view">
                                <i class="icon-show"></i>208 view
                            </div>
                            <div class="meta-item rating">
                                <i class="icon-link-2"></i>Top #2 trending
                            </div>
                            <div class="meta-item favorites">
                                <i class="icon-heart"></i>10 favorites
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales">
                        <h6><i class="icon-clock"></i>Sale ends May 22 at 9:39</h6>
                        <div class="content">
                            <div class="text">Current price</div>
                            <div class="flex justify-between">
                                <p>0,032 ETH <span>$58,11</span></p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#addToCartModal" class="tf-button style-1 h50 w216">Agregar al carrito<i class="icon-arrow-up-right2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0s" class="wow fadeInRight product-item description">
                        <h6><i class="icon-description"></i>Description</h6>
                        <i class="icon-keyboard_arrow_down"></i>
                        <div class="content">
                            <p>8,888 NFTs of beautiful, Asian women painstakingly-crafted where even the most intricate details are steeped in historical significance. We envision 8SIAN being a global, inclusive community <span>see more</span></p>
                        </div>
                    </div>
                    <div data-wow-delay="0s" class="wow fadeInRight product-item history">
                        <h6><i class="icon-description"></i>Price History</h6>
                        <i class="icon-keyboard_arrow_down"></i>
                        <div class="content">
                            <div class="chart">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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
                $('#addToCartModal').modal('show');


            }
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
                    <li style="background:transparent; margin-bottom:32px; padding:0; display:flex; align-items:center;">
                        <div style="background:#fff; border-radius:18px; padding:12px; display:flex; align-items:center; width:70px; min-width:30px; justify-content:center;">
                            <img src="${cartItem.image}" alt="Funda en carrito ${cartItem.name}" style="width:100%; border-radius:4px; display:block;"/>
                        </div>
                        <div class="item_content" style="color:#fff; margin-left:18px; position:relative; flex:1;">
                            
                            <div style="padding-right:32px;">
                                <span class="item_type" style="font-size:13px;">${cartItem.marca2 ? `Funda Doble` : `Funda`}</span>
                                <div style="font-weight:700; font-size:18px; margin:2px 0 2px 0;"><span class="item_title">${cartItem.name}</span></div>
                                <div style="font-size:15px; margin-bottom:2px;">${cartItem.marca ? cartItem.marca : ''} ${cartItem.modelo ? cartItem.modelo : ''}</div>
                                ${cartItem.marca2 ? `<div style="font-size:15px;">${cartItem.marca2} ${cartItem.modelo2}</div>` : ''}
                                <div style="font-weight:700; font-size:17px; margin-top:6px;"><span class="item_price">$${cartItem.price}</span></div>
                            </div>
                        </div>
                        <button type="button" class="remove_btn" style=" background:none; border:none; color:#fff; font-size:2rem;">
                            <i class="bi bi-trash"></i>
                        </button>
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
            document.querySelector('.open-cart-sidebar').addEventListener('click', openCartSidebar);
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
    </script>
@endpush