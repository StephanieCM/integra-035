@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<div class="card">
    <div class="card-header ">
        <i class="font-weight-bold">Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</i>
    </div>
    <div class="card-body">
        <form class="was-validated">
            @csrf
            <div class="form-group row">
                <p for="" class="col-sm-8 col-form-label">1- ¿El espacio donde            trabajo me permite realizar mis actividades de manera segura e higiénica?</p>

                <div class="col-sm-4">
                    <select class="custom-select is-invalid " id="" required>
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
                <p for="inputEmail3" class="col-sm-8 control-label">2- ¿Mi trabajo me exige     hacer mucho esfuerzo físico?</p>

                <div class="col-sm-4">
                    <select class="custom-select is-invalid" id="" required>
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
                <p for="inputEmail3" class="col-sm-8 control-label">3- ¿Me preocupa sufrir un   accidente en mi trabajo?</p>

                <div class="col-sm-4">
                    <select class="custom-select is-invalid" id="" required>
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
                <p for="inputEmail3" class="col-sm-8 control-label">4- ¿Considero que en mi     trabajo se aplican las normas de seguridad y salud en el trabajo?</p>

                <div class="col-sm-4">
                    <select class="custom-select is-invalid" id="" required>
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
                <p for="inputEmail3" class="col-sm-8 control-label"> 5- ¿Considero que las  actividades que realizo son peligrosas?</p>

                <div class="col-sm-4">
                    <select class="custom-select is-invalid" id="" required>
                        <option value="" >Seleccionar</option>
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