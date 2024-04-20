<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRoute extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_city',
        'to_city',
        'rate',
        'vehicle_id',
        'status,'
    ];

    /**
     * Get the city for root.
     */
    public function fromCity()
    {
        return $this->hasOne(City::class, 'id', 'from_city');
    }

    public function fromCities()
    {
        return $this->hasMany(City::class, 'id', 'from_city');
    }

    public function toCity()
    {
        return $this->hasOne(City::class, 'id', 'to_city');
    }

    public function toCities()
    {
        return $this->hasMany(City::class,'id','to_city');
    }

    function vehicle()
    {
        return $this->hasOne(Vehicle::class, "id", 'vehicle_id');
    }
}
