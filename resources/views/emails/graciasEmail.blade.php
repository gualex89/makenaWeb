<!DOCTYPE html>
<html>

<head>
    <title>Gracias por tu Compra</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 30px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #b321a6;
            color: white;
        }
    </style>
</head>

<body>

    <img src="{{ $message->embed($pathToImage) }}" alt="Logo de Makena">
    <h1>¡Tu compra se procesó de forma correcta!</h1>
    <h2>Tu número de orden es: {{ $orden }}</h2>
    <h3>ID de pago: {{ $payment_id }}</h3>

    @if (isset($downloads) && count($downloads) > 0)
        <h2>Detalle de tu compra:</h2>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Diseño</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($downloads as $item)
                    <tr>
                        <td>Funda</td>
                        <td>{{ $item['marca'] ?? '-' }}</td>
                        <td>{{ $item['modelo'] ?? '-' }}</td>
                        <td>{{ $item['diseno'] ?? '-' }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h3>Si seleccionaste <span style="font-weight: bold; color: #b321a6">RETIRO</span> o envio por <span
            style="font-weight: bold; color: #b321a6">MOTOMENSAJERÍA</span> <br>
        -Recibirás un mail cuando tu pedido esté listo para retirar o ser enviado.
    </h3>

    <h3>
        Si tu envio es por <span style="font-weight: bold; color: #b321a6">CORREO</span> <br>
        -Recibirás un mail de correo argentino con el numero de seguimiento cuando el paquete sea despachado.
    </h3>

    <h3 style="color: red">IMPORTANTE REVISAR CASILLA DE SPAM</h3>

    <h2>Si tenés alguna duda, comunicate con nosotros a nuestro <a href="http://wa.me/541122444188">Whatsapp</a></h2>

    <h3>Este es un correo automático, por favor no responda.</h3>

</body>

</html>
