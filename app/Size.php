<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function pet(){
        return $this->hasMany(Pet::class);
    }
}
