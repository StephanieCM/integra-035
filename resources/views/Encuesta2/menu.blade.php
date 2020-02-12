@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo psicosocial</h2>
@endsection

@if ($activo)
   @section('content')
    <div class="list-group">
        <a href="/parte1" class="list-group-item list-group-item-action">
            1- Condiciones del centro de trabajo
            <i class="fas fa-check-circle float-right text-success"></i>
        </a>
        <a href="/parte2" class="list-group-item list-group-item-action">
            2- Actividades y responsabilidades en el trabajo
            <i class="fas fa-check-circle float-right text-success"></i>
        </a>
        <a href="/parte3" class="list-group-item list-group-item-action">
            3- Tiempo destinado al trabajo
            <i class="fas fa-check-circle float-right text-success"></i>
        </a>   
        <a href="/parte4" class="list-group-item list-group-item-action">
            4- Decisiones en el trabajo
            {{-- <i class="fas fa-check-circle float-right text-success"></i> --}}
        </a>
        <a href="/parte5" class="list-group-item list-group-item-action">
            5- Capacitación e información
            {{-- <i class="fas fa-check-circle float-right text-success"></i> --}}
        </a>  
        <a href="/parte6" class="list-group-item list-group-item-action">
            6- Compañeros de trabajo y jefe
            {{-- <i class="fas fa-check-circle float-right text-success"></i> --}}
        </a>
        <a href="/parte7" class="list-group-item list-group-item-action">
            7- Atención a clientes y usuarios
            {{-- <i class="fas fa-check-circle float-right text-success"></i> --}}
        </a>  
        <a href="/parte8" class="list-group-item list-group-item-action">
            8- Jefe
            {{-- <i class="fas fa-check-circle float-right text-success"></i> --}}
        </a>     
    </div>
    @endsection 
@else
    @section('content')
    <div class="alert alert-info" role="alert">
        <h4>Por el momento la encuesta no se encuentra disponible</h4>
      </div>
    @endsection
@endif
