<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Krucas\LaravelUserEmailVerification\Contracts\RequiresEmailVerification as RequiresEmailVerificationContract;
use Krucas\LaravelUserEmailVerification\RequiresEmailVerification;

class User extends Authenticatable implements RequiresEmailVerificationContract
{
    use RequiresEmailVerification;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
