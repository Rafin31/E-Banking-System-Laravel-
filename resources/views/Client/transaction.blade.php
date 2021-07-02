<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Transaction "] )

<body>

    <style>
        .message {
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
        @include('Client_Sidebar.sidebar')
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="export w-100 ">
                    <a href="{{url('/index/transaction/export')}}" class="btn btn-info p-2 w-100 mb-2">Export</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">



                                <h4 class="card-title">Transaction</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Client ID</th>
                                                <th>Current balance</th>
                                                <th>Credit</th>
                                                <th>Credit type</th>
                                                <th>Debit</th>
                                                <th>Debit type</th>
                                                <th>Transaction Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction as $transaction)
                                            <tr>
                                                <td>{{$transaction->id}}</td>
                                                <td>{{$transaction->current_balance}}</td>
                                                <td>{{$transaction->credit}}
                                                </td>
                                                <td>{{$transaction->credit_type}}</td>
                                                <td>{{$transaction->debit}}</td>
                                                <td>{{$transaction->debit_type}}</td>
                                                <td>{{$transaction->transactions_date}}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>Client ID</th>
                                                <th>Current balance</th>
                                                <th>Credit</th>
                                                <th>Credit type</th>
                                                <th>Debit</th>
                                                <th>Debit type</th>
                                                <th>Transaction Date</th>
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

    <script src="{{asset('js\custom.js')}}"></script>
</body>

</html>