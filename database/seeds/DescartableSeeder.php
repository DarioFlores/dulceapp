<?php

use App\Descartable;
use Illuminate\Database\Seeder;

class DescartableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Descartable::class, 100)->create();
    }
}
