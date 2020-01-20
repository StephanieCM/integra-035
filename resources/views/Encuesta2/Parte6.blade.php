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
                    Las preguntas siguientes se refieren a las relaciones con sus compañeros de trabajo y su jefe.
                </i>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                    28.- Mi jefe tiene en cuenta mis puntos de vista y opiniones
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
                        29.- Mi jefe ayuda a solucionar los prolemas que se presentan en el trabajo
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
                        30.- Puedo confiar en mis compañeros de trabajo
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
                        31.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
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
                        32.- Mis compañeros de trabajo me ayudan cuando tengo dificultades
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
                    33.- En mi trabajo puedo expresarme libremente sin interrupciones
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
                        34.- Recibo críticas constantes a mi persona y/o trabajo
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
                        35.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
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
                        36.- Se ignora mi presencia o se me excluye de las reunicones de trabajo y en la toma de decisiones
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
                        37.- Se manipulan las situaciones de trabaoj para hacerme parecer un mal trabajador
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
                        38.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
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
                        39.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
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
                        40.- He presenciad actos de violencia en mi centro de trabajo
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