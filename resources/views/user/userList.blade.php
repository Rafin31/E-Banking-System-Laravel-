<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " User Lists "] )

<body>

    <style>
        .message {
            text-align: center;
            font-size: 25px;
        }
    </style>

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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="message alert-success">{{session("edit")}}</div>
                <div class="message alert-success">{{session("unblock")}}</div>
                <div class="message alert-danger">{{session("block")}}</div>
                <div class="message alert-danger">{{session("msg")}}</div>
                <div class="message alert-success">{{session("approve")}}</div>

                <div class="export w-100 ">
                    <a href="{{url('/dashbord/userList/export')}}" class="btn btn-dark p-2 w-100 mb-2">Export</a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" placeholder="Search">
                                    </div>
                                </form>

                                <h4 class="card-title">Client Lists</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Acount Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body">
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->user_name}}</td>
                                                <td><span class="badge badge-info px-2">{{$user->user_type}}</span>
                                                </td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone_number}}</td>
                                                <td>
                                                    @if ($user->account_Status == 'pending')
                                                    <span class="badge badge-warning px-2">
                                                        {{$user->account_Status}}</span>

                                                    @elseif ($user->account_Status == 'Block')
                                                    <span class="badge badge-danger px-2">
                                                        {{$user->account_Status}}</span>

                                                    @else
                                                    <span class="badge badge-success px-2">
                                                        {{$user->account_Status}}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Acount Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
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




    {{-- <script>
        $('body').on('keyup' , '#search',function () {
    var searchQuest = $(this).val();
    console.log(searchQuest);

    $.ajax({
        method: 'POST',
        url: '{{route("ajax")}}',
    dataType:'json',
    data:{
    '_token' : '{{csrf_token()}}',
    searchQuest: searchQuest,
    },
    success: function(res){
    var tableRow = '';
    $('#table_body').html('');

    $.each(res, function (index , value) {
    var tableRow = "<tr>
        <td>"+value.user_id+"</td>
    </tr>";

    $('#table_body').append(tableRow);
    });
    }

    });

    });


    </script> --}}




</body>

</html>