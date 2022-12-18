<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratUkur;
use Illuminate\Http\Request;

class SuratUkurController extends Controller
{
    public function index()
    {
        $page = "Data Surat Ukur";
        $suratUkur = SuratUkur::paginate(15);
        return view('layouts.admin.surat-ukur.index', compact('page', 'suratUkur'));
    }
}
