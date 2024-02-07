<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DumasForm;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {             
       $this->call([
        UserSeeder::class,
        JenisPengaduanSeeder::class,
        StatusBuktiSeeder::class,
        StatusPengaduanSeeder::class,
        RoleSeeder::class,
       ]);

        DumasForm::factory(5000)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
