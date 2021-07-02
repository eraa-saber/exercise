<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('home') }}",
                data: function (d) {
                    d.state = $('#state').val(),
                        d.country = $('#country').val(),
                        d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'country_name', name: 'country_name'},
                {data: 'name', name: 'name'},
                {data: 'state', name: 'state'},
                {data: 'code', name: 'code'},
                {data: 'phone', name: 'phone'}
            ]
        });

        $('#state').change(function(){
            table.draw();
        });
        $('#country').change(function(){
            table.draw();
        });

    });
</script>