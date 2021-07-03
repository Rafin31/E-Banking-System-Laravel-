<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('style.css')}}"/>

@include('sidebar.sidebar')

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Profile </a></li>
        </ol>
    </div>
</div>
<!-- row -->
<center> <h1 class="card-title">Profile </h4>  </center>
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
                    <h4 class="card-title">Profile </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>

                            
                           
                            <tr>  <td> ID </td>      <td> {{session('user_id')}} </td> </tr> 
                               
                                <tr> <td>  UserName </td>   <td> {{session('user_name')}} </td>  </tr>
                                <tr> <td> Type  </td>    <td> {{session('user_type')}} </td>  </tr>
                               
      
                            
                             
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