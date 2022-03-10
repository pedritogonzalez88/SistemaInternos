@extends('adminlte::page')

@section('title','Nuevo')

@section('content-header')
@stop

@section('content')
    <div class="card card-gray-dark">
        <div class="card-header">
            <h3 class="card-title">Agregar Nuevo Usuario de Interno</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="Nombres">Nombres</label>
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Ingrese su Nombre y Apellido">
                </div>
                <div class="form-group">
                    <label for="Interno">Nro de Interno</label>
                    <input type="text" class="form-control" id="Interno" name="Interno" placeholder="Nro de Interno">
                </div>
                <div class="form-group">
                    <label for="Email">Correo Electronico</label>
                    <input type="Email" class="form-control" id="Email" name="Email" placeholder="Ingrese su Correo">
                </div>
                <div class="form-group">
                    <label for="Departamento">Seccion o Area</label>
                    <input type="text" class="form-control" id="Departamento" name="Departamento" placeholder="Ingrese su Departamento">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Agregar</button>
            </div>
        </form>
    </div>
@stop
