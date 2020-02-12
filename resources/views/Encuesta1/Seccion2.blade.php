@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos</h2>
@endsection

@section('content')
    <form action="/respuestas/encuesta1" method="post">
        @csrf
        @foreach ($categories as $category)
            <div class="card">
                <div class="card-body">
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
                                <th colspan="3">{{$category->nombre}}</th>
                            </tr>
                            @foreach ($questions as $pregunta)
                                @if ($pregunta->idCategoria == $category->idCategoria)
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
                                @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
        <div class="d-flex flex-row-reverse">
            @if ($categories->isNotEmpty())
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            @endif
            <a href="menu1" class="btn btn-secondary float-right mr-3">Menu</a>
        </div>  
    </form>
</section>
@endsection