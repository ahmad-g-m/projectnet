<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Cars;
use App\Address;
use App\Admins;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class adminHomeController extends Controller
{
    public function index(Request $r){
        if($r->session()->has('logadmin')){
        // echo(" you login sir admin");
        $idadmin = $r->session()->get('id');
        $admin = Admins::find($idadmin);
        return view('admin.admindashbord' , ['idadmin'=>$idadmin , 'user'=> $admin]);
        }else{
            return redirect('loginadmin');
        }
    }
    // public function adminprofile(Request $r , $id){
    //     if($r->session()->has('logadmin') == false){
    //         // echo(" you login sir admin");
    //         return redirect('loginadmin');
    //     }
    //     $adminsearch = Admins::find($id);
    //     // $admin = $adminsearch->name;
    //     // dd($admin);
    //     return view('profile.profileShow' , ['id'=>$id , 'admin'=>$adminsearch , 'error'=>9 , 'active1'=>'active',
    //     'active2'=>'','active2_1'=>'active','active2_2'=>'','active3'=>'']);
    // }
    // public function changepassword(Request $r , $id){
    //     $admin = Admins::find($id);
    //     $old = $admin->password;
    //     if($old == $r->currentpass){
    //         if($r->newpass == $r->repeatpass){
    //             $admin->password = $r->newpass;
    //             $admin->save();
    //             $error = 0;
    //         }else{
    //             $error = 2;
    //         }
    //     }else{
    //         $error = 1;
    //     }
    //     return view('profile.profileShow',['error'=>$error , 'admin'=>$admin , 'id'=>$id ,'active1'=>'',
    //     'active2'=>'active','active2_1'=>'active' ,'active2_2'=>'' , 'active3'=>'' ]);
    // }
    // public function changeinfo(Request $r,$id){
    //     $admin = Admins::find($id);
    //     $admin->name = $r->usernametxt;
    //     $admin->email = $r->emailtxt;
    //     $admin->age = $r->agetxt;
    //     $admin->save();
    //     return view('profile.profileShow',['error'=> 9 , 'admin'=>$admin , 'id'=>$id ,'active1'=>'',
    //     'active2'=>'active','active2_1'=>'' ,'active2_2'=>'active' , 'active3'=>'' ]);
    // }
    public function showUsers(Request $r){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        $user = User::all();
        $count = User::count();
        $idadmin = $r->session()->get('id');
        // $user2 = User::find($idadmin);
        return view('admin.admindashbord' , ['showuser' => 'show' , 'users' => $user , 'count' => $count , 'idadmin'=>$idadmin]);
    }
    public function deleteuser(Request $r , $id){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        // dd ('show : ' . $id);
        // $finds = User::find($id);
        // if($finds){
        //     $finds->delete();
        // }
        User::find($id)->delete();
        return redirect()->route('showUsers');
    }
    public function edituser(Request $r , $id){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        // dd($id);
    //  dd(User::find($id)->name);
    $userBeforedit = User::find($id);
    if(isset($r->editBtn)){
        $user_edit = User::find($id);
        $user_edit->name = $r->name;
        $user_edit->age = $r->age;
        $user_edit->email = $r->email;
        $user_edit->password = $r->password;
        $user_edit->save();
        $user_after_edit = User::find($id);
        return view('admin.adminEditUser',['success'=>'success' , 'id'=>$id , 'user' =>$user_after_edit]);
    }
    return view('admin.adminEditUser' , ['id'=>$id , 'user'=>$userBeforedit]);
    }
    public function editCheck(Request $r){
        // if(isset($r->editBtn)){
        //     $user_edit = User::
        // }else{
        //     return redirect('dashbordadmin')
        // }
    }
    public function newpost(Request $r){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        return view('admin.newPostAdmin');
    }
    public function uploadFile(Request $r){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        if($r->file('upFileFromAdmin') == null){
            dd('dont uploding file');
        }else{
            $cars = new Cars();
        if(isset($r->brand)){
            $cars->brand = $r->brand;
        }
        if(isset($r->name)){
            $cars->name = $r->name;
        }
        if(isset($r->model)){
            $cars->model = $r->model;
        }
        if(isset($r->price)){
            $cars->price = $r->price;
        }
        if(isset($r->year)){
            $cars->year = $r->year;
        }
        if(isset($r->time0to100)){
            $cars->time0to100 = $r->time0to100;
        }
        if(isset($r->transmission)){
            $cars->transmission = $r->transmission;
        }
        if(isset($r->fueltype)){
            $cars->fueltype = $r->fueltype;
        }
        if(isset($r->enginepowers)){
            $cars->enginepowers = $r->enginepowers;
        }
        if(isset($r->numbercylinder)){
            $cars->numbercylinder = $r->numbercylinder;
        }
        if(isset($r->mark)){
            $cars->mark = $r->mark;
        }
        if(isset($r->moredetail)){
            $cars->moredetail = $r->moredetail;
        }
        $cars->save();
        echo("<br>");
        // echo($originalName."<br>");
        // $name = Storage::put('file.jpeg' , $contents);
        // echo($name."<br>");
        // echo(pathinfo($path)['basename']);
        // dd(Storage::url('photos\else\5FEl6nROVpape15BUu8hH5cnxMVFHyxn1QQ0TbKu.jpeg'));
        // dd(Storage::size('photos\else\5FEl6nROVpape15BUu8hH5cnxMVFHyxn1QQ0TbKu.jpeg'));
        // dd(Storage::getVisibility('photos\else\5FEl6nROVpape15BUu8hH5cnxMVFHyxn1QQ0TbKu.jpeg'));
        // dd(Storage::fileName('photos\else\5FEl6nROVpape15BUu8hH5cnxMVFHyxn1QQ0TbKu.jpeg'));
        // dd($contents["filename"]);
        // echo("<img src ='{{$contents}}'");
        // dd($contents);
        $cars_2 = new Cars();
        $max_id = $cars_2->max('id');
        // $path = $r->file('upFileFromAdmin')->store('photos/else');
        // echo($path."<br>");
        $files = $r->file('upFileFromAdmin');
        foreach($files as $file){
            $address_1 = new Address();
            $path = $file->store('photos/else');
            $address_1->address = $path;
            $address_1->mark = $max_id;
            $address_1->save();
            $contents = Storage::get($path);
            // $originalName = $r->file('upFileFromAdmin')->getClientOriginalName();
            $encName = pathinfo($path)['basename'];
            // echo($contents."<br>");
            echo($path."<br>");
        }

        }//end if upFileFromAdmin
        $test = Address::where('mark' , $max_id)->get();
        // $content2 = Storage::get($test->address);
        return view('admin.newPostAdmin' , ['contents' => $test , 'max_id'=> $max_id]);
    }

    public function editOrDeletepost(Request $r){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
            // dd('hi');
        if($r->editOrDeletePostCarsBtn == 'cars'){
             $edit_cars = Cars::all();
        }
        if($r->editOrDeletePostTruckBtn == 'trucks'){
            // $edit_cars = Cars::all();
        }
        if($r->editOrDeletePostMotorBtn == 'motorcycles'){
            // $edit_cars = Cars::all();
        }

        return view('admin.editOrDeletePost' , ['cars'=>$edit_cars]);
        // if(!isset($r->editOrDeletePostBtn)){
        //     return redirect()->action('loginAdminController@index');
        // }else{
        //     return view('admin.deleteOrEditPost');
        // }
    }
    public function deletePost(Request $r , $id){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        Cars::find($id)->delete();//delete car
        $address = Address::where('mark',$id)->get();
        foreach($address as $addr){//delete address
            $addr->delete();
        }
        return redirect()->route('editdeletepost',['editOrDeletePostCarsBtn'=>'cars']);
    }
    public function editPost(Request $r , $id){
        if($r->session()->has('logadmin') == false){
            // echo(" you login sir admin");
            return redirect('loginadmin');
        }
        $edit_car_before = Cars::find($id);
        if(isset($r->editPostBtn)){
            $edit_post = Cars::find($id);
            if(isset($r->brand)){
            $edit_post->brand = $r->brand;
            }
            if(isset($r->name)){
            $edit_post->name = $r->name;
            }
            if(isset($r->model)){
            $edit_post->model = $r->model;
            }
            if(isset($r->price)){
            $edit_post->price = $r->price;
            }
            if(isset($r->year)){
            $edit_post->year = $r->year;
            }
            if(isset($r->time0to100)){
            $edit_post->time0to100 = $r->time0to100;
            }
            if(isset($r->transmission)){
            $edit_post->transmission = $r->transmission;
            }
            if(isset($r->fueltype)){
            $edit_post->fueltype = $r->fueltype;
            }
            if(isset($r->enginepowers)){
            $edit_post->enginepowers = $r->enginepowers;
            }
            if(isset($r->numbercylinder)){
            $edit_post->numbercylinder = $r->numbercylinder;
            }
            if(isset($r->moredetail)){
            $edit_post->moredetail = $r->moredetail;
            }
            $edit_post->save();
            $edited_post = Cars::find($id);
            return view('admin.editPostAdmin' , ['success'=>'success','cars'=>$edited_post , 'id'=>$id]);
        }
        return view('admin.editPostAdmin' , ['cars'=>$edit_car_before , 'id'=>$id]);
    }
}
