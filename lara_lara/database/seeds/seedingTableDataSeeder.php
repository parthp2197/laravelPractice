<?php

use Illuminate\Database\Seeder;
use App\seeding;

class seedingTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 1000; $i++)
        {
            seeding::create([
                'city' => str_random(15)
            ]);
        }
    }
}
