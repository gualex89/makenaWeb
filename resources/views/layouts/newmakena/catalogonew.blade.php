<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Open9 | NFT Marketplace HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets_new/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets_new/icon/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

        .categorias-menu > li {
            border-bottom: 1px solid #2c2c2c;
        }

        .categorias-menu > li:last-child {
            border-bottom: none;
        }

        .categorias-menu > li > a {
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

        .categorias-menu > li > a:hover {
            background: #2b2b2b;
            color: #b321a6;
        }

        .categorias-menu > li.parent > a::after {
            content: "\f105";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            transition: transform 0.3s ease;
            margin-left: 5px
        }

        .categorias-menu > li.open > a {
            background: #292929;
            color: #b321a6;
        }

        .categorias-menu > li.open > a::after {
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

        .categorias-menu li.open > ul {
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
            
            <!-- Banner_section - start
            ================================================== -->

           

            <!-- Banner_section - end
            ================================================== -->
            
            <div class="row">
                <div class="section-menu-left mt-5 col-lg-2 col-md-12 ml-5 card-categories">
                    <div class="over-content">
                        <div class="content">
                            <h6 style="font-size:20px; font-weight:700; margin-bottom:18px; color:#b321a6; letter-spacing:1px;">
                                Categorías
                            </h6>
                            <div class="categorias-container">
                                <ul class="menu-tab categorias-menu">
                                    <li style="padding: 0px 24px;">
                                        <a href="/catalogo" data-category="all">Todas</a>
                                    </li>
                                    <li class="parent" style=" padding: 0px 24px;">
                                        <a href="#">Anime</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=AT">Attack on Titan</a></li>
                                            <li><a href="/catalogo?categoria=BK">Berserk</a></li>
                                            <li><a href="/catalogo?categoria=BH">Boku no Hero Academia</a></li>
                                            <li><a href="/catalogo?categoria=CZ">Caballeros del Zodiaco</a></li>
                                            <li><a href="/catalogo?categoria=DAN">DanDaDan</a></li>
                                            <li><a href="/catalogo?categoria=DN">Death Note</a></li>
                                            <li><a href="/catalogo?categoria=DS">Demon Slayer</a></li>
                                            <li><a href="/catalogo?categoria=DB">Dragon Ball</a></li>
                                            <li><a href="/catalogo?categoria=CH">El viaje de Chihiro</a></li>
                                            <li><a href="/catalogo?categoria=EV">Evangelion</a></li>
                                            <li><a href="/catalogo?categoria=FN">Frieren</a></li>
                                            <li><a href="/catalogo?categoria=HK">Haikyuu!</a></li>
                                            <li><a href="/catalogo?categoria=HH">Hunter X Hunter</a></li>
                                            <li><a href="/catalogo?categoria=JJ">Jojo's</a></li>
                                            <li><a href="/catalogo?categoria=JK">Jujutsu Kaisen</a></li>
                                            <li><a href="/catalogo?categoria=NA">Naruto</a></li>
                                            <li><a href="/catalogo?categoria=OP">One Piece</a></li>
                                            <li><a href="/catalogo?categoria=PK">Pokemon</a></li>
                                            <li><a href="/catalogo?categoria=SM">Sailor Moon</a></li>
                                            <li><a href="/catalogo?categoria=SD">Slam Dunk</a></li>
                                            <li><a href="/catalogo?categoria=SLV">Solo Leveling</a></li>
                                            <li><a href="/catalogo?categoria=AMS">Más...</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent" style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="#">Automovilismo</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=CLP">Colapinto</a></li>
                                            <li><a href="/catalogo?categoria=F1">F1</a></li>
                                        </ul>
                                    </li>
                                    <li style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="/catalogo?categoria=BS">Básquet</a>
                                    </li>
                                    <li class="parent" style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="#">Gaming</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=ARC">Arcane</a></li>
                                            <li><a href="/catalogo?categoria=AC">Assassin’s Creed</a></li>
                                            <li><a href="/catalogo?categoria=FRN">Fortnite</a></li>
                                            <li><a href="/catalogo?categoria=GW">God of War</a></li>
                                            <li><a href="/catalogo?categoria=HKN">Hollow Knight</a></li>
                                            <li><a href="/catalogo?categoria=LOL">LOL</a></li>
                                            <li><a href="/catalogo?categoria=RE">Resident Evil</a></li>
                                            <li><a href="/catalogo?categoria=TLU">The Last of Us</a></li>
                                            <li><a href="/catalogo?categoria=TW">The Witcher</a></li>
                                            <li><a href="/catalogo?categoria=VL">Valorant</a></li>
                                            <li><a href="/catalogo?categoria=OTR">Más...</a></li>
                                        </ul>
                                    </li>
                                    <li style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="/catalogo?categoria=DI">Diseños</a>
                                    </li>
                                    <li class="parent" style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="#">Fútbol</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=FB">Boca</a></li>
                                            <li><a href="/catalogo?categoria=FTI">Clubes Internacionales</a></li>
                                            <li><a href="/catalogo?categoria=FI">Independiente</a></li>
                                            <li><a href="/catalogo?categoria=FME">Messi</a></li>
                                            <li><a href="/catalogo?categoria=FMO">Momentos del Fútbol</a></li>
                                            <li><a href="/catalogo?categoria=FON">Más clubes nacionales</a></li>
                                            <li><a href="/catalogo?categoria=FRA">Racing</a></li>
                                            <li><a href="/catalogo?categoria=FRI">River</a></li>
                                            <li><a href="/catalogo?categoria=FSL">San Lorenzo</a></li>
                                            <li><a href="/catalogo?categoria=FSA">Selección Argentina</a></li>
                                        </ul>
                                    </li>
                                    <li style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="/catalogo?categoria=ME">Momentos Épicos</a>
                                    </li>
                                    <li style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="/catalogo?categoria=RT">Retro</a>
                                    </li>
                                    <li class="parent" style="border-bottom:1px solid #333; padding: 0px 24px;">
                                        <a href="#">Música</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=MM">Más</a></li>
                                            <li><a href="/catalogo?categoria=MP">Pop</a></li>
                                            <li><a href="/catalogo?categoria=MRI">Rock Internacional</a></li>
                                            <li><a href="/catalogo?categoria=MRN">Rock Nacional</a></li>
                                            <li><a href="/catalogo?categoria=MUR">Urbano</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent" style="border-bottom:1px solid #333; padding:1px 24px;">
                                        <a href="#">Películas</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=DY">Disney</a></li>
                                            <li><a href="/catalogo?categoria=HP">Harry Potter</a></li>
                                            <li><a href="/catalogo?categoria=LR">Lord of the Rings</a></li>
                                            <li><a href="/catalogo?categoria=MV">Marvel</a></li>
                                            <li><a href="/catalogo?categoria=SW">Star Wars</a></li>
                                            <li><a href="/catalogo?categoria=VF">Volver al Futuro</a></li>
                                            <li><a href="/catalogo?categoria=PMS">Más...</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent" style="padding: 0px 24px;">
                                        <a href="#">TV y Series</a>
                                        <ul>
                                            <li><a href="/catalogo?categoria=ARC">Arcane</a></li>
                                            <li><a href="/catalogo?categoria=AV">Avatar</a></li>
                                            <li><a href="/catalogo?categoria=FRD">Friends</a></li>
                                            <li><a href="/catalogo?categoria=GT">Game of Thrones</a></li>
                                            <li><a href="/catalogo?categoria=HA">Hora de Aventura</a></li>
                                            <li><a href="/catalogo?categoria=HD">House of the Dragon</a></li>
                                            <li><a href="/catalogo?categoria=LS">Los Simpsons</a></li>
                                            <li><a href="/catalogo?categoria=PB">Peaky Blinders</a></li>
                                            <li><a href="/catalogo?categoria=RM">Rick y Morty</a></li>
                                            <li><a href="/catalogo?categoria=ST">Stranger Things</a></li>
                                            <li><a href="/catalogo?categoria=TU">The Last of Us</a></li>
                                            <li><a href="/catalogo?categoria=TWD">The Walking Dead</a></li>
                                            <li><a href="/catalogo?categoria=OS">Más...</a></li>
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
                            
                            @foreach ($home_categories_fundas as $home_categories_funda)
                            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="tf-card-box style-1">
                                    <div class="card-media">
                                        <a href="{{ $home_categories_funda->href }}">
                                            <img src="{{ Voyager::image($home_categories_funda->image) }}" alt="{{ $home_categories_funda->name }}">
                                        </a>
                                        <div class="button-place-bid">
                                            <a href="{{ $home_categories_funda->href }}"  class="tf-button"><span>Ir a {{$home_categories_funda->name}}</span></a>
                                        </div>
                                    </div>
                                    <h5 class="name"><a href="nft-detail-2.html">{{ $home_categories_funda->name }}</a></h5>
                                    
                                    <div class="divider"></div>
                                    <div class="meta-info flex items-center justify-between">
                                        <span class="text-bid">Current Bid</span>
                                        <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            

            

            

            


            

            
            
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

            function updatePrices() {
                const subtotalElement = document.querySelector('.total_price li:nth-child(1) span:nth-child(2)');
                const totalElement = document.querySelector('.total_price li:nth-child(2) span:nth-child(2)');

                subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                totalElement.textContent = `$${total.toFixed(2)}`;
            }

            function addToCart(productItem) {
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
            }

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

            document.querySelectorAll('.product_action_btns a').forEach(btn => {
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




</body>
</html>