<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Pending User "] )

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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">POst Notices</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="errors alert-success">{{session("msg")}}</div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Post Notices</h4>
                            <div class="basic-form">
                                <form method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Subject:</label>
                                        <input type='text' placeholder="*Maximum 255 words" class="form-control mb-3"
                                            name="subject" required>

                                        <label>Notece:</label>
                                        <textarea name="description" class="form-control h-150px"
                                            placeholder="*Maximum 1000 words" rows="6" id="comment" required></textarea>

                                        <button type="submit" name="submit"
                                            class="btn btn-primary mt-3 w-100">Post</button>
                                    </div>
                                </form>
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