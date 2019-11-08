<?php

use App\HouseTrained;
use Illuminate\Database\Seeder;

class HouseTrainedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house_trained = ['Yes', 'No'];

        foreach($house_trained as $trained_name) {
            $trained_type = new HouseTrained();
            $trained_type->trained = $trained_name;
            $trained_type->save();
        }
    }
}
