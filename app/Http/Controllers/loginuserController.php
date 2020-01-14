<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class loginuserController extends Controller
{
    public function index()
    {
        return view('user.formLoginUser');
    }
    public function log(){
        echo ("hi logined");
    }
    public function login(Request $r){
        $pass = $r->password;
        $email = $r->email;

        if(User::where([['email' , $email],['password' , $pass]])->first()){
            return redirect('dashborduser');
        }else{
            return redirect()->action('loginuserController@index');
        }
    }
}
