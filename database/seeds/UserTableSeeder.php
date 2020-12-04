<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('rol_user')->truncate();
        $adminRol=Rol::where('name','admin')->first();

        $admin=User::create([
        'name'=>'admin',
        'activo'=>true,
        'email'=>'admin@email.com',
        'password' => bcrypt('1'),
        ]);

        $admin->rol()->attach($admin);
    }
}
