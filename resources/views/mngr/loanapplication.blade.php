<!DOCTYPE html>
@include('sidebar.sidebar')

<h1> Pending Loan Applications  </h1>
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
    <p align="center"> <table border="2" class="bg">
    <tr>
        <td> ID </td> 
        <td> Name </td> 
        <td> Password </td> 
        <td> Email </td> 
        <td colspan="3"> Operations </td> 
    </tr>
   
    <tr>
        <td> 1 </td> 
        <td> Zanib </td> 
        <td> 2222# </td> 
        <td> Rahat@gmail.com </td> 
        <td> <a href="/accept"> <input type="submit" class="btn" value="Accept">   </a>  </td> 
        <td> <a href="/decline"> <input type="submit" class="btn" value="Decline">   </a>  </td> 
       
       
    </tr>

    <tr>
        <td> 2 </td> 
        <td> Akand </td> 
        <td> 2220# </td> 
        <td> f23@gmail.com </td> 
        <td> <a href="/accept"> <input type="submit"  class="btn" value="Accept">   </a>  </td> 
        <td> <a href="/decline"> <input type="submit"   class="btn" value="Decline">   </a>  </td> 
       
    </tr>
</p>
    </table>
    </htmnl>