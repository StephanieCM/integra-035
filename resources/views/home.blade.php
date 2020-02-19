@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="card bg-light mb-3" style="max-width: 30rem;">
  <div class="card-header">eCloud - NOM035</div>
  <div class="card-body">
    <h5 class="card-title">Esto es una prueba de como se muestra la navegación de encuestas.</h5>
    <img class="card-img-bottom" alt="Integra Automation"  srcset="{{URL::to('/img/integra.png')}}">
  </div>
    </div>
</div>
@endsection
