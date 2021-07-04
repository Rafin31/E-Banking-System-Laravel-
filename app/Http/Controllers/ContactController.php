<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        return view('contact_form');
      }

    
   
      function store(Request $request) {
   
          try {
              // my data storage location is project_root/storage/app/data.json file.
              $contactInfo = Storage::disk('local')->exists('data.json') ? json_decode(Storage::disk('local')->get('data.json')) : [];
          
              $inputData = $request->only(['name', 'email', 'message','subject']);
             
              $inputData['datetime_submitted'] = date('Y-m-d H:i:s');
   
             array_push($inputData,$contactInfo);
      
              Storage::disk('local')->put('data.json', json_encode($contactInfo));
   
              return $inputData;
   
          } catch(Exception $e) {
   
              return ['error' => true, 'message' => $e->getMessage()];
   
          }
      }
}
