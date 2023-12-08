@extends('layouts.layout')

@section('datos')
<form method="POST" action="{{route('mesas.store')}}">
  @csrf
  <div class="form-row">
    <div class="form-group col-lg-6 col-md-6 col-ms-12">
      <label for="inputtext">Tipo de mesa</label>
      <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese el tipo de mesa" required>
    </div>
  <div class="form-group col-lg-6 col-md-6 col-ms-12">
    <label for="inputtext">Numero de mesa</label>
    <input type="text" class="form-control" id="num" name="num" placeholder="Ingrese el numero de la mesa" min="1" max="18" required>
  </div>
  <div class="form-group col-lg-6 col-md-6 col-ms-12">
    <label for="inputtex">Numero de sillas</label>
    <input type="text" class="form-control" id="silla" name="silla" placeholder="Ingrese numero de sillas" min="1" max="16" required>
  </div>
  <div class="form-group col-lg-6 col-md-6 col-ms-12">
    <label for="inputtext">Ocupacion</label>
    <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ingrese la disponibilidad de la mesa" required>
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection

