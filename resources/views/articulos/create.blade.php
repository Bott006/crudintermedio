@extends('adminlte::page')

@section('title', 'Registro')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Añadir registros</h1>

<form action="/articulos" method="POST">
    @csrf
    <div>
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div>
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div>
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
    </div>
    <div>
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" step="any" value="0.00" type="number" class="form-control" tabindex="4">
    </div>
    
    <a href="/articulos" tabindex="5">Cancelar</a>
    <button type="submit" tabindex="6">Guardar</a>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop