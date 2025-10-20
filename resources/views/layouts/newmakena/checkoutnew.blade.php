@extends('layouts.newmakena.app2')

@section('content')

    <section class="checkout-scope cart_section sec_ptb_20 clearfix">
  <section class="checkout_section sec_ptb_140 clearfix">
    <div class="container">

      <div class="accordion" id="accordionExample">

        {{-- 1) DATOS PERSONALES --}}
        <div class="card">
          <div class="card-header" id="headingOne">
            <h4 class="mb-0">
              <button id="primerAcordeon" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                Datos Personales
              </button>
            </h4>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="form_wrap">
                <div class="row g-3">
                  <div class="col-lg-4">
                    <div class="form_item">
                      <span class="input_title">Nombre<sup>*</sup></span>
                      <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form_item">
                      <span class="input_title">Apellido<sup>*</sup></span>
                      <input type="text" name="apellido" class="form-control" value="{{ old('apellido') }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form_item">
                      <span class="input_title">DNI<sup>*</sup></span>
                      <input type="text" name="dni" class="form-control" maxlength="8"
                             oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                             value="{{ old('dni') }}">
                    </div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-lg-6 form_item">
                    <span class="input_title">Email<sup>*</sup></span>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                  </div>
                  <div class="col-lg-6 form_item">
                    <span class="input_title">Telefono<sup>*</sup></span>
                    <input type="tel" name="telefono" class="form-control" id="telefonoInput" pattern="\d*" title="Ingrese solo números"
                           value="{{ old('telefono') }}">
                  </div>
                </div>

                <div class="mt-3">
                  <button id="continuarButton1" class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                          style="max-width:220px;">Continuar</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- 2) TIPO DE ENTREGA --}}
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h4 class="mb-0">
              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo" id="segundoAcordeon" disabled>
                Tipo de entrega
              </button>
            </h4>
          </div>

          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <div class="form_wrap">

                <div class="row g-3">
                  <div class="col-lg-6">
                    <label class="d-flex align-items-center gap-2 px-2">
                      <input type="radio" id="radioRetiro" name="tipoEntrega" value="retiro" class="form-check-input">
                      <span>Retiro</span>
                    </label>
                  </div>
                  <div class="col-lg-6">
                    <label class="d-flex align-items-center gap-2 px-2">
                      <input type="radio" id="radioEnvio" name="tipoEntrega" value="envio" class="form-check-input">
                      <span>Envío</span>
                    </label>
                  </div>
                </div>

                <div id="mensajeEntrega" class="mt-3 d-inline-block"></div>
                <small id="soloNumeros" class="pl-5 d-none">Solo Números</small>

                <div id="codigoPostalContainer" class="form_item mt-3" style="display: none;">
                  <span class="input_title">Código Postal<sup>*</sup></span>
                  <input id="numeroCP" type="text" name="codigoPostal" class="form-control">
                  <a href="https://www.correoargentino.com.ar/formularios/cpa" target="_blank">
                    <small>No sé mi Código Postal</small>
                  </a>
                  <div class="mt-2">
                    <button onclick="testZippin()" id="continuarTipoEntregaButton"
                            class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                            style="max-width:220px;">Buscar</button>
                  </div>
                </div>

              </div>

              <div class="mt-3">
                <button id="continuarButtonRetiro" class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                        style="max-width:220px;">Continuar</button>
              </div>

              <div id="radioFields" class="mt-3"></div>

              <div id="radioFieldsPuntoDeEntrega" class="mt-3">
                <div id="mensajePuntoDeEntrega"></div>
              </div>

              <div class="mt-3">
                <button id="continuarButtonRetiroSucursal"
                        class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                        style="max-width:220px; display:none">Continuar</button>
              </div>

              <div id="formAddress" class="card-body px-0" style="display: none">
                <div class="form_wrap">
                  <div class="row g-3">
                    <div class="col-lg-6">
                      <div class="form_item">
                        <label><b>PROVINCIA*</b></label>
                        <div class="divProvinciaDropdown">
                          <select name="provincia" id="provinciasDropdown" class="form-control" style="width: 100%">
                            <option value="">Seleccione</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form_item">
                        <label><b>LOCALIDAD*</b></label>
                        <input type="text" name="localidad" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form_item">
                        <label><b>CALLE*</b></label>
                        <input type="text" name="calle" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form_item">
                        <label><b>ALTURA*</b></label>
                        <input type="text" name="altura" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form_item">
                        <label><b>OBSERVACIONES PARA LA ENTREGA</b></label>
                        <input type="text" name="comentarios" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button id="continuarButton2" class="custom_btn bg_carparts_red text-uppercase special_button w-100 d-block"
                          style="max-width:220px;">Continuar</button>
                </div>
              </div>

            </div>
          </div>
        </div>

        {{-- 3) PAGAR --}}
        <div class="card">
          <div class="card-header" id="headingThree">
            <h4 class="mb-0">
              <button class="collapsed" type="button" aria-expanded="false" aria-controls="collapseThree"
                      id="tercerAcordeon" disabled>
                Pagar
              </button>
            </h4>
          </div>

          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <section class="cart_section sec_ptb_10 clearfix">
              <div class="container">
                <div class="row g-4 align-items-start">

                  <div class="col-lg-8">
                    <div class="cart_table">
                      <table class="table mb-0">
                        <thead class="text-uppercase">
                          <tr>
                            <th>Producto</th>
                            <th class="text-end">Precio</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-12">
                    <div class="cart_summary">
                      <h3 class="summary_title">Total</h3>
                      <ul class="summary_list">
                        <li><span>Subtotal</span> <span id="subtotalValor">$0</span></li>
                        <li><span>Envío</span> <span id="envioValor">$0</span></li>
                        <li id="descuentoSpan" style="display:none;"><span>Descuento</span> <span id="descuentoValor">$0</span></li>
                        <li class="summary_total"><span>Total</span> <span id="totalValor">$0</span></li>
                      </ul>

                      <div id="mercadopago_container">
                        <div id="wallet_container"></div>
                      </div>

                      <ul class="ul_li_block clearfix mt-3">
                        <div>
                          <input type="text" id="discount-code" placeholder="Código de Descuento" class="form-control">
                        </div>
                      </ul>

                      <button id="apply-discount" class="custom_btn bg_success w-100">Aplicar Descuento</button>
                    </div>
                  </div>

                </div>
              </div>
            </section>
          </div>
        </div>

      </div>

    </div>
  </section>
</section>


@endsection