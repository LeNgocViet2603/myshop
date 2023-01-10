<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $listUser = User::all();
        return view('admin.pages.user.userList',compact('listUser'));
    }
    public function showProfile(){
        return view('admin.pages.user.userProfile');
    }
}
