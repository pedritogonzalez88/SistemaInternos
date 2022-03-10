@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Lista de Internos</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Nro De Interno</th>
                                <th>Correo Institucional</th>
                                <th>Seccion/Departamento</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listaInterno as $inter)
                            <tr>
                                <td>{{ $inter->id }}</td>
                                <td>{{ $inter->Nombres }}</td>
                                <td>{{ $inter->Interno }}</td>
                                <td>{{ $inter->Email }}</td>
                                <td>{{ $inter->Departamento }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
