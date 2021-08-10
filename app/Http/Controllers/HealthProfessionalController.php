<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\HealthProfessional;
use Illuminate\Http\Request;

class HealthProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionals = HealthProfessional::paginate(20);
        $facilities = HealthFacility::all();
        return view('care.index',['professionals'=>$professionals,'facilities'=>$facilities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professional = HealthProfessional::create([
            'first_name'=> $request->f_name,
            'last_name'=>$request->l_name,
            'title'=>$request->title,
            'phone'=>$request->phone,
            'qualifications'=>$request->qualifications,
            'health_facility_id'=>$request->facility,
            'user_id'=>$request->user
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthProfessional  $healthProfessional
     * @return \Illuminate\Http\Response
     */
    public function show(HealthProfessional $healthProfessional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthProfessional  $healthProfessional
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthProfessional $healthProfessional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HealthProfessional  $healthProfessional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthProfessional $healthProfessional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HealthProfessional  $healthProfessional
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthProfessional $healthProfessional)
    {
        //
    }
}
