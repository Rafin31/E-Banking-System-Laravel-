<?php

namespace App\Http\Controllers;

use App\Http\Requests\registrationForm;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;
use Illuminate\Http\Request;
use App\Http\Requests\editUser;
use App\Models\requestsModel;
use App\Http\Requests\editProfile;
use App\Http\Requests\changePassword;
use App\Models\postNotice;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;





class userController extends Controller
{
    public function userList()
    {
        $user = usersModel::all();
        return view('user.userList')->with('users', $user);
    }

    public function ajaxSearch(Request $req)
    {

        //echo  $req->get('searchQuest');
        $list = usersModel::where('user_name', 'like', '%' . $req->get('searchQuest') . '%')->get();
        return json_encode($list);
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
            $login->account_Status = 'active';
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
        DB::beginTransaction();
        try {
            $user = usersModel::find($request->block_user_id);
            $user->account_Status = 'Block';
            $user->save();

            $request->session()->flash('block', $request->approve_user_id . " " . "Blocked Succesfully");
            $login = loginModel::find($request->block_user_id);
            $login->account_Status = 'Block';
            $login->save();
            DB::commit();
            return redirect('/dashbord/userList');
        } catch (\Throwable $th) {
            DB::rollBack();
            $request->session()->flash('block', $request->block_user_id . " " . "Something went wrong");
            return redirect('/dashbord/userList');
            //throw $th;
        }
    }

    public function changePass()
    {
        return view('user.changePassword');
    }

    public function clientReq()
    {
        $request = requestsModel::where('status', 'Pending')->get();
        return view('user.clientReq')->with('request', $request);
    }

    public function clientReqOperation(Request $req)
    {
        echo $req->request_id;
        $request = requestsModel::find($req->request_id);
        $request->status = 'Approved';
        $request->save();
        $req->session()->flash('request', $request->block_user_id . " " . "Approved Succesfully");
        return redirect('/dashbord/clientReq');
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
        $request->session()->flash('msg', $request->delete_user_id . " " . 'Deleted successfully');
        return redirect('/dashbord/userList');
    }

    public function editProfile()
    {

        $user = usersModel::find(session('user_id'));
        return view('user.editProfile')->with('user', $user);
    }

    public function editProfileOparetion(editProfile $req)
    {
        DB::beginTransaction();
        try {
            $user = usersModel::find(session("user_id"));
            $user->user_name = $req->user_name;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->phone_number = $req->phone_number;
            $user->save();

            $login = loginModel::find(session("user_id"));
            $login->user_name = $req->user_name;
            $login->save();

            $req->session()->flash('msg', 'Profile updated Succefully');
            DB::commit();
            return redirect('/dashbord/profile');
        } catch (\Throwable $th) {
            DB::rollBack();
            $req->session()->flash('msg', 'Something went wrong');
            return redirect('/dashbord/profile');
            //throw $th;
        }
    }

    public function changePassword()
    {
        //echo "hello";
        return view('user.changePassword');
    }

    public function changePasswordOperation(changePassword $req)
    {
        // echo "hello";
        $password = usersModel::find(session('user_id'))->login;
        // echo $password['password'];
        //echo $req->current_password;


        if (Hash::check($req->current_password, $password['password'])) {
            $user = loginModel::find(session("user_id"));
            $user->password = bcrypt($req->confirm_password);
            $user->save();

            $req->session()->flash("change_password", "password changed successfully");
            return redirect()->route('logout');
        } else {
            $req->session()->flash("change_password", "password didn't match with current password");
            return redirect('/dashbord/profile/changePassword');
        }
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
        DB::beginTransaction();
        try {
            $user = usersModel::find($request->approve_user_id);
            $user->account_Status = 'active';
            $user->save();

            $request->session()->flash('approve', $request->approve_user_id . " " . "Approved Succesfully");
            $login = loginModel::find($request->approve_user_id);
            $login->account_Status = 'active';
            $login->save();
            DB::commit();
            return redirect('/dashbord/userList');
        } catch (\Throwable $th) {
            DB::rollBack();
            $request->session()->flash('approve', $request->approve_user_id . " " . "Something went wrong");
            return redirect('/dashbord/userList');

            //throw $th;
        }

        //return view('user.pendingUser')->with('user', $user);
    }

    public function postNotices()
    {
        return view('user.postNotices');
    }

    public function postNoticesOperation(Request $req)
    {
        $post = new postNotice;
        $post->id = session("user_id");
        $post->subject = $req->subject;
        $post->description = $req->description;
        $CONFIRMATION = $post->save();

        if ($CONFIRMATION) {
            $req->session()->flash('msg', 'Notice Posted Successfully');
            return redirect()->route('user.postNotices');
        } else {
            $req->session()->flash('msg', 'Something went wrong');
            return redirect()->route('user.postNotices');
        }
    }

    public function profile()
    {
        $user = usersModel::find(session('user_id'));
        return view('user.profile')->with("user", $user);
    }

    public function unblockUser()
    {
        $user = usersModel::where('account_Status', 'Block')->get();
        return view('user.unblockUser')->with('user', $user);
    }

    public function unblockOperation(Request $request)
    {
        //echo "done";
        DB::beginTransaction();
        try {
            $user = usersModel::find($request->Unblock_user_id);
            $user->account_Status = 'active';
            $user->save();

            $request->session()->flash('block', $request->Unblock_user_id . " " . "Unblocked Succesfully");
            $login = loginModel::find($request->Unblock_user_id);
            $login->account_Status = 'active';
            $login->save();
            DB::commit();
            return redirect('/dashbord/userList');
        } catch (\Throwable $th) {
            DB::rollBack();
            $request->session()->flash('block', $request->Unblock_user_id . " " . "Something went wrong");
            return redirect('/dashbord/userList');
            //throw $th;
        }
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'allUser.xlsx');
    }
}
