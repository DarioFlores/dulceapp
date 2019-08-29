<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->vaciarTablas([
            'unidads',
            'ingredientes',
            'productos',
            'descartables',
            'preparacions',
            'producto_ingredientes',
            'producto_preparacions',
            'producto_descartables',
            'preparacion_ingredientes',

        ]);

        $this->call(UnidadSeeder::class);
        $this->call(IngredienteSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(DescartableSeeder::class);
        $this->call(PreparacionSeeder::class);
        $this->call(ProductoIngredienteSeeder::class);
        $this->call(ProductoPreparacionSeeder::class);
        $this->call(ProductoDescartableSeeder::class);
        $this->call(PreparacionIngredienteSeeder::class);

    }

    /**
     * @param $tablas
     */
    protected function vaciarTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
