<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DasarPendaftaran;
use App\Models\PemegangHak;
use Illuminate\Http\Request;

class DasarPendaftaranController extends Controller
{
    public function index()
    {
        $page = "Dasar Pendaftaran";
        $dasar = DasarPendaftaran::paginate(15);
        return view('layouts.admin.dasar-pendaftaran.index', compact('page', 'dasar'));
    }
}
