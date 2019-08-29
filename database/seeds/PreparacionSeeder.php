<?php

use App\Preparacion;
use Illuminate\Database\Seeder;

class PreparacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Preparacion::class, 100)->create();
    }
}
