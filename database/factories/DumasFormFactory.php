<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DumasForm>
 */
class DumasFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'statusPengaduan_id' => rand(1,2),
            'pj_id' => rand(1,3),
            'pengaduan_id' => rand(1,3),
            'statusBukti_id' => rand(1,2),
            'nama' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'email' => $this->faker->freeEmail(),
            'alamat'=> $this->faker->streetAddress(),
            'jenis_lainnya' => null,
            'isi_pengaduan' => $this->faker->sentence(mt_rand(5,8)),
            'saran_dan_masukkan' => $this->faker->sentence(mt_rand(5,8)),
            'bukti_pengaduan' => null,
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'updated_at' => now(),
        ];
    }
}
