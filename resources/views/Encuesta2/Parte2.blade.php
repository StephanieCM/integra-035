@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo</h2>
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <i class="font-weight">
                Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</i>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        10.- En mi tranajo soy responsable de cosas de mucho valor
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        11.- Respondo ante mi jefe por los resultados de toda mi área de trabajo
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        12.- En mi trabajo me dan órdenes contradictorias
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        13.- Considero que en mi trabajo me piden hacer cosas inncesarias
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
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