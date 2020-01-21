<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use App\User;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function index(Request $r , $id , $tick){
        if($tick == 'admin'){
            if($r->session()->has('logadmin') == false){
                // echo(" you login sir admin");
                return redirect('loginadmin');
            }
            $adminsearch = Admins::find($id);
            // $admin = $adminsearch->name;
            // dd($admin);
            return view('profile.profileShow' , ['tick'=>$tick , 'id'=>$id , 'admin'=>$adminsearch , 'error'=>9 , 'active1'=>'active',
            'active2'=>'','active2_1'=>'active','active2_2'=>'','active3'=>'']);
        }
        if($tick == 'user'){
            if($r->session()->has('loguser') == false){
                // echo(" you login sir admin");
                return redirect('loginuser');
            }
            $adminsearch = User::find($id);
            // $admin = $adminsearch->name;
            // dd($admin);
            return view('profile.profileShow' , ['tick'=>$tick , 'id'=>$id , 'admin'=>$adminsearch , 'error'=>9 , 'active1'=>'active',
            'active2'=>'','active2_1'=>'active','active2_2'=>'','active3'=>'']);
         }
    }
    public function changepassword(Request $r , $id , $tick){
        if($tick == 'admin'){
            $admin = Admins::find($id);
            $old = $admin->password;
            if($old == $r->currentpass){
                if($r->newpass == $r->repeatpass){
                    $admin->password = $r->newpass;
                    $admin->save();
                    $error = 0;
                }else{
                    $error = 2;
                }
            }else{
                $error = 1;
            }
            return view('profile.profileShow',['tick'=>$tick , 'error'=>$error , 'admin'=>$admin , 'id'=>$id ,'active1'=>'',
            'active2'=>'active','active2_1'=>'active' ,'active2_2'=>'' , 'active3'=>'' ]);
        }
        if($tick == 'user'){
            $admin = User::find($id);
            $old = $admin->password;
            if($old == $r->currentpass){
                if($r->newpass == $r->repeatpass){
                    $admin->password = $r->newpass;
                    $admin->save();
                    $error = 0;
                }else{
                    $error = 2;
                }
            }else{
                $error = 1;
            }
            return view('profile.profileShow',['tick'=>$tick , 'error'=>$error , 'admin'=>$admin , 'id'=>$id ,'active1'=>'',
            'active2'=>'active','active2_1'=>'active' ,'active2_2'=>'' , 'active3'=>'' ]);
        }
    }
    public function changeinfo(Request $r,$id , $tick){
        if($tick == 'admin'){
        $admin = Admins::find($id);
        $admin->name = $r->usernametxt;
        $admin->email = $r->emailtxt;
        $admin->age = $r->agetxt;
        $admin->save();
        return view('profile.profileShow',['tick'=>$tick , 'error'=> 9 , 'admin'=>$admin , 'id'=>$id ,'active1'=>'',
        'active2'=>'active','active2_1'=>'' ,'active2_2'=>'active' , 'active3'=>'' ]);
        }
        if($tick == 'user'){
            $admin = User::find($id);
            $admin->name = $r->usernametxt;
            $admin->email = $r->emailtxt;
            $admin->age = $r->agetxt;
            $admin->save();
            return view('profile.profileShow',['tick'=>$tick , 'error'=> 9 , 'admin'=>$admin , 'id'=>$id ,'active1'=>'',
            'active2'=>'active','active2_1'=>'' ,'active2_2'=>'active' , 'active3'=>'' ]); 
        }
    }
}
