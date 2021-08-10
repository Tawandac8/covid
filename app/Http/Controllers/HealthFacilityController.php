<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\HealthFacility;
use Illuminate\Http\Request;

class HealthFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = HealthFacility::paginate(24);
        $cities = City::all();

        return view('facility.index',['facilities'=>$facilities,'cities'=>$cities]);
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
        $facility = HealthFacility::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'city_id'=>$request->city
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function show(HealthFacility $healthFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthFacility $healthFacility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthFacility $healthFacility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthFacility $healthFacility)
    {
        //
    }
}
