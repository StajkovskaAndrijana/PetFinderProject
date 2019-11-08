<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class Coat_Length extends Model
{
    public function pets() {
        return $this->hasMany(Pet::class);
    }
}
