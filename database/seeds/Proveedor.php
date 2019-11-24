<?php

use Illuminate\Database\Seeder;

class Proveedor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedores = factory(App\Models\Proveedor::class, 10)->create();
    }
}
