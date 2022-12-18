<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        $page = "Data Sertifikat Tanah";
        $sertifikat = Sertifikat::paginate(15);
        return view('layouts.admin.sertifikat.index', compact('page', 'sertifikat'));
    }
}
