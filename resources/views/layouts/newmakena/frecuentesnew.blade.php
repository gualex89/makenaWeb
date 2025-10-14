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
@endsection
