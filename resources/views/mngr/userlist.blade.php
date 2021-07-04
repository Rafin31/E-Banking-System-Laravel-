<!DOCTYPE html>

<center><h1 class="h1"> Client List </h1></center>
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
			width:60px;
        } 
        </style>
    <center> <table border="2" class="bg">
    @foreach ($userList as $users) 
    {
        <td> {{users['name']}} </td>
    }
    @endforeach
   
    <tr>
        <td> 1 </td> 
        <td> Rahat </td> 
        <td> 2222# </td> 
        <td> Rahat@gmail.com </td> 
        <td> Deposit  </td> 
        <td> <a href="/update"> <input type="submit" class="btn-light" value="Update">   </a>  </td> 
        <td> <a href="/block"> <input type="submit" class="btn-light" value="Block">   </a>  </td> 
       
    </tr>

    <tr>
        <td> 2 </td> 
        <td> Hasan </td> 
        <td> 2220# </td> 
        <td> f23@gmail.com </td> 
        <td> Savings  </td> 
        <td> <a href="/update"> <input type="submit" class="btn-light" value="Update">   </a>  </td> 
        <td> <a href="/block"> <input type="submit" class="btn-light" value="Block">   </a>  </td> 
         
    </tr>

    <tr>
        <td> 3 </td> 
        <td> Ertugrul </td> 
        <td> 2222# </td> 
        <td> ertu23@gmail.com </td> 
        <td> Deposit  </td> 
        <td> <a href="/update"> <input type="submit" class="btn-light" value="Update">   </a>  </td> 
        <td> <a href="/block"> <input type="submit" class="btn-light" value="Block">   </a>  </td> 
       
    </tr>
</p>
    </table>
    </center>
    </htmnl>