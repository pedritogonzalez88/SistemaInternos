@extends('adminlte::page')

@section('', 'Dashboard')

@section('content_header')
    <h1 class="text-left">Editar</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <!-- form start -->
                    <form action="{{route('admin.update', $interno->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Nombres">Nombres</label>
                                <input type="text" class="form-control" id="Nombres" name="Nombres"
                                       placeholder="Ingrese su Nombre y Apellido" value="{{$interno->Nombres}}">
                            </div>
                            <div class="form-group">
                                <label for="Interno">Nro de Interno</label>
                                <input type="text" class="form-control" id="Interno" name="Interno"
                                       placeholder="Nro de Interno" value="{{$interno->Interno}}">
                            </div>
                            <div class="form-group">
                                <label for="Email">Correo Electronico</label>
                                <input type="Email" class="form-control" id="Email" name="Email"
                                       placeholder="Ingrese su Correo" value="{{$interno->Email}}">
                            </div>
                            <div class="form-group">
                                <label for="Departamento">Seccion o Area</label>
                                <input type="text" class="form-control" id="Departamento" name="Departamento"
                                       placeholder="Ingrese su Departamento" value="{{$interno->Departamento}}">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
