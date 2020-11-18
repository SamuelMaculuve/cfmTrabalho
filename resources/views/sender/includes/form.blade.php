<div class="card-block">
    <form method="POST" action="/">
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
                    <label class="control-label">Telefone <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="surname" value="" placeholder="Insira apelido" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Destinatario <span class="required">*</span></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>                </div>
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
