@extends('layouts.app')

@section('content')
    <a href="{{Route('note.create')}}">Crear nueva Nota </a>
    <ul>
        @forelse ($notes as $note)
            <li> <a href="{{ Route('note.show', $note->id)}}">{{ $note->title }}</a> | 
                 <a href=" {{ Route('note.edit', $note->id) }}">EDIT</a> | 
                 <form action="{{ Route('note.destroy', $note->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="DELETE">
                </form>  
            </li>
        @empty
            <p>No hay datos.</p>
        @endforelse
    </ul>
@endsection