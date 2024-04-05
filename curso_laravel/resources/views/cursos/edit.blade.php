@extends('layouts.plantilla')

@section('title', 'Editar Curso')
@section('content')
    <h1>Bienvenidos a la página edit</h1>
    <a href="{{Route('cursos.index')}}">Volver a cursos</a>
    <form action="{{Route('cursos.update', $curso)}}" method="POST">
        @csrf
        {{-- Para hacer saber que se enviará por metodo put se hace lo siguiente: --}}
        @method('put') 
        <label>Name: </label> 
        <input type="text" name="name" value="{{old('name',$curso->name)}}"> <br> <br>
        @error('name')
            <br> 
                <small>*{{$message}}</small>
            <br>
        @enderror
        <label>Descripción:</label> 
        <textarea name="description" rows="5">{{old('description',$curso->description)}}</textarea> <br>
        @error('description')
            <br> 
                <small>*{{$message}}</small>
            <br>
        @enderror
        <label>Categoria</label> 
        {{-- Para recuperar el valor que trae de la bd y también para obtener valor en caso se edite --}}
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}"><br> 
        @error('categoria')
            <br> 
                <small>*{{$message}}</small>
            <br>
        @enderror
        <button type="submit">Actualizar</button>
    </form>
@endsection