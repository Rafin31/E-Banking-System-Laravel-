<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('style.css')}}"/>

@include('sidebar.sidebar')

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">User List</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<center> <h1 class="card-title">Client Lists</h4>  </center>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Client Lists</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>

                            <tr>
                                <td> ID </td> 
                                <td> Account Balance </td> 
                                <td> Account Type </td> 
                                <td> Nid Verification Number </td> 
      
                                <td> Account Status </td> 
                                <td colspan="3"> Operations </td> 
                            </tr>
                            @foreach ($clientlist as $users) 
    
                        <tr>
                                <td> {{$users['id']}} </td> 
                                <td> {{$users['account_balance']}} </td> 
                                <td> {{$users['account_type']}} </td>
                                 <td> {{$users['nid_varification']}} </td>
                                <td> <font color="green"> {{$users['account_status']}} </font> </td>
                                <td> <a href="user/block/{{$users['id']}}">   <input type="submit" class="btn-outline-success" value="Block" ></a> </td>
                        </tr>

                                @endforeach
                            </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </htmnl>