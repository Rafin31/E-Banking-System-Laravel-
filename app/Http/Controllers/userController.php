<?php

namespace App\Http\Controllers;

use App\Http\Requests\registrationForm;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;
use Illuminate\Http\Request;
use App\Http\Requests\editUser;



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
        $user = usersModel::where('account_Status', 'active')->get();
        return view('user.blockUser')->with('user', $user);
    }

    public function blockUserOparetion(Request $request)
    {
        $user = usersModel::find($request->block_user_id);
        $user->account_Status = 'Block';
        $user->save();
        $request->session()->flash('block', $request->block_user_id . " " . "Blocked Succesfully");
        return redirect('/dashbord/userList');
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
        $user = usersModel::all();
        return view('user.editUser')->with('users', $user);
    }

    public function completeEdit($id)
    {
        $user = usersModel::find($id);
        return view('user.completeEdit')->with('users', $user);
    }

    public function editingOparetion(editUser $req, $id)
    {

        DB::beginTransaction();
        try {


            $user = usersModel::find($id);
            $user->user_name = $req->user_name;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->phone_number = $req->phone_number;
            $user->save();

            $login = loginModel::find($id);
            $login->user_name = $req->user_name;
            $login->save();
            DB::commit();
            $req->session()->flash('edit', $id . " " . "Edited Succesfully");
            return redirect('/dashbord/userList');
        } catch (\Throwable $th) {
            DB::rollBack();
            echo "Something Went wrong";
            return redirect('/dashbord/userList');
            //throw $th;
        }


        //return view('user.completeEdit')->with('users', $user);
    }



    public function pendingUser()
    {
        $user = usersModel::where('account_Status', 'pending')->get();
        //print_r($user);
        return view('user.pendingUser')->with('user', $user);
    }
    public function pendingUserOparation(Request $request)
    {
        $user = usersModel::find($request->approve_user_id);
        $user->account_Status = 'active';
        $user->save();
        $request->session()->flash('approve', $request->approve_user_id . " " . "Approved Succesfully");
        return redirect('/dashbord/userList');
        //return view('user.pendingUser')->with('user', $user);
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
        $user = usersModel::where('account_Status', 'Block')->get();
        return view('user.unblockUser')->with('user', $user);
    }

    public function unblockOperation(Request $req)
    {
        //echo "done";
        $user = usersModel::find($req->Unblock_user_id);
        $user->account_Status = 'active';
        $user->save();
        $req->session()->flash('unblock', $req->Unblock_user_id . " " . "Unblocked Succesfully");
        return redirect('/dashbord/userList');
    }

    public function userServices()
    {
        return view('user.userServices');
    }
}
