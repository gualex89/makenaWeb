@extends('layouts.newmakena.app2')

@section('content')
    <div id="create" class="tabcontent active p-5 m-5">
                        <div class="wrapper-content-create">
                            <div class="heading-section">
                                <h2 class="tf-title pb-30">Crea tu Cuadro</h2>
                            </div>
                            <div class="widget-tabs relative">
                                
                                <div class="widget-content-tab">
                                    <div class="widget-content-inner upload active">
                                        <div class="wrap-upload w-full">
                                            <form action="#">
                                                <label class="uploadfile">
                                                    <img src="assets/images/box-icon/upload.png" alt="">
                                                    <h5>Subí tu imagen</h5>
                                                    <p class="text">Cargá la imagen para tu cuadro aqui</p>
                                                    <div class="text filename">PNG ó JPG</div>
                                                    <input type="file" class="" name="file">
                                                </label>
                                            </form>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div>
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
                        const cartItemHTML = `
                            <li style="background:transparent; margin-bottom:32px; padding:0; display:flex; align-items:center;">
                                <div style="background:#fff; border-radius:18px; padding:12px; display:flex; align-items:center; width:70px; min-width:30px; justify-content:center;">
                                    <img src="${cartItem.image}" alt="Funda ${cartItem.name}" style="width:100%; border-radius:4px; display:block;"/>
                                </div>
                                <div class="item_content" style="color:#fff; margin-left:18px; position:relative; flex:1;">
                                    <div style="padding-right:32px;">
                                        <span class="item_type" style="font-size:13px;">${cartItem.marca2 ? 'Funda Doble' : 'Funda'}</span>
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