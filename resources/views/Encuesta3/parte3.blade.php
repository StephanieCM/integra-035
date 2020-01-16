@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<div class="card">
    <div class="card-header ">
        <i>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</i>
    </div>
    <div class="card-body">
        <form >
            @csrf
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 control-label">9- ¿Mi trabajo exige que esté muy concentrado?</p>

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
                <p for="inputEmail3" class="col-sm-8 control-label">10- ¿Mi trabajo requiere que memorice mucha información?</p>

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
                <p for="inputEmail3" class="col-sm-8 control-label">11- ¿En mi trabajo tengo que tomar decisiones difíciles muy rápido?</p>

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
                <p for="inputEmail3" class="col-sm-8 control-label">12- ¿Mi trabajo exige que atienda varios asuntos al mismo Mi trabajo me exige hacer mucho esfuerzo físicotiempo?</p>

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
            <div class="card-footer ">
                <button type="button" class="btn btn-primary float-right">Guardar</button>
                <a href="menu" class="btn btn-secondary float-right mr-3">Menu</a>
            </div>
        </form>
    </div>
</div>
@stop