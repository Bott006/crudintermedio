@extends('adminlte::page')

@section('title', 'Edición')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Edición</h1>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT');
    <div>
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" tabindex="1">
    </div>
    <div>
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
    </div>
    <div>
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
    </div>
    <div>
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" step="any" value="0.00" type="number" value="{{$articulo->precio}}" class="form-control" tabindex="4">
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