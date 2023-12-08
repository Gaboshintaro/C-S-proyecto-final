@extends('layouts.layout')

@section('mes1')
<img src="{{asset('img/mes1.jfif')}}" alt="">   
<p class="inf">Mesa para parejas</p>
<p class="inf">Total de mesa sin reservar: 18</p>
<br>
@endsection
@section('mes2')
<img src="{{asset('img/mes2.jpg')}}" alt="" width="130"> 
<p class="inf">Mesa para familias de cuatro personas</p>
<p class="inf">Total de mesa sin reservar: 9</p>
<br>
@endsection
@section('mes3')
<img src="{{asset('img/mes3.jfif')}}" alt="">
<p class="inf">Mesa para familias grandes o amigos con espacio suficiente para 10 personas</p>
<p class="inf">Total de mesa sin reservar: 8</p>
<br>     
@endsection
@section('mes4')
<img src="{{asset('img/mes4.jfif')}}" alt="">
<p class="inf">Mesa para familias grandes o amigos con espacio suficiente para 6 personas</p>
<p class="inf">Total de mesa sin reservar: 10</p>
<br>  
@endsection
