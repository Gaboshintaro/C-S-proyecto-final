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
    <h1 class="text-center">Mesas</h1><br>
<table class="table" style="text-align: center;font-size:20px">
    <thead class="cabecera">
      <tr>
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
        <td>{{ $mitem->tipo }}</td>
        <td>{{ $mitem->num }}</td>
        <td>{{ $mitem->silla }}</td>
        <td>{{ $mitem->ocupacion }}</td>
       </tr> 
       @endforeach
    </tbody>
  </table>
</body>
</html>