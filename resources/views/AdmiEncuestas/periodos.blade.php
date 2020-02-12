@extends('layouts.app')
@section('content_header')
@endsection
@section('content')
    <div class="card">
        <div class="card-header"><h3><i>Asigna un nuevo Periodo</i></h3></div>
        <form action="{{url('/periodos/add')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <input type="text" name="txtNombre" id="" class="form-control" placeholder="Nombre del Periodo" required>
                        <small class="form-text text-muted">
                            Asigna un nombre al periodo
                        </small>
                    </div>
                    <div class="col">
                        <input type="date" name="txtInicio" id="" class="form-control" required>
                        <small class="form-text text-muted">
                            Cuando inicia 
                        </small>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="txtFin" id="" required>
                        <small class="form-text text-muted">
                            Cuando termina
                        </small>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success">Agregar</button>
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Final</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($periodos as $per)
                    <tr>
                    <form action="{{url('/periodos/update')}}" method="post">
                        @csrf
                        <td><input type="text" class="form-control" name="nom" id="" value="{{$per->nombre}}" required> <input type="hidden" name="id" value="{{$per->idPeriodo}}"> </td>
                        <td><input type="date" class="form-control" name="ini" id="" value="{{$per->fechaInicio}}" required></td>
                        <td><input type="date" class="form-control" name="fin" id="" value="{{$per->fechaFin}}" required></td>
                        <td class="text-center">
                            <div class="form-check mt-2">
                                <input type="checkbox" class="form-check-input" id="customCheck1"  name="estatus" @if ($per->estatus == true)
                                checked
                                @endif>     
                            </div>
                        </td>
                        <td class="text-center"><button type="submit" class="btn btn-light"><i class="fas fa-edit text-warning" title="Editar"></i></button></td>
                    </form>
                    @endforeach
                        </tr>
                </tbody>
              </table>    
        </div>
    </div>
    
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
        var add = '<?php echo(session()->has("peAdd")); ?> ';
            if(add  == true ){
                toastr.success("Periodo Agregado","Exito",{
                    "progressBar": true
                })
                
            }
        var upd = '<?php echo(session()->has("peUpd")); ?> ';
        if(upd  == true ){
            toastr.success("Periodo Actualizado","Exito",{
                "progressBar": true
            })
                
        }         
    });
    </script>
@endsection