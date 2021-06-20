<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Add User "] )

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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add User</a></li>
                    </ol>
                </div>
            </div>

            <!-- row -->

            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">User Type <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="val-skill">
                                                        <option value="">Please select</option>
                                                        <option value="html">Admin</option>
                                                        <option value="html">Clients</option>
                                                        <option value="html">Bank Manager</option>
                                                        <option value="css">Money exchange officer</option>
                                                        <option value="javascript">Customer care</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Username <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="val-username" placeholder="Enter a username..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-email"
                                                        name="val-email" placeholder="Your valid email..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="val-password"
                                                        name="val-password" placeholder="Choose a safe one..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="val-confirm-password">Confirm Password <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control"
                                                        id="val-confirm-password" name="val-confirm-password"
                                                        placeholder="..and confirm it!">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="val-confirm-password">Address <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control"
                                                        id="val-confirm-password" name="val-confirm-password"
                                                        placeholder="Address">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Account Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="val-skill">
                                                        <option value="">Please select</option>
                                                        <option value="html">Normal Account</option>
                                                        <option value="css">Savings account</option>
                                                        <option value="javascript">DBS Account</option>
                                                        <option value="angular">Fixed Deposite Account</option>
                                                        <option value="angular">NRI accounts.</option>
                                                        <option value="vuejs">Salary account</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Account Services
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="val-skill">
                                                        <option value="">Please select</option>
                                                        <option value="html">Deposit facilities</option>
                                                        <option value="html">Credit facilities</option>
                                                        <option value="html">Masseging Service</option>
                                                        <option value="css">Card Services</option>
                                                        <option value="javascript">Remittances and payments.</option>
                                                        <option value="angular">Fixed Deposite Account</option>
                                                        <option value="angular">Investment banking and wealth
                                                            management.</option>
                                                        <option value="vuejs">Deposit facilities</option>
                                                        <option value="vuejs">Sallary</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (BD)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-phoneus"
                                                        name="val-phoneus" placeholder="+88 01754789658">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary w-75">Add
                                                        User</button>
                                                </div>
                                            </div>
                                        </form>
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

</body>

</html>