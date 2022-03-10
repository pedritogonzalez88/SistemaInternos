@extends('adminlte::page')

@section('', 'Dashboard')

@section('content_header')
    <h1 class="text-left">Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.create') }}" class="btn btn-primary btn-lg">Nuevo</a>
                    </div>
                    <div class="card-body">
                        <table id="dataInter" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Nro De Interno</th>
                                <th>Correo Institucional</th>
                                <th>Seccion/Departamento</th>
                                 <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listaInterno as $interno)
                                <tr>
                                    <td>{{ $interno->id }}</td>
                                    <td>{{ $interno->Nombres }}</td>
                                    <td>{{ $interno->Interno }}</td>
                                    <td>{{ $interno->Email }}</td>
                                    <td>{{ $interno->Departamento }}</td>
                                    <td>
                                        <a href="{{route('admin.edit', $interno)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a> |
                                        <form method="post" action="{{route('admin.delete', $interno)}}">
                                            @csrf
                                            @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(function() {
            $('#dataInter').DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#dataInter_wrapper .col-md-6:eq(0)');
        });
    </script>
@stop
