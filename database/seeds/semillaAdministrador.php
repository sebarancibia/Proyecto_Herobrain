<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class semillaAdministrador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'rol1' => 'administrador',
            'rol2' => '',
            'activo' => true,
            'email' => 'admin@email.com',
            'password' => bcrypt('1'),

        ]);
    }
}
