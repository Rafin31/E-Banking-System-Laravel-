<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <h2 class="mb-3">Client List</h2>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Account Balance</th>
        <th>Account Type</th>
        <th>NID Verification</th>
        <th> Account Status</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->account_balance}}</td>
            <td>{{ $row->account_type}}</td>
            <td>{{ $row->nid_varification}}</td>
            <td>@if($row->account_status=='Inactive' || $row->account_status=='inactive' )
                                <font color="red"> {{$row->account_status}} </font>
                                @else
                                 <font color="green"> {{$row->account_status}} </font> 
                                 @endif</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>