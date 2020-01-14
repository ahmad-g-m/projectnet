<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\User;

class adminHomeController extends Controller
{
    public function index(Request $r){
        if(session()->has('logadmin')){
        // echo(" you login sir admin");
        return view('admin.admindashbord');
        }else{
            return redirect('loginadmin');
        }
    }
    public function showUsers(){
        $user = User::all();
        $count = User::count();
        return view('admin.admindashbord' , ['showuser' => 'show' , 'users' => $user , 'count' => $count]);
    }
    public function deleteuser($id){
        echo ('show : ' . $id);
        // $finds = User::find($id);
        // if($finds){
        //     $finds->delete();
        // }
        return redirect()->route('showUsers');
    }
    public function newpost(){
        
    }
}
