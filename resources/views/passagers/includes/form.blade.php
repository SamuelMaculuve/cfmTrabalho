<div class="card-block">
    <form method="POST" action="{{ route('passagers.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Nome <span class="required">*</span></label>
                    <input class="form-control border-form-control" required="required" name="name" value="" placeholder="Insira primeiro nome" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Apelido <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="surname" value="" placeholder="Insira apelido" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Ocupação <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="occupation" value="" placeholder="Insira apelido" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-right">
                <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                <button type="submit" class="btn btn-success border-none"> Salvar alterações </button>
            </div>
        </div>
    </form>
</div>
