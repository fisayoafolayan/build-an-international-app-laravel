<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'country', 'phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
