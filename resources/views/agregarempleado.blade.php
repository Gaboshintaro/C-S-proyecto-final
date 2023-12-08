@extends('layouts.layout')
@section('datos2')
<form method="POST" action="{{route('empleados.store')}}">
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
        <label for="inputtext">Horario</label>
        <input type="text" class="form-control" id="platillo" name="platillo" placeholder="Ingrese su horario de trabajo" required>
      </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtext">Edad</label>
      <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" min="18" max="70" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtext">Ocupacion</label>
      <input type="text" class="form-control" id="area" name="area" placeholder="Ingrese su puesto de trabajo" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtext">Elegir mesa</label>
      <select name="mesas" class="form-select form-control" aria-label="Default select example">
        <option selected>Seleccione una opcion</option>
        @foreach ($mesa as $item)
            <option>{{$item->id}}</option>
        @endforeach
      </select>
    </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection