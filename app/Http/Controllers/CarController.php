<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function all_cars(){
        return Car::all();
    }

    public function get_car($id){
        return Car::where('id',$id)->get();
    }

    public function random_car(){
        return Car::inRandomOrder()->limit(3)->get();
    }
}
