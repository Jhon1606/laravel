@extends('layouts.app')

@section('content')
    <a href="{{ Route('note.index')}}">Back</a>
    <form action="{{ Route('note.update', $note->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label>Title: </label>
        <input type="text" name="title" value="{{ $note->title }}">
        @error('title')
            <p style="color: red"> {{ $message}}</p>
        @enderror

        <label>Description: </label>
        <input type="text" name="description" value="{{ $note->description }}">
        @error('description')
            <p style="color: red"> {{ $message}}</p>
        @enderror

        <input type="submit" value="Update">
    </form>
@endsection