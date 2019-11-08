<?php

use App\Pet;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 10; $i++) {
            $pet = new Pet();
            $pet->name = $faker->firstNameMale;
            $pet->user_id = rand(1, 3);
            $pet->type_id = rand(1, 2);
            $pet->country_id = rand(1, 10);
            $pet->short_description = $faker->sentence(10, true);
            $pet->characteristics = $faker->sentence(15, true);
            $pet->coat_length_id = rand(1, 4);
            $pet->trained_id = rand(1, 2);
            $pet->good_with = 'Dogs, Cats and Kids';
            $pet->size_id = rand(1, 3);
            $pet->gender_id = rand(1, 2);
            $pet->long_description = $faker->text(200);
            $pet->save();
        }
    }
}
