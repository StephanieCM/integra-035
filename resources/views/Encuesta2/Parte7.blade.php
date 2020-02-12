@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo</h2>
@endsection

@section('content')
    <form action="respuestas/saveEncuesta2" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <i class="font-weight">
                    Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.
                </i>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        En mi trabajo debo brindar servicio a clientes o usuarios
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <select class="custom-select" name="clientesJefes" id="servicioClientes">
                            <option value="1">Si</option>
                            <option value="0" selected>No</option>
                        </select>
                    </div>

                </div><br>
                @foreach ($questions as $question)
                    <div class="form-group row show-row" style="display:none">
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
                <button type="submit" class="btn btn-primary float-right">Guardar</button>
                <a href="menu2" class="btn btn-secondary float-right mr-3">Menu</a>
            </div>
        </div>
    </form>
                
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            //$('.select2').select2();

            $('#servicioClientes').on('change', function() {
                if(this.value == 1)
                   $('.show-row').css('display','');
                else
                    $('.show-row').css('display','none');
            });
        });
    </script>
@endsection