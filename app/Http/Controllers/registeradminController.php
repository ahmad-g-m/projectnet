<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;

class registeradminController extends Controller
{
    public function index(){

        return view('admin.formRegAdmin');
    }

    public function saveReg(Request $r){
        $admins = new Admins;
        $admins->name = $r->name;
        $admins->age = $r->age;
        $admins->email = $r->email;
        $admins->password = $r->password;
        $admins->save();

        return redirect()->action('registeradminController@index');

    }
}
