<?php

namespace Database\Factories;

use App\Models\DasarPendaftaran;
use App\Models\PemegangHak;
use App\Models\Sertifikat;
use App\Models\SuratUkur;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailSertifikatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $asal = array('Konversi', 'Pemberian Hak', 'Pemecahan Bidang', 'Pemisahan Bidang', 'Penggabungan Bidang');
        $rand = array_rand($asal, 1);
        $sertifikat = Sertifikat::factory()->create();
        $dasar = DasarPendaftaran::factory()->create();
        $suratUkur = SuratUkur::factory()->create();
        $pemegangHak = PemegangHak::factory()->create();
        return [
            'sertifikat_id' => $sertifikat->id,
            'nomor' => $sertifikat->nomor,
            'desa' => $sertifikat->desa,
            'tgl_berakhir_hak' => $this->faker->dateTimeBetween('-30 years', '+30 years'),
            'nib' => $this->faker->randomNumber(5, true),
            'asal_hak' => strtoupper($asal[$rand]),
            'dasar_pendaftaran_id' => $dasar->id,
            'surat_ukur_id' => $suratUkur->id,
            'penunjuk' => $this->faker->title(),
            'pemegang_hak_id' => $pemegangHak->id,
        ];
    }
}
