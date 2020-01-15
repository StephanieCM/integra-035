@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <h1 class="text-center">Identificación y análisis de los factores de riesgo</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    1.- Mi trabajo me exige mucho esfuerzo físico
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    2.- Me preocupa sufrir un accidente en mi trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    3.- Considero que las actividades que realizo son peligrosas
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    4.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    5.- Por la cantidad de trabajo que tengo debo trabajar sin parar
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    6.- Considero que es necesario mantener un ritmo de trabajo acelerado
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    7.- Mi trabajo exige que esté muy concentrado
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    8.- Mi trabajo requiere que memorice mucha información
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    9.- Mi trabajo exige que atienda varios asuntos al mismo tiempo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Seleccionar</option>
                                        <option value="">Siempre</option>
                                        <option value="">Casi siempre</option>
                                        <option value="">Algunas veces</option>
                                        <option value="">Casi nunca</option>
                                        <option value="">Nunca</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="/" role="button" class="btn btn-primary pull-right">Guardar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection