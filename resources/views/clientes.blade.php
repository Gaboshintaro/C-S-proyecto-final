@extends('layouts.layout')
@section('cont3')
<section class="row">
  <section class="col-lg-8 col-md-8 col-sm-8">Lista de Clientes</section>
  <section class="col-lg-4 col-md-4 col-sm-4">
   <a type="button" type="submit" class="btn btn-primary" href="{{route('clientes.create')}}">
    Agregar nuevo cliente
  </a> 
  <a href="{{route('clientes.pdf')}}" class="btn btn-success btn-sm">Imprimir</a>
  </section>
</section>
@endsection

@section('crud')
<form class="form-inline my-2 my-lg-0 float-right">
  <input name="buscarcliente" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Mesa</th>
      <th scope="col">Persona</th>
      <th scope="col">Visita</th>
      <th scope="col">Mesero</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cliente as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellido}}</td>
      <td>{{$item->edad}}</td>
      <td>{{$item->mesa}}</td>
      <td>{{$item->persona}}</td>
      <td>{{$item->visita}}</td>
      <td>{{$item->pedido}}</td>
      <td>
        <a href="{{route("clientes.edit", $item->id)}}" data-toggle="modal" data-target="#modaleditar" class="btn btn-small btn-success">editar</a>
        <a href="{{route("clientes.destroy",$item->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar?')">Eliminar</a>
      </td>

      <!-- Modal -->
<div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de mesas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('clientes.update',$item->id)}}">
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
              <input type="text" class="form-control" id="apellido" name="apellido"  value="{{$item->apellido}}">
            </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputext">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad"  value="{{$item->edad}}">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Elegir mesa</label>
              <input type="text" class="form-control" id="mesa" name="mesa"  value="{{$item->mesa}}">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Numero de personas</label>
              <input type="text" class="form-control" id="perosna" name="persona"  value="{{$item->persona}}">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputdate">Fecha de visita</label>
              <input type="date" class="form-control" id="visita" name="visita"  value="{{$item->visita}}">
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