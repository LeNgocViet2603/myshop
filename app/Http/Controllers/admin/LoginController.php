<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function auth(LoginRequest $req){
        // test đăng nhập cho admin: email -> test@gmail.com, password -> testAuth123
        // test đăng nhập cho customer: email -> ngocviet412tapphuoc@gmail.com, password -> customer123
        $credentials = [
            'email'=>$req->input('email'),
            'password' => $req->input('password'),            
        ];
        $userLog = User::where('email',$req->input('email'))->first();
        if(empty($userLog)){
            return back()->withErrors(['error'=>'Không tồn tại email này!']);
        }
        if(Auth::attempt($credentials,$req->input('remember'))){
            if($userLog['role_id'] == 1){
                session()->put('inforUser',$userLog);
                return view('admin.layout.master_admin');
            }else{
                return back()->withErrors(['error'=>'Xin lỗi! Trang này chỉ dành cho admin']);
            }
           
        }else{
            return back()->withErrors(['error'=>'Mật khẩu không chính xác']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
