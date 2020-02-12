@extends('layouts.app')
@section('content_header')
    
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
                    <i class="fas fa-folder-open"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="abrirModal(1)">ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>Dominio</h3>
                    <p><i>agregé,edité o eliminé</i></p>
                </div>
                <div class="icon">
                    <i class="fas fa-layer-group"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="abrirModal(2)">ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>Dimensión</h3>
                    <p><i>agregé,edité o eliminé</i></p>
                </div>
                <div class="icon">
                    <i class="fas fa-tag fa-2x"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="abrirModal(3)">ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Preguntas</h3>
                    <p><i>edité o eliminé</i></p>
                </div>
                <div class="icon">
                    <i class="fas fa-question"></i>
                </div>
                <a href="gestion" class="small-box-footer">ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            <h3><i>Agregar una nueva pregunta</i></h3>
        </div>
        <form action="{{url('pregunta/add')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="pre">Nombre</label>
                        <textarea class="form-control" name="nomPre" id="pre" placeholder="Se requiere la pregunta" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="fo">Folio</label>
                        <input type="number" name="folio" id="fo" class="form-control" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sEncuesta">
                            <option value="" selected>Encuesta</option>
                            <option value="1">Encuesta 1</option>
                            <option value="2">Encuesta 2</option>
                            <option value="3">Encuesta 3</option>
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una escuesta
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sCategoria">
                            <option value="" selected>Categoría</option>
                            @foreach ($categoria as $cat)
                            <option value="{{$cat->idCategoria}}" >{{ $cat->nombre}}</option>
                            @endforeach    
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una categoría
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sDominio">
                            <option value="" selected>Dominio</option>
                            @foreach ($dominio as $dom)
                            <option value="{{$dom->idDominio}}" >{{ $dom->nombre}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">
                            Selecciona un dominio
                        </small>
                    </div>
                    <div class="col-lg">
                        <select class="custom-select busqueda" name="sDimension">
                            <option value="" selected>Dimensión</option>
                            @foreach ($dimension as $dim)
                            <option value="{{$dim->idDimension}}" >{{ $dim->nombre}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">
                            Selecciona una dimensión
                        </small>
                    </div>
                </div>
                <hr>
                <h3>Respuestas</h3>
                <div class="field_wrapper">
                    <div class="form-inline">
                        <input type="text" name="nombres[]" value="" class="form-control mb-2 col-md-7" placeholder="Nombre" required/>
                        <input type="number" name="ponderacion[]" value="" class="form-control mx-sm-3 mb-2" placeholder="ponderación" required/>
                        <a href="javascript:void(0);" class="add_button" title="Agregar respuesta   "><i class="fas fa-plus-circle"></i></a>
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
            <form action="" method="POST" id="form-opciones" class="form-validation">
                @csrf
                <div class="modal-body">
                    <div class="container">
                        <p>Selecciona para editar o eliminar, o crea una nueva</p>
                        <div class="row" id="formCategoria">
                            <div class="col">
                                <select name="sCategoria" id="sCategoria" class="custom-select" required>
                                    <option value=" " selected>Categoría</option>
                                    @foreach ($categoria as $cat)
                                    <option value="{{$cat->idCategoria}}">{{ $cat->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregar(1)">Nueva</button>
                            </div>  
                        </div> 
                        <div class="row" id="formDominio">
                            <div class="col">
                                <select name="sDominio" id="sDominio" class="custom-select" required>
                                    <option value=" " selected>Dominio</option>
                                    @foreach ($dominio as $dom)
                                    <option value="{{$dom->idDominio}}">{{ $dom->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregar(1)">Nueva</button>
                            </div> 
                        </div> 
                        <div class="row" id="formDimension">
                            <div class="col">
                                <select name="sDimension" id="sDimension" class="custom-select" required>
                                    <option value=" " selected>Dimensión</option>
                                    @foreach ($dimension as $dim)
                                    <option value="{{$dim->idDimension}}">{{ $dim->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregar(1)">Nueva</button>
                            </div>   
                        </div>
                        <div class="row" id="nuevoNombre">
                            <label for="" id="etqNom">Nombre:</label>
                            <input type="text" name="txtNombre" class="form-control" required >
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" id="btnEliminar" onclick="metodo(1)">Eliminar</button>
                    <button type="submit" class="btn btn-warning" id="btnEditar" onclick="metodo(2)">Editar</button>
                    <button type="submit" class="btn btn-success" id="btnAgregar" onclick="metodo(3)">Agregar</button>
                  </div>
            </form>
          </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            var url = "";
            $('.busqueda').select2({
                theme:'classic'
            });
            var resultado = '<?php echo(session()->has("msj")); ?> ';
            if(resultado  == true ){
                
                toastr.success("Guardado Correcto","Exito",{
                    "progressBar": true
                })
                
            }
            var pregunta = '<?php echo(session()->has("msjp")); ?> ';
            if(pregunta  == true ){
                
                toastr.success("Pregunta Guardada","Exito",{
                    "progressBar": true
                })
                
            }
            //agregar botones
            
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div class="form-inline"><input type="text" name="nombres[]"class="form-control mb-2 col-md-7"  placeholder="Nombre"/><input type="number" name="ponderacion[]" class="form-control mx-sm-3 mb-2" placeholder="ponderación"/><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="far fa-trash-alt text-danger"></i></a></div>'; //New input field html 
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

            cargaBotones();
        });
        function abrirModal(num){

            /*document.getElementById('btnEliminar').style.display = 'none';
            document.getElementById('btnEditar').style.display = 'none';
            document.getElementById('btnAgregar').style.display = 'none';*/
            $('#btnEliminar').hide();
            $('#btnEditar').hide();
            $('#btnAgregar').hide();
            url ="";
           
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
                url = '{{url('')}}/categoria';
                ///$('#form-opciones').attr('action','{{url('')}}/categoria');
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
                url = '{{url('')}}/dominio';
                //$('#form-opciones').attr('action','{{url('')}}/dominio');
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
                        url = '{{url('')}}/dimension';
                        //$('#form-opciones').attr('action','{{url('')}}/dimension');
                        $('#opciones').modal('show');
                    }
                }
            }     
        }
        function cargaBotones(){
            $('#sCategoria').change(function() {
                if(this.value != 0)
                    agregar(2);
                else
                    agregar(0);
            });
            $('#sDominio').change(function() {
                if(this.value != 0)
                    agregar(2);
                else
                    agregar(0);
            });
            $('#sDimension').change(function() {
                if(this.value != 0)
                    agregar(2);
                else
                    agregar(0);
            });
        }
        function agregar(num){
            if(num == 0){
                $('#nuevoNombre').hide();
                $('#btnAgregar').hide();
                $('#btnEliminar').hide();
                $('#btnEditar').hide();
            }
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
        function metodo(valor){
            if (valor == 1){
                url = url+'/destroy';
                $('#form-opciones').attr('action',url);
                $('#form-opciones').submit();
            } else if (valor == 2){
                //$('#metodo').append('<input type="hidden" name="_method" value="PUT">');
                url = url+'/update';
                $('#form-opciones').attr('action',url);
                $('#form-opciones').submit();
            }else if (valor == 3){
                $('#form-opciones').attr('action',url);
                $('#form-opciones').submit();
            }
        }
    </script>
@endsection