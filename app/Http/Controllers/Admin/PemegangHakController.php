<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PemegangHak;
use Illuminate\Http\Request;

class PemegangHakController extends Controller
{
    public function index()
    {
        $page = "Data Pemegang Hak";
        $pemegang = PemegangHak::paginate(15);
        return view('layouts.admin.pemegang-hak.index', compact('page', 'pemegang'));
    }
}
