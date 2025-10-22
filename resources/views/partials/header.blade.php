<header class="header_section motorcycle_header sticky_header clearfix">
  <div class="header_content_wrap d-flex align-items-center " id="cintillo_carrito">
      <div class="container-fluid prl_90">
          <div class="row align-items-center">
              <div class="col-lg-2">
                  <div class="brand_logo">
                      <a class="brand_link" href="/">
                        <img src="{{ asset('images/logo/logomakena.png') }}" alt="logo makena">
                      </a>
                      <ul class="mh_action_btns ul_li clearfix">
                          <li>
                              <button type="button" class="cart_btn">
                                  <i class="fal fa-shopping-cart"></i>
                                  <span class="btn_badge">0</span>
                              </button>
                          </li>
                          <li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-8">
                  <nav class="main_menu clearfix">
                      <ul class="ul_li_center clearfix header_open9">
                            <li class="menu_item_has_child">
                                <a href="/">Home </a>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="#!">Fundas<i style="font-size: 8px" class="fas fa-chevron-down ml-2"></i></a>
                                <ul class="submenu">
                                    <li><a href="/catalogo">Catálogo</a></li>
                                    <li><a href="/tufunda">Crea tu funda</a></li>
                                    <li><a href="/catalogo-duo">Fundas duo</a></li>
                                </ul>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="#!">Cuadros<i style="font-size: 8px" class="fas fa-chevron-down ml-2"></i></a>
                                <ul class="submenu">
                                    <li><a href="shop_cart.html">Catálogo</a></li>
                                    <li><a href="shop_checkout.html">Crea tu cuadro</a></li>
                                    
                                </ul>
                            </li>
                          <li class="menu_item_has_child">
                                 <a href="/catalogo-duo">Preguntas Frecuentes</a>
                          </li>
                          
                      </ul>
                  </nav>
              </div>
              <div class="col-lg-2">
                  <ul class="action_items ul_li_right clearfix">
                    @if (!Route::is('Frecuentes') && !Route::is('carrito') && !Route::is('checkout') && !Route::is('aprobado') && !Route::is('rechazado') && !Route::is('datosTransferencia'))
                    <li>
                        <button type="button" class="cart_btn">CARRITO <small class="btn_badge">0</small></button>
                    </li>
                    @endif
                      <li>
                          <button type="button" class="mobile_menu_btn bg_carparts_red">
                              <i class="fas fa-th"></i>
                          </button>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>
