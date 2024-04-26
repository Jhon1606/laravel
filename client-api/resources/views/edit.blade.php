<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cliente</title>
</head>
<body>
    <form action="{{route('clientes.update')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $cliente->id }}">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"  value="{{$cliente->name}}" >
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{$cliente->email}}">
        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone" value="{{$cliente->phone}}">
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" value="{{$cliente->address}}">
        <button type="submit">Actualizar Cliente</button>
    </form>
</body>
</html>