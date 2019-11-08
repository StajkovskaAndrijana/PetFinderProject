<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Size;
use App\Type;
use App\User;
use App\Image;
use App\Gender;
use App\Country;
use App\Coat_Length;
use App\HouseTrained;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddPetValidation;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserUpdateValidation;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function account() {
        $user = Auth::user();
        $countries = Country::all();
        return view('page_sections.account', compact('user', 'countries'));
    }

    public function saved_searches() {
        $user = Auth::user();
        $countries = Country::all();
        return view('page_sections.saved_searches', compact('user', 'countries'));
    }


    public function user_pprofile() {
        $user = User::with('country')->where('id', Auth::id())->first();
        $countries = Country::all();
        $types = Type::all();
        $coats = Coat_Length::all();
        $traineds = HouseTrained::all();
        $sizes = Size::all();
        $genders = Gender::all();

        $pet = Pet::with('type', 'coatLength', 'trained', 'size', 'gender')->where('user_id', Auth::id())->get();
        $images = [];

        foreach ($pet as $value) {

            foreach ($value->images as $image) {

                array_push($images, $image);
                break;

            }

        }

        return view('page_sections.user_profile', compact('user', 'countries', 'types', 'coats', 'traineds', 'sizes', 'genders', 'pet', 'images'));
    }


    public function user_update(UserUpdateValidation $request) {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $phone_number = $request->phone_number;
        $country_id = $request->country;
        $street_address = $request->street_address;
        $street_address_continued = $request->street_address_continued;
        $city = $request->city;
        $postal_code = $request->postal_code;
        $user = User::find(Auth::id());
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->phone_number = $phone_number;
        $user->country_id = $country_id;
        $user->street_address = $street_address;
        $user->street_address_continued = $street_address_continued;
        $user->city = $city;
        $user->postal_code = $postal_code;
        $user->save();

        return redirect()->back()->with('message', 'Your profile has been updated.');
    }



    public function pet_save(AddPetValidation $request){
        $pet = new Pet();
        $pet->name = $request->name;
        $pet->user_id = Auth::user()->id;
        $pet->type_id = $request->type;
        $pet->country_id = $request->country;
        $pet->short_description = $request->short_description;
        $pet->characteristics = $request->characteristics;
        $pet->coat_length_id = $request->coat;
        $pet->trained_id = $request->trained;
        $pet->good_with = $request->good_with;
        $pet->size_id = $request->size;
        $pet->gender_id = $request->gender;
        $pet->long_description = $request->long_description;

        $pet->save();

        $images = $request->image;
        foreach($images as $image) {
            $image->move('images', $image->getClientOriginalName());
            $tmp = new Image();
            $tmp->pet_id = $pet->id;
            $tmp->image = 'images/'.$image->getClientOriginalName();
            $tmp->save();
        }

         return back()->with('message', 'Your pet has been added successfully');

    }

    public function delete_pet($id) {
        Pet::where('id', $id)->delete();

        return back()->with('message', 'Your pet has been successfully deleted');
    }

}
