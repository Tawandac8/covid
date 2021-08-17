<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index(){
        $cities = City::all();
        
        return view('welcome',['cities'=>$cities]);
    }
}
