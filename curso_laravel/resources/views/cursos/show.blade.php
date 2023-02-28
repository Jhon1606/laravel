@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)
@section('content')
    <h1>Bienvenidos a el curso: {{$curso}} </h1> {{-- reemplaza a el php echo $curso --}}
@endsection