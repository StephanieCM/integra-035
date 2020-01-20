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
                <form action="/respuestas" method="post">
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
                                        @foreach ($preguntas as $pregunta)
                                            <tr>
                                                <td>{{$pregunta->nombre}}</td>
                                                 <td>
                                                    <div class="icheck-peterriver">
                                                        <input type="radio" name={{$pregunta->idPregunta}} id={{"r1".$pregunta->idPregunta}} value="Si">
                                                        <label for={{"r1".$pregunta->idPregunta}}></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="icheck-peterriver">
                                                        <input type="radio" name={{$pregunta->idPregunta}} id={{"r2".$pregunta->idPregunta}} value="No">
                                                        <label for={{"r2".$pregunta->idPregunta}}></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                            {{-- <a href="/seccion2" role="button" class="btn btn-primary pull-right">Guardar</a> --}}
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
