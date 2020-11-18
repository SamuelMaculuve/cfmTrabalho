<div class="card-block">
    <form method="POST" action="{{ route('recipients.store') }}">
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
                    <input class="form-control border-form-control"  required="required" name="telephone" value="" placeholder="Insira apelido" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Telefone <span class="required">*</span></label>
                    <input class="form-control border-form-control"  required="required" name="person_contacts_id" value="1" placeholder="Insira apelido" type="text">
                </div>
            </div>
{{--            <div class="col-sm-6">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlSelect2">Example multiple select</label>--}}
{{--                    <select name="person_contacts_id"  class="form-control" id="exampleFormControlSelect2">--}}
{{--                        <option value="1">dd</option>--}}
{{--                        @foreach($personContacts as $personContact)--}}
{{--                            <option value="{{$personContacts->id}}">{{ $personContacts->name }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        <div class="row">
            <div class="col-sm-12 text-right">
                <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                <button type="submit" class="btn btn-success border-none"> Salvar alterações </button>
            </div>
        </div>
    </form>
</div>
