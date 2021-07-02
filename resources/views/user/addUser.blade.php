<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Add User "] )

<body>

    <style>
        .errors {
            text-align: center;
            margin-top: 10px;
        }

        .top_error {
            text-align: center;
            margin: 10px;
            font-size: 1rem;
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add User</a></li>
                    </ol>
                </div>
            </div>

            <!-- row -->

            <div class="container-fluid">
                {{-- Erorrs --}}
                <div class="errors alert-success">
                    {{session('Add_user')}}
                </div>
                {{-- Errors ends --}}
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form method="POST" class="form-valide">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">User Type <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" name="user_type" id="val-skill"
                                                        name="val-skill">
                                                        <option value="">User Type</option>
                                                        <option value="clients">Clients</option>
                                                        <option value="bank_manager">Bank Manager</option>
                                                        <option value="noney_exchange_officer">Money exchange officer
                                                        </option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('user_type')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Username <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="user_name" placeholder="Enter a username..">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('user_name')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-email" name="email"
                                                        placeholder="Your valid email..">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('email')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="val-password"
                                                        name="password" placeholder="Choose a safe one..">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('password')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="val-confirm-password">Confirm Password <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control"
                                                        id="val-confirm-password" name="con_password"
                                                        placeholder="..and confirm it!">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('con_password')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="val-confirm-password">Address <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-confirm-password"
                                                        name="address" placeholder="Address">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('address')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (BD)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-phoneus"
                                                        name="phone_number" placeholder="+88 01754789658">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('phone_number')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary submit w-75">Add</button>
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