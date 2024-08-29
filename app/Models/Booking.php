<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'id',
        'customer_id',
        'name',
        'email',
        'check_in',
        'check_out',
        'room_type',
        'message',





        
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

