@extends('layouts.plantilla')

@section('title', 'Create')
@section('content')
    <h1>Bienvenidos a la página create</h1>
    <a href="{{Route('cursos.index')}}">Volver a curso</a>
    <form action="{{Route('cursos.store')}}" method="POST">
        @csrf
        <label>Name: </label> 
        <input type="text" name="name" value="{{old('name')}}"> <br> <br>
        @error('name')
            <br> 
                <small>*{{$message}}</small>
            <br>
        @enderror
        <label>Descripción:</label> 
        <textarea name="description" rows="5">{{old('description')}}</textarea> <br>
        @error('description')
            <br> 
                <small>*{{$message}}</small>
            <br>
        @enderror
        <label>Categoria</label> 
        <input type="text" name="categoria" value="{{old('categoria')}}"><br>
        @error('categoria')
            <br> 
                <small>*{{$message}}</small>
            <br>
        @enderror
        <button type="submit">Enviar</button>
    </form>
@endsection