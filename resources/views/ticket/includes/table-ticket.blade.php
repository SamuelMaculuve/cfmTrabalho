<div class="dt-responsive table-responsive">
    <table id="compact" class="table compact table-striped table-bordered nowrap">
        <thead>
        <tr>
            <th>Action</th>
            <th>Local de Partida</th>
            <th>Local de Destino</th>
            <th>Preço</th>

        </tr>
        </thead>
        <tbody>

       @foreach($tickets as $ticket)
            <tr>
                <td align="center"><a href="/employees/{{ $ticket->id }}/edit"><i class="feather icon-edit"></i></a></td>
                <td>{{$ticket->from}}</td>
                <td>{{$ticket->to}}</td>
                <td>{{$ticket->price}}</td>
          @endforeach
        </tbody>
    </table>
</div>
