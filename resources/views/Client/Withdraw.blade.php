<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Withdraw"] )
 
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

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>

        
        <div class="container-fluid">
            <div class="alert-danger">{{session('msg')}}</div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (BD) <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" name="number" class="form-control" id="val-phoneus"
                                                    name="val-phoneus" placeholder="+880">

                                                    <div class="div alert-danger">{{$errors->first('number')}}</div>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-nid">Amount <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" name="amount" class="form-control" id="val-nid" name="val-nid"
                                                placeholder="Amount..">
                                                <div class="div alert-danger">{{$errors->first('amount')}}</div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">Type <span
                                                class="text-danger">*</span>
                                        </label>

                                        <div class="col-lg-6">
                                            <select class="form-control" name="type" id="val-skill" name="val-skill">
                                                <option value="">Please select</option>
                                                <option value="Bkash">Bkash</option>
                                                <option value="Nagad">Nagad</option>
                                                <option value="Rocket">Rocket</option>
                                               

                                            </select>
                                            <div class="div alert-danger">{{$errors->first('type')}}</div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-date">Pin <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="password" name='pin' class="form-control" id="val-date"
                                                name="val-date" placeholder="pin">
                                                <div class="div alert-danger">{{$errors->first('pin')}}</div>
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
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018
            </p>
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