<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class carsHomeController extends Controller
{
    public function index()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
        return view('cars.showclassCars' , ['moclass' => 9 , 'all_cars' => $all_cars]);
    }
    public function indexc()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
        return view('cars.showclassCars' , ['moclass' => 1 , 'all_cars' => $all_cars]);
    }
    public function indexh()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
        return view('cars.showclassCars' , ['moclass' => 2 , 'all_cars' => $all_cars]);
    }
    public function indexm()
    {
        $all_cars = Cars::all();
        // foreach($all_cars as $car){
        //     echo($car->name);
        //     echo("<br>");
        // }
        return view('cars.showclassCars' , ['moclass' => 3 , 'all_cars' => $all_cars]);
    }
}
