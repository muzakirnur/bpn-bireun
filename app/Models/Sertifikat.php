<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    public function detail_sertifikat()
    {
        return $this->hasMany(DetailSertifikat::class);
    }
}
