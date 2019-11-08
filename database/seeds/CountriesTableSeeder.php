<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ['Macedonia', 'Serbia', 'Montenegro', 'Croatia', 'Bosna and Herzegovina', 'Slovenia', 'Bulgaria', 'Greece', 'Albania', 'Turkey'];

        foreach($countries as $country_name) {
            $country = new Country();
            $country->name = $country_name;
            $country->save();
        }
    }
}
