@extends('layouts.newmakena.app2')

@section('content')
<div id="create" class="tabcontent active px-5 mx-5 mt-5">
    <div class="wrapper-content-create">
        <div class="heading-section">
            <h2 class="tf-title">Crea tu Cuadro</h2>
            <p>
                Nuestros cuadros están fabricados en <strong class="resaltado-color">aluminio</strong> con un grosor de <strong class="resaltado-color">1 mm</strong>,
                con acabado <strong class="resaltado-color">brillante</strong> tipo espejo e <strong class="resaltado-color">impresión 4K</strong>
                para lograr colores intensos y máxima definición.
            </p>
        </div>

        <div class="widget-tabs relative mt-30">
            <div class="widget-content-tab">
                <div class="widget-content-inner upload active">
                    <div class="wrap-upload w-full">
                        <form id="uploadForm">
                            <label class="uploadfile" id="uploadLabel" style="cursor:pointer; display:flex; align-items:center; justify-content:center; gap:30px; flex-wrap:wrap;">
                    
                                <!-- Contenido de texto -->
                                <div id="uploadText" style="text-align:center; flex:1; min-width:250px;">
                                    <h4 style="font-weight:700;">Cada imagen tiene una historia. Creá la tuya</h4>
                                    <p class="text mt-2">Cargá la imagen para tu cuadro aquí</p>
                                    <div class="text filename">PNG ó JPG</div>
                                    <button type="button" onclick="document.getElementById('fileInput').click()" 
                                    style="margin-top:15px; background:#b321a6; color:#fff; border:none; padding:10px 20px; border-radius:10px; font-weight:600;">
                                    Subí tu Imagen ⤴
                                    </button>
                                    <input type="file" name="file" id="fileInput" accept="image/png, image/jpeg " style="display:none;">
                                </div>

                                <!-- Vista previa a la derecha -->
                                <div id="previewContainer" style="display:none; flex:1; text-align:center;">
                                    <img id="preview" src="" alt="Vista previa" style="width:auto; height:150px; border-radius:8px; object-fit:cover; box-shadow:0 0 8px rgba(0,0,0,0.2);">
                                </div>

                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- OPCIONES -->
        <div class="opciones-container mt-5">

            <!-- Grupo Tamaño -->
            <div class="grupo text-align-center">
                <h4>Elegí el tamaño</h4>
                <div class="botones mt-3 d-flex flex-wrap" style="gap: 4rem;">
                    <button type="button" class="btn-opcion" data-group="tamaño" data-value="Basic">Basic<br><p style="font-size: 1.6rem; color: white">20 x 30 cm</p></button>
                    <button type="button" class="btn-opcion" data-group="tamaño" data-value="Standard">Standard<br><p style="font-size: 1.6rem; color: white"">30 x 40 cm</p></button>
                    <button type="button" class="btn-opcion" data-group="tamaño" data-value="Epic">Epic<br><p style="font-size: 1.6rem; color: white">40 x 60 cm</p></button>
                </div>
            </div>

            <!-- Grupo Colgante -->
            <div class="grupo">
                <h4>Elegí el colgante</h4>
                <div class="botones mt-3 d-flex flex-wrap" style="gap: 4rem;">
                    <div class="row-mb-3 ">
                        <button type="button" class="btn-opcion col-12" data-group="colgante" data-value="Hook" style="max-width: 150px; font-size: 2rem;">Hook</button>
                        <p style="font-size: 1.4rem">Colgante clásico con tornillo</p>
                    </div>
                    
                    <div class="row-mb-3">
                        <button type="button" class="btn-opcion col-12" data-group="colgante" data-value="Iman" style="max-width: 150px; font-size: 2rem;">Imán</button>
                        <p style="font-size: 1.4rem">Colgante con imán autoadhesivo</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center my-4">
        <button id="btnAgregarCarrito" class="tf-button style-1 h50 w216"><i class="fas fa-shopping-cart"></i>Agregar al Carrito</button>
    </div>

    <div class="mb-5">
        <h5 class="mb-3">Antes de subir tu imagen</h5>
        <p>
            Para que tu cuadro se vea increíble,  <strong style="color: #dfdfdf">la calidad de la imagen es clave</strong>. Recomendamos subir archivos en  <strong class="resaltado-color">Full HD (1920x1080 px o más)</strong>. Si la imagen tiene baja resolución, contamos con mejoradores automáticos de calidad,  <strong class="resaltado-color">aunque no todas las fotos pueden optimizarse</strong>.
            <br><br>
             <strong style="color: #d8d3cc">IMPORTANTE:</strong> La orientación del cuadro  <strong class="resaltado-color">(horizontal o vertical)</strong> se ajustará según la forma de la imagen que nos envíes.

            
        </p>

    </div>

</div>

<!-- JavaScript -->
<script>
    // Vista previa de la imagen
    document.getElementById('fileInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(event) {
        const preview = document.getElementById('preview');
        const previewContainer = document.getElementById('previewContainer');

        preview.src = event.target.result;
        previewContainer.style.display = 'flex';
        previewContainer.style.justifyContent = 'center';
        previewContainer.style.alignItems = 'center';
        previewContainer.style.textAlign = 'center';

        // Ajustes opcionales para una presentación más balanceada
        preview.style.margin = '0 auto';
        preview.style.display = 'block';
    };

    reader.readAsDataURL(file);
    });


  // Selección única por grupo
    document.querySelectorAll('.btn-opcion').forEach(btn => {
        btn.addEventListener('click', () => {
        const group = btn.dataset.group;
        document.querySelectorAll(`.btn-opcion[data-group="${group}"]`)
            .forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        });
     });
</script>

<!-- Estilos -->

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
    fileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('preview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
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
            badgeElements.forEach(element => {
                element.textContent = cartItemCount;
            });
        }

        document.getElementById('btnAgregarCarrito').addEventListener('click', async () => {
            const fileInput = document.getElementById('fileInput');
            const tamaño = document.querySelector('.btn-opcion.active[data-group="tamaño"]')?.dataset.value;
            const colgante = document.querySelector('.btn-opcion.active[data-group="colgante"]')?.dataset.value;
            const file = fileInput.files[0];

            if (!file) return Swal.fire({ icon: 'warning', title: 'Por favor, subí una imagen', confirmButtonText: 'Entendido',confirmButtonColor: '#b321a6' });
            if (!tamaño) return Swal.fire({ icon: 'warning', title: 'Seleccioná un tamaño',confirmButtonText: 'Entendido',    confirmButtonColor: '#b321a6' });
            if (!colgante) return Swal.fire({ icon: 'warning', title: 'Seleccioná un colgante', confirmButtonText: 'Entendido', confirmButtonColor: '#b321a6' });

            try {

                Swal.fire({
                title: 'Subiendo tu imagen...',
                text: 'Por favor, espera un momento ⏳',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
                });

                const formData = new FormData();
                formData.append('file', file);

                const response = await fetch('/upload-drive', {
                method: 'POST',
                body: formData
                });

                const result = await response.json();
                if (!result?.file?.id) {
                alert('Error al subir la imagen. Intenta nuevamente.');
                return;
                }

                console.log(result.file.id);

                const idDrive = result.file.id;
                const imageUrl = result.file.thumbnail;;



                let price = 0;
                if (tamaño === 'Basic') price = 25000;
                else if (tamaño === 'Standard') price = 35000;
                else if (tamaño === 'Epic') price = 45000;

                const pendingCartItem = {
                name: 'Cuadro personalizado',
                price: price,
                image: imageUrl,
                idDrive: idDrive,
                tamaño: tamaño,
                colgante: colgante
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
                limpiarCuadro();

            } catch (error) {
                console.error('Error al subir:', error);
                Swal.close();
                Swal.fire({ icon: 'error', title: 'No se pudo agregar el producto', text: 'Intenta nuevamente.' });
            }
        });


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
                    <div style="font-size:15px; margin-bottom:2px;">${cartItem.marca || cartItem.tamaño} ${cartItem.modelo || cartItem.colgante}</div>
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

        function limpiarCuadro() {
            fileInput.value = ""; // limpia el input file

            // Oculta la vista previa
            const previewContainer = document.getElementById('previewContainer');
            const preview = document.getElementById('preview');
            preview.src = "";
            previewContainer.style.display = 'none';

            // Quita las selecciones activas
            document.querySelectorAll('.btn-opcion.active').forEach(btn => {
            btn.classList.remove('active');
            });
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