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
                                Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.
                            </h6>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="margin:1%">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                23.- Me informan con claridad cuáles son mis funciones
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
                                    24.- Me explican claramente los resultados que debo obtener en mi trabajo
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
                                    25.- Me informan con quién puedo resolver problemas o asuntos de trabajo
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
                                    26.- Me permiten asistir a capacitaciones relacionadas con mi trabajo
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
                                    27.- Recibo capacitación útil para hacer mi trabajo
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
                            <a href="/parte6" role="button" class="btn btn-primary pull-right">Enviar</a>
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