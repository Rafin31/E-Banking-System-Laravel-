<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;
use App\Models\requestsModel;

class loginController extends Controller
{
    public function index()
    {
        return view("login.login");
    }
    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect("/login");
    }
    public function loginVarify(loginForm $req)
    {
        $user_name = $req->user_name;
        $password = bcrypt($req->password);

        $user = loginModel::where('user_name', $user_name)
            ->first();

        if ($user) {

            if (Hash::check($req->password, $user['password'])) {

                $req->session()->put('status', true);
                $req->session()->put('user_name', $req->user_name);
                $req->session()->put('user_id', $user['id']);
                $req->session()->put('user_type', $user['user_type']);
                return redirect()->route('user.dashbord');
            } else {
                $req->session()->flash('msg', 'invaild User Name or password');
                return redirect()->route('login.login');
            }
        } else {
            $req->session()->flash('msg', 'invaild User Name or password');
            return redirect()->route('login.login');
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
