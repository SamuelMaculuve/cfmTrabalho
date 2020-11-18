<div class="dt-responsive table-responsive">
    <table id="compact" class="table compact table-striped table-bordered nowrap">
        <thead>
        <tr>
            <th>Action</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Ocupaão</th>
        </tr>
        </thead>
        <tbody>

       @foreach($passagers as $passager)
            <tr>
                <td align="center"><a href="/employees/{{ $passager->id }}/edit"><i class="feather icon-edit"></i></a></td>
                <td>{{$passager->name}}</td>
                <td>{{$passager->surname}}</td>
                <td>{{$passager->occupation}}</td>

        @endforeach
        </tbody>
    </table>
</div>
