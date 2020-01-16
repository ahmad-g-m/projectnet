<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Cars;
use App\Address;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

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
        // dd ('show : ' . $id);
        // $finds = User::find($id);
        // if($finds){
        //     $finds->delete();
        // }
        User::find($id)->delete();
        return redirect()->route('showUsers');
    }
    public function edituser(Request $r , $id){
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
        return view('admin.newPostAdmin');
    }
    public function uploadFile(Request $r){
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

    public function editOrDeletepost(){
            // dd('hi');
        return redirect('dashbordadmin');
        // if(!isset($r->editOrDeletePostBtn)){
        //     return redirect()->action('loginAdminController@index');
        // }else{
        //     return view('admin.deleteOrEditPost');
        // }
    }
}
