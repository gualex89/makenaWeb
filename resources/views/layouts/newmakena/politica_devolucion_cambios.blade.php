@extends('layouts.newmakena.app2')

@section('title', 'Preguntas Frecuentes - Makena Fundas')

@section('content')
<section class="tf-section pt-80 pb-80 background-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">

                <div class="text-center mb-5">
                    <h1 class="tf-color" style="font-weight: 800; font-size: 3rem;">Políticas de Devolución y Cambios</h1>
                    <div class="divider mt-3 mb-4" style="background: rgba(0,0,0,0.1);"></div>
                    
                </div>

                <div class="faq-content " style="color:#333; ">
                    <p class="mb-4 text-justify" style="font-size:1.9rem; line-height:1.7em;">En <b>MakenaStore</b> , cada <b>producto</b> (ya sea una funda o un cuadro metalizado) se elabora de forma <b>personalizada y bajo pedido</b>, por lo que <b>no realizamos devoluciones ni cambios</b> una vez confirmado el diseño, <b>excepto en casos de defectos de fabricación</b> que impidan su uso o colocación correcta.</p>

                    <h3 class="mb-3" style="color:#b321a6; font-weight:700;">No realizamos cambios ni devoluciones por:</h3>
                    
                    <div class="mt-3 frecuentes-listas">
                        
                        <ul class="mt-2" style="padding-left:30px; font-size:1.6rem; list-style-type:disc; line-height:1.8;">
                            <li style="margin-bottom:8px;"><b>Diferencias mínimas en el posicionamiento de la imagen</b>, ya que variaciones de milímetros son inevitables dentro del proceso de sublimación.</li>
                            <li style="margin-bottom:8px;"><b>Leves variaciones en los tonos de color</b>, que pueden depender de la iluminación de la foto o la calibración de la pantalla.</li>
                            <li style="margin-bottom:8px;"><b>Pequeños puntos o imperfecciones</b> propias del proceso de impresión, siempre que no afecten la estética general, la funcionalidad o la durabilidad del producto.</li>
                        </ul>
                    </div>
                    <h3 class="mb-3" style="color:#b321a6; font-weight:700;">Sí realizamos cambios o devoluciones si:</h3>

                    <div class="mt-3 frecuentes-listas">
                        
                        <ul class="mt-2" style="padding-left:30px; font-size:1.6rem; list-style-type:disc; line-height:1.8;">
                            <li style="margin-bottom:8px;">El producto <b>llega roto o presenta fallas</b> que impidan su uso o colocación normal.</li>
                            <li style="margin-bottom:8px;">El <b>modelo, diseño o medida recibido no coincide</b> con el pedido realizado.</li>
                            
                        </ul>
                    </div>

                    <p class="mb-4 mt-5 text-justify" style="font-size:1.9rem; line-height:1.7em;">En cualquiera de estos casos, el cliente deberá <b>notificarnos dentro de las 48 horas</b> posteriores a la recepción del pedido, enviando fotos del producto a través de nuestros canales oficiales (Instagram o WhatsApp). <br>
                    Una vez verificada la falla, coordinaremos el cambio o la reposición <b>sin costo adicional.</b>
                    </p>
                    
                    
                    <h3 class="mb-3" style="color:#b321a6; font-weight:700;">Nuestro compromiso</h3>
                    <p class="mb-4 mt-5 text-justify" style="font-size:1.9rem; line-height:1.7em;">En <b>MakenaStore</b> nos esforzamos para que cada producto llegue en perfectas condiciones y que el resultado final <b>refleje exactamente lo que imaginaste</b>. Si algo no sale como esperabas, estamos para ayudarte a resolverlo.</b>
                    </p>
                    
                    

                    
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

        
        
