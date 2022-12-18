@extends('adminlte::page')

@section('title', config('app.name') . ' - ' . $page)

@section('content_header')
    <div class="container">
        <h1>{{ $page }}</h1>
        <hr>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop
