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
                                            <th colspan="3" class="table-active">IV.- Afectación (durante el último mes):</th>
                                        </tr>
                                        <tr>
                                            <td>¿Ha tenido usted dificultades para dormir?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A1" id="r1">
                                                    <label for="r1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A1" id="r2">
                                                    <label for="r2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha estado particularmente irritable o le han dado arranques de coraje?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A2" id="r3">
                                                    <label for="r3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A2" id="r4">
                                                    <label for="r4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha tenido dificultad para concentrarse?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A3" id="r5">
                                                    <label for="r5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A3" id="r6">
                                                    <label for="r6"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha estado nervioso o constantemente en alerta?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A4" id="r7">
                                                    <label for="r7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A4" id="r8">
                                                    <label for="r8"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Se ha sobresaltado fácilmente por cualquier cosa?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A5" id="r9">
                                                    <label for="r9"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="A5" id="r10">
                                                    <label for="r10"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
