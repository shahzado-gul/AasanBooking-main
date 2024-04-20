<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'phone2',
        'address',
        'photo',
        'status',
    ];

    // function booking()
    // {
    //     return $this->hasOne(Booking::class, "customer_id", 'id');
    // }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
