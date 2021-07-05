    
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
                    <h4 class="card-title"> Block Client </h4>
                    <div class="table-responsive">
                   
                    <form method="POST" class="bg">
                    @csrf
                        ID <br>
                            <input type="text" name="id" value="{{id}}"> </input><hr> <br>
                        Account Balance  <br>
                            <input type="text" name="acbalance"> </input><hr> <br>

                         Account Type  <br>
                            <select  name="at" style:width="100px">
                                            <option value=""> </option>
                                            <option value="Deposit"> Deposit</option>
                                            <option value="Savings">Savings</option>
                                           
                                        </select><hr> <br>
                        Nid Verification Number <br>
                                <input type="text"name="nidverify" placeholder="Enter NID verify number"> </input><hr> <br>
                        Account Status <br>
                                <select  name="as" style:width="100px">
                                            <option value=""> </option>
                                            <option value="Active"> Active</option>
                                            <option value="Inactive">Inactive</option>
                                           
                                        </select><hr> <br>
                            <input type="submit" class="btn" value="Add Client" style:width="100px"> </input>
</form>  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>