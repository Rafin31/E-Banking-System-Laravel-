<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('headermngr.headernav')

@include('mngr_sidebar.mngr_sidebar')
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
			width:160px;
        } 
        </style>
        <center>
<form method="POST" class="bg">
<h1> Registration </h1> <hr>
ID <br>
<input type="text" name="id"> </input><hr> <br>
UserName <br>
<input type="text" name="uname"> </input><hr> <br>
Email <br>
<input type="email"name="email"> </input><hr> <br>


Password<br>
<input type="text"name="password" placeholder="Enter password"> </input><hr> <br>
Confirm Password<br>
<input type="text"name="cpassword"> </input><hr> <br>
Account Type <hr> <br>
<select  name="ut" style:width="100px">
                                            <option value=""> </option>
                                            <option value="admin"> Admin</option>
                                            <option value="Bank Manager">Bank Manager</option>
                                           
                                        </select><hr> <br>
Phone Number <br>
<input type="text"name="phnno" value="01"> </input><hr> <br>
  <br>
Address<br>
<input type="text"name="address" placeholder="Enter Address"> </input><hr> <br>
<input type="submit" class="btn-outline-success" value="Register" > <br> <hr>

</form>
</center>
