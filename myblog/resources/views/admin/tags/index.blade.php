@extends('adminlte::page')

@section('title', 'CodersFree')

@section('content_header')
    {{-- Con float-right decimos que lo ubique de lado derecho --}}
    <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#modalCreateTag">
        Agregar Etiqueta
    </button>

    <h1>Lista de etiquetas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->color}}</td>
                            <td width="10px">
                                {{-- Se deja como tag y no como tag->id para que no retorne el id en la url si no el slug,
                                    como se definió en el modelo Category con el metodo getRouteKeyName()--}}
                                    <button onclick="modalEditCategory({{$tag}})" type="button" class="btn btn-primary btn-sm">
                                        Editar
                                    </button>
                            </td>
                            <td width="10px">
                                {{-- Para hacer el delete siempre se tendra que hacer dentro de un form, decirle que es metodo post
                                    y despues convertirlo en metodo delete mediante @method --}}
                                <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
    @include('admin.tags.create')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop