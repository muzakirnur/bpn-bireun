<?php

namespace App\Http\Controllers;

use App\Models\PemegangHak;
use App\Models\PenerbitanSertifikat;
use App\Models\Sertifikat;
use App\Models\SuratUkur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sertifikat = Sertifikat::all()->count();
        $pemegangHak = PemegangHak::all()->count();
        $suratUkur = SuratUkur::all()->count();
        $page = "Dashboard";
        return view('home', compact('page', 'sertifikat', 'pemegangHak', 'suratUkur'));
    }
}
