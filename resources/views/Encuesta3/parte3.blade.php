@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
     
@stop
@section('content')
<form action="respuestas/encuesta3" method="POST">
    @csrf
    <div class="card">
        <div class="card-header ">
            <i>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</i>
        </div>
        <div class="card-body">
            @foreach ($questions as $question)
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        {{$question->folio}}.-{{$question->nombre}}
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3">
                        <select class="custom-select  is-invalid" name="{{$question->idPregunta}}" required>
                            <option value="">Seleccionar</option>
                            @foreach ($ponderaciones as $item)
                                @if ($question->idPregunta == $item->idPregunta)
                                    <option value="{{$item->idPonderacion}}">{{$item->respuesta}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
            <a href="menu3" class="btn btn-secondary float-right mr-3">Menu</a>
        </div>  
    </div>
</form>

@stop