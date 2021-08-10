<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\HealthProfessional;
use App\Models\PatientProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index(){
        $users = User::all();
        $patients = PatientProfile::all();
        $facilities = HealthFacility::all();
        $professionals = HealthProfessional::all();

        $professional = HealthProfessional::where('user_id',Auth::user()->id)->first();



        return view('dashboard',['users'=>$users,'patients'=>$patients,'facilities'=>$facilities,'professionals'=>$professionals,'professional'=>$professional]);
    }
}
