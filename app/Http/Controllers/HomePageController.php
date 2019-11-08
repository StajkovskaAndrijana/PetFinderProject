<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Country;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function showHomePage() {
        $countries = Country::all();
        $pets = Pet::all();
        $pets = Pet::orderByRaw('RAND()')->take(4)->get();

        $count = Pet::all()->count();

        $images_pet = [];
        foreach($pets as $value) {
            foreach($value->images as $image) {
                array_push($images_pet, $image);
                break;
            }
        }

        return view('index', compact('countries', 'pets', 'count', 'images_pet'));
    }
}
