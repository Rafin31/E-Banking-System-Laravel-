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
            if ($request->get('export') == 'pdf') {
                $pdf = PDF::loadView('mngr.client.index-pdf', compact('data'));
                return $pdf->download('client-list.pdf');
            }
        }
        $client=clientmodel::all();
        return view('mngr.client.index', compact('data'))->with('clientlist',$client);
    }
}







