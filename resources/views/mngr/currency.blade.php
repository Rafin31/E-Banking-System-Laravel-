<!DOCTYPE html>
@include('headermngr.headernav')

@include('mngr_sidebar.mngr_sidebar')

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
    <center> 
    <h1> Currency  Information </h1> <hr>
    <iframe src="https://fx-rate.net/BDT/" width="730" height="1080" title="Today's Currency Info"></iframe>
    </htmnl>