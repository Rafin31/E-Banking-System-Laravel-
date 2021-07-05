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
<center> <h1 class="card-title">Transactions Lists</h4>  </center>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Transactions Lists</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>

                            <tr>
                                <td> Transaction ID </td> 
                                <td> Current Balance </td> 
                                <td>Credit </td> 
                                <td> Credit Type </td> 
                                <td>Debit </td> 
                                <td> Debit Type</td> 
                                <td> Transactions Date/Time  </td> 
                              
                            </tr>
                            @foreach ($translist as $users) 
    
                        <tr>
                                <td> {{$users['id']}} </td> 
                                <td> {{$users['current_balance']}} </td> 
                                <td>  <font color="green"> {{$users['credit']}} </font>  </td>
                                 <td> {{$users['credit_type']}} </td>
                                 <td> <font color="red"> {{$users['debit']}}  </font>   </td>
                                 <td> {{$users['debit_type']}} </td>
                                    <td> <font color="blue"> {{$users['transactions_date/time']}} </font>   </td>

                             
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