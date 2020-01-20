<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class userHomeController extends Controller
{
    public function index(Request $r){
        if($r->session()->has('loguser')){
        // echo(" you login sir admin");
        $iduser = $r->session()->get('iduser');
        $user = User::find($iduser);
        // dd($user->id);
        return view('profile.profileShow' , ['id'=>$user->id , 'admin'=>$user , 'error'=>9 , 'active1'=>'active',
        'active2'=>'','active2_1'=>'active','active2_2'=>'','active3'=>'']);
        }else{
            return redirect('loginuser');
        }
    }
    public function adminprofile(Request $r , $id){
        if($r->session()->has('loguser') == false){
            // echo(" you login sir admin");
            return redirect('loginuser');
        }
        $user = User::find($id);

        // $admin = $adminsearch->name;
        // dd($admin);
        return view('profile.profileShow' , ['id'=>$user->id , 'admin'=>$user , 'error'=>9 , 'active1'=>'active',
        'active2'=>'','active2_1'=>'active','active2_2'=>'','active3'=>'']);
    }
    public function changepassword(Request $r , $id){
        $user = User::find($id);
        $old = $user->password;
        if($old == $r->currentpass){
            if($r->newpass == $r->repeatpass){
                $user->password = $r->newpass;
                $user->save();
                $error = 0;
            }else{
                $error = 2;
            }
        }else{
            $error = 1;
        }
        return view('profile.profileShow',['error'=>$error , 'admin'=>$user , 'id'=>$id ,'active1'=>'',
        'active2'=>'active','active2_1'=>'active' ,'active2_2'=>'' , 'active3'=>'' ]);
    }
    public function changeinfo(Request $r,$id){
        $user = User::find($id);
        $user->name = $r->usernametxt;
        $user->email = $r->emailtxt;
        $user->age = $r->agetxt;
        $user->save();
        return view('profile.profileShow',['error'=> 9 , 'admin'=>$user , 'id'=>$user->id ,'active1'=>'',
        'active2'=>'active','active2_1'=>'' ,'active2_2'=>'active' , 'active3'=>'' ]);
    }
}
