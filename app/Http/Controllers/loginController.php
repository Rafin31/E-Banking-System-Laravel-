<?php
namespace App\Http\Controllers;
use App\Models\Meo;
use Validator;

use Illuminate\Http\Request;

class LoginMeoController extends Controller
{
    public function index()
    {
        return view("login.index");
    }


    public function verify (Request $req)

{
    $validation = Validator::make($req->all(), [
       'user_name' => 'required',
        'password' => 'required|min:5',
    ]);

    
    if ($validation->fails())
    {
        return back()
                    ->with ('errors',$validation->errors())
                    ->withInput();
    }

    $user=Meo::where ('user_name',$req->user_name)
                ->where ('password',$req->password)
                ->where ('user_type',$req->user_type)
                ->first();

if (count ((array)$user)>0 )
{
    $req->session()-> put('name',$req->user_name);
    $req->session()-> put('user_type',$req->user_type);
    $req->session()->put('password', $req->password);
    return redirect ('/homeMeo');
}

else{
    $req->session()->flash('msg','Name Or Password is Wrong');
    return redirect('/login/meo');
}
}
   
    
}
