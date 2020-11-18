<div class="mail-body-header">
    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
        <i class="fa fa-exclamation-circle"></i>
    </button>
    <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
        <i class="fa fa-inbox"></i>
    </button>

    <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Bilhete
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item waves-effect waves-light" href="{{ route('tickets.index') }}" >Nova</a>
            <a class="dropdown-item waves-effect waves-light" href="{{ route('tickets.index') }}" >Todos</a>
        </div>
    </div>
</div>
