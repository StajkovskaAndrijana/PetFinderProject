<?php

use App\Coat_Length;
use Illuminate\Database\Seeder;

class CoatLengthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coat_lengths = ['Short Coated', 'Medium Coated', 'Long Coated', 'Curly Coated'];

        foreach($coat_lengths as $coat) {
            $coats = new Coat_Length();
            $coats->coat_length = $coat;
            $coats->save();
        }
    }
}
