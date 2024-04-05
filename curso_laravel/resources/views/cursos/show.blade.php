@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)
@section('content')
<h1>Bienvenidos a el curso: {{$curso->name}} </h1> {{-- reemplaza a el php echo $curso --}}
    <a href="{{Route('cursos.index')}}">Volver a Cursos</a> <br>
    <a href="{{Route('cursos.edit', $curso->id)}}">Editar Curso</a>
    <p><strong>Categoria: </strong> {{$curso->categoria}}</p>
    <p><strong>Descripción: </strong> {{$curso->description}}</p>

    <form action="{{Route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection