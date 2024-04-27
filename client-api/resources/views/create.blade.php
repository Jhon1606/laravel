<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear cliente</title>
</head>
<body>
    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone">
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address">
        <input type="submit" value="Crear Cliente">
    </form>
</body>
</html>