@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
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
                                        <tr class="table-active">
                                            <th colspan="3">I.- Acontecimiento traumático severo</th>
                                        </tr>
                                        <tr>
                                            <td colspan="3">¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:</td>
                                        </tr>
                                        <tr>
                                            <td>Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS1" id="r1">
                                                    <label for="r1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS1" id="r2">
                                                    <label for="r2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Asaltos?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS2" id="r3">
                                                    <label for="r3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS2" id="r4">
                                                    <label for="r4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Actos violentos que derivaron en lesiones graves?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS3" id="r5">
                                                    <label for="r5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS3" id="r6">
                                                    <label for="r6"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Secuestro?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS4" id="r7">
                                                    <label for="r7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS4" id="r8">
                                                    <label for="r8"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Amenazas?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS5" id="r9">
                                                    <label for="r9"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS5" id="r10">
                                                    <label for="r10"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS6" id="r11">
                                                    <label for="r11"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="ATS6" id="r12">
                                                    <label for="r12"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="/seccion2" role="button" class="btn btn-primary pull-right">Guardar</a>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
