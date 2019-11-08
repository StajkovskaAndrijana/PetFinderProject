<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Cat', 'Dog'];

        foreach($types as $type_name) {
            $typepet = new Type();
            $typepet->type = $type_name;
            $typepet->save();
        }
    }
}
