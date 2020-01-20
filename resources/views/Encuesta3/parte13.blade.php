@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Identificación y Análisis de los Factores de Riesgo Psicosocial y Evaluación del Entorno Organizacional en los Centros de Trabajo</h2>
@stop
@section('content')
<form >
    @csrf
    <div class="card">
        <div class="card-header ">
            <i>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</i>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <p for="inputEmail3" class="col-sm-8 ">- En mi trabajo debo brindar servicio a clientes o usuarios</p>

                <div class="col-sm-4">
                    <select class="custom-select " id="servicioClientes" required>
                        <option value="">Seleccionar</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div> 
            <div id="atUsuarios" style="display: none">
                <div class="form-group row">
                    <p for="inputEmail3" class="col-sm-8 ">65- Atiendo clientes o usuarios muy enojados</p>

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
                    <p for="inputEmail3" class="col-sm-8 ">66- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas</p>

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
                    <p for="inputEmail3" class="col-sm-8 ">67- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</p>

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
                    <p for="inputEmail3" class="col-sm-8 ">68- Mi trabajo me exige atender situaciones de violencia</p>

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
            </div><!--fin div usuarios-->
        </div>
        <div class="card-footer ">
            <button type="button" class="btn btn-primary float-right">Guardar</button>
            <a href="menu" class="btn btn-secondary float-right mr-3">Menu</a>
        </div>
    </div>      
</form>
@stop
@section('scripts')
<script>
    $(document).ready(function() {
        $('#servicioClientes').on('change', function() {
            if(this.value == 1)
               $('#atUsuarios').css('display','');
            else
                $('#atUsuarios').css('display','none');
        });
    });
</script>
@stop