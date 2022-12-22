<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailSertifikat;
use App\Models\SuratUkur;
use Illuminate\Http\Request;

class SuratUkurController extends Controller
{
    public function index()
    {
        $page = "Data Surat Ukur";
        $suratUkur = DetailSertifikat::with('sertifikat', 'surat_ukur')->latest()->paginate(15);
        return view('layouts.admin.surat-ukur.index', compact('page', 'suratUkur'));
    }
}
