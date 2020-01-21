<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registeruserController extends Controller
{
    public function index(){

        return view('user.signUp' , ['person'=>'user']);
    }

    public function saveReg(Request $r){
        if($r->reppassword == $r->password){
            $users = new User;
            $users->name = $r->name;
            $users->age = $r->age;
            $users->email = $r->email;
            $users->password = $r->password;
            $users->save();
        return redirect()->action('registeruserController@index');
        }else{
            return view('user.signUp',['error'=>1]);
        }

    }
}
