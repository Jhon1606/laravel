@extends('layouts.app')

@section('content')
    <a href="{{Route('note.index')}}">Back </a>
    <form action="{{Route('note.store')}}" method="POST">
        @csrf {{-- Para proteger el formulario de usuarios maliciosos --}}
        <label>Title:</label>
        <input type="text" name="title">
        @error('title')
            <p style="color: red"> {{ $message}}</p>
        @enderror

        <label>Description:</label>
        <input type="text" name="description">
        @error('description')
            <p style="color: red"> {{ $message}}</p>
        @enderror

        <input type="submit" value="Create ">
    </form>
@endsection