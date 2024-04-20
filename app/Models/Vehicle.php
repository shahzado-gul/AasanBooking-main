<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'registration_no',
        'model',
        'color',
        'seats',
        'availabel_seat',
        'status',
    ];
}
