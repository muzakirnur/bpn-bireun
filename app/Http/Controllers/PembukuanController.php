<?php

namespace App\Http\Controllers;

use App\Models\Pembukuan;
use Illuminate\Http\Request;

class PembukuanController extends Controller
{
    public function index()
    {
        $page = "Data Pembukuan";
        $pembukuan = Pembukuan::paginate(15);
        return view('layouts.admin.pembukuan.index', compact('page', 'pembukuan'));
    }
}
