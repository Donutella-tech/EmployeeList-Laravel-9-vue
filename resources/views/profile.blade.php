@extends('layouts.app')
@section('content')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @section('title')
        Профиль
    @endsection

    <div id="app">
       <profile-component/>
@endsection
