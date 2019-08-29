<?php

use App\Ingrediente;
use Illuminate\Database\Seeder;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ingrediente::class, 100)->create();
    }
}
