<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_date',
        'customer_id',
        'from_city',
        'to_city',
        'vehicle_id',
        'reservation',
        'amount',
        'preferred_payment',
        'status',
    ];

    public function fromCity()
    {
        return $this->hasOne(City::class, 'id', 'from_city');
    }

    public function toCity()
    {
        return $this->hasOne(City::class, 'id', 'to_city');
    }

    function vehicle()
    {
        return $this->hasOne(Vehicle::class, "id", 'vehicle_id');
    }

    // function customer()
    // {
    //     return $this->hasOne(Customer::class, "id", 'customer_id');
    // }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
