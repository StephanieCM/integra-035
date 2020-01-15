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
                                            <th colspan="3" class="table-active">III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</th>
                                        </tr>
                                        <tr>
                                            <td>¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o     situaciones que le puedan recordar el acontecimiento?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC1" id="r1">
                                                    <label for="r1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC1" id="r2">
                                                    <label for="r2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas    que motivan recuerdos del acontecimiento?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC2" id="r3">
                                                    <label for="r3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC2" id="r4">
                                                    <label for="r4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha tenido dificultad para recordar alguna parte importante del evento?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC3" id="r5">
                                                    <label for="r5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC3" id="r6">
                                                    <label for="r6"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha disminuido su interés en sus actividades cotidianas?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC4" id="r7">
                                                    <label for="r7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC4" id="r8">
                                                    <label for="r8"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Se ha sentido usted alejado o distante de los demás?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC5" id="r9">
                                                    <label for="r9"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC5" id="r10">
                                                    <label for="r10"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha notado que tiene dificultad para expresar sus sentimientos?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC6" id="r11">
                                                    <label for="r11"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC6" id="r12">
                                                    <label for="r12"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?</td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC7" id="r13">
                                                    <label for="r13"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icheck-peterriver">
                                                    <input type="radio" name="EC7" id="r14">
                                                    <label for="r14"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="/seccion4" role="button" class="btn btn-primary pull-right">Guardar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
