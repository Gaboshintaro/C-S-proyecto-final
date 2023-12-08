<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
.cabecera{
    background: black;
    color: white;
}
h1{
    color: brown;
    text-align: center;
}
</style>
</head>
<body>
  <img src="{{asset('img/logo.jfif')}}" alt="" width="30">
    <h1 class="text-center">Ingredientes</h1><br>
<table class="table" style="text-align: center;font-size:20px">
    <thead class="cabecera">
        <tr>
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
      <td>{{$in->nombre}}</td>
      <td>{{$in->precio}}</td>
      <td>{{$in->cantidad}}</td>
      <td>{{$in->codigopro}}</td>
      <td>{{$in->compra}}</td>
      <td>{{$in->vendedor}}</td>
      </tr> 
    @endforeach
    </tbody>
  </table>
</body>
</html>