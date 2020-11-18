<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datosPrueba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'rol_usuario'=>'administrador',
            'activo'=>true,
            'email'=>'admin@email.com',
            'password' => bcrypt('1'),

        ]);
    }
}
