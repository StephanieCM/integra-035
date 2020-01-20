@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y análisis de los factores de riesgo</h2>
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <i class="font-weight"> Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</i>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        1.- Mi trabajo me exige mucho esfuerzo físico
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        2.- Me preocupa sufrir un accidente en mi trabajo
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        3.- Considero que las actividades que realizo son peligrosas
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        4.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        5.- Por la cantidad de trabajo que tengo debo trabajar sin parar
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        6.- Considero que es necesario mantener un ritmo de trabajo acelerado
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        7.- Mi trabajo exige que esté muy concentrado
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        8.- Mi trabajo requiere que memorice mucha información
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
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        9.- Mi trabajo exige que atienda varios asuntos al mismo tiempo
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