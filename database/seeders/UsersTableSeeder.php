<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_name'=>'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);

        DB::table('users')->insert([
            'role_name'=>'Staff',
            'name' => 'deva',
            'email' => 'deva@gmail.com',
            'password' => bcrypt('pass@deva'),
        ]);

        DB::table('users')->insert([
            'role_name' => 'Student',
            'name'=>'madhu',
            'email' => 'madhu@gmail.com',
            'password' => bcrypt('pass@madhu'),
        ]);
    }
}
