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
                            Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.
                            </h6>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="margin:1%">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    10.- En mi tranajo soy responsable de cosas de mucho valor
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control " style="width: 100%;">
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
                                    11.- Respondo ante mi jefe por los resultados de toda mi área de trabajo
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
                                    12.- En mi trabajo me dan órdenes contradictorias
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
                                    13.- Considero que en mi trabajo me piden hacer cosas inncesarias
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
                            <a href="/parte3" role="button" class="btn btn-primary pull-right">Enviar</a>
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