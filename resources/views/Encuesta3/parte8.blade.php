@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<div class="card">
    <div class="card-header ">
        <i>Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</i>
    </div>
    <div class="card-body">
        <form >
            @csrf
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 ">31- Me informan con claridad cuáles son mis funciones</p>

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
                <p for="inputEmail3" class="col-sm-8 ">32- Me explican claramente los resultados que debo obtener en mi trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">33- Me explican claramente los objetivos de mi trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">34- Me informan con quién puedo resolver problemas o asuntos de trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">35- Me permiten asistir a capacitaciones relacionadas con mi trabajo</p>

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
                <p for="inputEmail3" class="col-sm-8 ">36- Recibo capacitación útil para hacer mi trabajo</p>

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