@extends('layouts.app')
@section('content_header')
@endsection
@section('content')
    <div class="card">
        <div class="card-header"><i>Buscar por</i></div>
        <form action="{{url('busqueda')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <select name="categoria" id="" class="custom-select busqueda">
                            <option value="">Categoría</option>
                            @foreach ($categoria as $cat)
                            <option value="{{$cat->idCategoria}}">{{$cat->nombre}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select name="dominio" id="" class="custom-select busqueda">
                            <option value="">Dominio</option>
                            @foreach ($dominio as $dom)
                            <option value="{{$dom->idDominio}}">{{$dom->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select name="dimension" id=""  class="custom-select busqueda">
                            <option value="">Dimensión</option>
                            @foreach ($dimension as $dim)
                            <option value="{{$dim->idDimension}}">{{$dim->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select name="encuesta" id=""  class="custom-select busqueda">
                            <option value="">Encuesta</option>
                            <option value="1">Encuesta 1</option>
                            <option value="2">Encuesta 2</option>
                            <option value="3">Encuesta 3</option>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success">Buscar</button>
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
                    <th scope="col">Estatus</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($preguntas as $pre)
                    <tr>
                        <th class="text-center" scope="row">{{$pre->folio}}</th>
                        <td class="text-center">{{$pre->encuesta}}</td>
                        <td>{{$pre->nombre}}</td>
                        @if ($pre->estatus == true)
                        <td class=" text-success">Activo</td>
                        @else
                        <td class="text-danger">Inactivo</td>
                        @endif
                        <td>
                            <form action="/editarPregunta" method="POST">
                                @csrf
                                <input type="hidden" name="idPregunta" value="{{$pre->idPregunta}}">
                                <button type="submit" class="btn btn-light"><i class="fas fa-edit text-warning"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>    
        </div>
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="editarPreguntas" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <hr>
                        <div class="form-row">
                            <div class="col-lg">
                                <select class="custom-select" name="" id="">
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
                                <select class="custom-select" name="" id="">
                                    <option value="" selected>Categoría</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                                <small class="form-text text-muted">
                                    Selecciona una categoría
                                </small>
                            </div>
                            <div class="col-lg">
                                <select class="custom-select" name="" id="">
                                    <option value="" selected>Dominio</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                                <small class="form-text text-muted">
                                    Selecciona un dominio
                                </small>
                            </div>
                            <div class="col-lg">
                                <select class="custom-select" name="" id="">
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
                        <div class="field_wrapper">
                            <div class="form-inline">
                                <input type="text" name="nombres[]" value="" class="form-control mb-2 col-md-6" placeholder="Nombre"/>
                                <input type="number" name="ponderacion[]" value="" class="form-control col-md-3 mb-2" placeholder="ponderación"/>
                                <a href="javascript:void(0);" class="add_button" title="Agregar Respuesta"><i class="fas fa-plus-circle"></i></a>
                                <a href="javascript:void(0);" class="remove_button" title="Eliminar Respuesta"><i class="far fa-trash-alt text-danger"></i></a>
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
    </div> --}}
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
        var update = '<?php echo(session()->has("update")); ?> ';
            if(update  == true ){
                toastr.success("Pregunta Actualizada","Exito",{
                    "progressBar": true
                })
                
            }        
    });
    </script>
@endsection