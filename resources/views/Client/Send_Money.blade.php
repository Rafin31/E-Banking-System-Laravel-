<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Send Money "] )
 
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

               
                        
                        <div class="basic-form">
                            
                                <form method="post">
                            @csrf
                                <b>TO:</b>
                                <br>
                                <br>
                                <i class="fa fa-user"></i><input class="form-control" type="text" size="50" name="acc_num" Value=""
                                    placeholder="Enter Account Number">
                                    <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                    <br>
                                <br>
                                <b>Amount:</b>
                                <br>
                                <br>
                                <input class="form-control" type="text" size="30" name="amount" Value="" placeholder="$0">
                                <div class="div alert-danger">{{$errors->first('amount')}}</div>
                                <br>
                                <br>
                                <b>Reference:</b>
                                <br>
                                <br>
                                <i class="fa fa-clipboard"></i><input class="form-control" type="text" size="30" name="ref" Value="" placeholder="Add a note">
                                <div class="div alert-danger">{{$errors->first('ref')}}</div>  
                                <br>
                                <br>
                                <b>Pin:</b>
                                <br>
                                <br>
                                <input class="form-control" type="password" size="30" name="password" Value="" placeholder="Enter Pin">
                                <div class="div alert-danger">{{$errors->first('password')}}</div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-dark mb-2">Send</button>
                            
                                </form>
                                    </div>

                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



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