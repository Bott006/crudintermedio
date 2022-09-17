@extends('adminlte::page')
@section('title', 'Facturación')
@section('content_header')
<h1>INDEX Pacientes</h1>
@stop

@section('content')
@livewire('facturas')
@stop
        

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop
