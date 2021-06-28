<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view("login.login");
    }
    public function loginVarify(Request $req)
    {
        if ($req->user_name == $req->password) {
            return redirect()->route('user.dashbord');
        } else {
            echo "error";
        }
    }
    public function dashbord()
    {
        return view("user.index");
    }
    public function signUP()
    {

        return view('registration.register');
    }
}
