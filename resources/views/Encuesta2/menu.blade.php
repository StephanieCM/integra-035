@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo psicosocial</h2>
@endsection

@section('content')
    <div class="list-group">
        <a href={{$secciones[0] ? '#' : 'parte1'}} class="list-group-item list-group-item-action">
            1- Condiciones del centro de trabajo
            @if ($secciones[0])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[1] ? '#' : 'parte2'}} class="list-group-item list-group-item-action">
            2- Actividades y responsabilidades en el trabajo
            @if ($secciones[1])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[2] ? '#' : 'parte3'}} class="list-group-item list-group-item-action">
            3- Tiempo destinado al trabajo
            @if ($secciones[2])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a> 
        <a href={{$secciones[3] ? '#' : 'parte4'}} class="list-group-item list-group-item-action">
            4- Decisiones en el trabajo
            @if ($secciones[3])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[4] ? '#' : 'parte5'}} class="list-group-item list-group-item-action">
            5- Capacitación e información
            @if ($secciones[4])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>  
        <a href={{$secciones[5] ? '#' : 'parte6'}} class="list-group-item list-group-item-action">
            6- Compañeros de trabajo y jefe
            @if ($secciones[5])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[6] ? '#' : 'parte7'}} class="list-group-item list-group-item-action">
            7- Atención a clientes y usuarios
            @if ($secciones[6])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif     
        </a>  
        <a href={{$secciones[7] ? '#' : 'parte8'}} class="list-group-item list-group-item-action">
            8- Jefe
            @if ($secciones[7])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>     
    </div>
@endsection