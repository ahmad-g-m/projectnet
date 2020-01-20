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
            $user = User::where([['email' , $email],['password' , $pass]])->first();
            $r->session()->put('loguser',$user->name);
            $r->session()->put('iduser',$user->id);
            $tick = 'user';
            return redirect()->route('showprofile',['id'=>$user->id , 'tick'=>$tick]);
        }else{
            return redirect()->route('loginuser');
        }
    }
}
