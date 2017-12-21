<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carscontroller extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars',compact(['cars']));
    }
    public function show($id)
   {
       $cars = Car::find($id);
       return view('cars.show',compact(['cars']));
   }
}
