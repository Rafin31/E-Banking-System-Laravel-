<!DOCTYPE html >
<html>

<link rel="stylesheet" href="{{asset('manager/style.css')}}"/>
        <style>
        .bg
        {
            background-color:rgb(229, 229, 253);
            height: 50px;
        } 

        .fade {
        transition: opacity 7.95s linear; } /*This will controll the visible time*/
        </style>

@include('headermngr.headernav')

@include('mngr_sidebar.mngr_sidebar')
   
<?php use Carbon\Carbon;
$date = Carbon::now();
$date->toDateTimeString();
echo $date;
?>

    </center>


   
</html>
