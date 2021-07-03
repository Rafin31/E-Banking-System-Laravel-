<?php

use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;
use App\Models\requestsModel;
use App\Models\clientmodel;


if (session('user_type') == 'admin') {
                //-----------------statistics--------------------------
                $client_number = clientmodel::where('user_type', '<=', 'clients')
                                             ->where('account_Status', '<=', 'active')
                                             ->count();
                $inactive_number = clientmodel::where('user_type', '!=', 'clients')
                                             ->where('account_Status', '<=', 'inactive')
                                             ->count();
                $request_number = requestsModel::where('status', '<=', 'Pending')->count();
                $pending_user = usersModel::where('account_Status',  'pending')->count();


                $data = [
                    'client_number' =>  $client_number,
                    'stuff_number' => $stuff_number,
                    'request_number' => $request_number,
                    'pending_user'   => $pending_user
                ];
             
            }else {
                $data = [
                    'client_number' =>  0,
                    'stuff_number' => 0,
                    'request_number' => 0
                ];
            }
?>


<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Welcome | Dashbord "] )

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('head.nav_header')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('head.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('managersideBar.managersideBar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-1">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Active Clients</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">{{$data['client_number']}}</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-2">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Active Stuff</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white"> {{$data['stuff_number']}}</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-3">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Pending Requests</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">{{$data['request_number']}}</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-4">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Pending User</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">0</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #/ container -->
            </div>
        </div>
    </div>



    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts')

</body>

</html>