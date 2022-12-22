<?php

namespace App\Http\Controllers;

use App\Models\DetailSertifikat;
use App\Models\Pembukuan;
use Illuminate\Http\Request;

class PembukuanController extends Controller
{
    public function index()
    {
        $page = "Data Pembukuan";
        $pembukuan = DetailSertifikat::with('sertifikat', 'pembukuan')->latest()->paginate(15);
        return view('layouts.admin.pembukuan.index', compact('page', 'pembukuan'));
    }
}
