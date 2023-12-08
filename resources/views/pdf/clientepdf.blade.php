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
    <h1 class="text-center">Clientes</h1><br>
<table class="table" style="text-align: center;font-size:20px">
    <thead class="cabecera">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Mesa</th>
            <th scope="col">Persona</th>
            <th scope="col">Visita</th>
            <th scope="col">Mesero</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cliente as $item)
          <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->edad}}</td>
            <td>{{$item->mesa}}</td>
            <td>{{$item->persona}}</td>
            <td>{{$item->visita}}</td>
            <td>{{$item->pedido}}</td>
            </tr> 
       @endforeach
    </tbody>
  </table>
</body>
</html>