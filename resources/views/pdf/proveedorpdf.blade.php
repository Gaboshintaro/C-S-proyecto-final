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
    <h1 class="text-center">Proveedores</h1><br>
<table class="table" style="text-align: center;font-size:20px">
    <thead class="cabecera">
        <tr>
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
            <td>{{$proveedor->nombre}}</td>
            <td>{{$proveedor->apellido}}</td>
            <td>{{$proveedor->edad}}</td>
            <td>{{$proveedor->codigo}}</td>
            <td>{{$proveedor->fecha}}</td>
            </tr> 
       @endforeach
    </tbody>
  </table>
</body>
</html>