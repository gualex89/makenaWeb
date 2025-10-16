@extends('layouts.newmakena.app2')

@section('title', 'Preguntas Frecuentes - Makena Fundas')

@section('content')
<section class="tf-section pt-80 pb-80 background-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">

                <div class="text-center mb-5">
                    <h1 class="tf-color" style="font-weight: 800; font-size: 3rem;">Preguntas Frecuentes</h1>
                    <div class="divider mt-3 mb-4" style="background: rgba(0,0,0,0.1);"></div>
                    <p class="text-muted ">Todo lo que necesitás saber antes de crear tu funda personalizada</p>
                </div>

                <div class="faq-content" style="color:#333; ">
                    @foreach([
                        ['¿Cómo puedo crear mi funda personalizada?', 'En la opción <b>“Crea tu funda”</b> o entrando al siguiente <a href="https://makenafundas.com.ar/tufunda" class="tf-color"><b>link</b></a> podés crear la funda con la imagen que quieras.'],
                        ['¿Qué resolución debe tener la imagen para personalizar?', 'Recomendamos que uses una resolución de <b>600px</b> por <b>1200px</b>, aunque cualquier imagen en buena calidad funciona bien.'],
                        ['¿Y si no puedo crear la funda como quería?', 'Podés escribirnos a nuestro <a href="https://Wa.me/541122444188" class="tf-color"><b>WhatsApp</b></a> para cotizar el rediseño de tu imagen junto a nuestro diseñador.'],
                        ['¿Para qué modelos de celular tienen fundas?', 'Trabajamos la mayoría de las marcas: <b>Samsung</b>, <b>Motorola</b>, <b>Apple</b>, <b>Xiaomi</b> y algunos modelos de <b>LG</b>.'],
                        ['¿Hacen envíos?', '¡Obvio! Enviamos a todo el país. Si estás en <b>CABA</b> o <b>Conurbano</b>, tu pedido llega por moto entre 24 y 72 hs; al interior o provincias, por correo entre 2 y 7 días.'],
                        ['¿Puedo retirar la funda?', 'Sí, podés retirar en nuestro taller de <b>Lanús Oeste</b>.'],
                        ['¿Hacen punto de encuentro?', 'No, únicamente retiros o envíos a domicilio.'],
                        ['¿De qué material están hechas las fundas?', 'De <b>TPU flexible</b> con bordes resistentes y una placa de aluminio sublimada brillante.'],
                        ['¿Cuál es el tiempo de producción?', 'Entre 24 y 72 hs hábiles luego del pago y diseño aprobado.'],
                        ['¿Puedo hacer seguimiento de mi pedido?', 'Sí. Te enviamos un mail con número de seguimiento cuando despachamos tu pedido.'],
                        ['¿Las fundas tienen garantía?', 'Sí, 60 días por fallas de fabricación. No cubre mal uso o confusión del modelo.'],
                    ] as [$question, $answer])
                        <div class="faq-item mb-5">
                            <h3 class="mb-3" style="color:#b321a6; font-weight:700;">{{ $question }}</h3>
                            <p style="font-size:1.9rem; line-height:1.7em;">{!! $answer !!}</p>
                        </div>
                    @endforeach

                    <div class="faq-item mt-5">
                        <h2 style="color:#b321a6; font-weight:700;">Políticas de Devolución y Cambios</h2>
                        <p class="mt-3">
                            En Makena Fundas cada producto es personalizado, por lo tanto <b>no realizamos devoluciones</b> salvo defectos de fabricación.
                        </p>

                        <div class="mt-3 frecuentes-listas">
                            <strong>No realizamos cambios ni devoluciones por:</strong>
                            <ul class="mt-2" style="padding-left:20px; font-size: 1.5rem" >
                                <li>Diferencias mínimas en el posicionamiento de la imagen.</li>
                                <li>Variaciones leves en los tonos de color.</li>
                                <li>Pequeñas imperfecciones que no afecten el uso o protección del producto.</li>
                            </ul>
                        </div>

                        <div class="mt-4 frecuentes-listas">
                            <strong>Sí aceptamos devoluciones o cambios si:</strong>
                            <ul class="mt-2" style="padding-left:20px;">
                                <li>El producto llega roto o con fallas que impidan su uso.</li>
                                <li>El modelo recibido no coincide con el pedido realizado.</li>
                            </ul>
                        </div>

                        <p class="mt-3">
                            En esos casos, el cliente deberá notificarnos dentro de las 48 horas de recibido el producto enviando fotos del mismo para gestionar la solución.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
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

                document.querySelector('.open-cart-sidebar').addEventListener('click', openCartSidebar);
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

        
        
