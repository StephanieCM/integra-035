@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<div class="card">
    <div class="card-header ">
        <i>Las preguntas siguientes están relacionadas con las actitudes de las personas que supervisa.</i>
    </div>
    <div class="card-body">
        <form >
            @csrf
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 "> Soy jefe de otros trabajadores:</p>

                <div class="col-sm-4">
                    <select class="custom-select " id="" required>
                        <option value="">Seleccionar</option>
                        <option onclick="muestra(1)">Si</option>
                        <option onclick="muestra(2)">No</option>
                    </select>
                </div>
            </div>
            <div id="jefe" style="display: none">
                <div class="form-group row">
                    <p for="inputEmail3" class="col-sm-8 ">69- Comunican tarde los asuntos de trabajo</p>

                    <div class="col-sm-4">
                        <select class="custom-select " id="" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Simpre</option>
                            <option value="2">Casi Siempre</option>
                            <option value="3">Algunas Veces</option>
                            <option value="3">Casi Nunca</option>
                            <option value="3">Nunca</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <p for="inputEmail3" class="col-sm-8 ">70- Dificultan el logro de los resultados del trabajo</p>

                    <div class="col-sm-4">
                        <select class="custom-select " id="" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Simpre</option>
                            <option value="2">Casi Siempre</option>
                            <option value="3">Algunas Veces</option>
                            <option value="3">Casi Nunca</option>
                            <option value="3">Nunca</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <p for="inputEmail3" class="col-sm-8 ">71- Cooperan poco cuando se necesita</p>

                    <div class="col-sm-4">
                        <select class="custom-select " id="" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Simpre</option>
                            <option value="2">Casi Siempre</option>
                            <option value="3">Algunas Veces</option>
                            <option value="3">Casi Nunca</option>
                            <option value="3">Nunca</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <p for="inputEmail3" class="col-sm-8 ">72- Ignoran las sugerencias para mejorar su trabajo</p>

                    <div class="col-sm-4">
                        <select class="custom-select " id="" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Simpre</option>
                            <option value="2">Casi Siempre</option>
                            <option value="3">Algunas Veces</option>
                            <option value="3">Casi Nunca</option>
                            <option value="3">Nunca</option>
                        </select>
                    </div>
                </div> 

            </div><!--fin div jefe--> 
            <div class="card-footer ">
                <button type="button" class="btn btn-primary float-right">Guardar</button>
                <a href="menu" class="btn btn-secondary float-right mr-3">Menu</a>
            </div>
        </form>
    </div>
</div>
@stop
@section('scripts')
    <script>
        function muestra(id){
            if (id==1){
                document.getElementById('jefe').style.display = 'block';
            }else if (id==2){
                location.href = 'menu';
            }
        }
    </script>
@stop