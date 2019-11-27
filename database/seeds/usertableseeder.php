<?php

use Illuminate\Database\Seeder;
use App\User;

class usertableseeder extends Seeder
{

    public function run()
    {
        //usuario con el rol de editor
        $editor = User::create([
        	'name' => 'editor',
        	'email' => 'editor@gmail.com',
        	'password' => bcrypt('123456')

        ]);

        $editor->assignRole('editor');

        //usuario con el rol de moderador
        $moderador = User::create([
        	'name' => 'moderador',
        	'email' => 'moderador@gmail.com',
        	'password' => bcrypt('123456')

        ]);

        $moderador->assignRole('moderador');

        //usuario con el rol de super admin

        $admin = User::create([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456')

        ]);

        $admin->assignRole('super-admin');
    }
}
