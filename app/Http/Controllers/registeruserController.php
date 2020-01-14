<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registeruserController extends Controller
{
    public function index(){

        return view('user.formRegUser');
    }

    public function saveReg(Request $r){
        $users = new User;
        $users->name = $r->name;
        $users->age = $r->age;
        $users->email = $r->email;
        $users->password = $r->password;
        $users->save();

        return redirect()->action('registeruserController@index');

    }
}
