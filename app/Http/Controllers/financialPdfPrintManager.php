<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\financialmodel;

use PDF;


class financialPdfPrintManager extends Controller
{
    public function index(Request $request)
    {
        $data = financialmodel::all();

        if ($request->has('export')) {
            if ($request->get('export') == 'pdf') 
            {
                $pdf = PDF::loadView('mngr.financial.index-pdf', compact('data')); // view file to print the ultimate pdf
                return $pdf->download('financial_report_manager.pdf');  // name of the file to be downloaded 
            }
        }
        $client=financialmodel::all();
        return view('mngr.financial.index', compact('data'))->with('financiallist',$client);  // view file to construct the view for pdf and variable passing to be used in blade file for final pdf printing
    }
}
