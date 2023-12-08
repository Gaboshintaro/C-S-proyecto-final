<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Roboto:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<header>
<section class="row">
    <section class="col-2" id="marisco"><img src="{{asset('img/logo.jfif')}}" alt="" width="60"></section>
    <section class="col-10"><h1>EL SABOR MEXICANO</h1></section>
  </section>    
</header>
<nav class="navbar navbar-dark bg-dark">
  <ul class="nav">
   <li class="nav-item">
     <a class="nav-link active" href="{{asset('/pri')}}">Principal</a>
   </li>
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Menu del restaurante</a>
    <div class="dropdown-menu">
      <a class="nav-link" href="{{asset('/platillos')}}">Platillos</a>
        <a class="nav-link" href="{{asset('/bebidas')}}">Bebidas</a>
    </div>
  </li>
   <li class="nav-item">
     <a class="nav-link" href="{{asset('/reser')}}">Reservacion</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="{{route('mesas.index')}}">Mesas</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="{{route('empleados.index')}}">Empleados</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('proveedores.index')}}">Proveedores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('ingredientes.index')}}">Ingredientes</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Gestion</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{asset('/gestion1')}}">Trabajador-Cliente</a>
      <a class="dropdown-item" href="{{asset('/gestion2')}}">Proveedor-Ingrediente</a>
      <a class="dropdown-item" href="{{asset('/gestion3')}}">platillo-Trabajador</a>
  </li>
 </ul> 

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </nav>
    </div>
    <br> 
<body>

  <main class="container">
    @yield('caru')
     <section class="row">
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos1')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos2')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos3')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos4')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos5')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos6')</section>
      <section class="col-lg-3 col-md-6 col-sm-12">@yield('platillos7')</section>
    </section>

    <section class="row">
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida1')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida2')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida3')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida4')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida5')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida6')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida7')</section>
      <section class="col-lg-4 col-md-6 col-sm-12">@yield('bebida8')</section>
    </section>
    <section class="row">
      <section class="col-lg-6 col-md-6 col-sm-12">@yield('mes1')</section>
      <section class="col-lg-6 col-md-6 col-sm-12">@yield('mes2')</section>
      <section class="col-lg-6 col-md-6 col-sm-12">@yield('mes3')</section>
      <section class="col-lg-6 col-md-6 col-sm-12">@yield('mes4')</section>
    </section>
    @yield('datos')
    <br>
    @yield('datos2')
    @yield('datos3')
    @yield('datos4')
    @yield('datos5')

   @yield('cont')
   @yield('cont2')
   @yield('cont3')
   @yield('cont4')
   @yield('cont5')
   <br>
   @yield('crud')
   @yield('crud2')
   @yield('crud3')
   @yield('crud4')
   @yield('crud5')
  </main>
</body>

<footer>
    <section class="row">
        <section class="col-lg-4 col-md-4 col-sm-4">
          <h4>Si desea conoce mas sobre el restaurante puede seguirnos en nuestras redes, tambien le proporcionamos nuestro numero telefonico:</h4>
        </section>
        <section class="col-lg-4 col-md-4 col-sm-4">
          <h3>Facebook</h3><br>
          <img src="{{asset('img/facebook.png')}}" width="50" class="icon">
          <p>El sabor de mexico campeche</p>
          <h3>Instagram</h3><br>
          <img src="{{asset('img/instagram.png')}}" width="50" class="icon">
          <p>Sabores mexicanos</p>
          <h3>Twitter</h3><br>
          <img src="{{asset('img/twitter.png')}}" width="50" class="icon">
          <p>@El sabor de mexico</p>
        </section>
        <section class="col-lg-4 col-md-4 col-sm-4">
          <h3>Numero de Telefono</h3>
          <p>989-456-0901</p><br>
          <img src="{{asset('img/telef.png')}}" width="50" class="icon">
        </section>
      </section>
      <h3>Gabriel Del Jesus Gonzalez Hoil</h3>
</footer>
</html>