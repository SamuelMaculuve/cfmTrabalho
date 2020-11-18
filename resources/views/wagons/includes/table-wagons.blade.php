<div class="dt-responsive table-responsive">

    <table id="compact" class="table compact table-striped table-bordered nowrap">
        <thead>
        <tr>
            <th>Action</th>
            <th>Capacidade</th>
            <th>Tara</th>
            <th>Peco bruto</th>
        </tr>
        </thead>
        <tbody>

        @foreach($vagao as $vaga)
            <tr>
                <td align="center"><a href="/employees/{{ $vaga->id }}/edit"><i class="feather icon-edit"></i></a></td>
                <td>{{$vaga->capacity}}</td>
                <td>{{$vaga->tara}}</td>
                <td>{{$vaga->gross_weight}}</td>
                <td>{{$vaga->train_id}}</td>
        @endforeach
        </tbody>


    </table>
</div>
