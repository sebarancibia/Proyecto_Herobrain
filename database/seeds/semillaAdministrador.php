<?php

use Illuminate\Database\Seeder;

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
            'password' => bcrypt('12345678'),
            'carrera' =>'ninguna',
            'rut' =>'12123123-1'
            
            
        ]);
        $user=App\User::create([
            'name' => 'profe',
            'rol' => 'profesor',
            'activo' => true,
            'email' => 'p@email.com',
            'password' => bcrypt('12345678'),
            'carrera' =>'ninguna',
            'rut' =>'13123123-4'
            
            
        ]);
        $user=App\User::create([
            'name' => 'jefe',
            'rol' => 'jefeCarrera',
            'activo' => true,
            'email' => 'j@email.com',
            'password' => bcrypt('12345678'),
            'carrera' =>'ninguna',
            'rut' =>'14123123-1'
            
            
        ]);
        $user=App\User::create([
            'name' => 'secretaria',
            'rol' => 'secretaria',
            'activo' => true,
            'email' => 's@email.com',
            'password' => bcrypt('12345678'),
            'carrera' =>'ninguna',
            'rut' =>'15123123-1'
            
            
        ]);
    }
}