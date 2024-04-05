@extends('layouts.landing')

@section('title','Services')

@section('content')

    <h1>Services</h1>
    @component('layouts._components.card')
        @slot('title','Service 1')
        @slot('content','Lorem ipsum dolor set aimet')
    @endcomponent
    @component('layouts._components.card')
        @slot('title','Service 2')
        @slot('content','Lorem ipsum dolor set')
    @endcomponent
    @component('layouts._components.card')
        @slot('title','Service 3')
        @slot('content','Lorem ipsum dolor')
    @endcomponent

@endsection