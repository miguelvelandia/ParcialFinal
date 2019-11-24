<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {

    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'contacto' => $faker->email,
        'telefono' => $faker->phoneNumber,
        'pagina_web' => $faker->url,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
