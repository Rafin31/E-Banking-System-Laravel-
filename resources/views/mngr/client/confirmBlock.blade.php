    
    <link rel="stylesheet" href="{{asset('style.css')}}"/>

<style>
    .bg
    {
        background-color:rgb(242, 242, 248);
        align:"center";
    } 
    .btn
    {
        background-color:rgb(206, 206, 252);
        align:"center";
        width:200px;
    } 
    </style>



@include('sidebar.sidebar')

<center> <h1 class="card-title"> Block Client  </h1> </center>

<div class="content-body">

<div class="row page-titles mx-0">
<div class="col p-md-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="#"> Block Client</a></li>
    </ol>
</div>
</div>


<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Block Client </h4>
                <div class="table-responsive">
               
                <form method="POST" class="bg">
                @csrf
                    ID <br>
                        <input type="text" name="id" value="{{$blocklist['id']}}"> </input><hr> <br>
                    Account Balance  <br>
                        <input type="text" name="acbalance" value="{{$blocklist['account_balance']}}" > </input><hr> <br>

                     Account Type  <br>
                     <input type="text" name="acbalance" value="{{$blocklist['account_type']}}" > </input><hr> <br>

                    Nid Verification Number <br>
                            <input type="text"name="nidverify" value="{{$blocklist['nid_varification']}}" > </input><hr> <br>
                    Account Status <br>
                    <input type="text" name="acbalance" value="{{$blocklist['account_status']}}" > </input><hr> <br>

                        <input type="submit" class="btn" value="Block Client" style:width="100px"> </input>
</form>  

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>