<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cars;
use App\Address;
use App\Admins;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $r)
    {
        $cars = Cars::all();
        $address = Address::all();
        $cars_for_post = array();
        $address_for_post = array();
        $c = 0;
        foreach($cars as $car){
            if(Address::where('mark',$car->id)->first()){
                $c++;
                $path = Address::where('mark',$car->id)->first();
                array_push($address_for_post,$path->address);
                $find = Cars::find($car->id);
                array_push($cars_for_post,$find);
            }
        }

        $slideshowcar = Cars::orderBy('id','desc')->take(10)->get();
        $address_arr = array();
        $car_id = array();
        $count = 0;
        foreach($slideshowcar as $sl){
            if(Address::where('mark',$sl->id)){
            $addr = Address::where('mark',$sl->id)->first();
            array_push($address_arr,$addr->address);
            array_push($car_id,$sl->id);
            $count++;
            }
            if($count == 3){
                break;
            }
        }  
        $find3cars = Cars::find([$car_id[0],$car_id[1],$car_id[2]]);
        $contents = array();
        array_push($contents,Storage::get($address_arr[0]),Storage::get($address_arr[1]),Storage::get($address_arr[2]));
        // dd($findcar[0]->brand);
        // dd($contents);
        return view('index' ,['carposts'=>$cars_for_post,'addressposts'=>$address_for_post,'max'=>$c,'slidecars'=>$find3cars , 'addresscars'=>$contents]);
    }


}
