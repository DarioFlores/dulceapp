<?php

use App\PreparacionIngrediente;
use Illuminate\Database\Seeder;

class PreparacionIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PreparacionIngrediente::class, 100)->create();
    }
}
