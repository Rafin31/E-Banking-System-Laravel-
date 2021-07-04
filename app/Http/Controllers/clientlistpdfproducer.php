<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientmodel;

use PDF;

class clientlistpdfproducer extends Controller
{
    public function index(Request $request)
    {
        $data = clientmodel::all();

        if ($request->has('export')) {
            if ($request->get('export') == 'pdf') 
            {
                $pdf = PDF::loadView('mngr.client.index-pdf', compact('data')); // view file to print the ultimate pdf
                return $pdf->download('client-list.pdf');  // name of the file to be downloaded 
            }
        }
        $client=clientmodel::all();
        return view('mngr.client.index', compact('data'))->with('clientlist',$client);  // view file to construct the view for pdf 
    }
}







