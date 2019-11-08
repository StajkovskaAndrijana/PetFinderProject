<?php

use App\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = ['Female', 'Male'];

        foreach($genders as $gender_name) {
            $gender_type = new Gender();
            $gender_type->gender = $gender_name;
            $gender_type->save();
        }
    }
}
