<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\VehicleRoute;


class SearchBooking extends Component
{
    public $vehicles;
    public $from_cities;
    public $to_cities;

    public $to;
    public $from;
    public $date;

    public function mount()
    {
        $this->vehicles = collect();
        $this->from_cities = collect();
        $this->to_cities = collect();
        $this->vehicle_root('from');

        $this->from = 0;
        $this->to = 0;
    }

    public function render()
    {
        return view('livewire.search-booking');
    }

    public function updatedFrom()
    {
        $this->vehicle_root('to');
    }

    public function vehicle_root($flag = "from")
    {
        if($flag == 'from')
        {
            $ids = VehicleRoute::pluck('from_city')->unique();
            $this->from_cities = City::whereIn('id',$ids)->get();
        }
        else if($flag == 'to')
        {
            $ids = VehicleRoute::where('from_city',$this->from)->pluck('to_city')->unique();
            $this->to_cities = City::whereIn('id',$ids)->get();
        }
    }


    public function submit()
    {
        $this->vehicles = VehicleRoute::where(['from_city'=> $this->from,'to_city'=> $this->to])->get();
    }
}
