<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new User();
        $usuario->login = 'admin';
        $usuario->password = bcrypt('admin');
        $usuario->save();
    }
}
