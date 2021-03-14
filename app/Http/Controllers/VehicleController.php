<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleFormRequest;
use App\Vehicle;
use App\Vehicletype;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $types=Vehicletype::all();
        $vehicles=Vehicle::all();
        return view('vehicle.index',compact('vehicles','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Vehicletype::all();
        return view('vehicle.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleFormRequest $request)
    {
        $data=Vehicle::create($request->validated());
        return redirect()->route('vehicle.create')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types=Vehicletype::all();
        $vehicles=Vehicle::FindOrFail($id);
        return view('vehicle.edit',compact('vehicles','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                    $types=Vehicletype::all();
                $data=Vehicle::FindOrFail($id)->update($request->all());
                return redirect()->route('vehicle.index',compact('types'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete(Vehicle $vehicle){
     $vehicle->delete();
     return redirect()->route('vehicle.index');
    }
}
