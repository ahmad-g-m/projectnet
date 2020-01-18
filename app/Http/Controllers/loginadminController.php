<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use Illuminate\Support\Facades\Schema;

class loginadminController extends Controller
{
    public function index(Request $r)
    {
        // session_start();
        if(isset($r->leavebtn)){
            echo("you are logout!!!");
            $r->session()->forget('logadmin');
        }
        // if(isset()){
        //     unset();
        //     $mess = "please first login !";
        //     return view('admin.formLoginAdmin' , $mess);
        // }
        return view('admin.formLoginAdmin');
    }
    public function login(Request $r){
        // $temp = session()->get('logadmin');
        // if(!isset($temp)){
        $pass = $r->password;
        $email = $r->email;
        if(Admins::where([['email' , $email],['password' , $pass]])->first()){
            $admin = Admins::where([['email' , $email],['password' , $pass]])->first(); 
            $r->session()->put('logadmin',$admin->name);
            return redirect('dashbordadmin');
        }else{
            return redirect()->action('loginadminController@index');
        }
    // }
    // else{
    //     return redirect('loginadmin');
    // }
    }
}
