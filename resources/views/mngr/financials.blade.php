<!DOCTYPE html>
@include('sidebar.sidebar')

<h1> Recent Financial Transactions  </h1><hr>
    <p align="center"> <table border="2" class="bg">
    <tr>
        <style>
        .btn
        {
            background-color:rgb(168, 168, 245);
            
            text-shadow: rgb(12, 12, 37);
        } 
        .bg
        {
            background-color:rgb(211, 211, 214);
            
            text-shadow: rgb(12, 12, 37);
        } 

        </style>
        <td> ID </td> 
        <td> Account Name </td> 
        <td> Amount </td> 
        <td> Transaction Type </td> 
        <td> Account Type </td> 
        <td colspan="3"> Operations </td> 
    </tr>
   
    <tr>
        <td> 1 </td> 
        <td> Ahmed Mortuza </td> 
        <td> 22000 </td> 
        <td> Debited </td> 
        <td> Deposit  </td> 
        <td> <a href="/details"> <input type="submit" class="btn" value="Details">   </a>  </td> 
        <td> <a href="/block"> <input type="submit" class="btn" value="Report">   </a>  </td> 
       
    </tr>

    <tr>
        <td> 3 </td> 
        <td> Ahmed Shehjwad </td> 
        <td> 50000 </td> 
        <td> Credited </td> 
        <td> Deposit  </td> 
        <td> <a href="/details"> <input type="submit" class="btn" value="Details">   </a>  </td> 
        <td> <a href="/block"> <input type="submit" class="btn" value="Report">   </a>  </td> 
       
    </tr>
    <tr>
        <td> 4 </td> 
        <td> Rashid Khan </td> 
        <td> 452000 </td> 
        <td> Credited </td> 
        <td> Savings  </td> 
        <td> <a href="/details"> <input type="submit" class="btn" value="Details">   </a>  </td> 
        <td> <a href="/block"> <input type="submit"class="btn"  value="Report">   </a>  </td> 
       
    </tr>
</p>
    </table>
    </htmnl>