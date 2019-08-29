<?php

use App\ProductoPreparacion;
use Illuminate\Database\Seeder;

class ProductoPreparacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductoPreparacion::class, 100)->create();
    }
}
