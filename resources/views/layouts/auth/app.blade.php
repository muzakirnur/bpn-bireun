@extends('adminlte::page')

@section('title', config('app.name') . ' - ' . $page)

@section('content_header')
    <x-head.tinymce-config />
    <h1>{{ $page }}</h1>
    <hr>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop
