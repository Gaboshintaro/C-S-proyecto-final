@extends('layouts.layout')

@section('caru')
     <div class="container-sm">
        <section class="fondo">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <section class="imagen">
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/ima1.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Tenemos una bariedad de platillos para tu paladar.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/ima2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Nuestro equipo de meseros esta mas que capacitado para tu dispocision.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/ima4.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Nuestro restaurante esta lista para tu visita.</p>
            </div>
          </div>
        </div>  
        </section>
        
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>     
        </section>
         
    </div>
   
@endsection

