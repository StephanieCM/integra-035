@extends('layouts.app')
@section('content_header')  
@endsection
@section('content')
    <!--card para editar preguntas-->
    <div class="card">
        <div class="card-header">
            <h3><i>Editar pregunta</i><button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#confirmaEliminar">Eliminar</button></h3>
        </div>
        <form action="{{url('/pregunta/update')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <input type="hidden" name="idPregunta" value="{{$pregunta->idPregunta}}">
                    <div class="col-md-6">
                        <label for="pre">Nombre</label>
                        <textarea class="form-control" name="nomPre" id="pre" placeholder="Se requiere la pregunta" required>{{$pregunta->nombre}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="fo">Folio</label>
                        <input type="number" name="folio" id="fo" class="form-control" value="{{$pregunta->folio}}">
                        <div class="custom-control custom-checkbox mt-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"  name="estatus" @if ($pregunta->estatus == true)
                                checked
                            @endif>
                            <label class="custom-control-label" for="customCheck1">Pregunta Activa</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sEncuesta" id="">
                            <option value="{{$pregunta->encuesta}}" selected>Encuesta {{$pregunta->encuesta}}</option>
                            <option value="1">Encuesta 1</option>
                            <option value="2">Encuesta 2</option>
                            <option value="3">Encuesta 3</option>
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una escuesta
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sCategoria" id="">
                            <option value=" " selected>Categoría</option>
                            @foreach ($categoria as $cat)
                                @if ($catPre != null && $cat->idCategoria == $catPre->idCategoria)
                                    <option value="{{$catPre->idCategoria}}" selected>{{$catPre->nombre}}</option>                                    
                                @else
                                    <option value="{{$cat->idCategoria}}" >{{ $cat->nombre}}</option>     
                                @endif
                            @endforeach    
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una categoría
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sDominio" id="">
                            <option value=" " selected>Dominio</option>
                            @foreach ($dominio as $dom)
                                @if ($domPre != null && $dom->idDominio == $domPre->idDominio)
                                    <option value="{{$domPre->idDominio}}" selected>{{$domPre->nombre}}</option>
                                @else
                                    <option value="{{$dom->idDominio}}" >{{ $dom->nombre}}></option>
                                @endif
                            @endforeach
                        </select>
                        <small class="form-text text-muted">
                            Selecciona un dominio
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sDimension" id="">
                            <option value=" " selected>Dimension</option>
                            @foreach ($dimension as $dim)
                                @if ($dimPre != null && $dim->idDimension == $dimPre->idDimension)
                                    <option value="{{$dimPre->idDimension}}" selected>{{$dimPre->nombre}}</option>                                   
                                @else
                                    <option value="{{$dim->idDimension}}" >{{ $dim->nombre}}</option>        
                                @endif
                            @endforeach
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una dimensión
                        </small>
                    </div>
                </div>
                <hr>
                @if (count($ponderacion)== 0)
                    <h4>Esta pregunta no tiene Respuestas, agrega alguna</h4>
                    <div class="field_wrapper">
                        <div class="form-inline">
                            <input type="text" name="nombres[]" class="form-control mb-2 col-md-7" placeholder="Nombre"/>
                            <input type="number" name="ponderacion[]" class="form-control mx-sm-3 mb-2" placeholder="ponderación"/>
                            <a href="javascript:void(0);" class="add_button" title="Agregar Pregunta"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                @else
                <h3>Respuestas</h3>
                <div class="field_wrapper">
                    <div class="form-inline">
                        <input type="hidden" name="idRes[]" value="{{$ponderacion[0]->idPonderacion}}">
                        <input type="text" name="nombres[]" value="{{$ponderacion[0]->respuesta}}" class="form-control mb-2 col-md-7" placeholder="Nombre"/>
                        <input type="number" name="ponderacion[]" value="{{$ponderacion[0]->valor}}" class="form-control mx-sm-3 mb-2" placeholder="ponderación"/>
                        <a href="javascript:void(0);" class="add_button pr-2" title="Agregar Pregunta"><i class="fas fa-plus-circle"></i></a>
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="borrar[]" id="inlineCheckbox1" value="{{$ponderacion[0]->idPonderacion}}">
                            <label class="form-check-label" for="inlineCheckbox1"><i class="far fa-trash-alt text-danger"></i></label>
                          </div>
                    </div>
                    @for ($pon=1;$pon<count($ponderacion);$pon++)
                    <div class="form-inline">
                        <input type="hidden" name="idRes[]" value="{{$ponderacion[$pon]->idPonderacion}}">
                        <input type="text" name="nombres[]" value="{{$ponderacion[$pon]->respuesta}}" class="form-control mb-2 col-md-7" placeholder="Nombre"/>
                        <input type="number" name="ponderacion[]" value="{{$ponderacion[$pon]->valor}}" class="form-control mx-sm-3 mb-2" placeholder="ponderación"/>   
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="borrar[]" id="{{$ponderacion[$pon]->idPonderacion}}" value="{{$ponderacion[$pon]->idPonderacion}}">
                            <label class="form-check-label" for="{{$ponderacion[$pon]->idPonderacion}}"><i class="far fa-trash-alt text-danger"></i></label>
                          </div>
                    </div>
                    @endfor
                </div>
                @endif
                
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="gestion">Regresar</a>
                <button type="submit" class="btn btn-info float-right">Editar</button>
            </div>
        </form>
    </div>
    <div class="modal fade" id="confirmaEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Si la pregunta ya fue respondida por un usuario no podra ser eliminada. 
            </div>
            <div class="modal-footer">
                <form action="{{url('/pregunta/delete')}}" method="post">
                    @csrf
                    <input type="hidden" name="borrar" value="{{$pregunta->idPregunta}}">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Continuar</button> 
                </form>
            </div>
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
            
            //agregar botones
            
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div class="form-inline"><input type="text" name="nombres[]"class="form-control mb-2 col-md-7"  placeholder="Nombre"/><input type="number" name="ponderacion[]" class="form-control mx-sm-3 mb-2" placeholder="ponderación"/><a href="javascript:void(0);" class="remove_button" title="Eliminar"><i class="far fa-trash-alt text-danger"></i></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });

        });
    </script>
@endsection