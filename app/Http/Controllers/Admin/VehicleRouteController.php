<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use App\Models\VehicleRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\City;

class VehicleRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = VehicleRoute::orderby('id', 'DESC')->with('fromCity', 'toCity', 'vehicle')->get();
        return view('admin.root.index', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::get();
        $cities = City::get();
        return view("admin.root.create", compact('vehicles', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'vehicle_id' => 'required',
            'rate' => 'required'
        ]);

        $root = VehicleRoute::create([
            'from_city' => $request->from,
            'to_city' => $request->to,
            'vehicle_id' => $request->vehicle_id,
            'rate' => $request->rate,
        ]);
        return redirect("admin/root")->with("success", "Root Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleRoute  $vehicleRoute
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleRoute $vehicleRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleRoute  $vehicleRoute
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $root = VehicleRoute::find($id);
        $vehicles = Vehicle::pluck('title', 'id');
        $cities = City::get();
        return view("admin.root.edit", compact('root', 'vehicles', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleRoute  $vehicleRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $VehicleRoute = VehicleRoute::find($id);
        $request->validate($request, [
            'from' => 'required',
            'to' => 'required',
            'vehicle_id' => 'required',
            'rate' => 'required',
        ]);

        $VehicleRoute->from_city = $request->from;
        $VehicleRoute->to_city = $request->to;
        $VehicleRoute->vehicle_id = $request->vehicle_id;
        $VehicleRoute->rate = $request->rate;
        $VehicleRoute->update();

        return redirect("admin/root")->with("success", "Root Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleRoute  $vehicleRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleRoute $vehicleRoute)
    {
        //
    }
}
