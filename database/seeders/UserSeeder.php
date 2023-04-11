<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Edy Ridwan Hutagalung',
                'email' => 'edyridwanh@elistec.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dwi',
                'email' => 'dwi.febryansyah@elistec.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Agus',
                'email' => 'agus@elistec.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Kenny Cassandra',
                'email' => 'kenny@elistec.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Super Administrator',
                'email' => 'sa@elistec.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Administrator DE',
                'email' => 'admin.de@elistec.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Test 1',
                'email' => 'test1@elistec.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
