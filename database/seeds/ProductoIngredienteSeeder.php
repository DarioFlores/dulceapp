<?php

use App\ProductoIngrediente;
use Illuminate\Database\Seeder;

class ProductoIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductoIngrediente::class, 100)->create();
    }
}
