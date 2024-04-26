<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <h1>Mostrar clientes</h1>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Dirección</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $cliente)  
            <tr>      
                <th>{{$cliente['name']}}</th>
                <th>{{$cliente['email']}}</th>
                <th>{{$cliente['phone']}}</th>
                <th>{{$cliente['address']}}</th>
                <th>
                    <a href="{{route('clientes.delete', $cliente['id'])}}"> Eliminar </a>
                    <a href="{{route('clientes.edit', $cliente['id'])}}"> Editar </a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>