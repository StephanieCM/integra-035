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
                Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.
                </i>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                    18.- Mi trabajo permite que desarrolle nuevas habilidades
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
                        19.- En mi trabajo puedo aspirar a un mejor puesto
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
                        20.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito
                    </div>
                    <div class="col-xs- col-sm-3 col-md-2">
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
                        21.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo
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
                        22.- Puedo cambiar el orden de las actividades que realizo en mi trabajo
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