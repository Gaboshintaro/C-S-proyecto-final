@extends('layouts.layout')
@section('datos3')
<form method="POST" action="{{route('clientes.store')}}">
  @csrf
    <div class="form-row">
      <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
      </div>
      <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
      </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputext">Edad</label>
      <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" min="20" max="70">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
        <label for="inputtext">Elegir mesa</label>
        <select name="mesa" class="form-select form-control" aria-label="Default select example">
          <option selected>Seleccione una opcion</option>
          @foreach ($mesas as $item)
              <option>{{$item->tipo}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-4 col-md-4 col-ms-12">
        <label for="inputtext">Numero de personas</label>
        <input type="text" class="form-control" id="perosna" name="persona" placeholder="Ingrese numero de mesa" min="1" max="16" required>
      </div>
      <div class="form-group col-md-4 col-md-4 col-ms-12">
        <label for="inputdate">Fecha de visita</label>
        <input type="date" class="form-control" id="visita" name="visita" placeholder="Ingrese su fecha de visita" min="2023-12-01" max="2024-01-01" required>
      </div>
      <div class="form-group col-md-4 col-md-4 col-ms-12">
        <label for="inputdate">Empleado</label>
        <select name="pedido" class="form-select form-control" aria-label="Default select example">
          <option selected>Seleccione una opcion</option>
          @foreach ($pedidos as $item)
              <option>{{$item->nombre}}</option>
          @endforeach
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
