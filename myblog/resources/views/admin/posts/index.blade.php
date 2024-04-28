@extends('adminlte::page')

@section('title', 'CodersFree')

@section('content_header')
    {{-- Con float-right decimos que lo ubique de lado derecho --}}
    <h1>Lista de publicaciones</h1>
@stop

@section('content')
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif --}}
    @livewire('admin.posts-index')
    {{-- Partimos desde admin porque el ingresa a la carpeta views, desde ahi buscamos la ruta de la vista  --}}
    {{-- @include('admin.posts.create')
    @include('admin.posts.edit') --}}

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>

    </script>
@endsection