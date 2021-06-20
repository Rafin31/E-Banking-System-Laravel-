<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Client Requests "] )

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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>User id</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Request type</th>
                                                <th>Acount Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>Admin</td>
                                                <td>Edinburgh</td>
                                                <td>abs@gmail.com</td>
                                                <td>+88 01578541875</td>
                                                <td><span class="badge badge-warning px-2">Massage Services </span></td>
                                                <td><span class="badge badge-warning px-2">Active</span></td>
                                                <td>
                                                    <div class="bootstrap-modal">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#basicModal">Approve</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="basicModal">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Confirmation</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure?</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Approve</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Garrett Winters</td>
                                                <td>Admin</td>
                                                <td>Tokyo</td>
                                                <td>abs@gmail.com</td>
                                                <td>+88 01578541875</td>
                                                <td><span class="badge badge-warning px-2">Massage Services</span></td>
                                                <td><span class="badge badge-warning px-2">Pending</span></td>
                                                <td>
                                                    <div class="bootstrap-modal">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#basicModal">Approve</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="basicModal">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Confirmation</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure?</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Approve</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tiger Nixon</td>
                                                <td>Admin</td>
                                                <td>Edinburgh</td>
                                                <td>abs@gmail.com</td>
                                                <td>+88 01578541875</td>
                                                <td><span class="badge badge-warning px-2">Massage Services</span></td>
                                                <td><span class="badge badge-warning px-2">Pending</span></td>
                                                <td>
                                                    <div class="bootstrap-modal">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#basicModal">Approve</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="basicModal">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Confirmation</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure?</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Approve</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Garrett Winters</td>
                                                <td>Admin</td>
                                                <td>Tokyo</td>
                                                <td>abs@gmail.com</td>
                                                <td>+88 01578541875</td>
                                                <td><span class="badge badge-warning px-2">Massge Services</span></td>
                                                <td><span class="badge badge-warning px-2">Pending</span></td>
                                                <td>
                                                    <div class="bootstrap-modal">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#basicModal">Approve</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="basicModal">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Confirmation</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure?</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Approve</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>User id</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Request type</th>
                                                <th>Acount Status</th>
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

</body>

</html>