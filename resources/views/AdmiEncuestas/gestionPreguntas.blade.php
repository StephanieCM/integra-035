@extends('layouts.app')
@section('conten_header')
@endsection
@section('content')
    <div class="card">
        <div class="card-header"><i>Buscar por</i></div>
        <form action="">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <select name="" id="" class="custom-select busqueda">
                            <option value="">Categoría</option>
                            <option value="">cate 1</option>
                            <option value="">cate2</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="" id="" class="custom-select busqueda">
                            <option value="">Dominio</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="" id=""  class="custom-select busqueda">
                            <option value="">Dimensión</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="" id=""  class="custom-select busqueda">
                            <option value="">Encuesta</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card ">
        <div class="table-responsive p-3">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Encuesta</th>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="#"><i class="fas fa-edit fa-lg text-warning" data-toggle="modal" data-target="#editarPreguntas"></i></a>
                        <a href="#" class="pl-4"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>    
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarPreguntas" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tituloModal">Editar Pregunta</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="">
                    <div class="modal-body">
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
                                <select class="form-control busqueda" name="" id="">
                                    <option value="" selected>Dimensión</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                                <small class="form-text text-muted">
                                    Selecciona una dimensión
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning" id="btnEditar">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
        $('.table').DataTable({"language":{
            "sProcessing":     "Procesando...",
            "lengthMenu":      "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ preguntas",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 preguntas",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
          }
          
        });
        $('.busqueda').select2({
            theme:'classic'
        });        
    });
    </script>
@endsection