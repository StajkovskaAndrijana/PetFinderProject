<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user1 = new User();
        $user1->first_name = 'Andrijana';
        $user1->last_name = 'Stajkovska';
        $user1->country_id = rand(1, 10);
        $user1->postal_code = $faker->buildingNumber;
        $user1->email = 'andrijana_stajkovska@hotmail.com';
        $user1->password = bcrypt('Andrijana1');
        $user1->save();

        $user2 = new User();
        $user2->first_name = 'Tanja';
        $user2->last_name = 'Plancak';
        $user2->country_id = rand(1, 10);
        $user2->postal_code = $faker->buildingNumber;
        $user2->email = 'tanja_plancak@gmail.com';
        $user2->password = bcrypt('Tanja1');
        $user2->save();

        $user3 = new User();
        $user3->first_name = 'Nikolina';
        $user3->last_name = 'Tomevska';
        $user3->country_id = rand(1, 10);
        $user3->postal_code = $faker->buildingNumber;
        $user3->email = 'nikolina_tomevska@yahoo.com';
        $user3->password = bcrypt('Nikolina1');
        $user3->save();


    }
}
