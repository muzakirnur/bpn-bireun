<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    public function index()
    {
        $page = "Data Sertifikat Tanah";
        $sertifikat = Sertifikat::paginate(15);
        return view('layouts.admin.sertifikat.index', compact('page', 'sertifikat'));
    }

    public function create()
    {
        $kecamatan = DB::table('indonesia_districts')->where('city_code', 1111)->get();
        $page = "Tambah Sertifikat Tanah";
        return view('layouts.admin.sertifikat.create', compact('page', 'kecamatan'));
    }
}
