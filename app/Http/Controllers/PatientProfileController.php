<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Dose;
use App\Models\PatientProfile;
use Illuminate\Http\Request;

class PatientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = PatientProfile::paginate(20);
        $cities = City::all();

        return view('patient.index',['patients'=>$patients,'cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = PatientProfile::create([
            'first_name'=> $request->f_name,
            'last_name'=>$request->l_name,
            'id_number'=>$request->id,
            'age'=>$request->age,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city_id'=>$request->city,
            'history'=>$request->history
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = PatientProfile::where('id',$id)->first();

        $doses = Dose::where('patient_profile_id',$patient->id)->get();

        return view('patient.show',['patient'=>$patient,'doses'=>$doses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientProfile $patientProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientProfile $patientProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientProfile  $patientProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientProfile $patientProfile)
    {
        //
    }
}
