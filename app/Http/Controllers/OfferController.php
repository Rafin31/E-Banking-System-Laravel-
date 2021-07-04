<?php

namespace App\Http\Controllers;
use App\Models\offers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    function index()
    {
        $offers = offers::all();
        return view ("offers.index")
            ->with ('offers',$offers);
    }

    function show()
    {
        return view ('review.insert');
    }
    
}
