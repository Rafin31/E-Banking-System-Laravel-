<!DOCTYPE html>
@include('headermngr.headernav')

@include('mngr_sidebar.mngr_sidebar')
<link rel="stylesheet" href="{{asset('style.css')}}"/>

<html>
<head>
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
			width:60px;
        } 
        </style>
	<title>Deal Page</title>
	
</head>
<body>

<h1 class="card-title"> Dealing with others company  </h1> </center>

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#"> Dealing with others company</a></li>
        </ol>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Dealing with others company</h4>
                    <div class="table-responsive">
                   
	<form method="post" class="bg">
	<table>
		<tr>
			<td>Company Name</td>
			<td> <input type="select" name="name"  value= "DSI"> </td>
		</tr>
		<tr>
			<td>About Deal</td>
			<td><input type="textfield" name="description"></td>
		</tr>
		<tr>
			<td>Email Address</td>
			<td><input type="textfield" name="email">
			
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Confirm Deal"></td>
		</tr>
	</table>
	</form>

	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
</body>
</html>