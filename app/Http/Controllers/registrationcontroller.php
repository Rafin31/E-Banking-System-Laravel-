<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registrationForm;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;


class registrationcontroller extends Controller
{
    public function registration(registrationForm $req)
    {

        DB::beginTransaction();
        try {

            // inserting into users table
            $user = new usersModel;
            $user->user_name = $req->user_name;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->phone_number =  $req->phone_number;
            $user->profile_picture =  'null';
            $user->user_type =  $req->user_type;
            $user->account_Status =  'pending';
            $user->save();

            $list = usersModel::all()->last();
            $id = $list['id'];

            // inserting into login table
            $login = new loginModel;
            $login->id =  $id;
            $login->user_name = $req->user_name;
            $login->password =  bcrypt($req->password);
            $login->user_type = $req->user_type;
            $login->account_Status = 'pending';
            $login->save();
            DB::commit();
            return redirect()->route('login.login');
        } catch(\Throwable $th) {
            DB::rollBack();
            echo "Something Went Wrong";
            throw $th;
        }
        //return usersModel::find(1014)->login;
    }
}