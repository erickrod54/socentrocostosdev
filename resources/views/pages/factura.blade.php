@extends('layouts.app')

@section('content')
      <h1>{{$title}}</h1>
      <p>Esta es la pagina de la Facturas de los distintos Centros de Costos</p>
      @if(count($operaciones)>0)
            <ul class="list-group">
              @foreach($operaciones as $operacion)
                <li class="list-group-item">{{$operacion}}</li>
              @endforeach
            </ul>
      @endif
@endsection
