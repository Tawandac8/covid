<?php

namespace App\Http\Controllers;

use App\Models\Dose;
use App\Models\HealthFacility;
use App\Models\HealthProfessional;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class DoseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $facilities = HealthFacility::all();
        $professionals = HealthProfessional::all();
        $vaccines = Vaccine::all();
        $id = $request->patient;
        return view('dose.create',['patient'=>$id,'professionals'=>$professionals,'facilities'=>$facilities,'vaccines'=>$vaccines]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dose = Dose::create([
            'dose_number'=>$request->dose,
            'health_professional_id'=>$request->professional,
            'health_facility_id'=>$request->facility,
            'vaccine_id'=>$request->vaccine,
            'patient_profile_id'=>$request->patient
        ]);

        return redirect(route('patients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function show(Dose $dose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function edit(Dose $dose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dose $dose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dose $dose)
    {
        //
    }
}
