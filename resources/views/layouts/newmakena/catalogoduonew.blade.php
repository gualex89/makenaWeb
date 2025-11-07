<!DOCTYPE html>
<html lang="es">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Fundas de Celu Manga y Anime - Samsung, Motorola, Xiaomi, iPhone | Makena</title>
        <meta name="description"
            content="Todo lo que buscas en una funda con acabado brillante, imagen Ultra HD y agarres laterales anti-slip para Samsung, Motorola, Xiaomi y iPhone. Amplio catálogo disponible.">
        <meta name="keywords"
            content="fundas para celulares, fundas, carcasas, anime, manga, Dragon Ball, Naruto, Samsung, iPhone, Xiaomi, Motorola, Argentina, imagen, catálogo, personalizar">

        <link rel="canonical" href="https://makenafundas.com.ar/catalogo">
        <link rel="shortcut icon" href="images/logo/makenaminiicon.png">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Fundas de Celu Manga y Anime - Makena">
        <meta property="og:description"
            content="Encuentra fundas con acabado brillante, imagen Ultra HD y agarres anti-slip. Samsung, Motorola, Xiaomi, iPhone. Amplio catálogo de anime y manga.">
        <meta property="og:image" content="https://makenafundas.com.ar/images/logo/makenaminiicon.png">
        <meta property="og:url" content="https://makenafundas.com.ar/catalogo">
        <meta property="og:type" content="website">

        <!-- Twitter Card Meta -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Fundas de Celu Manga y Anime - Makena">
        <meta name="twitter:description"
            content="Fundas de alta calidad para Samsung, Motorola, Xiaomi y iPhone. Amplio catálogo de anime y manga en Makena.">
        <meta name="twitter:image" content="https://makenafundas.com.ar/images/logo/makenaminiicon.png">


        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/style.css') }}">

        <!-- Reponsive -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/responsive.css') }}">

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css">

        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.js"></script>


        

    </head>

    <body class="body">

        <div id="wrapper">
            <div id="page" class="pt-40 home-1">

                <!-- header_section - start
                ================================================== -->
                @include('partials.headernew')
                <!-- header_section - end
                ================================================== -->
                
                <main>
                    <div class="row">
                        <div class="tf-section-3 discover-item mt-5 col-lg-12"> 
                            <div class="themesflat-container">
                                <div class="row">
                                    
                                    @foreach ($imagesCatalogoDuo as $image)
                                    <div data-wow-delay="0s" class="wow fadeInUp col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="tf-card-box style-1 motorcycle_product_grid">
                                            <div class="card-media">
                                                <a href="">
                                                    <img src="{{ Voyager::image($image->image) }}" alt="{{ $image->file_name }}" style="width: 400px">
                                                </a>
                                                <div class="button-place-bid">
                                                    <ul class="ul_li_block text-center clearfix">
                                                        <li>
                                                            <a class="alCarrito tf-button p-2"
                                                                href="#!"
                                                                data-image="{{ Voyager::image($image->image) }}"
                                                                data-title="{{ $image->file_name }}">
                                                                <span><i class="fas fa-shopping-cart"></i></span>
                                                                <span>Seleccioná tu modelo</span>
                                                            </a>
                                                        </li>

                                                        <li class="pt-2">
                                                            <a class="tf-button ver-btn"data-image="{{ Voyager::image($image->image) }}"
                                                                data-title="{{ $image->file_name }}" href="">
                                                                <span><i class="fas fa-search"></i></span>
                                                                <span>Ver</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                            <h5 class="name item_title"><a href="nft-detail-2.html">{{ $image->file_name }}</a></h5>
                                            
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid"></span>
                                                <h5 class="item_price price gem">{{$precioFundaDuo}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="pagination-info text-center">
                                        <p>
                                            Mostrando {{ $imagesCatalogoDuo->firstItem() }} a
                                            {{ $imagesCatalogoDuo->lastItem() }} de {{ $imagesCatalogoDuo->total() }} resultados
                                        </p>
                                        <div class="pagination-navigation carousel_nav">
                                            <div class="pagination-navigation carousel_nav">
                                                <button type="button"
                                                    class="pagination-button main_left_arrow{{ $imagesCatalogoDuo->onFirstPage() ? ' disabled' : '' }}"
                                                    onclick="if (!this.classList.contains('disabled')) { window.location='{{ $imagesCatalogo->previousPageUrl() }}{{ request()->has('categoria') ? '&categoria=' . request('categoria') : '' }}'; }">
                                                    <i class="fas fa-arrow-left"></i>
                                                </button>
                                                <button type="button"
                                                    class="pagination-button main_right_arrow{{ $imagesCatalogoDuo->hasMorePages() ? '' : ' disabled' }}"
                                                    onclick="if (!this.classList.contains('disabled')) { window.location='{{ $imagesCatalogo->nextPageUrl() }}{{ request()->has('categoria') ? '&categoria=' . request('categoria') : '' }}'; }">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Agregar enlaces de paginación aquí -->

                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <!-- Modal: Seleccionar modelo -->
                    @include('partials.addToCartModalDuo')

                </main>

                
                <!-- footer_section - start
                ================================================== -->
                @include('partials.footernew')
                <!-- footer_section - end
                ================================================== -->
            
            </div>
            <!-- /#page -->

            <!-- Carrito Sidebar -->
            <div class="cart_sidebar" style="display:none; position:fixed; top:0; right:0; width:370px; height:100vh; background:#181818; z-index:9999; box-shadow:-2px 0 10px rgba(0,0,0,0.2); overflow-y:auto;">
                <button type="button" class="close_btn" style="background:none; border:none; color:#fff; font-size:2rem; position:absolute; top:15px; right:15px; z-index:10001;"><i class="fas fa-times"></i></button>
                <div style="padding:40px 24px 24px 24px;">
                    <ul class="cart_items_list ul_li_block mb_30 clearfix" style="padding:0; margin:0 0 30px 0;">
                        <!-- Items del carrito se llenan por JS -->
                    </ul>
                    <ul class="total_price ul_li_block mb_30 clearfix" style="padding:0; margin:0 0 30px 0;">
                        <li class="total_sidecart">
                            <span>Subtotal:</span>
                            <span>$0</span>
                        </li>
                        <li class="total_sidecart">
                            <span>Total:</span>
                            <span>$0</span>
                        </li>
                    </ul>
                    <ul class="btns_group ul_li_block clearfix" style="padding:0;">
                        <li><a href="/carrito" class="tf-button style-1 w-100">Ir al carrito</a></li>
                    </ul>
                </div>
            </div>

            

        </div>
        <!-- /#wrapper -->

        

        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
            </svg>
        </div>

        {{-- modal de la imagen del modelo --}}
    <div class="modal fade" id="productImageModal" tabindex="-1" role="dialog"
        aria-labelledby="productImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content mt-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="productImageModalLabel">{{ $image->file_name }}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="{{ $image->nombreFundas }}" id="productImage"
                        style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>

        <!-- Javascript -->
        <script src="{{ asset('assets_new/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/swiper.js') }}"></script>
        <script src="{{ asset('assets_new/js/count-down.js') }}"></script>
        <script src="{{ asset('assets_new/js/simpleParallax.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/gsap.js') }}"></script>
        <script src="{{ asset('assets_new/js/SplitText.js') }}"></script>
        <script src="{{ asset('assets_new/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('assets_new/js/gsap-animation.js') }}"></script>
        <script src="{{ asset('assets_new/js/tsparticles.min.js') }}"></script>
        <script src="{{ asset('assets_new/js/tsparticles.js') }}"></script>
        <script src="{{ asset('assets_new/js/main.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

        <script src="{{ asset('js/nice-select.min.js') }}"></script>
        

        
        

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let cartItemCount = 0;
                let subtotal = 0;
                let total = 0;
                let cartItems = [];

                function updateCartCounter() {
                    const badgeElements = document.querySelectorAll('.btn_badge');
                    badgeElements.forEach(element => {
                        element.textContent = cartItemCount;
                    });
                }

                function productoAgregadoAlCarrito() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Producto agregado al carrito',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true,
                        iconColor: '#4CAF50',
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                }

                function updatePrices() {
                    const subtotalElement = document.querySelector('.total_price li:nth-child(1) span:nth-child(2)');
                    const totalElement = document.querySelector('.total_price li:nth-child(2) span:nth-child(2)');
                    if (subtotalElement && totalElement) {
                        subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                        totalElement.textContent = `$${total.toFixed(2)}`;
                    }
                }

                let price, itemName, imageUrl;

                // Mostrar la modal al hacer clic en “Seleccioná tu modelo”
                function addToCart(productItem) {
                    price = parseFloat(productItem.querySelector('.item_price').textContent.replace('$', ''));
                    itemName = productItem.querySelector('.item_title').textContent;
                    imageUrl = productItem.querySelector('img').getAttribute('src');

                    // Mostrar la imagen en la modal
                    const productImageElement = document.getElementById('productImageAlcarrito');
                    if (productImageElement) productImageElement.src = imageUrl;

                    // Mostrar modal moderna Bootstrap 5
                    $('#addToCartModal').modal('show');
                }

                // Confirmar selección desde la modal
                document.getElementById('addToCartModalOkButton').addEventListener('click', function() {
                    const selectedMarca = document.getElementById('marcasDropdown').value;
                    const selectedModelo = document.getElementById('modelosDropdown').value;
                    const selectedMarca2 = document.getElementById('marcasDropdown2')?.value || null;
                    const selectedModelo2 = document.getElementById('modelosDropdown2')?.value || null;

                    // Verificar selección
                    if (selectedModelo || selectedModelo2) {
                        const pendingCartItem = {
                            name: itemName,
                            price: price,
                            image: imageUrl,
                            marca: selectedMarca,
                            modelo: selectedModelo,
                            marca2: selectedMarca2,
                            modelo2: selectedModelo2
                        };

                        cartItemCount++;
                        subtotal += pendingCartItem.price;
                        total = subtotal;
                        cartItems.push(pendingCartItem);
                        localStorage.setItem('cartItems', JSON.stringify(cartItems));
                        updateCartItems();
                        updatePrices();
                        productoAgregadoAlCarrito();
                        $('#addToCartModal').modal('hide');

                        
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Seleccioná el modelo antes de continuar',
                            timer: 1500,
                            showConfirmButton: false,
                            toast: true,
                            position: 'top-end'
                        });
                    }
                });

                // 🧩 Muestra de productos en el carrito lateral (diseño original restaurado)
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

                // Restaurar carrito guardado
                function restoreCart() {
                    const storedCartItems = localStorage.getItem('cartItems');
                    if (storedCartItems) {
                        cartItems = JSON.parse(storedCartItems);
                        cartItemCount = cartItems.length;
                        subtotal = cartItems.reduce((sum, item) => sum + item.price, 0);
                        total = subtotal;
                        updateCartItems();
                        updatePrices();
                    }
                }

                // Eliminar ítem
                function removeFromCart(item) {
                    const itemName = item.querySelector('.item_title').textContent;
                    const indexToRemove = cartItems.findIndex(cartItem => cartItem.name === itemName);

                    if (indexToRemove !== -1) {
                        subtotal -= cartItems[indexToRemove].price;
                        total = subtotal;
                        cartItems.splice(indexToRemove, 1);
                        localStorage.setItem('cartItems', JSON.stringify(cartItems));
                        cartItemCount--;
                        updateCartItems();
                        updatePrices();
                        updateCartCounter();
                    }
                }

                // Inicialización
                restoreCart();

                document.querySelectorAll('.alCarrito').forEach(btn => {
                    btn.addEventListener('click', function(event) {
                        event.preventDefault();
                        const productItem = this.closest('.motorcycle_product_grid');
                        addToCart(productItem);
                    });
                });

                // Botón eliminar en carrito lateral
                document.querySelector('.cart_items_list').addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove_btn') || event.target.closest('.remove_btn')) {
                        const item = event.target.closest('li');
                        removeFromCart(item);
                    }
                });

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

                // Sidebar abrir/cerrar
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
            });
        </script>


<!-- Carga de marcas y modelos -->
        <script>
            $(document).ready(function() {

                // Cargar marcas
                $.get('/obtener-marcas', function(data) {
                    data.forEach(function(marca) {
                        $('#marcasDropdown, #marcasDropdown2').append('<option value="' + marca + '">' + marca + '</option>');
                    });
                });

                // MarcasDropdown #1
                $('#marcasDropdown').on('change', function() {
                    const marcaSeleccionada = $(this).val();
                    $('#modelosDropdown').empty().append('<option value="">Seleccione un modelo</option>');
                    if (!marcaSeleccionada) return;

                    $.get('/obtener-modelos/' + marcaSeleccionada, function(data) {
                        data.forEach(function(modelo) {
                            $('#modelosDropdown').append('<option value="' + modelo + '">' + modelo + '</option>');
                        });
                    });
                });

                // MarcasDropdown #2
                $('#marcasDropdown2').on('change', function() {
                    const marcaSeleccionada2 = $(this).val();
                    $('#modelosDropdown2').empty().append('<option value="">Seleccione un modelo</option>');
                    if (!marcaSeleccionada2) return;

                    $.get('/obtener-modelos/' + marcaSeleccionada2, function(data) {
                        data.forEach(function(modelo) {
                            $('#modelosDropdown2').append('<option value="' + modelo + '">' + modelo + '</option>');
                        });
                    });
                });

                // Habilitar botón cuando haya al menos un modelo seleccionado
                $('#modelosDropdown, #modelosDropdown2').on('change', function() {
                    const m1 = $('#modelosDropdown').val();
                    const m2 = $('#modelosDropdown2').val();
                    $('#addToCartModalOkButton').prop('disabled', !(m1 || m2));
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




    </body>
</html>