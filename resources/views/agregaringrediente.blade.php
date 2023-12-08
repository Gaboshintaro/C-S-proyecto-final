@extends('layouts.layout')
@section('datos4')
<form method="POST" action="{{route("ingredientes.store")}}">
  @csrf
    <div class="form-row">
      <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del proveedor">
      </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtext">Precio del producto</label>
      <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese le precio del producto" min="1" max="1000" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtex">cantidad de productos</label>
      <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad de productos a comprar" min="1" max="100" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Codigo del producto</label>
        <input type="text" class="form-control" id="codigopro" name="codigopro" placeholder="Ingrese el codigo del productos" maxlength="10" required>
      </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputdate">Fecha de compra</label>
      <input type="date" class="form-control" id="compra" name="compra" placeholder="Ingrese la fecha de la compra" min="2023-12-01" max="2024-01-01" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputdate">Proveedor</label>
      <select name="vendedor" class="form-select form-control" aria-label="Default select example">
        <option selected>Seleccione una opcion</option>
        @foreach ($vendedores as $item)
            <option>{{$item->nombre}}</option>
        @endforeach
      </select>
  </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection