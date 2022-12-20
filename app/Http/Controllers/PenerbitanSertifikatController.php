<?php

namespace App\Http\Controllers;

use App\Models\DetailSertifikat;
use App\Models\PenerbitanSertifikat;
use Illuminate\Http\Request;

class PenerbitanSertifikatController extends Controller
{
    public function index()
    {
        $page = "Data Penerbitan Sertifikat";
        $penerbitan = DetailSertifikat::with('sertifikat', 'penerbitan_sertifikat')->paginate(15);
        return view('layouts.admin.penerbitan.index', compact('page', 'penerbitan'));
    }
}
