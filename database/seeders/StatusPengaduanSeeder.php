<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_pengaduans')->insert([
            [
                'nama' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
