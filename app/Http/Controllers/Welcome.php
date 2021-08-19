<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\HealthFacility;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index(){
        $cities = City::all();
        $facilities = HealthFacility::all();

        return view('welcome',['cities'=>$cities,'facilities'=>$facilities]);
    }
}
