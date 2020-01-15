<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\User;
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
        echo ('show : ' . $id);
        // $finds = User::find($id);
        // if($finds){
        //     $finds->delete();
        // }
        return redirect()->route('showUsers');
    }
    public function newpost(){
        
    }
    public function uploadFile(Request $r){
        if($r->file('upFileFromAdmin') == null){
            dd('dont uploding file');
        }else{
        $path = $r->file('upFileFromAdmin')->store('photos/else');
        // echo($path."<br>");
        $contents = Storage::get($path);
        $originalName = $r->file('upFileFromAdmin')->getClientOriginalName();
        $encName = pathinfo($path)['basename'];
        // echo($contents."<br>");
        echo($path."<br>");
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
        }
        return view('admin.admindashbord' , ['contents' => $contents]);
    }
}
