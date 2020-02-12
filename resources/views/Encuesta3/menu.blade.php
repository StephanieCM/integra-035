@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
    <div class="list-group">
        <a href={{$secciones[0] ? '#' : 'p1'}} class="list-group-item list-group-item-action">
            1- Condiciones ambientales de su centro de trabajo 
            @if ($secciones[0])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif  
        </a>
        <a href={{$secciones[1] ? '#' : 'p2'}} class="list-group-item list-group-item-action">
            2- Cantidad y ritmo de trabajo que tiene 
            @if ($secciones[1])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif 
        </a>
        <a href={{$secciones[2] ? '#' : 'p3'}} class="list-group-item list-group-item-action">
            3-Esfuerzo mental que le exige su trabajo 
            @if ($secciones[2])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[3] ? '#' : 'p4'}} class="list-group-item list-group-item-action">
            4- Actividades que realiza en su trabajo y las responsabilidades que tiene
            @if ($secciones[3])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[4] ? '#' : 'p5'}} class="list-group-item list-group-item-action">
            5- Jornada de trabajo
            @if ($secciones[4])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[5] ? '#' : 'p6'}} class="list-group-item list-group-item-action">
            6- Decisiones que puede tomar en su trabajo
            @if ($secciones[5])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[6] ? '#' : 'p7'}} class="list-group-item list-group-item-action">
            7- Tipo de cambio que ocurra en su trabajo
            @if ($secciones[6])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[7] ? '#' : 'p8'}} class="list-group-item list-group-item-action">
            8- Capacitación e información que se le proporciona sobre su trabajo
            @if ($secciones[7])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[8] ? '#' : 'p9'}} class="list-group-item list-group-item-action">
            9- Jefes con quien tiene contacto
            @if ($secciones[8])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[9] ? '#' : 'p10'}} class="list-group-item list-group-item-action">
            10- Relaciones con sus compañeros
            @if ($secciones[9])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[10] ? '#' : 'p11'}} class="list-group-item list-group-item-action">
            11-Rendimiento en el trabajo
            @if ($secciones[10])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[11] ? '#' : 'p12'}} class="list-group-item list-group-item-action">
            12-Actos de violencia laboral
            @if ($secciones[11])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[12] ? '#' : 'p13'}} class="list-group-item list-group-item-action">
            13-Atención a clientes y usuarios 
            @if ($secciones[12])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
        <a href={{$secciones[13] ? '#' : 'p14'}} class="list-group-item list-group-item-action">
            14- Personas que supervisa
            @if ($secciones[13])
                <i class="fas fa-check-circle float-right text-success"></i>
            @endif
        </a>
    </div>
@endsection