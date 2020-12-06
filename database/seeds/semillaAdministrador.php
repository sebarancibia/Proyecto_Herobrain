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
        $user=App\User::create([
            'name' => 'admin',
            'rol' => 'administrador',
            'activo' => true,
            'email' => 'admin@email.com',
            'password' => bcrypt('1'),
            
        ]);
        
    }
}
