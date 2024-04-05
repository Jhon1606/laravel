@extends('layouts.app')

@section('content')
    <a href="{{ Route('note.index')}}">Back</a>
    <h1>Title: {{ $note->title }}</h1>
    <h2>Description: {{ $note->description}}</h2>
@endsection