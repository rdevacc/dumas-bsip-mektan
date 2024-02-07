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
                'id' => 1,
                'role_id' => 1,
                'nama' => 'Muhammad Rizky',
                'email' => 'rizky@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'role_id' => 2,
                'nama' => 'Ihsan A',
                'email' => 'ihsan@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'role_id' => 2,
                'nama' => 'Wiranto',
                'email' => 'wiranto@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'role_id' => 3,
                'nama' => 'Penanggung Jawab 1',
                'email' => 'test1@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'role_id' => 3,
                'nama' => 'Penanggung Jawab 2',
                'email' => 'test2@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'role_id' => 3,
                'nama' => 'Penanggung Jawab 3',
                'email' => 'test3@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
