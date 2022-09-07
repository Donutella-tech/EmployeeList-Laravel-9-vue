@extends('layouts.app')
@section('content')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @section('title')
        Регистрация
    @endsection
    <div id="app">
        <registerComponent> </registerComponent>
    </div>
 @endsection
