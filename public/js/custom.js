$(document).ready(function(){

    load_data();

    function load_data()
    {
        $('#order_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url:'{{ route("counters.index") }}',
            },
            dom: 'Bfrtip',
            // Configure the drop down options.
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            // Add to buttons the pageLength option.
            buttons: [
                'pageLength','excel','print','pdf'
            ],
            columns: [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "searchable":     false,
                    "data":           null,
                    "defaultContent": ''
                },
                {
                    data:'id',
                    name:'id'
                },
                {
                    data:'name',
                    name:'name'
                },
                {
                    data:'brand',
                    name:'brand'
                },
                {
                    data:'status',
                    name:'status'
                },
                {
                    data:'reference',
                    name:'reference'
                },

            ]
        });
    }




});
