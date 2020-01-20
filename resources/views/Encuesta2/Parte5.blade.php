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
                    Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.
                </i>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                    23.- Me informan con claridad cuáles son mis funciones
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
                        24.- Me explican claramente los resultados que debo obtener en mi trabajo
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
                        25.- Me informan con quién puedo resolver problemas o asuntos de trabajo
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
                        26.- Me permiten asistir a capacitaciones relacionadas con mi trabajo
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
                        27.- Recibo capacitación útil para hacer mi trabajo
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