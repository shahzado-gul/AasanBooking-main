<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Booking;
use App\Models\Vehicle;
use Livewire\Component;
use App\Models\Customer;
use App\Models\VehicleRoute;
use Illuminate\Support\Facades\Auth;

class EditBooking extends Component
{
    public $user;
    public $customers;
    public $cities;
    public $vehicles;
    public $from_cities;
    public $to_cities;
    public $statuses;

    public $booking_date;
    public $customer;
    public $from;
    public $to;
    public $vehicle;
    public $availabel_seat;
    public $reservation;
    public $rate;
    public $total = 0;
    public $cbooking;
    public $status;

    public function mount($booking)
    {
        // dd($booking);
        $this->cbooking = $booking;
        $this->user = Auth::user();
        if ($this->user->role == 'admin') {
            $this->customers = Customer::get();
        } else {
            $this->customers = Customer::where('email', $this->user->email)->get();
        }
        $this->cities = collect();
        $this->vehicles = Vehicle::get();
        $this->booking_date = now()->format('Y-m-d');
        $this->from_cities = collect();
        $this->to_cities = collect();
        $this->statuses = [
            '0'=>'Deactivate',
            '1'=>'Activate',
            '2'=>'Panding',
            '3'=>'Approve',
            '4'=>'Reject',
            '5'=>'Unpaid',
            '6'=>'Paid',
            '7'=>'Complete'
        ];

        $this->booking_date = $booking->booking_date;
        $this->customer = $booking->customer_id;
        $this->from = $booking->from_city;
        $this->to = $booking->to_city;
        $this->vehicle = $booking->vehicle_id;
        $this->availabel_seat = $booking->availabel_seat;
        $this->reservation = $booking->reservation;
        $this->status = $booking->status;
        $this->total = $booking->amount;

        $this->vehicle_root('from');
        $this->vehicle_root('to');
        $this->dataupdate();
    }

    public function render()
    {
        return view('livewire.edit-booking');
    }

    public function updatedvehicle($id)
    {
        $this->vehicle = $id;
        $this->dataupdate();
    }

    public function updatedbookingDate()
    {
        $this->dataupdate();
    }

    public function updatedfrom()
    {
        $this->dataupdate();
        $this->vehicle_root('to');
    }

    public function updatedto()
    {
        $this->dataupdate();
        $this->vehicle_array();
    }

    public function dataupdate()
    {
        $this->vehicle_array();
        $booked_seats = Booking::where([
            'booking_date' => $this->booking_date,
            'from_city' => $this->from,
            'vehicle_id' => $this->vehicle
        ])->sum('reservation');

        $avaliable_seats = Vehicle::where('id', $this->vehicle)->first()->availabel_seat ?? 0;
        $this->availabel_seat = $avaliable_seats - $booked_seats;
        $vehicle = VehicleRoute::where(['from_city' => $this->from, 'to_city' => $this->to, 'vehicle_id' => $this->vehicle])->first();
        $this->rate = $vehicle->rate ?? 0;
        $this->total_rate();
    }

    public function updatedreservation($val)
    {
        $a = $this->availabel_seat;
        if ($val >= $a) {
            $this->reservation = $a;
        }
        $this->total_rate();
    }

    public function total_rate()
    {
        if ($this->reservation > 0) {
            $this->total = $this->reservation * $this->rate;
        } else {
            $this->total = 0;
        }
    }

    public function vehicle_array()
    {
        $ids = VehicleRoute::where(['from_city' => $this->from, 'to_city' => $this->to])->pluck('vehicle_id')->unique();
        $this->vehicles = Vehicle::whereIn('id', $ids)->get();
    }

    public function vehicle_root($flag = "from")
    {
        if ($flag == 'from') {
            $ids = VehicleRoute::pluck('from_city')->unique();
            $this->from_cities = City::whereIn('id', $ids)->get();
        } else if ($flag == 'to') {
            $ids = VehicleRoute::where('from_city', $this->from)->pluck('to_city')->unique();
            $this->to_cities = City::whereIn('id', $ids)->get();
        }
    }

    public function submit()
    {
        $this->validate(
            [
                'booking_date' => 'required',
                'customer' => 'required',
                'from' => 'required',
                'to' => 'required',
                'vehicle' => 'required',
                'availabel_seat' => 'required|numeric',
                'reservation' => 'required|numeric|lte:availabel_seat',
                'rate' => 'required',
            ],
            [
                'reservation.lte' => 'The reservation must be less than or equal to the available seats.',
            ]
        );

        $booking = $this->cbooking;
        $booking->booking_date = $this->booking_date;
        $booking->from_city = $this->from;
        $booking->to_city = $this->to;
        $booking->vehicle_id = $this->vehicle;
        $booking->customer_id = $this->customer;
        $booking->preferred_payment = "cash";
        $booking->availabel_seat = ($this->availabel_seat + $this->cbooking->reservation) - $this->reservation;
        $booking->reservation = $this->reservation;
        $booking->amount = $this->total;
        $booking->status = $this->status;
        $booking->update();

        if ($this->user->role == 'admin') {
            return redirect('admin/booking')->with('success', 'Booking successfully created!');
        } else {
            return redirect('user/booking')->with('success', 'Booking successfully created!');
        }
    }
}
