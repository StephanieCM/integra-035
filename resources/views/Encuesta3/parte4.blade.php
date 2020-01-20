@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<form >
    @csrf
    <div class="card">
        <div class="card-header ">
            <i>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</i>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 control-label">13- ¿En mi trabajo soy responsable de cosas de mucho valor?</p>

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
                <p for="inputEmail3" class="col-sm-8 control-label">14- ¿Respondo ante mi jefe por los resultados de toda mi área de trabajo?</p>

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
                <p for="inputEmail3" class="col-sm-8 control-label">15- ¿En el trabajo me dan órdenes contradictorias?</p>

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
                <p for="inputEmail3" class="col-sm-8 control-label">16- ¿Considero que en mi trabajo me piden hacer cosas innecesarias?</p>

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
        </div>
        <div class="card-footer ">
            <button type="button" class="btn btn-primary float-right">Guardar</button>
            <a href="menu" class="btn btn-secondary float-right mr-3">Menu</a>
        </div>
    </div>
</form>
@stop