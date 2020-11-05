<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'dni' => '1234567890',
            'address' => 'Carrera 14 #55-03',
            'phone' => '3111234567',
        ]);

        DB::table('users')->insert([
            'name' => 'Jose',
            'last_name' => 'Meza',
            'email' => 'jmeza@admin.com',
            'password' => bcrypt('jmeza'),
            'dni' => '1234567890',
            'address' => 'Carrera 20 #45-32',
            'phone' => '3111234567',
        ]);
    }
}
