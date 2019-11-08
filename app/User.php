<?php

namespace App;

use App\Image;
use App\Country;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'first_name', 'last_name', 'country_id', 'phone_number', 'street_address', 'street_address_continued', 'city', 'postal_code', 'email', 'password', 'confirm_password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country(){
         return $this->belongsTo(Country::class);
    }

}
