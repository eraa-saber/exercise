<!DOCTYPE html>
<html>
<head>
    <title>Phone Numbers Task</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Phone Numbers</h1>

    <div class="card">
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label><strong>Select Country :</strong></label>
                <select id='country' class="form-control" style="width: 200px">
                    <option value="">--Select Status--</option>
                    @foreach($countries as $key=>$country)
                        <option value="{{$country}}">{{$country}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label><strong>Select State:</strong></label>
                <select id='state' class="form-control" style="width: 200px">
                    <option value="">--Select State--</option>
                    <option value="OK">Valid Phone Numbers</option>
                    <option value="NOK">Invalid Phone Numbers</option>
                </select>
            </div>
        </div>
    </div>

    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>NO</th>
            <th>Country</th>
            <th>Name</th>
            <th>State</th>
            <th>Country Code</th>
            <th>Phone</th>

        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

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
</html>