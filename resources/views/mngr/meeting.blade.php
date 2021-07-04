@include('sidebar.sidebar')


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
        .slt
        {
            
			
			width:200px;
        } 
        </style>

<form method="POST" class="bg">
<h1> Meeting </h1><hr> 
Meeting Time <br>
<input type="text" name="id" class="slt"> </input><hr> <br>
Meeting Date <br>
<input type="text" name="uname" class="slt"> </input><hr> <br>
Meeting Venue <br>
<input type="text"name="venue" class="slt" > </input><hr> <br>


<input type="checkbox"name="name" > Inform All employees  </input><hr> <br>

<input type="submit"class="btn" value="Post" style:width="100px"> </input>
</form>
