<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                @if (session('message'))
                    @include('alerts.sucess-messages')
                @endif
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Tipos de Funcionarios</h5>
                    <span>Registar e Departamento</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb breadcrumb-title" style="">
                    <li class="breadcrumb-item"><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('employees.create') }}">Adicionar Funcionarios<i class="feather open-card-option icon-plus"></i></a> </li>
                    <li class="breadcrumb-item"><a data-toggle="modal" data-target="#default-Modal-createEmployee">Adicionar Departamento<i class="feather open-card-option icon-plus"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
    @include('employee.modelCreate')
</div>
