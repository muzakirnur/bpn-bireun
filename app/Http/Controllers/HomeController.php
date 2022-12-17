<?php

namespace App\Http\Controllers;

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
        $role = Auth::user()->is_admin;
        if ($role == true) {
            return redirect()->route('admin.dashboard');
        } else if ($role == false) {
            return redirect()->route('user.dashboard');
        }
        return redirect()->to('login');
    }
}
