<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Customer extends Authenticatable implements AuthenticatableContract
{
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'gender',
        'username',
        'password',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
