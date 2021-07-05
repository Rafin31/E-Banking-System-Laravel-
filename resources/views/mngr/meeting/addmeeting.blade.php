    
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
<center> <h1 class="card-title"> Add Meeting  </h1> </center>

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#"> Add Meeting</a></li>
        </ol>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Add Meeting</h4>
                    <div class="table-responsive">
                   
                    <form method="POST" class="bg">
                    @csrf
                        ID <br>
                            <input type="text" name="id"> </input><hr> <br>
                       

                         Meeting Type  <br>
                            <select  name="mt" style:width="100px">
                                            <option value=""> </option>
                                            <option value="Seminar"> Seminar</option>
                                            <option value="Meeting">Meeting</option>
                                            
                                            </select>
                                            <hr> <br>
                        Meeting venue  <br>
                            <input type="text" name="venue"> </input><hr> <br>
                        Meeting Title  <br>
                            <input type="text" name="title"> </input><hr> <br>
                        Date <br>
                                <input type="date"name="date" placeholder="Enter NID verify number"> </input><hr> <br>
                                Time <br>
                                <input type="time"name="time" placeholder="Enter NID verify number"> </input><hr> <br>
                        
                            <input type="submit" class="btn" value="Enlist Meeting" style:width="100px"> </input>
</form>  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>