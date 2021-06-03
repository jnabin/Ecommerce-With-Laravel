<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Session;
class LoginController extends Controller
{
    public function index(){
        return view('Login.index');
    }

    public function verify(LoginRequest $req){
        $user = Admin::where('username', $req->username)
                       ->where('password', $req->password)
                       ->first();
        
        if((!empty($user)) > 0){
            Session::put('username', $user->username);
            Session::put('userid', $user->id);
            return redirect()->route('AdminHome.index');
        }else{
            Session::flash('msg', 'inavlid username/password');
            return redirect('/login');
        }
        
    }
}
