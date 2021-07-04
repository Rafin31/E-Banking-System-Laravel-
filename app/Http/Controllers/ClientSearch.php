<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClientSearch extends Controller
{
    function index()
    {
     return view('client.client_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('client_table')
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('account_balance', 'like', '%'.$query.'%')
         ->orWhere('account_type', 'like', '%'.$query.'%')
         ->orWhere('nid_verification', 'like', '%'.$query.'%')
         ->orWhere('account_status', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('client_table')
         ->orderBy('id', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->account_balance.'</td>
         <td>'.$row->account_type.'</td>
         <td>'.$row->nid_verification.'</td>
         <td>'.$row->account_status.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}