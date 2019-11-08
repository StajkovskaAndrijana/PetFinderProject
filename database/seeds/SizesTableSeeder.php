<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['Small', 'Medium', 'Big'];

        foreach($sizes as $size_name) {
            $size_type = new Size();
            $size_type->size = $size_name;
            $size_type->save();
        }
    }
}
