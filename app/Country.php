<?php

namespace App;

use App\Pet;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function users() {
        return $this->hasMany(User::class);
    }

    public function pet(){
        return $this->hasMany(Pet::class);
    }
}
