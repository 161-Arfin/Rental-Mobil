<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Car extends Model
{
    use Hasfactory;

    protected $fillable = [
        'name',
        'brand',
        'type',
        'year',
        'price_per_day',
        'image',
        'description',
    ];

    //relasi mobil ke booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
