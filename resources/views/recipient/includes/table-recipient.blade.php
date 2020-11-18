<div class="dt-responsive table-responsive">
    <table id="compact" class="table compact table-striped table-bordered nowrap">
        <thead>
        <tr>
            <th>Action</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>person_contacts_id</th>
        </tr>
        </thead>
        <tbody>

        @foreach($recipients as $recipient)
            <tr>
                <td align="center"><a href="/employees/{{ $recipient->id }}/edit"><i class="feather icon-edit"></i></a></td>
                <td>{{$recipient->name}}</td>
                <td>{{$recipient->telephone}}</td>
                <td>{{$recipient->person_contacts_id}}</td>
        @endforeach
        </tbody>
    </table>
</div>
