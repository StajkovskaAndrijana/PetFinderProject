<?php

namespace App;

use App\Size;
use App\Type;
use App\User;
use App\Image;
use App\Gender;
use App\Country;
use App\Coat_Length;
use App\HouseTrained;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';

    protected $fillable = [
        'name', 'type_id', 'country_id', 'short_description', 'user_id', 'characteristics', 'coat_length_id' , 'trained_id', 'good_with', 'size_id', 'gender_id', 'long_description'];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function gender(){
        return  $this->belongsTo(Gender::class);
    }

    public function size(){
        return  $this->belongsTo(Size::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->hasMany(Image::class,'pet_id','id');
    }

    public function coatLength() {
        return $this->belongsTo(Coat_Length::class);
    }

    public function trained() {
        return $this->belongsTo(HouseTrained::class);
    }
}
