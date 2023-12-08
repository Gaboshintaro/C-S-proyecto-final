@extends('layouts.layout')
@section('cont2')
<section class="row">
  <section class="col-lg-8 col-md-8 col-sm-8">Lista de Empleados</section>
  <section class="col-lg-4 col-md-4 col-sm-4">
   <a type="button" class="btn btn-primary" href="{{route('empleados.create')}}">
    Agregar nuevo empleado
  </a> 
  <a href="{{route('empleados.pdf')}}" class="btn btn-success btn-sm">Imprimir</a>
  </section>
</section>
@endsection
@section('crud3')
<form class="form-inline my-2 my-lg-0 float-right">
  <input name="buscarempleado" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Horario de trabajo</th>
      <th scope="col">Edad</th>
      <th scope="col">Ocupacion</th>
      <th scope="col">Asignacion</th>
      <th scope="col"></th>
    </tr>
  </thead>
 
  <tbody>
    @foreach ($datos as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellido}}</td>
      <td>{{$item->platillo}}</td>
      <td>{{$item->edad}}</td>
      <td>{{$item->area}}</td>
      <td>{{$item->mesas}}</td>
      <td>
        <a href="{{route("empleados.edit", $item->id)}}" data-toggle="modal" data-target="#modaleditar{{$item->id}}" class="btn btn-small btn-success">Editar</a>
        <a href="{{route("empleados.destroy",$item->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar?')">Eliminar</a>
      </td>

      <!-- Modal -->
<div class="modal fade" id="modaleditar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de mesas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('empleados.update',$item->id)}}">
          @csrf
          @method('PUT')
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtext">Id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$item->id}}" disabled>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$item->nombre}}">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" value="{{$item->apellido}}">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Horario</label>
              <input type="text" class="form-control" id="platillo" name="platillo" value="{{$item->platillo}}">
            </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtext">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" value="{{$item->edad}}">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtext">Ocupacion</label>
            <input type="text" class="form-control" id="area" name="area" value="{{$item->area}}">
          </div>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="Submit" class="btn btn-primary">Modificar</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
    </tr>
    @endforeach 
  </tbody>
</table>
@endsection