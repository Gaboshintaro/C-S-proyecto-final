@extends('layouts.layout')

@section('cont')
    <section class="row">
        <section class="col-lg-8 col-md-8 col-sm-8">Lista de Mesas Disponibles</section>
        <section class="col-lg-4 col-md-4 col-sm-4">
            <a type="button" type="submit" class="btn btn-success" href="{{ route('mesas.create') }}">
                Agregar nuevas mesas
            </a>

            <a href="{{ route('mesas.pdf') }}" class="btn btn-success btn-sm">Imprimir</a>
        </section>
    </section>
@endsection
@section('crud2')
    <form class="form-inline my-2 my-lg-0 float-right">
        <input name="buscarmesa" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo de mesa</th>
                <th scope="col">Numeor de mesa</th>
                <th scope="col">Numero de sillas</th>
                <th scope="col">Ocupacion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mesas as $mitem)
                <tr>
                    <td>{{ $mitem->id }}</td>
                    <td>{{ $mitem->tipo }}</td>
                    <td>{{ $mitem->num }}</td>
                    <td>{{ $mitem->silla }}</td>
                    <td>{{ $mitem->ocupacion }}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modaleditar{{$mitem->id}}"
                            class="btn btn-small btn-success">Editar</a>
                        <a href="{{ route('mesas.destroy', $mitem->id) }}" class="btn btn-sm btn-danger"
                            onclick="return confirm('¿Quieres borrar?')">Eliminar</a>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="modaleditar{{$mitem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modificar datos de mesas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('mesas.update', $mitem->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="inputtext">Id</label>
                                                <input type="text" class="form-control" id="id" name="id"
                                                    value="{{ $mitem->id }}" disabled>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="inputtext">Tipo de mesa</label>
                                                <input type="text" class="form-control" id="tipo" name="tipo"
                                                    value="{{ $mitem->tipo }}">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="inputtext">Numero de mesa</label>
                                                <input type="text" class="form-control" id="num" name="num"
                                                    value="{{ $mitem->num }}">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="inputtex">Numero de sillas</label>
                                                <input type="text" class="form-control" id="silla" name="silla"
                                                    value="{{ $mitem->silla }}">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="inputtext">Ocupacion</label>
                                                <input type="text" class="form-control" id="ocupacion" name="ocupacion"
                                                    value="{{ $mitem->ocupacion }}">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="Submit" class="btn btn-primary">Modificar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
            @endforeach
            </tr>
        </tbody>
    </table>
@endsection
