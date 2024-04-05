<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TODO Info</h1>
    <a href="{{route('create')}}">Create</a>
    @forelse ($infos as $info)
        <li><img src="{{asset('images/'.$info->file_uri)}}" width="128" alt="">  {{ $info->name  }} </li>
    @empty
        <p>No Data</p>
    @endforelse
</body>
</html>