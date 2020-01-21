<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Address;
use Illuminate\Support\Facades\Storage;

class carsHomeController extends Controller
{
    public function index()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
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

        return view('cars.category' , ['moclass' => 9 , 'all_cars' => $all_cars , 'slidecars'=>$find3cars , 'addresscars'=>$contents]);
    }
    public function indexSedanCars()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
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
        $find3cars = Cars::find([$car_id[0],$car_id[1],$car_id[2]]);//for slide show
        $contents = array();
        array_push($contents,Storage::get($address_arr[0]),Storage::get($address_arr[1]),Storage::get($address_arr[2]));

        return view('cars.category' , ['moclass' => 1 , 'all_cars' => $all_cars , 'slidecars'=>$find3cars , 'addresscars'=>$contents]);
    }
    public function showPageCars(Request $r , $id){
        if(Cars::find($id)){
        $show_car = Cars::find($id);
        //
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
        //
        $all_contents = array();
        if(Address::where('mark',$id)->first()){
            $address = Address::where('mark',$id)->get();
            foreach($address as $addr){
                $all_cont = Storage::get($addr->address);
                array_push($all_contents , $all_cont);
            }
        }
        return view('post.post',['id'=>$id , 'showcar'=>$show_car, 'allpaths'=>$all_contents ,'slidecars'=>$find3cars , 'addresscars'=>$contents]);
        }else{
            dd('not found !!!!!!!!!!!');
        }
    }
    public function indexClassicsCars()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
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

        return view('cars.category' , ['moclass' => 2 , 'all_cars' => $all_cars , 'slidecars'=>$find3cars , 'addresscars'=>$contents]);
    }
    public function indexSportsCars()
    {
      
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
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

        return view('cars.category' , ['moclass' => 3 , 'all_cars' => $all_cars ,  'slidecars'=>$find3cars , 'addresscars'=>$contents]);
    }
}
