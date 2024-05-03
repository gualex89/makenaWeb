<!DOCTYPE html>
<html>
<head>
    <title>Gracias por tu Compra</title>
</head>
<body>

    <img src="{{ asset('images/logo/logo_black.png') }}" alt="Logo de Makena">
    <h1>¡Tu compra se procesó de forma correcta!</h1>
    <h2>Tu numero de orden es: MK-{{ $orden }}</h2>
    <h2>Este es un correo electrónico de prueba enviado desde Laravel.</h2>
    <p>¡Espero que estés teniendo un buen día!</p>
</body>
</html>