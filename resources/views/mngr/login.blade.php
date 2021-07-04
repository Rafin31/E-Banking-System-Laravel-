<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{asset('style.css')}}"/>

	
</head>
<body>



	<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
           
        </ol>
    </div>
</div>

<div class="login-form-bg h-100">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
					<h1 class="card-title"> Login </h1>
                   		<div class="table-responsive">
                   
						   <center><title>Login Page</title>
	
	<form method="post" class="bg">
	@csrf
	<style>
        .bg
        {
            background-color:rgb(229, 229, 253);
			align:"center";
        } 
		.btn
        {
            background-color:rgb(229, 229, 253);
			align:"center";
			width:165px;
        } 
        </style>

			Name
			<br>
			<input type="text" name="uname" placeholder="Enter Name">
	 		<br> 
		
			Password
			<br>
			<input type="password" name="password" placeholder="Enter Password">
	
			<br> <hr>
		
			<input type="submit" class="btn-outline-success" value="Login" > <br> <hr>

	

	</form>
    <font color="red"> {{session('msg')}} </font>
    <br>
	<a href="/manager/register"> Signup</a>

	</center>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>