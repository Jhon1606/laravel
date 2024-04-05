@extends('layouts.plantilla')

@section('title', 'Index')
@section('content')
    <h1>Bienvenidos a la página de Curso</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a> <br>
                {{route('cursos.show',$curso)}}
            </li> {{-- // Esos corchetes es lo mismo que abrir y cerrar php --}}
        @endforeach
    </ul>
    {{$cursos->links()}} {{-- Para que me muestre una paginación del resto de datos --}}
@endsection