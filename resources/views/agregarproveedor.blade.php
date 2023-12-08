@extends('layouts.layout')
@section('datos5')
<form method="POST" action="{{route('proveedores.store')}}">
  @csrf
    <div class="form-row">
      <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Nombre del proveedor</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del proveedor">
      </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtext">Apellido del proveedor</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese apellido del proveedor">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtex">Edad del proveedor</label>
      <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad del proveedor">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Codigo del proveedor</label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo del proveedor">
      </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputdate">Fecha de venta</label>
      <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha de la venta"  min="2023-12-01" max="2024-01-01">
    </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection