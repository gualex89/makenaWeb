@extends('layouts.newmakena.app2')

@section('content')
    <section
        class="cart_section sec_ptb_140 clearfix cart_section vh-100 d-flex justify-content-center align-items-center mt-5">
        <div class="container text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="images/logos/fail.png" alt="icono fail" width="15%">
                <h2 class="mt-4">¡Oh No, Ocurrió un error en el pago!</h2>

                <h3></h3>
                <h3></h3>
                <h2 class="mt-5"> Ánimo volvé a intentarlo </h2>

                <div class="widget widget-menu style-1 mt-5">
                       
                    <ul>
                        <li><a href="/carrito">VOLVER AL CARRITO</a></li>
                    </ul>
                </div>

                <p class="mt-5"></p>
            </div>
        </div>
    </section>
@endsection