<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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
            'email' => 'zahraaa@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        DB::table('manage_features')->insert([
            'name_feature' => 'about',
            'active' => true,
        ]);

        DB::table('manage_features')->insert([
            'name_feature' => 'division',
            'active' => true,
        ]);
        
        DB::table('manage_features')->insert([
            'name_feature' => 'publication',
            'active' => true,
        ]);

        DB::table('manage_features')->insert([
            'name_feature' => 'facility',
            'active' => true,
        ]);
    }
}
