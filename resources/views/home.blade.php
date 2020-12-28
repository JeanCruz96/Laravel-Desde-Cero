@extends('layout')

@section('title','Home')



@section('prueba')
    <?php
    echo "
   <br> Bienvenido  {$nombre}24 y {$nombre1}
   "

    ?>
  <br> Bienvenido {{$nombre ?? "invitado"}} y {{$nombre1 ??"invitado secundario"}}
@endsection
@section('mensaje')
  <h1>Home</h1>
    <ul>
        @if($portfolio)

        @foreach ($portfolio as $portfolioItem)
          <li> {{$portfolioItem["title"]}}</li>

        @endforeach
        @else
        No hay nada para mostrar

        @endif

    </ul>

@endsection
