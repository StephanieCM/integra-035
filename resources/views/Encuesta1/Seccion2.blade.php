@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <h1 class="text-center">Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">Sección/Pregunta</th>
                                            <th colspan="2">Respuesta</th>
                                        <tr>
                                            <th>Sí</th>
                                            <th>No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th colspan="3" class="table-active">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</th>
                                        </tr>
                                        <tr>
                                            <td>¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="RP1" id="r1">
                                                    <label for="r1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="RP1" id="r2">
                                                    <label for="r2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="RP2" id="r3">
                                                    <label for="r3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="RP2" id="r4">
                                                    <label for="r4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="/seccion3" role="button" class="btn btn-primary pull-right">Guardar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection