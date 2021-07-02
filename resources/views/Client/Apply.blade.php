<!DOCTYPE html>
<html lang="en">

    @include('head.head' , ['title' => " Apply "] )
 
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
        **********************************
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide"  method="post">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Apply Type <span
                                                    class="text-danger"></span>
                                            </label>
                                        
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="apply_type">
                                                    <option value="">Please select</option>
                                                    <option value="Card">Card</option>
                                                    <option value="Checkbook">Checkbook</option>
                                                    <option value="Loan">Loan</option>
                                                    <option value="Vault">Vault</option>
                                                    <option value="Stop Bank Services">Stop Bank Services</option>

                                                </select>
                                                
                                                <div class="div alert-danger">{{$errors->first('apply_type')}}</div>
                                            </div>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="form-control h-150px" rows="6" name="description" id="comment"></textarea>
                                            <div class="div alert-danger">{{$errors->first('description')}}</div>
                                        </div>
    

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
            <!-- #/ container -->

            <!--**********************************
                Content body end
            ***********************************-->


            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
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