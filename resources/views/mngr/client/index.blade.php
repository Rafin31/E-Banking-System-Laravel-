<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('headermngr.headernav')

        <center>
        <div class="container mt-5">
		<div class="d-flex justify-content-between mb-2">
	        <p><strong>Client List</strong></p><br> <hr> 
	        <a class="btn btn-primary" href="{{ url('manager/clients?export=pdf') }}"> <input type="submit" class="btn-outline-success" value="Export to PDF" > <br> <hr>
</a>
	    </div> <br> <hr>   
        
        
        
        <table class="table table-bordered mb-5" border="2px">
	        <thead>
	            <tr>
	                <th scope="col">ID</th>
	                <th scope="col">Balance</th>
	                <th scope="col">Account Type</th>
	                <th scope="col">NID Verification Number</th>
                    <th scope="col">Account Status  </th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($clientlist as $row)
	            <tr>
	                <td>{{ $row->id }}</td>
	                <td>{{ $row->account_balance }}</td>
	                <td>{{ $row->account_type }}</td>
	                <td>{{ $row->nid_varification }}</td>
                    <td>{{ $row->account_status }}</td>
                  
	            </tr>
	            @endforeach
	        </tbody>
	    </table> 
    </center>
	</div>