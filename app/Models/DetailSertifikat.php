<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSertifikat extends Model
{
    use HasFactory;

    public function dasar_pendaftaran()
    {
        return $this->belongsTo(DasarPendaftaran::class);
    }

    public function pembukuan()
    {
        return $this->belongsTo(Pembukuan::class);
    }

    public function pemegang_hak()
    {
        return $this->belongsTo(PemegangHak::class);
    }

    public function penerbitan_sertifikat()
    {
        return $this->belongsTo(PenerbitanSertifikat::class);
    }

    public function sertifikat()
    {
        return $this->belongsTo(Sertifikat::class);
    }

    public function surat_ukur()
    {
        return $this->belongsTo(SuratUkur::class);
    }
}
