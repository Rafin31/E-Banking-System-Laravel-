<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Pending Requests "] )

<body>
    <style>
        .errors {
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="errors alert-success">{{session('request')}}</div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Requests</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>Request Type</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request as $request)

                                            <tr>
                                                <td>{{$request->id}}</td>
                                                <td>{{$request->user_name}}</td>
                                                <td>{{$request->request_type}}</td>
                                                <td>{{$request->description}}</td>
                                                <td>
                                                    @if ($request->status == 'Pending')
                                                    <span class="badge badge-warning px-2">
                                                        {{$request->status}}</span>

                                                    @else
                                                    <span class="badge badge-success px-2">
                                                        {{$request->status}}</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    <form method="POST" action="{{url('/dashbord/clientReq')}}">
                                                        @csrf
                                                        {{-- @method('DELETE') --}}
                                                        <div class="bootstrap-modal">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#basicModal"
                                                                onclick="updateId('{{$request->id}}')">Approve</button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="basicModal">
                                                                <input type="hidden" id="request_id" name="request_id"
                                                                    value="{{$request->id}}"></input>
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Confirmation</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"><span>&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">Are you sure, You want
                                                                            to
                                                                            Approve?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Approve</button>


                                                                            {{-- <a type='submit' href="/dashbord/deleteUser"
                                                                                class="btn btn-primary">Delete</a> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>Request Type</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
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

    <script>
        function updateId(id) {
            $('#request_id').val(id)
        }
    </script>

</body>

</html>