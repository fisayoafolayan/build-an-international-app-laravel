<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id', 'destination_id', 'number_of_tourists', 'visit_date'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'visit_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}