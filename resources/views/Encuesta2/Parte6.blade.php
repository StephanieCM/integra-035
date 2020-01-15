@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="text-center" style="margin-bottom:1%">Identificación y análisis de los factores de riesgo psicosocial</h1>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-11 col-md-11">
                <form action="" method="post">
                    @csrf
                    <div class="box">
                        <div class="box-header with-border">
                            <h6 class="box-title">
                                Las preguntas siguientes se refieren a las relaciones con sus compañeros de trabajo y su jefe.
                            </h6>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="margin:1%">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                28.- Mi jefe tiene en cuenta mis puntos de vista y opiniones
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    29.- Mi jefe ayuda a solucionar los prolemas que se presentan en el trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    30.- Puedo confiar en mis compañeros de trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    31.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    32.- Mis compañeros de trabajo me ayudan cuando tengo dificultades
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                33.- En mi trabajo puedo expresarme libremente sin interrupciones
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    34.- Recibo críticas constantes a mi persona y/o trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    35.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    36.- Se ignora mi presencia o se me excluye de las reunicones de trabajo y en la toma de decisiones
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    37.- Se manipulan las situaciones de trabaoj para hacerme parecer un mal trabajador
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    38.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    39.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    40.- He presenciad actos de violencia en mi centro de trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="/parte7" role="button" class="btn btn-primary pull-right">Enviar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            //$('.select2').select2();
        });
    </script>
@endsection