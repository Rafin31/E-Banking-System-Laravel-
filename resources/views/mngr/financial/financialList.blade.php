<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('style.css')}}"/>

@include('headermngr.headernav')

@include('managersideBar.managersideBar')
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
<center> <h1 class="card-title">Finalcials </h4>  </center>
        <style> .btn-outline-fail {
        color: #ec5541;
        background-color: transparent;
        background-image: none;
        border-color: #ec5541; 
        width:120px;
        }
         </style> 
 
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Financials </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>

                            <tr>
                           
                                <td> Month </td> 
                               
                                <td> Profit  </td> 
                                <td> Loss </td> 
      
                        
                                <td colspan="3"> Operations </td> 
                            </tr>
                            @foreach ($finanlciallist as $users) 
    
                        <tr>
                                <td> {{$users['month']}} </td> 
                                <td> {{$users['profit']}} </td> 
                                <td> {{$users['loss']}} </td>
                                
                                <td> <a href="/manager/blockclient/{{$users['id']}}">   <input type="submit" class="btn-outline-success" value="Calculate" ></a> </td>
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