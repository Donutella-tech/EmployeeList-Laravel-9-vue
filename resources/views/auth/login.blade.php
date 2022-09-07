@extends('layouts.app')
@section('content')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @section('title')
        Авторизация
    @endsection
    <div id="app">
        <loginComponent> </loginComponent>
    </div>
@endsection
