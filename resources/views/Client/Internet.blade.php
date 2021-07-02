<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Internet "] )
 
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
        @include('head.header')<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('Client_Sidebar.sidebar')<!--**********************************
            Sidebar end
        ***********************************-->

        <div class="content-body">
            <div class="alert-danger">{{session('msg')}}</div>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        @csrf
                                        <div class="form-group row">

                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Bill Month <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="month" class="form-control" name="b_month">
                                                <div class="div alert-danger">{{$errors->first('b_month')}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-meter">Customer ID<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-nid" name="c_id"
                                                    placeholder="Enter Customer ID">
                                                    <div class="div alert-danger">{{$errors->first('c_id')}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-account">Enter Account
                                                Number <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-date" name="acc_num"
                                                    placeholder="Enter Account Number">
                                                    <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Type <span
                                                    class="text-danger">*</span>
                                            </label>

                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="type">
                                                    <option value="">Please select</option>
                                                    <option value="Dotnet">Dot Net</option>
                                                    <option value="Carnival">Carnival
                                                    </option>
                                                    <option value="Link3">Link3
                                                    </option>
                                                    <option value="Samonline">Samonline
                                                    </option>
                                                    <option value="Link3">Link3
                                                    </option>

                                                    
                                                </select>
                                                <div class="div alert-danger">{{$errors->first('type')}}</div>

                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Amount <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="amount" class="form-control" name="amount"
                                                    Placeholder="Amount">
                                                    <div class="div alert-danger">{{$errors->first('amount')}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Pin <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" name="password"
                                                    Placeholder="Enter your Pin Number">
                                                    <div class="div alert-danger">{{$errors->first('password')}}</div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
    </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a>
                2018</p>
        </div>
    </div>
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
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

</html>
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
                <div class="card">
                    <div class="card-body">

                        <div>
                            <h4>All Organiztions</h4>
                            <hr>
                            <div>
                                <label>
                                    <a href="./Samonline.html">Samonline</a></label>
                            </div>
                            <div>
                                <label>
                                    <a href="./Dotnet.html">Dot Net</a></label>
                            </div>
                            <div>
                                <label>
                                    <a href="./Carnival.html">Carnival</a></label>
                            </div>
                            <div>
                                <label>
                                    <a href="./AmberIT.html">Amber IT</a></label>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a>
                2018</p>
        </div>
    </div>
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