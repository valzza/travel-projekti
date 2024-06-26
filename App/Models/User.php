<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class User extends Model
{
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}