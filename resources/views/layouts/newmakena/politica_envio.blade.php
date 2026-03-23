@extends('layouts.newmakena.app2')

@section('title', 'Preguntas Frecuentes - Makena Fundas')

@section('content')
    <section class="tf-section pt-80 pb-80 background-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">

                    <div class="text-center mb-5">
                        <h1 class="tf-color" style="font-weight: 800; font-size: 3rem;">Políticas de Envío</h1>
                        <div class="divider mt-3 mb-4" style="background: rgba(0,0,0,0.1);"></div>

                    </div>

                    <div class="faq-content " style="color:#333; ">
                        <p class="mb-4 text-justify" style="font-size:1.9rem; line-height:1.7em;">En <b>MakenaStore</b> ,
                            realizamos todos nuestros envíos a través de <b>Correo Argentino</b>, con entrega a domicilio o
                            retiro en sucursal, según la opción elegida al momento de la compra o <b>Motomensajeria</b>
                            (disponible para Caba y Gba)</p>



                        @foreach ([
            [
                'Procesamiento y despacho',
                'Todos los pedidos se procesan una vez confirmado el pago y se despachan dentro de los <b>2 a 5 días hábiles</b> posteriores, dependiendo del volumen de pedidos en curso.
                                Una vez enviado, en el caso de envios de <b>correo argentino</b>, recibirás un mail con tu <b>número de seguimiento</b> para que puedas verificar el estado de tu envío en el sitio oficial: <a href="https://www.correoargentino.com.ar/formularios/e-commerce" class="tf-color"><b>https://www.correoargentino.com.ar/formularios/e-commerce</b></a>. <br><br>
                                En caso de envio por Motomensajeria recibiras un mail avisando que tu pedido fue despachado y llegará en las proximas 24 a 48hs hábiles.
                                ',
            ],
            [
                'Envíos a domicilio Correo Argentino',
                'Cuando el cartero tenga el paquete en mano, el pedido estará próximo a ser entregado. En caso de no encontrarse nadie en el domicilio, el paquete será derivado a la <b>sucursal más cercana de Correo Argentino</b>, donde permanecerá disponible por <b>3 días hábiles</b>.
                                Si el paquete no es retirado en ese plazo y regresa a nuestro taller, se deberá <b>abonar un nuevo envío</b> para reenviarlo.
                                ',
            ],
            [
                'Envíos a sucursal Correo Argentino',
                'Si elegiste retirar tu pedido en una sucursal, tendrás <b>5 días hábiles</b> para hacerlo una vez que el envío esté disponible. Pasado ese tiempo, el paquete regresa a la direccion de remitente y será necesario <b>abonar un nuevo envío</b> para reenviarlo.
                                ',
            ],
            [
                'Devoluciones por dirección incorrecta o falta de retiro',
                'MakenaStore  no se responsabiliza por demoras o devoluciones ocasionadas por <b>datos incompletos o erróneos</b> en la dirección ingresada.
                                En esos casos, el cliente deberá <b>abonar nuevamente el costo del envío</b> para su reexpedición.
                                ',
            ],
            [
                'Demoras en el envio por falta de stock',
                'En casos excepcionales, si algún <b>insumo o modelo de producto no se encuentra disponible al momento de la compra</b>, el tiempo de preparación puede extenderse algunos días adicionales.<br>
                                En ese caso, el equipo de <b>MakenaStore</b> se comunicará con vos para informarte la demora y brindarte la opción de <b>esperar la reposición o realizar un cambio por otro modelo disponible</b>.
        ',
            ],
        ] as [$question, $answer])
                            <div class="faq-item mb-5">
                                <h3 class="mb-3" style="color:#b321a6; font-weight:700;">{{ $question }}</h3>
                                <p style="font-size:1.9rem; line-height:1.7em; text-align: justify;">{!! $answer !!}
                                </p>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </section>
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
@endsection
@push('scripts')
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
@endpush
