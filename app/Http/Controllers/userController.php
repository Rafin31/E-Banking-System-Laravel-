<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userList()
    {
        return view('user.userList');
    }

    public function addUser()
    {

        return view('user.addUser');
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
        return view('user.deleteUser');
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
