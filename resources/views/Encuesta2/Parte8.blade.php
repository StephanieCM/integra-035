@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo</h2>
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        Soy jefe de otros trabajadores
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <select class="custom-select" id="soyJefe" style="width: 100%;">
                            <option value="1">Si</option>
                            <option value="0" selected>No</option>
                        </select>
                    </div>

                </div><br>
                <div class="row show-row" style="margin:1%; display:none">
                    <i class="font-weight">Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</i>
                </div>
                <div class="form-group row show-row" style="display:none">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                    44.- Comunican tarde los asuntos de trabajo
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option>Seleccionar</option>
                            <option value="">Siempre</option>
                            <option value="">Casi siempre</option>
                            <option value="">Algunas veces</option>
                            <option value="">Casi nunca</option>
                            <option value="">Nunca</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row show-row" style="display:none">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        45.- Dificultan el logro de los resultados del trabajo
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option>Seleccionar</option>
                            <option value="">Siempre</option>
                            <option value="">Casi siempre</option>
                            <option value="">Algunas veces</option>
                            <option value="">Casi nunca</option>
                            <option value="">Nunca</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row show-row" style="display:none">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        46.- Ignoran las sugerencias para mejorar su trabajo
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option>Seleccionar</option>
                            <option value="">Siempre</option>
                            <option value="">Casi siempre</option>
                            <option value="">Algunas veces</option>
                            <option value="">Casi nunca</option>
                            <option value="">Nunca</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <button type="button" class="btn btn-primary float-right">Guardar</button>
                <a href="index" class="btn btn-secondary float-right mr-3">Menu</a>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            //$('.select2').select2();

            $('#soyJefe').on('change', function() {
                if(this.value == 1)
                   $('.show-row').css('display','');
                else
                    $('.show-row').css('display','none');
            });
        });
    </script>
@endsection