<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DasarPendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dasar = array('Daftar Isian 202', 'Surat Keputusan', 'Permohonan Pemecahan Bidang', 'Permohonan Pemisahan Bidang', 'Permohonan Penggabungan Bidang');
        $rand = array_rand($dasar, 1);
        return [
            'dasar' =>  strtoupper($dasar[$rand]),
            'tanggal' => $this->faker->dateTimeThisDecade(),
            'nomor' => $this->faker->randomNumber(3, true),
        ];
    }
}
