<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected  $table = 'images';

    public function pets() {
        return $this->belongsTo(Pet::class,'id','pet_id');
    }
}
