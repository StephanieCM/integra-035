@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo</h2>
@endsection

@section('content')
    <form action="respuestas/encuesta2" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <i class="font-weight">
                    Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.
                </i>
            </div>
            <div class="card-body">
                @foreach ($questions as $question)
                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-7 col-md-7">
                            {{$question->folio}}.-{{$question->nombre}}
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-3">
                            <select class="custom-select" name="{{$question->idPregunta}}" required>
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
                @if ($questions->isNotEmpty())
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                @endif
                <a href="menu2" class="btn btn-secondary float-right mr-3">Menu</a>
            </div>
        </div>
    </form>
@endsection