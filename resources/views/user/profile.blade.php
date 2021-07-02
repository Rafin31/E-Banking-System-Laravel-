<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Profile "] )

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
        @include('sideBar.sideBar')
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="errors alert-success">{{session('msg')}}</div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{$user["user_name"]}}</h3>
                                        <p class="text-muted mb-0">{{$user["user_type"]}}</p>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-12 text-center">
                                        <a style="color: white" href="{{route('user.edit__profile')}}"
                                            class="btn btn-danger">
                                            Edit Profile</a>
                                        <a style="color: white" href="{{route('user.changePassword')}}"
                                            class="btn btn-danger w-auto"> Change Password</a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4>Profile Information</h4>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>

                                                            <th><strong class="text-dark mr-4">User Id</strong></th>
                                                            <th><strong class="text-dark mr-4">User Name</strong>
                                                            </th>
                                                            <th><strong class="text-dark mr-4">Email</strong></th>
                                                            <th><strong class="text-dark mr-4">Mobile</strong></th>
                                                            <th><strong class="text-dark mr-4">Address</strong></th>
                                                            <th><strong class="text-dark mr-4">User Type</strong>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td> {{ $user["id"] }} </td>
                                                            <td>{{$user["user_name"]}}</td>
                                                            <td> {{$user["email"]}}</td>
                                                            <td class="color-primary">{{$user["phone_number"]}}</td>
                                                            <td class="color-primary">{{$user["address"]}}</td>
                                                            <td><span
                                                                    class="badge badge-primary px-2">{{$user["user_type"]}}</span>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- #/ container -->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    @include('footer.footer')
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