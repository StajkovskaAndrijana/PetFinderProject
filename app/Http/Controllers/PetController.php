<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Size;
use App\Gender;
use App\Country;
use App\Coat_Length;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function pet_profile(Request $request, $name) {
        $countries = Country::all();
        $pet = Pet::where('name', $name)->first();
        $images_pet = $pet->images()->get();

        return view('page_sections.pet_profile', compact('countries', 'pet', 'images_pet'));
    }

    public function search() {
        $countries = Country::all();
        $sizes = Size::all();
        $coat__lengths = Coat_Length::all();
        $genders = Gender::all();
        $pets = Pet::all();
        $pets = Pet::orderByRaw('RAND()')->get();
        $count = Pet::all()->count();

        $images_pet = [];
        foreach($pets as $value) {
            foreach($value->images as $image) {
                array_push($images_pet, $image);
                break;
            }
        }

        return view('page_sections.search', compact('countries', 'sizes', 'coat__lengths', 'genders', 'pets','count', 'images_pet'));
    }

    public function search_pet(Request $request) {
        $countries = Country::all();
        $sizes = Size::all();
        $coat__lengths = Coat_Length::all();
        $genders = Gender::all();
        $pets = Pet::all();

        $images_pet = [];
        foreach($pets as $value) {
            foreach($value->images as $image) {
                array_push($images_pet, $image);
                break;
            }
        }

        $count = Pet::all()->count();

        $pets = Pet::with('size', 'coatLength', 'gender');

        if($request->size > 0) {
            $pets->where('size_id', $request->size);
        }

        if($request->coat > 0) {
            $pets->where('coat_length_id', $request->coat);
        }

        if($request->gender > 0) {
            $pets->where('gender_id', $request->gender);
        }

        $pets = $pets->get();
        return view('page_sections.search', compact('countries', 'sizes', 'coat__lengths', 'genders', 'images_pet', 'count', 'pets'));
    }
}
