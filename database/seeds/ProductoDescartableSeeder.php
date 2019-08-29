<?php

use App\ProductoDescartable;
use Illuminate\Database\Seeder;

class ProductoDescartableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductoDescartable::class, 100)->create();
    }
}
