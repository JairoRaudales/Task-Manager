<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@correo.com',
                'password' => Hash::make('admin')
            ]);
            $admin -> assignRole('admin');
    
             
       

        $empleado = User::create([
            'name' => 'empleado',
            'email' => 'empleado@correo.com',
            'password' => Hash::make('empleado')
        ]);
        $empleado -> assignRole('empleado');
       /*  $super_admin = User::create([
            'name' => 'admin',
            'email' => 'admin@speaksmaster.net',
            'password' => Hash::make('admin')
        ]);
        $super_admin -> assignRole('admin');

        $employee = User::create([
            'name' => 'employee',
            'email' => 'employee@speaksmaster.net',
            'password' => Hash::make('employee')
        ]);
        $employee -> assignRole('employee'); */
    }
}
