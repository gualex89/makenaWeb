<!DOCTYPE html>
<html>
    

<head>
    <title>Gracias por tu Compra</title>
</head>
<body>

    <img src="{{ asset('images/logo/logo_black.png') }}" alt="Logo de Makena">
    <h1>¡Tu compra se procesó de forma correcta!</h1>
    <h2>Tu numero de orden es: MK-{{ $apiExternalReference }}</h2>
    <h3>id de pago: {{ $payment_id }}</h3>
    <h2>Si tenés alguna duda, comunicate con nosotros a nuestro <a href="http://wa.me/541122444188">Whatsapp</a> </h2>
    
    <h3>Este es un correo automático, por favor no responda.</h2>
        
       
   
</body>
</html>