<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Exchange Currency "] )
 
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
                <div class="alert-danger">{{session('msg')}}</div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Exchange Currency</h4>
                            <div class="basic-form">
                                <form method="post">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label><h4><b>From</b></h4></label>
                                        <select class="form-control" id="sel1" name="ex_from">
                                            <option value="Please select">Please select</option>
                                            <option value="USD-US DOLLAR">USD-US DOLLAR</option>
                                            <option value="IND-Rupees">IND-Rupees</option>
                                            <option value="BNG-Taka">BNG-Taka</option>
                                            <option value="SK-Won">SK-Won</option>
                                            <option value="EUR-euro">EUR-euro</option>
                                        </select>
                                        <div class="div alert-danger">{{$errors->first('ex_from')}}</div>
                                    </div>

                                    <div>
                                        <h4>Exchange Amount</h4>
                                        <input type="text" class="form-control" size="30" name="ex_amount" value="" placeholder="৳">
                                        <div class="div alert-danger">{{$errors->first('ex_amount')}}</div>                                       
                                    </div>

                                    <div class="form-group" >
                                        <label><h4><b>TO</b></h4></label>
                                        <select class="form-control" id="sel1" name="ex_to">
                                            <option value="Please select">Please select</option>
                                            <option value="USD-US DOLLAR">USD-US DOLLAR</option>
                                            <option value="IND-Rupees">IND-Rupees</option>
                                            <option value="BNG-Taka">BNG-Taka</option>
                                            <option value="SK-Won">SK-Won</option>
                                            <option value="EUR-euro">EUR-euro</option>
                                        </select>
                                        <div class="div alert-danger">{{$errors->first('ex_to')}}</div>
                                    </div>
                                    <div class="form-group row">
                                      
                                        <label class="col-lg-4 col-form-label" for="val-phoneus"><h4><b>Date</b></h4> <span
                                                class="text-danger"></span>
                                        </label>

                                    
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" name="date">
                                            <div class="div alert-danger">{{$errors->first('date')}}</div>
                                            
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Convert</button>
                                            </div>
                                        </div>
                                    

                                </form>
</div>
                            </div>
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
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
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