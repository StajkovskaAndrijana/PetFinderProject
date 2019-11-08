<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function pet(){
        return $this->hasOne(Pet::class);
    }
}
