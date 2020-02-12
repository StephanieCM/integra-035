@extends('layouts.app')
@section('content_header')
    <h2 class="text-center">Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos</h2>
@endsection

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="list-group">
            <a href="{{$seccion2 ? '#' : 'seccion1'}}" class="list-group-item list-group-item-action">
                Sección 1
                @if ($seccion2)
                    <i class="fas fa-check-circle float-right text-success"></i>
                @endif
            </a>
            {{-- <a href="/seccion1" class="list-group-item list-group-item-action">
                Sección 1
            </a> --}}
            @if ($seccion2)
                <a href="{{$contestado ? '#' : '/seccion2'}}" class="list-group-item list-group-item-action">
                    Sección 2
                    @if ($contestado)
                        <i class="fas fa-check-circle float-right text-success"></i>
                    @endif
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            var resultado = '<?php echo(session()->has("msj")); ?> ';
            if(resultado  == true ){
                /*toastr.warning("Sección ya contestada","¡Advertencia!",{
                    "progressBar": true
                });*/
                Toast.fire({
                    type: 'warning',
                    title: '&nbsp;&nbsp;¡Sección ya contestada!'
                })
            }
        });
    </script>
@endsection