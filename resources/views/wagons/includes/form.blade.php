<div class="card-block">
    <form method="POST" action="{{ route('wagons.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Capacidade <span class="required">*</span></label>
                    <input class="form-control border-form-control" required="required" name="capacity" value="" placeholder="Insira primeiro nome" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Tara <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="tara" value="" placeholder="Insira apelido" type="text">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">gross_weight <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="gross_weight" value="" placeholder="Insira apelido" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">train_id <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="train_id" value="1" placeholder="Insira apelido" type="text">
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
