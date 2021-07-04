<?php

namespace App\Http\Controllers;
use App\Models\rate;
use Illuminate\Http\Request;

class rateController extends Controller
{
    function index()
    {
        $rate = rate::all();
        return view ("rate.index")
            ->with ('rate',$rate);
    }

    function show()
    {
        return view ('rate.insert');
    }
    
}
