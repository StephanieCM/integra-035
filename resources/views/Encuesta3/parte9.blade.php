@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<div class="card">
    <div class="card-header ">
        <i>Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</i>
    </div>
    <div class="card-body">
        <form >
            @csrf
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 ">37- Mi jefe ayuda a organizar mejor el trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">38- Mi jefe tiene en cuenta mis puntos de vista y opiniones</p>

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
                <p for="inputEmail3" class="col-sm-8 ">39- Mi jefe me comunica a tiempo la información relacionada con el trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">40- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">41- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo</p>

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