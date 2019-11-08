<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CoatLengthsTableSeeder::class);
        $this->call(HouseTrainedsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(PetsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
