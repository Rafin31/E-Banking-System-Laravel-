    
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



@include('headermngr.headernav')

@include('mngr_sidebar.mngr_sidebar')
<center> <h1 class="card-title"> Report Bug  </h1> </center>

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#"> Report Bug</a></li>
        </ol>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Report Bug</h4>
                    <div class="table-responsive">
                   
                    <form method="POST" class="bg">
                    @csrf
                        Report ID <br>
                            <input type="text" name="id"> </input><hr> <br>
                            Bug description  <br>
                            <input type="text" name="description"> </input><hr> <br>

                            Bug Type  <br>
                            <select  name="bt" style:width="100px">
                                            <option value=""> </option>
                                            <option value="System"> System</option>
                                            <option value="IT">IT</option>
                                           
                                        </select><hr> <br>
                     
                        
                            <input type="submit" class="btn" value="Report Bug" style:width="100px"> </input>
</form>  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>