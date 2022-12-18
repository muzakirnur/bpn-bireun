<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $page = "Dashboard";
        return view('layouts.admin.dashboard', compact('page'));
    }
}
