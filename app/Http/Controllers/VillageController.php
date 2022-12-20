<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VillageController extends Controller
{
    public function getVillage(Request $request)
    {
        return DB::table('indonesia_villages')->where('district_code', $request->code)->get();
    }
}
