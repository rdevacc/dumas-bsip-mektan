<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_pengaduans')->insert([
            [
                'pj_id' => 1,
                'nama' => 'Layanan Pengujian Alsintan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pj_id' => 2,
                'nama' => 'Layanan Perpustakaan BSIP Mektan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pj_id' => 3,
                'nama' => 'Layanan TI BSIP Mektan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
