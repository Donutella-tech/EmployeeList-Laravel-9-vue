@extends('layouts.app')
@section('content')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @section('title')
        Список сотрудников
    @endsection

    <div id="app">
        <showcomponent></showcomponent>
@endsection




