<?php

namespace App\Http\Controllers;

use App\Http\Requests\registrationForm;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function userList()
    {
        $user = usersModel::all();
        return view('user.userList')->with('users', $user);
    }

    public function addUser()
    {

        return view('user.addUser');
    }

    public function insertUser(registrationForm $req)
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
            $user->account_Status =  'active';
            $user->save();

            $list = usersModel::all()->last();
            $id = $list['id'];

            // inserting into login table
            $login = new loginModel;
            $login->id =  $id;
            $login->user_name = $req->user_name;
            $login->password =  bcrypt($req->password);
            $login->user_type = $req->user_type;
            $login->save();
            DB::commit();
            $req->session()->flash('Add_user', 'Added Succefully');
            return redirect('/dashbord/addUser');
        } catch (\Throwable $th) {
            DB::rollBack();
            $req->session()->flash('Add_user', 'Something Went Wrong');
            return redirect('/dashbord/addUser');
            //throw $th;
        }
        //return usersModel::find(1014)->login;
    }

    public function blockUser()
    {
        return view('user.blockUser');
    }

    public function changePass()
    {
        return view('user.changePassword');
    }

    public function clientReq()
    {
        return view('user.clientReq');
    }

    public function deleteUser()
    {
        $user = usersModel::all();
        return view('user.deleteUser')->with('users', $user);
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        // echo 'User Id: ' . $request->delete_user_id;

        $user = usersModel::destroy($request->delete_user_id);
        return redirect('/dashbord/deleteUser');
    }

    public function editProfile()
    {
        return view('user.editProfile');
    }

    public function changePassword()
    {
        return view('user.changePassword');
    }

    public function editUser()
    {
        return view('user.editUser');
    }

    public function pendingUser()
    {
        return view('user.pendingUser');
    }

    public function postNotices()
    {
        return view('user.postNotices');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function unblockUser()
    {
        return view('user.unblockUser');
    }

    public function userServices()
    {
        return view('user.userServices');
    }
}
