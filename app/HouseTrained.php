<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class HouseTrained extends Model
{
    public function pets() {
        return $this->hasMany(Pet::class);
    }
}
