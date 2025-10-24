@extends('layouts.newmakena.app2')

@section('content')
    <section style="min-height: 60vh" class="cart-scope cart_section sec_ptb_140 clearfix">
        <div class="container mt-20">
            <div class="row g-4  mt-20">

            {{-- IZQUIERDA: tabla de productos --}}
                <div class="col-lg-8">
                    <div class="cart_table">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th class="text-end">Precio</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{-- items del carrito (llenados por JS) --}}
                        </tbody>
                    </table>
                    </div>
                </div>

                {{-- DERECHA: resumen / total --}}
                <div class="col-lg-4 d-flex justify-content-lg-end">
                    <div class="cart_summary">
                        <h3 class="summary_title">Total</h3>
                        <ul class="summary_list">
                        <li><span>Subtotal</span><span>$0</span></li>
                        <li class="summary_total"><span>Total</span><span>$0</span></li>
                        </ul>
                        <a href="/checkout" class="tf-button style-1 h50 w216">Realizar Pago</a>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection

@push('head')
<style>

</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function() {
  // === Carrito desde localStorage ===
  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  function updateCartCounter(){
    $('.btn_badge').text(cartItems.length);
  }

  function updatePrices(subtotal, total){
    const $rows = $('.cart_summary .summary_list li span:nth-child(2)');
    if($rows.length >= 2){
      $rows.eq(0).text(`$${subtotal.toFixed(2)}`);
      $rows.eq(1).text(`$${total.toFixed(2)}`);
    }
  }

  function renderItems(){
    const $tbody = $('.cart_section table tbody');
    $tbody.empty();
    let subtotal = 0;

    cartItems.forEach((item, idx)=>{
      subtotal += Number(item.price) || 0;

      const html = `
        <tr>
          <td>
            <div class="cart_product">
              <div class="item_image"><img src="${item.image}" alt="${item.name}"></div>
              <div class="item_content">
                <h4 class="item_title">${item.name || ''}</h4>
                <span class="item_type">${item.marca || item.tamaño || ''} ${item.modelo || item.colgante || ''}</span>
                ${item.marca2 ? `<span class="item_type">${item.marca2} ${item.modelo2 || ''}</span>` : ``}
              </div>
              <button type="button" class="remove_btn" data-index="${idx}" title="Eliminar"><i class="fas fa-times"></i></button>
            </div>
          </td>
          <td class="text-end"><span class="item_price">$${(Number(item.price)||0).toFixed(2)}</span></td>
        </tr>`;
      $tbody.append(html);
    });

    updatePrices(subtotal, subtotal);
    $('.remove_btn').on('click', function(){
      const i = Number(this.dataset.index);
      cartItems.splice(i,1);
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      updateCartCounter();
      renderItems();
    });
  }

  renderItems();
  updateCartCounter();
});
</script>
@endpush
