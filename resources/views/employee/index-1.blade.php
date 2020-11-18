@extends('layouts.base')
@section('titulo', '')
@section('content')
<div class="page-wrapper">
        <!-- Page-body start -->
<div class="page-body">
    <div class="page-body">
        @include('employee.breadcrumb')
            <div class="card">
                <div class="card-header">
                    <h5>Tipos de  Funcionarios - Tabela de Tipos de Funcionarios</h5>
                    <span>As is described by the basic DOM positioning example you can use the dom initialization parameter to move DataTables features around the table to where you want them.</span>
                </div>
                <div class="card-block">

                    <div class="dt-responsive table-responsive">
                        <table id="compact" class="table compact table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>Documento</th>
                                <th>Tipo de documento</th>
                                <th>Tipo de Funcionario</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Telefone</th>
                                <th>Nacionalidade</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($employees as $employee)
                                <tr>
                                    <td align="center"><a href="/employees/{{ $employee->id }}/edit"><i class="feather icon-edit"></i></a></td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->surname}}</td>
                                    <td>{{$employee->document_type}}</td>
                                    <td>{{$employee->document_name}}</td>
                                    <td>{{$employee->client_type}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>{{$employee->telefone}}</td>
                                    <td>{{$employee->nationality}}</td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @include('client-type.modelCreate')
</div>
@endsection
