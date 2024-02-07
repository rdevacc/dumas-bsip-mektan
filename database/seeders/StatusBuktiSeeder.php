<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusBuktiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_buktis')->insert([
            [
                'nama' => 'Tidak Ada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
