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
/* ====== SCOPE: SOLO afecta a esta página ====== */
.cart-scope { color:#fff; }

/* contenedor derecho tipo “card” */
.cart-scope .cart_summary{
  background:#1f1f1f;
  border:1px solid #2a2a2a;
  border-radius:14px;
  padding:38px;
  position: sticky;
  top: 24px;
  max-height: fit-content;
  
}
.cart-scope .summary_title{
  margin:0 0 12px 0;
  font-size:1.8rem;
  font-weight:800;
  letter-spacing:.02em;
}
.cart-scope .summary_list{
  list-style:none;
  margin:0 0 16px 0;
  padding:0;
}
.cart-scope .summary_list li{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:10px 0;
  border-bottom:1px solid #2a2a2a;
  font-size:1.5rem;
}
.cart-scope .summary_list li:last-child{ border-bottom:none; }
.cart-scope .summary_list .summary_total{
  font-size:1.7rem;
  font-weight:800;
}

/* tabla */
.cart-scope .cart_table thead tr{
  background:#ededed;
}
.cart-scope .cart_table thead th{
  color:#111;
  text-transform:uppercase;
  font-weight:800;
  letter-spacing:.03em;
  padding:14px 16px;
  border:none;
}
.cart-scope .cart_table tbody td{
  vertical-align:middle;
  border-top:1px solid #2a2a2a;
  padding:18px 16px;
}

/* item dentro de la celda */
.cart-scope .cart_product{
  display:flex;
  gap:14px;
  align-items:center;
  position:relative;
}
.cart-scope .cart_product .item_image{
  width:auto; min-width:auto; height:170px;
  border-radius:12px; overflow:hidden;
  box-shadow:0 3px 12px rgba(0,0,0,.35);
  border:1px solid #2a2a2a;
}
.cart-scope .cart_product .item_image img{
  width:auto; height:100%; object-fit:cover;
}
.cart-scope .cart_product .item_content .item_title{
  font-size:1.6rem; margin:0 0 6px 0; font-weight:700;
}
.cart-scope .cart_product .item_content .item_type{
  display:block; opacity:.8; font-size:1.3rem;
}

/* botón eliminar */
.cart-scope .cart_product .remove_btn{
  position:absolute; top:6px; right:6px;
  background:transparent; border:0; color:#bbb; cursor:pointer;
}
.cart-scope .cart_product .remove_btn:hover{ color:#fff; }

/* precio a la derecha */
.cart-scope .item_price{ display:inline-block; font-size:2.2rem; font-weight:700; }

/* responsive tweaks */
@media (max-width: 991.98px){
  .cart-scope .cart_product{ align-items:flex-start; }
  .cart-scope .cart_product .item_image{ width:90px; min-width:90px; height:140px; }
  .cart-scope .item_price{ font-size:1.9rem; }
}
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
