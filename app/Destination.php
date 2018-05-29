<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name', 'image', 'location', 'description'
    ];
    protected $appends = ['translated_description'];

    protected $casts = [
        'description' => 'array'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = json_encode($value);
    }


    public function getTranslatedDescriptionAttribute()
    {    
        return $this->description[app()->getLocale()];
    }
}
