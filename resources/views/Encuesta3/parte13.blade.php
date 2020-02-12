@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<form action="respuestas/encuesta3" method="POST">
    @csrf
    <div class="card">
        <div class="card-header ">
            <i>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</i>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 ">- En mi trabajo debo brindar servicio a clientes o usuarios</p>

                <div class="col-sm-4">
                    <select class="custom-select" name="clientesJefes" id="servicioClientes" required>
                        <option value="">Seleccionar</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div> 
            <div id="atUsuarios" style="display:none">
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
        </div>
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
            <a href="menu3" class="btn btn-secondary float-right mr-3">Menu</a>
        </div>
    </div>      
</form>
@stop
@section('scripts')
<script>
    $(document).ready(function() {
        $('#servicioClientes').on('change', function() {
            if(this.value == 1)
               $('#atUsuarios').css('display','');
            else
                $('#atUsuarios').css('display','none');
        });
    });
</script>
@stop