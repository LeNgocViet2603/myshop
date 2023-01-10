<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('admin.pages.register');
    }
    public function register(RegisterRequest $req){
        $is_exitst = User::where('email',$req->input('email'))->first();
        if(empty($is_exitst)){
            try {
                $newUser = new User();
                $newUser->user_name = $req->input('user_name');
                $newUser->email = $req->input('email');
                $newUser->password = bcrypt($req->input('password'));
                $newUser->role_id = 1;
                $newUser->save();
                return redirect()->route('login');
                
            } catch (Exception $e) {
                return back()->withErrors('Thêm người dùng thất bại!');
            }
        }else{
            return back()->withErrors(['error'=>'User này đã tồn tại trong hệ thống!']);
        }
    }
}
