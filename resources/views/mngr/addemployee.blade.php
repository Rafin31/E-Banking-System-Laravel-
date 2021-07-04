@include('mngr_sidebar.mngr_sidebar')
@include('headermngr.headernav')
    
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

<center> <form method="POST" class="bg">
<h1> Hire Employee  </h1>
ID <br>
<input type="text" name="id" placeholder="Enter ID"> </input><hr> <br>
Employee's Name <br>
<input type="text" name="uname" placeholder="Enter Name"> </input><hr> <br>

Duration <br>
<input type="text"name="duration" placeholder="Enter In year / month"> </input><hr> <br>
Designation <hr> <br>
<select name="designation" style:width="100px">
                                            <option value=""> </option>
                                            <option value="Executive"> Executive</option>
                                            <option value="Customer Care officer">Customer Care officer</option>
                                            <option value="Assistant">Assistant</option>
                                            <option value="Security Guard"> Security Guard</option>

                                        </select><hr> <br>

<input type="submit" class="btn" value="Add Employee" style:width="100px"> </input>
</form> </center>
