<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DasarPendaftaran;
use App\Models\DetailSertifikat;
use App\Models\PemegangHak;
use Illuminate\Http\Request;

class DasarPendaftaranController extends Controller
{
    public function index()
    {
        $page = "Dasar Pendaftaran";
        $dasar = DetailSertifikat::with('sertifikat', 'dasar_pendaftaran')->latest()->paginate(15);
        return view('layouts.admin.dasar-pendaftaran.index', compact('page', 'dasar'));
    }
}
