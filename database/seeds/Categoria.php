<?php

use Illuminate\Database\Seeder;

class Categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = factory(App\Models\Categoria::class, 10)->create();
    }
}
