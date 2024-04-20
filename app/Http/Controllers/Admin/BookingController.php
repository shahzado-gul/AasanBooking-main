<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Booking;
use App\Models\Vehicle;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('id', 'DESC')->with('customer')->get();
        return view('admin.booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::get();
        $vehicles = Vehicle::get();
        $cities = City::get();
        return view("admin.booking.create", compact('customers', 'vehicles', 'cities'));
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
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required',
            'vehicle' => 'required',
            'reservation' => 'required',
            'rate' => 'required',
            'status' => 0,
        ]);
        $available = $request->availabel_seat - $request->reservation;
        $vehicle = Vehicle::find($request->vehicle);
        $vehicle->update(['availabel_seat' => $available]);

        $booking = Booking::create([
            'booking_date' => $request->booking_date,
            'customer_id' => $request->customer,
            'from_city' => $request->from,
            'to_city' => $request->to,
            'vehicle_id' => $request->vehicle,
            'reservation' => $request->reservation,
            'rate' => $request->rate,
        ]);

        return redirect('admin/booking')->with("success", "Booking Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('admin.booking.ticket-print',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $customers = Customer::pluck('first_name', 'id');
        $vehicles = Vehicle::pluck('title', 'id');
        $cities = City::pluck('city_name', 'id');
        return view('admin.booking.edit', compact('booking', 'customers', 'vehicles', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        Booking::find($id)->update([
            'booking_date' => $request->booking_date,
            'customer_id' => $request->customer,
            'from_city' => $request->from,
            'to_city' => $request->to,
            'vehicle_id' => $request->vehicle,
            'reservation' => $request->reservation,
            'rate' => $request->rate,
            'status' => $request->status,
        ]);
        return redirect('admin/booking')->with('Success', "Vehicle Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
