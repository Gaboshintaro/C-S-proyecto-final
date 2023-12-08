@extends('layouts.layout')
@section('cont5')
<section class="row">
    <section class="col-lg-8 col-md-8 col-sm-8">Lista de ingredientes</section>
    <section class="col-lg-4 col-md-4 col-sm-4">
  <a type="button" type="submit" class="btn btn-primary" href="{{route('ingredientes.create')}}">
    Agregar nuevos ingredientes
  </a>

  <a href="{{route('ingredientes.pdf')}}" class="btn btn-success btn-sm">Imprimir</a>
</section>
</section>
@endsection
@section('crud4')
<form class="form-inline my-2 my-lg-0 float-right" >
  <input name="buscaringrediente" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Precio del producto</th>
      <th scope="col">Cantidad del producto</th>
      <th scope="col">Codigo del producto</th>
      <th scope="col">Fecha de compra</th>
      <th scope="col">Proveedor</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($ingredientes as $in)
    <tr>
      <td>{{$in->id}}</td>
      <td>{{$in->nombre}}</td>
      <td>{{$in->precio}}</td>
      <td>{{$in->cantidad}}</td>
      <td>{{$in->codigopro}}</td>
      <td>{{$in->compra}}</td>
      <td>{{$in->vendedor}}</td>
      <td>
        <a href="{{route("ingredientes.edit",$in->id)}}" data-toggle="modal" data-target="#modaleditar{{$in->id}}" class="btn btn-small btn-success">editar</a>
        <a href="{{route("ingredientes.destroy",$in->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar?')">Eliminar</a>
      </td>

      <!-- Modal -->
<div class="modal fade" id="modaleditar{{$in->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de mesas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route("ingredientes.update",$in->id)}}">
          @csrf
          @method('PUT')
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtext">Id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$in->id}}" disabled>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Nombre del producto</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$in->nombre}}">
            </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtext">Precio del producto</label>
            <input type="text" class="form-control" id="precio" name="precio" value="{{$in->precio}}">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputtex">cantidad de productos</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$in->cantidad}}">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="inputtext">Codigo del producto</label>
              <input type="text" class="form-control" id="codigopro" name="codigopro" value="{{$in->codigopro}}">
            </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="inputdate">Fecha de compra</label>
            <input type="date" class="form-control" id="compra" name="compra" value="{{$in->compra}}">
          </div>
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
      </td>
    </tr>    
    @endforeach
    

  </tbody>
</table>
@endsection