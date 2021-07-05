<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('style.css')}}"/>

@include('headermngr.headernav')

@include('mngr_sidebar.mngr_sidebar')
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
<center> <h1 class="card-title">Applications Lists</h4>  </center>
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
                                <td>  Request ID </td> 
                                <td> description </td> 
                                <td colspan="3"> Operations </td> 
                            </tr>
                            @foreach ($reqlist as $users) 
    
                        <tr>
                                <td> {{$users['id']}} </td> 
                                <td> {{$users['request_id']}} </td> 
                                <td> {{$users['description']}} </td>
                                <td> <a href="manager/blockclient/{{$users['id']}}">   <input type="submit" class="btn-outline-success" value="Accept" ></a> </td>
                                <td> <a href="manager/application/delete/{{$users['id']}}">   <input type="submit" class="btn-outline-success" value="Delete" ></a> </td>

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