<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Cuadros de Manga y Anime - Metalicos y Personalizados | Makena</title>
    <meta name="description"
        content="Todo lo que buscas en un cuadro con acabado brillante, imagen Ultra HD y Colgantes Incluidos.">
    <meta name="keywords"
        content="Cuadros brillantes metalicos, anime, manga, Dragon Ball, Naruto, Argentina, imagen, catálogo, personalizar">

    <link rel="canonical" href="https://makenafundas.com.ar/catalogo-cuadros">
    <link rel="shortcut icon" href="images/logo/makenaminiicon.png">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Cuadros de Manga y Anime - Makena">
    <meta property="og:description"
        content="Encuentra cuadros con acabado brillante, imagen Ultra HD y colgantes incluidos. Amplio catálogo de anime y manga.">
    <meta property="og:image" content="https://makenafundas.com.ar/images/logo/makenaminiicon.png">
    <meta property="og:url" content="https://makenafundas.com.ar/catalogo-cuadros">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cuadros de Manga y Anime - Makena">
    <meta name="twitter:description"
        content="Cuadros de alta calidad para Samsung, Motorola, Xiaomi y iPhone. Amplio catálogo de anime y manga en Makena.">
    <meta name="twitter:image" content="https://makenafundas.com.ar/images/logo/makenaminiicon.png">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/style.css') }}?v={{ time() }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/responsive.css') }}?v={{ time() }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.js"></script>


    <style>
        .categorias-container {
            background: #1f1f1f;
            border-radius: 14px;
            padding: 10px 0;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .categorias-menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .categorias-menu>li {
            border-bottom: 1px solid #2c2c2c;
        }

        .categorias-menu>li:last-child {
            border-bottom: none;
        }

        .categorias-menu>li>a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 7px 7px;
            color: #f5f5f5;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.25s ease;
        }

        .categorias-menu>li>a:hover {
            background: #2b2b2b;
            color: #b321a6;
        }

        .categorias-menu>li.parent>a::after {
            content: "\f105";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            transition: transform 0.3s ease;
            margin-left: 5px
        }

        .categorias-menu>li.open>a {
            background: #292929;
            color: #b321a6;
        }

        .categorias-menu>li.open>a::after {
            transform: rotate(90deg);
        }

        /* Subcategorías */
        .categorias-menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.25s ease;
            background: #242424;
        }

        .categorias-menu li.open>ul {
            max-height: 500px;
            padding: 6px 0;
        }

        .categorias-menu ul li a {
            display: block;
            padding: 0px 0px;
            font-size: 15px;
            font-weight: 400;
            color: #cfcfcf;
            text-decoration: none;
            transition: all 0.25s ease;
        }


        .categorias-menu ul li a:hover {
            color: #fff;
            background: #2f2f2f;
            padding-left: 8px;
        }

        .card-categories {
            border-radius: 15px
        }
    </style>

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
                    <div class="section-menu-left mt-5 col-lg-2 col-md-12 ml-5 card-categories">
                        <div class="over-content">
                            <div class="content">
                                <h6
                                    style="font-size:20px; font-weight:700; margin-bottom:18px; color:#b321a6; letter-spacing:1px;">
                                    Categorías
                                </h6>
                                <div class="categorias-container">
                                    <ul class="menu-tab categorias-menu">
                                        <li style="padding: 0px 24px;">
                                            <a href="/catalogocuadros" data-category="all">Todas</a>
                                        </li>
                                        <li class="parent" style=" padding: 0px 24px;">
                                            <a href="#">Anime</a>
                                            <ul>
                                                <li><a href="/catalogocuadros?categoria=AT">Attack on Titan</a></li>
                                                <li><a href="/catalogocuadros?categoria=BK">Berserk</a></li>
                                                <li><a href="/catalogocuadros?categoria=BH">Boku no Hero Academia</a>
                                                </li>
                                                <li><a href="/catalogocuadros?categoria=DS">Demon Slayer</a></li>
                                                <li><a href="/catalogocuadros?categoria=DB">Dragon Ball</a></li>
                                                <li><a href="/catalogocuadros?categoria=EV">Evangelion</a></li>
                                                <li><a href="/catalogocuadros?categoria=FN">Frieren</a></li>
                                                <li><a href="/catalogocuadros?categoria=HH">Hunter X Hunter</a></li>
                                                <li><a href="/catalogocuadros?categoria=JK">Jujutsu Kaisen</a></li>
                                                <li><a href="/catalogocuadros?categoria=NA">Naruto</a></li>
                                                <li><a href="/catalogocuadros?categoria=OP">One Piece</a></li>
                                                <li><a href="/catalogocuadros?categoria=PK">Pokemon</a></li>
                                                <li><a href="/catalogocuadros?categoria=SM">Sailor Moon</a></li>
                                                <li><a href="/catalogocuadros?categoria=SLV">Solo Leveling</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent" style="border-bottom:1px solid #333; padding: 0px 24px;">
                                            <a href="#">Deportes</a>
                                            <ul>
                                                <li><a href="/catalogocuadros?categoria=FES">Estadios</a></li>
                                                <li><a href="/catalogocuadros?categoria=FME">Messi</a></li>
                                                <li><a href="/catalogocuadros?categoria=FSA">Seleccion Argentina</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent" style="padding: 0px 24px;">
                                            <a href="#">Series</a>
                                            <ul>
                                                <li><a href="/catalogocuadros?categoria=ARC">Arcane</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="tf-section-3 discover-item mt-5 col-lg-9">
                        <div class="themesflat-container">
                            <div class="row">

                                @foreach ($imagesCatalogo as $image)
                                    <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="tf-card-box style-1 motorcycle_product_grid">
                                            <div class="card-media">
                                                {{-- <a href="{{ route('catalogo.show', $image->slug) }}">
                                                    <img src="{{ Voyager::image($image->image) }}" alt="{{ $image->file_name }}">
                                                    <img src="{{ Voyager::image($image->image2) }}" alt="{{ $image->file_name }}">
                                                </a> --}}
                                                <div class="card-media  image-hover-container">
                                                    <a href="{{ route('catalogo.showRemera', $image->slug) }}">
                                                        <img src="{{ Voyager::image($image->image) }}"
                                                            alt="Funda de {{ $image->diseno }} modelo {{ $image->modeloCEO }}"
                                                            class="main-img img-fluid " width="280" height="auto" />

                                                        <img src="{{ Voyager::image($image->image2) }}"
                                                            alt="Funda de {{ $image->diseno }} - vista alterna"
                                                            class="hover-img img-fluid my-4" width="280"
                                                            height="auto" />
                                                    </a>
                                                </div>
                                                <div class="button-place-bid botones-hover-catalogo">
                                                    <ul class="ul_li_block text-center clearfix">
                                                        <li><a class="alCarrito tf-button p-4" href="#!"
                                                                data-price-id="{{ $image->price_id }}"
                                                                data-nombre="{{ $image->nombreRemeras }}"
                                                                data-modelo="{{ $image->file_name }}"
                                                                data-imagen="{{ Voyager::image($image->image) }}"
                                                                data-tipo="{{ $image->tipo_producto }}" ><span><i
                                                                        class="fas fa-shopping-cart"></i></span>
                                                                <span>Seleccionar talle</span></a></li>
                                                        <li class="pt-2">
                                                            <a class="tf-button"
                                                                href="{{ route('catalogo.showRemera', $image->slug) }}">
                                                                <span><i class="fas fa-search"></i></span>
                                                                <span>Ver</span>
                                                            </a>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>
                                            <h6 class="name item_title"><a
                                                    href="{{ route('catalogo.showRemera', $image->slug) }}">
                                                    {{ $image->nombreRemeras }} <br> {{ $image->file_name }}</a></h6>

                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Precio</span>
                                                <h5 class="item_price price gem">

                                                    ${{ number_format((float) preg_replace('/[^0-9.]/', '', $image->precioRemera), 0, ',', '.') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-info text-center">
                                <p>
                                    Mostrando {{ $imagesCatalogo->firstItem() }} a
                                    {{ $imagesCatalogo->lastItem() }} de {{ $imagesCatalogo->total() }} resultados
                                </p>
                                <div class="pagination-navigation carousel_nav">
                                    <div class="pagination-navigation carousel_nav">
                                        <button type="button"
                                            class="pagination-button main_left_arrow{{ $imagesCatalogo->onFirstPage() ? ' disabled' : '' }}"
                                            onclick="if (!this.classList.contains('disabled')) { window.location='{{ $imagesCatalogo->previousPageUrl() }}{{ request()->has('categoria') ? '&categoria=' . request('categoria') : '' }}'; }">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <button type="button"
                                            class="pagination-button main_right_arrow{{ $imagesCatalogo->hasMorePages() ? '' : ' disabled' }}"
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
                @include('partials.addToCartModalRemeras')

            </main>












            <!-- footer_section - start
                ================================================== -->
            @include('partials.footernew')
            <!-- footer_section - end
                ================================================== -->

        </div>
        <!-- /#page -->

        <!-- Carrito Sidebar -->
        <div class="cart_sidebar"
            style="display:none; position:fixed; top:0; right:0; width:370px; height:100vh; background:#181818; z-index:9999; box-shadow:-2px 0 10px rgba(0,0,0,0.2); overflow-y:auto;">
            <button type="button" class="close_btn"
                style="background:none; border:none; color:#fff; font-size:2rem; position:absolute; top:15px; right:15px; z-index:10001;"><i
                    class="fas fa-times"></i></button>
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
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
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

            // Variables temporales para el producto pendiente de agregar
            let pendingPriceId = null;
            let pendingNombre = null;
            let pendingImagen = null;
            let pendingPrecio = null;

            function updateCartCounter() {
                document.querySelectorAll('.btn_badge').forEach(el => el.textContent = cartItemCount);
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
                });
            }

            function updatePrices() {
                const subtotalEl = document.querySelector('.total_price li:nth-child(1) span:nth-child(2)');
                const totalEl = document.querySelector('.total_price li:nth-child(2) span:nth-child(2)');
                if (subtotalEl) subtotalEl.textContent = `$${subtotal.toLocaleString('es-CL')}`;
                if (totalEl) totalEl.textContent = `$${total.toLocaleString('es-CL')}`;
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
                    } else if (cartItem.name && cartItem.name.toLowerCase().includes('cuadro')) {
                        tipoProducto = 'Cuadro';
                    } else if (cartItem.name && cartItem.name.toLowerCase().includes('remera')) {
                        tipoProducto = 'Remera';
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

                    cartItemsList.innerHTML += `
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
                });
                updateCartCounter();
            }

            function restoreCart() {
                const stored = localStorage.getItem('cartItems');
                if (stored) {
                    cartItems = JSON.parse(stored);
                    cartItemCount = cartItems.length;
                    cartItems.forEach(item => subtotal += item.price);
                    total = subtotal;
                    updateCartItems();
                    updatePrices();
                }
            }

            function removeFromCart(item) {
                const name = item.querySelector('.item_title').textContent;
                const idx = cartItems.findIndex(c => c.name === name);
                if (idx !== -1) {
                    subtotal -= cartItems[idx].price;
                    total = subtotal;
                    cartItems.splice(idx, 1);
                    cartItemCount--;
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                    updateCartItems();
                    updatePrices();
                    updateCartCounter();
                }
            }

            restoreCart();

            // --- Abrir modal con talles según price_id ---
            document.querySelectorAll('.alCarrito').forEach(btn => {
                btn.addEventListener('click', function(event) {
                    event.preventDefault();

                    pendingPriceId = this.dataset.priceId;
                    pendingNombre = this.dataset.nombre + ' - ' + this.dataset.modelo;
                    pendingImagen = this.dataset.imagen;
                    pendingModelo = this.dataset.modelo;
                    pendingTipo = this.dataset.tipo;

                    // Obtener precio del elemento más cercano
                    const priceEl = this.closest('.motorcycle_product_grid').querySelector(
                        '.item_price');
                    pendingPrecio = priceEl ? parseFloat(priceEl.textContent.replace(/[^0-9,]/g, '')
                        .replace(',', '.')) : 0;

                    // Llenar dropdown de talles
                    const select = document.getElementById('talleDropdown');
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

                    $('#addToCartModalRemeras').modal('show');
                });
            });

            // Habilitar botón OK cuando se seleccione un talle
            document.getElementById('talleDropdown').addEventListener('change', function() {
                document.getElementById('addToCartModalRemerasOkButton').disabled = !this.value;
            });

            // Confirmar y agregar al carrito
            document.getElementById('addToCartModalRemerasOkButton').addEventListener('click', function() {
                const talleSeleccionado = document.getElementById('talleDropdown').value;
                if (!talleSeleccionado) {
                    alert('Por favor, seleccione un talle');
                    return;
                }

                const cartItem = {
                    name: pendingNombre,
                    price: pendingPrecio,
                    image: pendingImagen,
                    talle: talleSeleccionado,
                    tipo: pendingTipo,
                    marca: talleSeleccionado,
                    modelo: pendingModelo
                };

                cartItemCount++;
                subtotal += cartItem.price;
                total = subtotal;
                cartItems.push(cartItem);
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                updateCartItems();
                updatePrices();
                productoAgregadoAlCarrito();

                $('#addToCartModalRemeras').modal('hide');
            });

            // Eliminar del carrito
            document.querySelector('.cart_items_list').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove_btn') || event.target.closest('.remove_btn')) {
                    removeFromCart(event.target.closest('li'));
                }
            });

            // Sidebar del carrito
            function openCartSidebar() {
                document.querySelector('.cart_sidebar').style.display = 'block';
                document.body.style.overflow = 'hidden';
            }

            function closeCartSidebar() {
                document.querySelector('.cart_sidebar').style.display = 'none';
                document.body.style.overflow = '';
            }

            document.addEventListener('mousedown', function(event) {
                const sidebar = document.querySelector('.cart_sidebar');
                if (sidebar.style.display === 'block' && !sidebar.contains(event.target) && !event.target
                    .classList.contains('open-cart-sidebar')) {
                    closeCartSidebar();
                }
            });
            document.querySelectorAll('.open-cart-sidebar').forEach(btn => btn.addEventListener('click',
                openCartSidebar));
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
            // Cargar marcas al cargar la página

            $('#tamanoDropdown').change(function() {
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
    <style>
        /* --- Forzar visibilidad del sidebar en móviles --- */
        @media (max-width: 767.98px) {
            .section-menu-left {
                display: block !important;
                margin-left: 0 !important;
                /* quita el ml-5 que desplaza */
                padding-left: 12px;
                padding-right: 12px;
                order: 0;
            }

            /* Asegura que el grid no lo "apriete" */
            .section-menu-left.col-lg-2.col-md-12 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
            }

            /* El menú debe ser vertical completo */
            .categorias-menu,
            .categorias-menu>li {
                display: block !important;
                width: 100% !important;
            }

            /* Si algún theme lo escondía */
            .menu-tab.categorias-menu {
                visibility: visible !important;
                opacity: 1 !important;
            }
        }

        /* Evita que reglas del theme lo oculten en cualquier breakpoint */
        .section-menu-left,
        .menu-tab.categorias-menu {
            display: block !important;
        }

        /* El contenedor no debe recortar accidentalmente */
        .categorias-container {
            overflow: visible;
            /* si algo se recorta, prueba visible */
            position: relative;
            z-index: 3;
        }
    </style>



</body>

</html>
