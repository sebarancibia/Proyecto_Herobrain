<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();
        Rol::create(['name'=>'administrador']);
        Rol::create(['name'=>'jefeCarrera']);
        Rol::create(['name'=>'profesor']);
        Rol::create(['name'=>'secretaria']);
        
    }
}
