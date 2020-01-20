@extends('layouts.app')
@section('conten_header')
    
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Categoría</h3>
                    <p><i>agregé,edité o eliminé</i></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="abrirModal(1)">ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Dominio</h3>
                    <p><i>agregé,edité o eliminé</i></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="abrirModal(2)">ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Dimensión</h3>
                    <p><i>agregé,edité o eliminé</i></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="abrirModal(3)">ver<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Editar</h3>
                    <p><i>edita o elimina preguntas</i></p>
                </div>
                <div class="icon">
                    <i class="ion ion-star"></i>
                </div>
                <a href="gestion" class="small-box-footer">ver<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            <h3><i>Agregar una nueva pregunta</i></h3>
        </div>
        <form action="">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="pre">Nombre</label>
                        <textarea class="form-control" id="pre" placeholder="Se requiere la pregunta" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="fo">Folio</label>
                        <input type="number" name="" id="fo" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="" id="">
                            <option value="" selected>Encuesta</option>
                            <option value="">Encuesta 1</option>
                            <option value="">Encuesta 2</option>
                            <option value="">Encuesta 3</option>
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una escuesta
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="" id="">
                            <option value="" selected>Categoría</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una categoría
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="" id="">
                            <option value="" selected>Dominio</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <small class="form-text text-muted">
                            Selecciona un dominio
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="" id="">
                            <option value="" selected>Dimensión</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una dimensión
                        </small>
                    </div>
                </div>
                <hr>
                <h3>Respuestas</h3>
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">Valor:</label>
                        <input type="number" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Guardar</button>
            </div>
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="opciones" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tituloModal"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="container">
                        <p>Selecciona para editar o eliminar, o crea una nueva</p>
                        <div class="row" id="formCategoria">
                            <div class="col">
                                <select name="" id="" class="custom-select">
                                    <option value="" selected>Categoría</option>
                                    <option value="" onclick="agregar(2)">Categoria1</option>
                                    <option value="" onclick="agregar(2)">Categoria2</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregar(1)">Nueva</button>
                            </div>  
                        </div> 
                        <div class="row" id="formDominio">
                            <div class="col">
                                <select name="" id="" class="custom-select">
                                    <option value="" selected>Dominio</option>
                                    <option value="">Dominio2</option>
                                    <option value="">Dominio2</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregar(1)">Nueva</button>
                            </div> 
                        </div> 
                        <div class="row" id="formDimension">
                            <div class="col">
                                <select name="" id="" class="custom-select">
                                    <option value="" selected>Dimensión</option>
                                    <option value="">Dimension1</option>
                                    <option value="">Dimension2</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregar(1)">Nueva</button>
                            </div>   
                        </div>
                        <div class="row" id="nuevoNombre">
                            <label for="" id="etqNom">Nombre:</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-warning" id="btnEditar">Editar</button>
                    <button type="button" class="btn btn-success" id="btnAgregar">Agregar</button>
                  </div>
            </form>
          </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.busqueda').select2({
                theme:'classic'
            });
        });
        function abrirModal(num){

            /*document.getElementById('btnEliminar').style.display = 'none';
            document.getElementById('btnEditar').style.display = 'none';
            document.getElementById('btnAgregar').style.display = 'none';*/
            $('#btnEliminar').hide();
            $('#btnEditar').hide();
            $('#btnAgregar').hide();
           
            if (num == 1){
                /*document.getElementById('formCategoria').style.display = 'line';
                document.getElementById('formDominio').style.display = 'none';
                document.getElementById('formDimension').style.display = 'none';
                document.getElementById('nuevoNombre').style.display = 'none';*/
                $('#tituloModal').html('Categoría');
                $('#formCategoria').show();
                $('#formDominio').hide();
                $('#formDimension').hide();
                $('#nuevoNombre').hide();
                $('#opciones').modal('show');
            } else {
                if (num == 2){
                /*document.getElementById('formCategoria').style.display = 'none';
                document.getElementById('formDominio').style.display = 'line';
                document.getElementById('formDimension').style.display = 'none';
                document.getElementById('nuevoNombre').style.display = 'none';*/
                $('#tituloModal').html('Dominio');
                $('#formCategoria').hide();
                $('#formDominio').show();
                $('#formDimension').hide();
                $('#nuevoNombre').hide();
                $('#opciones').modal('show');
                } else{ 
                    if (num == 3){
                        /*document.getElementById('formCategoria').style.display = 'none';
                        document.getElementById('formDominio').style.display = 'none';
                        document.getElementById('formDimension').style.display = 'line';
                        document.getElementById('nuevoNombre').style.display = 'none';*/
                        $('#tituloModal').html('Dimensión');
                        $('#formCategoria').hide();
                        $('#formDominio').hide();
                        $('#formDimension').show();
                        $('#nuevoNombre').hide();
                        $('#opciones').modal('show');
                    }
                }
            }


            
        }
        function agregar(num){
            if (num == 1){
                $('#nuevoNombre').show();
                $('#btnAgregar').show();
                $('#btnEliminar').hide();
                $('#btnEditar').hide();
            } else if (num == 2){
                $('#nuevoNombre').show();
                $('#btnAgregar').hide();
                $('#btnEliminar').show();
                $('#btnEditar').show();
            }
        }
    </script>
@endsection