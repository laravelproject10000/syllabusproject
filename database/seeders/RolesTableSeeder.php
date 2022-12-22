<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_id'=>'1',
            'role_name' => 'Admin',

        ]);

        DB::table('roles')->insert([
            'role_id'=>'2',
            'role_name' => 'Staff',

        ]);

        DB::table('roles')->insert([
            'role_id'=>'3',
            'role_name' => 'Student',

        ]);
    }
}
