<!DOCTYPE html>
<html>
    

<head>
    <title>Ey tienes una nueva venta</title>
</head>
<body>

    <img src="{{ asset('images/logo/logo_black.png') }}" alt="Logo de Makena">
    <h1>¡Ey tienes una nueva venta!</h1>
    

    <h3>tipo de entrega: {{ $BDdatos->tipo_entrega }}</h3>

    <h2>Datos de Cliente</h2>

    <table border="1">
        <tr>
            <th>Orden número</th>
            <td>{{ $BDdatos->id_order }}</td>
        </tr>
        <tr>
            <th>ID de pago</th>
            <td>{{ $payment_id }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $BDdatos->status }}</td>
        </tr>
        <tr>
            <th>Nombre Cliente</th>
            <td>{{ $BDdatos->nombre }} {{$BDdatos->apellido}}</td>
        </tr>
        <tr>
            <th>Documento</th>
            <td>{{ $BDdatos->documento }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $BDdatos->email }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $BDdatos->telefono }}</td>
        </tr>
        <tr>
            
        <!-- Agrega más filas según sea necesario -->
    </table>

    <h2>Datos de la venta</h2>
    <table border="1">
        <tr>
            <th>Cantidad de items</th>
            <td>{{ $BDdatos->cantidad_items }}</td>
        </tr>
        <tr>
            <th>Items</th>
            <td>{{ $BDdatos->items_cart }}</td>
        </tr>
        <tr>
            <th>Sub total</th>
            <td>{{ $BDdatos->subtotal }}</td>
        </tr>
        <tr>
            <th>Valor del envio</th>
            <td>{{ $BDdatos->valor_envio }}</td>
        </tr>
        <tr>
            <th>Total</th>
            <td>{{ $BDdatos->total }}</td>
        </tr>
        <tr>
            <th>Preference id</th>
            <td>{{ $BDdatos->preference_id }}</td>
        </tr>
    </table>

    <h2>Datos de Envio</h2>
    
    <table border="1">
        <tr>
            <th>Tipo de Entrega</th>
            <td>{{ $BDdatos->tipo_entrega }}</td>
        </tr>
        <tr>
            <th>CP</th>
            <td>{{ $BDdatos->codigo_postal }}</td>
        </tr>
        <tr>
            <th>Provincia</th>
            <td>{{ $BDdatos->provincia }}</td>
        </tr>
        <tr>
            <th>Localidad</th>
            <td>{{ $BDdatos->localidad }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $BDdatos->direccion }}</td>
        </tr>
        <tr>
            <th>Observacion de entrega</th>
            <td>{{ $BDdatos->observacion_entrega }}</td>
        </tr>
        <tr>
            <th>Logistic type</th>
            <td>{{ $BDdatos->logistic_type }}</td>
        </tr>
        <tr>
            <th>Service type code</th>
            <td>{{ $BDdatos->service_type_code }}</td>
        </tr>
        <tr>
            <th>Carrier id</th>
            <td>{{ $BDdatos->carrier_id }}</td>
        </tr>
        <tr>
            <th>Point id</th>
            <td>{{ $BDdatos->point_id }}</td>
        </tr>
    </table>
    
    
    <h3>Este es un correo automático, por favor no responda.</h2>
        
       
   
</body>
</html>