@extends('layouts.layout')
@section('cont4')
<section class="row">
  <section class="col-lg-8 col-md-8 col-sm-8">Lista de proveedor</section>
  <section class="col-lg-4 col-md-4 col-sm-4">
   <a type="button" type="submit" class="btn btn-primary" href="{{route('proveedores.create')}}">
    Agregar Proveedor
  </a> 
  <a href="{{route('proveedores.pdf')}}" class="btn btn-success btn-sm">Imprimir</a>
  </section>
</section>
@endsection
@section('crud5')
<form class="form-inline my-2 my-lg-0 float-right">
  <input name="buscarproveedor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre del proveedor</th>
      <th scope="col">Apellido del proveedor</th>
      <th scope="col">Edad del proveedor</th>
      <th scope="col">Codigo del proveedor</th>
      <th scope="col">Fecha de venta</th>
      <th></th>
    </tr>
  </thead>
  @foreach ($proveedores as $proveedor)
  <tbody>
    <tr>
      <td>{{$proveedor->id}}</td>
      <td>{{$proveedor->nombre}}</td>
      <td>{{$proveedor->apellido}}</td>
      <td>{{$proveedor->edad}}</td>
      <td>{{$proveedor->codigo}}</td>
      <td>{{$proveedor->fecha}}</td>
      <td>
        <a href="{{route("proveedores.edit", $proveedor->id)}}" data-toggle="modal" data-target="#modaleditar{{$proveedor->id}}" class="btn btn-small btn-success">Editar</a>
        <a href="{{route("proveedores.destroy",$proveedor->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar?')">Eliminar</a>
      </td>

      <!-- Modal -->
<div class="modal fade" id="modaleditar{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de mesas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('proveedores.update',$proveedor->id)}}">
          @csrf
          @method('PUT')
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtext">Id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$proveedor->id}}" disabled>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Nombre del proveedor</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$proveedor->nombre}}">
            </div>
          <div class="form-group col-md-6">
            <label for="inputtext">Apellido del proveedor</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$proveedor->apellido}}">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtex">Edad del proveedor</label>
            <input type="text" class="form-control" id="edad" name="edad" value="{{$proveedor->edad}}">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Codigo del proveedor</label>
              <input type="text" class="form-control" id="codigo" name="codigo" value="{{$proveedor->codigo}}">
            </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputdate">Fecha de venta</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{$proveedor->fecha}}">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="Submit" class="btn btn-primary">Modificar</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>
@endsection